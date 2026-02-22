@php
use App\ProductVariant;
@endphp
@extends('layouts.client2')
@section('SEO_Part')
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
        <div id="content" class="col-sm-9 col-md-9 col-lg-9" style="margin-top: -30px;">
           <div class="emptybackround"></div>
          <div class="cart-container">
            <form method="get" action="https://www.kamagraoriginal.to/shop.php" id="oFormBasketAdd">
            <input type="hidden" name="shop_module" value="basket">
            <input type="hidden" name="shop_script" value="add">
            <input type="hidden" name="lng" value="de">
            <input type="hidden" name="itm" value="{{$product_data->id}}">

  <div class="row product-row">

  

  <!-- Left column (col-md-5) -->
  <div class="col-md-5 product-image">
    <a href="{{asset('/assets/images/product/').'/'.$product_data->image}}" target="_blank" rel="nofollow">
      <img
        src="{{asset('/assets/images/product/').'/'.$product_data->image}}"
        alt="{{$product_data->name}}">
    </a>
  </div>

  <!-- Right column (col-md-7) -->
  <div class="col-md-7 product-details">

    <div class="rating">
      @if($product_data->avg_rating)
        @for($i = 1; $i <= 5; $i++)
          @if($i <= $product_data->avg_rating)
            <span style="color: #EA9119;  margin-right: -4px;">★</span>
          @else
            <span style="color: #ccc;  margin-right: -4px;">★</span>
          @endif
        @endfor
        <span>({{number_format($product_data->avg_rating, 1)}} average, {{$product_data->reviews_count}} reviews)</span>
      @else
        <span style="color: #ccc;">★</span><span style="color: #ccc;">★</span><span style="color: #ccc;">★</span><span style="color: #ccc;">★</span><span style="color: #ccc;">★</span> <span>(No reviews yet)</span>
      @endif
    </div>

     <h1 class="product-title">
      {{$product_data->name}}
    </h1>

    <div class="category">
      @if(isset($product_data->category->name))
        {{$product_data->category->name}}
      @endif
    </div>

     <div class="purchase-row">
  <div class="price">
    <span style="color:black; font-weight: 400;">Price:</span>
    <strong>€{{$product_data->price ?? $product_data->min_price}}</strong>
  </div>

  <div class="basket-count">
    <input type="number" name="cnt" id="cnt" value="1" min="1">
    <span class="unit">St.</span>
  </div>
  

  <div >
    <?php
    $firstVariant = \App\ProductVariant::where('product_id', $product_data->id)->first();
    $variantId = $firstVariant ? $firstVariant->id : null;
    ?>
    @if($variantId)
    <button type="button" class="addtocart add-to-product-cart" data-product="{{$variantId}}">
      Add to Cart
    </button>
    @else
    <button type="button" class="add-to-cart add-to-product-cart" data-product="{{$product_data->id}}" disabled>
      Add to Cart (No variants available)
    </button>
    @endif
  </div>
</div>


  <table class="info">
  <tbody>
    <tr class="oddtable">
      <td class="label">Product code:</td>
      <td class="value">{{ $product_data->number_text ?? 'N/A' }}</td>
    </tr>

    <tr>
      <td class="label">Category:</td>
      <td class="valuelink">
        @if(isset($product_data->category->name))
        <a href="{{ route('client2.category-product', $product_data->category->id) }}">
          {{$product_data->category->name}}
        </a>
        @else
          N/A
        @endif
      </td>
    </tr>

    <tr class="oddtable">
      <td class="label">Brand:</td>
      <td class="valuelink">
        @if(isset($product_data->brand->name))
          {{$product_data->brand->name}}
        @else
          N/A
        @endif
      </td>
    </tr>

    <tr>
      <td class="label">Availability:</td>
      <td class="value">
        @if(isset($product_data->status) && $product_data->status == 1)
          In stock – available for immediate delivery
        @else
          Out of stock
        @endif
      </td>
    </tr>
  </tbody>
</table>
    </div>
</div>
</form>

