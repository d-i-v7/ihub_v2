<!-- Include Security Code -->
<?php
include "conn.php";
include "security.php";
if(isset($_SESSION['active'])){

    echo"
    <script>alert('$_SESSION[active]');</script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Dreams Pos admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!-- Alertify cdn links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/themes/default.min.css" />

</head>
<body>

<!-- <div id="global-loader">
<div class="whirly-loader"> </div>
</div> -->
<!-- Read User Image -->
<?php
$read=mysqli_query($conn,"SELECT * FROM users WHERE id='$_SESSION[user_id]'");

if($rowka=mysqli_num_rows($read)>0){


    while($rowka=mysqli_fetch_assoc($read)){


$user_name=$rowka['user_name'];


 
?>
<div class="bg-container" id="bgContainer">
    <div class="greeting" id="greeting">Hi <?php echo $user_name; }}?>!</div>
  </div>
<div class="main-wrapper">

<!-- ⬇️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->
<!-- side bar -->
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="index.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu ">
<a href="javascript:void(0);"><img src="assets/img/icons/house.svg" alt="img"><span> Home Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="edit_herro_text.php">Edit Herro Text</a></li>
<li><a href="image.php">Image Slider</a></li>
</ul>
</li>
<li class="submenu">
<a  href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> About Us Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="about-us.php">Edit About Page</a></li>
<li><a href="about_img.php">About Us Image</a></li>
<li><a href="our_val.php">Our Values</a></li>
 
</ul>
</li>
<li class="submenu">
<a  href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Our Serveces Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a  href="our_ser.php">Our Services List</a></li>
</ul>
</li>
<li class="submenu">
<a href="our_prog.php"><img src="assets/img/icons/expense1.svg" alt="img"><span> Our Programs</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="our_prog.php">Programs List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users.svg" alt="img"><span> Our Team</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="our_team.php">Our Team List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/coment.svg" alt="img"><span> Comments</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="p_comment.php">Padding Coments</a></li>
<li><a href="active_comment.php">Active Coments</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/calendar.svg" alt="img"><span> Events</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="event.php">Events List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span>Impact</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="Impact.php">Impact List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users.svg" alt="img"><span>Our Partner</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="partner.php">Parteners List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/book-open.svg" alt="img"><span>Blogs</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="blog.php">Blogs List</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<?php

include "header.php";
include "dashboard.php";
?>
<!-- ⬆️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->


</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>

<!-- alertify cdn link -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

</body>
</html>