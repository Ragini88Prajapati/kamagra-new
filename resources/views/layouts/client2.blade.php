@php
use App\Models\Client\Product;

@endphp

<!doctype html>
<html class="no-js" lang="de">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('SEO_Part')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Webstrot">
    <link rel="alternate" href="https://www.onlinekamagrastore.com/" hreflang="en-in" />
    <meta name="robots" content="{{ $product->meta_robot ?? 'index,follow' }}">


    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="https://onlinekamagrastore.com/assets/client2/images/new-latest-logo.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="https://onlinekamagrastore.com/assets/client2/images/new-latest-logo.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="https://onlinekamagrastore.com/assets/client2/images/new-latest-logo.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="https://onlinekamagrastore.com/assets/client2/images/new-latest-logo.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="https://onlinekamagrastore.com/assets/client2/images/new-latest-logo.png">

    <!-- ================= Google Fonts ================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css" />


    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Great+Vibes&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Great+Vibes&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/bootstrap.min.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/stylesheet1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/menu_default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/boss_megamenu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/jquery.jgrowl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/boss_alphabet.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/boss_facecomments.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/loading.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/cs.animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/boss_special.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/boss_filterproduct.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/custom2.12.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/revolutionslider_settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/resolution.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/pageinformation.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/shoppingsummary.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/indexblade.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/cartpage.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/ordercompleted.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/giftpage.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/advice.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/header.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/bossblog.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--<meta name="description" content="kamagra bestellen bei onlinekamagrastore  günstigen und schnellen Lieferzeiten. Kamagra kaufen in Europa - Kamagra online bestellen und günstig kaufen.">-->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    <!-- <script src='../../../../google_analytics_auto.js'></script> -->
    @yield('css')
    <style>
        .error {
            color: red !important;
        }

        .btn.btn-gray,
        /* #cart>.btn, */
        .jGrowl-button .buttons .btn,
        .compare-info .btn-wishlist,
        #cart .dropdown-menu .cart_bottom .buttons .btn {
            border-color: #7F447A !important;
            background: #7F447A !important;
        }

        .mega-menu>ul.nav>li>a {
            font-weight: bold !important;
            letter-spacing: 0.5px !important;

        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FFEPCPXM1X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FFEPCPXM1X');
    </script>

</head>

<body class="bt-home-page">

    <div id="bt_header" class="" style="width: 100%;">
            <div id="header" class="hidden-xs">

  <div id="header-content">

    <a id="logo" href="https://www.kamagraoriginal.to/de/de">
      <img src="https://www.kamagraoriginal.to/images/logo.png?v=10" alt="Kamagra Original">
    </a>

    <img id="logo3" width="199" height="83"
         src="https://www.kamagraoriginal.to/images/zakaznici-de.png"
         alt="Kamagra Zakaznici Banner">

    <a id="logo2" href="https://www.kamagraoriginal.to/de/versand-lieferung">
      <img width="404" height="54"
           src="https://www.kamagraoriginal.to/images/doprava-de.jpg"
           alt="Kamagra Original Shipping Banner">
    </a>

    <span id="language">
      <img width="25"
           src="https://www.kamagraoriginal.to/images/flag-de.png"
           style="cursor: pointer;"
           onclick="$('#language-list').toggle(200);">
    </span>

    <div id="language-list" class="list" style="display: none;">
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-en.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-de.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-at.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-fr.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-ch.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-nl.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-it.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-es.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-pt.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-ro.png"></a>
      <a href="#"><img src="https://www.kamagraoriginal.to/images/flag-sl.png"></a>
    </div>

    <span id="login-register">
      <a href="https://www.kamagraoriginal.to/de/anmeldung">Register</a>
      &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="https://www.kamagraoriginal.to/de/ihr-konto">login</a>
    </span>

  </div>
</div>


            <!-- Navigation Bar -->
            <div class="nav-bar-dark d-none d-md-block" style="background-color: #001e3c; border-bottom: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav" style="display: flex; align-items: center; padding: 0; margin: 0; list-style: none; width: 100%;">
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.index')}}" 
                                    style="color: white; font-weight: bold; padding: 0px 10px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                    Home
                                </a></li>
                                <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('product.product-list')}}" 
                                    style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                    Products
                                </a></li>
                               <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.giftpage')}}" style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                        Gifts</a>
                                    </li>
                                    <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.reviewpage')}}" style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                        Reviews
                                    </a></li>
                                    <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.kamagra-glossary')}}" 
                                    style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                    Encyclopedia
                                </a></li>
                                <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.advice')}}" style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                        Advice
                                    </a></li>
                                    <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.faq')}}" style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                        FAQ
                                    </a></li>
                                    <span class="straight">|</span>
                                <li style="border-right: 1px solid rgba(255,255,255,0.1);">
                                    <a href="{{route('home.contact_us')}}"
                                     style="color: white; font-weight: bold; padding: 0px 17px; text-decoration: none; display: block; font-size: 13px; text-transform: none; font-family: 'Open Sans', sans-serif;">
                                     Contact
                                    </a></li>
                                
                                <li style="margin-left: auto; display: flex; align-items: center;">
                                    <a href="{{route('product.show-cart')}}" id="desktop-cart-link" style="color: white; font-weight: normal; padding: 10px 0; text-decoration: none; display: block; font-size: 13px; font-family: 'Open Sans', sans-serif; display: flex; align-items: center;">
                                        <img src="{{ asset('assets/client2/images/bag-icon.png') }}" onerror="this.src='https://cdn-icons-png.flaticon.com/512/1656/1656850.png';this.style.filter='invert(0.5) sepia(1) saturate(5) hue-rotate(-25deg)';" style="height: 20px; margin-right: 8px;" alt="Cart">
                                        <span id="desktop-cart-count">
                                            @if(isset($cart_data['cart_total_quantity']) && $cart_data['cart_total_quantity'] > 0)
                                                {{$cart_data['cart_total_quantity']}} {{ $cart_data['cart_total_quantity'] == 1 ? 'product' : 'products' }} - €{{$cart_data['cart_total_price']}}
                                            @else
                                                No products
                                            @endif
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="bt-mobile">
                <div class="menu_mobile"> <a class="close-panel"><i class="fa fa-times-circle"></i></a>
                    <div class="bt-language">
                        <form method="post" enctype="multipart/form-data" class="language">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <span><img src="{{asset('/assets/client2/images/flags/gb.png')}}" alt="English" title="English"></span>
                                    <span>en</span><i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#googtrans(en|de)" class="lang-select" data-lang="de"><span class="text-left">German</span><span class="text-right"><img src="{{ asset('assets/client2/images/german-flag.png')}}" alt="German" title="German" /></span></a>
                                    </li>
                                    <li><a href="#googtrans(en|en)" class="lang-select" data-lang="en"><span class="text-left">English</span><span class="text-right"><img src="{{ asset('assets/client2/images/flags/gb.png')}}" alt="English" title="English" /></span></a>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="" />
                        </form>
                    </div>
                    <!-- /.bt-language -->
                    <div class="bt-currency">
                        <form method="post" enctype="multipart/form-data" class="currency">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong>
                                    <span>USD</span> <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="currency-select btn btn-link" type="button" name="EUR"><span>Euro</span> <span>€</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link" type="button" name="GBP"><span>Pound Sterling</span> <span>£</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link" type="button" name="USD"><span>US
                                                Dollar</span> <span>$</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="" />
                        </form>
                    </div>
                    <!-- /.bt-currency -->
                    <div class="logged-link"> <a href="{{route('home.signup')}}"><i class="fa fa-sign-in"></i><span>Sign
                                In</span></a>
                        <a href="{{route('login')}}"><i class="fa fa-sign-in"></i><span>Log In</span></a>
                    </div>
                    <div class="menubar">
                        <div class="container">
                            <div class="bt_mainmenu">
                                <div class="row">
                                    <div class="nav-heading"> <a class="open-panel"><b>MENU</b><span><i class="fa fa-bars"></i></span></a> </div>
                                    <nav class="mega-menu"> <a class="close-panel"><i class="fa fa-times-circle"></i></a>
                                        <ul class="nav nav-pills">
                                            <li class="parent">
                                                <a href="{{route('home.index')}}"><span class="menu-title">Home
                                                        Page</span></a>

                                            </li>
                                            <li> <a href="{{route('home.user-profile')}}"><span class="menu-title">My
                                                        Account</span></a> </li>
                                            <li> <a href="{{route('home.partner')}}"><span class="menu-title">partner</span></a>
                                            </li>
                                            <li> <a href="{{route('home.about_us')}}"><span class="menu-title">About
                                                        us</span></a>
                                            </li>
                                            <li> <a href="{{route('home.contact_us')}}"><span class="menu-title">Contact</span></a>
                                            </li>
                                            <li class="parent">
                                                <p class="plus visible-xs">+</p> <a href="#"><span class="menu-title">Service</span><i class="fa fa-angle-down"></i></a>
                                                <div class="dropdown drop-grid-6-1">
                                                    <div class="menu-row row-col-1">
                                                        <div class="menu-column row-grid-1">
                                                            <!-- <a href="#" class="parent">Personal Care</a> -->
                                                            <ul class="column category">
                                                                <li class="col-grid-1 "> <a href="{{route('home.free-shipping')}}">Kostenloser
                                                                        Versand</a>
                                                                </li>
                                                                <li class="col-grid-1 "> <a href="{{route('home.satisfaction')}}">100%
                                                                        Zufriedenheit</a> </li>
                                                                <li class="col-grid-1 "> <a href="{{route('home.delivery-information')}}">Informationen
                                                                        zum Versand</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li> <a href="{{route('home.kamagra-glossary')}}"><span class="menu-title">Kamagra Glossary</span></a>
                                            </li>
                                            <li> <a href="{{route('home.sexual-enhance')}}"><span class="menu-title">Potenzmittel</span></a>
                                            </li>

                                            <li> <a href="{{route('home.blog')}}"><span class="menu-title">bloggen</span></a>
                                            </li>


                                            {{-- <li> <a href="#"><span class="menu-title">Kamagra-Glossar</span></a> </li> --}}
                                            {{-- <li> <a href="#"><span class="menu-title">Potenzmittel</span></a> </li> --}}
                                            {{-- <li> <a href="#"><span class="menu-title">Blog</span></a> </li> --}}
                                        </ul>
                                    </nav>
                                    <!-- /.mega-menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.menubar -->
                </div>
            </div>
            
                                    <!-- <div class="col-xs-3  col-md-4 cart-column text-end-carts">
                                        <div id="cart" class="btn-group btn-block cart-icons header-cartbtn ">
                                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-mobile-view">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span id="cart-total" class="cart-total">
                                                    {{$cart_data['cart_total_quantity']}} Artikel -
                                                    €{{$cart_data['cart_total_price']}}</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right carts-latest">
                                                @if (isset($cart_data['cart_product_list']) &&
                                                !empty($cart_data['cart_product_list']))
                                                @foreach ($cart_data['cart_product_list'] as $item)
                                                @php
                                                $prod_data=Product::where('id',$item['product_id'])->first();
                                                @endphp
                                                <li>
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td class="text-left image">
                                                                <div class="image">
                                                                    <a href="product-detail.php"><img src="{{asset('/assets/images/product/').'/'.$prod_data->image}}" alt="{{$prod_data->name}}" title="{{$prod_data->name}}" class="img-thumbnail" />
                                                                    </a>
                                                                    <div class="remove delete-product" data-product="{{$item['id']}}">
                                                                        <button type="button" title="Remove" class="btn-danger"><i class="fa fa-times"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left name">
                                                                <a href="product-detail.php">{{$prod_data->name}}</a>
                                                                {{-- <br /> - <small>Color Pink</small> --}}
                                                                <div class="color-red">{{$item['quantity']}} x <span class="price color-red">€{{$item['price']}}</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                @endforeach
                                                <li>
                                                    <div class="cart_bottom">
                                                        <table class="minicart_total">
                                                            <tr>
                                                                <td class="text-left"><span class="color-red">Zwischensumme</span>
                                                                </td>
                                                                <td class="text-right color-red">€{{$cart_data['cart_total_price']}}
                                                                </td>
                                                            </tr>
            
                                                            <tr>
                                                                <td class="text-left"><span class="color-red">Gesamt</span>
                                                                </td>
                                                                <td class="text-right color-red">€{{$cart_data['cart_total_price']}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class="buttons">
                                                            <span class="cart_bt"><a href="{{route('product.show-cart')}}" class="btn">Warenkorb ansehen</a></span>
                                                            <span class="checkout_bt"><a class="btn btn-shopping" href="{{route('home.checkout_form')}}">Kasse</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                Einkaufswagen ist leer!
                                                @endif
                                            </ul>
                                        </div>
                                    </div> -->

            <header class="d-block d-md-none mobile-header">
                <div  style="margin-top:5px">
                    <div class="row d-flex align-items-center mob-header-rowdblock">
                       
                    <div class="col-xs-7 col-md-6 pdding-00 mobilecart">
                            <div id="logo " class="desktop-logo">
                                <a href="{{route('home.index')}}">
                                    <img src="https://www.kamagraoriginal.to/images/logo.png?v=10"
                                        alt="OnlineKamagraStore" >
                                </a>
                            </div>
                            <img style="flagimg" src="https://www.kamagraoriginal.to/images/flag-de.png" alt="">

                        </div>
                         <!-- <div class="col-xs-1 col-md-1 pdding-00 cart-column ">
                             </div> -->
                             <div class="col-xs-3 col-xs-5 cart-column text-end-carts">

                                     <div id="cart" class="btn-group btn-block cart-icons header-cartbtn">
                              <a href="/product/cart" class="btn btn-inverse btn-block btn-lg cart-mobile-view">
                                 <i class="fa fa-shopping-cart"></i>
                                  <span id="cart-total" class="cart-total">
                                      {{$cart_data['cart_total_quantity']}} Artikel -
                                      €{{$cart_data['cart_total_price']}}
                                  </span>
                              </a>
                                
                         </div>
                      </div>
                        <div class="col-xs-2 col-md-1 pdding-00">
                            <div class="open-menu">
                                <a class="open-bt-mobile" >
                                  
                                      <i class="fa fa-bars" id="openIcon"></i>
                                     <i class="fa fa-times" id="closeIcon" style="display:none;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- /.bt-mobile -->
            </div><!-- End bt_header -->


            <!-- <div id="google_translate_element" style="margin: 10px 0; text-align: right;"></div> -->
            <div id="bt_container" class="bt-wide" style="padding-bottom: 40px; min-height: 600px;">
                @yield('content')
            </div>

            

           <div id="bt_footer">

                <footer>
                    <!-- New Footer Design matching Screenshot -->
                  <div class="footer-new">
                   <div class="container">
        <div class="row footer-row">
            
            <!-- Logo Left -->
            <div class="col-md-3 col-sm-12 footer-logo">
                <a href="{{route('home.index')}}">
                    <img src="https://www.kamagraoriginal.to/images/logo.png?v=10"
                         alt="Kamagra Original">
                </a>
            </div>

            <!-- Links -->
            <div class="col-md-9 col-sm-12 footer-menu">

                <div class="footer-links-row">
                    <a href="{{route('home.index')}}">Home</a>
                    <span>|</span>
                    <a href="{{route('product.product-list')}}">Products</a>
                    <span>|</span>
                    <a href="{{route('home.giftpage')}}">Gifts</a>
                    <span>|</span>
                    <a href="{{route('home.reviewpage')}}">Reviews</a>
                    <span>|</span>
                    <a href="{{route('home.kamagra-glossary')}}">Encyclopedia</a>
                    <span>|</span>
                    <a href="{{route('home.advice')}}">Advice</a>
                    <span>|</span>
                    <a href="{{route('home.faq')}}">FAQ</a>
                    <span>|</span>
                    <a href="{{route('home.contact')}}">Contact</a>
                </div>

                <div class="footer-links-row">
                    <a href="{{route('home.gdpr')}}">GDPR</a>
                    <span>|</span>
                    <a href="{{route('home.termcondition')}}">Terms and Conditions</a>
                    <span>|</span>
                    <a href="{{route('home.payment')}}">Payment</a>
                    <span>|</span>
                    <a href="{{route('product.product-list')}}">Exchanges & Returns</a>
                </div>

                <div class="footer-links-row">
                    <a href="{{route('home.discreethandling')}}">Discreet handling</a>
                    <span>|</span>
                    <a href="{{route('home.shipping')}}">Shipping & Delivery</a>
                    <span>|</span>
                    <a href="{{route('home.legalnotice')}}">Legal Notice</a>
                    <span>|</span>
                    <a href="{{route('home.information')}}">Information</a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Copyright -->
<div class="footer-copy">
    <div class="container text-center">
        <p>2025 © SMART LOGISTIK kft., Hegedus Gyula utca 13, 1136 Budapest, Hungary, All rights reserved</p>
    </div>
</div>
                    
                    </footer>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/client2/js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('assets/client2/js/additional-methods.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('assets/client2/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/client2/js/getwidthbrowser.js') }}"></script>
        <script src="{{ asset('assets/client2/js/cs.bossthemes.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.jgrowl.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.smoothscroll.js') }}"></script>
        <script src="{{ asset('assets/client2/js/carouFredSel-6.2.1.js') }}"></script>
        <script src="{{ asset('assets/client2/js/boss_filterproduct.js') }}"></script>
        <script src="{{ asset('assets/client2/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.tools.min.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.selectbox-0.2.min.js') }}"></script>
        <script src="{{ asset('assets/client2/js/cloud-zoom.1.0.3.js') }}"></script>
        <script src="{{ asset('assets/client2/js/custom.js') }}"></script>
        <script src="{{ asset('assets/client2/js/jquery.fancybox.js') }}"></script>
        <!--Start of Tawk.to Script-->
        <!-- <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/620640439bd1f31184dc1f3f/1frk6m2u8';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script> -->
        <!--End of Tawk.to Script-->

        
        @yield('scripts')
        @if(session()->has('msg'))
        <script>
            alert('{{ session()->get("msg") }}')
        </script>
        @endif
        @if(Auth::check())
        <script>
            $(document).on('click', '.add-to-wishlist', function() {
                var product = $(this).data('product');
                $.ajax({
                    url: "{{ route('home.addToWishlist') }}",
                    type: "POST",
                    data: {
                        id: product,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        if (res == '1') {
                            alert("Product Added to wishlist")
                            window.location.reload();
                        }
                        if (res == '2') {
                            alert("Something went wrong")
                        }
                    }

                });
            });
        </script>
        @else
        <script>
            $(document).on('click', '.add-to-wishlist', function() {
                alert("Please Login");
            });
        </script>
        @endif

        @if(Auth::check())
        <script>
            $(document).on('click', '.remove-from-wishlist', function() {
                var product = $(this).data('product');
                $.ajax({
                    url: "{{ route('home.removeFromWishlist') }}",
                    type: "POST",
                    data: {
                        id: product,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        if (res == '1') {
                            alert("Product Removed from wishlist")
                            window.location.reload();
                        }
                        if (res == '2') {
                            alert("Something went wrong")
                        }
                    }

                });
            });
        </script>
        @endif
        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'de',
                    layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
                }, 'google_translate_element');
            }

            function triggerHtmlEvent(element, eventName) {
                var event;
                if (document.createEvent) {
                    event = document.createEvent('HTMLEvents');
                    event.initEvent(eventName, true, true);
                    element.dispatchEvent(event);
                } else {
                    event = document.createEventObject();
                    event.eventType = eventName;
                    element.fireEvent('on' + event.eventType, event);
                }
            }
            $(document).ready(function() {
                $('.delete-product').on('click', function() {
                    var product = $(this).data('product');
                    $.ajax({
                        url: "{{ route('product.delete-from-cart') }}",
                        type: "POST",
                        data: {
                            product: product,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            window.location.reload();
                        },
                        error: function(data) {
                            window.location.reload();
                        }
                    });
                });
                // alert($('.goog-te-combo').val());
                $('.lang-select').click(function() {
                    var theLang = $(this).attr('data-lang');
                    $('.goog-te-combo').val(theLang);

                    window.location = $(this).attr('href');
                    location.reload();

                });
            });
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <script>
            $(document).ready(function() {

                $("#quick_contact").validate({
                    ignore: [],
                    rules: {

                        contact_name: {
                            required: true,
                        },
                        contact_mail: {
                            required: true,
                        },
                        contact_msg: {
                            required: true,
                        },

                    },
                    messages: {


                    }
                });
                $.validator.addMethod("pwcheck",
                    function(value, element) {
                        return /^[A-Za-z0-9]+$/.test(value);
                    });
                $("#newslettter_form").validate({
                    ignore: [],
                    rules: {
                        subscribe_email: {
                            required: true,
                        },
                    },
                    messages: {}
                });
                $.validator.addMethod("pwcheck",
                    function(value, element) {
                        return /^[A-Za-z0-9]+$/.test(value);
                    });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                /* bosszoomtoolbox */
                $.fn.CloudZoom.defaults = {
                    adjustX: 0,
                    adjustY: 0,
                    tint: '#FFF',
                    tintOpacity: 0.5,
                    softFocus: 0,
                    lensOpacity: 0.7,
                    zoomWidth: '450',
                    zoomHeight: '512',
                    position: 'inside',
                    showTitle: 0,
                    titleOpacity: 0.5,
                    smoothMove: '3'
                };
                $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();

                //pass the images to Fancybox           
                var gallerylist = [];
                gallerylist.push({
                    href: "images/product/p21-600x683.jpg",
                    title: "Cashmere cuff vintage Levi maxi"
                });
                gallerylist.push({
                    href: "images/product/p18-600x683.jpg",
                    title: "Cashmere cuff vintage Levi maxi"
                });
                gallerylist.push({
                    href: "images/product/p1-600x683.jpg",
                    title: "Cashmere cuff vintage Levi maxi"
                });
                gallerylist.push({
                    href: "images/product/p16-600x683.jpg",
                    title: "Cashmere cuff vintage Levi maxi"
                });
                gallerylist.push({
                    href: "images/product/p11-600x683.jpg",
                    title: "Cashmere cuff vintage Levi maxi"
                });
                gallerylist.push({
                    href: "images/product/p10-600x683.jpg",
                    title: "Cashmere cuff vintage Levi maxi"
                });
                $("#wrap").bind('click', function() {
                    $.fancybox.open(gallerylist);
                    return false;
                });

                $("#boss-image-additional li a").on('click', function() {
                    $("#boss_large").attr("href", this)
                });

                /* Color Option */
                $('.bt-image-option').on('click', function() {
                    $('.bt-image-option').each(function() {
                        $(this).removeClass('active');
                    });
                    $(this).addClass('active');
                });

                /* boss-image-additional slider */
                $('#boss-image-additional').carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    prev: '#prev_image_additional',
                    next: '#next_image_additional',
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: 120,
                        height: 'auto',
                        visible: {
                            min: 1,
                            max: 3
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 500, //  The duration of the transition.
                    }
                });

            });

            // function changeQty(increase) {
            //     var qty = parseInt($('.select_number').find("input").val());
            //     if (!isNaN(qty)) {
            //         qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
            //         $('.select_number').find("input").val(qty);
            //     } else {
            //         $('.select_number').find("input").val(1);
            //     }
            // }

            function goToByScroll(id) {
                $('html,body').animate({
                    scrollTop: $("#" + id).offset().top
                }, 'slow');
            }
        </script>
        <script>
            jQuery(document).ready(function() {
                /* Related Product Slider */
                $('#product_related').carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    prev: '#prev_related',
                    next: '#next_related',
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: 370,
                        height: 470,
                        visible: {
                            min: 1,
                            max: 3
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    }
                });
                /* Related Article Slider */
                $('#article_related').carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    prev: '#prev_art_related',
                    next: '#next_art_related',
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: 272,
                        height: 'auto',
                        visible: {
                            min: 1,
                            max: 3
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    }
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {

                boss_quick_shop();
                dataAnimate();

                /* View Mode */
                // Product List
                $('#list-view').on('click', function() {
                    $('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');
                    localStorage.setItem('display', 'list');
                });
                // Product Grid
                $('#grid-view').on('click', function() {
                    // What a shame bootstrap does not take into account dynamically loaded columns
                    cols = $('#column-right, #column-left').length;
                    if (cols == 2) {
                        $('#content .product-layout').attr('class',
                            'product-layout product-grid col-lg-6 col-md-6 col-sm-6 col-xs-12');
                    } else if (cols == 1) {
                        $('#content .product-layout').attr('class',
                            'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12');
                    } else {
                        $('#content .product-layout').attr('class',
                            'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12');
                    }
                    localStorage.setItem('display', 'grid');
                });
                if (localStorage.getItem('display') == 'list') {
                    $('#list-view').trigger('click');
                } else {
                    $('#grid-view').trigger('click');
                }
            });
            /* Modal Quick Shop */
            $('#myModal').on('shown.bs.modal', function(e) {
                $.fn.CloudZoom.defaults = {
                    adjustX: 0,
                    adjustY: 0,
                    tint: '#FFF',
                    tintOpacity: 0.5,
                    softFocus: 0,
                    lensOpacity: 0.7,
                    zoomWidth: '450',
                    zoomHeight: '552',
                    position: 'inside',
                    showTitle: 0,
                    titleOpacity: 0.5,
                    smoothMove: '3'
                };
                $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
            })
            /* Quick Shop */
            function boss_quick_shop() {
                $('.product-thumb').each(function(index, value) {
                    var _qsHref =
                        '<button class=\"btn-quickshop\" title =\"Quick Shop\" class=\"sft_quickshop_icon \" data-toggle=\"modal\" data-target=\"#myModal\">Quick Shop</button>';
                    $('.image', this).append(_qsHref);
                });
            }
        </script>
        <script>
            /* Today Deal */
            var myVar = setInterval(function() {
                Deal0()
            }, 1000);

            function Deal0() {
                var i = 0;
                var today = new Date();
                var dateStr = "0000-00-00";
                //alert(dateStr);
                if (dateStr != "0000-00-00") {
                    var date = dateStr.split("-");
                    var date_end = new Date(date[0], (date[1] - 1), date[2]);
                    var deal = new Date();
                    deal.setTime(date_end - today);
                    //alert(deal);
                    if (date_end >= today) {
                        var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                        var d = deal.getDate() + (month * deal.getMonth());
                        var h = deal.getHours() + (d * 24);
                        var m = deal.getMinutes();
                        var s = deal.getSeconds();
                        h = checkTime(h);
                        m = checkTime(m);
                        s = checkTime(s);
                        $(".datetime00").html('<div class="sep"></div><div><span class="number">' + h +
                            '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m +
                            '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s +
                            '</span><span>Secs</span></div>');
                    }
                }
                var today = new Date();
                var dateStr = "2016-02-01";
                //alert(dateStr);
                if (dateStr != "0000-00-00") {
                    var date = dateStr.split("-");
                    var date_end = new Date(date[0], (date[1] - 1), date[2]);
                    var deal = new Date();
                    deal.setTime(date_end - today);
                    //alert(deal);
                    if (date_end >= today) {
                        var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                        var d = deal.getDate() + (month * deal.getMonth());
                        var h = deal.getHours() + (d * 24);
                        var m = deal.getMinutes();
                        var s = deal.getSeconds();
                        h = checkTime(h);
                        m = checkTime(m);
                        s = checkTime(s);
                        $(".datetime01").html('<div class="sep"></div><div><span class="number">' + h +
                            '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m +
                            '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s +
                            '</span><span>Secs</span></div>');
                    }
                }
                var today = new Date();
                var dateStr = "0000-00-00";
                //alert(dateStr);
                if (dateStr != "0000-00-00") {
                    var date = dateStr.split("-");
                    var date_end = new Date(date[0], (date[1] - 1), date[2]);
                    var deal = new Date();
                    deal.setTime(date_end - today);
                    //alert(deal);
                    if (date_end >= today) {
                        var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                        var d = deal.getDate() + (month * deal.getMonth());
                        var h = deal.getHours() + (d * 24);
                        var m = deal.getMinutes();
                        var s = deal.getSeconds();
                        h = checkTime(h);
                        m = checkTime(m);
                        s = checkTime(s);
                        $(".datetime02").html('<div class="sep"></div><div><span class="number">' + h +
                            '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m +
                            '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s +
                            '</span><span>Secs</span></div>');
                    }
                }
                var today = new Date();
                var dateStr = "0000-00-00";
                //alert(dateStr);
                if (dateStr != "0000-00-00") {
                    var date = dateStr.split("-");
                    var date_end = new Date(date[0], (date[1] - 1), date[2]);
                    var deal = new Date();
                    deal.setTime(date_end - today);
                    //alert(deal);
                    if (date_end >= today) {
                        var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                        var d = deal.getDate() + (month * deal.getMonth());
                        var h = deal.getHours() + (d * 24);
                        var m = deal.getMinutes();
                        var s = deal.getSeconds();
                        h = checkTime(h);
                        m = checkTime(m);
                        s = checkTime(s);
                        $(".datetime03").html('<div class="sep"></div><div><span class="number">' + h +
                            '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m +
                            '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s +
                            '</span><span>Secs</span></div>');
                    }
                }
                var today = new Date();
                var dateStr = "0000-00-00";
                //alert(dateStr);
                if (dateStr != "0000-00-00") {
                    var date = dateStr.split("-");
                    var date_end = new Date(date[0], (date[1] - 1), date[2]);
                    var deal = new Date();
                    deal.setTime(date_end - today);
                    //alert(deal);
                    if (date_end >= today) {
                        var month = new Date(deal.getMonth(), deal.getMonth(), 0).getDate();
                        var d = deal.getDate() + (month * deal.getMonth());
                        var h = deal.getHours() + (d * 24);
                        var m = deal.getMinutes();
                        var s = deal.getSeconds();
                        h = checkTime(h);
                        m = checkTime(m);
                        s = checkTime(s);
                        $(".datetime04").html('<div class="sep"></div><div><span class="number">' + h +
                            '</span><span>Hours</span></div><div class="sep"></div><div><span class="number">' + m +
                            '</span><span>Mins</span></div><div class="sep"></div><div><span class="number">' + s +
                            '</span><span>Secs</span></div>');
                    }
                }
            }

            function checkTime(j) {
                if (j < 10) {
                    j = "0" + j;
                }
                return j;
            }

            jQuery(document).ready(function() {
                /* Main Slider */
                $('.tp-banner0').show().revolution({
                    dottedOverlay: "none",
                    delay: 5000,
                    startWithSlide: 0,
                    startwidth: 870,
                    startheight: 450,
                    hideThumbs: 10,
                    hideTimerBar: "on",
                    thumbWidth: 50,
                    thumbHeight: 50,
                    thumbAmount: 4,
                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "round",
                    touchenabled: "on",
                    onHoverStop: "on",
                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,
                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                    keyboardNavigation: "off",
                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,
                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 50,
                    soloArrowLeftVOffset: 8,
                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 50,
                    soloArrowRightVOffset: 8,
                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",
                    spinner: "spinner4",
                    stopLoop: "on",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    forceFullWidth: "off",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 500,
                    hideAllCaptionAtLilmit: 500,
                    videoJsPath: "rs-plugin/videojs/",
                    fullScreenOffsetContainer: ""
                });


                loadtopmenu();
                $("#boss-menu-category .boss_heading").on('click', function() {
                    $('#boss-menu-category').toggleClass('opencate');
                    loadtopmenu();
                });

                function loadtopmenu() {
                    var menuheight = $('#boss-menu-category .box-content').outerHeight();
                    var topcate = $('#boss-menu-category').offset().top;
                    $('#boss-menu-category .boss-menu-cate .nav_title').each(function(index, element) {
                        var liheight = $(this).outerHeight();
                        var subheight = $(this).next('.nav_submenu').outerHeight();
                        var topheight = $(this).offset().top - topcate - 55;
                    });
                }
                $('#boss-menu-category .b_menucategory_hidde,#boss-menu-category  .menu_loadmore_hidden').hide();
                $('#boss-menu-category .menu_loadmore').on('click', function() {
                    $('#boss-menu-category .b_menucategory_hidde').slideToggle("normal", function() {
                        $('#boss-menu-category .menu_loadmore').hide();
                        $('#boss-menu-category .menu_loadmore_hidden').show();
                    });
                });
                $('#boss-menu-category .menu_loadmore_hidden').on('click', function() {
                    $('#boss-menu-category .b_menucategory_hidde').slideToggle("normal", function() {
                        $('#boss-menu-category .menu_loadmore').show();
                        $('#boss-menu-category .menu_loadmore_hidden').hide();
                    });
                });


                /* Today Deal */
                setTimeout(function() {
                    $('#product_special_0').carouFredSel({
                        auto: {
                            play: false,
                            timeoutDuration: 4000,
                        },
                        responsive: true,
                        width: '100%',
                        height: 'variable',
                        prev: '#prev_special_0',
                        next: '#next_special_0',
                        swipe: {
                            onTouch: true
                        },
                        items: {
                            width: 230,
                            height: 'variable',
                            visible: {
                                min: 1,
                                max: 1,
                            }
                        },
                        scroll: {
                            direction: 'left', //  The direction of the transition.
                            duration: 1200, //  The duration of the transition.
                            items: 1,
                        },

                    });
                }, 200);

                /* Testimonial */
                $('#boss_testimonial_0').carouFredSel({
                    auto: {
                        play: false,
                        timeoutDuration: 4500,
                    },
                    responsive: true,
                    width: '100%',
                    height: 'variable',
                    prev: '#prev_testimonial_0',
                    next: '#next_testimonial_0',
                    swipe: {
                        onTouch: false
                    },
                    items: {
                        /*width: image_width,*/
                        height: 'variable',
                        visible: {
                            min: 1,
                            max: 1
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    },
                    onCreate: function() {
                        $(window).smartresize(function() {
                            $('#boss_testimonial_0 div.testimonial-item').css("height",
                                getMaxHeight(
                                    '#boss_testimonial_0 div.testimonial-item'));
                            $('#boss_testimonial_min_height_0 div.caroufredsel_wrapper').css(
                                "width",
                                '100%');
                            $('#boss_testimonial_min_height_0 div.caroufredsel_wrapper #boss_testimonial_0')
                                .css("width", '100%');
                        });
                    }
                });
                $('#boss_testimonial_0 div.testimonial-item').css("height", getMaxHeight(
                    '#boss_testimonial_0 div.testimonial-item'));
                $('#boss_testimonial_min_height_0 div.caroufredsel_wrapper').css("min-height", getMaxHeight(
                    '#boss_testimonial_0 div.testimonial-item'));

                /* Best Product */
                initCarousel(0, 0, 0, 1, 81);
                checkDevices(0);
                $("a.head_tabs0").on('click', function() {
                    if (getWidthBrowser() > 767) {
                        return false;
                    }
                    if (!$(this).parent().hasClass('active')) {
                        $(".head_tabs0").parent().removeClass("active");
                        var $src_tab = $(this).attr("data-src");
                        $($src_tab).parent().addClass("active");
                        $(".content_tabs0").hide();
                        var $selected_tab = $(this).attr("href");
                        $($selected_tab).fadeIn();
                    }
                    return false;
                });
                $(window).resize(function() {
                    checkDevices(0);
                });

                /* vaccines */
                if ($(window).width() > 768) {
                    var image_width = 268;
                    var per_row = 3;
                    if ($(window).width() <= 1023) {
                        per_row = 3;
                    }
                } else {
                    if ($(window).width() < 480) {
                        per_row = 1;
                    } else {
                        per_row = 2;
                    }
                    var image_width = 200;
                }
                $('#boss_featured_0').carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    height: 'auto',
                    prev: '#prev_featured_0',
                    next: '#next_featured_0',
                    pagination: '#bt_pag_0',
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: image_width,
                        height: 'auto',
                        visible: {
                            min: 1,
                            max: per_row,
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    },
                    onCreate: function() {
                        $(window).smartresize(function() {
                            if ($(window).width() > 768) {
                                var image_width = 268;
                                var per_row = 3;
                                if ($(window).width() <= 1023) {
                                    per_row = 3;
                                }
                            } else {
                                if ($(window).width() < 480) {
                                    per_row = 1;
                                } else {
                                    per_row = 2;
                                }
                                var image_width = 200;
                            }
                            $('#boss_featured_0').carouFredSel({
                                auto: false,
                                responsive: true,
                                width: '100%',
                                height: 'auto',
                                prev: '#prev_featured_0',
                                next: '#next_featured_0',
                                pagination: '#bt_pag_0',
                                swipe: {
                                    onTouch: true
                                },
                                items: {
                                    width: image_width,
                                    height: 'auto',
                                    visible: {
                                        min: 1,
                                        max: per_row,
                                    }
                                },
                                scroll: {
                                    direction: 'left', //  The direction of the transition.
                                    duration: 1000 //  The duration of the transition.
                                },
                            });
                            $('#bt_fea_pro_0 .box-content .caroufredsel_wrapper').css("height",
                                getMaxHeight('#boss_featured_0 section.bt-item') + 10);
                        });
                    },
                });
                $('#bt_fea_pro_0 .box-content .caroufredsel_wrapper').css("height", getMaxHeight(
                    '#boss_featured_0 section.bt-item') + 10);

                /* cosmetics */
                if ($(window).width() > 768) {
                    var image_width = 268;
                    var per_row = 3;
                    if ($(window).width() <= 1023) {
                        per_row = 3;
                    }
                } else {
                    if ($(window).width() < 480) {
                        per_row = 1;
                    } else {
                        per_row = 2;
                    }
                    var image_width = 200;
                }
                $('#boss_featured_1').carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    height: 'auto',
                    prev: '#prev_featured_1',
                    next: '#next_featured_1',
                    pagination: '#bt_pag_1',
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: image_width,
                        height: 'auto',
                        visible: {
                            min: 1,
                            max: per_row,
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    },
                    onCreate: function() {
                        $(window).smartresize(function() {
                            if ($(window).width() > 768) {
                                var image_width = 268;
                                var per_row = 3;
                                if ($(window).width() <= 1023) {
                                    per_row = 3;
                                }
                            } else {
                                if ($(window).width() < 480) {
                                    per_row = 1;
                                } else {
                                    per_row = 2;
                                }
                                var image_width = 200;
                            }
                            $('#boss_featured_1').carouFredSel({
                                auto: false,
                                responsive: true,
                                width: '100%',
                                height: 'auto',
                                prev: '#prev_featured_1',
                                next: '#next_featured_1',
                                pagination: '#bt_pag_1',
                                swipe: {
                                    onTouch: true
                                },
                                items: {
                                    width: image_width,
                                    height: 'auto',
                                    visible: {
                                        min: 1,
                                        max: per_row,
                                    }
                                },
                                scroll: {
                                    direction: 'left', //  The direction of the transition.
                                    duration: 1000 //  The duration of the transition.
                                },
                            });
                            $('#bt_fea_pro_1 .box-content .caroufredsel_wrapper').css("height",
                                getMaxHeight('#boss_featured_1 section.bt-item') + 10);
                        });
                    },
                });
                $('#bt_fea_pro_1 .box-content .caroufredsel_wrapper').css("height", getMaxHeight(
                    '#boss_featured_1 section.bt-item') + 10);

                /* vitamins */
                if ($(window).width() > 768) {
                    var image_width = 268;
                    var per_row = 3;
                    if ($(window).width() <= 1023) {
                        per_row = 3;
                    }
                } else {
                    if ($(window).width() < 480) {
                        per_row = 1;
                    } else {
                        per_row = 2;
                    }
                    var image_width = 200;
                }
                $('#boss_featured_2').carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    height: 'auto',
                    prev: '#prev_featured_2',
                    next: '#next_featured_2',
                    pagination: '#bt_pag_2',
                    swipe: {
                        onTouch: true
                    },
                    items: {
                        width: image_width,
                        height: 'auto',
                        visible: {
                            min: 1,
                            max: per_row,
                        }
                    },
                    scroll: {
                        direction: 'left', //  The direction of the transition.
                        duration: 1000 //  The duration of the transition.
                    },
                    onCreate: function() {
                        $(window).smartresize(function() {
                            if ($(window).width() > 768) {
                                var image_width = 268;
                                var per_row = 3;
                                if ($(window).width() <= 1023) {
                                    per_row = 3;
                                }
                            } else {
                                if ($(window).width() < 480) {
                                    per_row = 1;
                                } else {
                                    per_row = 2;
                                }
                                var image_width = 200;
                            }
                            $('#boss_featured_2').carouFredSel({
                                auto: false,
                                responsive: true,
                                width: '100%',
                                height: 'auto',
                                prev: '#prev_featured_2',
                                next: '#next_featured_2',
                                pagination: '#bt_pag_2',
                                swipe: {
                                    onTouch: true
                                },
                                items: {
                                    width: image_width,
                                    height: 'auto',
                                    visible: {
                                        min: 1,
                                        max: per_row,
                                    }
                                },
                                scroll: {
                                    direction: 'left', //  The direction of the transition.
                                    duration: 1000 //  The duration of the transition.
                                },
                            });
                            $('#bt_fea_pro_2 .box-content .caroufredsel_wrapper').css("height",
                                getMaxHeight('#boss_featured_2 section.bt-item') + 10);
                        });
                    },
                });
                $('#bt_fea_pro_2 .box-content .caroufredsel_wrapper').css("height", getMaxHeight(
                    '#boss_featured_2 section.bt-item') + 10);

                /* Product */
                function loadslider($tabmodule) {
                    if ($(window).width() > 768) {
                        var image_width = 100;
                    } else {
                        var image_width = 300;
                    }
                    $('#boss_procate_' + $tabmodule).carouFredSel({
                        auto: false,
                        responsive: true,
                        width: '100%',
                        height: 'variable',
                        prev: '#bt_next_pro_' + $tabmodule,
                        next: '#bt_prev_pro_' + $tabmodule,
                        pagination: '#bt_pag_pro_' + $tabmodule,
                        swipe: {
                            onTouch: true
                        },
                        items: {
                            width: image_width,
                            height: 'variable',
                            visible: {
                                min: 1,
                                max: 1
                            }
                        },
                        scroll: {
                            direction: 'left', //  The direction of the transition.
                            duration: 1000 //  The duration of the transition.
                        }
                    });
                };

                boss_quick_shop();
            });

            /* Modal Quick Shop */
            $('#myModal').on('shown.bs.modal', function(e) {
                $.fn.CloudZoom.defaults = {
                    adjustX: 0,
                    adjustY: 0,
                    tint: '#FFF',
                    tintOpacity: 0.5,
                    softFocus: 0,
                    lensOpacity: 0.7,
                    zoomWidth: '450',
                    zoomHeight: '552',
                    position: 'inside',
                    showTitle: 0,
                    titleOpacity: 0.5,
                    smoothMove: '3'
                };
                $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
            })
            /* Quick Shop */
            // function boss_quick_shop() {
            //     $('.product-thumb').each(function(index, value) {
            //         var _qsHref = '<button class=\"btn-quickshop\" title =\"Quick Shop\" class=\"sft_quickshop_icon \" data-toggle=\"modal\" data-target=\"#myModal\">Quick Shop</button>';
            //         $('.image', this).append(_qsHref);
            //     });
            // }
        </script>
        <script>
            jQuery(document).ready(function() {

            });

            // function changeQty(position, increase) {
            //     var qty = parseInt($('#select-number' + position + '').val());
            //     if (!isNaN(qty)) {
            //         qty = increase ? qty + 1 : (qty - 1 > 1 ? qty - 1 : 1);
            //         $('#select-number' + position + '').val(qty);
            //     } else {
            //         $('#select-number' + position + '').val(1);
            //     }
            //     position = '';
            // }
        </script>
        <script>
            jQuery(document).ready(function() {
                $('[data-toggle="collapse"]').click(function() {
                    $('.panel-heading').removeClass('active')
                    $(this).parents('.panel-heading').addClass('active');
                })

                /* Billing Option */
                $('input[name=\'payment_address\']').on('change', function() {
                    if (this.value == 'new') {
                        $('#payment-existing').hide();
                        $('#payment-new').show();
                    } else {
                        $('#payment-existing').show();
                        $('#payment-new').hide();
                    }
                });

                /* Shipping Option */
                $('input[name=\'shipping_address\']').on('change', function() {
                    if (this.value == 'new') {
                        $('#shipping-existing').hide();
                        $('#shipping-new').show();
                    } else {
                        $('#shipping-existing').show();
                        $('#shipping-new').hide();
                    }
                });

                $('#button-confirm').on('click', function() {
                    location = 'checkout-success.html';
                });

                // $(".prod-item-bottomdiv .zoom-image").click(function() {
                //     $(".zoom-imgbig-div").addClass("show");
                //     $(".zoom-imgbig-div").removeClass("hide");
                // });
                // $(".close-icon").click(function() {
                //     $(".zoom-imgbig-div").removeClass("show");
                //     $(".zoom-imgbig-div").addClass("hide");

                // });
            });
        </script>

</body>

</html>