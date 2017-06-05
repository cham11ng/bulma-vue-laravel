<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Reporio') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div class="container">
    <nav class="nav">
        <div class="nav-left">
            <a href="/" class="nav-item is-brand">
                <span class="icon"><i class="fa fa-support"></i></span> {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="nav-center">
            <a class="nav-item">
                <span class="icon">
                    <i class="fa fa-facebook"></i>
                </span>
            </a>
            <a class="nav-item">
                <span class="icon">
                    <i class="fa fa-twitter"></i>
                </span>
            </a>
        </div>

        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <div class="nav-right nav-menu">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <span class="nav-item">
                    <a href="{{ route('login') }}" class="button">
                        <span class="icon">
                            <i class="fa fa-sign-in"></i>
                        </span>
                        <span>Login</span>
                    </a>
                    <a href="{{ route('register') }}" class="button is-primary">
                        <span class="icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <span>Register</span>
                    </a>
                </span>
            @else
                <span class="nav-item">
                    <a href="{{ url('reports/create') }}" class="button">
                        <span>Report</span>
                    </a>
                    <a href="{{ url('profile') }}" class="button">
                        <span class="icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <a class="button is-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <i class="fa fa-sign-out"></i>
                        </span>

                        <span>Logout</span>
                    </a>
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </nav>
    @yield('content')
</div>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Reporio</strong> by <a href="http://technorio.com">cham11ng</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">Technorio</a>. <br/>
                Copyright &copy;
                {{ \Carbon\Carbon::parse()->year > '2017' ? '2017 -' . \Carbon\Carbon::parse()->year : \Carbon\Carbon::parse()->year }}
            </p>
            <p>
                <a class="icon" href="https://technorio.com">
                    <i class="fa fa-twitter"></i>
                </a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
@yield('scripts')
</body>
</html>