<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page-title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    @include('layout-client.css')
</head>
<body>
    <div class="page-wrapper"> 
        @include('layout-client.header')
        @yield('main-content')
        @include('layout-client.footer')
    </div><!-- End .page-wrapper -->
    @include('layout-client.some-component')
    @include('layout-client.js')
</body>
</html>