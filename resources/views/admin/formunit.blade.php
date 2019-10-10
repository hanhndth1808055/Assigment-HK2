@extends('admin.layout')
@section('main_content')
    <div class="container">
        <form action="addunit" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name Unit</label>
                <input type="text" name="unit_name" id="" class="form-control" value="{{old('unit_name')}}">
                @if($errors -> has("unit_name"))
                <p class="error">{{ $errors -> first("unit_name") }}</p>
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
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
