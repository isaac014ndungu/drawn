<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DrawnKonstrukt</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


</head>
<body>










<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <video class="float-end"  controls autoplay plays-inline muted loop width="100%" src="{{ asset('/videos/drawnv1.mp4') }}" >

    </video>

    <div class="info d-flex align-items-center">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">

            <h2 >WELCOME TO DRAWN KONSTRUKT LIMITED</h2>


            <div class="container-fluid fixed-top p-4">
                <div class="col-12">
                    <div class="d-flex justify-content-end">
                        @if (Route::has('login'))
                            <div class="">
                                @auth

                                    <a href="{{ url('/home') }}" class="text-muted">Home</a>
                                @else

                                   <a href="{{ route('login') }}" class="text-muted">Log in</a>


                                    @if (Route::has('register'))

                                        <a href="{{ route('register') }}" style="color:white " class="ms-4 text-muted">Register</a>

                                    @endif
                                @endif
                            </div>
                        @endif
                    </div>
                </div>

            </div>
          </div>
        </div>

      </div>
    </div>


            </section>
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Drawn Konstrukt Team </h2>
        <p>Drawn Konstrukt is run by a team of profwssionals that include;</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">

                <img class="rounded-circle"  width="20%" alt="avatar1" src="{{ asset('/IMG/DrawnS4.jpeg') }}" />

            <h3>DIRECTOR</h3>
            <h5>Eng.Vivtor A. Emisiko</h5>

          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">

                <img class="rounded-circle"  width="20%" alt="avatar1" src="{{ asset('/IMG/DrawnS2.jpeg') }}" />

            <h3>Accountant</h3>
            <h5>Miss Faith s. Mutuku</h5>
          </div>

        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">

            <img class="rounded-circle" alt="avatar1" width="20%" src="{{ asset('/IMG/DrawnS3.jpeg') }}" />

            <h3>Marketing Manager</h3>
            <h5>Miss Faith Awinja</h5>


          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">

            <img class="rounded-circle" alt="avatar1"  width="20%" src="{{ asset('/IMG/DrawnS1.jpeg') }}" />

            <h3>Operations Manager</h3>
            <h5>MR.Bright Kyadiva</h5>
          </div>
        </div><!-- End Service Item -->




      </div>

    </div>
  </section><!-- End Services Section -->



  <footer id="footer" class="footer">
    <video class="float-end"  controls autoplay muted loop src="{{ asset('/videos/drawnv2.mp4') }}" height="auto" width="100%"></video>

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
    <div class="footer-legal text-center position-relative">

      <div class="container">

        <div class="copyright">

            <div class="">
                <div class="footer-info">
                  <h3>Drawn Konstrukt</h3>
                  <p>
                    Kayole junction <br>
                    <br><br>
                    <strong>Phone:</strong> 070000000<br>
                    <strong>Email:</strong> drawnkonstrukt907@gmail.com<br>
                  </p>
                 <div class="">
                    <!-- Facebook -->

<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
><i class="fab fa-facebook-f"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
><i class="fab fa-twitter"></i
></a>

<!-- Google -->
<a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"
><i class="fab fa-google"></i
></a>

<!-- Instagram -->
<a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
><i class="fab fa-instagram"></i
></a>
                 </div>
                </div>
              </div>

        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://quickoffice.co.ke/">Quick office Pointe</a>

        </div>
      </div>
    </div>


  </footer><!-- End Alt Services Section -->
  <script src="{{ asset('js/main.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

