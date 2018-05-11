<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin|Add Doctor</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    {{--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/themify-icons/themify-icons.min.css')}}">
    <link href="{{asset('css/vendor/animate.css/animate.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/vendor/perfect-scrollbar/perfect-scrollbar.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/vendor/switchery/switchery.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/vendor/select2/select2.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/themes/theme-1.css')}}" id="skin_color"/>
    <link rel="stylesheet" href="{{asset('assets/css/themes/theme-1.css')}}"/>

    {{--<script src="{{asset('js/main.js')}}"></script>--}}
</head>
<body>
<div id="app">

    @include('pharmacist.sidebar')
    <div class="app-content">
        @include('admin.header')
        @include('flashalert::alert')
        @yield('content')
    </div>
</div>

@include('admin.footer')
@include('admin.setting')

<!-- start: MAIN JAVASCRIPTS -->
<script src="{{asset('css/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('css/vendor/modernizr/modernizr.js')}}"></script>
<script src="{{asset('css/vendor/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('css/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('css/vendor/switchery/switchery.min.js')}}"></script>
<!-- end: MAIN JAVASCRIPTS -->

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{asset('css/vendor/maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('css/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('css/vendor/autosize/autosize.min.js')}}"></script>
<script src="{{asset('css/vendor/selectFx/classie.js')}}"></script>
<script src="{{asset('css/vendor/selectFx/selectFx.js')}}"></script>
<script src="{{asset('css/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('css/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('css/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="{{asset('js/main.js')}}"></script>

<!-- start: JavaScript Event Handlers for this page -->
<script src="{{asset('js/form-elements.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });
</script>
</body>
</html>
