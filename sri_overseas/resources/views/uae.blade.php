@extends('index')
@section('uae')
<br><br><br><br><br>
<div class="container section-title  " data-aos="fade-up" >
    <h2>Sri S3</h2>
    <p>Uae Universities</p>
</div>
<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

    <img src="assets/img/country_background/uae.jpg" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Get In Touch: 9988775668</h3>
            <p>The UAE can provide students with a high-quality education, invaluable research opportunities, and a rich cultural experience, all of which contribute to personal and professional growth.</p>
            <a class="cta-btn" href="{{route('contact')}}">Appointment for uae</a>
          </div>
        </div>
      </div>
    </div>
    

  </section><!-- /Call To Action Section -->
  <section id="about" class="about  ">

    <div class="container section card shadow p-5" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
    @foreach ($uae_data as $rename_uae_data)
        
     
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ $rename_uae_data->universityimage }}" class="img-fluid shadow" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
          <h3> {{ $rename_uae_data->name }}</h3>
          <p class="fst-italic">
            {{ $rename_uae_data->discription_1 }}
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span><b>Academic Reputation</b>{{ $rename_uae_data->importance_1 }}</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Location:</b>{{ $rename_uae_data->importance_2 }}</span></li>
            <li><i class="bi bi-check2-all"></i> <span><b>Facilities and Resources:</b>{{ $rename_uae_data->importance_3 }}</span></li>
          </ul>

          <p>
            
            {{ $rename_uae_data->discription_2 }} </p><br>
            <a class="btn-getstarted p-2" href="{{route('contact')}}" style="font-size:20px;border:2px solid black;justify-content:center;">Start Your Journey</a>
            <a class="btn-getstarted p-2" href="" style="font-size:20px;border:2px solid black;justify-content:center;">Auxiliary details</a>
        </div>
        
        @endforeach
      </div>

    </div>

  </section><!-- /About Section -->
@endsection