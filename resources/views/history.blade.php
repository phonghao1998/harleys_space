@extends('app')
@section('template')
<div class="bg " id="history" style="padding-top:80px;">
    <div class="container mr-auto">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="content-history">
                    <div class="row">
                        <div class="col-md-6 col-12 d-flex">
                            <form action method="get" class="form-search mr-auto">
                                <h4>
                                Nhập số điện thoại đặt lịch
                                </h4>
                                <input type="text" class="w-100 mb-3 form-search-input"  placeholder="Nhập số điện thoại cần tìm">
                                <button class="btn btn-search w-100 text-white" style="background:#955c2a">
                                    <img src="images/ic_search.svg" alt="">
                                    <span class="">TÌM KIẾM</span>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6 col-12">
                            <img src="images/img_booking_history.svg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection