@extends('index')
<style>
  label{
    color:#1e4ead;
    font-size: 1.12rem;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
</style>
@section('documents')
<br>
<br>
<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Sri S3</h2>
      <p>Lets Start Your Career</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @else
    <div class="alert alert-error">
      {{ session('error') }}
  </div>
@endif

      </div>
      <div class="col-lg-12">
        <marquee behavior="smooth" direction="left" style="color:red; font-size:19px; font-family:Georgia, 'Times New Roman', Times, serif;">
            Please upload only PDF formats.
        </marquee>
    </div>
    

       

      <div class="row gy-4 container">

        

        <div class="col-lg-8">
          <form action="{{route('documents_data_insert')}}" method="post" class="" data-aos="fade-up" data-aos-delay="200" enctype="multipart/form-data">
            @csrf
            <div class="row gy-4">

              <div class="col-md-12">
                <label for="name" style="color:#1e4ead;"><b>Enter Your Full Name</b></label><br>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Your Full Name" required >
                @error('name')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="passport_front" style="color:#1e4ead;"><b>Upload Your Passport Front Photo</b></label><br>
                <input type="file" name="passport_front" value="{{old('passport_front')}}" class="form-control" placeholder="" required>
                @error('passport_front')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12 ">
                <label for="passport_back" ><b>Upload Your Passport Back Page</b></label><br>
                <input type="file" class="form-control" name="passport_back" value="{{old('passport_back')}}" placeholder="" required value="">
                @error('passport_back')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

             

              <div class="col-md-12">
                <label for="ssc" ><b>Upload Your SSC Marks Memo </b></label><br>
                <input type="file" class="form-control" name="ssc" value="{{old('ssc')}}" placeholder=" " required>
                @error('ssc')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="intermediate" ><b>Upload Your Intermediate Marks Memo </b></label><br>
                <input type="file" class="form-control" name="intermediate" value="{{old('intermediate')}}" placeholder="intermediate in PDF" required>
                @error('intermediate')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="graduation" ><b>Upload Your Degree or Btech Individual Marks Memo </b></label><br>
                <input type="file" class="form-control" name="graduation" value="{{old('graduation')}}" placeholder="Degree or Btech individual Marks Memo" required>
                @error('graduation')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>


              <div class="col-md-12">
                <label for="resume" ><b>Upload Your Resume </b></label><br>
                <input type="file" class="form-control" name="resume" value="{{old('resume')}}" placeholder="Resume" required >
                @error('resume')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="cmm,pc,od" ><b>Upload Your CMM,PC,OD </b></label><br>
                <input type="file" class="form-control" name="cmm_pc_od" value="{{old('cmm_pc_od')}}" placeholder="CMM,PC,OD" required >
                @error('cmm_pc_od')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="lor" ><b>Upload Your Letter Of Recommendation </b></label><br>
                <input type="file" class="form-control" name="lor" value="{{old('lor')}}" placeholder="Letter Of Recommendation" required>
                @error('lor')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              


              <div class="col-md-12 ">
                <label for="scorecard" ><b>Upload Your Scorecard</b></label><br>
                <input type="file" class="form-control" name="scorecard" value="{{old('scorecard')}}" placeholder=" " required>
                @error('scorecard')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="Experience" ><b>Upload Your Experince(If Any) </b></label><br>
                <input type="file" class="form-control" name="experience" value="{{old('experience')}}" placeholder="Experience (if Any)" required>
                @error('experience')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="sop" ><b>Upload Your Statement Of Purpose </b></label><br>
                <input type="file" class="form-control" name="sop" value="{{old('sop')}}" placeholder="Statement of purpose" required>
                @error('sop')
                   <p style="color:red;">{{$message}}</p>
                @enderror
              </div>

               
              <div class="col-md-6 file-center justify-center">
                {{-- <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> --}}

                <button type="submit" class="">Submit</button>
                <input type="reset" placeholder="Reset the Details" class="p-2 bg-slate-700">
              </div>
               
            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->
@endsection