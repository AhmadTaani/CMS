<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    {{--    <!-- Google Font: Source Sans Pro -->--}}
    {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
    {{--    <!-- Font Awesome Icons -->--}}
    {{--    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">--}}
    {{--    <!-- Theme style -->--}}
    {{--    <link rel="stylesheet" href="dist/css/adminlte.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('/')}}" class="nav-link">Home</a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">Admin Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard.index')}}"
                           class="nav-link @if( Route::currentRouteName() == 'admin.dashboard.index') active @endif">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item @if(Request::segment(2) == 'user') menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>
                                Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('admin.user.create')}}"--}}
{{--                                   class="nav-link @if( Route::currentRouteName() == 'admin.user.create') active @endif">--}}
{{--                                    <i class="nav-item fas fa-plus"></i>--}}
{{--                                    <p>Create Admin</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li class="nav-item">
                                <a href="{{route('admin.user.index')}}"
                                   class="nav-link @if( Route::currentRouteName() == 'admin.user.index') active @endif">
                                    <i class="nav-item fas fa-list"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(Request::segment(2) == 'category') menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-sitemap"></i>
                            <p>
                                Categories
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.category.create')}}"
                                   class="nav-link @if( Route::currentRouteName() == 'admin.category.create') active @endif">
                                    <i class="nav-item fas fa-plus"></i>
                                    <p>Create Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.category.index')}}"
                                   class="nav-link @if( Route::currentRouteName() == 'admin.category.index') active @endif">
                                    <i class="nav-item fas fa-list"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.complaint.index')}}"
                           class="nav-link @if( Route::currentRouteName() == 'admin.complaint.index') active @endif">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Complaints
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Sign Out
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <div class="content">
            <!--  BEGIN CONTENT AREA  -->
            @yield('content')
            <!--  END CONTENT AREA  -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Complaint Management System</strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
