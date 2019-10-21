@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
            @if(Session::has("success"))
            <h4 class="text-center" style="color:green">{{ Session::get("success") }}</h4>
            @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emailcontacts as $email)
                    <tr>
                        <td>{{ $email->id }}</td>
                        <td>{{ $email->email }}</td>

                        @if( $email->active == 0 )
                             <td><a class="btn btn-danger">{{ \App\contact::$_status[$email->active] }}</a></td>
                             <td>
                                    <a target="_blank" href="{{ url('admin/contactEmail/'.$email->id) }}" class="btn btn-danger">Contact</a>
                                </td>
                        @endif
                        @if( $email->active == 1)
                            <td><a class="btn btn-primary">{{ \App\contact::$_status[$email->active] }}</a></td>
                            <td>
                               <a target="_blank" href="{{ url('admin/contactEmail/'.$email->id) }}" class="btn btn-warning">ReContact</a>
                           </td>
                           @endif
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
@endsection
