<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Team Form</title>
    <link href="assets/img/logo.jpg" rel="icon">
</head>
<body>
    <header id="header" class="header" style="background-color: black;opacity:0.7;padding:5px;">
        <h1 style="text-align:center;color:#2093e4;font-family: 'Kode Mono', monospace;">
            SriS<sub>3</sub>Overseas Team Data
        </h1>
    </header>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
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
            <div class="col-lg-8 bg-light p-4 rounded  shadow">
                <form action="{{route('team_insert')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" value="{{old('image')}}" class="form-control-file" id="image" required>
                    
                        @error('image')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror</div>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Your Name" required>
                    
                        @error('name')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror</div>
                    <div class="form-group">
                        <label for="email">Designation</label>
                        <input type="text" name="designation" value="{{old('designation')}}" class="form-control" id="designation" placeholder="Your Designation" required>
                    
                        @error('designation')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror</div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <a href="{{route('admin')}}" class="btn btn-secondary">Home</a>
                </form>      
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
