@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">

        @include('admin.includes.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">

                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Calendar</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <h4 class="page-title">Calendar</h4>
                    <div class="jumbotron">
                        <div class="row">
                            @can('isAdmin')
                            <a href="{{url('calendar/add')}}" class="btn btn-success">Add events</a>
                            @endcan
                            {{--<a href="{{url('calendar/edit')}}" class="btn btn-warning">Edit events</a>--}}
                            {{--<a href="#" class="btn btn-danger">Delete events</a>--}}
                        </div><br>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background: #2e642e; color: white; font-size: x-large">
                                        Events calendar
                                    </div>
                                    <div class="panel-body">
                                        {!! $calendar->calendar() !!}
                                        {!! $calendar->script() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <footer class="footer text-center">
                <strong>Copyright © 2019 <a href="#">AJOKcomputers</a>.</strong> All rights reserved.
            </footer>>
        </div>
    </div>
@endsection
{{--for logout--}}
@section('js')
    <script src="{{asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@endsection