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
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  @include('partial.preheader')
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('partial.header')
  <!-- ***** Header Area End ***** -->
<div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="{{asset('/layout/assets/images/left-infos.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>More <em>About</em> The <span>Major</span></h2>
                  <div class="line-dec"></div>
                  <p>Deskripsi Umum</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>Marketing</h6>
                    <span>90%</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Ditigal Media</h6>
                    <span>80%</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Social Media Managing</h6>
                    <span>95%</span>
                  </div>
                </div>
                <p class="more-info">Info tambahan
                </p>
              </div>
            </div>
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