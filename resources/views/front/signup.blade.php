<!DOCTYPE html>

<html>



<head>

    <title>Restaurant</title>



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




<section class="login-section">
  
    
    @if ($errors->login->first('email') && $errors->login->first('mobile'))
        <div class="alert alert-danger" style="text-align: center;">
            {{ $errors->login->first('email') }} {{ $errors->login->first('mobile') }}
        </div>
    @elseif ($errors->login->first('email'))
        <div class="alert alert-danger" style="text-align: center;">
            {{ $errors->login->first('email') }}
        </div>
    @elseif ($errors->login->first('mobile'))
        <div class="alert alert-danger" style="text-align: center;">
            {{ $errors->login->first('mobile') }}
        </div>
    @endif

    @if ($errors->login->first('name'))
        <div class="alert alert-danger" style="text-align: center;">
            {{ $errors->login->first('name') }}
        </div>
    @endif

    @if ($errors->login->first('password'))
        <div class="alert alert-danger" style="text-align: center;">
            {{ $errors->login->first('password') }}
        </div>
    @endif

    @if (\Session::has('danger'))
        <div class="alert alert-danger" style="text-align: center;">
            {!! \Session::get('danger') !!}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" style="text-align: center;">
            {{ $errors->first() }}
        </div>
    @endif

 <div class="login-container">
        <div class="login-content">
            <div class="login-logo">
                <a href="{{URL::to('/')}}">
                    <img src='{!! asset("images/logo.png") !!}' alt="Restaurant Logo">
                  
                </a>
            </div>

        <form action="{{ URL::to('/signup/signup') }}" method="post">
            @csrf

            <input class="input-field" type="text" name="name" placeholder="Full name" class="w-100" value="{{ old('name') }}">
            <input class="input-field" type="text" name="email" placeholder="Email" class="w-100" value="{{ old('email') }}">
            <input class="input-field" type="text" name="mobile" placeholder="Mobile" class="w-100" value="{{ old('mobile') }}">
            <input class="input-field" type="password" name="password" placeholder="Password" class="w-100">
            <input class="input-field" type="password" name="password_confirmation" placeholder="Confirm password" class="w-100">
            <input class="input-field" type="text" name="referral_code" placeholder="Referral code (Optional)" class="w-100" value="{{ Request()->referral_code }}">
            
            <label class="accept-check w-100" for="accept">
                <input class="input-field" type="checkbox" name="accept" id="accept" required="">
                <p class="already-p">I accept the <a href="{{ URL::to('/terms') }}">terms & conditions</a></p>
            </label>

            <button class="btn">Signup</button>
            <p class="already">Already have an account? <a href="{{ URL::to('/signin') }}">Login</a></p>
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