@include('front.theme.header')
<section class="banner-about">
    <div class="container-fluid px-0">
           <div>
             <div class="item">
                <img src='{!! asset("images/item/about.jpg") !!}' alt="">
                <div class="banner-contant">
                    <h1>Contact Us</h1>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="contact-from">

        @if (\Session::has('success'))
        <div class="alert alert-success" style="text-align: center;">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h2 class="sec-head">{{ trans('contact_us') }}</h2>
                @if(@$getabout->mobile != "")
                    <a href="tel:{{@$getabout->mobile}}" class="contact-box">
                        <i class="fas fa-phone-alt"></i>
                        <p>{{@$getabout->mobile}}</p>
                    </a>
                @endif

                @if(@$getabout->email != "")
                    <a href="mailto:{{@$getabout->email}}" class="contact-box">
                        <i class="fas fa-envelope"></i>
                        <p>{{@$getabout->email}}</p>
                    </a>
                @endif

                @if(@$getabout->address != "")
                    <div class="contact-box">
                        <i class="fas fa-home"></i>
                        <p>{{@$getabout->address}}</p>
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                <form class="contact-form" id="loginform" method="post" action="{{ url('/contact/information') }}">
                    {{csrf_field()}}
                    <input type="text" name="firstname" placeholder="{{ trans('firstname') }}" id="firstname" required="">
                    <input type="text" name="lastname" placeholder="{{ trans('lastname') }}" id="lastname" required="">
                    <input type="email" name="email" placeholder="{{ trans('email') }}" id="email" required="">
                    <textarea name="message" placeholder="{{ trans('message') }}" id="message" required=""></textarea>
                    <button type="submit" class="btn">{{ trans('submit') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>

@include('front.theme.footer')