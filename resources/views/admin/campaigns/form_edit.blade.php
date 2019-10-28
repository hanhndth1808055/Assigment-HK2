@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card p-5">
                <h2>Update Staff Profile</h2>
                    <form action="{{url("admin/campaigns/update")}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$campaign->id}}">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"
                                   value="{{$campaign->name}}">
                            @if($errors->has("name"))
                                <p class="error" style="color:red">{{$errors->first("name")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Campaign Chairman</label>
                            <input type="text" class="form-control" value="{{$campaign->campaign_chairman}}" name="campaign_chairman"
                                   placeholder="Campaign Chairman">
                            @if($errors->has("campaign_chairman"))
                                <p class="error" style="color:red">{{$errors->first("campaign_chairman")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Short Description</label>
                            <input type="text" class="form-control" name="short_description" value="{{$campaign->short_description}}"
                                   placeholder="Short Description">
                            @if($errors->has("short_description"))
                                <p class="error" style="color:red">{{$errors->first("short_description")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Long Description</label>
                            <input type="text" class="form-control" name="long_description" value="{{$campaign->long_description}}"
                                   placeholder="Long Description">
                            @if($errors->has("long_description"))
                                <p class="error" style="color:red">{{$errors->first("long_description")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" value="{{$campaign->thumbnail}}"
                                   placeholder="Thumbnail" id="thumbnail">
                            @if($errors->has("thumbnail"))
                                <p class="error" style="color:red">{{$errors->first("thumbnail")}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Full Size Thumbnail</label>
                            <input type="file" class="form-control" name="full_size_thumbnail" value="{{$campaign->full_size_thumbnail}}"
                                   placeholder="Full Size Thumbnail" id="full_size_thumbnail">
                            @if($errors->has("full_size_thumbnail"))
                                <p class="error" style="color:red">{{$errors->first("full_size_thumbnail")}}</p>
                            @endif
                        </div>
                        <div class="form-group row text-right">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
