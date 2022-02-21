<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password | HR Platform for Efficient Employers.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="dist/js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="dist/js/bootstrap.min.js"></script>
<link rel="icon" href="images/favicon.ico" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="dist/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="dist/font-awesome/css/all.min.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container-fluid" id="forgot_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 style="color: #fff";>Forgot Password?</h1>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="container" id="innerbackground_forgot">
    <div class="row">
        <div class="col-12">
            <img src="images/inner-layer.png" class="img-fluid">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center" id="forgot_information">
            <p>Fill in the email address you registered with and we'll send <br>
             you a link to reset your password</p>
            <form action="#" method="post">
                <div class="mb-3">
                <input type="text" class="form-control-sign-forgot" id="formGroupSignPassword" placeholder="Email Address">
                </div>
                <button type="submit" class="btn btn-info top_btn" id="btn_login">Send</button>
            </form>
        </div>
    </div>
</div>










<?php include 'footer.php'; ?>

</body>
</html>