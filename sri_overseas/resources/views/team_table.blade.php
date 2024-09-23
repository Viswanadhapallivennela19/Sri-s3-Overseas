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

@section('team_table')
<header id="header" class="header fixed-top">
    <h1 style="text-align:center;color:#2093e4;font-family: Kode Mono, monospace;">SriS<sub>3</sub>Overseas Team Data</h1> 
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</header>
<br><br>

<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our Team <a href="{{ route('team_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
    </div>

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="bg-black text-white">
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($team_data as $rename_team_data)
                    <tr>
                        <td>{{ $rename_team_data->id }}</td>
                        <td>{{ $rename_team_data->fullname }}</td>
                        <td>{{ $rename_team_data->designation }}</td>
                        <td><img src="{{ $rename_team_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>
                            <a href="{{route('team_delete',$rename_team_data->id)}}" class="delete">Delete</a>
                             
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
