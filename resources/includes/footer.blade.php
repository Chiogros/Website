@auth

    <form method="POST" action="{{ url('logout') }}">
        <input type="submit" value="{{ __('auth.log_out') }}">
    </form>

@else

    <a href="{{ url('login') }}">
        {{ __('auth.log_in') }}
    </a>

@endauth
