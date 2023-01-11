<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Buku Kas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
    @include('layouts._dashboard.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts._dashboard.sidenav')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
            @yield('content')
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts._dashboard.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('template/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('template/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('template/js/off-canvas.js')}}"></script>
  <script src="{{asset('template/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('template/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('template/js/dashboard.js')}}"></script>
  <script src="{{asset('template/js/data-table.js')}}"></script>
  <script src="{{asset('template/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('template/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->

  <script src="{{asset('template/js/jquery.cookie.js')}}" type="text/javascript"></script>
</body>

</html>

