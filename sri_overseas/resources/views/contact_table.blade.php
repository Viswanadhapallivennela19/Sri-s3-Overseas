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

@section('contact_table')
<header id="header" class="header fixed-top">
    <h1 style="text-align:center;color:#2093e4;font-family: Kode Mono, monospace;">Sri S3 Oversea Contact Data</h1> 
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</header>
<br><br>

<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Sri S3</h2>
        <p>Contact Details </p>
    </div>

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="bg-black text-white">
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact_data as $rename_contact_data)
                    <tr>
                        <td>{{ $rename_contact_data->id }}</td>
                        <td>{{ $rename_contact_data->name }}</td>
                        <td>{{ $rename_contact_data->email }}</td>
                        <td>{{ $rename_contact_data->subject }}</td>
                        <td>{{ $rename_contact_data->number }}</td>
                        <td>{{ $rename_contact_data->message }}</td>
                        {{-- <td><img src="{{ $rename_contact_data->i }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td> --}}
                        {{-- <td>
                            <a href="{{route('contact_delete',$rename_contact_data->id)}}" class="delete">Delete</a>
                             
                        </td> --}}
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
