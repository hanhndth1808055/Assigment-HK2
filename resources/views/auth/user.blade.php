@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <h3>Register Done</h3>
                    <h4>You are not Admin please comback <a href="{{ url('/') }}">home page</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
