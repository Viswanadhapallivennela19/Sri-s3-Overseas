<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/img/logo-16x16.jpg" sizes="16x16" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>User OTP</title>
    {{-- <link href="assets/img/logo.jpg" rel="icon"> --}}
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
            {{-- <div class="col-lg-12">
                <p></p>
            </div> --}}
            <div class="col-lg-8 bg-light p-4 rounded shadow">

                <form action="{{ route('otp_login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{$user_id}}">
                        <label for="otp">OTP</label>
                        <input type="text" name="otp" class="form-control" id="otp" placeholder="Enter OTP" required value="{{ old('otp') }}">
                        @error('otp')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
