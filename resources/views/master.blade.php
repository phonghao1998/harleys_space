@extends('app')
@section('template')
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
                                <div class=" pick-number w-100">
                                    <div class="subtract">
                                        <button class="btn w-100 btn-subtract">-</button>
                                    </div>
                                    <div class="input-number">
                                        <input type="text" class="text-center w-100 number-people" id="numberPeople" autocomplete="off" name="number" value="1">
                                    </div>
                                    <div class="plus">
                                        <button class="btn w-100 btn-plus ">+</button>
                                    </div>
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
                                <select id="select-state" placeholder="Pick start time" class="time-start">
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
                                <select id="select-state" placeholder="Pick end time" class="time-end">
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
                                <select id="select-state" placeholder="Pick a city" class="provide">
                                    <option selected>Tỉnh/Thành phố</option>
                                    <option >Hưng Yên</option>
                                    <option >Hà Nội</option>
                                    <option >Hải Dương</option>
                                    <option >Bắc Ninh</option>
                                    <option >Bắc Giang</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="select-state" placeholder="Pick a city" class="district">
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

                    <script type="text/javascript">

                        $(document).ready(function () {
                            $('select').selectize({
                                sortField: 'text'
                            });
                        });

                        $('.btn-subtract').on("click", function(){
                            let newValue;
                            let oldValue = Number($('.number-people').val());
                            if( oldValue > parseInt("1")) {
                                newValue = oldValue - 1;
                            } else {
                                newValue = parseInt("1");
                            }

                            $('.number-people').val(newValue);
                            checkNumber();
                            return false;
                            
                        });

                        $('.btn-plus').on("click", function(){
                            let newValue;
                            let oldValue = Number($('.number-people').val());
                            if( oldValue <parseInt("100")) {
                                newValue = oldValue + 1;
                            }else {
                                newValue = oldValue;
                            }
                            
                            $('.number-people').val(newValue);
                            checkNumber();
                            return false;
                        });

                        checkNumber = function(){
                            if ($('.number-people').val()<= 1) {
                                $('.btn-subtract').addClass('hide-btn');
                            }else {
                                $('.btn-subtract').removeClass('hide-btn');
                            }

                            if ($('.number-people').val()>= 100) {
                                $('.btn-plus').addClass('hide-btn');
                                
                            }else {
                                $('.btn-plus').removeClass('hide-btn');
                            }
                        }

                        $('.number-people').keyup(function(e) {
                            checkNumber();
                            if($(this).val()) {
                                $('.number-people').val(parseInt($('.number-people').val()));
                            }

                            if($(this).val()>parseInt("100")) {
                                alert('số lượng không quá 100 người');
                                $(this).val(parseInt("100"))
                            }
                        })
                        
                        $('.btn-search').on('click', function(){
                            let timeStart = Number((($('.time-start .item').attr('data-value')).split(''))[0]+(($('.time-start .item').attr('data-value')).split(''))[1]);
                            let timeEnd = Number((($('.time-end .item').attr('data-value')).split(''))[0]+(($('.time-end .item').attr('data-value')).split(''))[1]);
                            let provide = $('.provide .item').attr('data-value');
                            let district = $('.district .item').attr('data-value');
                            if (timeStart >= timeEnd) {
                                alert('thời gian ko phù hợp')
                            } else  if (provide == 'Tỉnh/Thành phố') {
                                alert('Chọn Tỉnh/Thành phố');
                            } else if (district == 'Quận/Huyện') {
                                alert('Chọn Quận/Huyện');
                            }

                            
                            // if (provide == 'Tỉnh/Thành phố') {
                            //     alert('Chọn Tỉnh/Thành phố');
                            // }    
                            // if (district == 'Quận/Huyện') {
                            //     alert('Chọn Quận/Huyện');
                            // }
                        })
                        // $(document).ready(function(){
                        //     var timeStart = Number((($('.time-start .item').attr('data-value')).split(''))[0]+(($('.time-start .item').attr('data-value')).split(''))[1]);
                        //     var timeEnd = Number((($('.time-end .item').attr('data-value')).split(''))[0]+(($('.time-end .item').attr('data-value')).split(''))[1]);
                        // })
                        
                        
                    </script>
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
                        <a href="/sale" class="btn-see-all btn">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme owl-loaded slide-1">
                        <div class="owl-stage-outer" style="position: relative;">
                            <div class="owl-stage">
                                <div class="item owl-item">
                                    <a class="card" href="/bookroom">
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
                                    <a class="card" href="/bookroom">
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
                                    <a class="card" href="/bookroom">
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
                                    <a class="card" href="/bookroom">
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
                                    <a class="card" href="/bookroom">
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
                                    <a class="card" href="/bookroom">
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
                                    <a class="card" href="/bookroom">
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
                                768: {
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
            <div class="col-12 col-lg-6">
                <img src="images/png/img_experience_left.jpg" alt="" style="width:100%" class="box-4-left-img">
            </div>
            <div class="col-12 col-lg-6">
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
                            <a href="/service" class="btn btn-see-more">Xem thêm</a>
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
    
@endsection

    





