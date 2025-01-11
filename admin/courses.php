<!-- Include Security Code -->
<?php
include "conn.php";
include "security.php";
// if(isset($_SESSION['active'])){

//     echo"
//     <script>alert('$_SESSION[active]');</script>
//     ";
// }
$errorMessage = "";
$successMessage = "";
// Read update
// header('Content-Type: application/json'); // Ensure JSON response
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateId'])) {
    $updateId = mysqli_real_escape_string($conn, $_POST['updateId']);

    $query = "SELECT * FROM courses WHERE id = '$updateId'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $course = mysqli_fetch_assoc($result);
        echo json_encode($course);
    } else {
        echo json_encode(["error" => "Course not found"]);
    }
} else {
    echo json_encode(["error" => "Invalid request"]);
}
// Delete
if($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['deleteId']))
{
 $deleteId = $_POST['deleteId'];

 $delete = mysqli_query($conn, "DELETE FROM courses WHERE id = '$deleteId'");
}

// Insert
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveSubmit']))
{
   $courseName = $_POST['courseName'];
   $courseTeacher= $_POST['courseTeacher'];
   $startDate = $_POST['startDate'];

   if($courseName == NULL || $courseTeacher == NULL || $startDate == NULL)
   {
        $errorMessage = "<div class='alert alert-danger'>Please Submit A Complete Form</div>";
   }
   else
   {
    $readold = mysqli_query($conn ,"SELECT * FROM courses WHERE courseName = '$courseName' AND startDate = '$startDate'");
    if($readold && mysqli_num_rows($readold)>0)
    {
        $errorMessage = "<div class='alert alert-danger'>This Course Is Already Exits</div>";
    }
    else
    {
        $insert = mysqli_query($conn , "INSERT INTO courses (courseName,courseTeacher , startDate)VALUES('$courseName','$courseTeacher','$startDate')");
        if($insert)
        {
            $successMessage = "<div class='alert alert-success'>SuccessFully Inserted</div>";
        }
        else
        {
            $errorMessage = "<div class='alert alert-danger'>Some Thing Went Wrong</div>";
        }
    }
   }
}
// Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateId'])) {
    // Get the updateId from the POST request
    $updateId = $_POST['updateId']; // Make sure this is being passed via AJAX or form submission

    // Get the new values to update
    $courseName = $_POST['courseName'];
    $courseTeacher = $_POST['courseTeacher'];
    $startDate = $_POST['startDate'];

    // Check if any field is empty
    if ($courseName == NULL || $courseTeacher == NULL || $startDate == NULL) {
        $errorMessage = "<div class='alert alert-danger'>Please Submit A Complete Form</div>";
    } else {
        // Check if the course already exists (if you want to avoid duplicates)
        $readOld = mysqli_query($conn, "SELECT * FROM courses WHERE courseName = '$courseName' AND startDate = '$startDate' AND id != '$updateId'");
        if ($readOld && mysqli_num_rows($readOld) > 0) {
            $errorMessage = "<div class='alert alert-danger'>This Course Already Exists</div>";
        } else {
            // Update the course record
            $update = mysqli_query($conn, "UPDATE courses SET courseName = '$courseName', courseTeacher = '$courseTeacher', startDate = '$startDate' WHERE id = '$updateId'");

            if ($update) {
                $successMessage = "<div class='alert alert-success'>Successfully Updated</div>";
            } else {
                $errorMessage = "<div class='alert alert-danger'>Something Went Wrong</div>";
            }
        }
    }
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
<a class="active" href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> About Us Page</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="about-us.php">Edit About Page</a></li>
<li><a href="about_img.php">About Us Image</a></li>
<li><a class="active" href="our_val.php">Our Values</a></li>
 
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="courses.php" method="post" enctype="multipart/form-data">
          <label for="Main_Topic">Course Name</label>
      
          <input class="from-control" name="courseName"  type="text">
          <label for="Main_Topic">Course Teacher</label>
          <input  class="form-control" name="courseTeacher">
          <label for="Main_Topic">Start Date</label>
          <input  class="form-control" type="date" name="startDate">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button onclick="send();" name="saveSubmit" type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Update modal -->
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="courses.php" method="post" enctype="multipart/form-data">
          <label for="courseName">Course Name</label>   
           <input class="from-control" name="updateId" id="courseId" hidden  type="text">
          <input class="form-control" id="courseName" name="courseName" type="text">

          <label for="courseTeacher">Course Teacher</label>
          <input class="form-control" id="courseTeacher" name="courseTeacher" type="text">

          <label for="startDate">Start Date</label>
          <input class="form-control" id="startDate" name="startDate" type="date">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="updateSubmit" name="updateSubmit" type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="page-wrapper cardhead">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Our Courses</h3>

<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Our Courses</li>
</ul>
</div>
</div>
<button type="button"  class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
 <i class="fas fa-plus"></i>&nbsp; Add Course
</button>
</div>

<div class="row">
<div class="col-lg-12">
<div class="card">
    <div class="col-12">
        <?php  echo $errorMessage , $successMessage;?>
    </div>
<div class="card-header">
<h4 class="card-title">Courses List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>NO</th>
<th>Course Name</th>
<th>Course Teacher</th>
<th>Start Date</th>
<th>Edit</th>
<th>Delate</th>
</tr>
</thead>
<tbody>
    
<?php
$read_val=mysqli_query($conn,"SELECT * FROM courses");
if(mysqli_num_rows($read_val)>0)
{

    while($row=mysqli_fetch_assoc($read_val)){
echo "<style>
.no-date{
display:none !important;
}
</style><tr><td>$row[id]</td>
<td>$row[courseName]</td>
<td style='word-break: break-all;'>$row[courseTeacher]</td>
<td style='word-break: break-all;'>$row[startDate]</td>
<td><button style='color:#fff !important;' data-id='$row[id]' id='updateBtn' class='btn btn-primary'><i class='fas fa-edit'></i></button>
</td>
<td><button class='btn btn-danger delete-btn' data-id='$row[id]'><i class='fa fa-solid fa-trash'></i></button>
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
                          url: "courses.php",
                          data: { deleteId: id },
                          success: function(data){
                              Swal.fire(
                                  'Deleted!',
                                  'Your record has been deleted.',
                                  'success'
                              ).then(()=>{window.location.reload();})
                          }
                      });
                  }
              });
          });
      });
 
// Update Logic
$(document).on("click", "#updateBtn", function () {
    let updateId = $(this).attr("data-id");

    $.ajax({
        url: "courseRead.php",
        type: "POST",
        data: { updateId: updateId },
        dataType: "html",
        success: function (response) {
            try {
                let courseData = JSON.parse(response); // Parse JSON response

                // Populate modal fields
                $("#courseId").val(courseData.id || "");
                $("#courseName").val(courseData.courseName || "");
                $("#courseTeacher").val(courseData.courseTeacher || "");
                $("#startDate").val(courseData.startDate || "");

                // Show the modal
                $("#updateModal").modal("show");
            } catch (e) {
                console.error("Invalid JSON response:", response);
                alert("Error: Invalid response from server.");
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX error:", error);
        }
    });
});



</script>
</body>
</html>