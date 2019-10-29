@extends('admin.admin-layout')
@section('main-content')
    <div id="page-inner">
        <div class="row pb-5">
            <h4>Campaign List</h4>
        </div>
        <div class="row pt-5">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default pt-5">
                    <div class="panel-heading">
                        Campaigns
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                                {!! $scholar -> content !!}
                                            </div>
                                        </td>
                                        <td>{{ $scholar -> country_id }}</td>
                                        <td>{{ $scholar -> unit_id }}</td>
                                        <td>{{ $scholar -> pay }}</td>
                                        <td>{{ $scholar -> startdate }}</td>
                                        <td>{{ $scholar-> enddate }}</td>
                                        <td>{{ \App\scholarship::$_status[$scholar->status] }}</td>
                                        <td style="display : flex">

                                                <a class="btn btn-outline-secondary" href="{{ url('admin/editscholarship?id='.$scholar -> id) }}">Edit</a>
                                                {{--  <a class="btn btn-outline-danger" href="{{ url('delete/'.$scholar->id) }}"  --}}
                                                    {{--  onclick="return confirm('You really want to delete this row??')">Delete</a>  --}}

                                                <a class="btn btn-danger" href="{{ url('admin/hide_scholarship/'.$scholar->id) }}"
                                                    onclick="return confirm('You really want to hide this row??')">Hide</a>
                                                <a class="btn btn-primary" href="{{ url('admin/show_scholarship/'.$scholar->id) }}"
                                                    onclick="return confirm('You really want to active this row??')">show</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <span>Total Scholarship : {{ $totalscholarship }}</span>
                            {!! $scholars -> Links() !!}
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@endsection



@extends('admin.admin-layout')
@section('main-content')
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
        <tbody style="font-size : 12px">
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

                        <a class="btn btn-outline-secondary" href="{{ url('admin/editscholarship?id='.$scholar -> id) }}">Edit</a>
                        {{--  <a class="btn btn-outline-danger" href="{{ url('delete/'.$scholar->id) }}"  --}}
                            {{--  onclick="return confirm('You really want to delete this row??')">Delete</a>  --}}

                        <a class="btn btn-danger" href="{{ url('admin/hide_scholarship/'.$scholar->id) }}"
                            onclick="return confirm('You really want to hide this row??')">Hide</a>
                        <a class="btn btn-primary" href="{{ url('admin/show_scholarship/'.$scholar->id) }}"
                            onclick="return confirm('You really want to active this row??')">show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <span>Total Scholarship : {{ $totalscholarship }}</span>
    {!! $scholars -> Links() !!}
</div>

@endsection
