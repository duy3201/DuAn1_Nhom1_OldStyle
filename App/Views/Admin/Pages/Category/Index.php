<?php

namespace App\Views\Admin\Pages\Category;

use App\Views\BaseView;

class Index extends BaseView
{
    public static function render($data = null)
    {
        // Get search query from the URL
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
        $itemsPerPage = 5; // Number of items per page
        $totalItems = count($data); // Total number of items
        $totalPages = ceil($totalItems / $itemsPerPage); // Total pages

        // Filter data based on search query
        if ($searchQuery) {
            $data = array_filter($data, function ($item) use ($searchQuery) {
                return stripos($item['name'], $searchQuery) !== false;
            });
            $totalItems = count($data); // Update total items after search
            $totalPages = ceil($totalItems / $itemsPerPage); // Update total pages
        }

        // Get the data for the current page
        $startIndex = ($currentPage - 1) * $itemsPerPage;
        $data = array_slice($data, $startIndex, $itemsPerPage);
?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">QUẢN LÝ LOẠI SẢN PHẨM</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h5 class="card-title">Danh sách danh mục sản phẩm</h5>
                                    </div>
                                    <div class="col-6">
                                        <form method="get" action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm danh mục" name="search" value="<?= htmlspecialchars($searchQuery) ?>">
                                                <div class="input-group-append">
                                                    <button class="btn btn-warning" type="submit">Tìm kiếm</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <?php if (count($data)) : ?>
                                    <div class="table-striped">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên</th>
                                                    <th class="col-2">Hình ảnh</th>
                                                    <th>Trạng thái</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $item) : ?>
                                                    <tr>
                                                        <td><?= $item['id'] ?></td>
                                                        <td><?= $item['name'] ?></td>
                                                        <td><img src="<?= APP_URL ?>/public/assets/admin/img/<?= $item['img'] ?>" alt="Hình danh mục" class="img-fluid"></td>
                                                        <td><?= ($item['status'] == 1) ? 'Hiển thị' : 'Ẩn' ?></td>
                                                        <td>
                                                            <a href="/admin/categoryproduct/<?= $item['id'] ?>" class="btn btn-primary">Sửa</a>
                                                            <form action="/admin/categoryproduct/<?= $item['id'] ?>" method="post" style="display: inline-block;" onsubmit="return confirm('Chắc chưa?')">
                                                                <input type="hidden" name="method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger text-white">Xoá</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pagination -->
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <?php
                                            $paginationRange = 2;
                                            $startPage = max(1, $currentPage - $paginationRange);
                                            $endPage = min($totalPages, $currentPage + $paginationRange);

                                            // Previous button
                                            if ($currentPage > 1) {
                                                echo '<li class="page-item"><a class="page-link" href="?page=' . ($currentPage - 1) . '&search=' . htmlspecialchars($searchQuery) . '">&laquo;</a></li>';
                                            } else {
                                                echo '<li class="page-item disabled"><span class="page-link">&laquo;</span></li>';
                                            }

                                            // Pages in range
                                            for ($i = $startPage; $i <= $endPage; $i++) {
                                                $activeClass = ($i == $currentPage) ? 'active' : '';
                                                echo '<li class="page-item ' . $activeClass . '"><a class="page-link" href="?page=' . $i . '&search=' . htmlspecialchars($searchQuery) . '">' . $i . '</a></li>';
                                            }

                                            // Next button
                                            if ($currentPage < $totalPages) {
                                                echo '<li class="page-item"><a class="page-link" href="?page=' . ($currentPage + 1) . '&search=' . htmlspecialchars($searchQuery) . '">&raquo;</a></li>';
                                            } else {
                                                echo '<li class="page-item disabled"><span class="page-link">&raquo;</span></li>';
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                <?php else : ?>
                                    <h4 class="text-center text-danger">Không có dữ liệu</h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>
