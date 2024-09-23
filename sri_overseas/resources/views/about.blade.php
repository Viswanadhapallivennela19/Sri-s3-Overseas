@extends('index')
@section('about')
<br>
<br>




<!-- About Section -->
<section id="about" class="about section ">
  <div class="container section-title" data-aos="fade-up">
    <h2 style="font-style:normal">Sri S3</h2>
    <p>About Us</p>
  </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/about/headimage.jpg" class="img-fluid shadow " alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
          <h3>Choose Sri S3 Overseas:<blockquote>your global education dreams become a reality</blockquote></h3>
          <p class="fst-italic">
            We are dedicated to guiding you through every step of the international education journey, from selecting the perfect program to securing your admission and beyond. With our expert advice and personalized support, we turn your aspirations into achievable goals. 
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span><b>Global Education Dreams:</b>Sri S3 Overseas helps turn your international education dreams into reality.</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Expert Guidance:</b>They offer comprehensive support throughout the education journey.</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Personalized Support:</b> Tailored assistance in selecting programs and securing admissions.</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Navigating Complexities:</b> Expert help in managing the complexities of studying abroad.</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Educational Opportunities:</b> They aim to unlock a world of global educational opportunities.</span></li>
          </ul>
          <p>
            rust us to help you navigate the complexities of studying abroad and make your global ambitions a reality. Let Sri S3 Overseas be your partner in unlocking a world of educational opportunities.
           </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->



<!-- Testimonials Section -->
{{-- <h1 style="text-align:center;">Why Choose Us </h1> --}}
<section id="testimonials" class="testimonials section  ">

  {{-- <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt=""> --}}

  <div class="container " data-aos="fade-up" data-aos-delay="100" >

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        {{--   --}}

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="container">

              <div class="row gy-4">
            <div class="col-lg-4 col-md-6  shadow rounded" data-aos="fade-up" data-aos-delay="100" style="background-color:skyblue;">
              <div class="service-item position-relative">
                <div class="icon  m-3" >
                  {{-- <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i> --}}
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h1>Why Choose Us</h1>
                </a>
                <p>Sri S3 Overseas is a leading international education and relocation consultancy dedicated to helping individuals and businesses navigate the complexities of global opportunities.

                </p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon  m-3" >
                  <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Our Vision</h3>
                </a>
                <p>our vision is to be the most trusted and innovative global education and relocation consultancy, empowering individuals and businesses to achieve their international aspirations. </p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon  m-3" >
                  <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Mision</h3>
                </a>
                <p>To ensure a smooth, stress-free transition for our clients, enabling them to achieve their international dreams with confidence and ease.</p>
              </div>
            </div><!-- End Service Item -->
          </div>
        </div><!-- End testimonial item -->
      </div>
    </div>

    <div class="swiper-slide">
      <div class="testimonial-item">
        <div class="container">

          <div class="row gy-4">
        <div class="col-lg-4 col-md-6  " data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon  m-3" >
              <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h2 style="font-family:Arial">89 % VISA Success Rate</h2>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6  shadow rounded" data-aos="fade-up" data-aos-delay="100" style="background-color:skyblue;">
          <div class="service-item position-relative">
            <div class="icon  m-3" >
              <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Our Vision</h3>
            </a>
            <p>our vision is to be the most trusted and innovative global education and relocation consultancy, empowering individuals and businesses to achieve their international aspirations. </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon  m-3" >
              <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Mision</h3>
            </a>
            <p>To ensure a smooth, stress-free transition for our clients, enabling them to achieve their international dreams with confidence and ease.</p></div>
        </div><!-- End Service Item -->
      </div>
    </div><!-- End testimonial item -->
  </div>
</div>
 





<div class="swiper-slide">
  <div class="testimonial-item">
    <div class="container">

      <div class="row gy-4">
    <div class="col-lg-4 col-md-6 " data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
        <div class="icon  m-3" >
          <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
        </div>
        <a href="service-details.html" class="stretched-link">
          <h3>Tailored Attention to Your Application</h3>
        </a>
        <p>We provide tailored, focused attention to each application, ensuring that every detail is meticulously handled to meet the highest standards and enhance your chances of success.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
        <div class="icon  m-3" >
          <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
        </div>
        <a href="service-details.html" class="stretched-link">
          <h3>Our Vision</h3>
        </a>
        <p>our vision is to be the most trusted and innovative global education and relocation consultancy, empowering individuals and businesses to achieve their international aspirations. </p>
       </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6  shadow rounded" data-aos="fade-up" data-aos-delay="100" style="background-color:skyblue;">
      <div class="service-item position-relative">
        <div class="icon  m-3" >
          <i class="bi bi-activity p-3 shadow " style="background-color: white; border-radius:50%;"></i>
        </div>
        <a href="service-details.html" class="stretched-link">
          <h3>Mision</h3>
        </a>
        <p>To ensure a smooth, stress-free transition for our clients, enabling them to achieve their international dreams with confidence and ease.</p>
      </div>
    </div><!-- End Service Item -->
  </div>
</div><!-- End testimonial item -->
</div>
</div>
         

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>


  <!-- Team Section -->
  <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>our Team</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
@foreach ($team_data_get as $rename_team_data_get)
  

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="{{$rename_team_data_get->image}} "style="height:350px;" class="img-fluid rounded" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{$rename_team_data_get->fullname}}</h4>
              <span>{{$rename_team_data_get->designation}}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endforeach
      </div>

    </div>

  </section><!-- /Team Section -->


   
@endsection