@extends('app')
@section('template')
<div class="" id="confirm">
    <div class="banner bg">
        <h3 class="text-center">
             Xác nhận đặt phòng
        </h3>
    </div>
    <div class="container">
        <h3 class="text-center title my-5">Cám ơn Anh/Chị đã đặt phòng của Harleys Space!</h3>
        <div class="info-confirm mb-5">
            <div class="row">
                <div class="col-md-4">
                    <a href="/bookroom" class="detail-img">
                        <img src="/images/png/4f642cde3d0fa1d.jpg" alt="" class="">
                    </a>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="info-detail w-100 mr-auto">
                        <h3 class="name-room">
                            Vũ Mỹ
                        </h3>
                        <label for="" class="">
                            <img src="images/ic_people.svg" alt="">
                            <span>200 Người</span>
                        </label>
                        <label for="" class="">
                            <img src="images/ic_dientich.svg" alt="">
                            <span>4000 m²</span>
                        </label>
                        <br>
                        <label for="" class="">
                            <img src="images/ic_money.svg" alt="">
                            <span>1,500,000 VND</span>
                        </label>
                        <br>
                        <label for="" class="">
                            <img src="images/ic_money.svg" alt="">
                            <span>06:00 - 07:00 </span>
                            <span>14/01/2022</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="condition-confirm mr-auto">
                        <div class="w-100 d-flex">
                            <img src="images/ic_choduyet.svg" alt="" class="text-center mr-auto">
                        </div>
                        <h4>Yêu cầu đang chờ duyệt</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection