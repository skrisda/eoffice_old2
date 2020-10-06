@extends('studentuser.layouts.default_layout')
@section('title') หน้าหลัก @parent @endsection

@section('content')

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header bg-secondary">
            <h3 class="card-title">สรุปการเข้าร่วมกิจกรรม</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table class="table projects">
                <thead>
                    <tr class="bg-warning">
                        <th class="text-center" style="width:5%">#</th>
                        <th>ชื่อกิจกรรม</th>
                        <th style="width:20%">ระหว่างวันที่</th>
                        <th style="width:15%">ภาคเรียน/ปีการศึกษา</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-light">
                        <th colspan="3">1) กิจกรรมกลางของมหาวิทยาลัย</th>
                        <th>เข้าร่วมแล้ว : <span class="text-success">{{ count($act1) }}</span> /2</th>
                    </tr>
                    @if(count($act1))
                    @foreach($act1 as $activity)
                    <tr>
                        <td class="text-center text-success"><i class="fa  fa-check-circle fa-sm"
                                aria-hidden="true"></i></td>
                        <td>{{  $activity->act_name  }}</td>
                        <td>
                            @if(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y",
                            strtotime($activity->end))))
                            {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
                            @else
                            {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
                            @endif
                        </td>
                        <td>
                            {{ $activity->term."/".$activity->year }}
                        </td>
                    </tr>
                    @endforeach
                    @else 
                    <tr><td class="text-center" colspan="4">-- ไม่มี --</td></tr>
                    @endif
                    <tr class="bg-light">
                        <th colspan="3">2) กิจกรรมของคณะวิทยาศาสตร์</th>
                        <th>เข้าร่วมแล้ว : <span class="text-success">{{ count($act2) }}</span> /8</th>
                    </tr>
                    @if(count($act2))
                    @foreach($act2 as $activity)
                    <tr>
                        <td class="text-center text-success"><i class="fa  fa-check-circle fa-sm"
                                aria-hidden="true"></i></td>
                        <td>{{  $activity->act_name  }}</td>
                        <td>
                            @if(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y",
                            strtotime($activity->end))))
                            {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
                            @else
                            {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
                            @endif
                        </td>
                        <td>
                            {{ $activity->term."/".$activity->year }}
                        </td>
                    </tr>
                    @endforeach
                    @else 
                    <tr><td class="text-center" colspan="4">-- ไม่มี --</td></tr>
                    @endif
                    <tr class="bg-light">
                        <th colspan="3">3) กิจกรรมของสโมสรนิสิตคณะวิทยาศาสตร์</th>
                        <th>เข้าร่วมแล้ว : <span class="text-success">{{ count($act3) }}</span> /8</th>
                    </tr>
                    @if(count($act3))
                    @foreach($act3 as $activity)
                    <tr>
                        <td class="text-center text-success"><i class="fa  fa-check-circle fa-sm"
                                aria-hidden="true"></i></td>
                        <td>{{  $activity->act_name  }}</td>
                        <td>
                            @if(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y",
                            strtotime($activity->end))))
                            {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
                            @else
                            {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
                            @endif
                        </td>
                        <td>
                            {{ $activity->term."/".$activity->year }}
                        </td>
                    </tr>
                    @endforeach
                    @else 
                    <tr><td class="text-center" colspan="4">-- ไม่มี --</td></tr>
                    @endif
                    <tr class="bg-light">
                        <th colspan="3">4) กิจกรรมเลือกเสรี</th>
                        <th>เข้าร่วมแล้ว : <span class="text-success">{{ count($act4) }}</span> /2</th>
                    </tr>
                    @if(count($act4))
                    @foreach($act4 as $activity)
                    <tr>
                        <td class="text-center text-success"><i class="fa  fa-check-circle fa-sm"
                                aria-hidden="true"></i></td>
                        <td>{{  $activity->act_name  }}</td>
                        <td>
                            @if(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y",
                            strtotime($activity->end))))
                            {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
                            @else
                            {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
                            @endif
                        </td>
                        <td>
                            {{ $activity->term."/".$activity->year }}
                        </td>
                    </tr>
                    @endforeach
                    @else 
                    <tr><td class="text-center" colspan="4">-- ไม่มี --</td></tr>
                    @endif
                    <tr class="bg-light">
                        <th colspan="3">5) งานสัปดาห์วิทยาศาสตร์</th>
                        <th>เข้าร่วมแล้ว : <span class="text-success">{{ count($act5) }}</span> /2</th>
                    </tr>
                    @if(count($act5))
                    @foreach($act5 as $activity)
                    <tr>
                        <td class="text-center text-success"><i class="fa  fa-check-circle fa-sm"
                                aria-hidden="true"></i></td>
                        <td>{{  $activity->act_name  }}</td>
                        <td>
                            @if(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y",
                            strtotime($activity->end))))
                            {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
                            @else
                            {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
                            @endif
                        </td>
                        <td>
                            {{ $activity->term."/".$activity->year }}
                        </td>
                    </tr>
                    @endforeach
                    @else 
                    <tr><td class="text-center" colspan="4">-- ไม่มี --</td></tr>
                    @endif
                    <tr class="bg-light">
                        <th colspan="3" class="text-center">รวม</th>
                        <th><span class="text-success">{{ count($act1)+ count($act2)+ count($act3)+ count($act4)+ count($act5) }}</span> /22 กิจกรรม</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection