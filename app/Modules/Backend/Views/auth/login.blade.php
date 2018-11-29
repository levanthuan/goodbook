<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoodBOOK</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/backend/img/favicon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .login-form {
            width: 400px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 45px;
            border-radius: 2px;
            font-size: 15px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
        .checkbox-inline {
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
<div class="login-form">
    <form action="{{ route('admin.auth.authenticate') }}" method="post">
        {{ csrf_field() }}
        <h2 class="text-center">GoodBOOK System</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        @if($errors->has('message'))
            <div class="form-group">
                <p class="text-danger">{{ $errors->first('message') }}</p>
            </div>
        @endif
        <div class="form-group">
            <label class="pull-left checkbox-inline"><input type="checkbox" value="1" name="remember"> Remember me</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    </form>
</div>
</body>
</html>