<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="{{ auth()->user()->dark_mode ? 'dark' : 'light' }}" data-sidebar="{{ auth()->user()->dark_mode ? 'dark' : 'light' }}"  data-bs-theme="{{ auth()->user()->dark_mode ? 'dark' : 'light' }}"  data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Admin | Conferences</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('themes/apps/assets/images/favicon.ico') }}">
    <!-- jsvectormap css -->
    <link href="{{ asset('themes/apps/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Swiper slider css-->
    <link href="{{ asset('themes/apps/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="{{ asset('themes/apps/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('themes/apps/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('themes/apps/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('themes/apps/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('themes/apps/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <x-admin.header></x-admin.header>
        <x-admin.sidebar></x-admin.sidebar>
        <div class="vertical-overlay"></div>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">{{ $title ?? 'Conferences System' }}</h4>
                            </div>
                        </div>
                    </div>
                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                       {{ date('Y') }}
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                               Djuanda University
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('themes/apps/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/apps/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('themes/apps/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('themes/apps/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('themes/apps/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ asset('themes/apps/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('themes/apps/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('themes/apps/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('themes/apps/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    @stack('scripts')
    <!-- Dashboard init -->
    <script src="{{ asset('themes/apps/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('themes/apps/assets/js/app.js') }}"></script>

</body>

</html>
