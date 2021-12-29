<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

<?php
    include 'css.blade.php';
?>
<div id="header" style="background-color :#750d1c; height=80px;">
    <div class="my-container">
        <div class="">
            <div class=" ">
                <div class="d-flex">
                    <div class=" w-100 mr-auto d-flex">
                        <div class="navbar navbar-expand-lg navbar-dark  w-100  p-0 mr-auto" style="height=80px;"> 
                            <div class="logo ">
                                <a class="navbar-brand" href="">
                                    <img src="/images/logoHS.svg" class="logo-img d-inline-block align-top" alt="">
                                    <span>Harleys Space</span>
                                </a>
                            </div>
                            <button class="navbar-toggler mr-auto-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarText">
                                <ul class="navbar-nav mr">
                                    <li class="nav-item nav-header  active ">
                                        <a class="nav-link text-capitalize" href="">ĐẶT PHÒNG</a>
                                    </li>
                                    <li class="nav-item nav-header ">
                                        <h2><a class="nav-link text-capitalize" href="">TIN TỨC</a></h2>
                                    </li>
                                    <li class="nav-item nav-header ">
                                        <h2><a class="nav-link text-capitalize" href="" rel="nofollow">DỊCH VỤ</a></h2>
                                    </li>
                                
                                    <li class="nav-item nav-header ">
                                        <h2><a class="nav-link text-capitalize" href="">KHUYẾN MẠI</a></h2>
                                    </li>
                                </ul>
                                <div class="group-mobile">
                                    <div class="group-search clearfix">
                                        <div class="img-location" id="get-current-location">
                                            <img src="/images/ic_location.png" width="30px" height="30px" alt="">
                                        </div>
                                    </div>
                                    <div class="mobile d-lg-none">
                                        <span class="btn custom-button setting-config mb-setting" id="setting-config"><img src="/images/settings.png" style="width:23px" alt="settings"></span>
                                        <span class="btn custom-button setting-config " id="setting-config"><img src="/images/settings.png" style="width:23px" alt="settings"></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="desktop">
                                    <span class="btn custom-button setting-config" id="setting-config"><img src="/images/ic_history.svg" style="width:30px" alt="settings"></span>
                                    <div class="btn custom-button setting-config" id="setting-config" style="background:#fff;"><img src="/images/ic_phone.svg" style="width:23px;" alt="settings"><span style="color:#000;">01234567</span></div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="box1 bg d-flex" style="background-image:url(/images/png/img_home_hero.jpg);height:600px">
        <div class="container mr-auto">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-12 d-flex">
                    <div class="box1-left text-white " >
                        <div class="img-name d-flex">
                            <img src="images/ic_harleys_banner.svg" alt="">
                                <h4>HARLEYS SPACE BOOKING</h4>
                            <img src="images/ic_harleys_banner.svg" alt="">
                        </div>
                        <h3 class="mt-3">
                            <b>Đặt phòng sự kiện</b>
                        </h3>
                        <h3 class="">
                            <b>Mọi lúc mọi nơi</b>
                        </h3>
                    </div>
                    
                </div>
                <div class="col-lg-5 col-md-7 col-12">
                    <div class="box1-right" style="background:#fff;">
                        <div class="row">
                            <div class="col-6">
                                <lable class="lable-item mb-3">
                                    <img src="images/ic_people_home.svg" alt="">
                                    <span>Số lượng</span>
                                </lable>
                                <div class="select-model w-100">
                                    <select id="select-state" placeholder="Pick a number">
                                        <option selected>1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        <option >6</option>
                                        <option >7</option>
                                        <option >8</option>
                                        <option >9</option>
                                        <option >10</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <lable class="lable-item ">
                                    <img src="images/ic_date_home.svg" alt="">
                                    <span>Ngày</span>
                                </lable>
                                <select id="select-state" placeholder="Pick a date">
                                    <option selected>31-12-2021</option>
                                    <option >30-12-2021</option>
                                    <option >29-12-2021</option>
                                    <option >28-12-2021</option>
                                    <option >27-12-2021</option>
                                    <option >26-12-2021</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <lable class="lable-item ">
                                    <img src="images/ic_time_home.svg" alt="">
                                    <span>Thời gian</span>
                                </lable>
                            </div>
                            <div class="col-6">
                                <select id="select-state" placeholder="Pick start time">
                                    <option selected>01:00</option>
                                    <option>02:00</option>
                                    <option>03:00</option>
                                    <option>04:00</option>
                                    <option>05:00</option>
                                    <option>06:00</option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="select-state" placeholder="Pick end time">
                                    <option>01:00</option>
                                    <option>02:00</option>
                                    <option>03:00</option>
                                    <option>04:00</option>
                                    <option selected>05:00</option>
                                    <option>06:00</option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <lable class="lable-item">
                                    <img src="images/ic_map_home.svg" alt="">
                                    <span>Chọn địa điểm</span>
                                </lable>
                            </div>
                            <div class="col-6">
                                <select id="select-state" placeholder="Pick a city">
                                    <option selected>Tỉnh/Thành phố</option>
                                    <option >Hưng Yên</option>
                                    <option >Hà Nội</option>
                                    <option >Hải Dương</option>
                                    <option >Bắc Ninh</option>
                                    <option >Bắc Giang</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="select-state" placeholder="Pick a city">
                                    <option selected>Quận/Huyện</option>
                                    <option >Yên Mỹ</option>
                                    <option >Mỹ Hào</option>
                                    <option >Ân Thi</option>
                                    <option >Kim Động</option>
                                    <option >Tiên Lữ</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-search w-100 text-white mt-3" style="background:#955c2a">
                                    <img src="images/ic_search.svg" alt="">
                                    <span class="">TÌM KIẾM</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box2 my-container mt-5">
        <div class="title-box2 w-100" >
            <img src="images/text_uudaidacbiet.svg" alt="" style="width:70%;">
        </div>
        <div class="special-offer mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="main-text">
                        <h3>
                        Phòng ưu đãi đặc biệt      
                        </h3>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                        </p>
                        <a href="" class="btn-see-all btn">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme owl-loaded slide-1">
                        <div class="owl-stage-outer" style="position: relative;">
                            <div class="owl-stage">
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item">
                                    <a class="card">
                                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="">
                                        <div class="card-content">
                                            <h3 class="card-title">
                                                Vũ Mỹ
                                            </h3>
                                            <p class="card-text">
                                                <img src="/images/ic_people.svg" alt="ic_people.svg" style="width:16px"> 
                                                <span>55 Người</span>
                                            </p>
                                            <p class="card-text">
                                                <img src="/images/ic_map_discount_room.svg" alt=""  style="width:16px">
                                                <span> Huyện Cần Giờ, Hồ Chí Minh</span>
                                            </p>
                                            <div class="card-price card-text">
                                                <img src="/images/ic_money.svg" alt=""  style="width:16px">
                                                <span class="real-price">1,500,00 VND/giờ</span>
                                                <span class="sale-price">1,000,00 VND/giờ</span>
                                            </div>
                                        </div>
                                        <div class="number-sale bg">
                                            -25%
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $('.slide-1').owlCarousel({
                            loop: true,
                            margin: 30,
                            responsiveClass: true,
                            pagination: false,
                            dots: true,
                            nav: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                400: {
                                    items: 2
                                }
                                
                            }
                        })
                    </script>
                    <style>
                        .owl-nav {
                            display: block;
                        }

                        .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
                            height:56px;
                            width: 56px;
                            border-radius:100%;
                            border:1px solid rgba(0,0,0,0.2);
                            color: #750d1c;
                            position: absolute;
                            background:#fff;
                            z-index: 9999;
                            margin:0;
                            
                        }

                        .owl-carousel .owl-nav button.owl-next span, .owl-carousel .owl-nav button.owl-prev span {
                            font-size:40px;
                            line-height:20px;
                        }

                        .owl-carousel .owl-nav button.owl-next {
                            right:-28px;
                            top:40%;
                            
                        }

                        .owl-carousel .owl-nav button.owl-prev {
                            left:-28px;
                            top:40%;
                            
                        }

                        .owl-theme .owl-dots .owl-dot span {
                            height:18px;
                            width: 18px;
                            margin: 5px;
                            
                        }

                        .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
                            border:2px solid #955c2a;
                            outline: 3px solid #fff;
                            outline-offset:-5px;
                            background:#955c2a;
                        }

                        .owl-theme .owl-dots {
                            margin-top: 30px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

    <div class="box3">
        <div class="container">
            <div class="text-center mt-4">
                <img src="images/text_danhsachphong.svg" alt="" style="max-width:90%;">
                <h3 class="title-box3 mt-4">
                    Danh sách phòng
                </h3>
                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 hide-mid">
                    <div class="btn-next-slide-2 text-center">
                        <img src="images/ic_arrow_list_room_up_down.svg" alt="">
                    </div>
                    <div class="slide-2 slider " style="position:relative;">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                        <img src="images/png/47ffc9a6b30acf5.jpg" alt="" class="mb-3 slide-2-item">
                    </div>
                    <div class="btn-prev-slide-2 text-center">
                        <img src="images/ic_arrow_list_room_down.svg" alt="">
                    </div>
                    <script>
                        $('.slide-2').slick({
                        dots: false,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 3,
                        adaptiveHeight: true,
                        verticalSwiping: true,
                        vertical: true,
                        margin: 20,
                        prevArrow: $('.btn-prev-slide-2'),
                        nextArrow: $('.btn-next-slide-2'),
                        });
                    </script>
                    <style>
                       .slick-vertical .slick-slide {
                           border-radius:10px;
                       }

                       .btn-next-slide-2 {
                           position:absolute;
                           top: -30px;
                           left:50%;
                           transform:translateX(-50%);
                       }

                       .btn-prev-slide-2 {
                           position:absolute;
                           bottom: 80px;
                           left:50%;
                           transform:translateX(-50%);
                       }
                    </style>
                </div>
                <div class="col-lg-9">
                    <div class="owl-carousel owl-theme owl-loaded slide-3">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="item owl-item" >
                                    <a href="" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/png/4f642cde3d0fa1d.jpg" alt="">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 dflex">
                                                
                                                <div class="text-2" sty>
                                                    <h3>HCM 19</h3>
                                                    <div class="text-2-down">
                                                        <span class="text-left d-flex">
                                                            <img src="images/ic_map_discount_room.svg" alt="" style="width:16px;margin-right:6px;">
                                                            Huyện Bình Chánh, Hồ Chí Minh
                                                        </span>
                                                        <span class="text-right d-flex">
                                                            <img src="images/ic_people.svg" alt="" style="width:16px;margin-right:6px;">
                                                            33
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item" >
                                    <a href="" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/png/4f642cde3d0fa1d.jpg" alt="">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 dflex">
                                                
                                                <div class="text-2" sty>
                                                    <h3>HCM 19</h3>
                                                    <div class="text-2-down">
                                                        <span class="text-left d-flex">
                                                            <img src="images/ic_map_discount_room.svg" alt="" style="width:16px;margin-right:6px;">
                                                            Huyện Bình Chánh, Hồ Chí Minh
                                                        </span>
                                                        <span class="text-right d-flex">
                                                            <img src="images/ic_people.svg" alt="" style="width:16px;margin-right:6px;">
                                                            33
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item" >
                                    <a href="" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/png/4f642cde3d0fa1d.jpg" alt="">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 dflex">
                                                
                                                <div class="text-2" sty>
                                                    <h3>HCM 19</h3>
                                                    <div class="text-2-down">
                                                        <span class="text-left d-flex">
                                                            <img src="images/ic_map_discount_room.svg" alt="" style="width:16px;margin-right:6px;">
                                                            Huyện Bình Chánh, Hồ Chí Minh
                                                        </span>
                                                        <span class="text-right d-flex">
                                                            <img src="images/ic_people.svg" alt="" style="width:16px;margin-right:6px;">
                                                            33
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item owl-item" >
                                    <a href="" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/png/4f642cde3d0fa1d.jpg" alt="">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 dflex">
                                                
                                                <div class="text-2" sty>
                                                    <h3>HCM 19</h3>
                                                    <div class="text-2-down">
                                                        <span class="text-left d-flex">
                                                            <img src="images/ic_map_discount_room.svg" alt="" style="width:16px;margin-right:6px;">
                                                            Huyện Bình Chánh, Hồ Chí Minh
                                                        </span>
                                                        <span class="text-right d-flex">
                                                            <img src="images/ic_people.svg" alt="" style="width:16px;margin-right:6px;">
                                                            33
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('.slide-3').owlCarousel({
                            loop: true,
                            margin: 0,
                            responsiveClass: true,
                            pagination: false,
                            dots: false,
                            nav: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                400: {
                                    items: 1
                                }
                                
                            }
                        })
                    </script>
                </div>
                <div class="col-12 d-flex">
                    <a href="" class="btn btn-see-all mr-auto">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="box4 mt-5">
        <div class="row no-gutters">
            <div class="col-12 col-md-6">
                <img src="images/png/img_experience_left.jpg" alt="" style="width:100%">
            </div>
            <div class="col-12 col-md-6">
                <div class="text-white bg box4-right" style="background-image:url(images/png/img_experience_right.jpg);height:100%;">
                    <h4>HARLEYS SPACE</h4>
                    <h3>Mang đến</h3>
                    <h3>trải nghiệm tuyệt vời!</h3>
                    <p class="mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal, distribution of letters, as opposed to using content here, content here',</p>
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <ul>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Lễ tân
                                </li>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Internet tốc độ cao
                                </li>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Hỗ trợ chuyển phát nhanh
                                </li>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Hỗ trợ in ấn
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ul>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Màn hình LED 300"
                                </li>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Không gian mở
                                </li>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Thiết bị trình chiếu
                                </li>
                                <li>
                                    <img src="images/ic_tick.svg" alt="">
                                    Miễn phí trà & cafe
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-5">
                            <a href="" class="btn btn-see-more">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="box5 mt-5">
        <div class="my-container hide-mid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6 d-flex">
                            <img src="images/png/box5-1.jpg" alt="" class="mr-auto">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <img src="images/png/box5-2.jpg" alt="">
                                </div>
                                <div class="col-12 mt-4">
                                    <img src="images/png/box5-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 box5-right">
                    <img src="images/text_harleysspace.svg" alt="">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="images/png/box5-4.jpg" alt="">
                        </div>
                        <div class="col-lg-7">
                            <h3>Khơi mở</h3>
                            <h3>nguồn cảm hứng</h3>
                            <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="images/png/box5-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="container mt-5">
            <div class="row cover-infor">
                <div class="col-12 col-sm-4 flex-col">
                    <img src="images/ic_10address.svg" alt="" class="img-partner">
                    <p class="box5-number">69</p>
                    <p class="box5-name">ĐỊA ĐIỂM</p>
                </div>
                <div class="col-12 col-sm-4 flex-col">
                    <img src="images/ic_rooms.svg" alt="" class="img-partner">
                    <p class="box5-number">100</p>
                    <p class="box5-name">PHÒNG</p>
                </div>
                <div class="col-12 col-sm-4 flex-col">
                    <img src="images/ic_167partners.svg" alt="" class="img-partner">
                    <p class="box5-number">167</p>
                    <p class="box5-name">ĐỐI TÁC</p>
                </div>
            </div>
        </div>
        <div class="my-container mt-5">
            <img src="images/text_dotphakhonggian.svg" alt="" style="max-width:90%">
            <div class="w-100 d-flex mt-4">
                <img src="images/png/box5-5.jpg" alt="" style="max-width:60%" class="mr-auto img-last">
            </div>
        </div>
        <div class="container mt-5">
            <div class="partner">
                <img src="images/logo_vin.svg" alt="">
                <img src="images/logo_vib.svg" alt="">
                <img src="images/logo_vcb.svg" alt="">
                <img src="images/logo_airbnb.svg" alt="">
                <img src="images/logo_vnpt.svg" alt="">
            </div>
            
        </div>
    </div>

    <footer style="background-color :#750d1c;color:#fff;" class="mt-5 pt-5">
        <div class="container ">
            <div class="row ">
                <div class="col-12 col-lg-5">
                    <div class="logo title ">
                        <a class="navbar-brand" href="">
                            <img src="/images/logoHS.svg" class="logo-img d-inline-block align-top" alt="">
                            <span>Harleys Space</span>
                        </a>
                    </div>
                    <p style="color:rgba(255, 255, 255, 0.6)">
                    ToHsoft is a creative and dynamic IT enterprise, providing various game products, mobile applications, and more. Developed by ToHsoft, Goweatherforecast.com aims to become a leading weather forecast site.
                    </p>
                </div>
                <div class="col-12 col-lg-2 offset-lg-3">
                    <p class="title">
                        Khám phá
                    </p>
                    <ul class="list-info">
                        <li><a href="">Đặt phòng</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Dịch vụ</a></li>
                        <li><a href="">Khuyến mại</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-2">
                     <p class="title">
                        Liên hệ
                    </p>
                    <ul class="list-info">
                        <li><a href="">0985057000</a></li>
                        <li><a href="">0185057096</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="border-top:2px solid rgba(255,255,255,0.3); margin-top:40px;">
        <div class="container" style="padding-bottom:16px;">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="left">
                        <span style="color:rgba(255, 255, 255, 0.6)">© 2020 TOH Coworking Space. All right reserved</span>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="right" style="text-align:right;">
                        <a href="" class="social-icon"><img src="images/ic_social_facebook.svg" alt=""><img src="images/ic_social_facebook_hover.svg" alt=""></a>
                        <a href="" class="social-icon"><img src="images/ic_social_youtube.svg" alt=""><img src="images/ic_social_youtube_hover.svg" alt=""></a>
                        <a href="" class="social-icon"><img src="images/ic_social_instagram.svg" alt=""><img src="images/ic_social_instagram_hover.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        footer .title {
            font-size: 24px;
            font-weight:600;
            line-height:70px;
        }

        .list-info li a {
            color:rgba(255, 255, 255, 0.6)
        }

        .list-info li a:hover {
            color: #fff;
            text-decoration:underline!important;
        }

        .right .social-icon img:last-child {
            display:none;
        }

        .right .social-icon:hover img:first-child {
            display:none;
        }

        .right .social-icon:hover img:last-child {
            display:inline-block;
        }


    </style>
</body>
        <script src="jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            $('select').selectize({
                sortField: 'text'
            });
        });

    </script>
</html>

<?php
    include 'reponsive.blade.php';
?>


