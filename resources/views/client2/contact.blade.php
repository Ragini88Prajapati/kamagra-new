@php
use App\Models\Client\Product;

@endphp
@extends('layouts.client2')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        
        <!-- Left Sidebar -->
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

<div class="cart-container" style="font-family: Arial, Helvetica, sans-serif;">

        <h1>contact</h1>

      <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
          We strongly recommend using the online form below, as this is the most reliable way to contact us. 
          Emails occasionally get lost, while 
          <strong>the online form on this website is more dependable.</strong> 
          However, if you prefer to communicate with us by email, please contact us at:
        </p>

        <h3>info@korig.to</h3>

       <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
          <br>
          <strong>I haven't received confirmation of my order, what now?</strong>
        </p>

      <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
          You probably have your spam filter set too strictly. Please check your spam folder. 
          It's not possible to resend the confirmation. However, this isn't a problem. 
          Please contact us; we'll be happy to help.
          <br>&nbsp;
        </p>

       <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
          <strong>SMART LOGISTIK kft.</strong>
        </p>

       <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
          Hegedus Gyula utca 13<br>
          1136 Budapest<br>
          Hungary
        </p>

        <p>
          <a style="color: #075BAF; "  href="https://www.kamagraoriginal.to/de/impressum">imprint</a>
        </p>
          </div>
          <div class="cart-container" style="font-family: Arial, Helvetica, sans-serif;">
  
    <div id="module_28" class="module-wrapper module-wrapper-28">
      <div class="form">

        <form method="post" action="https://www.kamagraoriginal.to/de/kontakt-und-impressum">

          <div class="form-description">
            <h2 style="padding-bottom: 1em;">
              Write to us.
              <span style="font-weight:normal">
                We'll be happy to answer your questions.
              </span>
            </h2>
          </div>

          <div class="form-input-name" style="float: left; clear: both; width: 29%; margin-bottom:2px">
            <b>Name *</b>
          </div>

          <div class="form-input" style="float: left; width: 70%;">
            <input type="text" name="meno_6f4f" id="module_28_text_9" value="" size="15" maxlength="50" class="form-input-text required">
          </div>

          <div class="form-input-name" style="float: left; clear: both; width: 29%;">
            <b>Email *</b>
          </div>

          <div class="form-input" style="float: left; width: 70%;">
            <input type="text" name="email_ab7d" id="module_28_email_10" value="" size="15" maxlength="50" class="form-input-text required">
          </div>

          <div class="form-input-name" style="float: left; clear: both; width: 29%;">
            <b>Report *</b>
          </div>

          <div class="form-input" style="float: left; width: 70%;">
            <textarea name="sprava_7ec9" id="module_28_textarea_11" cols="30" rows="3" class="form-textarea required"></textarea>
          </div>

          <div class="form-input-name" style="float: left; clear: both; width: 29%;">
            <b>Confirmation code *</b>
          </div>

          <div class="form-input" style="float: left; width: 70%;">

            <div style="float: left;">
              <input type="text" name="opiste_znaky_z_obrazka_9253" id="module_28_captcha_12" value="" size="15" maxlength="50" class="form-input-captcha required">
              <br>
              <span onclick="var oImg = fnGetObject('img_opiste_znaky_z_obrazka_9253'); oImg.src='https://www.kamagraoriginal.to/captcha.php?sname=opiste_znaky_z_obrazka_9253&amp;random='+Math.random();" style="cursor: pointer; text-decoration: underline;">
                Generate new code
              </span>
            </div>

            <div style="float: left;">
              <img src="https://www.kamagraoriginal.to/captcha.php?sname=opiste_znaky_z_obrazka_9253"
                   id="img_opiste_znaky_z_obrazka_9253"
                   alt="captcha code"
                   border="0">
              <br>
            </div>

          </div>

          <div class="form-input-name" style="float: left; width: 29%;">&nbsp;</div>

          <div class="form-input" style="float: left; width: 70%;">
            <input type="submit" name="submit" id="module_28_submit" value="Submit form" class="form-button">
            <input type="hidden" name="id" value="28">
          </div>

          <div style="clear: both;"></div>

        </form>

      </div>
    </div>
        </div>
        </div>
        </div>
  

</div>
@endsection