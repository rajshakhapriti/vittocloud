<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN CSS FILES -->
    @include('Admin.include.style')
    @yield('styles')
    <!-- END CSS FILES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed page-quick-sidebar-over-content ">
    <!-- BEGIN HEADER -->
    @include('Admin.include.header')
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        <div class="page-content-wrapper">
            <div class="page-content">

                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                    @yield('page_title')
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="{{ url('admin/dashboard') }}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        @yield('breadcum')

                    </ul>

                </div>
                <div class="loading hide" id="addRepresentiveLoader">
                    <img src="{{ asset('resources/admin-assets/img/page-loader.gif') }}" width="70px" />
                </div>
                <!--  <input name="id" value="" type="hidden" id="getloadclose"> -->
                <!-- Begin Page Content -->
                @yield('content')
                <!-- End Page Content -->
            </div>
        </div>
    </div>
    <!-- BEGIN FOOTER -->
    @include('Admin.include.footer')
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    @include('Admin.include.script')
    @yield('scripts')
    <!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->

</html>