<!-- Product Information Tabs -->
<ul class="product-tab-links" style="list-style: none; padding: 0; margin: 20px 0; border-bottom: 1px solid #ddd;">
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-uebersicht" class="tab-link active" style="display: block; padding: 5px 10px; background: #0088cc; color: white; text-decoration: none; border-radius: 4px 4px 0 0; margin-bottom: 5px;">Übersicht</a>
    </li>
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-einnahme" class="tab-link" style="display: block; padding: 5px 10px; background: #f5f5f5; color: #333; text-decoration: none; border-radius: 4px 4px 0 0; border: 1px solid #ddd; margin-bottom: 5px;">Einnahme</a>
    </li>
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-nebenwirkungen" class="tab-link" style="display: block; padding: 5px 10px; background: #f5f5f5; color: #333; text-decoration: none; border-radius: 4px 4px 0 0; border: 1px solid #ddd; margin-bottom: 5px;">Nebenwirkungen</a>
    </li>
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-warnhinweis" class="tab-link" style="display: block; padding: 5px 10px; background: #f5f5f5; color: #333; text-decoration: none; border-radius: 4px 4px 0 0; border: 1px solid #ddd; margin-bottom: 5px;">Warnhinweis</a>
    </li>
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-gegenanzeigen" class="tab-link" style="display: block; padding: 5px 10px; background: #f5f5f5; color: #333; text-decoration: none; border-radius: 4px 4px 0 0; border: 1px solid #ddd; margin-bottom: 5px;">Gegenanzeigen</a>
    </li>
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-wirkweise" class="tab-link" style="display: block; padding: 5px 10px; background: #f5f5f5; color: #333; text-decoration: none; border-radius: 4px 4px 0 0; border: 1px solid #ddd; margin-bottom: 5px;">Wirkweise</a>
    </li>
    <li style="display: inline-block; margin-right: 5px;">
        <a href="#tab-tipps" class="tab-link" style="display: block; padding: 5px 10px; background: #f5f5f5; color: #333; text-decoration: none; border-radius: 4px 4px 0 0; border: 1px solid #ddd; margin-bottom: 5px;">Tipps</a>
    </li>
</ul>

