@extends('index')
 
@section('dream_destination')
<br>
<br>
 <!-- Portfolio Section -->
 <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Sri S3</h2>
      <p>Check our Study Destinations</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

         

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

           
          @foreach ($destination_data_get as $rename_destination_data_get)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product shadow-lg  p-3 rounded negative-margin mt-3">
            <img src="{{$rename_destination_data_get->image}}" width="max-content" height="400px" class="img-fluid" alt="{{$rename_destination_data_get->image}}">
            <div class="portfolio-info">
              <h2 style="text-align: center;">{{$rename_destination_data_get->name}}</h2>
              <p class="country-specification text-danger bold "style="font-size:17px;" ><b>{{$rename_destination_data_get->famous}}</b>
                </p>
               <br><br>
              <a href="{{route('universities')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->
          @endforeach
        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->
@endsection