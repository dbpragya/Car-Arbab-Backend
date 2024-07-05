 <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Rentaly</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                            <img src="{{ asset('public/assets/images/avatars/avatar.png') }}">
                          
                            
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">{{ auth()->user()->name }}<br><span class="user-state-info"></span></span>
                        <!-- {{ auth()->user()->first_name }} -->
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <!-- logged in as admin view admindashbord-->
                     @if(auth()->check() && auth()->user()->type == 'admin')       
                    <li class="active-page">
                        <a href="{{ route('admin.dashboard')}}" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <!-- logged in as inspector view inspector dashbaord-->
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')
                    <li class="active-page">
                        <a href="{{ route('inspector.dashboard')}}" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                   @endif

                    <!-- logged in as admin view admin addcar-->
                   @if(auth()->check() && auth()->user()->type == 'admin')       
                    <li class="">
                        <a href="{{ route('admin.view_car') }}" class="active"><i class="material-icons-two-tone">person</i>Car Inspection </a>
                    </li>
                        <!-- logged in as inspector view inspector addcar-->
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')
                    <li class="">
                        <a href="{{ route('inspector.view_car') }}" class="active"><i class="material-icons-two-tone">person</i>Car Inspection </a>
                    </li>
                    @endif
                  
                    <!-- <li class="">
                        <a href=""><i class="material-icons-two-tone">person</i>Inspection Master<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                           
                            <li>
                                <a href="add-inspector.php">Add Inspector </a>
                            </li>
                            <li>
                                <a href="view-inspector.php">View Inspector </a>
                            </li>
                        </ul>
                    </li>
                     -->                
                     <!-- @php
                        $userType = auth()->user()->type;
                        dump($userType);
                    @endphp -->

                    @if(auth()->check() && auth()->user()->type !== 'inspector')       
                        <li class="">
                            <a href="{{ route('admin.view_inspector') }}" class="active"><i class="material-icons-two-tone">drive_eta</i>Inspection Master</a>
                        </li>
                    @endif

                    <!-- @if(auth()->check())
                        <li>
                            <a href="{{ auth()->user()->type == 1 ? route('admin.logout') : route('inspector.logout') }}">
                                <i class="material-icons-two-tone">logout</i>Logout
                            </a>
                        </li>
                    @endif -->
                    
                    
                    
                     <!--bidding activity-->
                     @if(auth()->check() && auth()->user()->type == 'admin')       
                    <li class="">
                        <a href="{{ route('admin.viewbidding') }}" class="active"><i class="material-icons-two-tone">person</i>Bidding Activity </a>
                    </li>
                        <!-- logged in as inspector view inspector addcar-->
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')
                   
                    @endif
                    
                     <!--transcaction history-->
                    @if(auth()->check() && auth()->user()->type == 'admin')       
                    <li class="">
                        <a href="{{ route('admin.transactionhistory') }}" class="active"><i class="material-icons-two-tone">person</i>Transaction History </a>
                    </li>
                        <!-- logged in as inspector view inspector addcar-->
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')
                   
                    @endif
                    
                     <!--tax management-->
                     @if(auth()->check() && auth()->user()->type == 'admin')       
                    <li class="">
                        <a href="{{ route('admin.tax') }}" class="active"><i class="material-icons-two-tone">person</i>Tax Management </a>
                    </li>
                        <!-- logged in as inspector view inspector addcar-->
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')
                   
                    @endif

                    <!-- logged in as admin -->
                    @if(auth()->check() && auth()->user()->type == 'admin')       
                      <li>
                        <a href="{{ route('admin.logout') }}"><i class="material-icons-two-tone">logout</i>Logout</a>
                    </li> 
                    <!-- logged in as inspector -->
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')
                    <li>
                        <a href="{{ route('inspector.logout') }}"><i class="material-icons-two-tone">logout</i>Logout</a>
                    </li> 
                    @endif

                </ul>
            </div>
        </div>