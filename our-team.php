<?php
include "admin/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- SITE FAV ICON IS HERE -->
        <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
        <!-- FONT AWSOME  LINK. FONT AWESOME IS A ICON MAKING WEBISTE -->
        <link rel="stylesheet" href="font-awesome/css/all.min.css">
        <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
        <!-- THIS IS CUSTOM CSS LINKs -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/our-services.css">
        <link rel="stylesheet" href="css/about-us.css">
        <!-- Alertify CDN link -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />

        <title>I Hub</title>
    </head>
    <body>
        <div id="global-loader">
            <div class="whirly-loader"> </div>
            </div>
     <!-- i call my header using php.-->
     <?php
       include("header.php");
       ?>
        <!-- =============================Start Our Services AREA ================================= -->
        <div class="all-our">
            <div class="header-serv">
                <h1>Our Team</h1>
                <p>These faces are our success</p>
            </div>
                   
 <!-- Team #9 Start -->
 <div class="team-container">
            <!-- <div class="section-title">
                <h1>Our Team</h1>
                <p>These faces are our success</p>
            </div> -->
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
        </div>
        <!-- =============================End Our Services AREA ================================= -->
       
        <!-- =============================Start FOOTER AREA ================================= -->
        <div class="footer-body">
            <footer class="footer">
                <div class="waves">
                    <div class="wave" id="wave1"></div>
                    <div class="wave" id="wave2"></div>
                    <div class="wave" id="wave3"></div>
                    <div class="wave" id="wave4"></div>
                </div>
                <ul class="social-icon">
                    <li class="social-icon__item"><a class="social-icon__link"
                            href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a></li>
                    <li class="social-icon__item"><a class="social-icon__link"
                            href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a></li>
                     
                    <li class="social-icon__item"><a class="social-icon__link"
                            href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a></li>
                </ul>
             
                <p class="coppy-right">Copyright &copy; <span id="currentYear"></span> Himilo
                    Innovation Hub
                    | All rights reserved. Powered by Himilo Ict.</p>
            </footer></div>
        <!-- =============================END FOOTER AREA ================================= -->
        <!-- custom js link -->
        <script src="js/main.js"></script>
      <script src="js/testmonial.js"></script>
        <!-- Jquey link -->
        <script src="js/jquery-3.7.1.min.js"></script>
        <!-- Alertfy Cdn Link -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
     <!-- Footer Icons Cdn Link -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
    </body>
</html>