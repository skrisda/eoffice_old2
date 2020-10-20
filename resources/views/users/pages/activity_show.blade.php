@extends('studentuser.layouts.default_layout')
@section('title') หน้าหลัก @parent @endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header bg-warning">
            <h3 class="card-title">ชื่อกิจกรรม : {{ $activity->act_name }}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body m-1">
            <div class="row">
                <div class="font-weight-bold">รายละเอียดกิจกรรม : </div>
                <div> {{ $activity->act_detail }}</div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>สถานที่</th>
                                <td class="text-primary">{{ $activity->place }}</td>
                            </tr>
                            <tr>
                                <th>ภาคเรียน/ปีการศึกษา</th>
                                <td class="text-primary">{{ $activity->term.'/'.$activity->year }}</td>
                            </tr>
                            <tr>
                                <th>จำนวนชั่วโมง</th>
                                <td class="text-primary">{{ $activity->hours }} ชั่วโมง</td>
                            </tr>
                            <tr>
                                <th>ประเภทกิจกรรม</th>
                                <td class="text-primary">{{ $activity->category->cat_name }}</td>
                            </tr>
                            <tr>
                                <th>ชนิดกิจกรรม</th>
                                <td class="text-primary">{{ $activity->type->type_name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>เจ้าของโครงการ</th>
                                <td class="text-primary">{{ $activity->owner }}</td>
                            </tr>
                            <tr>
                                <th>วันที่จัดโครงการ</th>
                                <td class="text-primary">
                                    @if(!strcmp(date("d/m/Y", strtotime($activity->start)), date("d/m/Y",
                                    strtotime($activity->end))))
                                    {{ date("d/m/Y", strtotime($activity->start))  }}
                                    @elseif(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y",
                                    strtotime($activity->end))))
                                    {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
                                    @else
                                    {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>เปิดรับลงทะเบียนล่วงหน้าวันที่</th>
                                <td class="text-primary">
                                    @if($activity->reg == 0) กิจกรรมนี้ไม่เปิดให้ลงทะเบียนล่วงหน้า
                                    @else
                                    {{ date("d/m/Y", strtotime($activity->open))." - ". date("d/m/Y", strtotime($activity->close)) }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>สถานะโครงการ</th>
                                <td class="text-primary">{{ config('global.activity_status')[ $activity->status]}}</td>
                            </tr>
                            <tr>
                                <th>งบประมาณ</th>
                                <td class="text-primary">@if($activity->budget == NULL) - @else {{ $activity->budget }}
                                    บาท @endif</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    @if($activity->reg == 0)
                    <a class="btn btn-warning" href="{{ url('studentuser/home') }}">ย้อนกลับ</a>
                    @else
                        @if(empty($isReg))
                        <form role="form" method="post" action="{{ url('studentuser/activity_regist') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $activity->act_id }}">
                            <a class="btn btn-warning" href="{{ url('studentuser/home') }}">ย้อนกลับ</a>
                            <button type="submit" class="btn btn-primary">สมัครเข้าร่วมกิจกรรม</button>
                        </form>
                        @else
                        <form role="form" method="post" action="{{ url('studentuser/activity_cancel') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $activity->act_id }}">
                            <a class="btn btn-warning" href="{{ url('studentuser/home') }}">ย้อนกลับ</a>
                            <button type="submit" class="btn btn-danger">ยกเลิกการสมัคร</button>
                        </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection