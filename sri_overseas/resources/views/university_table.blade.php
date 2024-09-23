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

@section('university_table')

<header id="header" class="header fixed-top">
    <h1 style="text-align:center;color:#2093e4;font-family: Kode Mono, monospace;">SriS<sub>3</sub>Overseas University Data</h1> 

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

    <nav style="text-align: center;">
        <a href="#usa">USA</a>
        <a href="#uk">UK</a>
        <a href="#canada">Canada</a>
        <a href="#australia">Australia</a>
        <a href="#scotland">Scotland</a>
        <a href="#germany">Germany</a>
        <a href="#ireland">Ireland</a>
        <a href="#southafrica">SouthAfrica</a>
        <a href="#france">France</a>
        <a href="#uae">UAE</a>
    </nav>
</header>
<br>
<br>
 

<section id="team" class="team section">
     
    {{-- <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
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
        <li data-filter=".filter-other">ADD</li>
        
      </ul><!-- End Portfolio Filters -->
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

         --}}
      <div class="container section-title  " data-aos="fade-up" id="usa" >
        <h2>Dream Destination</h2>
        <p>Of USA<a href="{{route('usa_form')}}"><i class="bi bi-patch-plus-fill"></i></a></p>
    </div>

    <div class="container mt-5  ">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="bg-black text-white">
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usa_data as $rename_usa_data)
                    <tr>
                        <td>{{ $rename_usa_data->id }}</td>
                        <td>{{ $rename_usa_data->name }}</td>
                        <td>{{ $rename_usa_data->specialty }}</td>
                        <td>{{ $rename_usa_data->importance_1 }}</td>
                        <td>{{ $rename_usa_data->importance_2 }}</td>
                        <td>{{ $rename_usa_data->importance_3 }}</td>
                        <td><img src="{{ $rename_usa_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_usa_data->discription_1 }}</td>
                        <td>{{ $rename_usa_data->discription_2 }}</td>
                        
                        <td>{{ $rename_usa_data->auxiliary_details }}</td><td><img src="{{ $rename_usa_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                         
                        
                        <td>
                            <a href="{{route('usa_delete',$rename_usa_data->id)}}" class="delete">Delete</a>
                             
                        </td>
                    </tr>
                    @endforeach
                     </tbody>
            </table>
            
        </div>
    </div>
         <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
         </div>   



         <div class="container section-title filter-uk" data-aos="fade-up" id="uk">
            <h2>Dream Destination</h2>
            <p>Of UK<a href="{{route('uk_form')}}"><i class="bi bi-patch-plus-fill"></i></a></p>
        </div>
    
        <div class="container mt-5 filter-usa">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead class="bg-black text-white">
                        <tr>
                            <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($uk_data as $rename_uk_data)
                        <tr>
                            <td>{{ $rename_uk_data->id }}</td>
                            <td>{{ $rename_uk_data->name }}</td>
                            <td>{{ $rename_uk_data->specialty }}</td>
                            <td>{{ $rename_uk_data->importance_1 }}</td>
                        <td>{{ $rename_uk_data->importance_2 }}</td>
                        <td>{{ $rename_uk_data->importance_3 }}</td>
                        <td><img src="{{ $rename_uk_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_uk_data->discription_1 }}</td>
                        <td>{{ $rename_uk_data->discription_2 }}</td>
                            <td><img src="{{ $rename_uk_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                            <td>{{ $rename_uk_data->auxiliary_details }}</td><td>
                                <a href="{{route('uk_delete',$rename_uk_data->id)}}" class="delete">Delete</a>
                                 
                            </td>
                        </tr>
                        @endforeach
                         </tbody>
                </table>
                
            </div>
        </div>
             <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
             </div>   
         
         


         <div class="container section-title filter-canada" data-aos="fade-up" id="canada">
            <h2>Dream Destination</h2>
            <p>Of Canada<a href="{{ route('canada_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
        </div>
    
        <div class="container mt-5 ">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead class="bg-black text-white">
                        <tr>
                           <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($canada_data as $rename_canada_data)
                        <tr>
                            <td>{{ $rename_canada_data->id }}</td>
                            <td>{{ $rename_canada_data->name }}</td>
                            <td>{{ $rename_canada_data->specialty }}</td>
                            <td>{{ $rename_canada_data->importance_1 }}</td>
                        <td>{{ $rename_canada_data->importance_2 }}</td>
                        <td>{{ $rename_canada_data->importance_3 }}</td>
                        <td><img src="{{ $rename_canada_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_canada_data->discription_1 }}</td>
                        <td>{{ $rename_canada_data->discription_2 }}</td>
                            <td><img src="{{ $rename_canada_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                            <td>{{ $rename_canada_data->auxiliary_details }}</td><td>
                                <a href="{{route('canada_delete',$rename_canada_data->id)}}" class="delete">Delete</a>
                                 
                            </td>
                        </tr>
                        @endforeach
                         </tbody>
                </table>
                
            </div>
        </div>
             <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
             </div>   
             
         
             

             <div class="container section-title filter-ireland" data-aos="fade-up" id="ireland">
                <h2>Dream Destination</h2>
                <p>Of Ireland<a href="{{ route('ireland_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
            </div>
        
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead class="bg-black text-white">
                            <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ireland_data as $rename_ireland_data)
                            <tr>
                                <td>{{ $rename_ireland_data->id }}</td>
                                <td>{{ $rename_ireland_data->name }}</td>
                                <td>{{ $rename_ireland_data->specialty }}</td>
                                <td>{{ $rename_ireland_data->importance_1 }}</td>
                        <td>{{ $rename_ireland_data->importance_2 }}</td>
                        <td>{{ $rename_ireland_data->importance_3 }}</td>
                        <td><img src="{{ $rename_ireland_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_ireland_data->discription_1 }}</td>
                        <td>{{ $rename_ireland_data->discription_2 }}</td>
                                <td><img src="{{ $rename_ireland_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                <td>{{ $rename_ireland_data->auxiliary_details }}</td><td>
                                    <a href="{{route('ireland_delete',$rename_ireland_data->id)}}" class="delete">Delete</a>
                                     
                                </td>
                            </tr>
                            @endforeach
                             </tbody>
                    </table>
                    
                </div>
            </div>
                 <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                 </div>   
                 
         
                 

                 <div class="container section-title filter-australia" data-aos="fade-up" id="australia">
                    <h2>Dream Destination</h2>
                    <p>Of Australia<a href="{{ route('australia_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                </div>
            
                <div class="container mt-5">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="bg-black text-white">
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">specialty</th>
                                    <th scope="col">Importance-1</th>
                                    <th scope="col">Importance-2</th>
                                    <th scope="col">Importance-3</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">University Dis-1</th>
                                    <th scope="col">University Dis-2</th>
                                    <th scope="col">University Image</th>
                                    <th scope="col">University Link</th>
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($australia_data as $rename_australia_data)
                                <tr>
                                    <td>{{ $rename_australia_data->id }}</td>
                                    <td>{{ $rename_australia_data->name }}</td>
                                    <td>{{ $rename_australia_data->specialty }}</td>
                                    <td>{{ $rename_australia_data->importance_1 }}</td>
                        <td>{{ $rename_australia_data->importance_2 }}</td>
                        <td>{{ $rename_australia_data->importance_3 }}</td>
                        <td><img src="{{ $rename_australia_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_australia_data->discription_1 }}</td>
                        <td>{{ $rename_australia_data->discription_2 }}</td>
                                    <td><img src="{{ $rename_australia_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                    <td>{{ $rename_australia_data->auxiliary_details }}</td><td>
                                        <a href="{{route('australia_delete',$rename_australia_data->id)}}" class="delete">Delete</a>
                                         
                                    </td>
                                </tr>
                                @endforeach
                                 </tbody>
                        </table>
                        
                    </div>
                </div>
                     <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                     </div>   
                     
         
                     

                     <div class="container section-title filter-scotland" data-aos="fade-up" id="scotland">
                        <h2>Dream Destination</h2>
                        <p>Of Scotland<a href="{{ route('scotland_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                    </div>
                
                    <div class="container mt-5">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="bg-black text-white">
                                    <tr>
                                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scotland_data as $rename_scotland_data)
                                    <tr>
                                        <td>{{ $rename_scotland_data->id }}</td>
                                        <td>{{ $rename_scotland_data->name }}</td>
                                        <td>{{ $rename_scotland_data->specialty }}</td>
                                        <td>{{ $rename_scotland_data->importance_1 }}</td>
                        <td>{{ $rename_scotland_data->importance_2 }}</td>
                        <td>{{ $rename_scotland_data->importance_3 }}</td>
                        <td><img src="{{ $rename_scotland_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_scotland_data->discription_1 }}</td>
                        <td>{{ $rename_scotland_data->discription_2 }}</td>
                                        <td><img src="{{ $rename_scotland_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                        <td>{{ $rename_scotland_data->auxiliary_details }}</td><td>
                                            <a href="{{route('scotland_delete',$rename_scotland_data->id)}}" class="delete">Delete</a>
                                             
                                        </td>
                                    </tr>
                                    @endforeach
                                     </tbody>
                            </table>
                            
                        </div>
                    </div>
                         <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                         </div>   
                         
         
                         

                         <div class="container section-title filter-germany" data-aos="fade-up" id="germany">
                            <h2>Dream Destination</h2>
                            <p>Of Germany<a href="{{ route('germany_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                        </div>
                    
                        <div class="container mt-5">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead class="bg-black text-white">
                                        <tr>
                                            <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($germany_data as $rename_germany_data)
                                        <tr>
                                            <td>{{ $rename_germany_data->id }}</td>
                                            <td>{{ $rename_germany_data->name }}</td>
                                            <td>{{ $rename_germany_data->specialty }}</td>
                                            <td>{{ $rename_germany_data->importance_1 }}</td>
                        <td>{{ $rename_germany_data->importance_2 }}</td>
                        <td>{{ $rename_germany_data->importance_3 }}</td>
                        <td><img src="{{ $rename_germany_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_germany_data->discription_1 }}</td>
                        <td>{{ $rename_germany_data->discription_2 }}</td>
                                            <td><img src="{{ $rename_germany_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                            <td>{{ $rename_germany_data->auxiliary_details }}</td><td>
                                                <a href="{{route('germany_delete',$rename_germany_data->id)}}" class="delete">Delete</a>
                                                 
                                            </td>
                                        </tr>
                                        @endforeach
                                         </tbody>
                                </table>
                                
                            </div>
                        </div>
                             <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                             </div>   
                             
         
                             

                             <div class="container section-title filter-france" data-aos="fade-up" id="france">
                                <h2>Dream Destination</h2>
                                <p>Of France<a href="{{ route('france_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                            </div>
                        
                            <div class="container mt-5">
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead class="bg-black text-white">
                                            <tr>
                                                <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($france_data as $rename_france_data)
                                            <tr>
                                                <td>{{ $rename_france_data->id }}</td>
                                                <td>{{ $rename_france_data->name }}</td>
                                                <td>{{ $rename_france_data->specialty }}</td>
                                                <td>{{ $rename_france_data->importance_1 }}</td>
                        <td>{{ $rename_france_data->importance_2 }}</td>
                        <td>{{ $rename_france_data->importance_3 }}</td>
                        <td><img src="{{ $rename_france_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_france_data->discription_1 }}</td>
                        <td>{{ $rename_france_data->discription_2 }}</td>
                                                <td><img src="{{ $rename_france_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                                <td>{{ $rename_france_data->auxiliary_details }}</td><td>
                                                    <a href="{{route('france_delete',$rename_france_data->id)}}" class="delete">Delete</a>
                                                     
                                                </td>
                                            </tr>
                                            @endforeach
                                             </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                                 <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                                 </div>   
                                 
         
                                 

                                 <div class="container section-title filter-southafrica" data-aos="fade-up" id="southafrica">
                                    <h2>Dream Destination</h2>
                                    <p>Of South Africa<a href="{{ route('southafrica_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                                </div>
                            
                                <div class="container mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-center">
                                            <thead class="bg-black text-white">
                                                <tr>
                                                    <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($southafrica_data as $rename_southafrica_data)
                                                <tr>
                                                    <td>{{ $rename_southafrica_data->id }}</td>
                                                    <td>{{ $rename_southafrica_data->name }}</td>
                                                    <td>{{ $rename_southafrica_data->specialty }}</td>
                                                    <td>{{ $rename_southafrica_data->importance_1 }}</td>
                        <td>{{ $rename_southafrica_data->importance_2 }}</td>
                        <td>{{ $rename_southafrica_data->importance_3 }}</td>
                        <td><img src="{{ $rename_southafrica_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_southafrica_data->discription_1 }}</td>
                        <td>{{ $rename_southafrica_data->discription_2 }}</td>
                                                    <td><img src="{{ $rename_southafrica_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                                    <td>{{ $rename_southafrica_data->auxiliary_details }}</td>
                                                    <td>
                                                        <a href="{{route('southafrica_delete',$rename_southafrica_data->id)}}" class="delete">Delete</a>
                                                         
                                                    </td>
                                                </tr>
                                                @endforeach
                                                 </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                     <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                                     </div>   
                                     
         
                                     

                                     <div class="container section-title " data-aos="fade-up" id="uae">
                                        <h2>Dream Destination</h2>
                                        <p>Of UAE<a href="{{ route('uae_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                                    </div>
                                
                                    <div class="container mt-5"  >
                                        <div class="table-responsive">
                                            <table class="table table-hover text-center">
                                                <thead class="bg-black text-white">
                                                    <tr>
                                                        <th scope="col">S.NO</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">specialty</th>
                        <th scope="col">Importance-1</th>
                        <th scope="col">Importance-2</th>
                        <th scope="col">Importance-3</th>
                        <th scope="col">Image</th>
                        <th scope="col">University Dis-1</th>
                        <th scope="col">University Dis-2</th>
                        <th scope="col">University Image</th>
                        <th scope="col">University Link</th>
                        <th scope="col">University Link</th>
                        
                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($uae_data as $rename_uae_data)
                                                    <tr>
                                                        <td>{{ $rename_uae_data->id }}</td>
                                                        <td>{{ $rename_uae_data->name }}</td>
                                                        <td>{{ $rename_uae_data->specialty }}</td>
                                                        <td>{{ $rename_uae_data->importance_1 }}</td>
                        <td>{{ $rename_uae_data->importance_2 }}</td>
                        <td>{{ $rename_uae_data->importance_3 }}</td>
                        <td><img src="{{ $rename_uae_data->universityimage }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                        <td>{{ $rename_uae_data->discription_1 }}</td>
                        <td>{{ $rename_uae_data->discription_2 }}</td>
                                                        <td><img src="{{ $rename_uae_data->image }}" style="width: 130px;height:80px;" class="img-fluid" alt="" ></td>
                                                        <td>{{ $rename_uae_data->auxiliary_details }}</td>
                                                        <td>
                                                            <a href="{{route('uae_delete',$rename_uae_data->id)}}" class="delete">Delete</a>
                                                             
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                     </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                         <div class="text-center" style="text-align:center; border:none; justify-content:center;"><a href="{{route('admin')}}" class="bg-slate-50" ><button type="button" >Home</button></a>
                                         </div>   
                                         
         
                                         

                                         {{-- <div class="container section-title" data-aos="fade-up">
                                            <h2>Dream Destination</h2>
                                            <p>Of<a href="{{ route('university_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                                        </div>
                                    
                                        <div class="container mt-5">
                                            <div class="table-responsive">
                                                <table class="table table-hover text-center">
                                                    <thead class="bg-black text-white">
                                                        <tr>
                                                            <th scope="col">S.NO</th>
                                                            <th scope="col">Full Name</th>
                                                            <th scope="col">specialty</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($team_data as $rename_team_data)
                                                        <tr>
                                                            <td>{{ $rename_team_data->id }}</td>
                                                            <td>{{ $rename_team_data->name }}</td>
                                                            <td>{{ $rename_team_data->specialty }}</td>
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
                                             
         
                                             
                                             <div class="container section-title" data-aos="fade-up">
                                                <h2>Dream Destination</h2>
                                                <p>Of<a href="{{ route('university_form') }}"><i class="bi bi-patch-plus-fill"></i></a></p>
                                            </div>
                                        
                                            <div class="container mt-5">
                                                <div class="table-responsive">
                                                    <table class="table table-hover text-center">
                                                        <thead class="bg-black text-white">
                                                            <tr>
                                                                <th scope="col">S.NO</th>
                                                                <th scope="col">Full Name</th>
                                                                <th scope="col">specialty</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($team_data as $rename_team_data)
                                                            <tr>
                                                                <td>{{ $rename_team_data->id }}</td>
                                                                <td>{{ $rename_team_data->name }}</td>
                                                                <td>{{ $rename_team_data->specialty }}</td>
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
                                                 </div>    --}}
                                                 
                                                                      
</section>
@endsection
