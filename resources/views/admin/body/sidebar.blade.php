<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('backend/assets/images/users/profile.png')}}" alt="user" class="w-100" /> </div>

            <!-- User profile text-->
            <div class="profile-text pt-1">
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    @if (Auth::user()->account_type == 'staff')
                        Staff Name: 
                    @elseif(Auth::user()->account_type == 'agent')
                        Agent Name: 
                    @else
                        Client Name:
                @endif
                    {{Auth::user()->name}}</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i>
                        My Profile</a>
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My
                        Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if (Auth::user()->account_type == 'staff')
                    @include('admin.body.staff_sidebar')
                @elseif(Auth::user()->account_type == 'agent')
                    @include('admin.body.agent_sidebar')
                @else
                    @include('admin.body.client_sidebar')
                @endif
                

                
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin.logout')}}" aria-expanded="false"><i
                            class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
