<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login Form</title>
    <link href="assets/img/logo.jpg" rel="icon">
</head>
<body>
    <header id="header" class="header" style="background-color: black;opacity:0.7;padding:5px;">
        <h1 style="text-align:center;color:#2093e4;font-family: 'Kode Mono', monospace;">
            Sri S3 Overseas  
        </h1>
    </header>
    <div class="container mt-5 pt-5">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors as $error )
                        <div class="alert alert-danger">
                           {{$error}}
                        </div>
                    @endforeach
                </div>
            @endif
            
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{session('error')}}
             </div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
             </div>
            @endif
        </div>




        <div class="row justify-content-center">
            <div class="col-lg-8 bg-light p-4 rounded  shadow">
                <form action="{{route('login_insert')}}" method="post" >
                    @csrf
                     
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Admin Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Admin Password" required>
                    </div>
                     
                    <button type="submit" class="btn btn-primary">Login</button>
                    {{-- <a href="" class="btn btn-secondary">Register</a> --}}
                     
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
