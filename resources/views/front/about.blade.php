@include('front.theme.header')
<section class="banner-about">
    <div class="container-fluid px-0">
           <div>
             <div class="item">
                <img src='{!! asset("images/item/about.jpg") !!}' alt="">
                <div class="banner-contant">
                    <h1>About Us</h1>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="about-sec">
    <div class="container">
        <div class="about-box">
           
            <div class="about-contant">
                <p>{!! \Illuminate\Support\Str::limit(htmlspecialchars(@$getabout->about_content, ENT_QUOTES, 'UTF-8'), $limit = 500, $end = '...') !!}</p>
            </div>
             <div class="about-img">
                <img src='{!! asset("images/item/aboutttt.jpg") !!}' alt="">
            </div>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <h1>Team</h1>
        <div class="row">
           
            <div class="col-lg-4">
               <img src='{!! asset("images/team/team1.jpeg") !!}' alt="">
            </div>
              <div class="col-lg-4">
                <img src='{!! asset("images/team/team2.jpeg") !!}' alt="">
            </div>
              <div class="col-lg-4">
                <img src='{!! asset("images/team/team3.png") !!}' alt="">
            </div>
          
        </div>
    </div>
</section>
@include('front.theme.footer')