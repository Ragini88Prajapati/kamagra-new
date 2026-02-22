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

<div class="container" style="margin-top: 20px;">
    <div class="row">
        
        <!-- Left Sidebar -->
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3">
            
            <!-- Login Block -->
            <!-- <div class="login-block" style="background: #eaf8ff; border: 1px solid #bce8f1; padding: 15px; margin-bottom: 20px;">
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

            <!-- Categories Menu (Dynamic) -->
            <div class="header_category  nofloat " style="margin-bottom: 20px;">
                <div id="boss-menu-category" class="box">
                    <div class="box-content">
                        <ul class="box-category boss-menu-cate new-iconarrow sidemenu-medicine" style="list-style: none; padding: 0; border: 1px solid #ddd; border-top: 3px solid #0088cc;">
                            @forelse($categories as $category)
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
            
            <!-- Info Box Header -->
            <div style="border: 1px solid #bce8f1; padding: 20px; margin-bottom: 25px;">
                <h1 style="margin: 0 0 15px 0; color: #006eb7; font-size: 24px; font-weight: bold; line-height: 1.2;">Generic erectile dysfunction medication available without a prescription</h1>
                <p style="font-size: 13px; color: #333; line-height: 1.5; margin: 0;">
                    Discover our curated selection of over-the-counter generic erectile dysfunction medications for treating <a href="#" style="color: #006eb7; font-weight: bold;">erectile dysfunction</a> and <a href="#" style="color: #006eb7; font-weight: bold;">premature ejaculation</a>. We offer personalized solutions to boost your confidence and intimacy, all without a prescription. With our commitment to privacy and quality, we provide a discreet platform for accessing trusted, non-prescription erectile <a href="#" style="color: #006eb7; font-weight: bold;">dysfunction medications</a> where your well-being and satisfaction are our top priority. Experience relief and rejuvenation with our products that give you back control over your sexual health and desire.
                </p>
            </div>

            <!-- Products Grid -->
            <div class="row">
                @forelse ($product_list as $item)
                @php
                $firstVariant = \App\ProductVariant::where('product_id', $item->id)->orderBy('price', 'asc')->first();
                @endphp
                @if($firstVariant)
                <div class="col-md-4 col-sm-6" style="margin-bottom: 20px;">
                    <div class="product-card" style="background: #fff; padding: 0; min-height: 250px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                        
                        <!-- Top Image/Discount Area -->
                        <div class="row" style="margin: 0; display: flex;">
                             <div class="col-xs-12" style="padding: 0; position: relative; text-align: center; min-height: 120px; display: flex; align-items: center; justify-content: center;">
                                 <img src="{{$item->image ? asset('/assets/images/product/'.$item->image) : asset('/assets/images/product/default.jpg')}}" alt="{{$item->name}}" class="img-responsive" style="max-height: 80px; width: auto;">
                                 
                                 <!-- Discount Badge -->
                                 @if($item->discount > 0)
                                 <div style="position: absolute; top: 0; right: 0; background: #ff9900; color: white; font-weight: bold; font-size: 12px; padding: 2px 8px; border-radius: 12px;">-{{$item->discount}}%</div>
                                 @else
                                 <div style="position: absolute; top: 0; right: 0; background: #ff9900; color: white; font-weight: bold; font-size: 12px; padding: 2px 8px; border-radius: 12px;">-23%</div>
                                 @endif
                             </div>
                        </div>

                        <!-- Details (Title, Price, Button) -->
                        <div style="padding: 0 10px;">
                            <h4 style="font-size: 14px; font-weight: bold; margin: 10px 0; color: #000; min-height: 40px; line-height: 1.3;">
                                {{$firstVariant->count}} x {{$firstVariant->unit_type}}<br>{{$item->name}}
                            </h4>
                            
                            <div style="margin-bottom: 10px;">
                                <span style="font-size: 13px; color: #333;">Our price:</span> <span style="font-size: 16px; color: #ff6600; font-weight: bold;">€{{$firstVariant->price}}</span>
                            </div>

                            <div class="row" style="margin: 0; margin-top: 10px; display: flex; align-items: center;">
                                <div class="col-xs-6" style="padding: 0; padding-right: 5px;">
                                    <a href="{{route('client.product.product-preview', $item->slug)}}" style="font-size: 12px; color: #006eb7; font-weight: bold; text-decoration: none; line-height: 1.2; display: block;">More<br>information</a>
                                </div>
                                <div class="col-xs-6" style="padding: 0; padding-left: 5px;">
                                    <button class="btn btn-primary btn-block add-to-product-cart" data-product="{{$firstVariant->id}}" style="background: #3498db; border: 1px solid #3498db; border-radius: 3px; font-weight: bold; font-size: 12px; padding: 6px 0;">
                                        <span class="btn-text">Add to Cart</span>
                                        <span class="btn-loading" style="display: none;">
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

        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
$(document).ready(function() {
    console.log('Product list page loaded - Add to cart ready');
    
    // Add to Cart functionality
    $(document).on('click', '.add-to-product-cart', function(e) {
        e.preventDefault();
        console.log('Add to cart button clicked');
        
        var button = $(this);
        var product = button.data('product');
        console.log('Product slug:', product);
        
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