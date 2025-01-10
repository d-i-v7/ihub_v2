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

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!-- Alertify cdn links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/themes/default.min.css" />

</head>
<body>

<div  id="global-loader">
<div class="whirly-loader"> </div>
</div>


<div class="main-wrapper">

<!-- ⬇️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->
<!-- side bar -->
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="">
<a href="index.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu ">
<a class="active" href="javascript:void(0);"><img src="assets/img/icons/house.svg" alt="img"><span> Home Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a class="active" href="edit_herro_text.php">Edit Herro Text</a></li>
<li><a href="image.php">Image Slider</a></li>
</ul>
</li>
<li class="submenu">
<a  href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> About Us Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="about-us.php">Edit About Page</a></li>
<li><a href="pos.html">About Us Image</a></li>
<li><a href="our_val.php">Our Values</a></li>
 
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Our Services</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="our_ser.php">Our Services List</a></li>

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
?>
<!-- ⬆️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Herro Tex Management</h4>
<h6>Add/Update Herro text</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<?php  
if(isset($_POST['update'])){

    $text1=$_POST['text1'];
    $text2=$_POST['text2'];
    $btn_text=$_POST['text3'];

    if(empty($text1)||(empty($text2)||(empty($btn_text)))){

        $error="Please Submit A Complate Form <style>.alert-danger{display:block !important;} .alert-success{display:none !important;}</style>";
    

    }else{

$read_exit=mysqli_query($conn,"SELECT * FROM hero WHERE text_1='$text1' AND text_2='$text2' AND btn_text='$btn_text'");

if(mysqli_num_rows($read_exit)>0){

    $error="These Texts Are All ready Have! <style>.alert-danger{display:block !important;} .alert-success{display:none !important;}</style>";

}else{

        $update=mysqli_query($conn,"UPDATE hero set  text_1='$text1',text_2='$text2',btn_text='$btn_text'");

if($update){

    $success="Successfully Updated <style>.alert-success{display:block !important;} .alert-danger{display:none !important;}</style>";
   

}else{

    echo "$conn->error";
  
}

    }

}}

?>

<div style="display:none;" class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success:</strong><?php echo $success ; ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div style="display:none;" class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error:</strong><?php echo $error ; ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<form action="" method="post">
<div class="col-lg-12">
<div class="form-group">
<label>Herro Topic</label>
<!-- ===THIS PHP CODE READING A HERRO TEXT=== -->
<?php
$read_herro_text=mysqli_query($conn,"SELECT * FROM hero WHERE id='1'");
if(mysqli_num_rows($read_herro_text)>0)
{

while($row=(mysqli_fetch_assoc($read_herro_text))){

$text1=$row['text_1'];
$text2=$row['text_2'];
$btn_text=$row['btn_text'];



    
    ?>
<input style="color:#000 !important;" name="text1" value="<?php echo $text1 ; ?>" class="form-control" type="text">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Btn Text!</label>
<input value="<?php echo $btn_text ; ?>" name="text3" class="form-control">
<div class="col-lg-12">
<div class="form-group"><br>
<label>Herro Description</label>
<textarea name="text2" class="form-control"><?php echo $text2 ; ?></textarea>
<?php
}
    
}
?>
</div>
</div>

<div class="col-lg-12">
<button name="update" class="btn btn-submit me-2">Update</button>
<a href="index.php" class="btn btn-cancel">Cancel</a>
</form>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>

<!-- alertify cdn link -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

</body>
</html>