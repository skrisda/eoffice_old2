@extends('studentuser.layouts.default_layout')
@section('title') หน้าหลัก @parent @endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header bg-warning">
            <h3 class="card-title">แก้ไขประวัติส่วนตัว</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body p-0">
            <form role="form" method="post" action="{{ route('profiles.update', $student->std_id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name">ชื่อสกุล</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $student->tname.$student->fname." ".$student->lname }}" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nickname">ชื่อเล่น</label>
                                <div class="col-md-4">
                                    <input type="text"
                                        class="form-control  {{ $errors->has('nickname') ? 'is-invalid' :'' }}"
                                        id="nickname" name="nickname" placeholder="ป้อนชื่อเล่น"
                                        value="{{ $student->profile->nickname }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('nickname') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">อีเมล</label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' :'' }}" id="email"
                                        name="email" placeholder="ป้อนที่อยู่อีเมล" value="{{ $student->email }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('email') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tel">โทรศัพท์มือถือ</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control {{ $errors->has('tel') ? 'is-invalid' :'' }}"
                                        id="tel" name="tel" placeholder="ป้อนหมายเลขโทรศัพท์มือถือ"
                                        value="{{ $student->tel }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('tel') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender">เพศ</label>
                                <div class="col-md-3">
                                    <select class="form-control {{ $errors->has('gender') ? 'is-invalid' :'' }}"
                                        id="gender" name="gender">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="1" @if($student->gender == 1) selected @endif>ชาย</option>
                                        <option value="2" @if($student->gender == 2) selected @endif>หญิง</option>
                                        <option value="3" @if($student->gender == 3) selected @endif>เพศที่สาม</option>
                                    </select>
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('gender') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birthday">วัน/เดือน/ปี คศ. เกิด</label>
                                <div class="col-md-5">
                                    <input type="date"
                                        class="form-control {{ $errors->has('birthday') ? 'is-invalid' :'' }}"
                                        id="birthday" name="birthday" placeholder="เลือก วัน/เดือน/ปี คศ. เกิด"
                                        value="{{ $student->profile->birthday }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('birthday') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nationality">สัญชาติ</label>
                                <div class="col-md-5">
                                    <input type="text"
                                        class="form-control {{ $errors->has('nationality') ? 'is-invalid' :'' }}"
                                        id="nationality" name="nationality" placeholder="ป้อนสัญชาติ"
                                        value="{{ $student->profile->nationality }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('nationality') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="religion">ศาสนา</label>
                                <div class="col-md-3">
                                    <select class="form-control {{ $errors->has('religion') ? 'is-invalid' :'' }}"
                                        id="religion" name="religion">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="1" @if($student->profile->religion == 1) selected @endif>พุทธ</option>
                                        <option value="2" @if($student->profile->religion == 2) selected @endif>อิสลาม</option>
                                        <option value="3" @if($student->profile->religion == 3) selected @endif>คริสต์</option>
                                        <option value="4" @if($student->profile->religion == 4) selected @endif>อื่นๆ</option>
                                    </select>
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('religion') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blood">กรุ๊ปเลือด (ถ้ามี)</label>
                                <div class="col-md-3">
                                    <select class="form-control {{ $errors->has('blood') ? 'is-invalid' :'' }}"
                                        id="blood" name="blood">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="1" @if($student->profile->blood == 1) selected @endif>A</option>
                                        <option value="2" @if($student->profile->blood == 2) selected @endif>B</option>
                                        <option value="3" @if($student->profile->blood == 3) selected @endif>AB</option>
                                        <option value="4" @if($student->profile->blood == 4) selected @endif>O</option>
                                    </select>
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('blood') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">ที่อยู่</label>
                                <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' :'' }}"
                                    id="address" name="address" placeholder="ป้อนที่อยู่" value="{{ $student->profile->address }}">
                                <span
                                    class="help-block text-danger"><small>{{ $errors->first('address') }}</small></span>
                            </div>

                            <div class="form-group">
                                <label for="district">อำเภอ</label>
                                <div class="col-md-5">
                                    <input type="text"
                                        class="form-control {{ $errors->has('district') ? 'is-invalid' :'' }}"
                                        id="district" name="district" placeholder="ป้อนอำเภอ"
                                        value="{{ $student->profile->district }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('district') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="province">จังหวัด</label>
                                <div class="col-md-5">
                                    <input type="text"
                                        class="form-control {{ $errors->has('province') ? 'is-invalid' :'' }}"
                                        id="province" name="province" placeholder="ป้อนจังหวัด"
                                        value="{{ $student->profile->province }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('province') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="postcode">รหัสไปรษณีย์</label>
                                <div class="col-md-3">
                                    <input type="text"
                                        class="form-control {{ $errors->has('postcode') ? 'is-invalid' :'' }}"
                                        id="postcode" name="postcode" placeholder="ป้อนรหัสไปรษณีย์"
                                        value="{{ $student->profile->postcode }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('postcode') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="home_tel">โทรศัพท์บ้าน (ถ้ามี)</label>
                                <div class="col-md-5">
                                    <input type="text"
                                        class="form-control {{ $errors->has('home_tel') ? 'is-invalid' :'' }}"
                                        id="home_tel" name="home_tel" placeholder="ป้อนหมายเลขโทรศัพท์บ้าน"
                                        value="{{ $student->profile->home_tel }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('home_tel') }}</small></span>
                                </div>
                            </div>
                            <hr>
                            <p class="font-weight-bold text-danger">ผู้ติดต่อ กรณีฉุกเฉิน</p>
                            <div class="form-group">
                                <label for="emergency_name">ชื่อ-สกุล</label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="form-control {{ $errors->has('emergency_name') ? 'is-invalid' :'' }}"
                                        id="emergency_name" name="emergency_name"
                                        placeholder="ป้อนชื่อ-สกุล ผู้ติดต่อกรณีฉุกเฉิน"
                                        value="{{ $student->profile->emergency_name }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('emergency_name') }}</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="emergency_tel">โทรศัพท์</label>
                                <div class="col-md-5">
                                    <input type="text"
                                        class="form-control {{ $errors->has('emergency_tel') ? 'is-invalid' :'' }}"
                                        id="emergency_tel" name="emergency_tel"
                                        placeholder="ป้อนหมายเลขโทรศัพท์ ผู้ติดต่อกรณีฉุกเฉิน"
                                        value="{{ $student->profile->emergency_tel }}">
                                    <span
                                        class="help-block text-danger"><small>{{ $errors->first('emergency_tel') }}</small></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="font-weight-bold">ภาพถ่าย</p>
                                <center><img src="@if($student->avartar == ""){{asset('assets/images/no_avatar.jpg')}} @else {{asset('assets/images/students/'.$student->avartar)}} @endif" id="output"
                                        class="img-fluid rounded ">
                                    <center>
                                        <span class="btn btn-primary btn-file mt-3">
                                            เลือกไฟล์ <input type="file" name="avartar" id="avartar"
                                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                        </span>
                                        <p class="label-uppic">เลือกภาพถ่าย</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">ปรับปรุงประวัติส่วนตัว</button> &nbsp;<a class="btn btn-warning" href="{{ url('studentuser/profiles') }}">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection