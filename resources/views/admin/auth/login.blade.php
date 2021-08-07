<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body{
            background-color: #f6fdffe8;
            font-family: "Poppins", sans-serif;
        }
        .form-wrap{
            padding: 15px 30px;
            background-color: #0d6efd40;
            box-shadow: 14px 24px 24px 0px #d0c5a3;
            border-radius: 10px;
        }
        .form-control{
            background-color: #f5f5f5;
            border-radius: 7px;
            padding: 10px 15px;
            color: #000000;
            box-shadow: 5px 10px 5px #afafaf4a;
        }
        .btn{
            margin-top: 15px;
            box-shadow: 5px 10px 5px #4f6079a3;
            background: #fff;
            color: #000;
        }
        .btn:hover{
            background: #000;
            color: #fff;
            animation: myfirst 5s linear 2s infinite alternate;
        }
    </style>
    <title>Login</title>
</head>

<body>
<main>
    <div class="container my-5 py-5 w-50">
        <div class="col-12 p-5">
            <div class="text-center my-5">
                <a href="{{route('front.homepage')}}" class="flex-column">
                    <img src="{{asset('uploads/settings/logo.png')}}" alt="" class="embed-responsive">
                </a>
            </div>
        </div>
        <div class="col-12 p-5 form-wrap">
            @include('admin.inc.errors')
            <form method="post" action="{{ route('admin.doLogin') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-lg">Login</button>
                </div>
            </form>
        </div>
    </div>
</main>

    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

</body>

</html>
