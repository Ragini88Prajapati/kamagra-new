@php
use App\Models\Client\Product;

@endphp
@extends('layouts.client2')

@section('SEO_Part')

<title>{{ $static_seo->meta_title ?? 'Online Kamagra Store' }}</title>
<meta name="title" content="{{$static_seo->meta_title ?? 'Online Kamagra Store'}}" />
<meta name="description" content="{{ $static_seo->meta_description ?? '' }}" />
<meta name="keywords" content="{{ $static_seo->meta_keyword ?? '' }}" />
<meta name="robots" content="{{$static_seo->meta_robot ?? 'index,follow'}}" />
<link rel="canonical" href="{{$static_seo->canonical_url ?? url()->current()}}" />

<meta property="og:type" content="{{$static_seo->og_type ?? 'website'}}" />
<meta property="og:title" content="{{$static_seo->og_title ?? 'Online Kamagra Store'}}" />
<meta property="og:description" content="{{$static_seo->og_description ?? ''}}" />
<meta property="og:url" content="{{$static_seo->og_url ?? url()->current()}}" />
<meta property="og:site_name" content="{{$static_seo->og_site_name ?? 'Online Kamagra Store'}}" />

<meta name="twitter:card" content="{{$static_seo->twitter_card ?? 'summary'}}" />
<meta name="twitter:site" content="{{$static_seo->twitter_site ?? ''}}" />
<meta name="twitter:title" content="{{$static_seo->twitter_title ?? 'Online Kamagra Store'}}" />
<meta name="twitter:description" content="{{$static_seo->twitter_description ?? ''}}" />

@endsection

@section('content')

<!-- /.header_category -->
<!-- /.header_slider -->
<!-- <div class="container">
    <div class="menu_custom">
         <h1>hello</h1>
    </div>
</div> -->
<div id="bt_container">
    <div class="left-popup-msg">
       <div id="module_559" class="module-wrapper module-wrapper-559">
          <img src="https://www.kamagraoriginal.to/images/SIDE-bitcoin-DE.png" alt="Bitcoin payment" style="width: 275px;">
        </div>
        <div class="header_categorymobile nofloat" style="margin-bottom:20px;">
            <div id="boss-menu-category" class="box">
                <div class="box-content">
                    <ul class="box-category boss-menu-cate new-iconarrow sidemenu-medicine" style="list-style:none;padding: 5px 10px 5px 7px;border:1px solid #ddd;border-top:3px solid #0088cc;">
                        @forelse($categories as $category)
                            <li style="background:#aeddf5;padding: 5px 10px 5px 7px; font-weight:bold;color:#003e6d;font-size:16px;border-bottom:1px solid #fff;">
                                {{ $category->name }}
                            </li>
                            @php
                                $products = \App\Models\Client\Product::where('category_id',$category->id)
                                    ->where('status',1)
                                    ->select('name','slug')
                                    ->get();
                            @endphp
                            @forelse($products as $product)
                                <li>
                                    <a href="{{ route('client.product.product-preview',[$product->slug]) }}"
                                       style="display:block;padding: 5px 10px 5px 7px;border-bottom:1px solid #eee;text-decoration:none;color:#003e6d;font-weight:bold;font-size:13px;">
                                       <i class="fa fa-angle-right"></i>
                                       {{ $product->name }}
                                    </a>
                                </li>
                            @empty
                                <li style="padding: 5px 10px 5px 7px; color:#666;font-style:italic;border-bottom:1px solid #eee;">
                                    No products available
                                </li>
                            @endforelse
                        @empty
                            <li style="padding:15px;text-align:center;color:#666;">
                                No categories available
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="offer-bar">
    
    <div class="offer-links">
        <a href="https://www.kamagraoriginal.to/de/produktdetails/generic-viagra-sildenafil-citrate/cobra-120-mg-daily-de">
           TAGESANGEBOT
        </a>

        <a href="https://www.kamagraoriginal.to/de/produktdetails/bevorzugte-multipacks">
           Multipacks - Sonderangebote
        </a>
    </div>

    <div class="offer-search">
        <i class="fa fa-search"></i>
    </div>

</div>


