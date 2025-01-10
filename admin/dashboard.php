<?php
include "security.php";
?>
<div class="page-wrapper">
<div class="content">
    <!-- Read User Image -->

<h2 style="padding:30px; font-weight:bold ;">Hello <strong style="color:#ec8723; text-transform:capitalize; font-weight:bolder;"><?php   echo $user_name; ?></strong> How Are You Today?</h2>
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/product.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
    <?php
    // Read Rows OF services

$ser=mysqli_query($conn,"SELECT * FROM our_ser ");

$serv_rows=mysqli_num_rows($ser);
    
    ?>
    <?php
    
    // Read Rows OF programs

$prog=mysqli_query($conn,"SELECT * FROM our_prog ");

$prog_rows=mysqli_num_rows($prog);
    
    ?>
    <?php
    // Read Rows OF Slider IMage

$s_img=mysqli_query($conn,"SELECT * FROM slide_image ");

$s_img_rows=mysqli_num_rows($s_img);
    
    ?>
    <?php
    // Read Rows OF values

$val=mysqli_query($conn,"SELECT * FROM our_val");

$val_rows=mysqli_num_rows($val);
    
    ?>
    <?php
    // Read Rows OF Our Team

$team=mysqli_query($conn,"SELECT * FROM our_team");

$team_rows=mysqli_num_rows($team);
    
    ?>
    <?php
    // Read Rows OF Padding Coments

$p_coment=mysqli_query($conn,"SELECT * FROM p_coment");

$p_coment_rows=mysqli_num_rows($p_coment);
    
    ?>
    <?php
    // Read Rows OF Current Coments

$current_coment=mysqli_query($conn,"SELECT * FROM current_coment");

$current_coment_rows=mysqli_num_rows($current_coment);
    
    ?>
    <?php
    // Read Rows OF Current Coments

$event=mysqli_query($conn,"SELECT * FROM event");

$event_rows=mysqli_num_rows($event);
    
    ?>
<h5><span class="counters" data-count="<?php echo $serv_rows ;  ?>"><?php echo $serv_rows ;  ?></span></h5>
<h6>Total Of Our Services</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/settings.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5><span class="counters" data-count="<?php echo $prog_rows ;  ?>"><?php echo $prog_rows ;  ?></span></h5>
<h6>Total Our Programs</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash2">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/image.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5><span class="counters" data-count="<?php echo $s_img_rows ;  ?>"><?php echo $s_img_rows ;  ?></span></h5>
<h6>Total Of Image Slide</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash3">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash4.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5><span class="counters" data-count="<?php  echo $val_rows ; ?>"><?php  echo $val_rows ; ?></span></h5>
<h6>Total Our Values</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4><?php echo $team_rows ;  ?></h4>
<h5>Members</h5>
</div>
<div class="dash-imgs">
<i data-feather="users"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das1">
<div class="dash-counts">
<h4><?php echo $p_coment_rows  ?></h4>
<h5>Padding Coments</h5>
</div>
<div class="dash-imgs">
<i data-feather="message-circle"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4><?php  echo $current_coment_rows; ?></h4>
<h5>Active Coments</h5>
</div>
<div class="dash-imgs">
<i data-feather="message-square"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das3">
<div class="dash-counts">
<h4><?php echo $event_rows ;  ?></h4>
<h5>Events</h5>
</div>
<div class="dash-imgs">
<i data-feather="calendar"></i>
</div>
</div>
</div>
</div>

</div>
</div>