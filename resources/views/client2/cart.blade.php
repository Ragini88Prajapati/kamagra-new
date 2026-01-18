@php
use App\Models\Client\Product;

@endphp
@extends('layouts.client2')

@section('content')
<>
<div class="emptybackround"></div>
<div class="cart-container">
    <h1>Einkaufswagen</h1>

    <form method="post" enctype="multipart/form-data">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="shop-basket-items">
            <thead>
                <tr>
                    <th width="52%" align="left">Produktname</th>
                    <th width="13%" align="center">CROWD</th>
                    <th width="15%" align="right">PREIS</th>
                    <th width="15%" align="right">INSGESAMT</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @if (isset($cart_product_list) && !empty($cart_product_list))
                @foreach ($cart_product_list as $item)
                @php
                $prod_data=Product::where('id',$item['product_id'])->first();
                @endphp
                <tr>
                    <td class="product-name">
                        <a href="#">
                            {{$prod_data->name}}
                        </a>
                    </td>

                    <td align="center">
                        <input type="text" name="quantity[]" data-product="{{$item['id']}}" value="{{$item['quantity']}}" size="2" class="form-input-text" style="text-align: center; width: 24px;">
                        <span class="unit">St.</span>
                    </td>

                    <td>€{{$item['price']}}</td>

                    <td>€{{$item['total_price']}}</td>

                    <td class="remove" data-product="{{$item['id']}}" style="cursor: pointer; font-weight: bold; color: #000; text-align: center;">X</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">Cart is Empty!</td>
                </tr>
                @endif

                <tr>
                    <td colspan="5">
                        <select name="gift" id="gift" onchange="fnSubmitForm('basketform');">
                            <option value="0" class="gift-placeholder">
                                Bitte wählen Sie Ihr Geschenk aus
                            </option>

                            <option value="219">
                                GIFT: 3 PACKS OF KAMAGRA ORAL JELLY 100 WORTH €72 FREE
                            </option>

                            <option value="303">
                                GIFT: 3 PACKS OF CENFORCE 100 WORTH €50 FREE
                            </option>

                            <option value="305">
                                GIFT: 3 PACKS OF VIDALISTA 20 WORTH €50 FREE
                            </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="5">
                        <input
                            type="text"
                            name="item_discount"
                            id="item_discount"
                            class="form-input-text"
                            placeholder="Gutscheincode eingeben"
                        />

                        <button
                            type="button"
                            class="basket-button"
                            onclick="fnCoupon(true);"
                        >
                            Gutschein verwenden
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>

        <div class="payment">
            <div class="payment-label">
                Zahlungsmethode:
            </div>

            <div class="payment-options">
                <label class="payment-option">
                    <input
                        type="radio"
                        name="payment"
                        value="bank_transfer"
                        checked
                        onclick="fnSubmitForm('basketform');"
                    />
                    Überweisung
                    <img src="https://www.kamagraoriginal.to/images/logo-bank_transfer.png" alt="Banküberweisung" />
                </label>

                <label class="payment-option">
                    <input
                        type="radio"
                        name="payment"
                        value="crypto"
                        onclick="fnSubmitForm('basketform');"
                    />
                    Bitcoin <span class="discount">(10% Rabatt)</span>
                    <img src="https://www.kamagraoriginal.to/images/logo-crypto.png" alt="Bitcoin" />
                </label>
            </div>
        </div>

        <div class="delivery">
            <div class="delivery-label">
                Versandart:
            </div>

            <div class="delivery-select">
                <select
                    id="delivery"
                    name="delivery"
                    class="form-select"
                    onchange="fnSubmitForm('basketform');"
                >
                    <option value="5" selected>
                        Schneller und diskreter Versand (+€0)
                    </option>
                </select>
            </div>
        </div>


        <div class="total-summary">
            <span class="total-label">Gesamtsumme:</span>
            <span class="total-amount">€{{$cart_total_price}}</span>
        </div>

        <div class="cart-actions">
            <div class="terms-row">
                <input
                    type="checkbox"
                    id="agreement"
                    name="agreement"
                    class="form-checkbox1"
                />

                <label for="agreement">
                    <strong>
                        Ich habe die
                        <a
                            href="https://www.kamagraoriginal.to/de/geschaftsbedingungen"
                            target="_blank"
                            class="form-link"
                        >
                            Geschäftsbedingungen
                        </a>
                        gelesen und stimme ihnen zu.
                    </strong>
                </label>
            </div>

            <div class="buttons-row">
                <button
                    type="button"
                    class="basket-button"
                    onclick="fnRecalculate('basketform');"
                >
                    Aktualisieren
                </button>

                <button
                    type="button"
                    class="basket-button primary"
                    onclick="fnConfirmOrder();"
                >
                    Zur Kasse gehen
                </button>
            </div>
        </div>


    </div>

    </div>
</div>

@endsection

@section('scripts')
<script>
function changeQty(position, increase) {
    var qty = parseInt($('#select-number' + position + '').val());
    if (!isNaN(qty)) {
        qty = increase ? qty + 1 : (qty - 1 > 1 ? qty - 1 : 1);
        $('#select-number' + position + '').val(qty);
        product = $('#select-number' + position + '').data('product');
        // console.log(qty+" "+product);
        $.ajax({
            url: "{{ route('product.update-cart') }}",
            type: "POST",
            data: {
                product: product,
                quantity: qty,
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                window.location.reload();
            },
            error: function(data) {
                window.location.reload();
            }
        });
    } else {
        $('#select-number' + position + '').val(1);
        product = $('#select-number' + position + '').data('product');
        $.ajax({
            url: "{{ route('product.update-cart') }}",
            type: "POST",
            data: {
                product: product,
                quantity: 1,
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                window.location.reload();
            },
            error: function(data) {
                window.location.reload();
            }
        });
    }
    position = '';
}

// Add missing functions required by cartpage UI
function fnSubmitForm(formName) {
    // Placeholder function for form submission
    console.log("Form submitted: " + formName);
}

function fnCoupon(showMessage) {
    // Placeholder function for coupon handling
    console.log("Coupon function called");
}

function fnRecalculate(formName) {
    // Placeholder function for recalculation
    console.log("Recalculating: " + formName);
}

function fnConfirmOrder() {
    // Redirect to checkout page when confirm order is clicked
    window.location.href = "{{ route('home.checkout_form') }}";
}

$(document).on("change", "#input_country", function() {
    var country_id = $(this).val();
    $.ajax({
        url: '{{route("user.getState")}}',
        method: 'post',
        data: {
            "_token": "{{csrf_token()}}",
            country_id: country_id
        },
        success: function(res) {
            $("#input_zone").html(res);
        }
    });
});

$(document).ready(function() {
    // Handle quantity changes
    $('.form-input-text[name="quantity[]"]').on('change', function() {
        var position = $(this).data('product');
        var newQty = $(this).val();
        
        $.ajax({
            url: "{{ route('product.update-cart') }}",
            type: "POST",
            data: {
                product: position,
                quantity: newQty,
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                window.location.reload();
            },
            error: function(data) {
                window.location.reload();
            }
        });
    });
    
    // Handle product removal - click on remove cell (X)
    $('.remove[data-product]').click(function() {
        var productId = $(this).data('product');
        
        $.ajax({
            url: "{{ route('product.delete-from-cart') }}",
            type: "POST",
            data: {
                product: productId,
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                window.location.reload();
            },
            error: function(data) {
                window.location.reload();
            }
        });
    });
});
</script>
@endsection
