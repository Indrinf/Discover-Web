<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <title>A College Major Exploration</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('/layout/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('/layout/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('/layout/assets/css/templatemo-tale-seo-agency.css')}}">
  <link rel="stylesheet" href="{{asset('/layout/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('/layout/assets/css/animate.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  @include('partial.preheader')
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('partial.header')
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: purple;">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  @include('partial.footer')


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('/layout/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/layout/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('/layout/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('/layout/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('/layout/assets/js/tabs.js')}}"></script>
  <script src="{{asset('/layout/assets/js/popup.js')}}"></script>
  <script src="{{asset('/layout/assets/js/custom.js')}}"></script>


</body>

</html>