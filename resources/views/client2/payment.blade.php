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
            <div class="login-block" style="background: #eaf8ff; border: 1px solid #bce8f1; padding: 15px; margin-bottom: 20px; ">
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
    
	<h1>Pay</h1>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">Frequently asked questions about payment methods.</p>

	<h2 style="color: #075BAF;">How can I pay?</h2>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">You can pay KamagraOriginal.to via bank transfer.</p>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">For bank transfers, we will process your order as soon as we receive your payment. Processing advance payments takes approximately two to three business days.</p>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">Please note that you are responsible for paying the transaction fee. We therefore recommend selecting the OUR option (sender pays all transaction fees). All international transfers to us must be made using the OUR instruction.</p>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">The OUR option means that you are responsible for all transaction fees. We will then receive all necessary payments.</p>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">If you select the SHA ("shared" - sender and recipient share the transaction fees) or BEN ("beneficiary" - the recipient bears all transaction fees) options for your transaction, your order will not be processed.</p>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">Choosing SHA or BEN will delay the transaction process.</p>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">SHA (shared) means you only pay your bank's outgoing transfer fee. The sender pays the sending bank's fees. We receive your payment minus the bank's charges. BEN (beneficiary pays fees) means you pay no fees. We receive your payment minus all transfer fees.</p>

	<h2 style="color: #075BAF;">I've paid. How can I be sure the money will arrive?</h2>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">You will receive an email confirmation after each payment. If a payment was unsuccessful, you will be notified by email after approximately two days. This email will contain a link through which you can make the payment.</p>

	<h2 style="color: #075BAF;">Are there any hidden costs?</h2>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">The total price you pay for a medication includes a pharmacy fee, a prescription fee, an administrative fee, and the cost of the product itself. There are no hidden additional costs.</p>

	<h2 style="color: #075BAF;">How does payment via bank transfer work?</h2>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">You will receive the bank transfer information as soon as you place your order. When making the bank transfer, please use the order number as a reference – otherwise, we may not be able to match the payment to your order. If you have any questions, please contact our customer service.</p>
</div>
</div>
</div>
</div>
@endsection