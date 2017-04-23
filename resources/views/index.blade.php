<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Author: Vincent Theo Roque, Single page website for BLB4B Glass Aluminum Installation and Supply">
    <meta name="keywords" content="glass, aluminum, glass aluminum, aluminum installation, aluminum supply, glass installation, glass supply, glass aluminum installation, glass aluminum supply, hardware">
    <meta name="robots" content="index,follow">
    <meta name="DC.title" content="BLB4B Glass Aluminum Installation and Supply">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <title>BLB4B Glass Aluminum Installation and Supply</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('common.navbar')

    @include('home')

    @include('about')

    @include('products')

    @include('common.productModal')

    @include('services')

    @include('clients')

    @include('contact')

    @include('common.footer')

    <a id="topBtn" class="btn btn-elegant animated bounceIn"><strong><i class="fa fa-angle-double-up" id="arrow-up"></i></strong></a>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- MDB Scripts -->
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mdb.min.js"></script>
    <script>
        new WOW().init();
    </script>

    @include('common.custom')

</body>
</html>
