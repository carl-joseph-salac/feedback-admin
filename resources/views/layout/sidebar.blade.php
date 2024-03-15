<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
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
                @yield('active')
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
