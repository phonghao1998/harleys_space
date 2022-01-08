@extends('app')
@section('template')
<div  id="result">
    <div class="banner bg">
        <h3 class="text-center">
            Kết quả
        </h3>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-7">
                <a class="result-item" href="/bookroom-more">
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
                <a class="result-item" href="/bookroom">
                    <div class="price-2 bg">
                        1,500,000 VND/giờ
                    </div>
                    <div class="main-img-2" style="position: relative;">
                        <img src="images/png/4f642cde3d0fa1d.jpg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-12 dflex">
                            <div class="text-2" sty>
                                <h3>Vũ Mỹ</h3>
                                <div class="text-2-down">
                                    <span class="text-left d-flex">
                                        <img src="images/ic_map_discount_room.svg" alt="" style="width:16px;margin-right:6px;">
                                        Huyện Cần Giờ, Hồ Chí Minh
                                    </span>
                                    <span class="text-right d-flex">
                                        <img src="images/ic_people.svg" alt="" style="width:16px;margin-right:6px;">
                                       200
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="result-item" href="/bookroom-more">
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
                <a class="result-item" href="/bookroom">
                    <div class="price-2 bg">
                        1,500,000 VND/giờ
                    </div>
                    <div class="main-img-2" style="position: relative;">
                        <img src="images/png/4f642cde3d0fa1d.jpg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-12 dflex">
                            <div class="text-2" sty>
                                <h3>Vũ Mỹ</h3>
                                <div class="text-2-down">
                                    <span class="text-left d-flex">
                                        <img src="images/ic_map_discount_room.svg" alt="" style="width:16px;margin-right:6px;">
                                        Huyện Cần Giờ, Hồ Chí Minh
                                    </span>
                                    <span class="text-right d-flex">
                                        <img src="images/ic_people.svg" alt="" style="width:16px;margin-right:6px;">
                                       200
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-5">
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
            let timeStart = Number($('.time-start .item').attr('data-value'));
            let timeEnd = Number($('.time-end .item').attr('data-value'));
            let provide = $('.provide .item').attr('data-value');
            let district = $('.district .item').attr('data-value');
            if (timeStart >= timeEnd) {
                alert('thời gian ko phù hợp')
            } else  if (provide == 'Tỉnh/Thành phố') {
                alert('Chọn Tỉnh/Thành phố');
            } else if (district == 'Quận/Huyện') {
                alert('Chọn Quận/Huyện');
            }
            })

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
@endsection