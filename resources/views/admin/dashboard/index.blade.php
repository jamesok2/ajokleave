
@extends('admin.layout.master')
@section('customStyle')
    <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
@endsection

@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard </h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
            @can('isAdmin')
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card card-hover panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                    <i class="fa fa-comments fa-6x"></i>

                                </div>
                                <div class="col-xs-9 text-right">

                                    <div class="huge">{{ $users->total() }}</div>

                                    <div>Total employees</div>

                                </div>

                        </div>
                    </div>
                        <a href="{{route('user')}}">
                            <div class="panel-footer">

                                <span class="pull-left">View Details</span>

                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>

                            </div>
                        </a>
                </div>
                </div>
                @else
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-hover panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">

                                        <i class="fa fa-calculator fa-6x"></i>

                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div class="huge">20</div>

                                        <div>Leave Balance</div>

                                    </div>

                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">

                                    <span class="pull-left">View Details</span>

                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>

                                </div>
                            </a>
                        </div>
                    </div>
                @endcan

                <!-- Column card card-hover panel-green-->
                <div class="col-lg-3 col-md-6">

                    <div class="card card-hover panel-green box bg-danger text-center">

                        <div class="panel-heading font-light text-white">

                            <div class="row">

                                <div class="col-xs-3">

                                    <i class="fa fa-tasks fa-5x"></i>

                                </div>

                                <div class="col-xs-9 text-right">

                                    <div class="huge">5</div>

                                    <div>Pending Tasks!</div>

                                </div>

                            </div>

                        </div>

                        <a href="#">

                            <div class="panel-footer">

                                <span class="pull-left">View Details</span>

                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>

                            </div>

                        </a>

                    </div>

                </div>

                <!-- Column card card-hover panel-red-->

                <div class="col-lg-3 col-md-6">

                    <div class="card card-hover panel-red box bg-warning text-center">

                        <div class="panel-heading font-light text-white">

                            <div class="row">

                                <div class="col-xs-3">

                                    <i class="fa fa-support fa-5x"></i>

                                </div>

                                <div class="col-xs-9 text-right">

                                    <div class="huge">13</div>

                                    <div class="text-white">Pending leaves!</div>

                                </div>

                            </div>

                        </div>

                        <a href="#">

                            <div class="panel-footer">

                                <span class="pull-left">View More</span>

                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>

                            </div>

                        </a>

                    </div>

                </div>



                {{--<div class="col-md-6 col-lg-2 col-xlg-3">--}}
                    {{--<div class="card card-hover">--}}
                        {{--<div class="box bg-cyan text-center">--}}
                            {{--<h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>--}}
                            {{--<h5 class="m-b-0 m-t-5 text-white">6</h5>--}}
                            {{--<h6 class="text-white">Pending leaves</h6>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-lg-3 col-md-6">

                    <div class="card card-hover box bg-green text-center">

                        <div class="panel-heading">

                            <div class="row">

                                <div class="col-xs-3">

                                    <i class="fa fa-rocket fa-5x"></i>

                                </div>

                                <div class="col-xs-9 text-right">

                                    <div class="huge">13</div>

                                    <div>On leave!</div>

                                </div>

                            </div>

                        </div>

                        <a href="#">

                            <div class="panel-footer">

                                <span class="pull-left">View More</span>

                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Calendar</h4>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer text-center">
            <strong>Copyright © 2019 <a href="#">AJOKcomputers</a>.</strong> All rights reserved.
        </footer>

    </div>

@endsection

@section('js')

    <script src="{{asset('admin-panel/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/pages/chart/chart-page-init.js')}}"></script>

    <script src="{{asset('admin-panel/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/pages/calendar/cal-init.js')}}"></script>

    @endsection
