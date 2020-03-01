
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  <base href="{{ asset('/')}}">
  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->
        @include('admin.layouts.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')
    <!-- / Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('contents')
        </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
        @include('admin.layouts.aside')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
        @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

    @section('script')
        <!-- jQuery -->

        <script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin-lte/dist/js/adminlte.min.js')}}"></script>
    @show
</body>
</html>
