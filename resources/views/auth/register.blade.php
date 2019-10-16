<!--Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE HTML>
    <html lang="zxx">

    <head>
        <title>Register </title>
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

        <!-- css files -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->

        <!-- web-fonts -->
        <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <!-- //web-fonts -->
    </head>

    <body>
        <!-- title -->
        <h1>
            Register
        </h1>
        <!-- //title -->

        <!-- content -->
        <div class="sub-main-w3">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input">
                            <label for="name" class="label">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="input mb-0" >
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div style="margin-top : 20px;color : #f4f6f8">
                            You have account <a class="nav-link" style="color : green" href="{{ route('login') }}">{{ __('Login now') }}</a>
                    </div>
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
