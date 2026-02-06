@extends('layouts.client_plain')

@section('content')

<div class="emptybackround"></div>
<div class="cart-container">
    <h1>Shopping cart</h1>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="shop-basket-items">
      <thead>
        <tr>
          <th width="52%" align="left">Product name</th>
          <th width="13%" align="center">CROWD</th>
          <th width="15%" align="right">PRICE</th>
          <th width="15%" align="right">IN TOTAL</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="product-name">
            <a href="#">
              10 x packs of Kamagra oral jelly 100mg (70 jellies)
            </a>
          </td>

          <td align="center">
            <input type="text" name="item[164]" value="2" size="2" class="forminputtext" style="text-align: center; width: 24px;" fdprocessedid="yq7gz6">
            <span class="unit">St.</span>
          </td>

          <td align="right">160 €</td>

          <td align="right">€320</td>

          <td class="remove">X</td>
        </tr>

        <tr>
         <td colspan="5">
  <select name="gift" id="gift" onchange="fnSubmitForm('basketform');">
    <option value="0" class="gift-placeholder">
      Please select your gift
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

        <td colspan="5">
  <input
    type="text"
    name="item_discount"
    id="item_discount"
   class="forminputtext"
   
  />

  <button
    type="button"
    class="basket-button"
    onclick="fnCoupon(true);"
  >
    Use voucher
  </button>
</td>

      </tbody>
    </table>
    <br>

   <div class="payment">
  <div class="payment-label">
    Payment method:
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
      Transfer
      <img src="https://www.kamagraoriginal.to/images/logo-bank_transfer.png" alt="Bank transfer" />
    </label>

    <label class="payment-option">
      <input
        type="radio"
        name="payment"
        value="crypto"
        onclick="fnSubmitForm('basketform');"
      />
      Bitcoin <span class="discount">(10% discount)</span>
      <img src="https://www.kamagraoriginal.to/images/logo-crypto.png" alt="Bitcoin" />
    </label>
  </div>
</div>

<div class="delivery">
  <div class="delivery-label">
    Delivery method:
  </div>

  <div class="delivery-select">
    <select
      id="delivery"
      name="delivery"
      class="form-select"
      onchange="fnSubmitForm('basketform');"
    >
      <option value="5" selected>
        Fast and discreet delivery (+€0)
      </option>
    </select>
  </div>
</div>


    <div class="total-summary">
  <span class="total-label">In total:</span>
  <span class="total-amount">€320</span>
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
        I have read and agree to the
        <a
          href="https://www.kamagraoriginal.to/de/geschaftsbedingungen"
          target="_blank"
          class="form-link"
        >
          terms and conditions
        </a>.
      </strong>
    </label>
  </div>

  <div class="buttons-row">
    <button
      type="button"
      class="basket-button"
      onclick="fnRecalculate('basketform');"
    >
      Update
    </button>

    <button
      type="button"
      class="basket-button primary"
      onclick="fnConfirmOrder();"
    >
      Proceed to checkout
    </button>
  </div>
</div>


  </div>
