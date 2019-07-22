@extends('/layouts/app')

<!-- @section('content') -->

    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="content flex-center position-ref full-height title m-b-md">
        <div class="top-right links">
        <img src="{{ URL::asset('/assets/pokemon.jpg') }}" />

        </div>

        <div class="links">
          @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @else
            <a class="nav-link" href="/pokemo">Pokemons</a>
            <a class="nav-link" href="/pokemo/create">Add Pokemon?</a>
            <a class="nav-link" href="/captured">Captured Pokemons</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @endguest
        </div>
    </div>
</div> -->

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
              <!-- <a href="{{ url('/home') }}">Home</a> -->
            @else
                <!-- <a href="{{ route('login') }}">Login</a> -->

                @if (Route::has('register'))
                    <!-- <a href="{{ route('register') }}">Register</a> -->
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
        <img src="{{ URL::asset('/assets/pokedex.jpg') }}" />

        </div>

        <div class="links">
          @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @else
            <a class="nav-link" href="/pokemo">Pokemons</a>
            <a class="nav-link" href="/pokemo/create">Add Pokemon?</a>
            <a class="nav-link" href="/captured">Captured Pokemons</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @endguest
        </div>
    </div>
</div>
<!-- @endsection -->

<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links{
      display: flex;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: bold;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    #navbarSupportedContent{
      display: none!important;
    }
    main .header{
      display: none;
    }
    nav{
      display: none!important;
    }
</style>
