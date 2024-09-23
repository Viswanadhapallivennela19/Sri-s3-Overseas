<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>FAQ Form</title>
    <link href="assets/img/logo.jpg" rel="icon">
</head>
<body>  
    <header id="header" class="header" style="background-color: black;opacity:0.7;padding:5px;">
        <h1 style="text-align:center;color:#2093e4;font-family: 'Kode Mono', monospace;">
            SriS<sub>3</sub>Overseas faq Data
        </h1>
    </header>
    <div class="container mt-5 pt-5">
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
        <div class="row justify-content-center">
            <div class="col-lg-8 bg-light p-4 rounded  shadow">
                <form action="{{route('faq_insert')}}" method="post">
                    @csrf
                     
                    <div class="form-group">
                        <label for="name">Question</label>
                        <input type="text" name="question" value="{{old('')}}" class="form-control" id="name" placeholder="Type Your Question" required>
                        @error('question')
                            <strong style="color:red;">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Answer</label>
                        <input type="text" name="answer" value="{{old('answer')}}" class="form-control" id="designation" placeholder="Type Your Answer" required>
                        @error('answer')
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
