@extends('frontend.layouts.default_layout')
@section('title')Login @parent @endsection

@section('content')
<div class="container">
    <div class="login-logo mt-3">
        <a href="#"><b>e-Office</b> Login</a>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">ล๊อกอินเข้าสู่ระบบด้วย TSU iPass</div>

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

                            <div class="col-md-6">
                                <input id="username" name="username" type="text" class="form-control" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
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
