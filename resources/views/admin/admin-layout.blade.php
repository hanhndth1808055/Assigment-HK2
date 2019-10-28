<!DOCTYPE html>
<!--
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="webthemez" name="author"/>
    <base href="{{asset('')}}">
    <title>EduPan | Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/edu-logo.jpg"/>

    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet"/>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1ed7b1f4b0.js" crossorigin="anonymous"></script>
    <style>
        .btn-edit-seminar {
            border: none;
            padding: 5px;
            background-color: DodgerBlue;
        }

        .btn-edit-seminar:hover {
            background-color: RoyalBlue;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="background:#000" class="navbar-brand" href="index.html"><strong><img src="images/logo.png" alt="">
                    EduPan</strong></a>
            <div id="sideNav" href="">
                <i class="fa fa-bars icon"></i>
            </div>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Doe</strong>
                                <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the...'</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">28% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                        <span class="sr-only">28% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">85% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                        <span class="sr-only">85% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                @guest
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif<i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                 --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" style="color:#f36a5a !important"
                           class="nav-link dropdown-toggle text-capitalize" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right text-center" style="color:#f36a5a !important"
                             aria-labelledby="navbarDropdown">
                            <i class="fa fa-sign-out fa-fw"></i><a style="color:#f36a5a !important"
                                                                   class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
            <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                {{--   <li>
                   <a href="ui-elements.html"><i class="fa fa-desktop"></i> UI Elements</a>
               </li>

               <li>
                   <a href="#"><i class="fa fa-sitemap"></i> Charts<span class="fa arrow"></span></a>
                   <ul class="nav nav-second-level">
                       <li>
                           <a href="admin.chart.html">Charts JS</a>
                       </li>
                       <li>
                           <a href="morris-chart.html">Morris Chart</a>
                       </li>
                   </ul>
               </li>
            <li>
                   <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
               </li>

               <li>
                   <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
               </li>
               <li>
                   <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
               </li> --}}


                {{-- <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i>Scholarship<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/scholars-ship') }}">List Scholarships</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/coment') }}">List Coment</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/listRegister') }}">List Register</a>
                        </li>
                        <li>
                            <a href="#">Form<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('admin/add-scholarship') }}">Add Scholarship</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/addunit') }}">Add Unit</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/addcountry') }}">Add Country</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope fa-fw"></i>Email Contact<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/listEmailContact') }}">Total</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/emailcontacted') }}">Contacted</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/emailnotcontacted') }}">Not Contacted</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/viewContact') }}"><i class="fa fa-envelope"></i>User Contact</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i>Research<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/listResearch') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Research</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/listLearnMoreResearch') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                 Learn More Research</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/listExpert') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Expert</a>
                        </li>

                        <li>
                            <a href="{{ url('admin/listFeedbackResearch') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Feedback Research</a>
                        </li>

                        <li>
                            <a href="{{ url('admin/trashResearch') }}">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                Recycle bin</a>
                        </li>

                        <li>
                            <a href="#">Form<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('admin/addResearch') }}">Add Research</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/addLearnMoreResearch') }}">Add Learn More Research</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/addExpert') }}">Add Expert</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i>Seminar<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/listSeminar') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Seminar</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Feedback</a>
                        </li>
                        <li>
                            <a href="{{url('admin/listSeminarRegister')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Register</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/listFeedbackSeminar') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Feedback Seminar</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/trashSeminar') }}">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                Recycle bin</a>
                        </li>
                        <li>
                            <a href="#">Form<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('admin/addSeminar') }}">Add Seminar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i>Partnership<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/listPartnership') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Partnership</a>
                        </li>
                        <li>
                            <a  href="{{ url('admin/listFeedbackPartnership') }}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                List Feedback </a>
                        </li>
                        <li>
                            <a href="{{url('admin/trashPartnership')}}">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                Recycle Bin</a>
                        </li>

                        <li>
                            <a href="#">Form<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('admin/addPartnership') }}">Add Partnership</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>



            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <!-- /. PAGE INNER  -->
        @yield('main-content')
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>

</body>
</html>
