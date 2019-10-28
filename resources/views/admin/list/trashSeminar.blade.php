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
                <th>ACTIVE</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($seminars as $seminar )
                @if($seminar->active == 0)
                    <tr>
                        <td>{{ $seminar->seminar_id }}</td>
                        <td>{{ $seminar->seminar_picture }}</td>
                        <td>{{ $seminar->seminar_name }}</td>
                        <td>{{ $seminar->seminar_content }}</td>
                        <td>{{ $seminar->seminar_time }}</td>
                        <td>{{ $seminar->seminar_address }}</td>
                        <td>{{ App\seminar::$_statusActiveSeminar[$seminar->active]}}</td>
                        <td ><a class="btn-edit-seminar"  href="{{url('admin/editSeminar?id='.$seminar->seminar_id)}}">
                                <i class="fa fa-pencil fa-1x" style="color: white" aria-hidden="true"></i>
                            </a></td>
                        <td><a class="btn-edit-seminar" href="{{url('admin/recoverSeminar/'.$seminar->seminar_id)}}" onclick="return confirm('Are you sure ?')">
                                <i class="fa fa-undo fa-1x"  style="color: white"aria-hidden="true"></i>
                            </a></td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        {!! $seminars -> Links() !!}
    </div>
@endsection
