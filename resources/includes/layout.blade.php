<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body>
    @include('header')

    @yield('content')

    @include('footer')
</body>

</html>