<!-- Tab Contents -->
<div class="product-tab-contents">
    <!-- Übersicht Tab -->
    <div id="tab-uebersicht" class="tab-content active" style="display: block; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h2 style="color: #075BAF; margin: -10px 0 -5px; font-size: 1.4em; font-weight: normal;">Übersicht</h2>
        <p>{!! $product_data->description ?? 'Keine Beschreibung verfügbar.' !!}</p>
        
        @if(isset($product_data->highlights) && !empty($product_data->highlights))
            <h4 style="color: #075BAF; margin-top: 20px;">Highlights:</h4>
            <p>{!! $product_data->highlights !!}</p>
        @endif
        
        @if(isset($product_data->description1) && !empty($product_data->description1))
            <h4 style="color: #075BAF; margin-top: 20px;">Vorteile</h4>
            <p>{!! $product_data->description1 !!}</p>
        @endif
        
        @if(isset($product_data->dosage) && !empty($product_data->dosage))
            <h4 style="color: #075BAF; margin-top: 20px;">Wie man das Medikament einnimmt</h4>
            <p>{!! $product_data->dosage !!}</p>
        @endif
        
        @if(isset($product_data->sideEffect) && !empty($product_data->sideEffect))
            <h4 style="color: #075BAF; margin-top: 20px;">Nebenwirkungen</h4>
            <p>{!! $product_data->sideEffect !!}</p>
        @endif
    </div>
    
    <!-- Einnahme Tab -->
    <div id="tab-einnahme" class="tab-content" style="display: none; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h3 style="color: #075BAF; margin-top: 0;">Einnahme</h3>
        @if(isset($product_data->usage_instructions) && !empty($product_data->usage_instructions))
            <p>{!! $product_data->usage_instructions !!}</p>
        @elseif(isset($product_data->description1) && !empty($product_data->description1))
            <p>{!! $product_data->description1 !!}</p>
        @elseif(isset($product_data->dosage) && !empty($product_data->dosage))
            <p>{!! $product_data->dosage !!}</p>
        @else
            <p>Detaillierte Informationen zur Einnahme des Produkts werden hier angezeigt.</p>
            <p><em>Bitte fügen Sie die Einnahmeanweisungen im Admin-Bereich hinzu.</em></p>
        @endif
    </div>
    
    <!-- Nebenwirkungen Tab -->
    <div id="tab-nebenwirkungen" class="tab-content" style="display: none; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h3 style="color: #075BAF; margin-top: 0;">Nebenwirkungen</h3>
        @if(isset($product_data->sideEffect) && !empty($product_data->sideEffect))
            <p>{!! $product_data->sideEffect !!}</p>
        @else
            <p>Informationen zu möglichen Nebenwirkungen des Produkts.</p>
            <p><em>Bitte fügen Sie die Nebenwirkungsinformationen im Admin-Bereich hinzu.</em></p>
        @endif
    </div>
    
    <!-- Warnhinweis Tab -->
    <div id="tab-warnhinweis" class="tab-content" style="display: none; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h3 style="color: #075BAF; margin-top: 0;">Warnhinweis</h3>
        @if(isset($product_data->warnings) && !empty($product_data->warnings))
            <p>{!! $product_data->warnings !!}</p>
        @else
            <p>Wichtige Sicherheitshinweise und Warnungen zur Anwendung des Produkts.</p>
            <p><em>Bitte fügen Sie die Warnhinweise im Admin-Bereich hinzu.</em></p>
        @endif
    </div>
    
    <!-- Gegenanzeigen Tab -->
    <div id="tab-gegenanzeigen" class="tab-content" style="display: none; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h3 style="color: #075BAF; margin-top: 0;">Gegenanzeigen</h3>
        @if(isset($product_data->Contraindications) && !empty($product_data->Contraindications))
            <p>{!! $product_data->Contraindications !!}</p>
        @else
            <p>Informationen zu Kontraindikationen und Situationen, in denen das Produkt nicht angewendet werden sollte.</p>
            <p><em>Bitte fügen Sie die Gegenanzeigen im Admin-Bereich hinzu.</em></p>
        @endif
    </div>
    
    <!-- Wirkweise Tab -->
    <div id="tab-wirkweise" class="tab-content" style="display: none; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h3 style="color: #075BAF; margin-top: 0;">Wirkweise</h3>
        @if(isset($product_data->mechanism_of_action) && !empty($product_data->mechanism_of_action))
            <p>{!! $product_data->mechanism_of_action !!}</p>
        @else
            <p>Beschreibung der pharmakologischen Wirkweise des Produkts.</p>
            <p><em>Bitte fügen Sie die Wirkweise im Admin-Bereich hinzu.</em></p>
        @endif
    </div>
    
    <!-- Tipps Tab -->
    <div id="tab-tipps" class="tab-content" style="display: none; padding: 20px; border: 1px solid #ddd; border-top: none; background: #fff;">
        <h3 style="color: #075BAF; margin-top: 0;">Tipps</h3>
        @if(isset($product_data->tips) && !empty($product_data->tips))
            <p>{!! $product_data->tips !!}</p>
        @elseif(isset($product_data->shipping) && !empty($product_data->shipping))
            <p>{!! $product_data->shipping !!}</p>
        @else
            <p>Nützliche Tipps zur optimalen Anwendung und Lagerung des Produkts.</p>
            <p><em>Bitte fügen Sie die Tipps im Admin-Bereich hinzu.</em></p>
        @endif
    </div>


<!-- Reviews Section starts here after tabs -->
<div class="review-box">

  <!-- Left -->
  <div class="review-left">
    <h3 >
      REVIEWS FOR {{$product_data->name}}<br>
    </h3>
  </div>

  <!-- Middle -->
  <div class="review-middle">
    <div class="percent">@if($product_data->avg_rating){{round($product_data->avg_rating * 20)}}%@else 0% @endif</div>
    <div class="stars big-stars">
      @for($i = 1; $i <= 5; $i++)
        @if($i <= ($product_data->avg_rating ?? 0))
          <span style="color: #EA9119; margin-right: -4px;">★</span>
        @else
          <span style="color: #ccc;">★</span>
        @endif
      @endfor
    </div>
  </div>


  
  <!-- Right -->
  <div class="review-right">
    <div class="rating-grid">
      <!-- Placeholder for reviews by rating - since there's no specific method, we'll show static numbers based on typical distribution -->
      @foreach([5,4,3,2,1] as $star)
      <div class="rating-item">
        @for($i = 1; $i <= 5; $i++)
          @if($i <= $star)
            <span style="color: #EA9119; margin-right: -4px;">★</span>
          @else
            <span style="color: #ccc; margin-right: -4px;">★</span>
          @endif
        @endfor
        <span>{{ $product_data->reviews_by_rating[$star] ?? 0 }}</span>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>

