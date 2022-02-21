<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Credentials | HR Platform for Efficient Employers.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="dist/js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="dist/js/bootstrap.min.js"></script>
<link rel="icon" href="images/favicon.ico" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="dist/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="dist/font-awesome/css/all.min.css">
<script>
    $(function (){
        
        $('#nav_icon').click(function(){
            $('#nav_list').toggle(50);
        })

    })

</script>
</head>
<body>

<?php include 'dash-header.php'; ?>

<div class="credential_area">
    <div class="row">
        <div class="col-md-3" id="profile_banner_a"> 
        <div class="row">
                    <div class="col-9">
                                <div id="dash_log">
                                <div id="dash_pic">
                                    <img src="images/dashpic.png" class="img-fluid">
                                </div>
                            <div id="dash_info">
                                <p> <b>Jack Sparrow</b> <br>
                                User</p>   
                            </div>
                        </div>
                        <div id="jackline">
                            <img src="images/jackline.png" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-3">
                            <div id="nav_icon" style="margin-left: 20px;">
                                <i class="fa fa-2x fa-bars"> </i> 
                            </div>
                    </div>
                </div>
                
                     <div id="dash_list_board">
                     
                     <ul id="nav_list">
                        <li><a href="dashboard.php" class="dash-side">
                            <div class="sidebar-list">
                                <i class="fa fa-briefcase"></i> &nbsp;&nbsp; Dashboard   
                            </div></a> 
                        </li>
                        <li><a href="jobs-applied.php" class="dash-side">
                            <div class="sidebar-list">
                            <i class="fa fa-newspaper"></i>&nbsp;&nbsp; Jobs Applied for     
                            </div></a> 
                        </li>
                        <li><a href="job-offers.php#" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-briefcase"></i>&nbsp;&nbsp; Job Offers     
                        </div></a> 
                        </li>
                        <li><a href="#" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-briefcase"></i>&nbsp;&nbsp; Assessment     
                        </div></a> 
                        </li>
                        <li><a href="my-profile.php" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-user-circle"></i>&nbsp;&nbsp; My Profile     
                        </div></a> 
                        </li>
                        <li><a href="my-credentials.php" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-file-alt"></i>&nbsp;&nbsp; <b>My Credentials </b>    
                        </div></a> 
                        </li>
                        <li><a href="#" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-file-alt"></i>&nbsp;&nbsp; Vacancies    
                        </div></a> 
                        </li>
                        <li><a href="notification.php" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-bell"></i>&nbsp;&nbsp; Notifications  <sup >5</sup> 
                        </div></a> 
                        </li>
                    </ul>
                     </div>
        </div>

        <div class="col-md-9" id="credentials_banner">
            <div id="credentials_Bheader">
                <img src="images/cred.png" class="img-fluid">
                <img src="images/not-line.png" class="img-fluid">
                My Credentials
            </div>
            <div id="credential_info">

                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label>Choose Document</label><p></p>
                                        <select name="" id="" class="formfield">
                                        <option value="">Choose an option</option>
                                        <option value="">CV</option>
                                        <option value="">Birth Certificate</option>
                                        <option value="">NYSC Certificate</option>
                                        <option value="">WAEC Certificate</option>
                                        <option value="">BVN Printout Pay</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </form>
                <p>Upload Image (PNG, JPG & JPEG Only)</p>

                <div id="credential_upload">
                    <div id="credentials-upload">
                        <img src="images/file.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<?php include 'footer_dash.php'; ?>



</body>
</html>