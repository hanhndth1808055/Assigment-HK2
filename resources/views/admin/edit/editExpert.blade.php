@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="{{url("admin/addExpert")}}" method="POST">
            @csrf
            <input type="hidden" name="expert_id" value="{{$expert -> expert_id}}">
            <div class="form-group">
                <label for="">Expert Name</label>
                <input type="text" name="expert_name" id="" class="form-control" value="{{$expert -> expert_name}}">
                @if($errors -> has("expert_name"))
                    <p class="error">{{ $errors -> first("expert_name") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Expert Picture </label>
                <input type="text" name="expert_picture" id="" class="form-control" value="{{$expert -> expert_picture}}">
                @if($errors -> has("expert_picture"))
                    <p class="error">{{ $errors -> first("expert_picture") }}</p>
                @endif
            </div>


            <div class="form-group">
                <label for="">Expertise </label>
                <input type="text" name="expert_expertise" id="" class="form-control" value="{{$expert -> expert_expertise}}">
                @if($errors -> has("expert_expertise"))
                    <p class="error">{{ $errors -> first("expert_expertise") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Content </label>
                <input type="text" name="expert_content" id="" class="form-control" value="{{$expert -> expert_content}}=" required>
                @if($errors -> has("expert_content"))
                    <p class="error">{{ $errors -> first("expert_content") }}</p>
                @endif
            </div>




            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
