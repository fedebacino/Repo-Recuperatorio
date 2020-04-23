<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">RECUPERATORIO</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="/movies/listMovies/">MOVIES</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="/actors/listActors/">ACTORS</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="/genres/listGenres/">GENRES</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    @auth
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="/partials/perfil/{{ Auth::id() }}">{{Auth::user()->name}}
                        <ion-icon name="person"></ion-icon>
                    </a>
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        {{ __('LOGOUT') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="{{ route('login') }}">
                        <ion-icon name="person"></ion-icon>LOGIN
                    </a>
                    <a class="nav-link py-3 px-0 px-lg-2 rounded js-scroll-trigger" href="{{ route('register') }}">
                        <ion-icon name="create"></ion-icon>REGISTER
                    </a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>