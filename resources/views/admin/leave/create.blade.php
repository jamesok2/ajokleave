@extends('admin.layout.master')

@section('content')

    @include('admin.includes.sidebar')

    <div class="page-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Leave Management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('leave.create')}}">Leave</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <form action="{{route('leave.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Apply Leave</h4>
                                <div class="form-group row">
                                    <label for="leave_type" class="col-sm-3 text-right control-label col-form-label">Leave type</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="leave_type" class="form-control" id="leave_type" placeholder="Choose Leave">
                                            {{--<select type="text" name="designation" class="form-control" id="designation" placeholder="Assign Designation">--}}
                                            @foreach($leaveTypes as $leaveType)
                                                <option value="{{$leaveType->name}} {{ old('$leaveType') ? 'selected' : '' }}">{{$leaveType->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="date_from" class="col-sm-3 text-right control-label col-form-label">Date from</label>
                                    <div class="col-sm-4">
                                        <input type="date" min="{{date('Y-m-d')}}" name="date_from" class="form-control" id="FromDate">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="date" name="date_to" class="form-control" id="ToDate">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="days" class="col-sm-3 text-right control-label col-form-label">Days</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="days" class="form-control" id="TotalDays" placeholder="Number of leave days">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="destination" class="col-sm-3 text-right control-label col-form-label">Destination</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="destingation" class="form-control" id="destination" placeholder="Destination">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="reason" class="col-sm-3 text-right control-label col-form-label">Reason</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="reason" class="form-control" id="reason" placeholder="Choose reason">
                                            <option value="Official">Official</option>
                                            <option value="Private">Private</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="actingStaff" class="col-sm-3 text-right control-label col-form-label">Acting Staff</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="actingStaff" class="form-control" id="actingStaff" placeholder="Who will take care of your duties?">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="description" class="form-control" placeholder="More Explanations">
                                        </textarea></div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <footer class="footer text-center">
                <strong>Copyright © 2019 <a href="#">AJOKcomputers</a>.</strong> All rights reserved.
            </footer>>

    </div>

@endsection

@section('js')
    <script>
        $("#ToDate").change(function () {
            var start = new Date($('#FromDate').val());
            var end = new Date($('#ToDate').val());

            var diff = new Date(end - start);
            var days=1;
            days = diff / 1000 / 60 / 60 / 24;

            // $('#TotalDays').val(days);
            if (days == NaN) {
                $('#TotalDays').val(0);
            } else {
                $('#TotalDays').val(days+1);
            }
        })

        $("#FromDate").change(function () {
            var start = new Date($('#FromDate').val());
            var end = new Date($('#ToDate').val());

            var diff = new Date(end - start);
            var days=1;
            days = diff / 1000 / 60 / 60 / 24;

            // $('#TotalDays').val(days);
            if (days == NaN) {
                $('#TotalDays').val(0);
            } else {
                $('#TotalDays').val(days+1);
            }
        })
    </script>

    {{--for logout--}}
    <script src="{{asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    @endsection