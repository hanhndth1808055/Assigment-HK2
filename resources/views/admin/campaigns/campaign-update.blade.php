@extends('admin.admin-layout')
@section('main-content')
<h1>This is to test layout</h1>
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('gallery.update') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $campaign->name) }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Chairman</label>
        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="campaign_chairman" value="{{ old('campaign_chairman', $campaign->campaign_chairman) }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="thumbnail" class="col-md-4 col-form-label text-md-right">Thumbnail</label>
        <div class="col-md-6">
            <input id="thumbnail" type="file" class="form-control" name="thumbnail">
            @if ($campaign->thumbnail)
                <code>{{ $campaign->thumbnail }}</code>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Thumbnail</label>
        <div class="col-md-6">
            <input id="profile_image" type="file" class="form-control" name="profile_image">
            @if ($campaign->thumbnail)
                <code>{{ $campaign->thumbnail }}</code>
            @endif
        </div>
    </div>
    <div class="form-group row mb-0 mt-5">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Update Gallery</button>
        </div>
    </div>
</form>

@endsection
