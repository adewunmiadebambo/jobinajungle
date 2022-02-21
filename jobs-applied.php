<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobs Applied For | HR Platform for Efficient Employers.</title>
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
                            <i class="fa fa-newspaper"></i>&nbsp;&nbsp; <b>Jobs Applied for</b>     
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

        <div class="col-md-9 col-12" id="credentials_banner">
            <div id="credentials_Bheader">
                <img src="images/jobsa.png" class="img-fluid">
                <img src="images/not-line.png" class="img-fluid">
                Jobs applied for
            </div>
            <div id="credential_info">

            <div id="search_btn">
                <form action="">
                    Search:&nbsp;&nbsp; <input type="search"> 
                </form>
            </div>

            <div class="table-responsive">
            <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" style="background-color:#235CAA; color:#fff;" >ID</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Job Title</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Job Type</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Qualification</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Date Posted</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Deadline Date</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Date Applied</th>
            <th scope="col" style="background-color:#235CAA; color:#fff;">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" style="background-color:#fff;">1</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          <tr>
            <th scope="row" style="background-color:#fff;">2</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          <tr>
            <th scope="row" style="background-color:#fff;">3</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          <tr>
            <th scope="row" style="background-color:#fff;">4</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          <tr>
            <th scope="row" style="background-color:#fff;">5</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          <tr>
            <th scope="row" style="background-color:#fff;">6</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          <tr>
            <th scope="row" style="background-color:#fff;">7</th>
            <td>Developer</td>
            <td>Frontend</td>
            <td>Bsc</td>
            <td>Oct 20, 2021</td>
            <td>Nov 20, 2021</td>
            <td>Nov 1, 2021</td>
            <td><button>Applied</button></td>
          </tr>
          
        </tbody>
      </table>
      </div>
        <div id="caret">
            <div id="caret-left"><i class="fas fa-2x fa-caret-left"></i></div>
            <div id="caret-right"><i class="fas fa-2x fa-caret-right"></i></div>
        </div>

            </div>
        </div>
    </div>
</div>




<?php include 'footer_dash.php'; ?>



</body>
</html>