@extends('studentuser.layouts.default_layout')
@section('title') หน้าหลัก @parent @endsection

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header bg-secondary">
      <h3 class="card-title">การเข้าร่วมกิจกรรมนอกหลักสูตรของนิสิตคณะวิทยาศาสตร์</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-bordered projects">
        <thead>
          <tr class="bg-warning">
            <th class="text-center">ประเภทกิจกรรม</th>
            <th class="text-center">ชั้นปีที่ 1</th>
            <th class="text-center">ชั้นปีที่ 2</th>
            <th class="text-center">ชั้นปีที่ 3</th>
            <th class="text-center">ชั้นปีที่ 4</th>
            <th class="text-center">รวม</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1) กิจกรรมของมหาวิทยาลัย</td>
            <td class="text-center" colspan="4">ไม่น้อยกว่า 2</td>
            <td class="text-center">2</td>
          </tr>
          <tr>
            <td>2) กิจกรรมของคณะวิทยาศาสตร์</td>
            <td class="text-center">ไม่น้อยกว่า 2</td>
            <td class="text-center">ไม่น้อยกว่า 3</td>
            <td class="text-center">ไม่น้อยกว่า 2</td>
            <td class="text-center">ไม่น้อยกว่า 1</td>
            <td class="text-center">8</td>
          </tr>
          <tr>
            <td>3) กิจกรรมของสโมสรนิสิตคณะวิทยาศาสตร์</td>
            <td class="text-center">ไม่น้อยกว่า 2</td>
            <td class="text-center">ไม่น้อยกว่า 3</td>
            <td class="text-center">ไม่น้อยกว่า 2</td>
            <td class="text-center">ไม่น้อยกว่า 1</td>
            <td class="text-center">8</td>
          </tr>
          <tr>
            <td>4) กิจกรรมเลือกเสรี</td>
            <td class="text-center" colspan="4">ไม่น้อยกว่า 2</td>
            <td class="text-center">2</td>
          </tr>
          <tr>
            <td>5) งานสัปดาห์วิทยาศาสตร์</td>
            <td class="text-center" colspan="4">ไม่น้อยกว่า 2</td>
            <td class="text-center">2</td>
          </tr>
          <tr>
            <td class="text-center" colspan="5">รวม</td>
            <td class="text-center">22</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- Default box -->
  <div class="card">
    <div class="card-header bg-secondary">
      <h3 class="card-title">กิจกรรมที่กำลังจะเกิดขึ้น</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped projects">
        <thead>
          <tr class="bg-warning">
            <th class="text-center">#</th>
            <th>ชื่อกิจกรรม</th>
            <th>สถานที่</th>
            <th>ประเภทกิจกรรม</th>
            <th>วันที่</th>
            <th>สถานะ</th>
            <th class="text-right">รายละเอียด</th>
          </tr>
        </thead>
        <tbody>
          @foreach($activities as $activity)
          <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{  $activity->act_name  }}</td>
            <td>{{  $activity->place  }}</td>
            <td>{{  $activity->category->cat_name  }}</td>
            <td>
              @if(!strcmp(date("d/m/Y", strtotime($activity->start)), date("d/m/Y", strtotime($activity->end))))
              {{ date("d/m/Y", strtotime($activity->start))  }}
              @elseif(!strcmp(date("m/Y", strtotime($activity->start)), date("m/Y", strtotime($activity->end))))
              {{ date("d", strtotime($activity->start))." - " . date("d/m/Y", strtotime($activity->end))  }}
              @else
              {{  date("d/m/Y", strtotime($activity->start))." - ". date("d/m/Y", strtotime($activity->end))  }}
              @endif
            </td>
            <td>
              @if(count($activity->students->where('std_id', $student->std_id)))
              <span class="text-success"><i class="fa  fa-check-circle fa-sm" aria-hidden="true"></i> สมัครแล้ว</span>
              @else 
              -
              @endif
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="{{ url('studentuser/activity_show', $activity->act_id) }}">
                <i class="fas fa-eye">
                </i>
                รายละเอียดกิจกรรม
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-3" style="padding-left: 40%;">{{ $activities->links() }}</div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection