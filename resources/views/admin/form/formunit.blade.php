@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="admin/addunit" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name Unit</label>
                <input type="text" name="unit_name" id="" class="form-control" value="{{old('unit_name')}}">
                @if($errors -> has("unit_name"))
                <p class="error">{{ $errors -> first("unit_name") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Email Unit</label>
                <input type="email" name="email" id="" class="form-control" value="{{old('email')}}">
                @if($errors -> has("email"))
                <p class="error">{{ $errors -> first("email") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Country</label>
                <select class="form-control" name="country_id">
                    @foreach ($countrys as $country)
                    <option value="{{ $country -> country_id }}">
                        {{ $country -> country_id }} &nbsp.&nbsp{{ $country -> country_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
