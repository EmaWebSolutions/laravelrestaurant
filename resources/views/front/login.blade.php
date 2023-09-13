<!DOCTYPE html>
<html>

<head>
    <title>restaurant</title>

    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon-icon  -->
    <link rel="icon" href='{!! asset("images/logo.png") !!}' type="image/x-icon">

    <!-- font-awsome css  -->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/font-awsome.css') !!}">

    <!-- fonts css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/fonts/fonts.css') !!}">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/bootstrap.min.css') !!}">

    <!-- fancybox css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/owl.carousel.min.css') !!}">

    <link href="{!! asset('assets/plugins/sweetalert/css/sweetalert.css') !!}" rel="stylesheet">
    <!-- style css  -->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/style.css') !!}">

    <!-- responsive css  -->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/responsive.css') !!}">

</head>

<body>

<div id="success-msg" class="alert alert-dismissible mt-3" style="display: none;">
    <span id="msg"></span>
</div>

<div id="error-msg" class="alert alert-dismissible mt-3" style="display: none;">
    <span id="ermsg"></span>
</div>
<!--
<section class="signup-sec">
    <img src='{!! asset("images/bg.jpg") !!}' class="bg-img" alt="">
    <div class="container">
        <div class="signup-logo">
            <a href="{{URL::to('/')}}">
                <img src='{!! asset("images/logo.png") !!}' alt="">
                <p>{{$getabout->short_title}}</p>
            </a>
        </div>
        <form id="login" action="{{ URL::to('/signin/login') }}" method="post">
            @csrf
            <input type="email" name="email" id="email" placeholder="Email" class="w-100" required="">
            <input type="password" name="password" id="password" placeholder="Password" class="w-100" required="">
            <button type="submit" class="btn w-100">Login</button>
            <a href="{{ url('auth/google') }}" class="btn w-50 mt-3" style="background-color: #fff;">
                <img src='{!! asset("front/images/ic_google.png") !!}' alt="">
            </a>
            <a href="{{ url('auth/facebook') }}" class="btn w-50 mt-3" style="background-color: #fff;">
                <img src='{!! asset("front/images/ic_fb.png") !!}' alt="">
            </a>
            <p class="already">Don't have an account? <a href="{{URL::to('/signup')}}">Signup</a></p>
            <p class="already"><a href="{{URL::to('/forgot-password')}}">Forgot Password?</a></p>
            @if (\Session::has('danger'))
                <div class="alert alert-danger w-100">
                    {!! \Session::get('danger') !!}
                </div>
            @endif
        </form>
    </div>
</section>

-->

<section class="login-section">

    <div class="login-container">
        <div class="login-content">
            <div class="login-logo">
                <a href="{{URL::to('/')}}">
                    <img src='{!! asset("images/logo.png") !!}' alt="Restaurant Logo">
                  
                </a>
            </div>
            <form id="login" action="{{ URL::to('/signin/login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email" class="input-field" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" class="input-field" required>
                </div>
                <button type="submit" class="login-button">Login</button>
                <div class="social-buttons">
                    <a href="{{ url('auth/google') }}" class="social-button google-button">
                        <img src='{!! asset("front/images/ic_google.png") !!}' alt=""> Login with Google
                    </a>
                    <a href="{{ url('auth/facebook') }}" class="social-button facebook-button">
                        <img src='{!! asset("front/images/ic_fb.png") !!}' alt=""> Login with Facebook
                    </a>
                </div>
                <p class="signup-link">Don't have an account? <a href="{{URL::to('/signup')}}">Sign up</a></p>
                <p class="forgot-password-link"><a href="{{URL::to('/forgot-password')}}">Forgot Password?</a></p>
                @if (\Session::has('danger'))
                    <div class="alert alert-danger">
                        {!! \Session::get('danger') !!}
                    </div>
                @endif
            </form>
        </div>
    </div>
</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- bootstrap js -->
<script src="{!! asset('front/js/bootstrap.bundle.js') !!}"></script>

<!-- owl.carousel js -->
<script src="{!! asset('front/js/owl.carousel.min.js') !!}"></script>

<!-- lazyload js -->
<script src="{!! asset('front/js/lazyload.js') !!}"></script>

<!-- custom js -->
<script src="{!! asset('front/js/custom.js') !!}"></script>
</body>

</html>