<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<!--Шапка сайта-->
<header>
    <div class="logo">
        <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Логотип"></a>
    </div>
    <div class="banner">
        <a href="{{route('home')}}" target="_blank"><img src="{{asset('images/banner.png')}}" alt="Баннер"></a>
    </div>
</header>
<div class="clear"></div>
<!--Меню сайта-->
<div class="menu">
    @include('main.components.nav.header')
</div>

<div id="wrapper">
 @yield('content')
</div>

<!--Футер-->
@include('main.components.nav.footer')
</body>
</html>