<div class="container">
    <div class="menu_custom">

    <!-- Desktop view -->
        <div class="col-lg-12 col-md-12 col-12 desktop-view" style="margin-bottom: 20px" >
            <div class="header_slider bannerslider-height nofloat mb-4 image-banner-height">
                <article class="boss_slider image-banner-height" >
                    <div class="tp-banner-container image-banner-height">
                        <div class="tp-banner tp-banner0 image-banner-height">
                            <ul class="image-banner-height">
                                <!-- SLIDE  -->
                                @forelse ($banners as $item)

                                <li class="image-banner-height" data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                    <!-- MAIN IMAGE -->
                                     <img src="{{$item->image_name!=''? asset('/assets/images/banner/').'/'.$item->image_name:''}}" alt="slidebg1" data-lazyload="{{$item->image_name!=''? asset('/assets/images/banner/').'/'.$item->image_name:''}}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                                  
                                    <div class="tp-caption big_white sft customout rs-parallaxlevel-0" data-x="342" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="{{asset('/assets/client2/images/').'/dummy.png'}}" alt="" data-lazyload="{{asset('/assets/client2/images/slide/').'/line_caption.png'}}" />
                                    </div>
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption big_white sft customout rs-parallaxlevel-0" data-x="499" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="{{asset('/assets/client2/images/').'/dummy.png'}}" alt="" data-lazyload="{{asset('/assets/client2/images/slide/').'/line_caption.png'}}" />
                                    </div>
                                </li>
                                @empty

                                @endforelse

                                {{-- <li data-link="#" data-target="_self" data-transition="random-static"
                                    data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                    <!-- MAIN IMAGE --><img src="images/banner2.jpg" alt="slidebg1"
                                        data-lazyload="images/banner2.jpg" data-bgposition="left center"
                                        data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone"
                                        data-bgpositionend="right center" />
                                  
                                        <div class="tp-caption big_white sfr customout rs-parallaxlevel-0"
                                        data-x="598"
                                            data-y="32"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                            data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                            data-endelementdelay="0.1" style="z-index: 2;">
                                        <img src="images/dummy.png"
                                            alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption big_white sfr customout rs-parallaxlevel-0"
                                         data-x="683"
                                        data-y="32"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;">
                                        <img src="images/dummy.png"
                                            alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                                </li> --}}
                            </ul>
                            <div class="slideshow_control"></div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- mobile view -->
          <div class="col-lg-12 col-md-12 col-12 mobile-view" style="margin-bottom: 20px" >
            <div class="header_slider bannerslider-height nofloat mb-4 image-banner-height">
                <article class="boss_slider image-banner-height" >
                    <div class="tp-banner-container image-banner-height">
                        <div class="tp-banner tp-banner0 image-banner-height">
                            <ul class="image-banner-height">
                                <!-- SLIDE  -->
                                @forelse ($banners as $item)

                                <li class="image-banner-height" data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                    <!-- MAIN IMAGE -->
                                     <img src="{{$item->image_name!=''? asset('/assets/images/banner/').'/'.$item->image_name:''}}" alt="slidebg1" data-lazyload="{{$item->image_name!=''? asset('/assets/images/banner/').'/'.$item->image_name:''}}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                                  
                                    <div class="tp-caption big_white sft customout rs-parallaxlevel-0" data-x="342" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="{{asset('/assets/client2/images/').'/dummy.png'}}" alt="" data-lazyload="{{asset('/assets/client2/images/slide/').'/line_caption.png'}}" />
                                    </div>
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption big_white sft customout rs-parallaxlevel-0" data-x="499" data-y="54" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="500" data-end="5000" data-endspeed="400" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"><img src="{{asset('/assets/client2/images/').'/dummy.png'}}" alt="" data-lazyload="{{asset('/assets/client2/images/slide/').'/line_caption.png'}}" />
                                    </div>
                                </li>
                                @empty

                                @endforelse

                                {{-- <li data-link="#" data-target="_self" data-transition="random-static"
                                    data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                    <!-- MAIN IMAGE --><img src="images/banner2.jpg" alt="slidebg1"
                                        data-lazyload="images/banner2.jpg" data-bgposition="left center"
                                        data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone"
                                        data-bgpositionend="right center" />
                                  
                                        <div class="tp-caption big_white sfr customout rs-parallaxlevel-0"
                                        data-x="598"
                                            data-y="32"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                            data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                            data-endelementdelay="0.1" style="z-index: 2;">
                                        <img src="images/dummy.png"
                                            alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption big_white sfr customout rs-parallaxlevel-0"
                                         data-x="683"
                                        data-y="32"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;">
                                        <img src="images/dummy.png"
                                            alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                                </li> --}}
                            </ul>
                            <div class="slideshow_control"></div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Inserted Daily Offer and Reviews Full Width -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         
            <div class="daily-deal-section">
                 <div class="daily-deal-row">

        <!-- Left Blue Box -->
        <div class="daily-deal-left">
            <h2>DAILY OFFER</h2>
            <p>DAILY OFFER: 10 × Packs of Sildalist 120 mg (60 tablets)</p>
        </div>

        <!-- Right Content -->
        <div class="daily-deal-right">
          <div class="daily-deal">
            <!-- Image -->
          <div class="deal-image">
           <img src="https://www.kamagraoriginal.to/images/product/200/sildalist-120mg-blister.jpg"
             onerror="this.src='{{asset('/assets/images/product/'.($product_list[0]->image ?? 'default.jpg'))}}'"
             alt="Sildalist">
         </div>

    <!-- RIGHT : Text + Price -->
    <div class="deal-info">
        <div class="deal-hurry">
            Hurry, there are <br>
            only <span>17 left!</span>
        </div>

        <div class="deal-price">
            <div class="current-price">Price: <span>€49</span></div>
            <div class="old-price">Original price: €110</div>
        </div>
    </div>

            <!-- Button -->
            <div class="deal-action">
                @php
                $dailyVariant = \App\ProductVariant::where('product_id', $product_list[0]->id ?? 1)
                    ->orderBy('price', 'asc')->first();
                @endphp

                @if($dailyVariant)
                <button class="add-to-product-cart"
                        data-product="{{$dailyVariant->id}}">
                    <span class="btn-text">Add to Cart</span>
                    <span class="btn-loading">
                        <i class="fa fa-spinner fa-spin"></i> Loading...
                    </span>
                </button>
                @else
                <button class="disabled-btn" disabled>Unavailable</button>
                @endif

                <a href="#" class="conditions-link">Conditions</a>
            </div>
