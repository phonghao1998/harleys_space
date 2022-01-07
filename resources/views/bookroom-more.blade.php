@extends('app')
@section('template')
<link rel="stylesheet" href="/croll/perfect-scrollbar.css">
<script src="/croll/perfect-scrollbar.js"></script>
<div class="as" id="bookRoom" style="position: relative;">
    <div class="container">
        <div class="d-flex mt-5">
            <button type="button" class="btn w-100" data-toggle="modal" data-target="#exampleModal"><img src="images/e47f8655f208ed8.jpg" alt="" class="mr-auto" style="max-width:80%;"></button>
        </div>
        <div class="mt-5">
            <div class="slide-date">
            </div>
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
                    right:-30px;
                    top:50%;
                    transform:translateY(-50%);
                    
                }

                .owl-carousel .owl-nav button.owl-prev {
                    left:-30px;
                    top:50%;
                    transform:translateY(-50%);
                    
                }
 
            </style>
        </div>

        <div class="slide-time slider mt-5">
        </div>

        <div class="information mt-5">
            <h2 class="title text-center mb-4">Vũ Mỹ 19/05</h2>
            <div class="row">
                <div class="col-12">
                    <div class="information-service">
                        <div class="information-service-item">
                            <img src="images/ic_people_detail_booking.svg" alt="">
                            <span class="">33 người</span>
                        </div>
                        <div class="information-service-item">
                            <img src="images/ic_dientich_detail_booking.svg" alt="">
                            <span class="">50 m²</span>
                        </div>
                        <div class="information-service-item">
                            <img src="images/ic_money_detail_booking.svg" alt="">
                            <span class=" ">500,000 VND/giờ</span>
                        </div>
                        <div class="information-service-item">
                            <img src="images/ic_map_detail_booking.svg" alt="">
                            <span class=""> Bình Chánh, HCM</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="allready-service mt-5">
                        <h3 class="allready-service-title mb-3">Tiện ích sẵn có</h3>
                        <div class="row">
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <img src="images/7241bc026206eff.png" alt="">
                                    <p class="">Loa</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <img src="images/08572c6fb606ea4.png" alt="">
                                    <p class="">Điều hòa</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <img src="images/96ad7f5dc21ae41.jpg" alt="">
                                    <p class="">Máy chiếu</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <img src="images/57b7408ac139b51.jpg" alt="">
                                    <p class="">Micro</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="more-service mt-5">
                        <h3 class="more-service-title mb-3">
                            Dịch vụ
                        </h3>
                        <div class="row">
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <input type="checkbox" data-id="1">
                                    <img src="images/ic_choose_inactive.svg" alt="" class="not-checked">
                                    <img src="images/icons8-door_sensor_checked.png" alt="" class="checked d-none img-checked-1">
                                    <img src="images/3fcdf5093500b7e.png" alt="">
                                    <p class="">Caffe</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <input type="checkbox" data-id="2">
                                    <img src="images/ic_choose_inactive.svg" alt="" class="not-checked">
                                    <img src="images/icons8-door_sensor_checked.png" alt="" class="checked d-none img-checked-2">
                                    <img src="images/b411cb0fc64cc7f.png" alt="">
                                    <p class="">Trà nước</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <input type="checkbox" data-id="3">
                                    <img src="images/ic_choose_inactive.svg" alt="" class="not-checked">
                                    <img src="images/icons8-door_sensor_checked.png" alt="" class="checked d-none img-checked-3">
                                    <img src="images/fc562ded1767fcf.jpg" alt="">
                                    <p class="">Lễ tân</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-6">
                                <div class="item mt-3">
                                    <input type="checkbox" data-id="4">
                                    <img src="images/ic_choose_inactive.svg" alt="" class="not-checked">
                                    <img src="images/icons8-door_sensor_checked.png" alt="" class="checked d-none img-checked-4">
                                    <img src="images/2f5b8561112f156.jpg" alt="">
                                    <p class="">Bánh ngọt</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        
                    </script>
                </div>
            </div>
        </div>

        <div class="same-location mt-5" aria-describedby="tooltip">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2 class="title text-center">Địa điểm tương tự</h2>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme owl-loaded slide-more-location">
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
                        $('.slide-more-location').owlCarousel({
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
    <div class="check-out bg" role="tooltip">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center people">
                    <img src="images/ic_people_scroll_detail_booking.svg" alt="">
                    <h4 class="">33 người</h4>
                </div>
                <div class="col-lg-3 text-center price" >
                    <img src="images/ic_money_scroll_detail_booking.svg" alt="">
                    <h4 class="total-price"></h4>
                </div>
                <div class="col-lg-3 text-center location" >
                    <img src="images/ic_map_scroll_detail_booking.svg" alt="">
                    <h4 class="">Bình Chánh, HCM</h4>
                </div>
                <div class="col-lg-3 text-center col-12 d-flex">
                    <a class="btn btn-book">ĐẶT PHÒNG</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" style="padding-top:80px;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/e47f8655f208ed8.jpg" alt="" class="mr-auto" style="max-width:80%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var curr = new Date;
        var first = curr.getDate() + 1;
        var mm = String(curr.getMonth() + 1).padStart(2, '0'); 
        var checkPoint = 0;
        var html = '';
        var date_v = '14/01/2022'
        for (var i = -1; i <= 12+1; i++) {
            var next = new Date(curr.getTime());
            next.setDate(first + i);
            mm = String(next.getMonth() + 1).padStart(2, '0');
            let dayweeks = next.toString().split(" ");
            var temp_d = String(next.getDate()).padStart(2, '0')+'/'+mm+'/'+next.getFullYear();
            if(temp_d==date_v && !checkPoint){
                checkPoint+=i+1;
            }
            html += '<div class="day" val="'+temp_d+'">' + dayweeks[2]+'/'+mm + '</br>' + convertDay(dayweeks[0]) + '</div>'; 
            console.log(date_v);
        }
        function convertDay(item){
            if(item == "Mon"){
                return "Thứ hai"
            }
            if(item == "Tue"){
                return "Thứ ba"
            }
            if(item == "Wed"){
                return "Thứ tư"
            }
            if(item == "Thu"){
                return "Thứ năm"
            }
            if(item == "Fri"){
                return "Thứ sáu"
            }
            if(item == "Sat"){
                return "Thứ bảy"
            }
            if(item == "Sun"){
                return "Chủ nhật"
            }
        }
        $(".slide-date").append(html);

        $('.slide-date').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll:7,
            adaptiveHeight: true,
            margin: 0,
            arrows:false,
            responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }

            ]
        });

        $('.day').each(function() {
            $(this).on('click', function(){
                $('.day').removeClass('active');
                $(this).toggleClass('active');
            })
        })

        

        
        for (var i = 1; i < 23; i++) {
            var html = '';
            if(i == 7){
                html += '<div class="hours hours-soon" attr_r="'+i+'">' + ('0' + i).slice(-2) + ":00 - " + ('0' + (i + 1)).slice(-2) + ":00" + '</div>'
            }
            else if(i < 22){
                html += '<div class="hours hours-soon" attr_r="'+i+'">' + ('0' + i).slice(-2) + ":00 - " + ('0' + (i + 1)).slice(-2) + ":00" + '</div>'
            }
            else{
                html += '<div class="hours hours-end" attr_r="'+i+'">' + ('0' + i).slice(-2) + ":00 - " + ('0' + (i + 1)).slice(-2) + ":00" + '</div>'
            }
            $(".slide-time").append(html);
            
        }

        $('.slide-time').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll:7,
            adaptiveHeight: true,
            margin: 0,
            arrows:false,
            responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }

            ]
        });

        
        $('.more-service .item').each(function() {
            $(this).find('input').change(function() {
                var classImg = '.more-service .item .img-checked-' + $(this).attr('data-id');
                if(!this.checked) {
                    $(classImg).addClass('d-none');
                } else {
                    $(classImg).removeClass('d-none');
                } 
            })
        })

        $('.slide-time .hours').each(function() {
            $(this).on('click', function(){
                $(this).toggleClass('active');
            })
        })
        var coffee = 0;
        var tea = 0;
        var hours = 0;
        var receptionist = 0;
        var cake = 0;
        $('.total-price').html('0 VND');
        $("input[data-id='1']").change(function(){
            if(this.checked){
                coffee = 1;
            }else{
                coffee = 0; 
            }
            var totalPrice = (addCommas(hours * 500000 + coffee*10000 + tea*15000 + receptionist*100000 + cake*20000)).toString() + ' VND';
            $('.total-price').html(totalPrice);
        })
        $("input[data-id='2']").change(function(){
            if(this.checked){
                tea = 1;
            }else{
                tea = 0; 
            }
            var totalPrice = (addCommas(hours * 500000 + coffee*10000 + tea*15000 + receptionist*100000 + cake*20000)).toString() + ' VND';
            $('.total-price').html(totalPrice);
        })
        $("input[data-id='3']").change(function(){
            if(this.checked){
                receptionist = 1;
            }else{
                receptionist = 0; 
            }
            var totalPrice = (addCommas(hours * 500000 + coffee*10000 + tea*15000 + receptionist*100000 + cake*20000)).toString() + ' VND';
            $('.total-price').html(totalPrice);
        })
        $("input[data-id='4']").change(function(){
            if(this.checked){
                cake = 1;
            }else{
                cake = 0; 
            }
            var totalPrice = (addCommas(hours * 500000 + coffee*10000 + tea*15000 + receptionist*100000 + cake*20000)).toString() + ' VND';
            $('.total-price').html(totalPrice);
        })

        $('.slide-time .hours').each(function() {
            $(this).on('click', function(){
                if(!$(this).hasClass('active')) {
                    hours = hours - 1;
                } else {
                    hours = hours + 1;
                } 
                var totalPrice = (addCommas(hours * 500000 + coffee*10000 + tea*15000 + receptionist*100000 + cake*20000)).toString() + ' VND';
                $('.total-price').html(totalPrice);
                console.log(totalPrice);
                console.log(coffee);
            })    
        })
        
        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
    </script>
</div>
@endsection