<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">

        <nav>

            <!-- start: MAIN NAVIGATION MENU -->
            <div class="navbar-title">
                <span>Main Navigation</span>
            </div>
            <ul class="main-navigation-menu">
                <li>
                    <a href="{{url('pharmacist-dashboard')}}">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title">Dashboard</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title">Drugs</span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('new-drug')}}">
                                <span class="title"> Add Drug</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('manage-drug')}}">
                                <span class="title"> Manage Drugs</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title">Prescriptions</span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('new-prescriptions')}}">
                                <span class="title">New Prescriptions </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('old-prescriptions')}}">
                                <span class="title">Old Prescriptions</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>