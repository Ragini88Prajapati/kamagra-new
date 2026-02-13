<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Summary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>

    <!-- your css -->
    <!-- shopping summary -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/shoppingsummary.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/pageinformation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/cartpage.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/ordercompleted.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/giftpage.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/client2/css/advice.css') }}" />
</head>
<body>

    <div class="page-wrapper">
        @yield('content')
    </div>

</body>
</html>
