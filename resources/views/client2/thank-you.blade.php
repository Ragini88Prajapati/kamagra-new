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
                            Your Order Id is <strong>{{ $order_id ?? '' }}</strong> .
                        </p>
                        <p>  Your User Id is <strong>{{ $user_id ?? '' }}</strong> .</p>
                        <p>  Your User Name is <strong>{{ $shipping_firstname ?? '' }}</strong> .</p>
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
      <td class="green">€{{ number_format(($order_data->total_amount_paid ?? 0), 2) }}</td>
    </tr>
    <tr>
      <td>Order number (payment details):</td>
      <td class="green">{{ $order_id ?? 'N/A' }}</td>
    </tr>
    <tr>
      <td>Customer name:</td>
      <td class="green">{{ $shipping_firstname ?? 'N/A' }}</td>
    </tr>
    <tr>
      <td>Customer ID:</td>
      <td class="green">{{ $user_id ?? 'N/A' }}</td>
    </tr>
  </table>

  <div class="payment-note">
    You can pay for your order by SEPA bank transfer.
    <strong>When making the transfer, please be sure to include your order number in the payment reference.</strong>
  </div>

  <h1>Payment</h1>

  <table class="payment-table">
    <tr class="paymenttotal-amount">
      <td>The total amount is €{{ number_format(($order_data->total_amount_paid ?? 0), 2) }}.</td>
    </tr>

    <tr>
      <td><strong>Account name:</strong> {{ $bank_details['account_name'] ?? 'LABORE s.r.o' }}</td>
    </tr>

    <tr class="warning">
      <td>Do not add anything else to the account name, no website, no products.</td>
    </tr>

    <tr>
      <td><strong>IBAN:</strong> {{ $bank_details['iban'] ?? 'SK90 8330 0000 0020 0293 1879' }}</td>
    </tr>

    <tr>
      <td><strong>SWIFT/BIC:</strong> {{ $bank_details['swift_bic'] ?? 'FIOZSKBAXXX' }}</td>
    </tr>

    <tr>
      <td><strong>Intended use:</strong> {{ $order_id ?? ($bank_details['reference_code'] ?? 'N/A') }}</td>
    </tr>

    <tr class="warning">
      <td>
        Do not add anything else to the payment reference.
        Only <strong>{{ $order_id ?? ($bank_details['reference_code'] ?? 'N/A') }}</strong> will be accepted!
      </td>
    </tr>

    <tr>
      <td>
        <img
          src="https://www.korig.to/app/qr/image.png?iban={{ str_replace(' ', '', $bank_details['iban'] ?? 'SK9083300000002002931879') }}&eur={{ number_format(($order_data->total_amount_paid ?? 0), 2) }}+€&bname={{ urlencode($bank_details['account_name'] ?? 'LABORE s.r.o.') }}&bic={{ $bank_details['swift_bic'] ?? 'FIOZSKBAXXX' }}&logo=none&info=Order+{{ $order_id ?? ($bank_details['reference_code'] ?? 'N/A') }}"
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