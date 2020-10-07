<!DOCTYPE html>
<html>
<head>
    @include('office.includes.head_style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('office.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('office.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 60px">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @include('office.includes.footer')

</div>
<!-- ./wrapper -->

@include('office.includes.foot_script')
</body>
</html>
