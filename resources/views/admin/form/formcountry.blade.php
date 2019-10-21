@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="admin/addcountry" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name Country</label>
                <input type="text" name="country_name" id="" class="form-control" value="{{old('country_name')}}">
                @if($errors -> has("country_name"))
                <p class="error">{{ $errors -> first("country_name") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Short Name Country</label>
                <input type="text" name="short_name" id="" class="form-control" value="{{old('short_name')}}">
                @if($errors -> has("short_name"))
                <p class="error">{{ $errors -> first("short_name") }}</p>
                @endif
            </div>
            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
