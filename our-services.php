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
                <h1>Our Services</h1>
                <p>This Page You Get All Of Our Services!</p>
            </div>
            <div class="all-ser">
                <!-- php read services form data base -->
            <?php
$read_serv = mysqli_query($conn, "SELECT * FROM our_ser ORDER BY id DESC ");
if(mysqli_num_rows($read_serv)>0){

    while($serv_row=mysqli_fetch_assoc($read_serv)){

$topic=$serv_row['topic'];
$simage=$serv_row['image'];
$text=$serv_row['text'];


?><style>
.no-date{
display:none !important;
}
    </style>            <div class="one-serv">
<span class="icon"><img src="<?php  echo  $simage ; ?>" alt=""></span>
<span class="serv-name"><?php echo $topic ;   ?></span>
<p class="ser-con"><?php echo $text ;  ?></p>
                </div><?php }} ?>
                <p class="no-date" style="color:#13488e; width:100%; position:relative; justify-content: center;
align-items: center;
display: flex;
padding: 40px 0px;
font-size: 30px;
font-weight:bold !important;
">No Services Availible Now Here!</p>            
            </div>
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