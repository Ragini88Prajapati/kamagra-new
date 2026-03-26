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

<div class="cart-container" style="font-family: Arial, Helvetica, sans-serif;">
  <h1>Shipping &amp; Delivery</h1>

  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    Frequently asked questions about shipping and delivery.
  </p>

  <h2 style="color: #075BAF;">What happens to my order if I'm not at home?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    Most shipments are sent by registered mail. If you are not home, the delivery driver will leave a notification in your mailbox or attempt to contact you by phone. You can track the shipment status using your tracking information in your KamagraOriginal.to account or with your courier. If you were unable to personally receive the package from the courier, please contact them directly to arrange a new delivery date. Otherwise, your package will be returned to the pharmacy after a few days. The courier may charge additional fees if your package needs to be reshipped.
  </p>

  <h2 style="color: #075BAF;">When can I expect my order to arrive?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    Requests that have been submitted and already processed are forwarded to one of our partner doctors on the same day. The doctor will endeavor to assess your request on the same day as well. Any prescriptions issued can be forwarded immediately to a pharmacy upon request, which will then arrange for the fastest possible delivery. After receiving your payment, delivery of your order is expected to take 1 to 3 business days.
  </p>

  <h2 style="color: #075BAF;">How will my order be shipped?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    If, at your request, we send your prescription to a mail-order pharmacy, your order will be discreetly packaged and delivered directly to your home. The courier service usually requires a signature upon delivery; however, exceptions are possible. Your order will be shipped in neutral packaging to ensure discretion.
  </p>

  <h2 style="color: #075BAF;">What are the shipping costs?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    Shipping costs are €5-10 for all orders. All orders over €200 qualify for free shipping.
  </p>

  <h2 style="color: #075BAF;">Which locations do you deliver to?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    The pharmacies we work with deliver to almost all European countries.
  </p>

  <h2 style="color: #075BAF;">What are the average delivery times?</h2>
  <ul style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    <li>Austria - delivered in 3-5 working days</li>
    <li>Belgium - delivered in 3-6 working days</li>
    <li>Germany - delivered in 3-5 working days</li>
    <li>Luxembourg - delivered in 3-6 working days</li>
    <li>Netherlands - delivered in 3-6 working days</li>
    <li>Poland - delivered in 2-3 working days</li>
    <li><strike>Switzerland</strike> - (Delivery temporarily unavailable)</li>
    <li>Other countries - delivered in 3-7 working days</li>
  </ul>

  <h2 style="color: #075BAF;">Do you ship to the USA, Canada, or South America?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    No, we do not deliver to these countries.
  </p>

  <h2 style="color: #075BAF;">Does KamagraOriginal.to have an EU quality seal for online pharmacies?</h2>
  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    No, KamagraOriginal.to is not an online pharmacy and therefore does not have an EU quality seal. Our partner pharmacies, however, do have this seal or are eligible for it.
  </p>
</div>
</div>
</div>
</div>
@endsection