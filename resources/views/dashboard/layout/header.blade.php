<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- loader-->
    <link href="{{ asset('dashboard/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('dashboard/assets/js/pace.min.js') }}"></script>
    <link href="{{ asset('dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    <!--plugins-->
    <link href="{{ asset('dashboard/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <!--Theme Styles-->
    <link href="{{ asset('dashboard/assets/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/css/header-colors.css') }}" rel="stylesheet" />

    <title>Admin Panel</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">

                <img src="{{ asset('/images/bordo.png') }}" class="logo-icon" alt="logo icon" style="width:100%">
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/admin">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Menu</li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="leaf-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Menu </div>
                    </a>
                    <ul>
                        <li> <a href="/admin/hizmetler">
                                <ion-icon name="ellipse-outline"></ion-icon>Show All
                            </a>
                        </li>
                        <li> <a href="/admin/hizmetler/add">
                                <ion-icon name="ellipse-outline"></ion-icon>Add New
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:;">
                                <div class="parent-icon">
                                    <ion-icon name="leaf-outline"></ion-icon>
                                </div>
                                <div class="menu-title">Category</div>
                            </a>
                            <ul>
                                <li> <a href="/admin/hizmetler/kategori">
                                        <ion-icon name="ellipse-outline"></ion-icon>Show All
                                    </a>
                                </li>
                                <li> <a href="/admin/hizmetler/kategori/add">
                                        <ion-icon name="ellipse-outline"></ion-icon>Add New
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">General</li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </div>
                        <div class="menu-title">General</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/videos">
                                <ion-icon name="ellipse-outline"></ion-icon>Video Popup
                            </a>
                        </li>
                        <li> <a href="/admin/feedback">
                                <ion-icon name="ellipse-outline"></ion-icon>Feedback
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- <li class="menu-label">Managment</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Users Managment</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/kullanicilar">
                                <ion-icon name="ellipse-outline"></ion-icon>Show All Users
                            </a>
                        </li>
                        <li> <a href="/admin/kullanicilar/add">
                                <ion-icon name="ellipse-outline"></ion-icon>Add New
                            </a>
                        </li>
                </li> --}}
            </ul>



            </li>

            <div style="height: 50vh; display:flex; justify-content:center; align-items:center"> <img src="{{ asset('/images/carbon.svg') }}" class="logo-icon" alt="logo icon" style="width:100%">
            </div>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="toggle-icon">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">

                        <li class="nav-item">
                            <a class="nav-link dark-mode-icon" href="javascript:;">
                                <div class="mode-icon">
                                    <ion-icon name="moon-outline"></ion-icon>
                                </div>
                            </a>
                        </li>


                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <img src="{{ asset('dashboard/assets/images/avatars/06.png') }}" class="user-img"
                                        alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <img src="{{ asset('dashboard/assets/images/avatars/06.png') }}"
                                                alt="" class="rounded-circle" width="54" height="54">
                                            <div class="">
                                                <h6 class="mb-0 dropdown-user-name">Admin</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">Super
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>


                                <li>
                                    <a class="dropdown-item" href="/admin/logout">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="log-out-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </nav>
        </header>
        <!--end top header-->
