@extends('admin.admin-layout')
@section('main-content')
<div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Messager</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Time request</th>
                    <th scope="col"> Use </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactus as $contact )
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->messager }}</td>
                        <td>{{ \App\contactus::$_status[$contact->active]}}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="">Contact</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
