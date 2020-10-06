@extends('frontend.layouts.default_layout')
@section('title') Home @parent @endsection

@section('content')
{{-- <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/nisit.jpg')}}" class="img-fluid" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/sea.jpg')}}" class="img-fluid" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/travel.jpg')}}" class="img-fluid" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}
<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header bg-info">ข่าวประชาสัมพันธ์</div>
                <div class="card-body text-primary p-2">
                    <p class="text-secondary text-center">-- ไม่มี --</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-warning">ระบบสารสนเทศคณะวิทยาศาสตร์</div>
                <div class="card-body text-primary p-2">
                    <ul>
                        <li><a href="{{ url('http://mis.sci.tsu.ac.th/repair') }}"
                                target="_blank">ระบบแจ้งซ่อมคณะวิทยาศาสตร์</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
