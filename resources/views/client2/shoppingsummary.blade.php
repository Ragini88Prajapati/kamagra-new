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


<form class="shopping-summary-form">

 <table width="100%" cellpadding="0" cellspacing="0" border="0" class="shop-confirm-client">
  <tbody>
    <tr>
      <td colspan="3" valign="top">

        <b>DELIVERY ADDRESS FOR GOODS DELIVERY</b>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">First name: *</div>
          <input type="text" name="" id=""
                 placeholder="" class="form-input-text"
                 style="width:280px;">
        </div>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">Last name: *</div>
          <input type="text" name="" id=""
                 placeholder="Last name" class="form-input-text"
                 style="width:280px;">
        </div>

        <div style="margin-top:10px; clear:both;">
          <input type="hidden" name="" id="">

          <div style="float:left; width:150px;">Street: *</div>
          <input type="text" name="name" id="name"
                 placeholder="Street" class="form-input-text"
                 style="width:140px; float: left; font: normal 11px Arial;"
                >

          <div style="float:left; width:100px; text-align:center;">House number: *</div>
          <input type="text" name="" id=""
                 placeholder="House number" class="form-input-text"
                 style="width:40px; font: normal 11px Arial;">
        </div>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">City: *</div>
          <input type="text" name="" id=""
                 placeholder="City" class="form-input-text"
                 style="width:280px;">
        </div>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">Postal code: *</div>
          <input type="text" name="" id=""
                 placeholder="Postal code" class="form-input-text"
                 style="width:280px;">
        </div>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">Country: *</div>
          <select name="" id=""
                  class="form-select" style="width:280px;">
            <option value="">Select country</option>
            <option>Austria</option>
            <option>Belgium</option>
            <option>Bulgaria</option>
            <option>Croatia</option>
            <option>Denmark</option>
            <option>Estonia</option>
            <option>Finland</option>
            <option>France</option>
            <option selected>Germany</option>
            <option>Italy</option>
            <option>Spain</option>
            <option>Sweden</option>
          </select>
        </div>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">Phone: *</div>
          <input type="text" name="" id=""
                 placeholder="Phone" class="form-input-text"
                 style="width:280px;"
                 oninput="this.value=this.value.replace(/[^0-9]/g,'')">
        </div>

        <div style="margin-top:10px; clear:both;">
          <div style="float:left; width:150px;">Email: *</div>
          <input type="email" name="" id=""
                 placeholder="E-mail" class="form-input-text"
                 style="width:280px;">
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

    <tr class="odd">
      <td>
        <b>
          <a style="text-decoration:none;" href="https://www.kamagraoriginal.to/de/produktdetails?itm=164">
            10 x packs of Kamagra oral jelly 100mg (70 jellies)
          </a>
        </b>
      </td>
      <td align="center">1 pc.</td>
      <td align="right">€160</td>
      <td align="right">€160</td>
    </tr>

    <tr class="even">
      <td style="font-size:13px;">
        <b>GIFT: 3 PACKS OF KAMAGRA ORAL JELLY 100 WORTH €72 FREE</b>
      </td>
      <td align="center">1 pc.</td>
      <td align="right">€0</td>
      <td align="right">€0</td>
    </tr>
  </tbody>
</table>

<table class="shop-confirm-payment-delivery">
  <tbody>
    <tr class="payment">
      <td class="label">
        <span>Payment method:</span> Bank transfer
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
      <td class="item_price">170 €</td>
    </tr>
  </tbody>
</table>
<table  class="lastshop-confirm">
  <tbody>
    <tr>
      <td width="30%" align="left">
        <span class="basket-button1">

            Back to your shopping cart</td>
        </span>
      <td width="70%" align="right">
        <span class="basket-button2">

            Confirm payment
        </span>
        </td>
    </tr>
  </tbody>
</table>
</form>



</div>

@endsection