</div>
        </div>
    </div>
</div>


            <!-- Reviews Section -->
       
<div class="reviews-section">
    <div class="row reviews-row">

        <!-- Left Summary -->
        <div class="col-md-3 reviews-left">
            <h3 class="reviews-title">Hervorragend</h3>

            <!-- Main Stars -->
            <div class="stars-main">
                <div class="star-box-green"><i class="fa fa-star"></i></div>
                <div class="star-box-green"><i class="fa fa-star"></i></div>
                <div class="star-box-green"><i class="fa fa-star"></i></div>
                <div class="star-box-green"><i class="fa fa-star"></i></div>
                <div class="star-box-green"><i class="fa fa-star"></i></div>
            </div>

            <p class="reviews-count">
                Basierend auf
                <u>19676 Bewertungen</u>
            </p>
        </div>

        <!-- Right Reviews Content -->
        <div class="col-md-9 reviews-right">

            <!-- Left Arrow -->
            <div class="arrow-wrapper-left">
                <div class="review-arrow"><i class="fa fa-chevron-left"></i></div>
            </div>

            <!-- Items Container -->
            <div class="reviews-items">

                <!-- Review Item 1 -->
                <div class="review-item item-one">
                    <div class="stars-small">
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                    </div>

                    <div class="review-text">
                        Wie immer Reibungslos verlaufen. Vielen Dank.
                    </div>
                    <div class="review-user">Andrea Birra</div>
                </div>

                <div class="review-date date-one">heute</div>

                <!-- Review Item 2 -->
                <div class="review-item item-two">
                    <div class="stars-small">
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                        <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                    </div>

                    <div class="review-text">
                        Alles bestens gelaufen
                    </div>
                    <div class="review-user">Fabian Schleich</div>
                </div>

                <div class="review-date date-two">gestern</div>

            </div>

            <!-- Right Arrow -->
            <div class="arrow-wrapper-right">
                <div class="review-arrow"><i class="fa fa-chevron-right"></i></div>
            </div>

         </div>
      </div>
    </div>
 </div>
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3 hidden-xs">

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
                        <ul class="box-category boss-menu-cate new-iconarrow sidemenu-medicine" style="list-style: none;  border: 1px solid #ddd; border-top: 3px solid #0088cc;">
                            @forelse($categories as $category)
                                <li style="background: #aeddf5; padding: 5px 15px; font-weight: bold; color: #075BAF; font-size: 13px; border-bottom: 1px solid #fff;">
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
                                        <a href="{{ route('client.product.product-preview', [$product->slug]) }}" style="display: block; padding: 3px 7px 3px 7px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;">
                                            <i class="fa fa-angle-right" style="margin-right: 5px;"></i> {{ $product->name }}
                                        </a>
                                    </li>
                                @empty
                                    <li style="padding: 5px 10px 5px 7px; color: #666; font-style: italic; border-bottom: 1px solid #eee;">
                                        No products available
                                    </li>
                                @endforelse
                            @empty
                                <li style="padding: 5px 10px 5px 7px; text-align: center; color: #666;">
                                    No categories available
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Bestsellers Moved to Content -->

        </div>
        <!-- /#column-left -->
        
        <div id="content" class="col-sm-9 col-md-9 col-lg-9" >

        <div id="module_20" class="module-wrapper-20">
        <div class="hidden-xs">
         <form method="get" action="https://www.kamagraoriginal.to/de/suchergebnisse" class="search-form">

         <label for="searchInput">Product name:</label>

      <input 
        type="text" 
        id="searchInput" 
        name="text" 
        maxlength="100" 
        required
        class="module20_text"
      >

      <button type="submit" class="module20_submit">SEEK</button>

    </form>
  </div>
