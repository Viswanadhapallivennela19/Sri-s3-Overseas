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

@section('student_documents_table')
<header id="header" class="header fixed-top">
    <h1 style="text-align:center;color:#2093e4;font-family: Kode Mono, monospace;">Sri S3 Overseas Documents Data</h1> 
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</header>
<br><br>

<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Sri S3</h2>
        <p>Student Documents</p>
    </div>

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="bg-black text-white">
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Passport Frontpage</th>
                        <th scope="col">Passport Backpage</th>
                        <th scope="col">Score Card</th>
                        <th scope="col">SSC</th>
                        <th scope="col">Intermediate</th>
                        <th scope="col">Graduation</th>
                        <th scope="col">CMM,PC,OD</th>
                        <th scope="col">Letter Of Recommendation</th>
                        <th scope="col">Resume</th>
                        <th scope="col">Experience</th>
                        <th scope="col">SOP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student_documents_data_get as $rename_student_documents_data_get)
                    <tr>
                        <td>{{ $rename_student_documents_data_get->id }}</td>
                        <td>{{ $rename_student_documents_data_get->name }}</td>
                        {{-- <td>{{ $rename_student_documents_data_get-> }}</td> --}}
                        <td>
                            <a href="{{$rename_student_documents_data_get->passport_front}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->passport_back}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->scorecard}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->ssc}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->intermediate}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->graduation}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->cmm_pc_od}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->lor}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->resume}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->experience}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            <a href="{{$rename_student_documents_data_get->sop}}" target="_blank">Download PDF</a>
                        </td>
                        <td>
                            {{-- <a href="" class="delete">Delete</a> --}}
                             
                        </td>
                    </tr>
                    @endforeach
                     </tbody>
            </table>
            
        </div>
    </div>
         <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
         </div>     
</section>
@endsection
