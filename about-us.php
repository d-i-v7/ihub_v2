<?php
include "admin/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- SITE FAV ICON IS HERE -->
        <link rel="shortcut icon" href="images/fav.png" type="images/x-icon">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <!-- FONT AWSOME  LINK. FONT AWESOME IS A ICON MAKING WEBISTE -->
        <link rel="stylesheet" href="font-awesome/css/all.min.css">
        <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
        <!-- THIS IS CUSTOM CSS LINK -->
        <link rel="stylesheet" href="css/about-us.css">
        <!-- <link rel="stylesheet" href="css/style.css"> -->

  <!-- Alertify CDN link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />

        <title>I Hub</title>
    </head>
    <body>

        <!-- i call my header using php.-->
        <?php
       include("header.php");
       ?>

         <!-- =============================Start About Us AREA ================================= -->
        <!-- About Us Section -->
<!-- ====This is A php Code THat Write A About Us Image And Text From Data Base===== -->
<?php
$read_about = mysqli_query($conn, "SELECT * FROM about_us WHERE id='1'");
if (mysqli_num_rows($read_about) > 0) {

    while ($about_row = mysqli_fetch_assoc($read_about)) {

        $topic1 = $about_row['topic'];
        $topic2 = $about_row['topic_2'];
        $sh_text = $about_row['short_text'];
        $l_text = $about_row['long_text'];
        $topic3 = $about_row['topic_3'];
        $our_v = $about_row['our_v'];
        $topic4 = $about_row['topic_4'];
        $our_m = $about_row['our_m'];
        $about_img = $about_row['image'];

        ?>
        <div class="about-us">
         <div class="header-about"><h1><?php echo $topic1; ?></h1></div>
            <div class="contents">

                <div class="left">
                    <img src="<?php echo $about_img; ?>" alt>
                </div>
                <div class="right">
                    <h1><?php echo $topic2; ?></h1>
                    <p><?php echo $l_text; ?></p>
                        <span class="vession"><i class="fas fa-eye"></i></span>
                        <h1 style="margin-bottom: 0px !important;"><?php echo $topic3; ?></h1>
                        <p><?php echo $our_v; ?></p>
                        <span class="vession"><i class="fas fa-bullseye "></i></span>
                        <h1 style="margin-bottom: 0px !important;"><?php echo $topic4; ?></h1>
                        <p><?php echo $our_m; ?></p>
                </div>
            </div>
        </div>
        <?php
}

}
?>
        <!-- =============================END About Us AREA ================================= -->

        <!-- =============================Start Our Values AREA ================================= -->
        <div class="our-val">
<h1>Our Values</h1>
<div class="o-val-content">
<!-- ===========================READ A ALL VALUES IN DATA BASE============================ -->
<?php
$read_val=mysqli_query($conn,"SELECT * FROM our_val");

if(mysqli_num_rows($read_val)>0)
{
    while($row_val=mysqli_fetch_assoc($read_val)){
        $val_topic=$row_val['val_topic'];
        $val_text=$row_val['val_text'];

 
?>
<style>
.no-date{
display:none !important;
}
</style>
    <div class="one-val">
<span class="icon"><i class="fas fa-gears"></i></span>
<span class="val-name"><?php echo $val_topic ;  ?></span>
<p calss="val-con"><?php echo $val_text ;  ?></p>
    </div>
   <?php
   }
}
   ?>
   <p class="no-date" style="color:#13488e; width:100%; position:relative; justify-content: center;
align-items: center;
display: flex;
padding: 40px 0px;
font-size: 30px;
font-weight:bold !important;
">No Value Availible Now Here!</p>
</div>
        </div>
        <!-- =============================End Our Values AREA ================================= -->

 <!-- Team #9 Start -->
 <div class="team-container">
            <div class="section-title">
                <h1>Our Team</h1>
                <p>These faces are our success</p>
            </div>
            <div class="team-row">
                <!-- Read Our Team From Database -->
                <?php
$read_team=mysqli_query($conn,"SELECT * FROM our_team ");

if(mysqli_num_rows($read_team)>0)
{
    while($team_row=mysqli_fetch_assoc($read_team)){

        $name=$team_row['name'];
$role=$team_row['role'];
$link_1=$team_row['link_1'];
$link_2=$team_row['link_2'];
$image=$team_row['image'];


?><style>
.no-date{
display:none !important;
}
</style>
                <div class="team-column">
                    <div class="team-9">
                        <div class="team-img">
                            <img src="<?php   echo  $image;?>" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2><?php   echo  $name;?></h2>
                            <h3><?php   echo  $role;?></h3>
                        </div>
                        <div class="team-overlay">
                            <p> My Social Account</p>
                            <div class="team-social">
                                 
                                <a target="blank" class="social-fb" href="<?php   echo  $link_1;?>"><i class="fab fa-facebook-f"></i></a>
                                 
                                <a target="blank" class="social-in" href="<?php   echo  $link_2;?>"><i class="fab fa-instagram"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
    }
}
                ?> 
              </div> 
              <p class="no-date" style="color:#13488e; width:100%; position:relative; justify-content: center;
                align-items: center;
                display: flex;
                padding: 40px 0px;
                font-size: 30px;
                font-weight:bold !important;
                ">No Member Availible Now Here!</p>
        </div>
        <!-- Team #9 End -->
        

        <div class="footer-body">
        <footer class="footer">
            <div class="waves">
              <div class="wave" id="wave1"></div>
              <div class="wave" id="wave2"></div>
              <div class="wave" id="wave3"></div>
              <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
             
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
            </ul>
         
            <p>Copyright &copy; <span id="currentYear"></span> Himilo Innovation Hub
                | All rights reserved. Powered by Himilo Ict.</p>
          </footer></div>
         <!-- =============================END FOOTER AREA ================================= -->
        <!-- Sweat Aler Cdn Link -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Alertfy Cdn Link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
        <!-- Swiper JS -->
        <script src="js/swiper-bundle.min.js"></script>
        <!-- Jquey link -->
        <script src="js/jquery-3.7.1.min.js"></script>
        <!-- custom js link -->
        <script src="js/main.js"></script>
        <!-- Footer js Link Cdn -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>