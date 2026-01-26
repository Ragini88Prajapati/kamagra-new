<!-- @extends('layouts.client_plain') -->
@extends('layouts.client2')
@section('content')

<div class="container" style="margin-top: 20px;">
    <div class="row">
        
        <!-- Left Sidebar -->
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3">
            
            <!-- Login Block -->
            <div class="login-block" style="background: #eaf8ff; border: 1px solid #bce8f1; padding: 15px; margin-bottom: 20px;">
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
            <div class="emptybackround"></div>
            <div class="cart-container">

                <h1>Shopping summary</h1>

                <table class="shop-confirm-info" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                      In this step, you enter the data required for the delivery of goods and check
                      the ordered items. If you are already registered in our shop,
                      <a href="login">
                        log in to your account.
                      </a>
                    </td>
                </tr>
                </table>

                @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                {{ \Session::forget('error') }}
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">{{ \Session::get('success') }}</div>
                {{ \Session::forget('success') }}
                @endif

                <form class="shopping-summary-form" id="address_form" action="{{route('processTransaction')}}" method="post">
                    @csrf
                    <input type="hidden" name="payment_method" value="bank" />
                    <input type="hidden" name="shipping_rate" value="10" />
                    <input type="hidden" name="billing_firstname" value="{{ old('billing_firstname', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->first_name ?? '' : Auth::user()->users_detail->first_name ?? '')) : old('billing_firstname', '')) }}" />
                    <input type="hidden" name="billing_lastname" value="{{ old('billing_lastname', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->last_name ?? '' : Auth::user()->users_detail->last_name ?? '')) : old('billing_lastname', '')) }}" />
                    <input type="hidden" name="billing_company" value="{{ old('billing_company', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->company ?? '' : Auth::user()->users_detail->company ?? '')) : old('billing_company', '')) }}" />
                    <input type="hidden" name="billing_address" value="{{ old('billing_address', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->address ?? '' : Auth::user()->users_detail->address ?? '')) : old('billing_address', '')) }}" />
                    <input type="hidden" name="billing_address2" value="{{ old('billing_address2', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->address2 ?? '' : Auth::user()->users_detail->address2 ?? '')) : old('billing_address2', '')) }}" />
                    <input type="hidden" name="billing_city" value="{{ old('billing_city', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->city ?? '' : Auth::user()->users_detail->city ?? '')) : old('billing_city', '')) }}" />
                    <input type="hidden" name="billing_zip_code" value="{{ old('billing_zip_code', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->pincode ?? '' : Auth::user()->users_detail->pincode ?? '')) : old('billing_zip_code', '')) }}" />
                    <input type="hidden" name="billing_country" value="{{ old('billing_country', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->country_id ?? '' : Auth::user()->users_detail->country_id ?? '')) : old('billing_country', '')) }}" />
                    <input type="hidden" name="billing_state" value="{{ old('billing_state', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->state_id ?? '' : Auth::user()->users_detail->state_id ?? '')) : old('billing_state', '')) }}" />
                    <input type="hidden" name="shipping_comment" value="{{ old('shipping_comment', '') }}" />
                    <input type="hidden" name="payment_comment" value="{{ old('payment_comment', '') }}" />
                    <input type="hidden" name="agree_terms" value="1" />
                    @if(Auth::check())
                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" />
                    @else
                    <input type="hidden" name="users_id" value="0" />
                    @endif
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="shop-confirm-client">
                    <tbody>
                      <tr>
                        <td colspan="3" valign="top">

                          <b>DELIVERY ADDRESS FOR GOODS DELIVERY</b>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">First name: *</div>
                            <input type="text" name="shipping_firstname" id="delivery_name"
                                   placeholder="First name" class="form-input-text"
                                   style="width:280px;" value="{{ old('shipping_firstname', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->first_name ?? '' : Auth::user()->users_detail->first_name ?? '')) : old('shipping_firstname', '')) }}">
                            @if($errors->has('shipping_firstname'))
                                <div class="error" style="color:red; clear:both; display:block; ">{{ $errors->first('shipping_firstname') }}</div>
                            @endif
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">Last name: *</div>
                            <input type="text" name="shipping_lastname" id="delivery_surname"
                                   placeholder="Last name" class="form-input-text"
                                   style="width:280px;" value="{{ old('shipping_lastname', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->last_name ?? '' : Auth::user()->users_detail->last_name ?? '')) : old('shipping_lastname', '')) }}">
                            @if($errors->has('shipping_lastname'))
                                <div class="error" style="color:red; clear:both; display:block;">{{ $errors->first('shipping_lastname') }}</div>
                            @endif
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <input type="hidden" name="delivery_street" id="delivery_street">

                            <div style="float:left; width:150px;">Street: *</div>
                            <input type="text" name="shipping_address" id="delivery_street_name"
                                   placeholder="Street" class="form-input-text"
                                   style="width:140px; float: left; font: normal 11px Arial;" value="{{ old('shipping_address', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->address ?? '' : Auth::user()->users_detail->address ?? '')) : old('shipping_address', '')) }}">

                            <div style="float:left; width:100px; text-align:center;">House number: *</div>
                            <input type="text" name="delivery_street_nr" id="delivery_street_nr"
                                   placeholder="House number" class="form-input-text"
                                   style="width:40px; font: normal 11px Arial;" value="{{ old('delivery_street_nr') }}">
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">City: *</div>
                            <input type="text" name="shipping_city" id="delivery_city"
                                   placeholder="City" class="form-input-text"
                                   style="width:280px;" value="{{ old('shipping_city', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->city ?? '' : Auth::user()->users_detail->city ?? '')) : old('shipping_city', '')) }}">
                            @if($errors->has('shipping_city'))
                                <div class="error" style="color:red; clear:both; display:block;">{{ $errors->first('shipping_city') }}</div>
                            @endif
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">Postal code: *</div>
                            <input type="text" name="shipping_pincode" id="delivery_zip"
                                   placeholder="Postal code" class="form-input-text"
                                   style="width:280px;" value="{{ old('shipping_pincode', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->pincode ?? '' : Auth::user()->users_detail->pincode ?? '')) : old('shipping_pincode', '')) }}">
                            @if($errors->has('shipping_pincode'))
                                <div class="error" style="color:red; clear:both; display:block;">{{ $errors->first('shipping_pincode') }}</div>
                            @endif
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">Country: *</div>
                            <select name="shipping_country" id="delivery_state"
                                    class="form-select" style="width:280px;">
                              <option value="">Select country</option>
                              @forelse ($country as $item)
                                <option value="{{$item->id}}" {{ (old('shipping_country') == $item->id || (Auth::user() && (Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->country_id ?? null : Auth::user()->users_detail->country_id ?? null) == $item->id)) ? 'selected' : '' }}>{{$item->name}}</option>
                              @empty
                              @endforelse
                            </select>
                            @if($errors->has('shipping_country'))
                                <div class="error" style="color:red; clear:both; display:block;">{{ $errors->first('shipping_country') }}</div>
                            @endif
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">Phone: *</div>
                            <input type="text" name="shipping_mobile_number" id="delivery_phone"
                                   placeholder="Phone" class="form-input-text"
                                   style="width:280px;" value="{{ old('shipping_mobile_number', Auth::user() ? ((Auth::user()->users_detail instanceof Illuminate\Database\Eloquent\Collection ? Auth::user()->users_detail->first()->mobile ?? '' : Auth::user()->users_detail->mobile ?? '')) : old('shipping_mobile_number', '')) }}"
                                   oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                            @if($errors->has('shipping_mobile_number'))
                                <div class="error" style="color:red; clear:both; display:block;">{{ $errors->first('shipping_mobile_number') }}</div>
                            @endif
                          </div>

                          <div style="margin-top:10px; clear:both;">
                            <div style="float:left; width:150px;">Email: *</div>
                            <input type="email" name="shipping_email_id" id="delivery_email"
                                   placeholder="E-mail" class="form-input-text"
                                   style="width:280px;" value="{{ old('shipping_email_id', Auth::user() ? Auth::user()->email : old('shipping_email_id', '')) }}">
                            @if($errors->has('shipping_email_id'))
                                <div class="error" style="color:red; clear:both; display:block;">{{ $errors->first('shipping_email_id') }}</div>
                            @endif
                          </div>

                          <br>
                          <small>* Required field</small>

                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <input type="hidden">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" class="shop-confirm-items">
                    <tbody>
                      <tr>
                        <th width="57%" align="left">Product name</th>
                        <th width="13%" align="center">CROWD</th>
                        <th width="15%" align="right">PRICE</th>
                        <th width="15%" align="right">IN TOTAL</th>
                      </tr>

                      @foreach($cart_data['cart_product_list'] as $item)
                      @php
                      $product = App\Models\Client\Product::where('id',$item['product_id'])->first();
                      @endphp
                      <tr class="{{ $loop->index % 2 == 0 ? 'odd' : 'even' }}">
                        <td>
                          <b>
                            <a style="text-decoration:none;" href="{{route('client.product.product-preview',$product->slug)}}" target="_blank">
                              {{$product->name}}
                            </a>
                          </b>
                        </td>
                        <td align="center">{{$item['quantity']}} pack</td>
                        <td align="right">€ {{$item['price']}}</td>
                        <td align="right">€ {{$item['total_price']}}</td>
                      </tr>
                      @endforeach
                      
                      <!-- Additional row for gifts if any -->
                      @if(false) <!-- Placeholder for gift items if needed -->
                      <tr class="even">
                        <td style="font-size:13px;">
                          <b>GIFT: 3 PACKS CENFORCE 100 WORTH € 50 FOR FREE</b>
                        </td>
                        <td align="center">1 pack</td>
                        <td align="right">€ 0</td>
                        <td align="right">€ 0</td>
                      </tr>
                      @endif
                    </tbody>
                  </table>

                  <table class="shop-confirm-payment-delivery">
                    <tbody>
                      <tr class="payment">
                        <td class="label">
                          <span>Payment method:</span> SEPA money transfer
                        </td>
                        <td class="value"></td>
                      </tr>

                      <tr class="delivery">
                        <td class="label">
                          <span>Delivery method:</span> Fast and discreet delivery
                        </td>
                        <td class="value">10 €</td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="shop-confirm-summary">
                    <tbody>
                      <tr>
                        <td class="item_name">In total:</td>
                        <td class="item_price" id="total-price">{{ $cart_data['cart_total_price'] + 10 }} €</td>
                      </tr>
                    </tbody>
                  </table>
                  <table  class="lastshop-confirm">
                    <tbody>
                      <tr>
                        <td width="30%" align="left">
                          <span class="basket-button1">
                            <a href="{{ route('home.index') }}" class="btn btn-gray continue-form" style="text-decoration: none; display: inline-block; padding: 6px 12px;">Back to your shopping cart</a>
                          </span>
                        </td>
                        <td width="70%" align="right">
                          <span class="basket-button2">
                            <input type="submit" value="Confirm payment" id="button-confirm" class="btn btn-primary" />
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Basic form validation for required fields
    $("#address_form").validate({
        rules: {
            shipping_firstname: {
                required: true,
            },
            shipping_lastname: {
                required: true,
            },
            shipping_address: {
                required: true,
            },
            shipping_city: {
                required: true,
            },
            shipping_pincode: {
                required: true,
            },
            shipping_country: {
                required: true,
            },
            shipping_mobile_number: {
                required: true,
            },
            shipping_email_id: {
                required: true,
                email: true
            },
            delivery_street_nr: {
                required: true,
            }
        },
        messages: {
            shipping_firstname: {
                required: "First name is required",
            },
            shipping_lastname: {
                required: "Last name is required",
            },
            shipping_address: {
                required: "Address is required",
            },
            shipping_city: {
                required: "City is required",
            },
            shipping_pincode: {
                required: "Postal code is required",
            },
            shipping_country: {
                required: "Country is required",
            },
            shipping_mobile_number: {
                required: "Phone number is required",
            },
            shipping_email_id: {
                required: "Email is required",
                email: "Please enter a valid email address"
            },
            delivery_street_nr: {
                required: "House number is required"
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("error");
            error.css("color","red");
            error.insertAfter(element.closest('div'));
        },
        success: function(label, element) {
            label.remove();
        },
        highlight: function(element) {
            $(element).css("border-color","red");
        },
        unhighlight: function(element) {
            $(element).css("border-color","#ccc");
        }
    });
    

    
    // Calculate total with shipping
    $(document).ready(function() {
        var cartTotal = parseFloat('{{ $cart_data["cart_total_price"] }}');
        var shippingRate = parseFloat($('input[name="shipping_rate"]').val()) || 10;
        var total = cartTotal + shippingRate;
        $('#total-price').text(total.toFixed(2) + ' €');
    });
    
    // Form submission handler to ensure validation happens
    $("#address_form").on('submit', function(e) {
        if (!$(this).valid()) {
            e.preventDefault();
            return false;
        }
    });
});
</script>
@endsection