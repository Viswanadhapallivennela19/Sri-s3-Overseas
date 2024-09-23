@extends('index')
@section('faq')
<br>
<br>
<br>
<br>
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Sri S3</h2>
    <p>Lets Clarify Your Doubts </p>
  </div><!-- End Section Title -->
  <marquee style="color:red;font-size:20px;">*** If you need to find a particular doubt, press Ctrl+F, type your keyword, and press Enter. This will take you directly to the relevant section.***</marquee>
<div class="container">

    <div class="row gy-4">
    @foreach ($faq_data_get as $rename_faq_data_get )
        
   
  <div class="col-lg-4 col-md-6 shadow  border-red-300" data-aos="fade-up" data-aos-delay="100">
    <div class="service-item position-relative p-2 ">
      <div class="icon  m-3" >
         
      </div>
       
        <h3>{{$rename_faq_data_get->question}}</h3>
       
      <p>{{$rename_faq_data_get->answer}}
    </p>
    </div>
  </div><!-- End Service Item -->
  @endforeach

   
</div>
</div><!-- End testimonial item -->
<br>
@endsection