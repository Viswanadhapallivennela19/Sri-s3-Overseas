<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>University Form</title>
     
</head>  
<body>
    <header id="header" class="header" style="background-color: black;opacity:0.7;padding:5px;">
        <h1 style="text-align:center;color:#2093e4;font-family: 'Kode Mono', monospace;">
            Sri S3 Overseas  australia-University Form
        </h1>
    </header>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 bg-light p-4 rounded  shadow">
                <form action="{{route('australia_insert')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" value="{{old('image')}}" class="form-control-file" id="image" required>
                    
                        @error('image')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                </div>
                    <div class="form-group">
                        <label for="name">University Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="" required>
                        @error('name')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="specialty">specialty of University</label>
                        <input type="text" name="specialty" value="{{old('specialty')}}" class="form-control" id="designation" placeholder="Your Designation" required>
                        @error('specialty')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Upload University Image</label>
                        <input type="file" name="universityimage" value="{{old('universityimage')}}" class="form-control-file" id="image" required>
                        @error('universityimage')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">University Discription-1</label>
                        <input type="text" name="discription_1" value="{{old('discription_1')}}" class="form-control" id="name" placeholder="" required>
                        @error('discription_1')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Academic Reputation</label>
                        <input type="text" name="importance_1" value="{{old('importance_1')}}" class="form-control" id="name" placeholder="" required>
                        @error('importance_1')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Location</label>
                        <input type="text" name="importance_2" value="{{old('importance_2')}}" class="form-control" id="name" placeholder="" required>
                        @error('importance_2')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Facilities and Resources</label>
                        <input type="text" name="importance_3" value="{{old('importance_3')}}" class="form-control" id="name" placeholder="" required>
                        @error('importance_3')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">University Discription-2</label>
                        <input type="text" name="discription_2" value="{{old('discription_2')}}" class="form-control" id="name" placeholder="" required>
                        @error('discription_2')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="auxiliary_details">Link For Auxiliary Details</label>
                        <input type="url" name="auxiliary_details" value="{{old('auxiliary_details')}}" class="form-control" id="auxiliary_details" placeholder="Paste Auxiliary details Link OR # symbol" required>
                        @error('auxiliary_details')
                        <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    </div>
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
