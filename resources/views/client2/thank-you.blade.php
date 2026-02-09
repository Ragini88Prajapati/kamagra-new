@extends('layouts.client2')

@section('content')

<!-- <section class="thank-you-section">
    <div class="container">
        <div class="row d-flex align-items-center thankyou-row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 text-center">
                <div id="contents" class="thankyou-title">
                    <h1> Danke schön.</h1>
                    <h3 class="drug_contect_padding">Ihre Bestellung wurde erfolgreich abgeschlossen.</h3>
                    <div class="thank-content-p">
                        <p>Order Placed,
                            Your Order Id is <strong>{{isset($order_id)? $order_id:''}}</strong> .
                        </p>
                        <p>  Your User Id is <strong>{{isset($user_id)? $user_id:''}}</strong> .</p>
                        <p>  Your User Name is <strong>{{isset($shipping_firstname)? $shipping_firstname:''}}</strong> .</p>
                        <p>
                            Eine E-Mail-Bestätigung mit den Details zu Ihrer Bestellung wurde an die angegebene
                            E-Mail-Adresse gesendet.
                            <br>
                            Bitte bewahren Sie es für Ihre Unterlagen auf.

                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section> -->

<div class="emptybackround"></div>
<div class="cart-container">
<h1>Order successfully completed</h1>

  <p class="success-text">
    Your order has been successfully completed. Thank you for your trust, and we hope
    you will be satisfied with our products. Order confirmation will also be sent to
    your email address.
  </p>

  <table class="summary-table">
    <tr class="summary-table-odd">
      <td>Total amount payable:</td>
      <td class="green">170 €</td>
    </tr>
    <tr>
      <td>Order number (payment details):</td>
      <td class="green">781793</td>
    </tr>
  </table>

  <div class="payment-note">
    You can pay for your order by SEPA bank transfer.
    <strong>When making the transfer, please be sure to include your order number in the payment reference.</strong>
  </div>

  <h1>Payment</h1>

  <table class="payment-table">
    <tr class="paymenttotal-amount">
      <td>The total amount is €170.</td>
    </tr>

    <tr>
      <td><strong>Account name:</strong> LABORE s.r.o</td>
    </tr>

    <tr class="warning">
      <td>Do not add anything else to the account name, no website, no products.</td>
    </tr>

    <tr>
      <td><strong>IBAN:</strong> SK90 8330 0000 0020 0293 1879</td>
    </tr>

    <tr>
      <td><strong>SWIFT/BIC:</strong> FIOZSKBAXXX</td>
    </tr>

    <tr>
      <td><strong>Intended use:</strong> 781793</td>
    </tr>

    <tr class="warning">
      <td>
        Do not add anything else to the payment reference.
        Only <strong>781793</strong> will be accepted!
      </td>
    </tr>

    <tr>
      <td>
        <img
          src="https://www.korig.to/app/qr/image.png?iban=SK9083300000002002931879&eur=170+€&bname=LABORE s.r.o.&bic=FIOZSKBAXXX&logo=none&info=Order+781793"
          alt="SEPA QR Code"
          class="qr"
        >
      </td>
    </tr>
  </table>

</div>

@endsection

@section('scripts')

@endsection