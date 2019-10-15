@extends('admin.admin-layout')
@section('main-content')
<div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name Scholarship</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Time request</th>
                    <th scope="col">Use</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $register )
                    <tr>
                        <td>{{ $register->register_id }}</td>
                        <td>{{ $register->id }}</td>
                        <td>{{ $register->name }}</td>
                        <td>{{ $register->email }}</td>
                        <td>{{ $register->phone }}</td>
                        <td>{{ \App\register_scholarship::$_status[$register->contact]}}</td>
                        <td>{{ $register->created_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="">Contact</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
