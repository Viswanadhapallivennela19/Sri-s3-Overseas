<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo-16x16.jpg" sizes="16x16" type="image/jpg">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>User Login Form</title>
    <style>
        .header {
            background-color: black;
            opacity: 0.7;
            padding: 10px;
            text-align: center;
        }
        .header h1 {
            color: #2093e4;
            font-family: 'Kode Mono', monospace;
        }
        .container {
            margin-top: 100px;
        }
        .alert {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header id="header" class="header">
        <h1>Sri S3 Overseas</h1>
    </header>

    <div class="container mt-5 pt-5">
        <div class="mt-5">
            @if ($errors->any())
    <div class="col-12">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif

            
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 bg-light p-4 rounded shadow">
                <h1 style="color:rgba(1, 11, 65, 0.886);text-align:center;">User Login</h1>
                <form action="{{ route('otp_generate') }}" method="post">
                    @csrf
                     
                    {{-- <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter User Name" required>
                    </div> --}}
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" name="number" class="form-control" id="number" placeholder="User Mobile Number" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="User Email" required>
                    </div> --}}

                    <button type="submit" class="btn btn-primary">Generate OTP</button>
                     
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
