@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card p-5">
                    <h2>Add New Campaign</h2>
                    <form action="{{url("admin/campaigns/add")}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                       value=""{{old("name")}}>
                            </div>
                            @if($errors->has("name"))
                                <p class="error" style="color:red">{{$errors->first("name")}}</p>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="campaign_chairman" class="col-sm-3 text-right control-label col-form-label">Chairman
                                Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{old("campaign_chairman")}}" name="campaign_chairman"
                                       placeholder="Campaign Chairman">
                            </div>
                            @if($errors->has("campaign_chairman"))
                                <p class="error" style="color:red">{{$errors->first("campaign_chairman")}}</p>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="short_description"
                                   class="col-sm-3 text-right control-label col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{old("short_description")}}" name="short_description"
                                       placeholder="Short Description">
                            </div>
                            @if($errors->has("short_description"))
                                <p class="error" style="color:red">{{$errors->first("short_description")}}</p>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="long_description"
                                   class="col-sm-3 text-right control-label col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{old("long_description")}}" name="long_description"
                                       placeholder="Long Description">
                            </div>
                            @if($errors->has("long_description"))
                                <p class="error" style="color:red">{{$errors->first("long_description")}}</p>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="thumbnail"
                                   class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" value="{{old("thumbnail")}}" name="thumbnail" id="thumbnail"
                                       placeholder="Thumbnail">
                            </div>
                            @if($errors->has("thumbnail"))
                                <p class="error" style="color:red">{{$errors->first("thumbnail")}}</p>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="full_size_thumbnail"
                                   class="col-sm-3 text-right control-label col-form-label">Full Size Thumbnail</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" value="{{old("full_size_thumbnail")}}" name="full_size_thumbnail" id="full_size_thumbnail"
                                       placeholder="Full Size Thumbnail">
                            </div>
                            @if($errors->has("full_size_thumbnail"))
                                <p class="error" style="color:red">{{$errors->first("full_size_thumbnail")}}</p>
                            @endif
                        </div>

                        <div class="form-group row text-right">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
