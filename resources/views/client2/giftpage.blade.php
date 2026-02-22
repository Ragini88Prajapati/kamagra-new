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


<div class="cart-container">

    <h1>Gifts with every purchase of €20 or more!</h1>
    <p class="intro">
     
	We value our customers and offer them gifts for a happy sex life.
     Simply order €20 or more and choose from a wide variety of gifts.
      We'll delight you with a present, and you'll make your partner happy too.
    </p>

    <!-- €20 section -->
    <h2 style="color: #075BAF;">Minimum order value of €20</h2>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #071D35;">
     
	Simply spend between €20 and €49 and you'll receive a gift from us. You can choose any one of these three products worth €15 – it's absolutely free!
    </p>

    <div class="gifts-items">
      <div class="gift-item" href="#">
        <img class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00193/193_det_d95c8d3a_d85d_kgr100.jpg" alt="Kamagra">
        <span class="gift-heading">1 × Kamagra 100 mg</span>
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
        <span class="gift">Gift €0</span>
        <div class="zobrazit-darcek">
        About the product
      </div>
      </div>
   </div>

      <div class="gift-item" href="#">
        <img class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00162/162_det_cd23edcf_tadalix-sx20.jpg" alt="Tadalis">
        <span class="gift-heading">1 × Tadalis-sx 20 mg</span>
        
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
       <span class="gift">Gift €0</span>
       <div class="zobrazit-darcek">
         About the product
       </div>
     </div>
    </div>

      <div class="gift-item" href="#">
        <img  class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00006/6_det_16200d37_lovegra-100-front.jpg" alt="Lovegra">
        <span class="gift-heading">1 × Lovegra 100 mg</span>
        
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
        <span class="gift">Gift €0</span>
     </div>
      <div class="zobrazit-darcek">
       About the product
      </div>
    </div>
</div>

    <!-- €50 section -->
   <h2 style="color: #075BAF; padding-top: 60px;">Minimum order value of €50</h2>
   <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #071D35;">
     
	Simply spend between €20 and €49 and you'll receive a gift from us. You can choose any one of these three products worth €15 – it's absolutely free!
    </p>

    <div class="gifts-items">
      <div class="gift-item" href="#">
        <img class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00193/193_det_d95c8d3a_d85d_kgr100.jpg" alt="Kamagra">
        <span class="gift-heading">1 × Kamagra 100 mg</span>
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
        <span class="gift">Gift €0</span>
        <div class="zobrazit-darcek">
        About the product
      </div>
      </div>
   </div>

      <div class="gift-item" href="#">
        <img class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00162/162_det_cd23edcf_tadalix-sx20.jpg" alt="Tadalis">
        <span class="gift-heading">1 × Tadalis-sx 20 mg</span>
        
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
       <span class="gift">Gift €0</span>
       <div class="zobrazit-darcek">
         About the product
       </div>
     </div>
    </div>

      <div class="gift-item" href="#">
        <img  class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00006/6_det_16200d37_lovegra-100-front.jpg" alt="Lovegra">
        <span class="gift-heading">1 × Lovegra 100 mg</span>
        
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
        <span class="gift">Gift €0</span>
     </div>
      <div class="zobrazit-darcek">
       About the product
      </div>
    </div>
</div>


    <!-- €150 section -->
    <h2 style="color: #075BAF; padding-top: 60px;">Minimum order value of €150</h2>
   <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #071D35;">
     
	Simply spend between €20 and €49 and you'll receive a gift from us. You can choose any one of these three products worth €15 – it's absolutely free!
    </p>

    <div class="gifts-items">
      <div class="gift-item" href="#">
        <img class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00193/193_det_d95c8d3a_d85d_kgr100.jpg" alt="Kamagra">
        <span class="gift-heading">1 × Kamagra 100 mg</span>
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
        <span class="gift">Gift €0</span>
        <div class="zobrazit-darcek">
        About the product
      </div>
      </div>
   </div>

      <div class="gift-item" href="#">
        <img class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00162/162_det_cd23edcf_tadalix-sx20.jpg" alt="Tadalis">
        <span class="gift-heading">1 × Tadalis-sx 20 mg</span>
        
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
       <span class="gift">Gift €0</span>
       <div class="zobrazit-darcek">
         About the product
       </div>
     </div>
    </div>

      <div class="gift-item" href="#">
        <img  class="gift-image" src="https://www.kamagraoriginal.to/shop_images/item/00006/6_det_16200d37_lovegra-100-front.jpg" alt="Lovegra">
        <span class="gift-heading">1 × Lovegra 100 mg</span>
        
        <div class="giftprice">
        <span class="label">Price:</span>
        <del class="old-price">15€</del>
        <span class="gift">Gift €0</span>
     </div>
      <div class="zobrazit-darcek">
       About the product
      </div>
    </div>
</div>
        </div>
        </div>
        </div>

</div>
</div>
@endsection
