<link href="{{ asset('css/includes/footer.css') }}" rel="stylesheet">

@auth

    <form method="POST" action="{{ url('logout') }}">
        @csrf
        <input type="submit" value="{{ __('auth.log_out') }}">
    </form>

@else

    <a href="{{ url('login') }}">
        {{ __('auth.log_in') }}
    </a>

@endauth
