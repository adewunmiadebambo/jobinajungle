<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | HR Platform for Efficient Employers.</title>
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



<div class="container-fluid" id="login_page_area">
  <div class="row">
      <div class="col-md-6">
         <img src="images/login.png" class="img-fluid">
         <!-- <video width="690" height="621" loop autoplay>
            <source src="./images/vid.mp4" type="video/mp4">
        </video>  -->
      </div>

      <div class="col-md-6">
        <div class="container">
            <div class="container">
            <h3>Login</h3> 
              <form action="dashboard.php" method="#">
                <div class="mb-3">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email address">
                  </div>
                  <div class="mb-3">
                      <!-- <div id="password-box">
                        <input type="password"  placeholder="Password">
                        <button>show</button>
                      </div> -->
                    <input type="password" class="form-control" id="formGroupExampleInputt" placeholder="Password">
                    <a href="forgot-password.php" id="fop"> Forgot password?</a>
                  </div>
                  <button type="submit" class="btn btn-info top_btn" id="btn_login">Login</button>
                  </form>
                  <p id="log_sing">Don't have an account?<a href="sign-up.php"> <b style= "color: #1f67b2";> Sign up</b></a></p>
            </div>
        </div> 
      </div>
  </div>
</div>

<div id="innerbackground_login">
            <img src="images/inner-layer1.png" class="img-fluid">
</div>


<script src="./component.js"></script>

</body>
</html>