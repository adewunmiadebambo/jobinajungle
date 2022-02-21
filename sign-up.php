<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up | HR Platform for Efficient Employers.</title>
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

<div class="container-fluid" id="signup_page_area">
  <div class="row">
      <div class="col-md-6">
         <img src="images/login.png" class="img-fluid">
      </div>

      <div class="col-md-6">
        <div class="container">
            <div class="container">
            <h3>Sign up</h3> 
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                <form action="" method="#">
                    <div class="mb-3">
                        <input type="text" class="form-control-sign" id="formGroupSign" placeholder="Firstname">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control-sign" id="formGroupSign" placeholder="Lastname">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control-sign" id="formGroupSign" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <input type="phone" class="form-control-sign" id="formGroupSign" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <!-- <div id="password-box">
                            <input type="password"  placeholder="Create Password">
                            <button>show</button>
                        </div> -->
                        <input type="password" class="form-control-sign" id="formGroupSign4" placeholder="Create Password">
                    </div>
                    <p id="min">Minimum of 6 Characters</p>
                    <button type="submit" class="btn btn-info top_btn" id="btn_login">Sign Up</button>
                </form>
                <p id="already">Already have an account?<a href="login.php"><b style= "color: #1f67b2";> Login</b></a>
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