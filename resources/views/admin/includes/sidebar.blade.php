
<aside class="left-sidebar" data-sidebarbg="skin5" style="background-color: #0c5460;">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" >
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" >
            <ul id="sidebarnav" class="p-t-30" style="background-color: #0c5460;">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                @can('isAdmin')
                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('employee')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Employee Management</span></a></li>--}}
                @endcan
                   @can('isAdmin')
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('user')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">User Management</span></a></li>--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{route('user')}}" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">User Management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level" style="background-color: #0f74a8;">
                        <li class="sidebar-item"><a href="{{route('user')}}" class="sidebar-link"><i class="mdi mdi-account-check"></i><span class="hide-menu"> User Details </span></a></li>
                        <li class="sidebar-item"><a href="{{route('user.create')}}" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Add User </span></a></li>
                    </ul>
                </li>
                @endcan

                @can('isAdmin')
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-information"></i><span class="hide-menu">Manage Information</span></a>
                    <ul aria-expanded="false" class="collapse  first-level" style="background-color: #0f74a8;">
                        <li class="sidebar-item"><a href="{{route('designation')}}" class="sidebar-link"><i class="mdi mdi-account-settings"></i><span class="hide-menu"> User Designations </span></a></li>
                        <li class="sidebar-item"><a href="{{route('department')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Department </span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('salary')}}" class="sidebar-link"><i class="mdi mdi-bank"></i><span class="hide-menu"> Salary </span></a></li>--}}
                        <li class="sidebar-item"><a href="{{route('city')}}" class="sidebar-link"><i class="mdi mdi-city"></i><span class="hide-menu"> City </span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('shift')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Shift </span></a></li>--}}
                    </ul>
                </li>
                @endcan

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bus"></i><span class="hide-menu">Leave management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level" style="background-color: #0f74a8;">
                        @can('isEmployee')
                        <li class="sidebar-item"><a href="{{route('leave.create')}}" class="sidebar-link"><i class="mdi mdi-wallet-travel"></i><span class="hide-menu">Apply Leave</span></a></li>
                        @endcan
                        <li class="sidebar-item"><a href="{{route('leave')}}" class="sidebar-link"><i class="mdi mdi-history"></i><span class="hide-menu">Requested Leaves</span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('total-leave')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Total leave list</span></a></li>--}}
                    </ul>
                </li>

                {{--<li class="sidebar-item"><a href="{{route('event')}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>--}}
                <li class="sidebar-item"><a href="{{route('calendar')}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>


                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('download')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Downloads</span></a></li>--}}

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings-box"></i><span class="hide-menu">Settings</span></a>
                    <ul aria-expanded="false" class="collapse  first-level" style="background-color: #0f74a8;">
                        <li class="sidebar-item"><a href="{{route('profile')}}" class="sidebar-link"><i class="mdi mdi-account-card-details"></i><span class="hide-menu"> My profile </span></a></li>
                        <li class="sidebar-item"><a href="{{route('change.password')}}" class="sidebar-link"><i class="mdi mdi-textbox"></i><span class="hide-menu"> Change Password </span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>