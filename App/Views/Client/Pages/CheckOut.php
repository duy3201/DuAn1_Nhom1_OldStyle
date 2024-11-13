<?php

namespace App\Views\Client\Pages;

use App\Views\BaseView;

class CheckOut extends BaseView
{
    public static function render($data = null)
    {

?>
   <section class="checkout-section spad">
            <div class="container">
                <form action="#" class="checkout-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- <div class="checkout-content">
                                <a href="#" class="content-btn">Click Here To Login</a>
                            </div> -->
                            <h4>Chi tiết thanh toán</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fir">Tên<span>*</span></label>
                                    <input type="text" id="fir">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Họ<span>*</span></label>
                                    <input type="text" id="last">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun-name">Số điện thoại</label>
                                    <input type="text" id="cun-name">
                                </div>
                                <!-- <div class="col-lg-12">
                                    <label for="cun">Country<span>*</span></label>
                                    <input type="text" id="cun">
                                </div> -->
                                <div class="col-lg-12">
                                    <label for="street">Thành Phố<span>*</span></label>
                                    <input type="text" id="street" class="street-first">
                                    <!-- <input type="text"> -->
                                </div>
                                <!-- <div class="col-lg-12">
                                    <label for="zip">Postcode / ZIP (optional)</label>
                                    <input type="text" id="zip">
                                </div> -->
                                <div class="col-lg-12">
                                    <label for="town">Địa chỉ<span>*</span></label>
                                    <input type="text" id="town">
                                </div>
                                <div class="col-lg-12">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="text" id="email">
                                </div>
                                <!-- <div class="col-lg-6">
                                    <label for="phone">Phone<span>*</span></label>
                                    <input type="text" id="phone">
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="create-item">
                                        <label for="acc-create">
                                        Tạo tài khoản?
                                            <input type="checkbox" id="acc-create">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="checkout-content">
                                <input type="text" placeholder="Enter Your Coupon Code">
                            </div> -->
                            <div class="place-order m-5">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Sản phẩm <span>Tổng cộng</span></li>
                                        <li class="fw-normal">Combination x 1 <span>250.000VNĐ</span></li>
                                        <li class="fw-normal">Combination x 1 <span>250.000VNĐ</span></li>
                                        <li class="fw-normal">Combination x 1 <span>250.000VNĐ</span></li>
                                        <!-- <li class="fw-normal">Tổng cộng <span>250.000VNĐ</span></li> -->
                                        <li class="total-price">Tổng cộng <span>750.000VNĐ</span></li>
                                    </ul>

                                   <H4 class="text-center"> Thanh toán Quốc Tế</H4>

                                   <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-3">
            <img src="/public/img/PayPal.png" class="img-fluid glow-toggle" alt="">
        </div>
        <div class="col-3">
            <img src="/public/img/ApplePay.png" class="img-fluid glow-toggle" alt="">
        </div>
        <div class="col-3">
            <img src="/public/img/Visa.png" class="img-fluid glow-toggle" alt="">
        </div>
        <div class="col-3">
            <img src="/public/img/Mastercard.png" class="img-fluid glow-toggle" alt="">
        </div>
    </div>
</div>

<style>
    .glow-toggle {
        transition: filter 0.3s, transform 0.3s;
    }
    .glow-active {
        filter: brightness(1.3); /* Tăng độ sáng */
        transform: scale(1.05); /* Phóng to nhẹ */
    }
</style>

<script>
    // Lấy tất cả các ảnh có lớp 'glow-toggle'
    const images = document.querySelectorAll(".glow-toggle");

    // Thêm sự kiện click cho từng ảnh
    images.forEach(image => {
        image.addEventListener("click", function() {
            // Loại bỏ lớp 'glow-active' khỏi tất cả các ảnh khác
            images.forEach(img => img.classList.remove("glow-active"));
            // Thêm lớp 'glow-active' vào ảnh được nhấn
            this.classList.add("glow-active");
        });
    });
</script>


<H4 class="text-center m-4"> Phương thức thanh toán</H4>

<!-- <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-3">
            <img src="/public/img/Momo.jpg" class="img-fluid w-75" alt="">
        </div>
        <div class="col-3">
            <img src="/public/img/jpg" class="img-fluid " alt="">
        </div>
        <div class="col-3">
            <img src="/public/img/.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-3">
            <img src="/public/img/.jpg" class="img-fluid" alt="">
        </div>
    </div>
</div> -->

<div class="payment-check m-4">
    <div class="pc-item">
        <label for="pc-check">
            Thanh toán khi nhận hàng
            <input type="radio" id="pc-check" name="payment-method">
            <span class="checkmark"></span>
        </label>
    </div>

    <div class="pc-item">
        <label for="pc-paypal">
            Thẻ ATM nội địa / Internet Banking
            <input type="radio" id="pc-paypal" name="payment-method">
            <span class="checkmark"></span>
        </label>
    </div>

    <div class="pc-item">
        <label for="pc-tem">
            Thẻ tín dụng / Ghi nợ
            <input type="radio" id="pc-tem" name="payment-method">
            <span class="checkmark"></span>
        </label>
    </div>
</div>

                                    <!-- <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                           Thanh toán khi nhận hàng
                                                <input type="checkbox" id="pc-check">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Thẻ ATM nội địa / Internet Banking
                                                <input type="checkbox" id="pc-paypal">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div> -->
                                    </div>
                                    <div class="text-center order-btn m-4">
    <button type="button" class="site-btn place-btn" onclick="placeOrder()">Đặt hàng</button>
</div>

<script>
    function placeOrder() {
        alert("Đơn hàng của bạn đã được đặt thành công!");
    }
</script>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
?>