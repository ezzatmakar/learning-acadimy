<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('admin/assets/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .form-wrap{
            padding: 15px 30px;
            background-color: #f1f3f7;
            box-shadow: 15px 24px 15px #eee;
            border-radius: 10px;
        }
        .form-control{
            background-color: #f5f5f5;
            border-radius: 7px;
            padding: 10px 15px;
            color: #000000;
            box-shadow: 5px 10px 5px #e1e1e1;
        }
        .btn{
            margin-top: 15px;
            box-shadow: 5px 10px 5px #4f6079a3;
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
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter your Email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-lg">Login Dashboard</button>
                </div>
            </form>
        </div>
    </div>
</main>


    <script src="{{ asset('admin/assets/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/bootstrap.min.js') }}"></script>

</body>

</html>
