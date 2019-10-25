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
                <th scope="col">Logo</th>
                <th scope="col"> Name</th>
                <th scope="col"> Information</th>
                <th scope="col">Information Readmore</th>
                <th scope="col">Address</th>
                <th scope="col">Tuition</th>
                <th scope="col">Average tuition</th>
                <th scope="col">Percentage of International Students</th>
                <th scope="col">Value Score</th>
                <th scope="col">Website</th>
                <th scope="col">Active</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($partnerships as $partnership )
                @if($partnership -> active == 0)
                <tr>
                    <td>{{ $partnership->partnership_id }}</td>
                    <td>{{ $partnership->partnership_edu_logo }}</td>
                    <td>{{ $partnership->partnership_edu_name }}</td>
                    <td>{{ $partnership->partnership_edu_infor }}</td>
                    <td>{{ $partnership->partnership_edu_infor_readmore }}</td>
                    <td>{{ $partnership->partnership_edu_address }}</td>
                    <td>{{ $partnership->partnership_edu_tuition }}</td>
                    <td>{{ $partnership->partnership_edu_average_tuition }}</td>
                    <td>{{ $partnership->partnership_edu_percentage }}</td>
                    <td>{{ $partnership->partnership_edu_value }}</td>
                    <td>{{ $partnership->partnership_edu_website }}</td>
                    <td><a href="{{url('admin/editPartnership?id='.$partnership->partnership_id)}}">EDIT</a></td>
                    <td><a class="btn-edit-seminar" href="{{url('admin/recoverPartnership/'.$partnership->partnership_id )}}" onclick="return confirm('Are you sure ?')">
                            <i class="fa fa-undo fa-1x"  style="color: white" aria-hidden="true"></i>
                        </a></td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        {!! $partnerships -> Links() !!}
    </div>
@endsection
