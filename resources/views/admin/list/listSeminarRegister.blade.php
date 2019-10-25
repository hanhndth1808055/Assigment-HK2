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
                <th scope="col">Seminar Name</th>
                <th scope="col"> Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Active</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($registerSeminars as $registerSeminar )
                <tr>
                    <td>{{ $registerSeminar->seminar_register_id }}</td>
                    <td>{{ $registerSeminar->seminar_id}}</td>
                    <td>{{ $registerSeminar->name }}</td>
                    <td>{{ $registerSeminar->email }}</td>
                    <td>{{ $registerSeminar->phone }}</td>
                    <td>{{ $registerSeminar->address }}</td>
                    <td>{{ App\seminar_register::$_statusActiveSeminarRegister[$registerSeminar->seminar_register_id] }}</td>
                    <td><a class="btn-edit-seminar" href="#">
                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>
                        </a></td>
                    <td><a class="btn-edit-seminar" href="{{url('admin/deleteSeminarRegister/'.$registerSeminar->seminar_register_id)}}" onclick="return confirm('Are you sure ?')">
                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $registerSeminars -> Links() !!}
    </div>
@endsection
