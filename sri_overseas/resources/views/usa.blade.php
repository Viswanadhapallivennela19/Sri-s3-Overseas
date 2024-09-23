@extends('index')
@section('usa')
<br><br><br><br><br>
<div class="container section-title  " data-aos="fade-up" >
    <h2>Sri S3</h2>
    <p>USA Universities</p>
</div>
<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

    <img src="assets/img/country_background/usa.jpg" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Get In Touch: 9988775668</h3>
            <p>The USA can provide students with a high-quality education, invaluable research opportunities, and a rich cultural experience, all of which contribute to personal and professional growth.</p>
            <a class="cta-btn" href="{{route('contact')}}">Appointment for USA</a>
          </div>
        </div>
      </div>
    </div>
    

  </section><!-- /Call To Action Section -->
  <section id="about" class="about  ">

    <div class="container section card shadow p-5" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
    @foreach ($usa_data as $rename_usa_data)
        
     
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ $rename_usa_data->universityimage }}" class="img-fluid shadow" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
          <h3><i class="bi bi-caret-right-fill"></i> {{ $rename_usa_data->name }}</h3>
          <p class="fst-italic">
            {{ $rename_usa_data->discription_1 }}
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span><b>Academic Reputation:</b>{{ $rename_usa_data->importance_1 }}</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Location:</b>{{ $rename_usa_data->importance_2 }}</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Facilities and Resources:</b>{{ $rename_usa_data->importance_3 }}</span></li>
          </ul>

          <p>
            
            {{ $rename_usa_data->discription_2 }} </p><br>
            <a class="btn-getstarted p-2" href="{{route('documents')}}" style="font-size:20px;border:2px solid black;justify-content:center;">Start Your Journey</a>
            <a class="btn-getstarted p-2" href=" {{ $rename_usa_data->auxiliary_details }}" style="font-size:20px;border:2px solid black;justify-content:center;">Auxiliary details</a>
        </div>
        
        @endforeach
      </div>

    </div>

  </section><!-- /About Section -->
@endsection