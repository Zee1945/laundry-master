        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

                <div class="sidebar-brand-text mx-3">LAUNDRY Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Pelanggan -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('task')}}">
                    <i class="fas fa-fw fa-hotel"></i>
                    <span>List Pelanggan</span></a>
            </li>
            <!-- Nav Item - Harga -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('jenis')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Harga Laundry</span></a>
            </li>



            <hr class="sidebar-divider">




            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
