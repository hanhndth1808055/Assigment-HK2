@extends('admin.layout')
@section('main_content')
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Coment</th>
                    <th scope="col">Active</th>
                    <th scope="col">Scholarship</th>
                    <td scope="col">Edit</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($coments as $coment)
                    <tr>
                        <td>{{ $coment->coment_id }}</td>
                        <td>{{ $coment->name }}</td>
                        <td>{{ $coment->email }}</td>
                        <td>{{ $coment->messager }}</td>
                        <td>{{  \App\scholarship_coment::$_status[$coment->active] }}</td>
                        <td>{{ $coment->id }}</td>
                        <td>
                            <a href="{{ url('deletecoment/'.$coment->coment_id) }}">Delete</a>
                            <a href="{{ url('hide_coment/'.$coment->coment_id) }}">Hide</a>
                            <a href="{{ url('show_coment/'.$coment->coment_id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
