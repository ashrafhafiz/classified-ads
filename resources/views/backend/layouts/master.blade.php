<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/template/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/css/style.css') }}">
    @yield('custom-css')
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/template/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        @include('backend.layouts.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            @include('backend.layouts.sidebar')
            <!-- partial -->

            {{-- main-panel starts --}}
            <div class="main-panel">

                @yield('content')

                <!-- partial:partials/_footer.html -->
                @include('backend.layouts.footer')
                <!-- partial -->

            </div>
            <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    {{-- <script src="{{ asset('admin/template/vendors/base/jquery-3.5.1.js') }}"></script> --}}
    <script src="{{ asset('admin/template/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('admin/template/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/template/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/template/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/template/js/data-table.js') }}"></script>
    <script src="{{ asset('admin/template/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/template/js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('admin/template/js/jquery.cookie.js') }}"></script>

    @yield('custom-script')

    <script src="{{ asset('js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}

</body>

</html>
