@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="{{url("admin/addResearch")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Research Project Name</label>
                <input type="text" name="research_project_name" id="" class="form-control" value="{{old('research_project_name')}}">
                @if($errors -> has("research_project_name"))
                    <p class="error">{{ $errors -> first("research_project_name") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Research Picture </label>
                <input type="text" name="research_picture" id="" class="form-control" value="{{old('research_picture')}}">
                @if($errors -> has("research_picture"))
                    <p class="error">{{ $errors -> first("research_picture") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Challenge </label>
                <input type="text" name="challenge" id="" class="form-control" value="{{old('challenge')}}">
                @if($errors -> has("challenge"))
                    <p class="error">{{ $errors -> first("challenge") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Key Activities </label>
                <input type="text" name="key_Activities" id="" class="form-control" value="{{old('key_Activities')}}" required>
                @if($errors -> has("key_Activities"))
                    <p class="error">{{ $errors -> first("key_Activities") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Impact </label>
                <input type="text" name="impact" id="" class="form-control" value="{{old('impact')}}" required>
                @if($errors -> has("impact"))
                    <p class="error">{{ $errors -> first("impact") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label>Learn More </label>
                <select class="form-control" type="text" name="learn_more_id" value="{{old("phongchieu_id")}}"  required>
                    @foreach($phongchieus as $phongchieu)
                        <option value="{{$phongchieu->phongchieu_id}}" @if($phongchieu->phongchieu_id == old("learn_more_id"))selected @endif>{{$phongchieu->tenPhong}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
