<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">INFORMATIKA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <img src="{{ asset('/img/house.svg') }}" alt="" style="margin-right: 5px; color: white; height: 24px; width: 24px; filter: brightness(0) invert(1);">
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="{{asset('img/book.svg')}}" alt="" style="margin-right: 6px; height: 24px; width: 24px; filter: brightness(0) invert(1);">
                        <p>
                            Informasi Perkuliahan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('jadwal-1')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>semester1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('jadwal-3')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>semester3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('jadwal-5')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>semester5</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('jadwal-7')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>semester7</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kalender')}}" class="nav-link">
                        <img src="{{asset('img/kalender.svg')}}" alt="" class="icon-white" style="width: 24px; height: 24px; margin-right:6px; filter: brightness(0) invert(1);">
                        <p>
                            Calendar
                        </p>
                        <span class="right badge badge-danger">New</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nama-dosen')}}" class="nav-link">
                        <img src="{{asset('img/people.svg')}}" alt="" class="icon-white" style="width: 24px; height: 24px; margin-right:6px; filter: brightness(0) invert(1);">
                        <p>
                            Nama Dosen
                            <span class="right badge badge-danger">New</span>
                        </p>
                        <span class="right badge badge-danger">New</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galery')}}" class="nav-link">
                        <img src="{{ asset('img/image.svg') }}" alt="" style="margin-right: 5px; height: 24px; width: 24px; filter: brightness(0) invert(1);">
                        <p>
                            Galery
                        </p>
                        <span class="right badge badge-danger">New</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news')}}" class="nav-link">
                    <img src="{{asset('img/mail.svg')}}" alt="" class="icon-white" style="width: 24px; height: 24px; margin-right:6px; filter: brightness(0) invert(1);">
                        <p>
                            News
                        </p>
                        <span class="right badge badge-danger">New</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('aboutme')}}" class="nav-link">
                        <img src="{{ asset('img/about.svg') }}" alt="" style="margin-right: 5px; height: 24px; width: 24px; filter: brightness(0) invert(1);">
                        <p>
                            About Me
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout')}}" class="nav-link">
                        <img src="{{asset('img/logout.svg')}}" alt="" style="width: 24px; height: 24px; margin-right:6px; filter: brightness(0) invert(1);">
                        <p>
                            Log-Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">