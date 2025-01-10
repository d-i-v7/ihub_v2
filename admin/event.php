<!-- Include Security Code -->
<?php
include "conn.php";
include "security.php";
// if(isset($_SESSION['active'])){

//     echo"
//     <script>alert('$_SESSION[active]');</script>
//     ";
// }



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
<!-- PHP UPLOAD CODE -->

<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">


<!-- ⬇️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->
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
<li><a href="edit_herro_text.php">Edit Herro Text</a></li>
<li><a  href="image.php">Image Slider</a></li>
</ul>
</li>
<li class="submenu">
<a  href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> About Us Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="about-us.php">Edit About Page</a></li>
<li><a href="about_img.php">About Us Image</a></li>
<li><a  href="our_val.php">Our Values</a></li>
 
</ul>
</li>
<li class="submenu">
<a  href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Our Services Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a  href="our_ser.php">Our Programs List</a></li>
</ul>
</li>
<li class="submenu">
<a  href="our_prog.php"><img src="assets/img/icons/expense1.svg" alt="img"><span> Our Programs</span> <span class="menu-arrow"></span></a>
<ul>
<li><a  href="our_prog.php">Programs List</a></li>
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
<a class="active" href="javascript:void(0);"><img src="assets/img/icons/calendar.svg" alt="img"><span> Events</span> <span class="menu-arrow"></span></a>
<ul>
<li><a class="active" href="event.php">Events List</a></li>
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


<div class="page-wrapper cardhead">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Our Event</h3>

<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Our Event</li>
</ul>
</div>
</div>

</div>

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Event List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>NO</th>
<th>Sender Name</th>
<th>Sender Email</th>
<th>Event Description</th>
<th>Delate</th>

</tr>
</thead>
<tbody>
    
<?php
$read_event=mysqli_query($conn,"SELECT * FROM event");
if(mysqli_num_rows($read_event)>0)
{

    while($row=mysqli_fetch_assoc($read_event)){
echo "<style>
.no-date{
display:none !important;
}
</style><tr><td>$row[id]</td>
<td>$row[name]</td>
<td>$row[email]</td>
<td>$row[event]</td>



<td><button  class='btn btn-danger delete-btn' data-id='$row[id]'><i class='fa fa-solid fa-trash'></i></button>
</td></tr>

" ;

    }

}

?>
<p class="no-date" style="color:#ec8723; width:100%; position:relative; justify-content: center;
align-items: center;
display: flex;
padding: 40px 0px;
font-size: 30px;
font-weight:bold !important;
">No Data Availible Now</p>
</tbody>
</table>
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

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>


<!-- alertify cdn link -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

  <!-- Add SweetAlert library -->
  <script src="js/sweet-alert.js"></script>

<!-- =====================DELETE RECORD JS==================== -->
<script>
  
// <!-- delate record js code -->

$(document).ready(function(){
          $(".delete-btn").click(function(){
              var id = $(this).data("id");
              
              // Trigger SweetAlert confirmation
              Swal.fire({
                  title: 'Are you sure?',
                  text: 'You won\'t be able to revert this!',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                          type: "POST",
                          url: "event_delete.php",
                          data: { id: id },
                          success: function(data){
                              Swal.fire(
                                  'Deleted!',
                                  'Your record has been deleted.',
                                  'success'
                              ).then(() => {
                                  location.href = "event.php"; // Reload the page after successful deletion
                              });
                          }
                      });
                  }
              });
          });
      });
 
</script>


</body>
</html>