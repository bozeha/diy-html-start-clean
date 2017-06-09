<?php include 'settings/head.php'; ?>
<?php
if(session_status() == PHP_SESSION_NONE){  
    session_start(); 
    //echo "tttttttttttttttttttttt".$_SESSION["id"];
    if($_SESSION["id"]==null){
       // echo "hhhhhhhhhhh";
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
 
 /// remove all admin element to unadmin users like option to delet guides
 /*if (($_SESSION['utype']!='admin')&&($_SESSION['utype']!='super_admin'))
 {
     echo "<script>$('.admin-privileges').remove()</script>";

    } */


?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="style/style_control.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts/dashboard.js"></script>
	<meta charset="utf-8" />
	<!--<link rel="icon" type="image/png" href="images/web/favicon.ico">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style/dashboard.css" rel="stylesheet" />





    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


</head>
<body>
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
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active" id='li-guide-form'>
                    <a href="dashboard.php?dash=new-guide-form">
                        <i class="pe-7s-graph"></i>
                        <p>הוספת מדריך</p>
                    </a>
                </li>
                <li id='li-new-access'>
                    <a href="dashboard.php?dash=new-access">
                        <i class="pe-7s-note2"></i>
                        <p>הוספת מיצרך</p>
                    </a>
                </li>
                <li id='li-manage-users' class='admin-privileges'>
                    <a href="dashboard.php?dash=manage-users">
                        <i class="pe-7s-user"></i>
                        <p>ערוך משתמשים</p>
                    </a>
                </li>
                <li id='li-manage-guides'>
                    <a href="dashboard.php?dash=manage-guides">
                        <i class="pe-7s-news-paper"></i>
                        <p>ניהול מדריכים</p>
                    </a>
                </li>
                <li id='li-manage-access'>
                    <a href="dashboard.php?dash=manage-access">
                        <i class="pe-7s-science"></i>
                        <p>ערוך מיצרכים</p>
                    </a>
                </li>
                <li id='li-manage-sub'>
                    <a href="dashboard.php?dash=manage-sub">
                        <i class="pe-7s-rocket"></i>
                        <p>הוסף קטגוריה</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
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

    <div class="main-panel">
      

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


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
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
