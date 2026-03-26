<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
    <title>Online Kamagra Store</title>
</head>

<body style="font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto;">

    <h2 style="color: #2a7ae2;">Order Successfully Placed!</h2>

    <p>Dear <strong>{{ $shipping_firstname }} {{ $shipping_lastname }}</strong>,</p>

    <p>Thank you for your order. Your order has been received and will be processed shortly.</p>

    <table style="width:100%; border-collapse: collapse; margin: 20px 0;">
        <tr style="background:#f5f5f5;">
            <td style="padding:8px; border:1px solid #ddd;"><strong>Order Number:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;">{{ $auto_order_id }}</td>
        </tr>
        <tr>
            <td style="padding:8px; border:1px solid #ddd;"><strong>Total Amount:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;">€{{ number_format($total_amount_paid, 2) }}</td>
        </tr>
        <tr style="background:#f5f5f5;">
            <td style="padding:8px; border:1px solid #ddd;"><strong>Payment Method:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;">SEPA Bank Transfer</td>
        </tr>
    </table>

    <h3>Delivery Address</h3>
    <p>
        {{ $shipping_firstname }} {{ $shipping_lastname }}<br>
        {{ $shipping_address }} {{ $delivery_street_nr }}<br>
        {{ $shipping_city }}, {{ $shipping_pincode }}
    </p>

    <h3 style="color: #e63c3c;">Payment Instructions</h3>
    <table style="width:100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background:#fff3cd;">
            <td style="padding:8px; border:1px solid #ddd;"><strong>Account Name:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;">LABORE s.r.o</td>
        </tr>
        <tr>
            <td style="padding:8px; border:1px solid #ddd;"><strong>IBAN:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;">SK90 8330 0000 0020 0293 1879</td>
        </tr>
        <tr style="background:#f5f5f5;">
            <td style="padding:8px; border:1px solid #ddd;"><strong>SWIFT/BIC:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;">FIOZSKBAXXX</td>
        </tr>
        <tr>
            <td style="padding:8px; border:1px solid #ddd;"><strong>Payment Reference:</strong></td>
            <td style="padding:8px; border:1px solid #ddd;"><strong style="color:red;">{{ $auto_order_id }}</strong>
            </td>
        </tr>
    </table>

    <p style="background:#ffe0e0; padding:10px; border-radius:4px;">
        ⚠️ <strong>Important:</strong> Please use ONLY <strong>{{ $auto_order_id }}</strong> as the payment reference.
        Do not add anything else.
    </p>

    @if (isset($orders) && count($orders))
        <h3>Order Items</h3>
        <table style="width:100%; border-collapse:collapse;">
            <tr style="background:#2a7ae2; color:white;">
                <th style="padding:8px; text-align:left;">Product</th>
                <th style="padding:8px;">Qty</th>
                <th style="padding:8px;">Price</th>
                <th style="padding:8px;">Total</th>
            </tr>
            @foreach ($orders as $item)
                <tr style="{{ $loop->index % 2 == 0 ? 'background:#f9f9f9;' : '' }}">
                    <td style="padding:8px; border:1px solid #ddd;">
                        {{ $item['variant']['product']['name'] ?? 'Product' }}</td>
                    <td style="padding:8px; border:1px solid #ddd; text-align:center;">{{ $item['quantity'] }}</td>
                    <td style="padding:8px; border:1px solid #ddd; text-align:right;">€{{ $item['price'] }}</td>
                    <td style="padding:8px; border:1px solid #ddd; text-align:right;">€{{ $item['total_price'] }}</td>
                </tr>
            @endforeach
        </table>
    @endif

    <p style="margin-top:30px; color:#666; font-size:12px;">
        This is an automated email. Please do not reply to this message.<br>
        For support: support@onlinekamagrastore.com
    </p>

</body>

</html>
