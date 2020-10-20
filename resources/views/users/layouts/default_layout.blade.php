<!DOCTYPE html>
<html>
<head>
    @include('users.includes.head_style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('users.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('users.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 60px">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @include('users.includes.footer')

</div>
<!-- ./wrapper -->

@include('users.includes.foot_script')
</body>
</html>
