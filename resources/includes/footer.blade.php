@auth

    <a href="{{ route('logout') }}">
        {{ __('auth.log_out') }}
    </a>

@else

    <a href="{{ route('loginPage') }}">
        {{ __('auth.log_in') }}
    </a>

@endauth
