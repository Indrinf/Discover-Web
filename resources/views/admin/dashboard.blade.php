<!DOCTYPE html>
<html lang="en">

<head>
@include('../partial.head_dashboard')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('../partial.headerdashboard')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('../partial.navbardashboard')
      <!-- partial content dashboard-->
          @include('../partial.contentdashboard')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('../partial.footer')
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{asset('/dashboard-template/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('/dashboard-template/js/off-canvas.js')}}"></script>
  <script src="{{asset('/dashboard-template/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/dashboard-template/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('/dashboard-template/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('/dashboard-template/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('/dashboard-template/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

