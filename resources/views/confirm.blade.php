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
                            <span class="total-price"></span>
                        </label>
                        <br>
                        <label for="" class="time-info">
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
<script type="text/javascript">
    var Price = localStorage.getItem("finalPrice");
    var Day = localStorage.getItem("dataDay");
    var Time = localStorage.getItem("dataTime").split(",");
    var l = Time.length;
    console.log(html);
    var html = '';
    for(var i = 0; i < l ; i++) {
        html += '<img src="images/ic_time_infor_booking_detail.svg">' + '<span>' +Time[i]+ '</span>' + '<span>' +Day+ '</span>' + '</br>'
    }
    // $('#confirm').on('click', function() {
    //     $('.total-price').html(addCommas(Price) + ' VND');
    //     $('.time-info').html(html);
    // })

    $(function() {
        return $('.total-price').html(addCommas(Price) + ' VND');
    })

    $(function() {
        $('.time-info').html(html);
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