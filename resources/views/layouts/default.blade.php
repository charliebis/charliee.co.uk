<!doctype html>
<html lang="en" class="theme-base">
<head>
    @include('includes.tagmanager.head')
    @include('includes.head')
</head>
<body>
    @include('includes.tagmanager.body')
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    @include('includes.recaptchajs')
</body>
</html>
