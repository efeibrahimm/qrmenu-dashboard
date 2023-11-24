<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top">
    <ion-icon name="arrow-up-outline"></ion-icon>
</a>
<!--End Back To Top Button-->

<!--start switcher-->
<!--end switcher-->


<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

</div>
<!--end wrapper-->


<!-- JS Files-->
<script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!--plugins-->
<script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/easyPieChart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/index.js') }}"></script>

<script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/table-datatable.js') }}"></script>
<!-- Main JS-->
<script src="{{ asset('dashboard/assets/js/main.js') }}"></script>
{{-- <script>
         CKEDITOR.replace( 'editor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script> --}}

</body>

</html>
