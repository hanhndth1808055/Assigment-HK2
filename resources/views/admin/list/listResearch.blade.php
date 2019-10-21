@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Research Name</th>
                <th scope="col">Learn More Research ID</th>
                <th scope="col">Research Picture</th>
                <th scope="col">Challenge</th>
                <th scope="col">Key Activities</th>
                <th scope="col">Impact</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($researchs as $research )
                <tr>
                    <td>{{ $research->research_project_id }}</td>
                    <td>{{ $research->research_project_name }}</td>
                    <td>{{ $research->learn_more_id }}</td>
                    <td>{{ $research->research_picture }}</td>
                    <td>{{ $research->challenge }}</td>
                    <td>{{ $research->key_Activities }}</td>
                    <td>{{ $research->impact }}</td>
                    <th><a href="{{url('admin/editResearch?id='.$research->research_project_id)}}">EDIT</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $researchs -> Links() !!}
    </div>
@endsection
