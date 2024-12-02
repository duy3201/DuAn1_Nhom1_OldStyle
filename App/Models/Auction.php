<?php

namespace App\Models;

class Auction extends BaseModel
{
    protected $table = 'auctions';
    protected $id = 'id';

    const STATUS_CLOSED = 0;   // Chưa bắt đầu
    const STATUS_OPEN = 1;     // Đã mở
    const STATUS_ENDED = 2;    // Đã kết thúc

    public function getAllAuction()
    {
        return $this->getAll();
    }

    public function getOneAuction($id)
    {
        return $this->getOne($id);
    }

    public function createAuction($data)
    {
        return $this->create($data);
    }

    public function updateAuction($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteAuction($id)
    {
        return $this->delete($id);
    }

    public function updateAuctionStatus()
    {
        try {
            $conn = $this->_conn->MySQLi();
            
            if (!$conn) {
                throw new \Exception('Database connection not established.');
            }

            $sqlOpen = "UPDATE $this->table 
                        SET status = ? 
                        WHERE start_time <= NOW() AND end_time > NOW() AND status = ?";
            $stmtOpen = $conn->prepare($sqlOpen);
            if (!$stmtOpen) {
                throw new \Exception('SQL prepare failed for opening auction.');
            }
            $statusOpen = self::STATUS_OPEN;
            $statusClosed = self::STATUS_CLOSED;
            $stmtOpen->bind_param('ii', $statusOpen, $statusClosed);
            $stmtOpen->execute();

            $sqlClose = "UPDATE $this->table 
                         SET status = ? 
                         WHERE end_time <= NOW() AND status = ?";
            $stmtClose = $conn->prepare($sqlClose);
            if (!$stmtClose) {
                throw new \Exception('SQL prepare failed for closing auction.');
            }
            $statusEnded = self::STATUS_ENDED;
            $stmtClose->bind_param('ii', $statusEnded, $statusOpen);
            $stmtClose->execute();

            return true;
        } catch (\Throwable $th) {
            error_log('Error updating auction status: ' . $th->getMessage());
            return false;
        }
    }

    public function getAuctionWithProductName($id)
    {
        try {
            $conn = $this->_conn->MySQLi();

            $sql = "SELECT auctions.*, products.name AS products_name
FROM $this->table
JOIN products ON auctions.product_id = products.id 
WHERE auctions.id = ?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                throw new \Exception('SQL prepare failed for fetching auction with product name.');
            }

            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_assoc();
        } catch (\Throwable $th) {
            error_log('Error fetching auction with product name: ' . $th->getMessage());
            return false;
        }
    }
    // public function getAllAuctionJoinProductName()
    // {
    //     try {
    //         $conn = $this->_conn->MySQLi();

    //         $sql = "SELECT auctions.*, products.name AS products_name
    //         FROM $this->table
    //        JOIN products ON auctions.product_id = products.id";
    //         $stmt = $conn->prepare($sql);
    //         if (!$stmt) {
    //             throw new \Exception('SQL prepare failed for fetching auction with product name.');
    //         }

    //         // $stmt->bind_param('i', $id);
    //         $stmt->execute();
    //         $result = $stmt->get_result();

    //         return $result->fetch_assoc();
    //     } catch (\Throwable $th) {
    //         error_log('Error fetching auction with product name: ' . $th->getMessage());
    //         return false;
    //     }
    // }

     public function getAllAuctionJoinProductName()
    {
        $result = [];
        try {
            // $sql = "SELECT * FROM $this->table";
            $sql = "SELECT auctions.*, products.name AS products_name, products.img AS product_img, products.description AS product_description
           FROM auctions
          JOIN products ON auctions.product_id = products.id";
            $result = $this->_conn->MySQLi()->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị tất cả dữ liệu: ' . $th->getMessage());
            return $result;
        }
    }
    public function getOneAuctionByStatus(int $id)
    {
        $result = [];
        try {
            $sql = "
                SELECT 
                    auctions.*, 
                    products.name AS products_name,
                    products.img AS products_img,
                    products.description AS products_description,
                    categories.name AS category_name
                FROM 
                    auctions
                INNER JOIN 
                    products ON auctions.product_id = products.id
                INNER JOIN 
                    categories ON products.id_category = categories.id
                WHERE 
                 auctions.id = ?";
            
            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);
            
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị chi tiết đấu giá: ' . $th->getMessage());
            return $result;
        }
    }
    // Trong model Auction.php
public function getAuctionHistory(int $auctionId)
{
    $result = [];
    try {
        $sql = "
            SELECT user_name, bid_price, bid_time
            FROM auction_bids
            WHERE auction_id = ?
            ORDER BY bid_time DESC
        ";

        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $auctionId);  // Liên kết ID đấu giá vào câu truy vấn
        $stmt->execute();

        // Lấy kết quả và trả về dưới dạng mảng
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } catch (\Throwable $th) {
        error_log('Lỗi khi lấy lịch sử đấu giá: ' . $th->getMessage());
    }
    return $result;
}



}
?>