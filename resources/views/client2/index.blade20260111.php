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

<div class="container">
    <div class="menu_custom row">
        <!-- /.header_category -->
        <!-- /.header_slider -->
    </div>
</div>
<div class="container">
    <div class="menu_custom  row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="header_slider bannerslider-height nofloat mb-4 image-banner-height">
                <article class="boss_slider image-banner-height" >
                    <div class="tp-banner-container image-banner-height">
                        <div class="tp-banner tp-banner0 image-banner-height">
                            <ul class="image-banner-height">
                                <!-- SLIDE  -->
                                @forelse ($banners as $item)

                                <li class="image-banner-height" data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                    <!-- MAIN IMAGE --><img src="{{$item->image_name!=''? asset('/assets/images/banner/').'/'.$item->image_name:''}}" alt="slidebg1" data-lazyload="{{$item->image_name!=''? asset('/assets/images/banner/').'/'.$item->image_name:''}}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                                    <!-- LAYER NR. 1 -->
                                    <!-- <div class="tp-caption medium_white sft customout rs-parallaxlevel-0" data-x="379"
                                        data-y="56"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="350" data-start="500" data-end="5000" data-endspeed="400"
                                        data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> Believe in We </div> -->
                                    <!-- LAYER NR. 2 -->
                                    <!-- <div class="tp-caption bold_green_text sft customout rs-parallaxlevel-0"
                                        data-x="268" data-y="75"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="1000" data-end="5000" data-endspeed="400"
                                        data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> DrugStore </div> -->
                                    <!-- LAYER NR. 3 -->
                                    <!-- <div class="tp-caption large_white_text sft customout rs-parallaxlevel-0"
                                        data-x="361" data-y="213"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="2000" data-end="5000" data-endspeed="400"
                                        data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> shop now &#33; </div> -->
                                    <!-- LAYER NR. 4 -->
                                    <!-- <div class="tp-caption medium_white sft customout rs-parallaxlevel-0" data-x="283"
                                        data-y="168"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="1500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> Because Your Life Matters
                                        Microloans
                                    </div> -->
                                    <!-- LAYER NR. 5 -->
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
                                    <!-- LAYER NR. 1 -->
                                    <!-- <div class="tp-caption medium_black sfr customout rs-parallaxlevel-0" data-x="634"
                                        data-y="34"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> Up to </div> -->
                                    <!-- LAYER NR. 2 -->
                                    <!-- <div class="tp-caption bold_green_text sfr customout rs-parallaxlevel-0"
                                        data-x="527" data-y="54"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="1000" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> 15% off </div> -->
                                    <!-- LAYER NR. 3 -->
                                    <!-- <div class="tp-caption medium_text sfr customout rs-parallaxlevel-0" data-x="590"
                                        data-y="223"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="2000" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> shop now &#33; </div> -->
                                    <!-- LAYER NR. 4 -->
                                    <!-- <div class="tp-caption big_black sfr customout rs-parallaxlevel-0" data-x="587"
                                        data-y="140"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="1500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> everything </div> -->
                                    <!-- LAYER NR. 5 -->
                                    <!-- <div class="tp-caption medium_black sfr customout rs-parallaxlevel-0" data-x="515"
                                        data-y="175"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="1700" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"> Amazing Things Are Happening
                                        Here
                                    </div> -->
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption big_white sfr customout rs-parallaxlevel-0" data-x="598"
                                        data-y="32"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"><img src="images/dummy.png"
                                            alt="" data-lazyload="images/slide/line_caption1.png" /> </div>
                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption big_white sfr customout rs-parallaxlevel-0" data-x="683"
                                        data-y="32"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="400" data-start="500" data-end="5000" data-endspeed="400"
                                        data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" style="z-index: 2;"><img src="images/dummy.png"
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
            
            <!-- Daily Offer Section -->
            <div class="daily-deal-section" style="margin-bottom: 25px; border: 1px solid #ddd; background: white; width: 100%;">
                <div class="row" style="margin: 0; display: flex; flex-wrap: wrap;">
                    <!-- Left Blue Box -->
                    <div class="col-md-4 col-sm-12" style="background: #208eccc2; padding: 25px 20px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; min-height: 120px;">
                         <h2 style="color: white; font-weight: 400; font-size: 30px; margin: 0 0 5px 0; text-transform: uppercase;">DAILY OFFER</h2>
                         <p style="color: white; font-size: 13px; margin: 0; line-height: 1.4;">DAILY OFFER: 10 × Packs of Sildalist 120 mg (60 tablets)</p>
                    </div>

                    <!-- Middle & Right Content -->
                    <div class="col-md-8 col-sm-12" style="padding: 15px 20px; display: flex; align-items: center; justify-content: space-between; background: #fff;">
                         <!-- Image -->
                         <div style="margin-right: 20px;">
                             <img src="https://www.kamagraoriginal.to/images/product/200/sildalist-120mg-blister.jpg" onerror="this.src='{{asset('/assets/images/product/'.($product_list[0]->image ?? 'default.jpg'))}}'" alt="Sildalist" style="max-height: 55px;">
                         </div>

                         <!-- Hurry Text -->
                         <div style="flex: 1; margin-right: 20px; text-align: left;">
                             <div style="font-size: 20px; color: #000; line-height: 1.2;">Hurry, there are <br>only <span style="color: #3498db; font-weight: bold;">17 left!</span></div>
                         </div>

                         <!-- Price -->
                         <div style="text-align: left; margin-right: 40px;">
                             <div style="font-size: 20px; color: #777; font-weight: bold;">Price: <span style="color:#428bca;">€49</span></div>
                             <div style="font-size: 13px; color: #bbb; text-decoration: line-through;">Original price: €110</div>
                         </div>

                         <!-- Button -->
                         <div style="text-align: center; width: 140px;">
                             @php
                             $dailyVariant = \App\ProductVariant::where('product_id', $product_list[0]->id ?? 1)->orderBy('price', 'asc')->first();
                             @endphp
                             @if($dailyVariant)
                             <button class="btn btn-primary add-to-product-cart" data-product="{{$dailyVariant->id}}" style="background: #428bca; border-color: #357ebd; width: 100%; border-radius: 2px; font-weight: bold; font-size: 13px; padding: 10px 0;">
                                 <span class="btn-text">Add to Cart</span>
                                 <span class="btn-loading" style="display: none;">
                                     <i class="fa fa-spinner fa-spin"></i> Loading...
                                 </span>
                             </button>
                             @else
                             <button class="btn btn-primary" disabled style="background: #ccc; border-color: #ccc; width: 100%; border-radius: 2px; font-weight: bold; font-size: 13px; padding: 10px 0;">Unavailable</button>
                             @endif
                             <a href="#" style="display: block; margin-top: 5px; color: #888; text-decoration: underline; font-size: 12px;">Conditions</a>
                         </div>
                    </div>
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="reviews-section" style="margin-bottom: 30px; background: white; padding: 0;">
                 <div class="row" style="display: flex; align-items: center; margin: 0;">
                     
                     <!-- Left Summary -->
                     <div class="col-md-3" style="text-align: left; padding: 15px;">
                         <h3 style="margin: 0; font-size: 28px; color: #000; font-weight: 400; margin-bottom: 10px; letter-spacing: -0.5px;">Hervorragend</h3>
                         
                         <!-- Green Star Squares Styling -->
                         <style>
                             .star-box-green { 
                                 background-color: #00b67a; 
                                 width: 32px; 
                                 height: 32px; 
                                 display: flex; 
                                 align-items: center; 
                                 justify-content: center; 
                                 margin-right: 4px; 
                                 border-radius: 2px;
                             }
                             .star-box-green i {
                                 color: white;
                                 font-size: 18px;
                             }
                             /* Smaller stars for list */
                             .star-box-green-sm {
                                 background-color: #00b67a; 
                                 width: 20px; 
                                 height: 20px; 
                                 display: flex; 
                                 align-items: center; 
                                 justify-content: center; 
                                 margin-right: 2px; 
                                 border-radius: 2px;
                             }
                             .star-box-green-sm i {
                                 color: white;
                                 font-size: 11px;
                             }
                             .review-arrow {
                                 width: 25px;
                                 height: 25px;
                                 background: #e0e0e0;
                                 border-radius: 50%;
                                 display: flex;
                                 align-items: center;
                                 justify-content: center;
                                 color: white;
                                 font-size: 14px;
                                 cursor: pointer;
                             }
                             .review-arrow:hover {
                                 background: #ccc;
                             }
                         </style>
                         
                         <!-- Main Stars -->
                         <div style="display: flex; margin-bottom: 8px;">
                             <div class="star-box-green"><i class="fa fa-star"></i></div>
                             <div class="star-box-green"><i class="fa fa-star"></i></div>
                             <div class="star-box-green"><i class="fa fa-star"></i></div>
                             <div class="star-box-green"><i class="fa fa-star"></i></div>
                             <div class="star-box-green"><i class="fa fa-star"></i></div>
                         </div>
                         
                         <p style="font-size: 13px; color: #333; margin: 0;">Basierend auf <u style="font-weight: bold; color: #000; text-decoration: underline;">19676 Bewertungen</u></p>
                     </div>
                     
                     <!-- Right Reviews Content -->
                     <div class="col-md-9" style="display: flex; align-items: center; padding-right: 15px; padding-left: 0;">
                         <!-- Left Arrow -->
                         <div style="flex: 0 0 auto; margin-right: 20px;">
                             <div class="review-arrow"><i class="fa fa-chevron-left"></i></div>
                         </div>

                         <!-- Items Container -->
                         <div style="flex: 1; display: flex; overflow: hidden; align-items: flex-start; justify-content: space-between;">
                             
                             <!-- Review Item 1 -->
                             <div style="flex: 0 0 45%; padding-right: 15px;">
                                 <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                     <div style="display: flex; margin-right: 10px;">
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                     </div>
                                 </div>
                                 <div style="font-size: 12px; color: #777; margin-bottom: 3px; line-height: 1.3;">
                                     Wie immer Reibungslos verlaufen. Vielen Dank.
                                 </div>
                                 <div style="font-size: 12px; color: #999;">Andrea Birra</div>
                             </div>
                              
                             <div style="flex: 0 0 auto; margin-right: 20px; font-size: 12px; color: #bbb;">heute</div>

                             <!-- Review Item 2 -->
                             <div style="flex: 0 0 40%; padding-right: 10px;">
                                 <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                     <div style="display: flex; margin-right: 10px;">
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                         <div class="star-box-green-sm"><i class="fa fa-star"></i></div>
                                     </div>
                                 </div>
                                 <div style="font-size: 12px; color: #777; margin-bottom: 3px; line-height: 1.3;">
                                     Alles bestens gelaufen
                                 </div>
                                 <div style="font-size: 12px; color: #999;">Fabian Schleich</div>
                             </div>
                             
                             <div style="flex: 0 0 auto; font-size: 12px; color: #bbb;">gestern</div>

                         </div>

                         <!-- Right Arrow -->
                         <div style="flex: 0 0 auto; margin-left: 20px;">
                             <div class="review-arrow"><i class="fa fa-chevron-right"></i></div>
                         </div>

                     </div>
                 </div>
            </div>
        </div>
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3">
            <div class="header_category  nofloat " style="margin-bottom: 20px;">
                <div id="boss-menu-category" class="box">
                    <div class="box-content">
                      <ul class="box-category boss-menu-cate new-iconarrow sidemenu-medicine"
                         style="list-style: none; padding: 0; border: 1px solid #ddd; border-top: 3px solid #0088cc;">
                            <!-- Viagra Generika -->
                            <li style="background: #aeddf5; padding: 10px 15px; font-weight: bold; color: #003e6d; font-size: 16px; border-bottom: 1px solid #fff;">Viagra Generika <span style="font-size: 13px; font-weight: normal; display: block; color: #003e6d;">(Sildenafil)</span></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Cenforce 100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Cenforce 150mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Cenforce 200mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Cenforce D 160mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Cobra 120mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Dapoxetine 60mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Extra Super P-Force 200mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Kamagra 100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Kamagra Chewable 100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Kamagra Effervescent <br>100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Kamagra Gold 100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Kamagra Oral Jelly 100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Lovegra 100mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Sildalist 120mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Super Kamagra 160mg</a></li>

                            <!-- Cialis Generika -->
                            <li style="background: #aeddf5; padding: 10px 15px; font-weight: bold; color: #003e6d; margin-top: 0; font-size: 16px; border-bottom: 1px solid #fff;">Cialis Generika <span style="font-size: 13px; font-weight: normal; display: block; color: #003e6d;">(Tadalafil)</span></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Apcalis-sx Oral Jelly 20mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Tadacip 20mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Tadalis-sx 20mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Tadapox 80mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Vidalista 20mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Vidalista 40mg</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Vidalista 60mg</a></li>

                            <!-- Levitra Generika -->
                            <li style="background: #aeddf5; padding: 10px 15px; font-weight: bold; color: #003e6d; margin-top: 0; font-size: 16px; border-bottom: 1px solid #fff;">Levitra Generika <span style="font-size: 13px; font-weight: normal; display: block; color: #003e6d;">(Vardenafil)</span></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> Valif 20mg</a></li>

                            <!-- Multipacks -->
                            <li style="background: #aeddf5; padding: 10px 15px; font-weight: bold; color: #003e6d; margin-top: 0; font-size: 16px; border-bottom: 1px solid #fff;">Multipacks - <span style="display: block; color: #003e6d;">Sonderangebote</span></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; line-height: 1.3; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> 10 x Packs Cenforce 100mg <br>(100 Tabletten)</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; line-height: 1.3; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> 10 x Packs Cobra 120mg (50 <br>Tabletten)</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; line-height: 1.3; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> 10 x Packs Kamagra oral <br>jelly 100mg (70 Jellies)</a></li>
                            <li><a href="#" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; line-height: 1.3; font-size: 13px;"><i class="fa fa-angle-right" style="margin-right: 5px;"></i> 10 x Packs Vidalista 20mg <br>(100 Tabletten)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Bestsellers Moved to Content -->

        </div>
        <!-- /#column-left -->
        
        <div id="content" class="col-sm-9 col-md-9 col-lg-9">



            <!-- Bestsellers Section (Moved to Main Content) & Main Products -->
            <div class="bt-product-category">
                
                <!-- Bestsellers Grid -->
                <!-- Light Blue Header for Bestsellers -->
                <div style="background: #aeddf5; padding: 10px 15px; margin-bottom: 15px;">
                     <h3 style="margin: 0; font-size: 16px; font-weight: bold; color: #000;">Bestsellers</h3>
                </div>
                
                <div class="row" style="margin-bottom: 30px;">
                    @if(isset($best_product) && count($best_product) > 0)
                        @foreach(array_slice($best_product, 0, 3) as $item)
                        <div class="col-md-4 col-sm-6" style="margin-bottom: 20px;">
                             <!-- Bestseller Card Style -->
                             <div class="product-card-bestseller" style="background: #fff; padding: 0; height: 100%;">
                                 <div style="background: white; padding: 0; position: relative;">
                                    
                                     <!-- Top Row: Image & Info -->
                                     <div class="row" style="margin: 0; padding-bottom: 10px;">
                                         <!-- Image Column -->
                                         <div class="col-xs-5" style="padding: 0; padding-left: 5px; position: relative;">
                                              <!-- Discount Pill -->
                                              @if($item['discount'] > 0)
                                              <div style="position: absolute; top: 0; left: 15px; background: #ff9900; color: white; font-weight: bold; font-size: 13px; padding: 1px 8px; border-radius: 12px; z-index: 10;">
                                                  -{{$item['discount']}}%
                                              </div>
                                              @endif
                                              
                                              @if(isset($item['slug']) && !empty($item['slug']))
                                              <a href="{{ route('client.product.product-preview', [$item['slug']]) }}">
                                                  <img src="{{asset('/assets/images/product/').'/'.$item['image']}}" alt="{{$item['name']}}" class="img-responsive" style="margin: 0 auto; margin-top: 25px; max-height: 80px;">
                                              </a>
                                              @else
                                              <img src="{{asset('/assets/images/product/').'/'.$item['image']}}" alt="{{$item['name']}}" class="img-responsive" style="margin: 0 auto; margin-top: 25px; max-height: 80px;">
                                              @endif
                                         </div>
                                         
                                         <!-- Info Column -->
                                         <div class="col-xs-7" style="padding-right: 5px; padding-left: 5px;">
                                             @if(isset($item['slug']) && !empty($item['slug']))
                                             <a href="{{ route('client.product.product-preview', [$item['slug']]) }}" style="text-decoration: none; color: inherit;">
                                                 <h4 style="font-size: 15px; font-weight: bold; margin: 0 0 5px 0; color: #000; line-height: 1.2;">{{$item['name']}}</h4>
                                             </a>
                                             @else
                                             <h4 style="font-size: 15px; font-weight: bold; margin: 0 0 5px 0; color: #000; line-height: 1.2;">{{$item['name']}}</h4>
                                             @endif
                                             
                                             <div style="margin-bottom: 2px;">
                                                 <span style="font-size: 13px; color: #333;">Our price: </span>
                                                 <span style="font-size: 18px; color: #e67e22; font-weight: bold;">€{{$item['price']}}</span>
                                             </div>
                                             
                                             <div style="font-size: 13px; color: #e67e22; font-weight: bold; line-height: 1.2;">
                                                 Buy more, save<br>more!
                                             </div>
                                         </div>
                                     </div>
                                     
                                     <!-- Bottom Row: Actions -->
                                     <div class="row" style="margin: 0; display: flex; align-items: flex-end; justify-content: space-between; padding-top: 5px;">
                                         <div class="col-xs-5" style="padding: 0; padding-left: 5px; text-align: left;">
                                             @if(isset($item['slug']) && !empty($item['slug']))
                                             <a href="{{ route('client.product.product-preview', [$item['slug']]) }}" style="font-size: 13px; color: #0056b3; font-weight: bold; text-decoration: none; line-height: 1.2; display: block;">More <br>information</a>
                                             @else
                                             <span style="font-size: 13px; color: #999; font-weight: bold; line-height: 1.2; display: block;">More <br>information</span>
                                             @endif
                                         </div>
                                         <div class="col-xs-7" style="padding: 0; padding-right: 5px; text-align: right;">
                                              @php
                                              $bestVariant = \App\ProductVariant::where('product_id', $item['id'])->orderBy('price', 'asc')->first();
                                              @endphp
                                              @if($bestVariant)
                                              <button class="btn btn-primary add-to-product-cart" data-product="{{$bestVariant->id}}" style="background: linear-gradient(to bottom, #3fa9f5 0%, #1f85c1 100%); border: 1px solid #1c7db5; font-weight: bold; font-size: 14px; padding: 6px 0; width: 100%; border-radius: 4px; box-shadow: 0 1px 2px rgba(0,0,0,0.1); text-shadow: 0 -1px 0 rgba(0,0,0,0.2);">
                                                  <span class="btn-text">Add to Cart</span>
                                                  <span class="btn-loading" style="display: none;">
                                                      <i class="fa fa-spinner fa-spin"></i> Loading...
                                                  </span>
                                              </button>
                                              @else
                                              <button class="btn btn-primary" disabled style="background: #ccc; border: none; font-weight: bold; font-size: 14px; padding: 6px 0; width: 100%; border-radius: 4px;">Unavailable</button>
                                              @endif
                                         </div>
                                     </div>

                                 </div>
                             </div>
                        </div>
                        @endforeach
                    @endif
                </div>

                <!-- Main Products Grid -->
                <!-- Light Blue Header for Multipacks/Products -->
                <div style="background: #aeddf5; padding: 10px 15px; margin-bottom: 0;">
                     <h3 style="margin: 0; font-size: 16px; font-weight: bold; color: #000;">Multipacks</h3>
                </div>

                <div class="bt-featured-pro bt-nprolarge-tabs heightcard">
                     <div class="row" style="margin: 0; border-left: 1px solid #eee; border-top: 1px solid #eee;">
                        @forelse ($product_list as $item)
                        @php
                        $multiVariant = \App\ProductVariant::where('product_id', $item['id'])->orderBy('price', 'asc')->first();
                        @endphp
                        @if($multiVariant)
                        <!-- Product Card -->
                         <div class="col-md-4 col-sm-6" style="padding: 0; border-right: 1px solid #eee; border-bottom: 1px solid #eee;">
                             <div class="product-card-multipack" style="background: #fff; padding: 15px 10px; height: 100%;">
                                 <div class="row" style="margin: 0;">
                                     <!-- Image -->
                                     <div class="col-xs-4" style="padding: 0;">
                                         <div style="position: relative; text-align: center;">
                                             @if(isset($item['slug']) && !empty($item['slug']))
                                             <a href="{{ route('client.product.product-preview', [$item['slug']]) }}">
                                                 <img src="{{asset('/assets/images/product/').'/'.$item['image']}}" alt="{{$item['name']}}" class="img-responsive" style="margin: 0 auto; max-height: 100px;">
                                             </a>
                                             @else
                                             <img src="{{asset('/assets/images/product/').'/'.$item['image']}}" alt="{{$item['name']}}" class="img-responsive" style="margin: 0 auto; max-height: 100px;">
                                             @endif
                                             @if($item['discount'] > 0)
                                             <div style="position: absolute; top: 0; left: 0; background: #ff9900; color: white; font-weight: bold; font-size: 11px; padding: 1px 6px; border-radius: 10px;">-{{$item['discount']}}%</div>
                                             @endif
                                         </div>
                                     </div>
                                     <!-- Details -->
                                     <div class="col-xs-8" style="padding-right: 0; padding-left: 10px; text-align: left;">
                                         @if(isset($item['slug']) && !empty($item['slug']))
                                         <a href="{{ route('client.product.product-preview', [$item['slug']]) }}" style="text-decoration: none; color: inherit;">
                                             <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 5px 0; color: #000; min-height: 20px;">{{$item['name']}}</h4>
                                         </a>
                                         @else
                                         <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 5px 0; color: #000; min-height: 20px;">{{$item['name']}}</h4>
                                         @endif
                                         
                                         <!-- Yellow/Orange Price Box -->
                                         <div class="price-box" style="margin-bottom: 8px;">
                                             <div style="background: #ffcc00; padding: 2px 5px; font-size: 11px; color: #333;">
                                                 Regular price: <span style="text-decoration: line-through;">€{{$multiVariant->price + 20}}</span>
                                             </div>
                                             <div style="background: #ff6600; padding: 2px 5px; font-size: 13px; color: #fff; font-weight: bold;">
                                                 Our price: €{{$multiVariant->price}}
                                             </div>
                                         </div>
                                         
                                         @if(isset($item['slug']) && !empty($item['slug']))
                                         <a href="{{ route('client.product.product-preview', [$item['slug']]) }}" style="font-size: 11px; color: #3498db; text-decoration: none; font-weight: bold; display: block; margin-bottom: 5px;">More information</a>
                                         @else
                                         <span style="font-size: 11px; color: #999; font-weight: bold; display: block; margin-bottom: 5px;">More information</span>
                                         @endif
                                         
                                         <button class="btn btn-primary btn-sm btn-block add-to-product-cart" data-product="{{$multiVariant->id}}" style="background: #3498db; border: none; border-radius: 3px; font-weight: bold; font-size: 12px; padding: 5px 0;">
                                             <span class="btn-text">Add to Cart</span>
                                             <span class="btn-loading" style="display: none;">
                                                 <i class="fa fa-spinner fa-spin"></i> Loading...
                                             </span>
                                         </button>
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

            <!-- Articles Section -->
            <div class="articles-section" style="margin-top: 25px; border: 1px solid #ddd; padding: 20px; background: #fff; margin-bottom: 20px;">
                
                <!-- Article 1 -->
                <div class="row" style="margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; display: flex; align-items: flex-start;">
                    <div class="col-md-9 col-sm-9">
                        <h3 style="margin: 0 0 10px 0; color: #006eb7; font-size: 18px; font-weight: bold;">Sildenafil vs. Vardenafil</h3>
                        <p style="font-size: 13px; color: #333; line-height: 1.5; margin-bottom: 10px;">
                            Two of the most common options for treating erectile dysfunction are sildenafil and vardenafil. Although these substances belong to the same class of drugs, they work differently. Choosing the right one can help make intimacy more relaxed, controllable, and enjoyable, so these differences are important.
                        </p>
                        <a href="#" style="font-size: 12px; color: #006eb7; font-weight: bold; text-decoration: none;">Read more</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="https://www.kamagraoriginal.to/images/blog/210/sildenafil-vs-vardenafil-kamagra-original.jpg" onerror="this.src='{{asset('/assets/images/product/default.jpg')}}'" alt="Sildenafil vs Vardenafil" style="width: 100%; border-radius: 2px;">
                    </div>
                </div>

                <!-- Article 2 -->
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

                <!-- Article 3 -->
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
                </div>
            </div>

            <!-- Medical Disclaimer -->
            <div class="medical-disclaimer" style="border: 1px solid #bcecff; background-color: #eaf8ff; padding: 15px; margin-bottom: 20px;">
                <h4 style="color: #31708f; font-size: 15px; font-weight: bold; margin: 0 0 5px 0;">Medical disclaimer</h4>
                <p style="font-size: 12px; color: #333; line-height: 1.4; margin: 0;">
                    You should always consult your doctor or another healthcare professional before taking any medication, supplement, or treatment for a health problem, whether offered on this website or elsewhere. If you have or suspect you have a medical problem, you should see your doctor immediately. For all products and/or services purchased through this website, you should carefully read all instructions before use.
                </p>
            </div>


             <!-- Description section moved to bottom if needed, currently hiding/keeping minimal to match screenshot focus -->

        </div><!-- /#content -->
    </div><!-- /#content -->

    <div class="row">
        <div class="banner-bottoms" style="margin-top:20px;">
            <img src="{{asset('/assets/client_new/fdooter_bottom.png')}}" alt="" srcset="">
        </div>
    </div>

</div>



@endsection

@section('scripts')
<script>
$(document).ready(function() {
    console.log('Home page loaded - Add to cart ready');
    
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