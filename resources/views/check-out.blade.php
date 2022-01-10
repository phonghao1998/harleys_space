@extends('app')
@section('template')
<div class="" id="checkOut">
    <div class="banner bg">
        <h3 class="text-center">
         Thông tin đặt phòng
        </h3>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-info">
                    <h3 class="title">
                     THÔNG TIN KHÁCH HÀNG
                    </h3>
                    <div class="row">
                        <div class="col-6 mt-3" >
                            <label class="label-form-info">Sự kiện</label>
                            <select id="select-event" placeholder="Pick a event" >
                                <option>Sự kiện</option>     
                                <option>Liên hoan</option>     
                                <option>Hội họp</option>     
                            </select>
                        </div>
                        <div class="col-6 mt-3" >
                            <label class="label-form-info">Họ và tên<span>*</span></label>
                            <input type="text" class="form-control form-control-name" placeholder="Nguyễn Văn A">
                            <p class="text-warn-name text-warn"></p>
                        </div>
                        <div class="col-6 mt-3" >
                            <label class="label-form-info">Email<span>*</span></label>
                            <input type="email" class="form-control form-control-email" placeholder="abc@gmail.com">
                            <p class="text-warn-email text-warn"></p>
                        </div>
                        <div class="col-6 mt-3" >
                            <label class="label-form-info">Số điện thoại<span>*</span></label>
                            <input type="tel" class="form-control form-control-phone" placeholder="09xx.xxx.xxx" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" id="phone" name="phone">
                            <p class="text-warn-phone text-warn"></p>
                        </div>
                        <div class="col-12 mt-3">
                            <label class="label-form-info">Ghi chú</label>
                            <textarea name="" id="" cols="50" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col-12 mt-3 d-flex">
                            <input type="checkbox" class="checkbox-rule">
                            <p class="rule-content">Bằng việc cung cấp thông tin này, Quý khách đồng ý với
                                <span> điều kiện, điều khoản chung và chính sách an toàn bảo mật</span>
                                của Harleys Space.
                            </p>
                        </div>
                    </div>
                    
                </div>
                <button  class="btn w-100 btn-checkout mt-5" type="submit">GỬI YÊU CẦU</button>

                <script type="text/javascript">
                    $("#select-event").select2({
                            placeholder: "Select a event",
                            
                    });
                    $('.btn-checkout').on('click', function() {
                        if(!$('.checkbox-rule').is(":checked")) {
                            alert("Bạn chưa đồng ý với điều khoản sử dụng của chúng tôi");
                        }else {}
                        if(!$('.form-control-email').val()) {
                            $('.text-warn-email').text('Email không được trống!')
                        } else {
                            $('.text-warn-email').text('')
                        }
                        if(!$('.form-control-phone').val()) {
                            $('.text-warn-phone').text('Số điện thọai không được trống!')
                        } else {
                            $('.text-warn-phone').text('')
                        }
                        if(!$('.form-control-name').val()) {
                            $('.text-warn-name').text('Họ tên không được trống!')
                        }else {
                            $('.text-warn-name').text('')
                        }
                    })

                </script>
            </div>
            <div class="col-lg-4">
                <div class="info-room">
                    <h3 class="title">THÔNG TIN PHÒNG</h3>
                    <p class="name-room">Vũ Mỹ</p>
                    <div class="info-detail">
                        <img src="images/ic_people.svg" alt="">
                        <span>200 người</span>
                    </div>
                    <div class="info-detail">
                        <img src="images/ic_time_infor_booking_detail.svg" alt="">
                        <span>06:00-07:00</span>
                    </div>
                    <div class="info-detail">
                        <img src="images/ic_calendar_infor_booking_detail.svg" alt="">
                        <span>14/01/2022</span>
                    </div>
                    <div class="info-detail">
                        <img src="images/ic_map_discount_room.svg" alt="">
                        <span> số 317</span>
                    </div>
                    <p class="service">Dịch vụ</p>
                    <div class="info-service">
                        <input type="checkbox" class="">
                        <img src="images/b411cb0fc64cc7f.png" alt="">
                        <span>Coffe</span>
                        <span class="price">10,000</span>
                    </div>
                    <div class="info-service">
                        <input type="checkbox" class="">
                        <img src="images/3fcdf5093500b7e.png" alt="">
                        <span>Trà nước</span>
                        <span class="price">15,000</span>
                    </div>
                    <h4 class="total mt-4">TỔNG CỘNG</h4>
                    <h2 class="total-price mt-3">

                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection