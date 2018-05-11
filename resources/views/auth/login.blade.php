{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-Prescribing sys </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" #">
    <link rel="stylesheet" href="{{asset('css/library/css/style.css')}}" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/library/css/font-awesome.css')}}" type="text/css" media="all">
</head>

<body>
<h1 class="title-agile text-center">E-Prescribing System</h1>
<div class="content-w3ls">
    <div class="agileits-grid">
        <div class="content-top-agile">
            <h2>User Login</h2>
            <p>
                <span style="color:red;"></span>
            </p>
        </div>

        <div class="content-bottom">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="field_w3ls">
                    <div class="field-group">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="field-group">
                        <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Password" required autofocus>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block" style="color:red; margin-bottom: 10px;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <div class="wthree-field" style="margin-top:20px;">
                    <input id="saveForm" name="submit" type="submit" value="Login" />

                </div>
                <ul class="list-login">
                    <li class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            keep me signed in
                        </label>
                    </li>
                    <li>
                        {{--<a href="{{route('')}}" class="text-right">create account</a>--}}
                    </li>
                    <li class="clearfix"></li>
                </ul>
            </form>
        </div>
        <!-- //content bottom -->
    </div>
</div>
<div class="copyright text-center">
    <p>© 2018 epresribing sys. All rights reserved |
        {{--<a href="http://dreamcache.co.zw">tremendous</a>--}}
    </p>
</div>
<!--//copyright-->
<script src="{{asset('css/library/js/jquery-2.2.3.min.js')}}"></script>
<!-- script for show password -->
<script>
    $(".toggle-password").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
<!-- /script for show password -->

</body>
<!-- //Body -->

</html>