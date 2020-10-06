<!DOCTYPE html>
<html>
<head>
    @include('studentuser.includes.head_style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('studentuser.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('studentuser.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 60px">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @include('studentuser.includes.footer')

</div>
<!-- ./wrapper -->

@include('studentuser.includes.foot_script')
</body>
</html>
