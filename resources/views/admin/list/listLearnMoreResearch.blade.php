@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Project Director</th>
                <th scope="col">Project Link</th>
                <th scope="col">Duration</th>
                <th scope="col">Funded By</th>
                <th scope="col">Partners</th>
                <th scope="col">Bodies of work</th>
                <th scope="col">Services</th>
                <th scope="col">Regions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($learnMoreResearchs as $learnMoreResearch )
                <tr>
                    <td>{{ $learnMoreResearch->learn_more_id }}</td>
                    <td>{{ $learnMoreResearch->project_director }}</td>
                    <td>{{ $learnMoreResearch->learn_more_project_link }}</td>
                    <td>{{ $learnMoreResearch->duration }}</td>
                    <td>{{ $learnMoreResearch->funded_by }}</td>
                    <td>{{ $learnMoreResearch->partners }}</td>
                    <td>{{ $learnMoreResearch->bodies_of_work }}</td>
                    <td>{{ $learnMoreResearch->services }}</td>
                    <td>{{ $learnMoreResearch->regions }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
