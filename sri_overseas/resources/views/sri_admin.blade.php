@extends('admin_header')
@section('sri_admin')
<header id="header" class="header  fixed-top">
       
  <h1 style="text-align:center;color:#2093e4;font-family: Kode Mono, monospace;">SriS<sub>3</sub>Overseas Admin Data</h1> 
      
  <nav class="" style="text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;margin-left:10px;font-size:20px;">
    @auth
    <a href="{{route('logout')}}">Logout</a>
    @else
    <a href="{{route('login')}}">Login</a>
    
    <a href="{{route('registration')}}">Registration</a>
        
    @endauth</nav>
   <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</header>
<br>
<br>
 <!-- Portfolio Section -->
 <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
     
    <div class="container ">

      {{-- <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Country Data</li>
          <li data-filter=".filter-product">University Data</li>
          <li data-filter=".filter-branding">Milestone Data</li>
        </ul><!-- End Portfolio Filters --> --}}

        <div class="row gy-4 isotope-container justify-content-evenly " data-aos="fade-up" data-aos-delay="200">

           
           
          
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app shadow p-3">
            <img src="assets/img/admin/team.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Team Data</h3>
              <p></p>
              {{-- <a href="{{route('admin_team')}}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> --}}
              <a href="{{route('admin_team')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product shadow p-3">
            <img src="assets/img/admin/university.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>University</h3>
              <p></p>
              {{-- <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> --}}
              <a href="{{route('admin_university')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding shadow p-3">
            <img src="assets/img/admin/destination.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Destination Data</h3>
              <p></p>
               
              <a href="{{route('admin_destination')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->
          
           
          
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app shadow p-3">
            <img src="assets/img/admin/contact.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Contact  Data</h3>
              <p></p>
               <a href="{{route('admin_contact')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product shadow p-3">
            <img src="assets/img/admin/successstories.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Milestones Data</h3>
              <p></p>
                <a href="{{route('admin_milestones')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding shadow p-3">
            <img src="assets/img/admin/documents.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Student Documents Data</h3>
              <p></p>
               <a href="{{route('student_documents_data_get')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding shadow p-3">
            <img src="assets/img/admin/faq.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Frequently Asked Question Data</h3>
              <p></p>
               <a href="{{route('admin_faq')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->
@endsection