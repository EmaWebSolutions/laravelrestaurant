<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{URL::to('/admin/home')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
       
            <li>
                <a href="{{URL::to('/admin/category')}}" aria-expanded="false">
                    <i class="icon-menu menu-icon"></i><span class="nav-text">Categories</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/item')}}" aria-expanded="false">
                    <i class="fa fa-plus"></i><span class="nav-text">Products</span>
                </a>
            </li>
                  <li>
                <a href="{{URL::to('/admin/orders')}}" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i><span class="nav-text">Orders</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/addons')}}" aria-expanded="false">
                    <i class="fa fa-plus"></i><span class="nav-text">Addons</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/banner')}}" aria-expanded="false">
                    <i class="fa fa-bullhorn"></i><span class="nav-text">Promotion Banner</span>
                </a>
            </li>
   
            <li>
                <a href="{{URL::to('/admin/promocode')}}" aria-expanded="false">
                    <i class="fa fa-tag"></i><span class="nav-text">Coupon</span>
                </a>
            </li>
        
            <li>
                <a href="{{URL::to('/admin/time')}}" aria-expanded="false">
                    <i class="fa fa-clock-o"></i><span class="nav-text">Working Hours</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/payment')}}" aria-expanded="false">
                    <i class="fa fa-usd"></i><span class="nav-text">Payment Methods</span>
                </a>
            </li>
      
            <li>
                <a href="{{URL::to('/admin/users')}}" aria-expanded="false">
                    <i class="fa fa-users"></i><span class="nav-text">Users</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/reviews')}}" aria-expanded="false">
                    <i class="fa fa-star"></i><span class="nav-text">Reviews</span>
                </a>
            </li>
        
            <li>
                <a href="{{URL::to('/admin/contact')}}" aria-expanded="false">
                    <i class="fa fa-envelope"></i><span class="nav-text">Contact Messages</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{URL::to('/admin/privacypolicy')}}">Privacy Policy</a></li>
                    <li><a href="{{URL::to('/admin/termscondition')}}">Terms & Conditions</a></li>
                    <li><a href="{{URL::to('/admin/settings')}}">About and Settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->