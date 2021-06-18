@auth

    <a href="{{ url('logout') }}">
        {{ __('auth.log_out') }}
    </a>

@else

    <a href="{{ url('login') }}">
        {{ __('auth.log_in') }}
    </a>

@endauth
