<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/esm/popper.min.js" integrity="sha512-dJGGzJugIoedvAGJirYqiJtvYTrZ8NLS/3ov2gvq1Yo9JqdyRUk1y53MUgvQ7uBQYUAjH7hw/4vJaE79LTzOAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js">></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'/></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
</head>
<body>
    @include ('css')
    <div id="header" style="background-color :#750d1c; height:80px;">
        <div class="my-container">
            <div class="">
                <div class=" ">
                    <div class="d-flex">
                        <div class=" w-100 mr-auto d-flex">
                            <div class="navbar navbar-expand-lg navbar-dark   w-100  p-0 mr-auto" style="height:80px;"> 
                                <div class="logo ">
                                    <a class="navbar-brand" href="/">
                                        <img src="/images/logoHS.svg" class="logo-img d-inline-block align-top" alt="">
                                        <span>Harleys Space</span>
                                    </a>
                                </div>
                                <button class="navbar-toggler mr-auto-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse " id="navbarText">
                                    <ul class="navbar-nav mr">
                                        <li class="nav-item nav-header ">
                                            <a class="nav-link text-capitalize " href="/">ĐẶT PHÒNG</a>
                                        </li>
                                        <li class="nav-item nav-header ">
                                            <a class="nav-link text-capitalize" href="/new">TIN TỨC</a>
                                        </li>
                                        <li class="nav-item nav-header ">
                                            <a class="nav-link text-capitalize" href="/service" rel="nofollow">DỊCH VỤ</a>
                                        </li>
                                    
                                        <li class="nav-item nav-header ">
                                            <a class="nav-link text-capitalize" href="/sale">KHUYẾN MẠI</a>
                                        </li>
                                    </ul>
                                    <div class="group-mobile">
                                        <div class="mobile d-lg-none">
                                            <span class="btn custom-button setting-config" id="setting-config"><a href="/history"><img src="/images/ic_history.svg" style="width:30px" alt="settings"></a></span>
                                            <div class="btn custom-button setting-config" id="setting-config" style="background:#fff;"><img src="/images/ic_phone.svg" style="width:23px;" alt="settings"><span style="color:#000;">01234567</span></div> 
                                        </div>
                                        </div>
                                    </div>
                                    <div class="desktop">
                                        <span class="btn custom-button setting-config" id="setting-config"><a href="/history"><img src="/images/ic_history.svg" style="width:30px" alt="settings"></a></span>
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
    <script type="text/javascript">
        $('.nav-header').click(function() {
            $('.nav-header').removeClass('active');
            $(this).addClass('active');
        })
    </script>

    @yield('template')

    <footer style="background-color :#750d1c;color:#fff;" class=" pt-5">
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
                        <li><a href="/">Đặt phòng</a></li>
                        <li><a href="/new">Tin tức</a></li>
                        <li><a href="/service">Dịch vụ</a></li>
                        <li><a href="/sale">Khuyến mại</a></li>
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
    
    @include ('reponsive')
</body>
</html>




