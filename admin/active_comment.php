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
<a class="active" href="javascript:void(0);"><img src="assets/img/icons/coment.svg" alt="img"><span> Comments</span> <span class="menu-arrow"></span></a>
<ul>
<li><a  href="p_comment.php">Padding Coments</a></li>
<li><a class="active" href="active_comment.php">Active Coments</a></li>
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


<div class="page-wrapper cardhead">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Active Comments</h3>

<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Active Comments</li>
</ul>
</div>
</div>

</div>

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Active Coments</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>NO</th>
<th>Sender Image</th>
<th>Sender Name</th>
<th>Comment</th>
<th>Delate</th>

</tr>
</thead>
<tbody>
    
<?php
$read_current_coment=mysqli_query($conn,"SELECT * FROM current_coment");
if(mysqli_num_rows($read_current_coment)>0)
{

    while($row=mysqli_fetch_assoc($read_current_coment)){
echo "<style>
.no-date{
display:none !important;
}
</style><tr><td>$row[id]</td>
<td><img style='border:1px solid #13488e; border-radius:10px;' width='60px' height='60px' src='$row[image]'></td>
<td>$row[name]</td>
<td style='white-space: warp !important;'>$row[coment]</td>



<td><button  class='btn btn-danger delete-btn' data-id='$row[id]'><i class='fa fa-solid fa-trash'></i></button>
</td></tr>

" ;

    }

}

?>

<p class="no-date" style="color:#ec8723; width:100%; position:relative; justify-content: center;
align-items: center;
display: flex;
Active: 40px 0px;
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
                          url: "current_coment_delete.php",
                          data: { id: id },
                          success: function(data){
                              Swal.fire(
                                  'Deleted!',
                                  'Your record has been deleted.',
                                  'success'
                              ).then(() => {
                                  location.href = "active_comment.php"; // Reload the page after successful deletion
                              });
                          }
                      });
                  }
              });
          });
      });
 
</script>

<script>

document.getElementById('avatarInput').addEventListener('change', handleFileSelect);

function handleFileSelect(event) {
  const fileInput = event.target;
  const file = fileInput.files[0];

  // Check if a file is selected
  if (file) {
    // Check if the file type is jpg or jpeg
    if (file.type === 'image/jpeg' || file.type === 'image/jpg'||file.type === 'image/png') {
      // Check image dimensions
      const img = new Image();
      img.src = URL.createObjectURL(file);

      img.onload = function () {
        if (img.width < 500 || img.height < 500) {
          // Show error SweetAlert for small image dimensions
          Swal.fire({
            icon: 'error',
            title: 'Invalid Image Dimensions',
            text: 'Please select an image with dimensions greater than or equal to 500px width and 500px height.',
          });

          // Reset the file input
          fileInput.value = '';
        } else {
          // Display the custom text as the preview
          document.getElementById('fileUploadText').textContent = "File Selected: " + file.name;

          // Show success SweetAlert for successful upload
          // Swal.fire({
          //   position: "top-end",
          //   icon: "success",
          //   title: "Uploaded",
          //   showConfirmButton: false,
          //   timer: 1500
          // });
        }
      };
    } else {
      // Show error SweetAlert for unsupported file type
      Swal.fire({
        icon: 'error',
        title: 'Unsupported File Type',
        text: 'Please select a JPG or JPEG or PNG file.',
      });

      // Reset the file input
      fileInput.value = '';
    }
  } else {
    // Reset the text when no file is selected
    document.getElementById('fileUploadText').textContent = "Click Here Or Drag and drop an Image to upload";
  }
}
</script>

</body>
</html>