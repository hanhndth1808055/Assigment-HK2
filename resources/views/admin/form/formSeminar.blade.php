@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="{{url("admin/addSeminar")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Seminar Name</label>
                <input type="text" name="seminar_name" id="" class="form-control" value="{{old('seminar_name')}}">
                @if($errors -> has("seminar_name"))
                    <p class="error">{{ $errors -> first("seminar_name") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Seminar Picture </label>
                <input type="text" name="seminar_picture" id="" class="form-control" value="{{old('seminar_picture')}}">
                @if($errors -> has("seminar_picture"))
                    <p class="error">{{ $errors -> first("seminar_picture") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Seminar Content </label>
                <textarea type="text" name="seminar_content" id="" class="form-control" style="height: 300px" value="{{old('seminar_content')}}" required></textarea>
                @if($errors -> has("seminar_content"))
                    <p class="error">{{ $errors -> first("seminar_content") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Seminar Time </label>
                <input type="text" name="seminar_time" id="" class="form-control" value="{{old('seminar_time')}}">
                @if($errors -> has("seminar_time"))
                    <p class="error">{{ $errors -> first("seminar_time") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Seminar Address </label>
                <input type="text" name="seminar_address" id="" class="form-control" value="{{old('seminar_address')}}">
                @if($errors -> has("seminar_address"))
                    <p class="error">{{ $errors -> first("seminar_address") }}</p>
                @endif
            </div>


            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
