<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('asset/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('asset/images/cbox.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      @include('Pages.layout.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('Pages.layout.sidebar')
        <!-- partial -->
        @yield('content')
     
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('asset/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('asset/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('asset/js/off-canvas.js')}}"></script>
    <script src="{{asset('asset/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('asset/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('asset/js/dashboard.js')}}"></script>
    <script src="{{asset('asset/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>