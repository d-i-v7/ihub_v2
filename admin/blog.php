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
<!-- my api  -->
<script
            src="https://cdn.tiny.cloud/1/yg9h2cr4wt8mirwpaxeyh1qsxtcycsh3jw5su4uon64elq39/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
<style>
    
/* ================Start Our Blogs================ */
.blogs
{
    width:100%;
    padding: 0px 0px 50px 0px;
    display: flex;
    align-items: center;
    background-color: var(--d-bg-color);
    flex-direction: column;
}
body.l-mode .blogs
{
    background-color: var(--l-bg-color);
}
.blogs .blogs-header
{
    width: 100%;
    justify-content: center;
    text-align: center;
    flex-direction: column;
}
.blogs .blogs-header h1
{
    color: var(--s-color);
}
body.l-mode .blogs-header h1
{
    color: var(--p-color);
}
.blogs .blogs-header p
{
    color: #000;
}
body.l-mode .blogs .blogs-header p
{
    color: #000;
}
.blogs .clumns
{
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    padding: 30px 0px;
    flex-wrap: wrap;
    padding-bottom: 100px;
}
.blogs .clumns .clumn
{
    width: 40vh;
    background-color: #eee;
    overflow: hidden;
    border-radius: 10px ;
    display: flex;
    flex-direction: column;
    height: 50vh;
    justify-content: space-between;
    box-shadow: 2px 3px 3px -1px rgba(0, 0, 0, 0.28);
    margin: 20px;
}
body.l-mode .blogs .clumns .clumn
{
    background-color: #000;
}
.blogs .clumns .clumn .image
{
    width: 100%;
    height: 26vh !important;
    /* background-color: red; */
    overflow: hidden;
    border-radius: 10px 10px 0px 0px;
    cursor: pointer;
}
.blogs .clumns .clumn .image img
{
    width: 100%;
    transition: 0.5s;
    cursor: pointer;

}
.blogs .clumns .clumn .image img:hover
{
    filter: blur(01.px);
    transform: scale(1.1);
}
.blogs .clumns .clumn .title , .blogs .clumns .clumn .desc ,.blogs .clumns .clumn .read-more,.blogs .clumns .clumn .date
{
padding:  10px;
}
.blogs .clumns .clumn .title 
{
    color: #ec8723;
    font-size: 23px;
}
body.l-mode .blogs .clumns .clumn .title
{
    color: #13488e;
}
 .blogs .clumns .clumn .desc
{
    font-size: 14px;
    width: 100%;
    word-wrap: break-word;
    word-break: break-all;
    color: #000;
}
.blogs .clumns .clumn .date
{
font-size: 14px;
color: #000;
}



/* ================End Our Blogs================ */
</style>
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

?>
 <div class="page-wrapper">


        <!-- =============================Start Our Blog AREA ================================= -->
        <div class="blogs">
            <div class="blogs-header">
                <div style="position: relative;" class="card-header flex">
                <h1>Our  Blogs</h1>
                <button onclick="document.location=('add-blog.php')" style="position: absolute; right:20px; top:20px;" class="btn btn-primary float-end "><i class="fas fa-plus"></i>&nbsp;Create New Blog</button></div>
            </div>

            <div class="clumns">
                <?php
$read=mysqli_query($conn,"SELECT * FROM blog");
if(mysqli_num_rows($read)>0)
{
    while($row=mysqli_fetch_assoc($read))
    {
        $read_title=$row['title'];
        $read_con=$row['con1'];
        $read_image=$row['image'];
        $read_date=$row['create_date'];
        $read_id=$row['id'];

                ?>
                <div class="clumn">
                  <div class="image">  <img src="  <?php echo $read_image ;  ?>" alt="Blog Image.."></div>
                    <div class="title">
                   <?php echo $read_title ;  ?>
                    </div>
                    <div class="desc">
                    <?php echo $read_con ;  ?>
                    </div>
                    <div class="date"><i class="fas fa-calendar"></i>&nbsp;  <?php echo $read_date ;  ?></div>
                   <?php  
                   echo"
                    <a class='btn rounded-0 btn-primary' href='edit-blog.php?blog_id=$read_id'><i class='fas fa-edit'></i> &nbsp;Edit</a>
                    <button class='btn btn-danger  rounded-0 delete-btn' data-id='$read_id'><i class='fa fa-solid fa-trash'></i>&nbsp;Delete</button>
               "; ?>
                    </div><?php     }
} ?>
              
            </div>
           
        </div>

        <!-- =============================End Our Blog AREA ================================= -->
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
 <!-- Add SweetAlert library -->
 <script src="js/sweet-alert.js"></script>
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
                          url: "blog_delete.php",
                          data: { id: id },
                          success: function(data){
                              Swal.fire(
                                  'Deleted!',
                                  'Your record has been deleted.',
                                  'success'
                              ).then(() => {
                                  location.href = "blog.php"; // Reload the page after successful deletion
                              });
                          }
                      });
                  }
              });
          });
      });

</script>
<!-- alertify cdn link -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

</body>
</html>