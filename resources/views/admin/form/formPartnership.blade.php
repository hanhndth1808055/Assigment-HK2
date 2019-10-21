@extends('admin.admin-layout')
@section('main-content')
    <div class="container">
        <form action="{{url("admin/addPartnership")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Partnership logo</label>
                <input type="text" name="partnership_edu_logo" id="" class="form-control" value="{{old('partnership_edu_logo')}}" required>
            </div>
            <div class="form-group">
                <label for="">Partnership Name </label>
                <input type="text" name="partnership_edu_name" id="" class="form-control" value="{{old('partnership_edu_name')}}" required>
                @if($errors -> has("partnership_edu_name"))
                    <p class="error">{{ $errors -> first("partnership_edu_name") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Information </label>
                <textarea type="text" name="partnership_edu_infor" id="" class="form-control" value="{{old('partnership_edu_infor')}}" style="height: 200px" required> </textarea>
                @if($errors -> has("partnership_edu_infor"))
                    <p class="error">{{ $errors -> first("partnership_edu_infor") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Information Readmore</label>
                <textarea type="text" name="partnership_edu_infor_readmore" id="" class="form-control" value="{{old('partnership_edu_infor_readmore')}}"  style="height: 200px" required> </textarea>
                @if($errors -> has("partnership_edu_infor_readmore"))
                    <p class="error">{{ $errors -> first("partnership_edu_infor_readmore") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="partnership_edu_address" id="" class="form-control" value="{{old('partnership_edu_address')}}"required>
                @if($errors -> has("partnership_edu_address"))
                    <p class="error">{{ $errors -> first("partnership_edu_address") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Tuition</label>
                <input type="number" name="partnership_edu_tuition" min="0" step="1" id="" class="form-control" value="{{old('partnership_edu_tuition')}}" required>
                @if($errors -> has("partnership_edu_tuition"))
                    <p class="error">{{ $errors -> first("partnership_edu_tuition") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Average Tuition</label>
                <input type="number" name="partnership_edu_average_tuition"  min="0" step="1" id="" class="form-control" value="{{old('partnership_edu_average_tuition')}}" required>
                @if($errors -> has("partnership_edu_average_tuition"))
                    <p class="error">{{ $errors -> first("partnership_edu_average_tuition") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Percentage of International Students</label>
                <input type="number" name="partnership_edu_percentage" max="100" step="1" id="" class="form-control" value="{{old('partnership_edu_percentage')}}" required>
                @if($errors -> has("partnership_edu_percentage"))
                    <p class="error">{{ $errors -> first("partnership_edu_percentage") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Value Score</label>
                <input type="number" name="partnership_edu_value" max="100" id="" class="form-control" value="{{old('partnership_edu_value')}}" required>
                @if($errors -> has("partnership_edu_value"))
                    <p class="error">{{ $errors -> first("partnership_edu_value") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">Website</label>
                <input type="text" name="partnership_edu_website" id="" class="form-control" value="{{old('partnership_edu_website')}}"required>
                @if($errors -> has("partnership_edu_website"))
                    <p class="error">{{ $errors -> first("partnership_edu_website") }}</p>
                @endif
            </div>

            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
