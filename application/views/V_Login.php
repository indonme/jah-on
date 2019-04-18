<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="mobileui/style.css">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Apache Cordova</title>
</head>

<body>

    <h1 class="text-center m-5">Login</h1>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <form cation="<?= base_url('Login/aksi')?>" method="POST" class="m-5">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="login" value="Login">Submit</button>
        </form>
        </div>
    </div>
    
</body>

</html>