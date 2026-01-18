@extends('layouts.client_plain')

@section('content')
<div class="emptybackround"></div>
<div class="cart-container">

  <h1>Shopping summary</h1>

  <table class="shop-confirm-info" width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      In this step, you enter the data required for the delivery of goods and check
      the ordered items. If you are already registered in our shop,
      <a href="https://www.kamagraoriginal.to/de/ihr-konto">
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
        <td class="item_price">{{$cart_data['cart_total_price']}} €</td>
      </tr>
    </tbody>
  </table>
  <table  class="lastshop-confirm">
    <tbody>
      <tr>
        <td width="30%" align="left">
          <span class="basket-button1">
            <input type="button" value="Back to your shopping cart" id="button-payment-address" class="btn btn-gray continue-form" />
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