@extends('admin.admin-layout')
@section('main-content')
<style>
    p {
        color: red;
        text-transform: capitalize;
    }

</style>
<div class="container">
    <form action="{{ url('add-scholarship') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="">
            @if($errors -> has("title"))
            <p class="error">{{ $errors -> first("title") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Brief Content</label>
            <input type="text" name="brief_content" value="{{old('brief_content')}}" class="form-control" placeholder="">
            @if($errors -> has("brief_content"))
            <p class="error">{{ $errors -> first("brief_content") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Organizational Unit</label>
            <select class="form-control" name="unit_id">
                @foreach ($units as $unit)
                <option value="{{ $unit -> unit_id }}">
                    {{ $unit -> unit_id }} &nbsp.&nbsp{{ $unit -> unit_name }}
                </option>
                @endforeach
            </select>
            <small id="emailHelp" class="form-text text-muted">
                <a target="_blank" href="{{ url('addunit') }}">Add Unit</a>
            </small>
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
            <small id="emailHelp" class="form-text text-muted">
                <a target="_blank" href="{{ url('addcountry') }}">Add Country</a>
            </small>
        </div>
        <div class="form-group">
            <label for="">Award Amount</label>
            <input type="text" name="pay" value="{{old('pay')}}" class="form-control" placeholder="">
            @if($errors -> has("pay"))
            <p class="error">{{ $errors -> first("pay") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="startdate" value="{{old('startdate')}}" class="form-control" placeholder="">
            @if($errors -> has("startdate"))
            <p class="error">{{ $errors -> first("startdate") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Deadline Date</label>
            <input type="date" name="enddate" value="{{old('enddate')}}" class="form-control" placeholder="">
            @if($errors -> has("enddate"))
            <p class="error">{{ $errors -> first("enddate") }}</p>
            @endif
        </div>


        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" class="form-control" rows="10">{{old('content')}}</textarea>

            @if($errors -> has("content"))
            <p class="error">{{ $errors -> first("content") }}</p>
            @endif
        </div>






        <div class="form-group">
            <label for="image">Hình ảnh </label>
            <input class="" type="file" id="image" name="image" onchange="showIMG()">
            @if($errors -> has("image"))
            <p class="error">{{ $errors -> first("image") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for=""> Hiển thị : </label>
            <div id="viewImg">
            </div>
        </div>

        <div class="form-group text-right">
            <button class="btn btn-danger" type="submit">SUBMIT</button>
        </div>
    </form>
    @if(Session::has("success"))
    <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
    @endif

</div>
<script>
    function showIMG() {
        var fileInput = document.getElementById('image');
        var filePath = fileInput.value; //lấy giá trị input theo id
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; //các tập tin cho phép
        //Kiểm tra định dạng
        if (!allowedExtensions.exec(filePath)) {
            alert('Bạn chỉ có thể dùng ảnh dưới định dạng .jpeg/.jpg/.png/.gif extension.');
            fileInput.value = '';
            return false;
        } else {
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('viewImg').innerHTML =
                        '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

</script>

@endsection
