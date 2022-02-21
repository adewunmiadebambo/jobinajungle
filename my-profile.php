<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Profile | HR Platform for Efficient Employers.</title>
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


<div class="profile_area">
<div class="row">
    <div class="col-md-3" id="profile_banner_a">
    <div class="row">
                    <div class="col-9">
                        <div id="dash_log">
                            <div id="dash_pic">
                                <img src="images/dashpic.png" class="img-fluid">
                            </div>

                            <div id="dash_info">
                                <p> <b>Jack Sparrow</b> <br>User</p>   
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
                        <i class="fa fa-user-circle"></i>&nbsp;&nbsp; <b>My Profile</b>     
                        </div></a> 
                        </li>
                        <li><a href="my-credentials.php" class="dash-side">
                        <div class="sidebar-list">
                        <i class="fa fa-file-alt"></i>&nbsp;&nbsp; My Credentials     
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

    <div class="col-md-9" id="profile_banner_b">
        <div id="profile_Bheader">
            <img src="images/prof.png" class="img-fluid">
            <img src="images/not-line.png" class="img-fluid">
            My Profile
        </div>
        <div id="profile_ac">
        <div class="c-accordion">
                            <div class="c-accordion-title"><i class="fa fa-users"></i> <span>Personal Information</span></div>
                            <div class="c-accordion-content">
                                <h3>Personal Details</h3>
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="First Name" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Last Name" name="lastname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Middle Name" name="middlename" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email" name="email" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="tel" placeholder="Phone Number" name="phone" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="gender" id="" class="formfield">
                                                        <option value="">Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Date of Birth" name="dob" class="formfield supposed_date_input">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Closest B/Stop" name="landmark" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <select name="state" id="" class="formfield">
                                                        <option value="">Choose Residence State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Local Government" name="lg" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Current Address" name="address" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-12"></div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="c-accordion">
                            <div class="c-accordion-title"><i class="fa fa-info-circle"></i> <span>Career Information</span></div>
                            <div class="c-accordion-content">
                                <h3>Qualification</h3>
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sub-title">First Qualification</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Qualification</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Institution</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Class of Degree</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Course of Study</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="dynamic_q1"></div>
                                            <div class="col-12">
                                                <button class="add-more" type="button">
                                                    <i class="fa fa-plus-square"></i> Add more qualifications
                                                </button>
                                            </div>
                                            <h3>Professional Cerificate</h3>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Choose Certificate</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="dynamic_q2"></div>
                                            <div class="col-12">
                                                <button class="add-more" type="button">
                                                    <i class="fa fa-plus-square"></i> Add more qualifications
                                                </button>
                                            </div>
                                            <div class="col-12"></div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="c-accordion">
                            <div class="c-accordion-title"><i class="fa fa-briefcase"></i> <span>Work Experience</span></div>
                            <div class="c-accordion-content">
                                <h3>Past/Present Experience</h3>
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <select name="state" id="" class="formfield">
                                                        <option value="">Industry Worked</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <select name="state" id="" class="formfield">
                                                        <option value="">Years of Experience</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="" id="" style="height: 100px;" placeholder="Work Achievement" class="formfield"></textarea>
                                                </div>
                                            </div>
                                            <div class="dynamic_exp"></div>
                                            <div class="col-12">
                                                <button class="add-more" type="button">
                                                    <i class="fa fa-plus-square"></i> Add work experience
                                                </button>
                                            </div>
                                            <div class="col-12"></div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="c-accordion">
                            <div class="c-accordion-title"><i class="fa fa-cog"></i> <span>Job Preference</span></div>
                            <div class="c-accordion-content">
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Desired Salary" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Location Preferences" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Category" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Date Available To Start" name="firstname" class="formfield supposed_date_input">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <select name="state" id="" class="formfield">
                                                        <option value="">Choose Residence State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12"></div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="c-accordion">
                            <div class="c-accordion-title"><i class="fa fa-hashtag"></i> <span>Social Media Links</span></div>
                            <div class="c-accordion-content">
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="url" placeholder="Facebook URL" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="url" placeholder="Twitter URL" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="url" placeholder="LinkedIn URL" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="url" placeholder="Instagram URL" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-12"></div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="c-accordion">
                            <div class="c-accordion-title"><i class="fa fa-cog"></i> <span>Reference</span></div>
                            <div class="c-accordion-content">
                                <h3>First Referee</h3>
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Referee Name" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Email" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Phone" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Position" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="City" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Choose State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Company" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Physical Address" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-12"></div>
                                            <!-- <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                                <h3>Second Referee</h3>
                                <div class="form">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Referee Name" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Email" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Phone" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Position" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="City" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="state" id="" class="formfield">
                                                        <option value="">Choose State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Company" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Physical Address" name="firstname" class="formfield">
                                                </div>
                                            </div>
                                            <div class="col-12"></div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button class="btn1 no-shadow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
</div>



<?php include 'footer_dash.php'; ?>


<script src="required.js"></script>

<script>
    $(document).ready(function() {
        $('.table').DataTable();
    } );
</script>

</body>
</html>