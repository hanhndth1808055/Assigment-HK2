@extends('auth.auth_admin')
@section('content')
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

@endsection
