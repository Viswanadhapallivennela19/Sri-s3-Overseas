@extends('admin_header')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    th,td {
         
        text-align: center;
        
    }
    th{
        text-align: center;
    }
    tr:nth-child(odd) {
        background-color: rgba(0, 0, 0, 0.36);
    }
    a {
        text-decoration: none;
        padding: 5px;
        border-radius: 10px;
        color: black;
    }
    a:hover {
        transition: all 0.5s;
    }
    .delete:hover {
        background-color: red;
        color:white;
    }
    img{
        width: 100px;
        height: 50px;
    }
     
</style>

@section('faq_table')
<header id="header" class="header fixed-top">
    <h1 style="text-align:center;color:#2093e4;font-family: Kode Mono, monospace;">Sri S3 Overseas faq Data</h1> 
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</header>
<br><br>

<section id="faq" class="faq section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Sri S3</h2>
        <p>Our faq <a href="{{ route('faq_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
    </div>

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="bg-black text-white">
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faq_data as $rename_faq_data)
                    <tr>
                        <td>{{ $rename_faq_data->id }}</td>
                        <td>{{ $rename_faq_data->question }}</td>
                        <td>{{ $rename_faq_data->answer }}</td>
                         
                        <td>
                            <a href="{{route('faq_delete',$rename_faq_data->id)}}" class="delete">Delete</a>
                             
                        </td>
                    </tr>
                    @endforeach
                     </tbody>
            </table>
            
        </div>
    </div>
         <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
         </div>    
        </div> 
</section>







<section id="faq" class="faq section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Sri S3</h2>
        <p>Clients Asked Questions </p>
    </div>

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="bg-black text-white">
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Question</th>
                         
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student_asked_question as $rename_student_asked_question)
                    <tr>
                        <td>{{ $rename_student_asked_question->id }}</td>
                        <td>{{ $rename_student_asked_question->question }}</td>
                         
                         
                        <td>
                            <a href="{{route('student_asked_question_delete',$rename_student_asked_question->id)}}" class="delete">Delete</a>
                             
                        </td>
                    </tr>
                    @endforeach
                     </tbody>
            </table>
            
        </div>
    </div>
         <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
         </div>    
        </div> 
</section>
@endsection
