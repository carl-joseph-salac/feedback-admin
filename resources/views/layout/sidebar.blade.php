<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('images/deped-calabarzon-logo.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="">
        <span class="brand-text font-weight-light">Feedback Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE-3.2.0/dist/img/avatar5.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Carl Joseph Salac</a>
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
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @yield('active')
                    </ul>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link" id="home">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/welcome') }}" class="nav-link" id="laravel">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laravel Page</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="nav-item">
                    <a href="http://20.20.23.71:8000/feedback-client/public/feedback?logsNumber=2024-00001" class="nav-link">
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
