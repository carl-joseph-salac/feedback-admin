<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('CC') }}" class="brand-link">
        <img src="{{ asset('images/deped-calabarzon-logo.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="">
        <span class="brand-text font-weight-light"><b>Feedback Admin</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-1 mb-3 pb-0 d-flex justify-content-center">
            <div class="info py-0">
                <span class="text-white"><b>Department of Education</b></span>
                <p class="text-white mb-2 mt-1">Region IV-A Calabarzon</p>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item {{
                    (strpos(Route::currentRouteName(), 'CC') === 0 || strpos(Route::currentRouteName(), 'SQD') === 0) ? 'menu-is-opening menu-open' :
                    (strpos(Route::currentRouteName(), 'CC') === false && strpos(Route::currentRouteName(), 'SQD') === false ? '' : '')
                    }}">
                    <a href="" class="nav-link {{
                        (strpos(Route::currentRouteName(), 'CC') === 0 || strpos(Route::currentRouteName(), 'SQD') === 0) ? 'active' :
                        (strpos(Route::currentRouteName(), 'CC') === false && strpos(Route::currentRouteName(), 'SQD') === false ? '' : '')
                    }}">

                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('CC') }}" class="nav-link {{ strpos(Route::currentRouteName(), 'CC') === 0 ? 'active' : (strpos(Route::currentRouteName(), 'CC') === false ? '' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CC</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('SQD') }}" class="nav-link {{ strpos(Route::currentRouteName(), 'SQD') === 0 ? 'active' : (strpos(Route::currentRouteName(), 'SQD') === false ? '' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SQD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Suggestion</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('report') }}" class="nav-link {{ strpos(Route::currentRouteName(), 'report') === 0 ? 'active' : (strpos(Route::currentRouteName(), 'report') === false ? '' : '') }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Report
                            <i class="right fas"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://20.20.23.71:8000/feedback-client/public/feedback?logsNumber=2024-00001"
                        class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Feedback Client
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
