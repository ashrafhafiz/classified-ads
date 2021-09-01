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