</div>

            <!-- Bestsellers Section (Moved to Main Content) & Main Products -->
             
            <div class="bt-product-category">      
                <div class="bt-featured-pro bt-nprolarge-tabs heightcard">
                    <!-- <div style="background: #aeddf5; padding: 10px 147px; margin-bottom: 0;">
                         <h3 style="margin: 0; margin-left: -136px; font-size: 16px; font-weight: bold; color: #000; ">Multipacks</h3>
                    </div> -->
                     <div  class="multipacsmobile">
                        <h3 style="margin: 0; margin-left: -130px; font-size: 16px; font-weight: bold; color: #000;"> Multipacs</h3>
                    </div>
                    
                     <div class="row" style="margin: 0; border-left: 1px solid #eee; border-top: 1px solid #eee;">
                        @forelse ($product_list as $item)
                        @php
                        $multiVariant = \App\ProductVariant::where('product_id', $item['id'])->orderBy('price', 'asc')->first();
                        @endphp
                        @if($multiVariant)
                        <!-- Product Card -->
                        <div class="col-md-6 col-sm-6 product-col">
                         <div class="product-card-multipack">
                            <div class="row product-row">

                             <!-- Image -->
                               <div class="col-xs-5 product-image-col">
                               <div class="product-image-wrapper">
                                 @if(isset($item['slug']) && !empty($item['slug']))
                                  <a href="{{ route('client.product.product-preview', [$item['slug']]) }}">
                                 <img src="{{asset('/assets/images/product/').'/'.$item['image']}}"
                                 alt="{{$item['name']}}"
                                class="img-responsive productimage2">
                             </a>
                            @else
                          <img src="{{asset('/assets/images/product/').'/'.$item['image']}}"
                           alt="{{$item['name']}}"
                           class="img-responsive productimage2">
                           @endif

                           @if($item['discount'] > 0)
                           <div class="product-discount">
                             -{{$item['discount']}}%
                           </div>
                          @endif
                       </div>
                          @if(isset($item['slug']) && !empty($item['slug']))
                    <a href="{{ route('client.product.product-preview', [$item['slug']]) }}"
                       class="product-more hide-mobile">
                        More information
                    </a>
                    @else
                    <span class="product-more disabled hide-mobile">
                        More information
                    </span>
                    @endif
                   </div>

            <!-- Details -->
            <div class="col-md-7 product-details">
                @if(isset($item['slug']) && !empty($item['slug']))
                <a href="{{ route('client.product.product-preview', [$item['slug']]) }}"
                   class="product-title-link">
                    <h4 class="product-title">{{$item['name']}}</h4>
                </a>
                @else
                <h4 class="product-title">{{$item['name']}}</h4>
                @endif

                <!-- Price Box -->
                <div class="price-box">
                    <div class="price-regular">
                        Regular price:
                        <span>€{{$multiVariant->price + 20}}</span>
                    </div>
                    <div class="price-offer">
                        Our price:
                        <span>

                            €{{$multiVariant->price}}
                        </span>
                    </div>
                     <button class="btn btn-primary btn-sm btn-block add-to-product-cart"
                            data-product="{{$multiVariant->id}}">
                        <span class="btn-text">Add to Cart</span>
                        <span class="btn-loading">
                            <i class="fa fa-spinner fa-spin"></i> Loading...
                        </span>
                    </button>
                  </div>
                </div>          
            </div>    
        </div>
     </div>

                        @endif
                        @empty
                         <div class="col-12" style="padding: 20px;">No products found</div>
                        @endforelse
                     </div>
                </div><!-- /."bt-featured-pro -->
            </div>
                
                <!-- Bestsellers Grid -->
                <!-- Light Blue Header for Bestsellers -->
                <!-- <div style="background: #aeddf5; padding: 10px 15px; margin-bottom: 15px;">
                     <h3 style="margin: 0; font-size: 16px; font-weight: bold; color: #000;">Bestsellers</h3>
                </div> -->
                
                  <!-- <div style="background: #aeddf5; padding: 10px 15px; margin: 0 -15px;">
                     <h3 style="margin: 0; font-size: 16px; font-weight: bold; color: #000;">BestSellers</h3>
                </div>
                <div class="row" style="margin: 0px -30px -30px;">
                    @if(isset($best_product) && count($best_product) > 0)
                        @foreach(array_slice($best_product, 0, 3) as $item)
                      <div class="col-md-4 col-sm-6 product-wrapper">
                          <div class="product-card-bestseller">
                              <div class="product-card-inner">
                          <div class="row product-top-row">
                                <div class="col-xs-5 product-image-col">
                    @if($item['discount'] > 0)
                        <div class="discount-pill">
                            -{{$item['discount']}}%
                        </div>
                    @endif
                    @if(isset($item['slug']) && !empty($item['slug']))
                        <a href="{{ route('client.product.product-preview', [$item['slug']]) }}">
                            <img src="{{asset('/assets/images/product/').'/'.$item['image']}}"
                                 alt="{{$item['name']}}"
                                 class="img-responsive productimage">
                        </a>
                    @else
                        <img src="{{asset('/assets/images/product/').'/'.$item['image']}}"
                             alt="{{$item['name']}}"
                             class="img-responsive productimage">
                    @endif
                </div>
                <div class="col-xs-7 product-info-col">
                    @if(isset($item['slug']) && !empty($item['slug']))
                        <a href="{{ route('client.product.product-preview', [$item['slug']]) }}" class="product-title-link">
                            <h4 class="product-title">{{$item['name']}}</h4>
                        </a>
                    @else
                        <h4 class="product-title">{{$item['name']}}</h4>
                    @endif
                    <div class="product-price">
                        <span class="price-label">Our price:</span>
                        <span class="price-value">€{{$item['price']}}</span>
                    </div>
                    <div class="offer-text">
                        Buy more, save<br>more!
                    </div>
                </div>
            </div>
            <div class="row product-bottom-row">
                <div class="col-xs-5 product-more-info">
                    @if(isset($item['slug']) && !empty($item['slug']))
                        <a href="{{ route('client.product.product-preview', [$item['slug']]) }}">
                            More <br>information
                        </a>
                    @else
                        <span>More <br>information</span>
                    @endif
                </div>
                <div class="col-xs-7 product-cart">
                    @php
                        $bestVariant = \App\ProductVariant::where('product_id', $item['id'])
                                        ->orderBy('price', 'asc')->first();
                    @endphp
                    @if($bestVariant)
                        <button class="btn btn-primary add-to-product-cart"
                                data-product="{{$bestVariant->id}}">
                            <span class="btn-text">Add to Cart</span>
                            <span class="btn-loading">
                                <i class="fa fa-spinner fa-spin"></i> Loading...
                            </span>
                        </button>
                    @else
                        <button class="btn btn-primary unavailable" disabled>
                            Unavailable
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
 @endforeach
 @endif
