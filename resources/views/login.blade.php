<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body>

    <form method="POST" action="{{ url('login/auth') }}" >

        @csrf

        <label for="email">{{ __('login.email') }}</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">{{ __('login.password') }}</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="{{ __('global.submit') }}">

    </form>

</body>

</html>
