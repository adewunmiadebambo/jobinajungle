<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post Job | HR Platform for Efficient Employers.</title>
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

<div class="container-fluid" id="post_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 style="color: #fff";>Post Jobs</h1>
            </div>
        </div>
    </div>
</div>

<div class="container" id="innerbackground_post">
    <div class="row">
        <div class="col-12">
            <img src="images/inner-layer.png" class="img-fluid">
        </div>
    </div>
</div>


<div class="clearfix"></div>

<div class="container" id="post_banner_header">
    <div class="row">
        <h2>Post a Job</h2>
    </div>
</div>

<div class="container" id="post_banner_header">
    <div class="row">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, <br>  consetetur sadipscing elitr</p>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="main" id="post_banner_form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="firstname">
                        <input type="text" placeholder="Firstname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lastname">
                    <input type="text" placeholder="Lastname">
                </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="companyName">
                        <input type="text" placeholder="Company Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="email">
                    <input type="email" placeholder="Email Address">
                </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="phone">
                        <input type="tel" placeholder="Phone Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="job-down">
                    <select class="form-select" >
                        <option selected>Job Title</option>
                        <option value="1">UI/UX Designer</option>
                        <option value="2">Frontend Developer</option>
                        <option value="3">Backend Developer</option>
                      </select>
                </div>
            </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="location">
                            <select class="form-select" >
                                <option selected>Job Location</option>
                                <option value="1">Abuja</option>
                                <option value="2">Lagos</option>
                                <option value="3">Ogun</option>
                              </select>
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="time">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Full Time</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Part Time</label>
                      </div>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 decription">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Job Description"></textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-info top_btn" id="btn_login" type="submit">Post Job</button>
    </div>
    </div>
</div>







<?php include 'footer.php'; ?>

</body>
</html>