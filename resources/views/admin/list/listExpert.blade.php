@extends('admin.admin-layout')
@section('main-content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Expert Name</th>
                <th scope="col">Picture</th>
                <th scope="col">Expertise</th>
                <th scope="col">Content</th>
                <th scope="col">Active</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($experts as $expert )
                <tr>
                    <td>{{ $expert->expert_id }}</td>
                    <td>{{ $expert->expert_name }}</td>
                    <td>{{ $expert->expert_picture }}</td>
                    <td>{{ $expert->expert_expertise }}</td>
                    <td>{{ $expert->expert_content }}</td>
                    <td>{{ App\expert::$_statusActiveExpert[$expert->active] }}</td>
                    <td><a href="{{url('admin/editExpert?id='.$expert->expert_id)}}">EDIT</a></td>
                    <td><a class="btn-edit-seminar" href="{{url('admin/deleteExpert/'.$expert->expert_id)}}" onclick="return confirm('Are you sure ?')">
                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $experts -> Links() !!}

    </div>
@endsection
