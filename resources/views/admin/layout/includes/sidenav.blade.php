{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current">
                <a href=""><i class="glyphicon glyphicon-home"></i>Dashboard</a>
            </li>
            @if(Auth::user()->top==1)
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Restrict List
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('restrict.index')}}">View all restricted Sites</a></li>
                        <li><a href="{{route('restrict_request')}}">View requests from Admin</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> User Manage
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('user_request_list')}}">Accept Admin</a></li>
                    </ul>
                </li>


                @if(Auth::user()->name=="Test")  {{-- please delete this if statement in release version! --}}
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Collecting Search Word
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('search_keyword_list')}}">Search KeyWords</a></li>
                        <li><a href="{{route('freq_keyword_list')}}">Frequently Searched Keyword</a></li>
                    </ul>
                </li>
                @endif                                 {{-- this too delete in release version! --}}



            @else

                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Report Restricted URL
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('make_report')}}">Make Report</a></li>
                    </ul>
                </li>

            @endif

                

     {{--        <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
                    <li><a href="{{url('admin/orders/')}}">All Orders</a></li>

                </ul>
            </li> --}}
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->