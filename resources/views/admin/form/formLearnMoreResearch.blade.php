@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="{{url("admin/addLearnMoreResearch")}}" method="POST">
            @csrf


            <div class="form-group">
                <label for="">Learn More Project Name </label>
                <input type="text" name="learn_more_research_name" id="" class="form-control" value="{{old('learn_more_research_name')}}">
                @if($errors -> has("learn_more_research_name"))
                    <p class="error">{{ $errors -> first("learn_more_research_name") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Duration </label>
                <input type="text" name="duration" id="" class="form-control" value="{{old('duration')}}">
                @if($errors -> has("duration"))
                    <p class="error">{{ $errors -> first("duration") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Funded By </label>
                <textarea style="height: 200px" type="text" name="funded_by" id="" class="form-control" value="{{old('funded_by')}}"></textarea>
                @if($errors -> has("funded_by"))
                    <p class="error">{{ $errors -> first("funded_by") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Partners </label>
                <textarea style="height: 200px" type="text" name="partners" id="" class="form-control" value="{{old('partners')}}"></textarea>
                @if($errors -> has("partners"))
                    <p class="error">{{ $errors -> first("partners") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Bodies Of Work </label>
                <input type="text" name="bodies_of_work" id="" class="form-control" value="{{old('bodies_of_work')}}">
                @if($errors -> has("bodies_of_work"))
                    <p class="error">{{ $errors -> first("bodies_of_work") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Services </label>
                <input type="text" name="services" id="" class="form-control" value="{{old('services')}}">
                @if($errors -> has("services"))
                    <p class="error">{{ $errors -> first("services") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Regions </label>
                <input type="text" name="regions" id="" class="form-control" value="{{old('regions')}}">
                @if($errors -> has("regions"))
                    <p class="error">{{ $errors -> first("regions") }}</p>
                @endif
            </div>

            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
