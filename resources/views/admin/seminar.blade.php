@extends('admin.layout')
@section('main_content')
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Seminar Picure</th>
                <th scope="col">Seminar Name</th>
                <th scope="col">Seminar Content</th>
                <th scope="col">Time</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($seminars as $seminar )
                <tr>
                    <td>{{ $seminar->seminar_id }}</td>
                    <td>{{ $seminar->seminar_picture }}</td>
                    <td>{{ $seminar->seminar_name }}</td>
                    <td>{{ $seminar->seminar_content }}</td>
                    <td>{{ $seminar->seminar_time }}</td>
                    <td>{{ $seminar->seminar_address }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $seminars -> Links() !!}
    </div>

@endsection
