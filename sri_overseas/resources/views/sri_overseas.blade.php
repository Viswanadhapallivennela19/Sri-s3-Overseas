@extends('index')
@section('sri_overseas')
<!-- Hero Section -->
  <section id="hero" class="hero section  dark-background">

    <img src="assets/img/herobackground.jpg" alt="" data-aos="fade-in">

    <div class="container">

      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2 > <span style="color:white; font-size:50px;">Start your Journey With</span> <span style=color:#1350c9>SRI S3 Overseas</span></h2>
          <p style="">Focuses on fostering international expansion and development</p>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <i class="bi bi-globe"></i>
            <h3><a href="{{route('dream_destination')}}">Global Network</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <i class="bi bi-award"></i>
            <h3><a href="{{route('success')}}">Reliability and Trust</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <i class="bi bi-airplane"></i>
            <h3><a href="{{route('services')}}">Packing and Moving</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="icon-box">
            <i class="bi bi-pin-map"></i>
            <h3><a href="{{route('services')}}">Destination Services</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="icon-box">
            <i class="bi bi-gem"></i>
            <h3><a href="{{route('services')}}">Immigration Assistance</a></h3>
          </div>
        </div>
      </div>

    </div>

  </section>
<!-- /Hero Section -->

<!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

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
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide">
            <a href="{{route('usa')}}"><img src="assets/img/countries/usa-1960922.jpg" class="img-fluid" alt=""></a>
            {{-- <h5 style="text-align:center;">USA</h5> --}}
          </div>
          <div class="swiper-slide"><a href="{{route('uk')}}"><img src="assets/img/countries/uk.jpg" class="img-fluid shadow-lg p-1 rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('uae')}}"><img src="assets/img/countries/united-arab-emirates-26815_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('southafrica')}}"><img src="assets/img/countries/south-africa-26912_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('scotland')}}"><img src="assets/img/countries/scotland-28511_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('ireland')}}"><img src="assets/img/countries/ireland-26887_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('germany')}}"><img src="assets/img/countries/Germany.jpg" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('france')}}"><img src="assets/img/countries/france-162295_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('canada')}}"><img src="assets/img/countries/canada-27003_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
          <div class="swiper-slide"><a href="{{route('australia')}}"><img src="assets/img/countries/australia-162232_1280.png" class="img-fluid shadow-lg p-1  rounded" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  
  </section>
<!-- /Clients Section -->

<!-- Features Section -->
  <section id="features" class="features section p-0 mb-4" >

    <div class="container  shadow-lg p-5   rounded">

      <div class="row gy-4">
        <h1>What We Offer</h1>
        <div class="features-image col-lg-6" data-aos="" data-aos-delay="100"><img src="assets/img/features.jpg" alt=""></div>
        <div class="col-lg-6">

          <div class="features-item d-flex mt-1 ps-0 ps-lg-3 " data-aos="" data-aos-delay="200">
            
            <i class="bi bi-mortarboard-fill flex-shrink-0"></i>

            <div>
              <h4>Admission Guidence</h4>
              <p> To offering  clear and structured guidance on navigating the admission process.</p>
            </div>
          </div><!-- End Features Item-->


          <div class="features-item d-flex ps-0 ps-lg-3 mt-4" data-aos="" data-aos-delay="300">
            <i class="bi bi-compass flex-shrink-0"></i>
            <div>
              <h4>Career Counseling</h4>
              <p>To assist individuals in making informed decisions about their educational and professional futures.</p>
            </div>
          </div><!-- End Features Item-->


          <div class="features-item d-flex mt-4 ps-0 ps-lg-3" data-aos="" data-aos-delay="400">
            <i class="bi bi-passport flex-shrink-0"></i>
            <div>
              <h4>Visa Assitance</h4>
              <p>To the support and guidance provided to individuals seeking to obtain a visa for traveling, working, studying, or residing in a foreign country. </p>
            </div>
          </div><!-- End Features Item-->

          
          <div class="features-item d-flex mt-4 ps-0 ps-lg-3" data-aos="" data-aos-delay="500">
            <i class="bi bi-currency-rupee flex-shrink-0"></i>
            <div>
              <h4>Finance</h4>
              <p>To support students in achieving their educational aspirations by offering diverse financing options.</p>
            </div>
          </div><!-- End Features Item-->

          
           
        </div>
      </div>
    </div>
  </section>
<!-- /Features Section -->

 


 

  


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">
       <img src="assets/img/milestones.jpg" class="testimonials-bg" alt="">
  <div class="container" data-aos="" data-aos-delay="100">
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
        <!-- Testimonial items -->
        @foreach ($milestones_data_get as $rename_milestones_data_get)
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{$rename_milestones_data_get->image}}" class="testimonial-img" alt="">
            <h3>{{$rename_milestones_data_get->fullname}}</h3>
            <h4>{{$rename_milestones_data_get->designation}}</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>{{$rename_milestones_data_get->discription}}</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
          
        </div>
        @endforeach
        
        <!-- Add more testimonials as needed -->

      </div>
     
     
      <div class="swiper-pagination"></div>
    </div>

  </div>
 

</section>
<!-- /Testimonials Section --> 
{{-- <!-- stats Section --> 
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 align-items-center justify-content-between">

      <div class="col-lg-5">
        <img src="assets/img/stats-img.jpg" alt="" class="img-fluid">
      </div>

      <div class="col-lg-6">

        <h3 class="fw-bold fs-2 mb-3">Voluptatem dignissimos provident quasi</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
        </p>
      </div>
      <div class="row gy-4">

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-emoji-smile flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-journal-richtext flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-headset flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-people flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

         
        
      </div>

     
</div>
</div>


</section><!-- /Stats Section --> --}}
{{-- <!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>Ready to make your global education dreams a reality?</h3>
          <p>Contact Sri S3 Overseas today and start your journey to international success! Our team is here to provide expert guidance and personalized support every step of the way. Don’t wait—reach out now and unlock the doors to a world of educational opportunities!</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- /Call To Action Section --> --}}
@endsection