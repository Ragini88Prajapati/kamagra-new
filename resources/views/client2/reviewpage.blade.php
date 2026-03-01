@php
use App\Models\Client\Product;

@endphp
@extends('layouts.client2')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        
        <!-- Left Sidebar -->
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
            
            <!-- Login Block -->
            <!-- <div class="login-block" style="background: #eaf8ff; border: 1px solid #bce8f1; padding: 15px; margin-bottom: 20px; ">
                @auth
                <h3 style="margin: 0 0 10px 0; font-size: 14px; font-weight: bold; color: #000;">{{ Auth::user()->name }}</h3>
                <div style="margin-bottom: 10px; font-size: 12px;">
                    <p style="color: #333; margin-bottom: 5px;">Welcome, {{ Auth::user()->name }}!</p>
                    <a href="{{route('home.user-profile')}}" style="color: #006eb7; text-decoration: none;">My Account</a><br>
                    <a href="{{route('logout')}}" style="color: #006eb7; text-decoration: none;">Logout</a>
                </div>
                @else
                <h3 style="margin: 0 0 10px 0; font-size: 14px; font-weight: bold; color: #000;">Login</h3>
                <form action="{{ route('client.authenticate') }}" method="post">
                    @csrf
                    <div style="margin-bottom: 5px;">
                        <label style="font-weight: normal; font-size: 12px; color: #333;">E-mail:</label>
                        <input type="text" name="email" required style="width: 100%; border: 1px solid #ccc; padding: 2px;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label style="font-weight: normal; font-size: 12px; color: #333;">Password:</label>
                        <input type="password" name="password" required style="width: 100%; border: 1px solid #ccc; padding: 2px;">
                    </div>
                    <button type="submit" style="background: #e96e00; color: white; border: 1px solid #d45500; padding: 2px 10px; font-weight: bold; font-size: 12px; border-radius: 2px;">Log in</button>
                    <div style="margin-top: 10px; font-size: 11px;">
                        <a href="{{route('home.signup')}}" style="color: #006eb7;">Register</a><br>
                        <a href="{{route('home.forgetPassPage')}}" style="color: #006eb7;">Forgot your password?</a>
                    </div>
                </form>
                @endauth
            </div> -->
              <div id="module_559" class="module-wrapper module-wrapper-559">
          <img src="https://www.kamagraoriginal.to/images/SIDE-bitcoin-DE.png" alt="Bitcoin payment" style="width: 275px;">
        </div>
         <!-- Login Block -->
            <div class="login-block" style="background-color: #FFF; border: 1px solid #A0D9F7; margin: 0 0 20px; ">
                @auth
                <h3 style="margin: 0 0 10px 0; font-size: 14px; border-bottom: 2px solid #9EC8FA; background-color: #A0D9F7; line-height: 25px; padding: 5px 15px;font-weight: 700; color: #000;">{{ Auth::user()->name }}</h3>
                <div style="margin-bottom: 10px; font-size: 12px;">
                    <p style="color: #333; margin-bottom: 5px;">Welcome, {{ Auth::user()->name }}!</p>
                    <a href="{{route('home.user-profile')}}" style="color: #006eb7; text-decoration: none;">My Account</a><br>
                    <a href="{{route('logout')}}" style="color: #006eb7; text-decoration: none;">Logout</a>
                </div>
                @else
                <h3 style="margin: 0 0 10px 0; font-size: 14px; border-bottom: 2px solid #9EC8FA; background-color: #A0D9F7; line-height: 25px; padding: 5px 15px;font-weight: 700; color: #000;">Login</h3>
                <form action="{{ route('client.authenticate') }}" method="post" style="padding: 10px;">
                    @csrf
                    <div style="margin-bottom: 5px; display: flex">
                        <label style="font-weight: normal; font-size: 12px; color: #333; width: 35%;">E-mail:</label>
                        <input type="text" name="email" required style="width: 100%; border: 1px solid #ccc; border: 1px solid #9EC8FA; width: 60%;">
                    </div>
                    <div style="margin-bottom: 10px;  display: flex">
                        <label style="font-weight: normal; font-size: 12px; color: #333; width: 35%;">Password:</label>
                        <input type="password" name="password" required style="idth: 100%; border: 1px solid #ccc;  border: 1px solid #9EC8FA;  width: 60%;">
                    </div>
                    <button type="submit" style="background: #e96e00; color: white; border: 1px solid #d45500; padding: 2px 10px; font-weight: bold; font-size: 12px; border-radius: 2px; margin-left: 75px;">Log in</button>
                    <div style="margin-top: 10px; font-size: 15px; font-weight: bold;">
                        <a href="{{route('home.signup')}}" style="color: #006eb7;">Register</a><br>
                        <a href="{{route('home.forgetPassPage')}}" style="color: #006eb7;">Forgot your password?</a>
                    </div>
                </form>
                @endauth
            </div>

            <!-- Categories Menu -->
            <div class="header_category  nofloat " style="margin-bottom: 20px;">
                <div id="boss-menu-category" class="box">
                    <div class="box-content">
                        <ul class="box-category boss-menu-cate new-iconarrow sidemenu-medicine" style="list-style: none; padding: 0; border: 1px solid #ddd; border-top: 3px solid #0088cc;">
                            @forelse($categories ?? [] as $category)
                                <li style="background: #aeddf5; padding: 10px 15px; font-weight: bold; color: #003e6d; font-size: 16px; border-bottom: 1px solid #fff;">
                                    {{ $category->name }}
                                </li>
                                @php
                                    $products = \App\Models\Client\Product::where('category_id', $category->id)
                                        ->where('status', 1)
                                        ->select('name', 'slug')
                                        ->get();
                                @endphp
                                @forelse($products as $product)
                                    <li>
                                        <a href="{{ route('client.product.product-preview', [$product->slug]) }}" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;">
                                            <i class="fa fa-angle-right" style="margin-right: 5px;"></i> {{ $product->name }}
                                        </a>
                                    </li>
                                @empty
                                    <li style="padding: 8px 15px; color: #666; font-style: italic; border-bottom: 1px solid #eee;">
                                        No products available
                                    </li>
                                @endforelse
                            @empty
                                <li style="padding: 15px; text-align: center; color: #666;">
                                    No categories available
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

        </div><!-- /#column-left -->
        
        <!-- Main Content -->
        <div id="content" class="col-sm-9 col-md-9 col-lg-9">

