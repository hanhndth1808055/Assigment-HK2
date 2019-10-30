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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Seminar Subject</th>
                <th scope="col">Review</th>
                {{--                <th scope="col">Active</th>--}}
                {{--                <th></th>--}}
                {{--                <th></th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach ($feedbackSeminars as $feedbackSeminar )
                <tr>
                    <td>{{ $feedbackSeminar->id }}</td>
                    <td>{{ $feedbackSeminar->name }}</td>
                    <td>{{ $feedbackSeminar->email }}</td>
                    <td>{{ $feedbackSeminar->seminar_id }}</td>
                    <td>{{ $feedbackSeminar->seminar_review }}</td>
                    {{--                    <td>{{ App\seminar_register::$_statusActiveSeminarRegister[$registerSeminar->active] }}</td>--}}
                    {{--                    <td><a class="btn-edit-seminar" href="#">--}}
                    {{--                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>--}}
                    {{--                        </a></td>--}}
                    {{--                    <td><a class="btn-edit-seminar" href="{{url('admin/deleteSeminarRegister/'.$registerSeminar->seminar_register_id)}}" onclick="return confirm('Are you sure ?')">--}}
                    {{--                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>--}}
                    {{--                        </a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $feedbackSeminars -> Links() !!}
    </div>
@endsection
