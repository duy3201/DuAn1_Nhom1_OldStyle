<?php

namespace App\Views\Layouts;

use App\Views\BaseView;

class Header extends BaseView
{

     public static function render($data = null)
     { ?>
          <div class="container-header">
               <div class="tab-bar">
                    <div class="container text-center">
                         <div class="row">
                              <div class="col-md-4 hi">Chào mừng bạn đên với shop của chúng tôi</div>
                              <div class="col-md-4 offset-md-4 icon-header">
                                   <a class="nav-link" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                   <a class="nav-link" href="#"><i class="fa-brands fa-tiktok"></i></a>
                                   <a class="nav-link" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                   <a class="nav-link" href="#"><i class="fa-brands fa-youtube"></i></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="menu">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                         <div class="container-fluid">
                              <a class="navbar-brand" href="#"><img src="/public/img/z5831525310638_5b89f4880e99ed7236cfe5f2de6b6927.jpg" width="25%" alt=""></a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                             <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Sản phẩm
                                             </a>
                                             <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="#">Sản phẩm nổi bậc</a></li>
                                                  <li><a class="dropdown-item" href="#">Phong cách đơn giản</a></li>
                                                  <li><a class="dropdown-item" href="#">Thời trang cổ điển</a></li>
                                             </ul>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#">Tin tức</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#">Liên hệ</a>
                                        </li>
                                   </ul>
                                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-login">
                                             <a class="nav-link" href="#">Đăng nhập</a>
                                             <a class="nav-link" href="#">Đăng ký</a>
                                        </li>
                                        <li class="nav-icon">
                                             <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                             <a class="nav-link" href="#"><i class="fa-regular fa-heart"></i></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </nav>
               </div>
               <div class="bannder">
                    <div id="carouselExampleCaptions" class="carousel slide">
                         <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                         </div>
                         <div class="carousel-inner">
                              <div class="carousel-item active">
                                   <img src="/public/img/banner-header.jpeg" class="d-block w-100" alt="...">
                                   <div class="carousel-caption">
                                        <h1>Old Style</h1>
                                        <p>Some representative placeholder content for the first slide.</p>
                                   </div>
                              </div>
                              <div class="carousel-item active">
                                   <img src="/public/img/banner-header.jpeg" class="d-block w-100" alt="...">
                                   <div class="carousel-caption">
                                        <h1>Old Style</h1>
                                        <p>Some representative placeholder content for the first slide.</p>
                                   </div>
                              </div>
                              <div class="carousel-item active">
                                   <img src="/public/img/banner-header.jpeg" class="d-block w-100" alt="...">
                                   <div class="carousel-caption">
                                        <h1>Old Style</h1>
                                        <p>Some representative placeholder content for the first slide.</p>
                                   </div>
                              </div>
                         </div>
                         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                         </button>
                    </div>
               </div>
          </div>
<?php }
}