</div> -->

  
              <div style="background:#aeddf5; padding: 12px 155px; margin:0 -15px;">
                
    <h3 style="margin: 0; margin-left: -136px; font-size: 16px; font-weight: bold; color: #000;">
        BestSellers
    </h3>
</div>

<div class="row" style="margin: 0 -15px; border-left: 1px solid #eee; border-top: 1px solid #eee;">
@if(isset($best_product) && count($best_product) > 0)
@foreach(array_slice($best_product, 0, 3) as $item)

@php
$bestVariant = \App\ProductVariant::where('product_id',$item['id'])->orderBy('price','asc')->first();
@endphp

@if($bestVariant)
<div class="col-md-4 col-sm-6 product-col">

<div class="product-card-multipack">
<div class="row product-row">

<!-- IMAGE COLUMN -->
<div class="col-xs-5 product-image-col">
<div class="product-image-wrapper">

@if(isset($item['slug']) && !empty($item['slug']))
<a href="{{ route('client.product.product-preview', [$item['slug']]) }}">
<img src="{{asset('/assets/images/product/').'/'.$item['image']}}"
alt="{{$item['name']}}"
class="img-responsive productimage2">
</a>
@else
<img src="{{asset('/assets/images/product/').'/'.$item['image']}}"
alt="{{$item['name']}}"
class="img-responsive productimage2">
@endif

