@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Seminar Picure</th>
                <th scope="col">Seminar Name</th>
                <th scope="col">Seminar Content</th>
                <th scope="col">Time</th>
                <th scope="col">Address</th>
                <th></th>
                <th></th>
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
                    <td ><a class="btn-edit-seminar"  href="{{url('admin/editSeminar?id='.$seminar->seminar_id)}}">
                            <i class="fa fa-pencil fa-1x" style="color: white" aria-hidden="true"></i>
                        </a></td>
                    <td><a class="btn-edit-seminar" href="#">
                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>

                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $seminars -> Links() !!}
    </div>
@endsection
