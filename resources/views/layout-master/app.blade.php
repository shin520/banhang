<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('page-title')</title>

    @include('layout-master.css')
    
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('layout-master.header')
            
            @include('layout-master.sidebar')
            
            @yield('main-content')
            
            @include('layout-master.setting')

            @include('layout-master.footer')
            
        </div>
    </div>
    
    @include('layout-master.js')
    
</body>
</html>
