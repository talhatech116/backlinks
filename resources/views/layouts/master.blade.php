<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Velzon - Admin & Dashboard Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <script src="{{ URL::asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ URL::asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    

    <script src="{{  URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="{{  URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins.js')}}"></script>
    <!-- prismjs plugin -->
    <script src="{{ URL::asset('assets/libs/prismjs/prism.js')}}"></script>

    <script src="{{ URL::asset('assets/js/app.js')}}"></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico')}}">
    @include('layouts.head-css')
    <style>
        .stylish-tabs .nav-link.active {
    background-color: #405189 ; /* Change the color to your preferred color */
    color: #fff; /* Change the text color to contrast with the background */
    border-color: #405189; /* Change the border color if needed */
}
    </style>

    
</head>

@section('body')
    @include('layouts.body')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                    @include('layouts.footer')
                </div>

            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    @include('layouts.customizer')

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
</body>

</html>
