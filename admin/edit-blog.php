<!-- Include Security Code -->
<?php
include "conn.php";
include "security.php";
if(isset($_SESSION['active'])){

    echo"
    <script>alert('$_SESSION[active]');</script>
    ";
}
// get id from url
if(isset($_GET['blog_id']))
{
    $b_id=$_GET['blog_id'];
    $_SESSION['b_id']=$b_id;
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
<!--  -->
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
  <!-- Place the following <script> and <textarea> tags in your HTML's <body> -->
  <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize forecolor backcolor | bold italic underline strikethrough | link image media mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            codesample_languages: [
                { text: 'HTML/XML', value: 'markup' },
                { text: 'JavaScript', value: 'javascript' },
                { text: 'CSS', value: 'css' },
            ],
            emoticons_append: {
                custom_mind_blown: {
                    keywords: ['mindblown', 'mind_blown'],
                    char: '😲',
                },
                custom_thumbs_up: {
                    keywords: ['thumbsup', 'thumbs_up'],
                    char: '👍',
                },
            },
            a11y_advanced_options: true,
            media_alt_source: true,
            // Image Plugin Configuration
            images_upload_url: '/your-image-upload-endpoint',
            images_upload_handler: function (blobInfo, success, failure) {
                // Implement your server-side image upload logic here
                // success('Image URL');
                // failure('Error message');
            },
            // Add more features as needed
        });
        tinymce.init({
            selector: 'textarea',
            plugins: 'advtemplate',
            toolbar: 'advtemplate',
            advtemplate_list: [
                { title: 'Template 1', content: '<p>This is template 1 content</p>' },
                { title: 'Template 2', content: '<p>This is template 2 content</p>' },
                // Add more templates as needed
            ],
            // ... other configuration options ...
        });

    </script>
    <div class="page-wrapper">
    <div class="cotainer lg-col-6 p-5">
    <form action="check-b_edit.php" class="form-group" method="post" enctype="multipart/form-data">
        <?php 
        $read=mysqli_query($conn,"SELECT * FROM blog WHERE id='$b_id'");
        if(mysqli_num_rows($read)>0)
        {
while($row=mysqli_fetch_assoc($read))
{
    $read_title=$row['title'];
    $read_con=$row['con1'];
    $read_content=$row['content'];
    $read_date=$row['create_date'];
}}
        ?>
        <label class="mb-2 font-poppins text-body-secondary fw-bold">Blog Title</label>
    <input value="<?php echo $read_title ;  ?>" class="form-control mb-2" type="text" name="title" id="">
        <label class="mb-2 font-poppins text-body-secondary fw-bold">Blog Description</label>
    <input value="<?php echo $read_con ;  ?>" class="form-control mb-2" type="text" name="con1" id="">
    <label class="mb-2 font-poppins text-body-secondary fw-bold">Blog Thumnile Image</label>
    <input value="<?php echo $read_image ;  ?>"  class="form-control mb-2" type="file" name="image" id="">
    <label class="mb-2 font-poppins text-body-secondary fw-bold">Write And Design Your Blog</label>
        <textarea name="content">
        <?php echo $read_content ;  ?>
    </textarea>
    <button type="submit" name="save-blog" class="btn btn-success btn-lg col-12 mt-2 rounded btn-block">Save Your Blog</button>
</form></div>
<footer class="bg-light text-center py-3">
    <p class="mb-0">
        Power By New Ict Center And Created By <a href="https://wa.me/252615546003?text=Hello%20Div%20Tamer" target="_blank">[Div Tamer]</a>
    </p>
</footer>
 <style>
        /* Add this style to hide the TinyMCE logo in the footer */
        .tox-statusbar__branding {
            display: none !important;
        }
    </style>
<!-- ⬆️ ===================INCLUDE A HEADER AND SIDE BAR==================== -->


</div>
<!-- Place the following script tag inside your HTML's <head> or at the end of your <body> -->
<script>
    // Initialize a variable to track whether content or text inputs have been modified
    var isContentModified = false;
    var isInputModified = false;

    tinymce.init({
        selector: 'textarea',
        // ... other TinyMCE configurations ...

        setup: function (editor) {
            // Listen for the 'change' event, which is triggered when content is modified
            editor.on('change', function () {
                isContentModified = true;
            });
        }
    });

    // Add a listener for input changes in text inputs
    document.addEventListener('input', function (event) {
        if (event.target.tagName.toLowerCase() === 'input' && event.target.type === 'text') {
            isInputModified = true;
        }
    });

    window.addEventListener('beforeunload', function (e) {
        // Check if content or text inputs have been modified
        if (isContentModified || isInputModified) {
            var confirmationMessage = "Do you want to reload? You have unsaved changes.";

            // Standard for most browsers
            e.returnValue = confirmationMessage;

            // For some older browsers
            return confirmationMessage;
        }
    });
</script>



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