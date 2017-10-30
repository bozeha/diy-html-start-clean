<?php include 'settings/head.php'; ?>
<?php
if(session_status() == PHP_SESSION_NONE){  
    session_start(); 
    if($_SESSION["id"]==null){
        }
}
if(!(isset($_SESSION["id"]))||($_SESSION["id"]=='')||($_SESSION["id"]==null))
{
    //ob_start();
    error_reporting(E_ALL);
ini_set('display_errors','On');
   header("Location:/");
    echo "5555555555555555555";
   
}

if(isset($_GET['dash'])) {
    $current_dash = $_GET['dash'];
    $current_dash = $current_dash.".php";
} else {
    $current_dash = "new-guide-form.php";
}
 
 

?>
<!doctype html>
<html lang="en">
<head>
    
    <link href="style/style_control.css" rel="stylesheet" />
    
    <script src="scripts/dashboard.js"></script>
	<meta charset="utf-8" />


    
	<!--<link rel="icon" type="image/png" href="images/web/favicon.ico">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" />-->
    <link href="style/dashboard.css" rel="stylesheet" /> 

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <!-- <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/> -->


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<div class="wrapper">
    <div id='resize_div'></div>
    <div id='load_div'></div>
    <div id='pop_message'>

        <!-- Modal befor delet guide-->
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">הודעת הזהרה</h4>
            </div>
            <div class="modal-body">
                <p>האם אתה בטוח שאתה רוצה למחוק את המדריכים המסומנים</p>
                <button  type="button" class="btn btn-default" onclick=elements_to_remove('guides')>אשר</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">בטל</button>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
            </div>

        </div>
        <!--   end model 1  -->

        <!-- Modal 2 set timout  -->
        <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">הודעת הזהרה</h4>
            </div>
            <div class="modal-body">
                <p>האם אתה בטוח שאתה רוצה למחוק את המדריכים המסומנים</p>
                <button  type="button" class="btn btn-default" onclick=elements_to_remove('guides')>אשר</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">בטל</button>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
            </div>

        </div>
        <!--   end model 2  -->
    </div>
</div>

<?php 
include 'content/top_main.php';

?>
<div class="container">
<div class="row">
    <div class="sidebar col-3" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <!-- <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div> -->

            <ul class="sidebar">
                <li class=" nav-link" id='li-guide-form'>
                    <a class=" active btn btn-primary btn-lg " role="button" href="dashboard.php?dash=new-guide-form">
                        <i class="pe-7s-graph"></i>
                        <p>הוספת מדריך</p>
                    </a>
                </li>
                <li class="nav-link" id='li-new-access'>
                    <a class="btn btn-primary btn-lg " role="button" href="dashboard.php?dash=new-access">
                        <i class="pe-7s-note2"></i>
                        <p>הוספת מיצרך</p>
                    </a>
                </li>
                <li id='li-manage-users' class='nav-link admin-privileges'>
                    <a class="btn btn-primary btn-lg " role="button" href="dashboard.php?dash=manage-users">
                        <i class="pe-7s-user"></i>
                        <p>ערוך משתמשים</p>
                    </a>
                </li>
                <li class="nav-link" id='li-manage-guides'>
                    <a class="btn btn-primary btn-lg " role="button" href="dashboard.php?dash=manage-guides">
                        <i class="pe-7s-news-paper"></i>
                        <p>ניהול מדריכים</p>
                    </a>
                </li>
                <li class="nav-link" id='li-manage-access'>
                    <a class="btn btn-primary btn-lg " role="button" href="dashboard.php?dash=manage-access">
                        <i class="pe-7s-science"></i>
                        <p>ערוך מיצרכים</p>
                    </a>
                </li>
                <li class="nav-link" id='li-manage-sub'>
                    <a class="btn btn-primary btn-lg " role="button" href="dashboard.php?dash=manage-sub">
                        <i class="pe-7s-rocket"></i>
                        <p>הוסף קטגוריה</p>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="btn btn-primary btn-lg " role="button" href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<!--<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->
            </ul>
    	</div>
    </div>

    <div class="main-panel col-9">
      

     <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div id='main_php_div' class="content table-responsive table-full-width">
                               <?php include $current_dash;?>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                    
                    </div>


                </div>
            </div>
        </div>



    </div>
    </div>
    </div>
</div>


</body>

    <!--   Core JS Files-->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<!--<script src="assets/js/chartist.min.js"></script>-->

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<!--<script src="assets/js/demo.js"></script>-->

	<!--<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>-->

</html>
