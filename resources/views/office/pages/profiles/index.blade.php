@extends('studentuser.layouts.default_layout')
@section('title') หน้าหลัก @parent @endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header bg-warning">
            <h3 class="card-title">ประวัติส่วนตัว</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="row mb-5">
                <div class="col-md-4 mx-4 mt-3">
                    <img src="@if($student->avartar != ""){{asset('assets/images/students')}}/{{$student->avartar}} @else {{asset('assets/images/no_avatar.jpg')}} @endif"
                        class="img-fluid rounded">
                    <div class="row mt-2 mt-3">
                        <div class="col-md-4"><b>รหัสนิสิต</b></div>
                        <div class="col-md-8 text-primary">{{ $student->std_id }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><b>ชื่อ-สกุล</b></div>
                        <div class="col-md-8 text-primary">{{ $student->tname.$student->fname." ".$student->lname }}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><b>ชื่อเล่น</b></div>
                        <div class="col-md-8 text-primary">@if($student->profile){{ $student->profile->nickname }} @else
                            - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><b>หลักสูตร</b></div>
                        <div class="col-md-8 text-primary">{{ $student->major->major_name }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><b>อีเมล</b></div>
                        <div class="col-md-8 text-primary">{{ $student->email }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><b>โทรศัพท์มือถือ</b></div>
                        <div class="col-md-8 text-primary">{{ $student->tel }}</div>
                    </div>

                </div>
                <div class="col-md-7 mx-4 mt-3">
                    <div class="row mt-2">
                        <div class="col-md-3"><b>เพศ</b></div>
                        <div class="col-md-9 text-primary">{{ config('global.genders')[$student->gender] }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>วัน/เดือน/ปี เกิด</b></div>
                        <div class="col-md-9 text-primary">
                            @if($student->profile){{ date("d/m/Y", strtotime($student->profile->birthday)) }}@else -
                            @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>สัญชาติ</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->nationality }}
                            @else - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>ศาสนา</b></div>
                        <div class="col-md-9 text-primary">
                            @if($student->profile){{ config('global.religions')[$student->profile->religion] }} @else - @endif
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>หมู่เลือด</b></div>
                        <div class="col-md-9 text-primary">
                            @if($student->profile){{ config('global.bloods')[$student->profile->blood] }} @else - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>ที่อยู่</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->address }} @else
                            - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>อำเภอ</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->district }} @else
                            - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>จังหวัด</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->province }} @else
                            - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>รหัสไปรษณีย์</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->postcode }} @else
                            - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>โทรศัพท์บ้าน (ถ้ามี)</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->home_tel }} @else
                            - @endif</div>
                    </div>
                    <hr>
                    <p class="font-weight-bold text-danger">กรณีฉุกเฉิน ติดต่อ</p>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>ชื่อ-สกุล</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->emergency_name }}
                            @else - @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3"><b>โทรศัพท์</b></div>
                        <div class="col-md-9 text-primary">@if($student->profile){{ $student->profile->emergency_tel }}
                            @else - @endif</div>
                    </div>

                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-11 ml-3">
                    @if($student->profile)
                    <a class="btn btn-success" href="{{ route('profiles.edit', $student->std_id) }}"><i class="fas fa-pencil-alt"></i> แก้ไขข้อมูล</a>
                    @else
                    <a class="btn btn-warning" href="{{ route('profiles.create') }}"><i class="fas fa-pencil-alt"></i> แก้ไขข้อมูล</a>
                    @endif
                </div>
            </div>
        </div>
</section>
@endsection