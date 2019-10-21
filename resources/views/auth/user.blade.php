@extends('auth.auth_admin')
@section('content')
<!-- title -->
<h1>
    Register
</h1>
<div class="sub-main-w3">

    <div class="form">
        <ul class="navbar-nav ml-auto" style="display : flex">
            <!-- Authentication Links -->
            @guest
            <h2 style="color : #fff">You are not user , please</h2>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <span style="margin-left:10px">or</span>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <h4><a href="{{ url('/') }}">Home page</a></h4>

            <span style="margin-left:10px">or</span>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            @endguest
        </ul>

    </div>

</div>

@endsection
