<!DOCTYPE html>
<html class="loaded {{ themesettings(Auth::id())->theme }}" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Digital Tech">

    <title>@yield('title')</title>


    <link rel="apple-touch-icon" href="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->favicon }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->favicon }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/semi-dark-layout.css') }}">

    {{-- toastr css --}}
    <link rel="stylesheet" type="text/css"  href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/pages/app-invoice-list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/pages/app-user.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/custom_css/style.css') }}">
    <!-- END: Custom CSS--> 

    @yield('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static menu-{{ themesettings(Auth::id())->nav }}" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle is-active" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
                </ul>
                
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de"></i> Bangla</a></div>
                </li>

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps ps--active-y"><a class="d-flex" href="javascript:void(0)">
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a>
                  
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div>
                          
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle avatar-icon"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 350px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 282px;"></div></div></li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block waves-effect waves-float waves-light" href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ ucfirst(Auth::user()->name) }}</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ Auth::user()->profile_photo_url }}" alt="Profile Photo" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ url('user/profile') }}"><i class="mr-50" data-feather="user"></i> Profile</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="mr-50" data-feather="power"></i>Logout</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        {{-- <span>
                            <img src="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->logo }}" style="max-width: 30px" alt="Logo">
                        </span> --}}
                        <h2 class="brand-text">Rajiur Rahman</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a id="toggle" class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ url('/') }}">
                        <i data-feather='eye'></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboards">View Website</span>
                    </a>

                </li>

                <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('dashboard')">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        <i data-feather='database'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='user-check'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">User Role</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('user_role.index')">
                            <a class="d-flex align-items-center" href="{{ route('user_role') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
    
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='user-check'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Users</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('users')">
                            <a class="d-flex align-items-center" href="{{ route('users.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='user-check'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Employees</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('employees.index')">
                            <a class="d-flex align-items-center" href="{{ route('employees.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li class="employees.create">
                            <a class="d-flex align-items-center" href="{{ route('employees.create') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @yield('admin.view.attendance')">
                    <a class="d-flex align-items-center" href="{{ route('admin.view.attendance') }}">
                        <i data-feather='eye'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice"> Attendance <span id="emp_everyday_attendance_count">  </span></span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='user-check'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Products</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('products.index')">
                            <a class="d-flex align-items-center" href="{{ route('products.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li class="@yield('products.create')">
                            <a class="d-flex align-items-center" href="{{ route('products.create') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item @yield('contacts')">
                    <a class="d-flex align-items-center" href="{{ route('contacts.index') }}">
                        <i data-feather='user-plus'></i>
                        <span class="menu-title text-truncate">Conacts</span>
                    </a>
                </li>
                <li class="nav-item @yield('subscribers')">
                    <a class="d-flex align-items-center" href="{{ route('subscribers.index') }}">
                        <i data-feather='users'></i>
                        <span class="menu-title text-truncate">Subcribers</span>
                    </a>
                </li>

                {{-- Site Settings --}}
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Site Settings</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('generalSettings')">
                    <a class="d-flex align-items-center" href="{{ route('generalSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">General Settings</span>
                    </a>
                </li>
                <li class="nav-item @yield('colorSettings')">
                    <a class="d-flex align-items-center" href="{{ route('colorSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">Color Settings</span>
                    </a>
                </li>
                <li class="nav-item @yield('socialurls')">
                    <a class="d-flex align-items-center" href="{{ route('socialurls.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">Social Urls</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('breadcrumb')
                            {{-- <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Layouts</a>
                                    </li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block">
                    <div class="form-group breadcrumb-right">
                        
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                    {{-- Content Start From Here --}}
                        @yield('content')
                    {{-- Content End Here --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="#" target="_blank">Dgtaltech</a>
                <span class="d-none d-sm-inline-block">, All rights Reserved</span>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    @stack('all_modals')
    
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->

    <script src="{{ asset('dashboard_assets/app-assets/js/core/app-menu.js') }}"></script>

    @yield('js')

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
    @endif

    @if (session()->get('danger'))
    <script>
        toastr.error('{{ session()->get('error') }}');
    </script>
    @endif

    @if (session()->get('success'))
    <script>
        toastr.success('{{ session()->get('success') }}');
    </script>
    @endif

    <script>

        $(document).ready(function(){
            $('#dark').click(function(){
                 $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('theme.color') }}", 
                        type: "GET", 
                        success: function(data)
                        {
                        }
                    })


            });
        })
      
    </script>
    <script>
        $(document).ready(function(){
            $('#toggle').click(function(){

                // Ajax Setup
                 $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('theme.toggle') }}", 
                        type: "GET", 
                        success: function(data)
                        {
                        }
                    })


            });
        })
      
    </script>


    <script src="{{ asset('dashboard_assets/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/pages/app-user-view.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();
        } );
    </script>
    
</body>
<!-- END: Body-->

</html>