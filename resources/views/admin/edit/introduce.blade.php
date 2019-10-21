@extends('admin.admin-layout')
@section('main-content')
    <div class="container mt-5">
            @if(Session::has("success"))
            <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
            @endif
        <form action="admin/editIntroduce" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" value="{{ $introduce->email }}">
                @if($errors -> has("email"))
                <p class="error">{{ $errors -> first("email") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">phone</label>
                <input type="number" name="phone" id="" class="form-control" value="{{ $introduce->phone }}">
                @if($errors -> has("phone"))
                <p class="error">{{ $errors -> first("phone") }}</p>
                @endif

            </div>
            <div class="form-group">
              <label for="">address</label>
              <input type="text" name="address" id="" class="form-control" placeholder="" value="{{ $introduce->address }}" aria-describedby="helpId">
              @if($errors -> has("address"))
                <p class="error">{{ $errors -> first("address") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Content Introduce</label>
                <textarea name="content" class="form-control" rows="10">{{ $introduce->content }}</textarea>

                @if($errors -> has("content"))
                <p class="error">{{ $errors -> first("content") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Introduce Picture</label>
                <input class="" type="file" id="image" name="image" onchange="showIMG()"
                value="{{ $introduce->image }}">
                @if($errors -> has("image"))
                <p class="error">{{ $errors -> first("image") }}</p>
                @endif
            </div>
            <div class="form-group">
                    <label for=""> Hiển thị : </label>
                    <div id="viewImg">
                            <img width="250px" height="150px"
                            src="{{asset('')}}images/introduce/{{  $introduce->image}}">
                    </div>
                </div>
            <div class="form-group text-right">
                <button class="btn btn-danger" type="submit">SUBMIT</button>
            </div>
        </form>
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
                            '<img style=" width="250px" height="150px" src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

    </script>
@endsection
