@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="{{url("admin/editResearch")}}" method="POST">
            @csrf
            <input type="hidden" name="research_project_id" value="{{$research -> research_project_id}}">
            <div class="form-group">
                <label for="">Research Project Name</label>
                <input type="text" name="research_project_name" id="" class="form-control" value="{{$research -> research_project_name}}">
                @if($errors -> has("research_project_name"))
                    <p class="error">{{ $errors -> first("research_project_name") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Research detail</label>
                <select class="form-control" type="text" name="learn_more_id"  required>
                    @foreach($learnMoreResearch as $learn_more_research)
                        <option value="{{$learn_more_research->learn_more_id}}" @if($learn_more_research->learn_more_id == $research -> learn_more_id )selected @endif>{{$learn_more_research->learn_more_research_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Research Picture </label>
                <input type="text" name="research_picture" id="" class="form-control" value="{{$research -> research_picture}}">
                @if($errors -> has("research_picture"))
                    <p class="error">{{ $errors -> first("research_picture") }}</p>
                @endif
            </div>


            <div class="form-group">
                <label for="">Challenge </label>
                <textarea type="text" name="challenge"  id="" class="form-control" value="{{$research -> challenge}}" style="height: 200px" required>{{$research -> challenge}}</textarea>
                @if($errors -> has("challenge"))
                    <p class="error">{{ $errors -> first("challenge") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Key Activities </label>
                <textarea type="text" name="key_Activities" id="" class="form-control" value="{{$research -> key_Activities}}" style="height: 200px" required> {{$research -> key_Activities}}</textarea>
                @if($errors -> has("key_Activities"))
                    <p class="error">{{ $errors -> first("key_Activities") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Impact </label>
                <textarea type="text" name="impact" id="" class="form-control" value="{{$research -> impact}}" style="height: 200px" required> {{$research -> impact}}</textarea>
                @if($errors -> has("impact"))
                    <p class="error">{{ $errors -> first("impact") }}</p>
                @endif
            </div>



            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
