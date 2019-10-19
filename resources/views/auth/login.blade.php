
    <!DOCTYPE HTML>
    <html lang="zxx">

    <head>
        <title>Admin Login</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Modish Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Meta tag Keywords -->
        <base href="{{asset('')}}">
        <!-- css files -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->
        {{-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> --}}
        <!-- web-fonts -->
        <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <!-- //web-fonts -->
    </head>

    <body>
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
        <div class="footer">
            <h2>&copy; 2018 Modish Login Form. All rights reserved | Design by
                <a href="http://w3layouts.com">W3layouts</a>
            </h2>
        </div>
        <!-- //copyright -->

    </body>

    </html>
