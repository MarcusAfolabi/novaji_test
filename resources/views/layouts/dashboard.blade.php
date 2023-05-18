<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Novaji Introserve Admin </title>
    <link rel="stylesheet" href="{{ asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.html') }}">
    <link rel="stylesheet" href="{{ asset('back/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('back/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('back/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/css/vendor.bundle.base.css') }}">
</head>

<body>
    <div class="container-scroller">

        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="images/logo.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="images/logo-mini.svg" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{ auth()->user()->name }}</span></h1>
                        <h3 class="welcome-sub-text">Your performance summary this week </h3>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">


                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-bell"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 1 unread mails </p>
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </a>

                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="{{ asset(auth()->user()->profile_photo_url) }}" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="{{ asset(auth()->user()->profile_photo_url) }}" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                                <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>
                            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="">All product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">Add Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">Product Category</a></li>
                            </ul>
                        </div>

                </ul>
            </nav>
            @yield('dashboard')

            <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a href="https://www.webshoptechnology.com/" target="_blank">Made with Love</a> from Afolabi Marcus.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
        </div>
    </footer>
</div>
    <script src="{{ asset('back/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('back/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('back/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('back/js/off-canvas.js') }}"></script>
    <script src="{{ asset('back/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('back/js/template.js') }}"></script>
    <script src="{{ asset('back/js/settings.js') }}"></script>
    <script src="{{ asset('back/js/todolist.js') }}"></script>
    <script src="{{ asset('back/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/dashboard.js') }}"></script>
    <script src="{{ asset('back/js/Chart.roundedBarCharts.js') }}"></script>
</body>

</html>