@if($item['discount'] > 0)
<div class="product-discount">
-{{$item['discount']}}%
</div>
@endif

</div>

@if(isset($item['slug']) && !empty($item['slug']))
<a href="{{ route('client.product.product-preview', [$item['slug']]) }}" class="product-moreinformation hide-mobile">
More information
</a>
@else
<span class="product-more disabled hide-mobile">More information</span>
@endif

</div>
<!-- END IMAGE COLUMN -->


<!-- DETAILS COLUMN -->
<div class="col-md-7 product-details">

@if(isset($item['slug']) && !empty($item['slug']))
<a href="{{ route('client.product.product-preview', [$item['slug']]) }}" class="product-title-link">
<h4 class="product-title">{{$item['name']}}</h4>
</a>
@else
<h4 class="product-title">{{$item['name']}}</h4>
@endif

<div>
<span class="price-label">Our price:</span>
<span class="price-value">€{{$item['price']}}</span>
</div>

<div class="offer-text">
Buy more, save<br>more!
</div>

<button class="btn btn-primary btn-sm btn-block add-to-product-cart"
data-product="{{$bestVariant->id}}">
<span class="btn-text">Add to Cart</span>
<span class="btn-loading">
<i class="fa fa-spinner fa-spin"></i> Loading...
</span>
</button>

</div>
<!-- END DETAILS -->

</div>
</div>

