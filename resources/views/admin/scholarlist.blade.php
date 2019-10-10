@extends('admin.layout')
@section('main_content')
    <div class="container">
            <table class="table" style="padding-top : 200px">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Content</th>
                            <th scope="col">Status</th>
                        </tr>

                    </thead>
                    <tbody>
                    @foreach($scholars as $scholar)
                        <tr>
                            <td scope="col">{{$scholar -> id}}</td>
                            <td>{{ $scholar -> title }}</td>
                            <td>{{ $scholar -> image }}</td>
                            <td>{{ $scholar -> content }}</td>
                            <td>{{ $scholar -> status }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $scholars -> Links() !!}
    </div>

@endsection
