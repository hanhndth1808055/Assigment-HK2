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
                <th scope="col">Project Name</th>
                <th scope="col">Duration</th>
                <th scope="col">Funded By</th>
                <th scope="col">Partners</th>
                <th scope="col">Bodies of work</th>
                <th scope="col">Services</th>
                <th scope="col">Regions</th>
                <th scope="col">Active</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($learnMoreResearchs as $learnMoreResearch )
                <tr>
                    <td>{{ $learnMoreResearch->learn_more_id }}</td>
                    <td>{{ $learnMoreResearch->learn_more_research_name }}</td>
                    <td>{{ $learnMoreResearch->duration }}</td>
                    <td>{{ $learnMoreResearch->funded_by }}</td>
                    <td>{{ $learnMoreResearch->partners }}</td>
                    <td>{{ $learnMoreResearch->bodies_of_work }}</td>
                    <td>{{ $learnMoreResearch->services }}</td>
                    <td>{{ $learnMoreResearch->regions }}</td>
                    <td>{{ App\learn_more_research::$_statusActiveLearnMoreResearch[$learnMoreResearch->active] }}</td>
                    <td><a href="{{url('admin/editLearnMoreResearch?id='.$learnMoreResearch->learn_more_id)}}">EDIT</a></td>
                    <td><a class="btn-edit-seminar" href="{{url('admin/deleteLearnMoreResearch/'.$learnMoreResearch->learn_more_id)}}" onclick="return confirm('Are you sure ?')">
                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $learnMoreResearchs -> Links() !!}

    </div>
@endsection