<!-- Display actual reviews - if reviews relationship exists -->
@if(isset($product_data->reviews) && is_iterable($product_data->reviews))
@foreach($product_data->reviews as $review)
<div class="review-item">
  <div class="review-item-header">
    <div class="review-user">
      <div class="ratingname">{{$review->name ?? 'Anonymous'}}</div>
      <div class="date">{{date('F j, Y', strtotime($review->created_at))}}</div>
    </div>

    <div class="review-rating">
      @for($i = 1; $i <= 5; $i++)
        @if($i <= ($review->rating ?? 0))
          <span style="color: #EA9119; margin-right: -4px;">★</span>
        @else
          <span style="color: #ccc; margin-right: -4px;">★</span>
        @endif
      @endfor
    </div>
  </div>

  <div class="review-content">
    {{$review->comment}}
  </div>
</div>
@endforeach
@endif

<!-- Fallback: Show a message if no reviews are available -->
@if(!isset($product_data->reviews) || (is_iterable($product_data->reviews) && count($product_data->reviews) == 0))
<p>No reviews yet. Be the first to review this product!</p>
@endif

                    

<!-- Success/Error Messages -->
<style>

.alert {
    padding: 10px 15px;
    margin-bottom: 15px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}
.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.star-rating {
    display: inline-block;
}

.star {
    font-size: 2em;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s;
    margin-right: 5px;
}

.star:hover,
.star.hover,
.star.selected {
    color: #FFD700;
}
</style>

<!-- Success messages are hidden -->

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="review-success-message"></div>
<div id="review-error-message"></div>

