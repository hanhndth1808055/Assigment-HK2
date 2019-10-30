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
                        <span><a href="{{url('admin/campaigns/add')}}"><i class="fas fa-plus-circle"></i></a></span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Thumbnail</th>
                                    <th>Chairman</th>
                                    <th>Donation</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($campaigns as $campaign)
                                    <tr class="odd gradeX">
                                        <th>{{$campaign->id}}</th>
                                        <th>{{$campaign->name}}</th>
                                        <th><img src="{{$campaign->thumbnail}}" alt="None"></th>
                                        <th>{{$campaign->campaign_chairman}}</th>
                                        <th>{{$campaign->donation->sum('amount')}}</th>
                                        <th>{!! $campaign->short_description!!}</th>
                                        <th>{!! $campaign->long_description!!}</th>
                                        <th>{{$campaign->created_at->format('d/m/y')}}</th>
                                        <th><a href="{{url('admin/campaigns/update?id='.$campaign->id)}}"><span><i class="fas fa-pencil-alt"></i></span></a><span>    </span><a href="{{url('admin/campaigns/delete/'.$campaign->id)}}"><span><i class="fas fa-trash-alt"></i></span></a></th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