</div>
@endif
@endforeach
@endif
</div>
               

            <!-- Articles Section -->
            <div class="articles-section" style="margin: 20px -15px 10px ; border: 1px solid #ddd; padding: 20px; background: #fff;">
            
                <!-- <div class="row" style="margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; display: flex; align-items: flex-start;">
                    <div class="col-md-9 col-sm-9">
                        <h3 style="margin: 0 0 10px 0; color: #006eb7; font-size: 18px; font-weight: bold;">Sildenafil vs. Vardenafil</h3>
                        <p style="font-size: 13px; color: #333; line-height: 1.5; margin-bottom: 10px;">
                            Two of the most common options for treating erectile dysfunction are sildenafil and vardenafil. Although these substances belong to the same class of drugs, they work differently. Choosing the right one can help make intimacy more relaxed, controllable, and enjoyable, so these differences are important.
                        </p>
                        <a href="#" style="font-size: 12px; color: #006eb7; font-weight: bold; text-decoration: none;">Read more</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="https://www.kamagraoriginal.to/images/tadalafil-vs-vardenafil-01.jpg" onerror="this.src='{{asset('/assets/images/product/default.jpg')}}'" alt="Sildenafil vs Vardenafil" style="width: 100%; border-radius: 2px;">
                    </div>
                </div>

               
                <div class="row" style="margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; display: flex; align-items: flex-start;">
                    <div class="col-md-9 col-sm-9">
                        <h3 style="margin: 0 0 10px 0; color: #006eb7; font-size: 18px; font-weight: bold;">Self-help for erectile dysfunction</h3>
                        <p style="font-size: 13px; color: #333; line-height: 1.5; margin-bottom: 10px;">
                            Using self-help measures for erectile dysfunction has benefits, including preventing severe forms of the disorder and empowering men to take immediate control of their sexual health. It is an effective, non-invasive first step in treating erection problems.
                        </p>
                        <a href="#" style="font-size: 12px; color: #006eb7; font-weight: bold; text-decoration: none;">Read more</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="https://www.kamagraoriginal.to/images/blog/210/self-help-erectile-dysfunction-kamagra-original.jpg" onerror="this.src='{{asset('/assets/images/product/default.jpg')}}'" alt="Self help" style="width: 100%; border-radius: 2px;">
                    </div>
                </div>

                <div class="row" style="display: flex; align-items: flex-start;">
                    <div class="col-md-9 col-sm-9">
                        <h3 style="margin: 0 0 10px 0; color: #006eb7; font-size: 18px; font-weight: bold;">Sildenafil vs. Tadalafil</h3>
                        <p style="font-size: 13px; color: #333; line-height: 1.5; margin-bottom: 10px;">
                            Both sildenafil and tadalafil are effective in treating erectile dysfunction in men by improving blood flow through the same powerful pathway. Differences in their speed of action, duration of effect, and interactions with food and drink make choosing between them an important, individual decision.
                        </p>
                        <a href="#" style="font-size: 12px; color: #006eb7; font-weight: bold; text-decoration: none;">Read more</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="https://www.kamagraoriginal.to/images/blog/210/sildenafil-vs-tadalafil-kamagra-original.jpg" onerror="this.src='{{asset('/assets/images/product/default.jpg')}}'" alt="Sildenafil vs Tadalafil" style="width: 100%; border-radius: 2px;">
                    </div>
                </div> -->

                 <div class="articles-preview-item">
    <h2 class="articles-preview-title">
        <a style=" color: #075BAF; text-decoration: none" href="https://www.kamagraoriginal.to/de/artikeln/tadalafil-vs-vardenafil-517-i2267">
            Tadalafil vs. Vardenafil
        </a>
    </h2>

    <div class="articles-preview-image">
        <img src="https://www.kamagraoriginal.to/images/tadalafil-vs-vardenafil-01.jpg" 
             alt="Tadalafil vs. Vardenafil">
    </div>

    <div class="articles-preview-preview">
        <p>
            Tadalafil and vardenafil are two modern, effective medications for treating erectile dysfunction that achieve
             the same result in slightly different ways. Although both belong to the category of erection pills, 
             they differ in their duration and length of action. The choice between the two depends on how much flexibility,
              spontaneity, or predictability men desire in their sex lives.
        </p>
        <a style=" color: #075BAF; text-decoration: none" href="https://www.kamagraoriginal.to/de/artikeln/tadalafil-vs-vardenafil-517-i2267">
            Read more
        </a>
    </div>
</div>

 <div class="articles-preview-item">
    <h2 class="articles-preview-title">
        <a style=" color: #075BAF; text-decoration: none" href="https://www.kamagraoriginal.to/de/artikeln/tadalafil-vs-vardenafil-517-i2267">
            Sildenafil vs. Vardenafil

        </a>
    </h2>

    <div class="articles-preview-image">
        <img src="https://www.kamagraoriginal.to/images/sildenafil-vs-vardenafil-01.jpg" 
             alt="Tadalafil vs. Vardenafil">
    </div>

    <div class="articles-preview-preview">
        <p>
            Two of the most common options for treating erectile dysfunction are sildenafil and vardenafil.
             Although these substances belong to the same class of drugs, they work differently.
             Choosing the right one can help make intimacy more relaxed, controllable, and enjoyable, so these differences are important.
        </p>
        <a style=" color: #075BAF; text-decoration: none" href="https://www.kamagraoriginal.to/de/artikeln/tadalafil-vs-vardenafil-517-i2267">
            Read more
        </a>
  
    </div>
