@extends('admin.admin-layout')
@section('main-content')
<div id="page-inner">

    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default chartJs">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Line Chart</div>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="line-chart" class="chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default chartJs">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Bar Chart</div>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="bar-chart" class="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default chartJs">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Radar Chart</div>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="radar-chart" class="chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default chartJs">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Polar Area Chart</div>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="polar-area-chart" class="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default chartJs">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Pie & Doughnut Chart</div>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="pie-chart" class="chart"></canvas>
                </div>
            </div>
        </div>

             <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default chartJs">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Line Chart</div>
                    </div>
                </div>
                  <div class="panel-body">
                     <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                </div>
            </div>
        </div>
    </div>


 <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
</div>
<!-- /. PAGE INNER  -->
</div>
<script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- Chart Js -->
    <script type="text/javascript" src="/js/Chart.min.js"></script>
    <script type="text/javascript" src="/js/chartjs.js"></script>
     <!-- Morris Chart Js -->
     <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script>
      <!-- Custom Js -->
    <script src="js/custom-scripts.js"></script>
@endsection
