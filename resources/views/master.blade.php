@extends('app')
@section('template')
    <div class="weather">
        <div class="content">
            <div class="px-4 py-4">
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="location" placeholder="Tỉnh/ Thành phố">
                    </div>
                    <div class="col-12 my-4">
                        <div class="text-center ">
                            <span class="city"> 
                            </span>
                            <span class="country"></span>
                        </div>
                        <p class="date mt-2 text-center"></p>
                    </div>
                    <div class="col-8 offset-2">
                        <div class="temp-box">
                            <span class="temp"><span class="temp-detail"></span><sup>o</sup>C</span>
                        </div>
                    </div>
                    <div class="col-12 my-4">
                        <div class="row">
                            <div class="col-4 detail">
                                <img src="images/weather/ic_detail_wind_directio.png" alt="" class="wind">
                                <p class="text-wind"></p>
                            </div>
                            <div class="col-4 detail">
                                <img src="images/weather/ic_detail_humidity@2x.png" alt="" class="humi">
                                <p class="text-humi"></p>
                            </div>
                            <div class="col-4 detail">
                                <img src="images/weather/ic_detail_feel_like@2x.png" alt="" class="feel">
                                <p class="text-feel"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .weather {
            display:flex;
            height:700px;
            padding-top: 80px;
            color: #FFF;
        }
        .weather .content {
            margin:auto;
            width:400px;
            height:500px;
            border-radius:20px;
            background-image:url(images/weather/clear.jpg);
            background-repeat:no-repeat;
            background-size: cover;
            background-position:center;
            transition:0.4s;
        }

        .weather .content .location {
            width:100%;
            border-radius:15px 0 15px 0;
            padding:8px 16px;
            font-size:14px;
            outline:none;
            border:none;
            background-color:rgba(255,255,255,0.4);
            transition: 0.4s;
            box-shadow: 0 5px rgba(0,0, 0,0.2);
            color:#fff;
        }

        .weather .content .location:focus {
            border-radius:0px 15px 0px 15px;
        }

        .weather .content .city, .weather .content .country {
            font-size:36px!important;
            font-weight:550;
            text-shadow:3px 3px rgba(0,0, 0,0.2);
        }

        .weather .content .temp-box {
            border-radius:16px;
            box-shadow:2px 2px rgba(0,0, 0,0.2);
            background-color:rgba(255,255,255,0.4);
            padding:20px 0;
            display: flex;

        }

        .weather .content .temp-box .temp {
            font-size:70px;
            font-weight:bold;
            text-shadow:4px 4px rgba(0,0,0,0.2);
            margin:auto;
        }

        .weather .content .detail {
            text-align:center;
        }

        .weather .content .detail img {
            width:40%;
        }

        .weather .content .detail img.wind {
            width:50%;
        }

        .weather .content .detail p {
            font-size: 16px;
            margin-top: 12px;
        }

    </style>

    <script>
        function getData(city) {
            let urlApi = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=24956a34519e69d9b7912f0324486af3`
            $.ajax({
               url: urlApi,
               success: function(res){
                       $(".city").html(res.name)
                       $(".country").html(', ' + res.sys.country)
                       $(".temp-detail").html(Math.round(res.main.temp - 272.15))
                       $(".text-wind").html(res.wind.speed + ' m/s')
                       $(".text-humi").html(res.main.humidity + ' %')
                       $(".text-feel").html(Math.round(res.main.feels_like - 272.15))
                       let date = new Date().toLocaleString('vi')
                       $('.date').html(date)
                       var temp = Math.round(res.main.temp - 272.15)
                       let citySearch = $('.location').val('');
                       if (temp <=20) {
                            $('.weather .content').css("background-image", "url(images/weather/cloudy.jpg)");  
                       }
                       if (temp <=30 && temp >20) {
                            $('.weather .content').css("background-image", "url(images/weather/default_4.jpg)");  
                       }
                       if (temp > 30) {
                            $('.weather .content').css("background-image", "url(images/weather/clear.jpg)");  
                       }    
               },
               error: function() {
                   alert('Nhập lai tên Tỉnh / Thành phố')
               }
            })
        }
        
        $(".location").keypress(function(e){
            if(e.which == 13) {
                let citySearch = $('.location').val();
                getData(citySearch);
            }
        })

        getData('hung yen')
    </script>
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
                                    <img src="images/ic_people_home.svg" alt="" style="margin-bottom:8px;">
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
                                <lable class="lable-item " >
                                    <img src="images/ic_date_home.svg" alt="" style="margin-bottom:8px;">
                                    <span>Ngày</span>
                                </lable>
                                <select id="select-date" placeholder="Pick a date" >
                                    
                                </select>
                            </div>
                            <div class="col-12 mt-4" style="padding-bottom: 6px;">
                                <lable class="lable-item ">
                                    <img src="images/ic_time_home.svg" alt="">
                                    <span>Thời gian</span>
                                </lable>
                            </div>
                            <div class="col-6">
                                <select id="select-time-start" placeholder="Pick start time" class="time-start">
                                    
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="select-time-end" placeholder="Pick end time" class="time-end">
                                   
                                </select>
                            </div>
                            <div class="col-12 mt-4" style="padding-bottom: 6px;">
                                <lable class="lable-item">
                                    <img src="images/ic_map_home.svg" alt="">
                                    <span>Chọn địa điểm</span>
                                </lable>
                            </div>
                            <div class="col-6">
                            <select name="calc_shipping_provinces" required="" id="select-provide">
                                <option value="">Tỉnh / Thành phố</option>
                            </select>
                            <input class="billing_address_1" name="" type="hidden" value="">
                            
                            </div>
                            <div class="col-6">
                            <select name="calc_shipping_district" required="" id="select-district">
                                <option value="">Quận / Huyện</option>
                            </select>
                            <input class="billing_address_2" name="" type="hidden" value="">
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-search w-100 text-white mt-3" style="background:#955c2a">
                                    <img src="images/ic_search.svg" alt="">
                                    <span class="">TÌM KIẾM</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                       

                        (function($) {

                            var Defaults = $.fn.select2.amd.require('select2/defaults');

                            $.extend(Defaults.defaults, {
                            dropdownPosition: 'auto'
                            });

                            var AttachBody = $.fn.select2.amd.require('select2/dropdown/attachBody');

                            var _positionDropdown = AttachBody.prototype._positionDropdown;

                            AttachBody.prototype._positionDropdown = function() {

                            var $window = $(window);

                                var isCurrentlyAbove = this.$dropdown.hasClass('select2-dropdown--above');
                                var isCurrentlyBelow = this.$dropdown.hasClass('select2-dropdown--below');

                                var newDirection = null;

                                var offset = this.$container.offset();

                                offset.bottom = offset.top + this.$container.outerHeight(false);
                                
                                var container = {
                                    height: this.$container.outerHeight(false)
                                };

                            container.top = offset.top;
                            container.bottom = offset.top + container.height;

                            var dropdown = {
                            height: this.$dropdown.outerHeight(false)
                            };

                            var viewport = {
                            top: $window.scrollTop(),
                            bottom: $window.scrollTop() + $window.height()
                            };

                            var enoughRoomAbove = viewport.top < (offset.top - dropdown.height);
                            var enoughRoomBelow = viewport.bottom > (offset.bottom + dropdown.height);

                            var css = {
                            left: offset.left,
                            top: container.bottom
                            };

                            // Determine what the parent element is to use for calciulating the offset
                            var $offsetParent = this.$dropdownParent;

                            // For statically positoned elements, we need to get the element
                            // that is determining the offset
                            if ($offsetParent.css('position') === 'static') {
                            $offsetParent = $offsetParent.offsetParent();
                            }

                            var parentOffset = $offsetParent.offset();

                            css.top -= parentOffset.top
                            css.left -= parentOffset.left;

                            var dropdownPositionOption = this.options.get('dropdownPosition');

                                if (dropdownPositionOption === 'above' || dropdownPositionOption === 'below') {

                                    newDirection = dropdownPositionOption;

                            } else {
                                    
                                if (!isCurrentlyAbove && !isCurrentlyBelow) {
                                        newDirection = 'below';
                                    }

                                    if (!enoughRoomBelow && enoughRoomAbove && !isCurrentlyAbove) {
                                    newDirection = 'above';
                                    } else if (!enoughRoomAbove && enoughRoomBelow && isCurrentlyAbove) {
                                    newDirection = 'below';
                                    }

                            }

                            if (newDirection == 'above' ||
                                (isCurrentlyAbove && newDirection !== 'below')) {
                            css.top = container.top - parentOffset.top - dropdown.height;
                            }

                            if (newDirection != null) {
                            this.$dropdown
                                .removeClass('select2-dropdown--below select2-dropdown--above')
                                .addClass('select2-dropdown--' + newDirection);
                            this.$container
                                .removeClass('select2-container--below select2-container--above')
                                .addClass('select2-container--' + newDirection);
                            }

                            this.$dropdownContainer.css(css);

                            };

                        })(window.jQuery);

                        $("#select-date").select2({
                            placeholder: "Select a date",
                            dropdownPosition: 'below',
                        });
                        $("#select-time-start").select2({
                            placeholder: "Select a time start",
                            dropdownPosition: 'below',
                            
                        });
                        $("#select-time-end").select2({
                            placeholder: "Select a end",
                            dropdownPosition: 'below',
                            
                        });
                        $("#select-provide").select2({
                            placeholder: "Select a provide",
                            dropdownPosition: 'below',
                            
                        })
                        $("#select-district").select2({
                            placeholder: "Select a district",
                            dropdownPosition: 'below',
                                               
                        });

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
                            var temp_d = String(next.getDate()).padStart(2, '0')+'-'+mm+'-'+next.getFullYear();
                            if(temp_d==date_v && !checkPoint){
                                checkPoint+=i+1;
                            }
                            html += '<option class="" val="'+temp_d+'">' + temp_d +  '</option>'; 
                           
                        }
                        $('#select-date').append(html);

                        var currHours = curr.getHours();
                        for (var i = currHours; i < 24; i++) {
                            var html = '';
                            html += '<option value="' + i + '">' + ('0' + i).slice(-2) + ":00" + '</option>'; 
                            $('#select-time-start').append(html);
                        }

                        for (var i = currHours +1 ; i < 24; i++) {
                            var html = '';
                            html += '<option value="' + i + '">' + ('0' + i).slice(-2) + ":00" + '</option>'; 
                            $('#select-time-end').append(html);
                        }

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
                            let timeStart = Number(($('#select2-select-time-start-container').attr('title')).split('')[0] + ($('#select2-select-time-start-container').attr('title')).split('')[1]);
                            let timeEnd = Number(($('#select2-select-time-end-container').attr('title')).split('')[0] + ($('#select2-select-time-end-container').attr('title')).split('')[1]);
                            let provide = $('#select2-select-provide-container').attr('title');
                            let district = $('#select2-select-district-container').attr('title');
                            if (timeStart >= timeEnd) {
                                alert('thời gian ko phù hợp')
                            } else  if (provide == undefined) {
                                alert('Chọn Tỉnh/Thành phố');
                            } else if (district == undefined) {
                                alert('Chọn Quận/Huyện');
                            } else {
                                $(location).attr('href','/result')
                            }
                        })

                        $('#select2-select-time-start-container').attr('title')
                        
                        //<![CDATA[
                        if (address_2 = localStorage.getItem('address_2_saved')) {
                        $('select[name="calc_shipping_district"] option').each(function() {
                            if ($(this).text() == address_2) {
                            $(this).attr('selected', '')
                            }
                        })
                        $('input.billing_address_2').attr('value', address_2)
                        }
                        if (district = localStorage.getItem('district')) {
                        $('select[name="calc_shipping_district"]').html(district)
                        $('select[name="calc_shipping_district"]').on('change', function() {
                            var target = $(this).children('option:selected')
                            target.attr('selected', '')
                            $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                            address_2 = target.text()
                            $('input.billing_address_2').attr('value', address_2)
                            district = $('select[name="calc_shipping_district"]').html()
                            localStorage.setItem('district', district)
                            localStorage.setItem('address_2_saved', address_2)
                        })
                        }
                        $('select[name="calc_shipping_provinces"]').each(function() {
                        var $this = $(this),
                            stc = ''
                        c.forEach(function(i, e) {
                            e += +1
                            stc += '<option value=' + e + '>' + i + '</option>'
                            $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
                            if (address_1 = localStorage.getItem('address_1_saved')) {
                            $('select[name="calc_shipping_provinces"] option').each(function() {
                                if ($(this).text() == address_1) {
                                $(this).attr('selected', '')
                                }
                            })
                            $('input.billing_address_1').attr('value', address_1)
                            }
                            $this.on('change', function(i) {
                            i = $this.children('option:selected').index() - 1
                            var str = '',
                                r = $this.val()
                            if (r != '') {
                                arr[i].forEach(function(el) {
                                str += '<option value="' + el + '">' + el + '</option>'
                                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                                })
                                var address_1 = $this.children('option:selected').text()
                                var district = $('select[name="calc_shipping_district"]').html()
                                localStorage.setItem('address_1_saved', address_1)
                                localStorage.setItem('district', district)
                                $('select[name="calc_shipping_district"]').on('change', function() {
                                var target = $(this).children('option:selected')
                                target.attr('selected', '')
                                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                                var address_2 = target.text()
                                $('input.billing_address_2').attr('value', address_2)
                                district = $('select[name="calc_shipping_district"]').html()
                                localStorage.setItem('district', district)
                                localStorage.setItem('address_2_saved', address_2)
                                })
                            } else {
                                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                                district = $('select[name="calc_shipping_district"]').html()
                                localStorage.setItem('district', district)
                                localStorage.removeItem('address_1_saved', address_1)
                            }
                            })
                        })
                        }) 
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
                                    <a href="/bookroom-more" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/e47f8655f208ed8.jpg" alt="">
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
                                    <a href="/bookroom-more" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/e47f8655f208ed8.jpg" alt="">
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
                                    <a href="/bookroom-more" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/e47f8655f208ed8.jpg" alt="">
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
                                    <a href="/bookroom-more" class="">
                                        <div class="price-2 bg">
                                            500,000 VND/giờ
                                        </div>
                                        <div class="main-img-2" style="position: relative;">
                                            <img src="images/e47f8655f208ed8.jpg" alt="">
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
                    <a href="/result" class="btn btn-see-all mr-auto">Xem tất cả</a>
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
    <style>
        #header .nav-header:first-child {
            background-image: url(images/bg_active_menu_110px.svg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
           
        }
        #header .nav-header:first-child a {
            color: #750d1c;
        }
    </style>
    
@endsection

    





