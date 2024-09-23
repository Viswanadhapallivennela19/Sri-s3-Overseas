@extends('index')
@section('services')
<br>
<br>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Sri S3</h2>
    <p>Check our Services</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="assets/img/program.jpg" class="card-img-top" alt="..." style="height:350px;width:auto;">
            <div class="card-body">
              <h5 class="card-title text-center">Program selection</h5>
              <p class="card-text">Choosing an appropriate course of study, training program, or professional opportunity is a crucial process that involves aligning these options with an individual’s long-term goals and aspirations. This process starts with self-assessment, where one evaluates personal interests, strengths, and career objectives. Next, it involves researching various programs and opportunities to understand what they offer and how they fit with one's goals.</p>
<a href="{{route('program_selection')}}" class="border p-2" style="display: block; text-align: center; background-color: gray;"><b>Read More</b></a>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/img/admission.jpg" class="card-img-top" alt="..." style="height:350px;width:auto;">
            <div class="card-body">
              <h5 class="card-title text-center">Admission Guidence</h5>
              <p class="card-text">Admission guidance refers to the support and advice provided to individuals seeking admission to educational institutions.we offer comprehensive admission guidance to help clients secure placements in prestigious educational institutions worldwide. Our expert consultants provide personalized support, from selecting the right programs and universities to preparing and submitting applications. <details>At Sri S3 Overseas, We assist with crafting compelling personal statements, gathering necessary documents, and preparing for interviews. Our goal is to streamline the admission process, ensuring that our clients meet all requirements and deadlines, increasing their chances of acceptance into their desired programs.<summary> <b>Read More...</b></summary></details></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/img/visa.jpg" class="card-img-top" alt="..." style="height:350px;width:auto;">
            <div class="card-body">
              <h5 class="card-title text-center"><b>Visa Assistance</b></h5>
              <p class="card-text">We provide expert guidance and support to help you secure all necessary visas and permits.like we're offering  various types of U.S. visas, including <b>B1(Business Visitor Visa), B2  (Tourist Visa), F1 (Academic Student Visa),  F2 (Dependent of F1 Visa Holder), C1(Transit Visa), and  J(Exchange Visitor Visa)</b> visas. Our goal is to streamline the process for a hassle-free to move.If you need any specific information  about these visas, just click on <b>read more</b>

                <a href="{{route('visa_assistance')}}" class="border p-2" style="display: block; text-align: center; background-color: gray;"><b>Read More</b></a>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/img/finance.jpg" class="card-img-top finance-scaner close-scaner" alt="Finance Image" style="height:350px;width:auto;" id="scaner close">
            <div class="card-body">
              <h5 class="card-title text-center">Finance Support</h5>
              <p class="card-text">the assistance provided to clients in managing and securing financial resources necessary for their education or move. 
                <details>
                  <summary><b>Read More...</b></summary>
                  At Sri S3 Overseas, we understand that financing an international relocation, education, or business venture can be challenging. Our financial support services are designed to assist clients in securing the necessary funds to achieve their goals. We provide guidance on available scholarships, grants, loans, and financial aid options, helping clients navigate the application processes and meet eligibility criteria. Our expert consultants offer personalized advice to create feasible financial plans, ensuring that clients can pursue their international aspirations without financial barriers.
                </details>
              </p>
              
              <div class="flex" style="display: flex;justify-content:space-between;">
                <a class="btn-getstarted rounded border p-1 shadow" href="#scaner" onclick="changeImage()">Scaner</a>
                <a class="btn-getstarted rounded border p-1 shadow" href="#close" onclick="closeImage()">Close</a>
                 
              </div>
            </div>
          </div>
        </div>
      </div>

       

    </div>

  </div>

</section><!-- /Portfolio Section -->
 {{-- <!-- Services Section -->
 <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Check our Services</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section --> --}}
  <script>
    // Function to change the image source
    function changeImage() {
      var imgElement = document.querySelector('.finance-scaner');
      if (imgElement) {
        imgElement.src = "assets/img/finance-scaner.jpg";
      }
    }

    // Function to reset the image source
    function closeImage() {
      var imgElement = document.querySelector('.close-scaner');
      if (imgElement) {
        imgElement.src = "assets/img/finance.jpg"; // Original image source
      }
    }
  </script>

@endsection