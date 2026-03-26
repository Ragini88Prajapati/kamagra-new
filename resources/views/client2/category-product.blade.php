@php
use App\ProductVariant;
use Illuminate\Support\Str;

@endphp
@extends('layouts.client2')

@section('content')

<div class="bt-breadcrumb">
    <div class="container">
        <div class="row">
            
            <div class="breadcrumb-search-div">
                <ul class="breadcrumb">
                    <li><a href="{{route('home.index')}}"><i class="fa fa-home"></i></a>
                    </li>
                    <li><a href="">Product List</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div><!-- /.bt-breadcrumb -->

<div class="container">
    <div class="row">
        <!-- Left Sidebar -->
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3">
            
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
                                @if(!empty($category->description))
                                <li style="padding: 8px 15px; color: #666; font-style: italic; border-bottom: 1px solid #eee; background-color: #f8f9fa;">
                                    {!! Str::limit(strip_tags($category->description), 100) !!}
                                </li>
                                @endif
                                @php
                                    $category_products = \App\Models\Client\Product::where('category_id', $category->id)
                                        ->where('status', 1)
                                        ->select('name', 'slug')
                                        ->get();
                                @endphp
                                @forelse($category_products as $product)
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

        </div>
        <div class="col-12 col-sm-9 col-md-9 col-lg-9">
                <?php
                    // Get the current category based on the products shown
                    $current_category = null;
                    if (isset($products) && $products->count() > 0) {
                        $first_product = $products->first();
                        if ($first_product && $first_product->category_id) {
                            $current_category = \App\Models\Admin\Category::find($first_product->category_id);
                        }
                    }
                ?>
                @if($current_category && !empty($current_category->description))
                <div class="category-description" style="margin-bottom: 20px; padding: 15px; background-color: #f8f9fa; border-left: 4px solid #0088cc;">
                    <h3>{{ $current_category->name }} Description</h3>
                    <div>{!! $current_category->description !!}</div>
                </div>
                @endif
                <div class="bt-product-category product-list-grid">
                @forelse ($products as $item)
                <div class="bt-item-extra product-layout">
                    <section class="product-thumb bt-item transition">
                        <div class="image">
                            <a href="{{ route('client.product.product-preview', [$item->slug]) }}"> <img
                                    src="{{asset('/assets/images/product/').'/'.$item->image}}" alt="{{$item->name}}" />
                            </a>
                        </div>
                        <div class="small_detail">
                            <div class="caption">
                                <div class="name"> <a href="{{ route('client.product.product-preview', [$item->slug]) }}">{{$item->name}} </a>
                                </div>
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span
                                        class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack fa-hidden"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                </div>
                                <p class="price"> ${{$item->price}} </p>
                            </div>
                        </div>
                    </section>
                </div>
                    
                @empty
                    
                @endforelse
                

            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection