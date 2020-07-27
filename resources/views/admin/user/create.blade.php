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

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Admin Manager</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('user')}}">User</a></li>
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
                        <form action="{{route('user.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Add New User</h4>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter a user name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input">
                                            <label class="custom-file-label">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="role" class="form-control" id="role" placeholder="Choose role">
                                            <option value="admin">Employee</option>
                                            <option value="employee">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone number</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="gender" class="form-control" id="gender" placeholder="Gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 text-right control-label col-form-label">Date of birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" min="{{date('Y-m-d')}}" name="dob" class="form-control" id="dob">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 text-right control-label col-form-label">Age</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="age" class="form-control"  id="age">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jdate" class="col-sm-3 text-right control-label col-form-label">Join date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="jdate" class="form-control" id="jdate" placeholder="Join date">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="jtype" class="col-sm-3 text-right control-label col-form-label">Job type</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="jtype" class="form-control" id="jtype" placeholder="Choose Job Class">
                                            <option value="admin">Academic</option>
                                            <option value="employee">Non-academic</option>
                                            <option value="employee">Administration</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 text-right control-label col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="city" class="form-control" id="city" placeholder="City name">
                                            {{--@foreach ($empcities as $empcity)--}}
                                                {{--<option>{{$empcity->city_name}}</option>--}}
                                            {{--@endforeach--}}
                                            <option value="Morogoro">Morogoro</option>
                                            <option value="Arusha">Arusha</option>
                                            <option value="Songea">Songea</option>
                                            <option value="Dodoma">Dodoma</option>
                                        </select>
                                    </div>
                                </div>

                                {{--<div class="form-group row">--}}
                                    {{--<label for="lname" class="col-sm-3 text-right control-label col-form-label">Status</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                        {{--<input type="text" name="status" class="form-control" placeholder="Status">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group row">
                                    <label for="status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select type="text" status="gender" class="form-control" id="status" placeholder="Status">
                                            <option value="0">Inactive</option>
                                            <option value="1">active</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer text-center">
            .
        </footer>
    </div>

    @endsection
@section('js')
    <script>
        $("#currentDate").change(function () {
            var dob = new Date($('#birthDate').val());
            // var CurrDate = new Date($('#currentDate').val());
            var CurrDate = new Date();

            var diff = new Date(CurrDate - dob);
            var days;
            days = diff / 1000 / 60 / 60 / 24;

            // $('#TotalDays').val(days);
            if (days == NaN) {
                $('#age').val(0);
            } else {
                $('#age').val(days+1);
            }
        })

        $("#FromDate").change(function () {
            var dob = new Date($('#FromDate').val());
            // var end = new Date($('#ToDate').val());
            var CurrDate = new Date();

            var diff = new Date(CurrDate - dob);
            var days;
            days = diff / 1000 / 60 / 60 / 24;

            // $('#TotalDays').val(days);
            if (days == NaN) {
                $('#age').val(0);
            } else {
                $('#age').val(days+1);
            }
        })
    </script>
@endsection