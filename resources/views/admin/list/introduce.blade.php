@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Address</th>
                <th scope="col">Shơw</th>
                <th scope="col">Active</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($introduces as $introduce )
                <tr>
                   <td>{{ $introduce->id }}</td>
                   <td>{{ $introduce->email }}</td>
                   <td>{{ $introduce->phone }}</td>
                   <td>{{ $introduce->content }}</td>
                   <td><img width="200px" src="{{asset('images/introduce').'/'.$introduce->image}}" alt=""></td>
                   <td>{{ $introduce->address }}</td>
                   <td>{{ $introduce->show }}</td>
                   <td style="display : flex">

                        <a class="btn btn-outline-secondary" href="{{ url('admin/editIntroduce?id='.$introduce -> id) }}">Edit</a>
                        {{--  <a class="btn btn-outline-danger" href="{{ url('delete/'.$scholar->id) }}"  --}}
                            {{--  onclick="return confirm('You really want to delete this row??')">Delete</a>  --}}

                        {{--  <a class="btn btn-danger" href="{{ url('admin/hide_scholarship/'.$introduce->id) }}"
                            onclick="return confirm('You really want to hide this row??')">Hide</a>
                        <a class="btn btn-primary" href="{{ url('admin/show_scholarship/'.$introduce->id) }}"
                            onclick="return confirm('You really want to active this row??')">show</a>  --}}
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
