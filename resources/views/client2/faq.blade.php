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

  <h1>FAQ</h1>

  <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">WHO ARE WE?</h3>
  <p style="font-size: 13px;color: #071D35;">
    We are a reputable and reliable online platform offering valuable information and services to consumers seeking medications from renowned pharmaceutical companies such as Ajanta Pharma, Cipla, Sunrise, Centurion, and many others. Our selection includes popular generic versions of Viagra, such as Kamagra, Tadalis, Valif, and others, which are widely available and highly sought after in Europe and the USA.
    Rest assured that all products listed on our platform are 100% authentic and sourced directly from reputable pharmaceutical manufacturers in India. These products contain the same active ingredients as the original medications but are offered at significantly lower prices. With the expiration of patents on official erectile dysfunction medications, affordable generic alternatives with the same composition are now being manufactured, benefiting the general public.
  </p>

   <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">HOW CAN I COMPLETE MY ORDER?</h3>
  <ol style="font-size: 13px;color: #071D35;">
    <li>Browse and select the product(s) you want.</li>
    <li>Click on "Add to Cart" to add the product(s) to your shopping cart.</li>
    <li>Go to the shopping cart page and enter your personal details.</li>
  </ol>
  <p style="font-size: 13px;color: #071D35;">
    Once you have submitted your order, the payment information will be displayed. You will also receive a confirmation email with a summary of your order.
  </p>

   <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">HOW CAN I PAY FOR MY ORDER?</h3>
  <p style="font-size: 13px;color: #071D35;">
    You have two options to pay for your order: bank transfer or Bitcoin. The payment details for the bank transfer will be displayed on the order confirmation page and will also be sent to you by email.
    When making a bank transfer, please remember to include the order number as the payment reference. Once we have received the payment and it has been credited to our account, we will ship your order. If you wish to pay with Bitcoin, you will be redirected to the payment provider.
  </p>

   <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">WHEN WILL I RECEIVE MY ORDER?</h3>
  <p style="font-size: 13px;color: #071D35;">
    Your order should arrive within 3–7 business days after we receive your payment. For security, all orders are carefully packaged in secure envelopes or small boxes and shipped discreetly.
  </p>

  <ul style="font-size: 13px;color: #071D35;">
    <li>Austria: 3–6 working days</li>
    <li>Belgium: 3–6 working days</li>
    <li>Bulgaria: 3–6 working days</li>
    <li>France: 3–6 working days</li>
    <li>Poland: 2–4 working days</li>
    <li>Germany: 3–6 working days</li>
    <li>Luxembourg: 3–6 working days</li>
    <li>Netherlands: 3–6 working days</li>
    <li>Italy: 4–6 working days</li>
    <li>Spain: 4–6 working days</li>
    <li>Other EU countries: 3–7 working days</li>
  </ul>

   <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">DO YOU DELIVER TO ALL COUNTRIES?</h3>
 <p style="font-size: 13px;color: #071D35;">
    We ship to a wide variety of countries, but there are some exceptions. We currently do not ship to:
  </p>
  <ul style="font-size: 13px;color: #071D35;">
    <li>Switzerland</li>
    <li>Malta</li>
    <li>Spanish islands (Mallorca, Ibiza, Tenerife, Gran Canaria, etc.)</li>
    <li>Greek islands (Santorini, Mykonos, Crete, Rhodes, etc.)</li>
  </ul>
 <p style="font-size: 13px;color: #071D35;">
    Furthermore, our shipping services are currently limited to countries within the EU.
  </p>

  <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">HOW CAN I TRACK THE LOCATION OF MY ORDER?</h3>
  <p style="font-size: 13px;color: #071D35;">
    Once your order has been shipped, you will receive an email notification with a tracking link. Using this link, you can track your order and contact the courier if you haven't received your package.
  </p>

  <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">WHAT SHOULD I DO IF MY ORDER IS DAMAGED OR INCOMPLETE?</h3>
 <p style="font-size: 13px;color: #071D35;">
    If you receive a damaged or incomplete order, please contact our customer service immediately.
  </p>

  <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">WHAT IS THE RECOMMENDED DOSAGE OF YOUR PRODUCTS?</h3>
 <p style="font-size: 13px;color: #071D35;">
  You can find the recommended dosage for our products on the individual product pages in our shop.
   Please follow the instructions carefully and never exceed the recommended dosage.
  </p>

   <h3 style="color: #075BAF; font-family: Arial, Helvetica, sans-serif;font-size: 1.2em;">WHY SHOULD YOU CHOOSE OUR STORE?</h3>
  <p style="font-size: 13px;color: #071D35;">
   As a business long known for its reliability, we strive to provide our customers with the best possible experience.
    Our key features are:
  </p>
  <ul style="font-size: 13px;color: #071D35;">
    <li>Affordable prices that won't break the bank</li>
    <li>Genuine, high-quality products</li>
    <li>Discreet payment options, including Bitcoin</li>
    <li>Confidential shipping to protect your privacy</li>
    <li>Fast, reliable express delivery right to your doorstep</li>
    <li>Monthly special offers and promotions where you can save money</li>
    <li>Daily offers on selected products, so you can save even more.</li>
    <li>A free gift with every order as a token of our appreciation</li>
    <li>Outstanding customer service you'll love</li>
  </ul>

</div>
</div>
</div>

</div>
@endsection