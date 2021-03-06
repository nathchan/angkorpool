@employee
    <div class="page-sidebar collapse-menu desktop hidden-md-down open">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('job.search') }}"><i class="fa fa-search"></i><span>Search Jobs</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('job.alert') }}"><i class="fa fa-newspaper-o"></i><span>Job alerts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee.applied.jobs') }}"><i class="fa fa-file-o"></i><span>Application History</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
            </li>
            <li class="nav-item expand">
                <a class="nav-link clearfix" href="#">
                    <i class="fa fa-cog"></i>
                    <span>Setting</span>
                    <span class="arrow"><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="sub-menu nav">
                    <li class="nav-item"><a href="{{ route('employee.profile') }}" class="nav-link ">Profile</a></li>
                    <li class="nav-item"><a href="#" class="nav-link ">Change Password</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
    <div class="page-sidebar collapse-menu mobile hidden-lg-up">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('job.search') }}"><i class="fa fa-search"></i><span>Search Jobs</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('job.alert') }}"><i class="fa fa-newspaper-o"></i><span>Job alerts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee.applied.jobs') }}"><i class="fa fa-file-o"></i><span>Application History</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
            </li>
            <li class="nav-item expand">
                <a class="nav-link clearfix" href="#">
                    <i class="fa fa-cog"></i>
                    <span>Setting</span>
                    <span class="arrow"><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="sub-menu nav">
                    <li class="nav-item"><a href="{{ route('employee.profile') }}" class="nav-link ">Profile</a></li>
                    <li class="nav-item"><a href="#" class="nav-link ">Change Password</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
@endemployee
@employer
    <div class="page-sidebar collapse-menu desktop hidden-md-down">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('employer.jobs') }}"><i class="fa fa-bolt"></i><span>Jobs Posted</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-file-o"></i><span>Applied Candidates</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
    <div class="page-sidebar collapse-menu mobile hidden-lg-up">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('employer.jobs') }}"><i class="fa fa-bolt"></i><span>Jobs Posted</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-file-o"></i><span>Applied Candidates</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
@endemployer
