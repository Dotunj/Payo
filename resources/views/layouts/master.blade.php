<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('test/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{!! asset('test/vendor/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{!! asset('test/vendor/datatables/dataTables.bootstrap4.css')!!}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!! asset('test/css/sb-admin.css') !!}" rel="stylesheet">

</head>
  <body id="page-top">
  @include('layouts.navbar')
  @yield('content')

   <!-- Bootstrap core JavaScript -->
    <script src="{!! asset('test/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('test/vendor/tether/tether.min.js') !!}"></script>
    <script src="{!! asset('test/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>

    <!-- Plugin JavaScript -->
    <script src="{!! asset('test/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
    <script src="{!! asset('test/vendor/chart.js/Chart.min.js') !!}"></script>
    <script src="{!! asset('test/vendor/datatables/jquery.dataTables.js') !!}"></script>
    <script src="{!! asset('test/vendor/datatables/dataTables.bootstrap4.js') !!}"></script>
    <!-- Custom scripts for this template-->
    <script src="{!! asset('test/js/sb-admin.min.js') !!}"></script>
</body>
</html>