<div class="cart-container">
    <h1>Kamagra Original experiences and reviews</h1>
    <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
        Here at Kamagra Original, we've been serving you for over 10 years and have delivered more than 18,000 orders.
        Customer satisfaction and 100% delivery reliability are our top priorities. 
        We offer independent user reviews and genuine customer testimonials so you can see what they have to say about our products and services.
    </p>
    <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
        Check out our latest reviews:
    </p>


    
    <!-- Reviews Section -->
    <div class="reviews-section" style="margin-top: 30px;">
        @if(isset($reviews) && count($reviews) > 0)
            @php
                $initialReviews = $reviews->take(10);
                $remainingReviews = $reviews->slice(10);
            @endphp
            
            <!-- Initial 10 reviews -->
            <div id="initial-reviews">
                @foreach($initialReviews as $review)
                <div class="review-item" style="border: 1px solid #ddd; border-radius: 5px; padding: 20px; margin-bottom: 20px; background: #f9f9f9;">
                    <!-- Review Header -->
                    <div class="review-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
                        <div class="reviewer-info">
                            <h4 style="margin: 0 0 5px 0; color: #333;">{{ $review->name }}</h4>
                            @if($review->product)
                                <p style="margin: 0; color: #666; font-size: 14px;">Reviewed: {{ $review->product->name }}</p>
                            @endif
                        </div>
                        <div class="review-rating">
                            <div class="stars" style="display: flex;">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $review->rating)
                                        <span style="color: #FFD700; font-size: 20px;">★</span>
                                    @else
                                        <span style="color: #ddd; font-size: 20px;">★</span>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <!-- Review Content -->
                    <div class="review-content">
                        <p style="margin: 0; line-height: 1.6; color: #444; font-size: 14px;">
                            {{ $review->comment }}
                        </p>
                    </div>
                    
                    <!-- Review Date -->
                    <div class="review-date" style="margin-top: 15px; font-size: 12px; color: #888; text-align: right;">
                        Posted on {{ date('F j, Y', strtotime($review->created_at)) }}
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Hidden remaining reviews -->
            <div id="remaining-reviews" style="display: none;">
                @foreach($remainingReviews as $review)
                <div class="review-item" style="border: 1px solid #ddd; border-radius: 5px; padding: 20px; margin-bottom: 20px; background: #f9f9f9;">
                    <!-- Review Header -->
                    <div class="review-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
                        <div class="reviewer-info">
                            <h4 style="margin: 0 0 5px 0; color: #333;">{{ $review->name }}</h4>
                            @if($review->product)
                                <p style="margin: 0; color: #666; font-size: 14px;">Reviewed: {{ $review->product->name }}</p>
                            @endif
                        </div>
                        <div class="review-rating">
                            <div class="stars" style="display: flex;">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $review->rating)
                                        <span style="color: #FFD700; font-size: 20px;">★</span>
                                    @else
                                        <span style="color: #ddd; font-size: 20px;">★</span>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <!-- Review Content -->
                    <div class="review-content">
                        <p style="margin: 0; line-height: 1.6; color: #444; font-size: 14px;">
                            {{ $review->comment }}
                        </p>
                    </div>
                    
                    <!-- Review Date -->
                    <div class="review-date" style="margin-top: 15px; font-size: 12px; color: #888; text-align: right;">
                        Posted on {{ date('F j, Y', strtotime($review->created_at)) }}
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Show More Button -->
            @if(count($reviews) > 10)
            <div class="text-center" style="margin-top: 20px;">
                <button id="show-more-btn" class="btn btn-primary" style="background: #0088cc; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 14px;">
                    Show More Reviews ({{ count($reviews) - 10 }} more)
                </button>
            </div>
            @endif
        @else
            <div class="no-reviews" style="text-align: center; padding: 40px; color: #666;">
                <h3>No reviews available yet</h3>
                <p>Be the first to share your experience with Kamagra Original products!</p>
            </div>
        @endif
    </div>
</div>

</div>
</div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showMoreBtn = document.getElementById('show-more-btn');
        const remainingReviews = document.getElementById('remaining-reviews');
        
        if (showMoreBtn && remainingReviews) {
            showMoreBtn.addEventListener('click', function() {
                // Show the hidden reviews
                remainingReviews.style.display = 'block';
                
                // Hide the button
                this.style.display = 'none';
            });
        }
    });
</script>
@endsection