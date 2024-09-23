@extends('index')
@section('universities')
<br>
<br>
<br>
<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Sri S3</h2>
      <p>Check our Universities</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-usa">USA</li>
          <li data-filter=".filter-uk">UK</li>
          <li data-filter=".filter-canada">Canada</li>
          <li data-filter=".filter-ireland">Ireland</li>
          <li data-filter=".filter-australia">Australia</li>
          <li data-filter=".filter-scotland">Scotland</li>
          <li data-filter=".filter-germany">Germany</li>
          <li data-filter=".filter-france">France</li>
          <li data-filter=".filter-southafrica">South Africa</li>
          <li data-filter=".filter-uae">UAE</li>
          <li data-filter=".filter-other">other</li>
          
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($usa_data as $rename_usa_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-usa card shadow p-3">
            <img src="{{ $rename_usa_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_usa_data->name }}</h4>
              <p>{{ $rename_usa_data->specialty }}</p>
              <a href="{{ $rename_usa_data->image }}"   data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="{{route('usa')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($uk_data as $rename_uk_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-uk">
            <img src="{{ $rename_uk_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_uk_data->name }}</h4>
              <p>{{ $rename_uk_data->specialty }}</p>
              <a href="{{ $rename_uk_data->image }}"   data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('uk')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($canada_data as $rename_canada_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-canada">
            <img src="{{ $rename_canada_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_canada_data->name }}</h4>
              <p>{{ $rename_canada_data->specialty }}</p>
              <a href="{{ $rename_canada_data->image }}"  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('canada')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($ireland_data as $rename_ireland_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ireland">
            <img src="{{ $rename_ireland_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_ireland_data->name }}</h4>
             <p>{{ $rename_ireland_data->specialty }}</p>
              <a href="{{ $rename_ireland_data->image }}"   data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('ireland')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($australia_data as $rename_australia_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-australia">
            <img src="{{ $rename_australia_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_australia_data->name }}</h4>
             <p>{{ $rename_australia_data->specialty }}</p>
              <a href="{{ $rename_australia_data->image }}"   data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('australia')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($scotland_data as $rename_scotland_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-scotland">
            <img src="{{ $rename_scotland_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_scotland_data->name }}</h4>
             <p>{{ $rename_scotland_data->specialty }}</p>
              <a href="{{ $rename_scotland_data->image }}"   data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('scotland')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($germany_data as $rename_germany_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-germany">
            <img src="{{ $rename_germany_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_germany_data->name }}</h4>
             <p>{{ $rename_germany_data->specialty }}</p>
              <a href="{{ $rename_germany_data->image }}"   data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('germany')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($france_data as $rename_france_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-france">
            <img src="{{ $rename_france_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_france_data->name }}</h4>
             <p>{{ $rename_france_data->specialty }}</p>
              <a href="{{ $rename_france_data->image }}"   data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('france')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($southafrica_data as $rename_southafrica_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-southafrica">
            <img src="{{ $rename_southafrica_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_southafrica_data->name }}</h4>
             <p>{{ $rename_southafrica_data->specialty }}</p>
              <a href="{{ $rename_southafrica_data->image }}"   data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('southafrica')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          @foreach ($uae_data as $rename_uae_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-uae">
            <img src="{{ $rename_uae_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_uae_data->name }}</h4>
             <p>{{ $rename_uae_data->specialty }}</p>
              <a href="{{ $rename_uae_data->image }}"   data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('uae')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach<!-- End Portfolio Item -->
          {{-- @foreach ($uae_data as $rename_uae_data)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="{{ $rename_uae_data->image }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $rename_uae_data->name }}</h4>
             <p>{{ $rename_uae_data->specialty }}</p>
              <a href="{{ $rename_uae_data->image }}"   data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href=" {{route('usa')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->
          @endforeach --}}
           

        </div><!-- End Portfolio Container -->

        

      </div>

    </div>

  </section><!-- /Portfolio Section -->
@endsection