@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">
    @include('admin.includes.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    {{--<li class="breadcrumb-item active" aria-current="page"><a href="{{route('employee')}}">Profile</a></li>--}}
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box box-success">
                            <div class="panel">

                                <div class="panel-heading">
                                    <span class="panel-title">Personal Details</span>
                                </div>
                                <div class="panel-body pn pb5">
                                    <hr class="short br-lighter">


                                    <div class="box-body no-padding">

                                        <table class="table">
                                            <tbody>
                                            {{--@foreach($users as $user)--}}

                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-address-card"></i>
                                                    </td>
                                                    <td><strong>Username</strong></td>
                                                    <td>{{$user->username}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Birthday</strong></td>
                                                    <td>{{$user->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-genderless"></i>
                                                    </td>
                                                    <td><strong>Gender</strong></td>
                                                    <td>{{$user->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-phone"></i>
                                                    </td>
                                                    <td><strong>Phone number</strong></td>
                                                    <td>{{$user->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-envelope-o"></i>
                                                    </td>
                                                    <td><strong>Email</strong></td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-calendar"></i>
                                                    </td>
                                                    <td><strong>Join date</strong></td>
                                                    <td>{{$user->join_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-map-marker"></i>
                                                    </td>
                                                    <td><strong>Address</strong></td>
                                                    <td>{{$user->address}}</td>
                                                </tr>
                                            {{--@endforeach--}}
                                            </tbody>
                                        </table>
                                        {{--{{ $users->links() }}--}}

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box box-success">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Payment Information</span>
                            </div>
                            <div class="panel-body pn pb5">
                                <hr class="short br-lighter">

                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>

                                        </tbody>
                                    </table>
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