@extends('admin.layout')
@section('main_content')
<div class="container-fluid">
    <table class="table" style="padding-top : 200px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Content</th>
                <th scope="col">Contry</th>
                <th scope="col">Unit</th>
                <th scope="col">Money</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
            </tr>

        </thead>
        <tbody>
            @foreach($scholars as $scholar)
            <tr>
                <td scope="col">{{$scholar -> id}}</td>
                <td>{{ $scholar -> title }}</td>
                <td><img width="200px" src="{{asset('images/scholarship').'/'.$scholar->image}}" alt=""></td>
                <td>
                    <div style="height : 150px;overflow-y: scroll;">
                        {{ $scholar -> content }}
                    </div>
                </td>
                <td>{{ $scholar -> country_id }}</td>
                <td>{{ $scholar -> unit_id }}</td>
                <td>{{ $scholar -> pay }}</td>
                <td>{{ $scholar -> startdate }}</td>
                <td>{{ $scholar-> enddate }}</td>
                <td>{{ \App\scholarship::$_status[$scholar->status] }}</td>
                <td style="display : flex">

                        <a class="btn btn-outline-secondary" href="{{ url('editscholarship?id='.$scholar -> id) }}">Edit</a>
                        {{--  <a class="btn btn-outline-danger" href="{{ url('delete/'.$scholar->id) }}"  --}}
                            {{--  onclick="return confirm('You really want to delete this row??')">Delete</a>  --}}

                        <a class="btn btn-danger" href="{{ url('hide_scholarship/'.$scholar->id) }}">Hide</a>
                        <a class="btn btn-primary" href="{{ url('show_scholarship/'.$scholar->id) }}">show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $scholars -> Links() !!}
</div>

@endsection
