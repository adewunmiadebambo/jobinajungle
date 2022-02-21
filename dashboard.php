<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | HR Platform for Efficient Employers.</title>
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


<style>

#areaa {
    padding-left: 55px;
}

#areaa p{
    font-size: 16px;
    padding-left: 40px;
}

#areaa #areap {
    padding-left: 20px;
}




svg.radial-progress {
  height: auto;
  max-width: 150px;
  padding: 1em;
  transform: rotate(-90deg);
  width: 100%;
}

svg.radial-progress circle {
  fill: rgba(0,0,0,0);
  stroke: #fff;
  stroke-dashoffset: 219.91148575129; /* Circumference */
  stroke-width: 10;
}

svg.radial-progress circle.incomplete { opacity: 0.25; }

svg.radial-progress circle.complete { stroke-dasharray: 219.91148575129; /* Circumference */ }

svg.radial-progress text {
  fill: #000;
  font: 400 1em/1 'Poppins', sans-serif;
  text-anchor: middle;
}

/*** COLORS ***/
/* Primary */

svg.radial-progress:nth-of-type(6n+1) circle { stroke: #3face2; }

/* Secondary */

svg.radial-progress:nth-of-type(6n+2) circle { stroke: #3face2; }

/* Tertiary */

</style>
</head>
<body>

<?php include 'dash-header.php'; ?>

<div class="container-fluid" id="dash_banner_area">
        <div class="row">
            <div class="col-12 col-md-3" id="dash_banner_a">
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
                                <i class="fa fa-briefcase"></i> &nbsp;&nbsp; <b>Dashboard </b>  
                            </div></a> 
                        </li>
                        <li><a href="jobs-applied.php" class="dash-side">
                            <div class="sidebar-list">
                                <i class="fa fa-newspaper"></i>&nbsp;&nbsp; Jobs Applied for     
                            </div></a> 
                        </li>
                        <li><a href="job-offers.php" class="dash-side">
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
                                <i class="fa fa-bell"></i>&nbsp;&nbsp; Notifications <sup>5</sup> 
                            </div></a> 
                        </li>
                    </ul>
                     </div>
            </div>
                
            

            <div class="col-12 col-md-6" id="dash_banner_b">
                <div id="bannerB_welcome">
                    <h2>Hi <span>Jack</span>, Welcome back!</h2>
                    <p>Admin</p>
                </div>
                <div id="bannerB_One">
                    <div class="row">
                        <div class="col-12 col-md-5" id="bannerA">
                            <img src="images/not.png" alt="" class="img-fluid">&nbsp;&nbsp;
                            <img src="images/not-line.png" alt="" class="img-fluid"> &nbsp;&nbsp;
                            <b>50</b> <span>+</span> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jobs applied for
                        </div> 
                        <a href="jobs-applied.php"><div id="arrow-right1"><i class="fas fa-arrow-right"></i></div></a> 


                        <div class="col-12 col-md-5" id="bannerB">
                            <img src="images/not.png" alt="" class="img-fluid">&nbsp;&nbsp;
                            <img src="images/not-line.png" alt="" class="img-fluid"> &nbsp;&nbsp;
                            <b>20</b> <span>+</span> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job offers
                        </div>
                        <a href="job-offers.php"><div id="arrow-right"><i class="fas fa-arrow-right"></i></div></a>
                    </div>
                </div>

                <div id="bannerB_Two">
                    <div class="row">
                        <div class="col-12 col-md-5" id="bannerA">
                            <img src="images/not1.png" alt="" class="img-fluid">&nbsp;&nbsp;
                            <img src="images/not-line.png" alt="" class="img-fluid"> &nbsp;&nbsp;
                            <b>10</b> <span>+</span> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notification
                        </div>
                        <a href="notification.php"><div id="arrow-right1"><i class="fas fa-arrow-right"></i></div></a>


                        <div class="col-12 col-md-5" id="bannerB">
                            <img src="images/not2.png" alt="" class="img-fluid">&nbsp;&nbsp;
                            <img src="images/not-line.png" alt="" class="img-fluid"> &nbsp;&nbsp;
                            <b>12</b> <span>+</span> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vacancies
                        </div>
                        <a href="#"><div id="arrow-right"><i class="fas fa-arrow-right"></i></div></a>
                    </div>
                </div>
            </div>
                
            <div class="col-12 col-md-3" id="dash_banner_c">
                <div class="circle_area">
                    <div id="areaa">
                        <svg class="radial-progress" data-percentage="75" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 60.58406743523136;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
                        </svg> 
                        <p><b>Accuracy</b></p>
                    </div>

                    <div id="areaa">
                        <svg class="radial-progress" data-percentage="82" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 25.58406743523136;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
                        </svg>
                        <p><b>Timing</b></p>
                    </div>

                    <div id="areaa">
                        <svg class="radial-progress" data-percentage="82" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">80%</text>
                        </svg>
                        <p id="areap"><b>Management</b></p>
                    </div>
                        

                    </div>
            </div>
        </div>
</div>


<?php include 'footer_dash.php'; ?>



<!-- Link to jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> 

<!-- Initializer Script -->
<script>
$(function(){

    // Remove svg.radial-progress .complete inline styling
    $('svg.radial-progress').each(function( index, value ) { 
        $(this).find($('circle.complete')).removeAttr( 'style' );
    });

    // Activate progress animation on scroll
    $(window).scroll(function(){
        $('svg.radial-progress').each(function( index, value ) { 
            // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
            if ( 
                $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
            ) {
                // Get percentage of progress
                percent = $(value).data('percentage');
                // Get radius of the svg's circle.complete
                radius = $(this).find($('circle.complete')).attr('r');
                // Get circumference (2πr)
                circumference = 2 * Math.PI * radius;
                // Get stroke-dashoffset value based on the percentage of the circumference
                strokeDashOffset = circumference - ((percent * circumference) / 100);
                // Transition progress for 1.25 seconds
                $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
            }
        });
    }).trigger('scroll');

});
</script>
</body>
</html>