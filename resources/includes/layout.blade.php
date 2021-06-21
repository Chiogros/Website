<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body>
    @include('header')

    <div id="content">
        @yield('content')
    </div>

    @include('footer')
</body>

</html>