</div>

 <div class="articles-preview-item">
    <h2 class="articles-preview-title">
        <a style=" color: #075BAF; text-decoration: none" href="https://www.kamagraoriginal.to/de/artikeln/tadalafil-vs-vardenafil-517-i2267">
            Self-help for erectile dysfunction
        </a>
    </h2>

    <div class="articles-preview-image">
        <img src="https://www.kamagraoriginal.to/images/self-care-man-01.jpg" 
             alt="Tadalafil vs. Vardenafil">
    </div>

    <div class="articles-preview-preview">
        <p>
            Using self-help measures for erectile dysfunction has benefits, 
            including preventing severe forms of the disorder and empowering men to take immediate control of their sexual health.
             It is an effective, non-invasive first step in treating erection problems.
        </p>
        <a style=" color: #075BAF; text-decoration: none" href="https://www.kamagraoriginal.to/de/artikeln/tadalafil-vs-vardenafil-517-i2267">
            Read more
        </a>
    </div>
</div>
            </div>

            <div class="medical-disclaimer" style="border: 1px solid #bcecff; background-color: white; padding: 15px; margin: 0 -15px;">
                <h4 style="color: #31708f; font-size: 15px; font-weight: bold; margin: 0 0 5px 0;">Medical disclaimer</h4>
                <p style="font-size: 13px; color: #333; line-height: 1.4; margin: 0;">
                    You should always consult your doctor or another healthcare professional before taking any medication, supplement, or treatment for a health problem, whether offered on this website or elsewhere. If you have or suspect you have a medical problem, you should see your doctor immediately. For all products and/or services purchased through this website, you should carefully read all instructions before use.
                </p>
            </div>

        </div>
    </div>

</div>



@endsection

@section('scripts')
<script>
$(document).ready(function() {
    console.log('i page loaded - Add to cart ready');
    
    // Add to Cart functionality
    $(document).on('click', '.add-to-product-cart', function(e) {
        e.preventDefault();
        console.log('Add to cart button clicked');
        
        var button = $(this);
        var product = button.data('product');
        console.log('Product variant ID:', product);
        
        // Show loading state
        button.prop('disabled', true);
        button.find('.btn-text').hide();
        button.find('.btn-loading').show();
        console.log('Button loading state shown');
        
        $.ajax({
            url: "{{ route('product.add-to-cart') }}",
            type: "POST",
            data: {
                product: product,
                quantity: 1,
                _token: "{{ csrf_token() }}"
            },
            beforeSend: function() {
                console.log('AJAX request starting...');
            },
            success: function(data) {
                console.log('AJAX Success - Response:', data);
                
                try {
                    var response_data = typeof data === 'string' ? JSON.parse(data) : data;
                    console.log('Parsed response:', response_data);
                    
                    // Update cart count in mobile header
                    if (response_data.cart_total_quantity !== undefined) {
                        var cartText = response_data.cart_total_quantity + ' Artikel - €' + response_data.cart_total_price;
                        console.log('Updating mobile cart to:', cartText);
                        $('#cart-total').html(cartText);
                        
                        // Update desktop cart count
                        var desktopCartText = response_data.cart_total_quantity + (response_data.cart_total_quantity == 1 ? ' product' : ' products') + ' - €' + response_data.cart_total_price;
                        console.log('Updating desktop cart to:', desktopCartText);
                        $('#desktop-cart-count').html(desktopCartText);
                    }
                    
                    // Show success message
                    alert('Product added to cart successfully!');
                    
                    // Reload page to update cart dropdown
                    console.log('Reloading page...');
                    window.location.reload();
                } catch (e) {
                    console.error('Error parsing response:', e);
                    alert('Product added but could not update cart display. Please refresh the page.');
                    window.location.reload();
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                console.error('Status:', status);
                console.error('Response:', xhr.responseText);
                alert('Something went wrong. Please try again.');
                
                // Reset button state
                button.prop('disabled', false);
                button.find('.btn-text').show();
                button.find('.btn-loading').hide();
            }
        });
    });
});
</script>
@endsection