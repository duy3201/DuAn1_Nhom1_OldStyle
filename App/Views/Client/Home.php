<?php

namespace App\Views\Client;

use App\Views\BaseView;

class Home extends BaseView
{
    public static function render($data = null)
    {
?>



        <!-- Phần Hero Bắt Đầu -->

        <section class="hero-section">
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg" data-setbg="/public/assets/client/img/hero-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Túi xách, trẻ em</span>
                                <h1>Black Friday</h1>
                                <p>Hãy khám phá những sản phẩm tuyệt vời với mức giá ưu đãi trong dịp Black Friday.</p>
                                <a href="#" class="primary-btn">Mua ngay</a>
                            </div>

                        </div>
                        <div class="off-card">
                            <h2>Giảm giá <span>50%</span></h2>
                        </div>
                    </div>
                </div>
                <div class="single-hero-items set-bg" data-setbg="/public/assets/client/img/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Túi xách, trẻ em</span>
                                <h1>Black Friday</h1>
                                <p>Khám phá những ưu đãi hấp dẫn và sản phẩm tuyệt vời dành cho bạn trong mùa Black Friday này.</p>
                                <a href="#" class="primary-btn">Mua ngay</a>
                            </div>

                            <div class="off-card">
                                <h2>Giảm giá <span>50%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Phần Hero Kết Thúc -->

        <!-- Phần Banner Bắt Đầu -->
        <div class="banner-section spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="/public/assets/client/img/banner-1.jpg" alt="">
                            <div class="inner-text">
                                <h4>Nam</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="/public/assets/client/img/banner-2.jpg" alt="">
                            <div class="inner-text">
                                <h4>Nữ</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="/public/assets/client/img/banner-3.jpg" alt="">
                            <div class="inner-text">
                                <h4>Trẻ em</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Phần Banner Kết Thúc -->


        <!-- Phần Banner Nữ Bắt Đầu -->
        <!-- <section class="women-banner spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-large set-bg" data-setbg="/public/assets/client/img/products/women-large.jpg">
                            <h2>Nữ</h2>
                            <a href="#">Khám Phá Thêm</a>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="filter-control">
                            <ul>
                                <li class="active">Trang phục</li>
                                <li>Túi xách</li>
                                <li>Giày</li>
                                <li>Phụ kiện</li>
                            </ul>
                        </div>
                        <div class="product-slider owl-carousel">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/women-1.jpg" alt="">
                                    <div class="sale">Giảm giá</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Áo khoác</div>
                                    <a href="#">
                                        <h5>Pure Pineapple</h5>
                                    </a>
                                    <div class="product-price">
                                        $14.00
                                        <span>$35.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/women-2.jpg" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Giày</div>
                                    <a href="#">
                                        <h5>Áo len Guangzhou</h5>
                                    </a>
                                    <div class="product-price">
                                        $13.00
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/women-3.jpg" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Khăn</div>
                                    <a href="#">
                                        <h5>Pure Pineapple</h5>
                                    </a>
                                    <div class="product-price">
                                        $34.00
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/women-4.jpg" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Khăn</div>
                                    <a href="#">
                                        <h5>Giày Converse</h5>
                                    </a>
                                    <div class="product-price">
                                        $34.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Phần Banner Nữ Kết Thúc -->


        <!-- Phần Deal Của Tuần Bắt Đầu -->
        <section class="deal-of-week set-bg spad" data-setbg="/public/assets/client/img/time-bg.jpg">
            <div class="container">
                <div class="col-lg-6 text-center">
                <div class="section-title">
    <h2>Ưu Đãi Trong Tuần</h2>
    <p>Khám phá những sản phẩm tuyệt vời với ưu đãi hấp dẫn trong tuần này. Đừng bỏ lỡ cơ hội sở hữu chúng!</p>
    <div class="product-price">
        350.000 VNĐ
        <span>/ Túi xách</span>
    </div>
</div>

                    <div class="countdown-timer" id="countdown">
                        <div class="cd-item">
                            <span>56</span>
                            <p>Ngày</p>
                        </div>
                        <div class="cd-item">
                            <span>12</span>
                            <p>Giờ</p>
                        </div>
                        <div class="cd-item">
                            <span>40</span>
                            <p>Phút</p>
                        </div>
                        <div class="cd-item">
                            <span>52</span>
                            <p>Giây</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Mua Ngay</a>
                </div>
            </div>
        </section>
        <!-- Phần Deal Của Tuần Kết Thúc -->

        <!-- Phần Banner Nam Bắt Đầu -->
        <section class="man-banner spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-control">
                            <!-- <ul>
                                <li class="active">Trang phục</li>
                                <li>Túi xách</li>
                                <li>Giày</li>
                                <li>Phụ kiện</li>
                            </ul> -->
                            <div class="section-title">
                                <h2>Sản Phẩm Nổi Bậc</h2>
                            </div>
                        </div>
                        <div class="product-slider owl-carousel">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/man-1.jpg" alt="">
                                    <div class="sale">Giảm giá</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Áo khoác</div>
                                    <a href="#">
                                        <h5>Pure Pineapple</h5>
                                    </a>
                                    <div class="product-price">
                                        $14.00
                                        <span>$35.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/man-2.jpg" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Giày</div>
                                    <a href="#">
                                        <h5>Áo len Guangzhou</h5>
                                    </a>
                                    <div class="product-price">
                                        $13.00
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/man-3.jpg" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Khăn</div>
                                    <a href="#">
                                        <h5>Pure Pineapple</h5>
                                    </a>
                                    <div class="product-price">
                                        $34.00
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/public/assets/client/img/products/man-4.jpg" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Xem nhanh</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Khăn</div>
                                    <a href="#">
                                        <h5>Giày Converse</h5>
                                    </a>
                                    <div class="product-price">
                                        $34.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                        <div class="product-large set-bg m-large" data-setbg="/public/assets/client/img/products/man-large.jpg">
                            <h2>Nam</h2>
                            <a href="#">Khám Phá Thêm</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Phần Banner Nam Kết Thúc -->


        <!-- Phần Instagram Bắt Đầu -->
        <div class="instagram-photo">
            <div class="insta-item set-bg" data-setbg="/public/assets/client/img/insta-1.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#">colorlib_Collection</a></h5>
                </div>
            </div>
            <div class="insta-item set-bg" data-setbg="/public/assets/client/img/insta-2.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#">colorlib_Collection</a></h5>
                </div>
            </div>
            <div class="insta-item set-bg" data-setbg="/public/assets/client/img/insta-3.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#">colorlib_Collection</a></h5>
                </div>
            </div>
            <div class="insta-item set-bg" data-setbg="/public/assets/client/img/insta-4.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#">colorlib_Collection</a></h5>
                </div>
            </div>
            <div class="insta-item set-bg" data-setbg="/public/assets/client/img/insta-5.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#">colorlib_Collection</a></h5>
                </div>
            </div>
            <div class="insta-item set-bg" data-setbg="/public/assets/client/img/insta-6.jpg">
                <div class="inside-text">
                    <i class="ti-instagram"></i>
                    <h5><a href="#">colorlib_Collection</a></h5>
                </div>
            </div>
        </div>
        <!-- Phần Instagram Kết Thúc -->

        <!-- Phần Blog Mới Nhất Bắt Đầu -->
        <section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Bài Viết Mới</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="/public/assets/client/img/latest-1.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                4 Tháng 5, 2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Phong Cách Phố Xá Tốt Nhất Từ Tuần Lễ Thời Trang London</h4>
                        </a>
                        <p>Khám phá những phong cách nổi bật từ Tuần Lễ Thời Trang London, nơi những xu hướng mới nhất được trình diễn trên các con phố.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="/public/assets/client/img/latest-2.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                4 Tháng 5, 2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Hướng Dẫn Của Vogue Về Giày Mùa Thu/Đông 2019</h4>
                        </a>
                        <p>Cùng khám phá những đôi giày mới nhất trong mùa Thu/Đông 2019 với hướng dẫn chi tiết từ Vogue, giúp bạn chọn lựa phù hợp.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="/public/assets/client/img/latest-3.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                4 Tháng 5, 2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Cách Làm Sáng Tủ Quần Áo Với Một Chút Màu Chanh</h4>
                        </a>
                        <p>Thêm chút màu sắc tươi mới với màu chanh vào bộ sưu tập quần áo của bạn để tạo nên những bộ trang phục nổi bật và sành điệu hơn.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="/public/assets/client/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Miễn Phí Vận Chuyển</h6>
                            <p>Cho tất cả các đơn hàng trên 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="/public/assets/client/img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Giao Hàng Đúng Hẹn</h6>
                            <p>Chúng tôi sẽ giao hàng đúng thời gian đã hứa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="/public/assets/client/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Thanh Toán An Toàn</h6>
                            <p>Thanh toán 100% an toàn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Phần Blog Mới Nhất Kết Thúc -->

<?php
    }
}
?>