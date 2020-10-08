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
                <div class="card-header bg-warning">เข้าสู่ระบบด้วย TSU iPass</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('personAuth') }}">
                        @csrf
                        @if($message = Session::get('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-7">
                                <input id="username" name="username" type="text" class="form-control" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    เข้าสู่ระบบ
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
