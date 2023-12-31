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
   
<div class="login-container">
        <div class="login-content">
            <div class="login-logo">
                <a href="{{URL::to('/')}}">
                    <img src='{!! asset("images/logo.png") !!}' alt="Restaurant Logo">
                  
                </a>
            </div>
        <form id="login" action="{{ URL::to('/email-verification') }}" method="post">
            @csrf
            <input  class="input-field" type="email" name="email" id="email" placeholder="Email" class="w-100" value="{{Session::get('email')}}" readonly="">
            @if (env('Environment') == 'sendbox')
                <input  class="input-field" type="number" name="otp" id="otp" min="1" maxlength="6" placeholder="Verification code" class="w-100" required="" value="{{Session::get('otp')}}">
            @else
                <input  class="input-field" type="number" name="otp" id="otp" min="1" maxlength="6" placeholder="Verification code" class="w-100" required="">
            @endif  

            
            <button type="submit" class="btn">Verify</button>
            <p class="already">Didn't get an email? <span class="Btn" id="verifiBtn"></span><span id="timer"></span></p>
            @if (\Session::has('danger'))
                <div class="alert alert-danger w-100">
                    {!! \Session::get('danger') !!}
                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success w-100">
                    {!! \Session::get('success') !!}
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


<script>
	let timerOn = true;

	function timer(remaining) {
	  var m = Math.floor(remaining / 60);
	  var s = remaining % 60;
	  
	  m = m < 10 ? '0' + m : m;
	  s = s < 10 ? '0' + s : s;
	  document.getElementById('timer').innerHTML = m + ':' + s;
	  remaining -= 1;
	  
	  if(remaining >= 0 && timerOn) {
	    setTimeout(function() {
	        timer(remaining);
	    }, 1000);
	    return;
	  }

	  if(!timerOn) {
	    // Do validate stuff here
	    return;
	  }
	  
	  // Do timeout stuff here
	  document.getElementById("verifiBtn").innerHTML = `<a href="{{URL::to('/resend-email')}}">Resend</a>`;
	  document.getElementById("timer").innerHTML = "";
	}

	timer(120);
</script>
</body>

</html>