<!-- Product Review Form - Using Laravel route -->
<form method="post" action="{{ route('home.product-review-save') }}" id="productReviewForm" class="review-form">
  @csrf
  <input type="hidden" name="product_id" value="{{$product_data->id}}">

  <h1 style="font-size: 20px; color: #075baf; font-weight: 600;">Ihre Bewertung abgeben</h1>

  <div class="submitrow">
    <div class="field">
      <label>Vorname *</label>
      <input type="text" id="review_name" name="review_name" class="form-text" required>
    </div>

    <div class="field">
      <label>E-Mail ((es) wird nicht veröffentlicht) *</label>
      <input type="email" id="review_email" name="review_email" class="form-text" required>
    </div>
  </div>

  <div class="field">
    <label>Bewertung *</label>
    <input type="hidden" id="review_rating" name="review_rating" value="" required>

    <div class="star-rating" id="product_rating">
      <span class="star" data-value="1">★</span>
      <span class="star" data-value="2">★</span>
      <span class="star" data-value="3">★</span>
      <span class="star" data-value="4">★</span>
      <span class="star" data-value="5">★</span>
    </div>
  </div>

  <div class="field">
    <label>Kommentar *</label>
    <textarea id="review_comment" name="review_comment" rows="6" class="form-text" required></textarea>
  </div>

  <button type="submit" class="form-button">abschicken</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    
    // Product Information Tabs Functionality
    $('.tab-link').on('click', function(e) {
        e.preventDefault();
        
        var target = $(this).attr('href');
        
        // Remove active class from all tabs and contents
        $('.tab-link').removeClass('active').css({
            'background': '#f5f5f5',
            'color': '#333',
            'border': '1px solid #ddd'
        });
        $('.tab-content').removeClass('active').hide();
        
        // Add active class to clicked tab
        $(this).addClass('active').css({
            'background': '#0088cc',
            'color': 'white',
            'border': '1px solid #0088cc'
        });
        
        // Show the target content
        $(target).addClass('active').show();
    });
    
    // Star rating functionality
    $(document).on('click', '.star', function() {
        var value = parseInt($(this).data('value'));
        var $container = $(this).closest('.star-rating');
        
        // Remove selected class from all stars
        $container.find('.star').removeClass('selected');
        
        // Add selected class to clicked star and all previous stars
        $(this).addClass('selected');
        $(this).prevAll('.star').addClass('selected');
        
        // Update the hidden input with the selected value
        var $form = $(this).closest('form');
        $form.find('#review_rating').val(value);
        
        console.log('Selected rating: ' + value);
        console.log('Hidden field value after update: ' + $form.find('#review_rating').val());
    });
    
    // Hover effect for stars
    $(document).on('mouseenter', '.star', function() {
        var value = parseInt($(this).data('value'));
        var $container = $(this).closest('.star-rating');
        
        // Remove hover class from all stars
        $container.find('.star').removeClass('hover');
        
        // Add hover class to current star and all previous stars
        $(this).addClass('hover');
        $(this).prevAll('.star').addClass('hover');
    }).on('mouseleave', '.star-rating', function() {
        // Mouse leave - remove hover class when leaving the entire rating container
        $(this).find('.star').removeClass('hover');
    });
    // $('.filter-form-checkbox').on('change',function(){
    //     $("#product-filter-form").submit();
    // });

    $('.add-to-product-cart').on('click', function() {
        product = $(this).data('product');
        var button = $(this);
        
        // Show loading state
        button.prop('disabled', true);
        button.text('Adding...');
        
        $.ajax({
            url: "{{ route('product.add-to-cart') }}",
            type: "POST",
            data: {
                product: product,
                quantity: 1,
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                try {
                    var response_data = typeof data === 'string' ? JSON.parse(data) : data;
                    
                    // Update desktop cart count
                    var desktopCartText = response_data.cart_total_quantity + ' ' + 
                                         (response_data.cart_total_quantity == 1 ? 'product' : 'products') + 
                                         ' - €' + response_data.cart_total_price;
                    $('#desktop-cart-count').html(desktopCartText);
                    
                    // Update mobile cart count
                    var mobileCartText = response_data.cart_total_quantity + ' Artikel - €' + response_data.cart_total_price;
                    $('#cart-total').html(mobileCartText);
                    
                    // Update dropdown cart if it exists
                    if($('.carts-latest').length > 0) {
                        // Refresh the cart dropdown content - this would typically involve another AJAX call
                        // For now, we'll just show a success message
                    }
                    
                    // Show success message
                    alert('Product added to cart successfully!');
                    
                    // Re-enable button
                    button.prop('disabled', false);
                    button.html('Add to Cart');
                } catch(e) {
                    console.error('Error parsing response:', e);
                    alert('Product added but could not update cart display.');
                    
                    // Re-enable button
                    button.prop('disabled', false);
                    button.html('Add to Cart');
                }
            },
            error: function(data) {
                alert('Something went wrong please try again');
                
                // Re-enable button
                button.prop('disabled', false);
                button.html('Add to Cart');
            }
        });
    });
    

    
    // Handle form submission
    $('#productReviewForm').on('submit', function(e) {
        // Find the rating within this specific form
        var ratingValue = $(this).find('#review_rating').val();
        
        if(!ratingValue || parseInt(ratingValue) < 1 || parseInt(ratingValue) > 5) {
            // Show error message in the error div
            $('#review-error-message').html('<div class="alert alert-danger">Please select a rating between 1 and 5</div>').show();
            return false; // Prevent form submission
        }
        

    });
    
    // Initialize star rating display if there's a value in the hidden field
    var initialRating = $('#review_rating').val();
    if(initialRating) {
        var $container = $('.star-rating');
        $container.find('.star').removeClass('selected');
        
        // Select stars up to the initial rating value
        for(var i = 1; i <= parseInt(initialRating); i++) {
            $container.find('.star[data-value="' + i + '"]').addClass('selected');
        }
    }
});
</script>
@endsection
