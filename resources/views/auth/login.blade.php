@extends('auth.auth_admin')
@section('content')
        <!-- title -->
        <h1>
            <span>A</span>dmin
            <span>L</span>ogin
            {{-- <span>F</span>orm --}}
        </h1>
        <!-- //title -->

        <!-- content -->
        <div class="sub-main-w3">
            <form class="login"  method="POST" action="{{ route('login') }}">
                @csrf
                <p class="legend">Login Here</p>
                <div class="input">
                    <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                     name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="input">
                        <label class="label" for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror

                </div>
                <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label style="color:#fff" class="form-check-label" for="remember">
                                    {{ __('Remember Password') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div style="display : flex">
                            <button type="submit" class="submit">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a style="color:#fff;margin-top:25px;font-size:13px" class="btn btn-link"
                                 href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div style="margin-top : 20px;color : #f4f6f8">
                            You don't have account '<a class="nav-link" style="color : green" href="{{ route('register') }}">{{ __('Register now') }}</a>
                    </div>
                {{-- <button type="submit" class="submit">
                    Login
                </button> --}}
            </form>
        </div>
        <!-- //content -->

        <!-- copyright -->
        {{--  <div class="footer">
            <h2>&copy; 2018 Modish Login Form. All rights reserved | Design by
                <a href="http://w3layouts.com">W3layouts</a>
            </h2>
        </div>  --}}
        <!-- //copyright -->

@endsection
