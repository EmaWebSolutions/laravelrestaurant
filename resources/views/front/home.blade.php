@include('front.theme.header')

<section class="banner-sec">
    <div class="container-fluid px-0">
           <div>
             <div class="item">
                <img src='{!! asset("images/slider/slider.jpg") !!}' alt="">
                <div class="banner-contant">
                    <h1>Welcome To Our Restaurant</h1>
                    <p>The best choice for you and your family...fresh meal and calm environment</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="delivery" style="color: #FF8649; font-size: 10px;">
    <div class="container">
        <div class="row">
            <div class="cadre col-lg-4" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <i class="fas fa-utensils" style="color: inherit; font-size: 2.5rem;"></i>
                <h3 style="font-size: 1.5rem;  margin-top:10px">Restaurant Service</h3>
            </div>
            <div class="cadre col-lg-4" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <i class="fas fa-truck" style="color: inherit; font-size: 2.5rem;"></i>
                <h3 style="font-size: 1.5rem;  margin-top:10px">Delivery Service</h3>
            </div>
            <div class="cadre col-lg-4" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <i class="fas fa-peace" style="color: inherit; font-size: 2.5rem;"></i>
                <h3 style="font-size: 1.5rem; margin-top:10px">Calm Environment</h3>
            </div>
        </div>
    </div>
</section>


<section class="about-sec">
    <div class="container">
        <div class="about-box">
            <div class="about-img">
                <img src='{!! asset("images/about/".@$getabout->image) !!}' alt="">
            </div>
            <div class="about-contant">
            

                <h2 class="sec-head text-left">{{ trans('about_us') }}</h2>
                <p>{!! \Illuminate\Support\Str::limit(htmlspecialchars(@$getabout->about_content, ENT_QUOTES, 'UTF-8'), $limit = 500, $end = '...') !!}</p>
             

                
                    

            </div>
        </div>
    </div>
</section>

<section class="feature-sec">
    <div class="container">
            @foreach ($getbanner as $banner)
            <div class="item">
                <div class="feature-box">
                    @if ($banner->type != "")
                        @if ($banner->type == "category")
                            <a href="{{URL::to('product/'.$banner->cat_id)}}">
                        @else
                            <a href="{{URL::to('product-details/'.$banner->item_id)}}">
                        @endif
                            <img class="banner-img" src='{!! asset("images/banner/".$banner->image) !!}' alt="">
                        </a>
                    @else
                        <img class="banner-img" src='{!! asset("images/banner/".$banner->image) !!}' alt="">
                    @endif
                    <div class="feature-contant">
                        <h1>20% OFF</h1>
                        <h2>Get all meal for 20% OFF until the end of this month</h2>
                    </div>
                </div>
            </div>
            @endforeach
       
    </div>
</section>

<section class="product-prev-sec">
    <div class="container">
        <h2 class="sec-head">{{ trans('our_products') }}</h2>
        <div id="sync1" class="owl-carousel owl-theme">
            <div class="item">
                <div class="tab-pane">
                    <div class="row">
                        <?php $count = 0; ?>
                        @foreach($getitem as $item)
                        <?php if($count == 6) break; ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="pro-box">
                                <div class="pro-img">
                                    @if (isset($item->variation))
    @foreach ($item->variation as $key => $value)
                                   
                                        @if($value->sale_price > 0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon">ON SALE</div>
                                            </div>
                                        @endif
                                        @break
                                    @endforeach
                                    @endif
                                    <a href="{{URL::to('product-details/'.$item->id)}}">
                                        <img src="{{ asset('images/item/' . $item['itemimage']->image) }}" alt="">

                                    </a>
                                    @if (Session::get('id'))
                                        @if ($item->is_favorite == 1)
                                            <i class="fas fa-heart i"></i>
                                        @else
                                            <i class="fa fa-heart i" onclick="MakeFavorite('{{$item->id}}','{{Session::get('id')}}')"></i>
                                        @endif
                                    @else
                                        <a class="i" href="{{URL::to('/signin')}}"><i class="fa fa-heart"></i></a>
                                    @endif
                                </div>
                             <div class="product-details-wrap">
                                <div class="product-details">
                                    <a href="{{URL::to('product-details/'.$item->id)}}">
                                        <h4>{{$item->item_name}}</h4>
                                    </a>
                                    <p class="pro-pricing">{{$getdata->currency}}{{number_format($item->item_price, 2)}}</p>
                                </div>
                                <div class="product-details">
                                    <p>{{ Str::limit($item->item_description, 60) }}</p>
                                    <!-- @if (Session::get('id'))
                                        <button class="btn" onclick="AddtoCart('{{$item->id}}','{{Session::get('id')}}')">Add to Cart</button>
                                    @else
                                        <a class="btn" href="{{URL::to('/signin')}}">Add to Cart</a>
                                    @endif -->
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                        
                        @endforeach
                    </div>
                    <a href="{{URL::to('product/')}}" class="btn">{{ trans('view_more') }}</a>
                </div>
            </div>
        
        </div>
    </div>
</section>



<section class="review-sec">
    <div class="container">
        <h2 class="sec-head">{{ trans('our_review') }}</h2>
        <div class="review-carousel owl-carousel owl-theme">
            @foreach($getreview as $review)
            <div class="item">
                <div class="review-profile">
                    <img src='{!! asset("images/profile/".$review["users"]->profile_image) !!}' alt="">
                </div>
                <h3>{{$review['users']->name}}</h3>
                <p>{{$review->comment}}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


@include('front.theme.footer')