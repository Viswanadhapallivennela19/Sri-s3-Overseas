<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SRI S3 Overseas Company</title>
  <meta content="SRI S3 Overseas Company focuses on fostering international expansion and development. Join us to start your journey abroad with comprehensive services including career counseling, finance support, admission guidance, and visa assistance." name="description">
  <meta content="study abroad, overseas education, international education, career counseling, finance support, admission guidance, visa assistance" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="assets/img/logo.jpg" sizes="16x16" type="image/jpg">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    a:hover{
      font-weight: bold;
      transition: all 0.5s;
      font-size:1.4rem;
    }
    footer{
      background-color:#1350c9;
    }
    .developer:hover{
      color:blue;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/logo.jpg" alt="" style="width:90px;height:90px;background-color:;padding:5px;border-radius:50%;filter:drop-shadow(2px 8px 5px rgba(255, 255, 255, 0.316))">
        
    
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="">Home<br></a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li class="dropdown"><a href="{{route('services')}}"><span>services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('program_selection')}}">Program Selection</a></li>
              {{-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul> --}}
              </li>
              <li><a href="{{route('services')}}">Admission Guidence</a></li>
              <li><a href="{{route('visa_assistance')}}">Visa Assistance</a></li>
              <li><a href="{{route('services')}}">Finance Support</a></li>
              <li><a href="{{route('services')}}">More...</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a href="{{route('dream_destination')}}"><span>DreemDestination</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('usa')}}">USA</a></li>
              <li><a href="{{route('uk')}}">UK</a></li>
              <li><a href="{{route('germany')}}">Germany</a></li>
              <li><a href="{{route('canada')}}">Canada</a></li>
              <li><a href="{{route('france')}}">France</a></li>
              <li><a href="{{route('universities')}}">More...</a></li>
               
            </ul>
          </li>
          <li><a href="{{route('universities')}}">Universities</a></li>
          <li><a href="{{route('success')}}">Milestones</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('documents')}}">Start Your Journey</a>
      @auth
      <a href="{{route('user_logout')}}" class="btn-getstarted">LogOut </a>
      @else
      <a href="{{route('user_register')}}" class="btn-getstarted">Login</a>
      @endauth
      
      

    </div>
  </header>

  <main class="main">

   

    @yield('sri_overseas')
    @yield('about')
    @yield('contact')
    @yield('documents')
    @yield('dream_destination')
    @yield('faq')
    @yield('services')
    @yield('success')
    @yield('universities')
    @yield('usa')
    @yield('uk')
    @yield('ireland')

    @yield('australia')

    @yield('canada')

    @yield('scotland')

    @yield('germany')

    @yield('france')

    @yield('southafrica')

    @yield('uae')
    @yield('visa_assistance')
    @yield('program_selection')


   

   

   


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              {{-- <span class="sitename"></span> --}}
            </a>
            <div class="footer-contact pt-3">
              <p>Db bhavan,Gorantla</p>
              <p>Near Hosanna Mandir Guntur <br>522034</p>
              <p class="mt-3"><strong>Phone:</strong> <span><a href="tel:9347163757">+91 9347163757</a></span></p>
              <p class="mt-3"><strong>Whats app:</strong> <span><a href="https://wa.me/9988775668">+91 9988775668</a>
              </span></p>
              <p><strong>Email:</strong> <span><a href="mailto:sriS3overseas@gmail.com?subject=How%20Can%20I%20Help%20You">sriS3overseas@gmail.com</a>
              </span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.facebook.com/share/Do533nkFRm3gwbcG/?mibextid=qi2Omg"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/sris3overseas?igsh=MXcybXQwdXgwYjhxbA=="><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/sri-s-3-overseas-bba6a12a8?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('home')}}"> Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('about')}}"> About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('services')}}"> Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('faq')}}">FAQ</a></li>
              {{-- <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('services')}}">program Selection</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('services')}}">Admission Guidence</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('services')}}">Visa Assistance</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('services')}}">Travelling Support</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('services')}}">Finance Support</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h2>Post Your Doubt</h2>
            <p>"If you have any doubts, please post them,then<br> check the <a href="{{route('faq')}}"><b>FAQ</b></a> for a solution."</p>
            <form action="{{route('students_questions')}}" method="post" style="background-color:lightgray;border-color:yellow;width:max-content;padding:5px;">
              @csrf
              <div class="flex absolute bg-slate-600 m-2"><input type="text" name="question" style="position:relative;"><input type="submit" value="Post" class="ml-2"  ></div>
              
               
              <div class="demo" style="color:yellow;"></div>
            </form>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
          </div>

        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Sri S<sub>3</sub></strong> Overseas <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Developed by <a href="https://www.linkedin.com/in/viswanadhapalli-vennela-45860b22a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="developer">Viswanadhapalli Vennela</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>