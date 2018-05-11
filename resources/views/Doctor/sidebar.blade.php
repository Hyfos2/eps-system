<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">

        <nav>

            <!-- start: MAIN NAVIGATION MENU -->
            <div class="navbar-title">
                <span>Main Navigation</span>
            </div>
            <ul class="main-navigation-menu">
                <li>
                    <a href="{{url('doctor-dashboard')}}">
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
                                <span class="title">Patients</span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('add-patient')}}">
                                <span class="title"> Add Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('manage-patient')}}">
                                <span class="title"> Manage Patients</span>
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
                                <span class="title">Consultation</span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('new-requests/')}}">
                                <span class="title">New Appointment</span>

                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>