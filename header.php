<script>
    $(function (){
        
        $('#heading_nav_icon').click(function(){
            $('#heading_nav').toggle(50);
        })

    })

</script>


<div class="container">
    <div class="row" id="heading">
        <div class="col-6" id="logo">
            <a href="index.php"><img src="images/logo.png"></a>
        </div>

        
        <div class="col-6" id="login_area">
        <div id="heading_nav_icon" style="margin-left: 20px; margin-top: 20px;">
                    <i class="fa fa-2x fa-bars"> </i> 
                </div>
        
            <div id="log_btnn">
            <a href="login.php" class="btn btn-default top_btn">Login</a>
            <a href="post-job.php" class="btn btn-info top_btn" id="post_btn">Post a Job</a>
            </div>
                
        </div>
        
    </div>

    <div class="row" id="heading_nav">
            <ul>
                <li>
                    <a href="login.php" >Login</a>  
                </li>
                <li>
                    <a href="post-job.php" >Post a Job</a> 
                </li>
            </ul>
    </div>

    
</div>

            