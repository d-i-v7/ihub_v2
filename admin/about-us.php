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
<a  href="javascript:void(0);"><img src="assets/img/icons/house.svg" alt="img"><span> Home Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a  href="edit_herro_text.php">Edit Herro Text</a></li>
<li><a href="image.php">Image Slider</a></li>
</ul>
</li>
<li class="submenu">
<a class="active"  href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> About Us Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a class="active" href="about-us.php">Edit About Page</a></li>
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
?>
<!-- ⬆️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>About Tex Management</h4>
<h6>Add/Update About text</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<?php  
if(isset($_POST['update'])){

    $topic1=$_POST['topic_1'];
    $topic2=$_POST['topic_2'];
    $topic3=$_POST['topic_3'];
    $topic4=$_POST['topic_4'];
    $sh_text=$_POST['sh_text'];
    $l_text=$_POST['l_text'];
    $our_v=$_POST['our_v'];
    $our_m=$_POST['our_m'];

    if(empty($topic1)||(empty($topic2)||(empty($topic3)||(empty($topic4)||(empty($sh_text)||(empty($l_text)||(empty($our_v)||(empty($our_m))))))))){

        $error="Please Submit A Complate Form <style>.alert-danger{display:block !important;} .alert-success{display:none !important;}</style>";
    

    }else{

$read_exit=mysqli_query($conn,"SELECT * FROM about_us WHERE our_v='$our_v' AND short_text='$sh_text' AND long_text='$l_text'");

if(mysqli_num_rows($read_exit)>0){

    $error="These Texts Are All ready Have! <style>.alert-danger{display:block !important;} .alert-success{display:none !important;}</style>";

}else{

        $update=mysqli_query($conn,"UPDATE about_us set  topic='$topic1',topic_2='$topic2',topic_3='$topic3',topic_4='$topic4',long_text='$l_text',short_text='$sh_text',our_v='$our_v',our_m='$our_m'");

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
<label>About Us Topic</label>
<!-- ===THIS PHP CODE READING A HERRO TEXT=== -->
<?php
$read_about_text=mysqli_query($conn,"SELECT * FROM about_us WHERE id='1'");
if(mysqli_num_rows($read_about_text)>0)
{

while($row=(mysqli_fetch_assoc($read_about_text))){

$topic1=$row['topic'];
$topic2=$row['topic_2'];
$sh_text=$row['short_text'];
$l_text=$row['long_text'];
$topic3=$row['topic_3'];
$our_v=$row['our_v'];
$topic4=$row['topic_4'];
$our_m=$row['our_m'];



    
    ?>
<input style="color:#000 !important;" name="topic_1" value="<?php echo $topic1 ; ?>" class="form-control" type="text">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Topic 2</label>
<input value="<?php echo $topic2 ; ?>" name="topic_2" class="form-control">
</div></div>
<div class="col-lg-12">
<div class="form-group">
<label>Short Text</label>
<textarea name="sh_text" class="form-control"><?php echo $sh_text ; ?></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Long Text</label>
<textarea name="l_text"  class="form-control"><?php echo $l_text ; ?></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Vission Topic</label>
<input value="<?php echo $topic3 ; ?>" name="topic_3" class="form-control">
</div></div>
<div class="col-lg-12">
<div class="form-group">
<label>Our Vission</label>
<textarea name="our_v"  class="form-control"><?php echo $our_v ; ?></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Mission Topic</label>
<input value="<?php echo $topic4 ; ?>" name="topic_4" class="form-control">
</div></div>
<div class="col-lg-12">
<div class="form-group">
<label>Our Mission</label>
<textarea name="our_m"  class="form-control"><?php echo $our_m ; ?></textarea>
</div>
</div>

<?php
}
    
}
?>
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