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
        <link rel="stylesheet" href="css/one-blog.css">
        <!-- Alertify CDN link -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />

        <title>I Hub</title>
    </head>
    <body>
       
     <!-- i call my header using php.-->
     <?php
       include("header.php");
       if(isset($_GET['b_id']))
       {
        $b_id=$_GET['b_id'];
        $read_one_b=mysqli_query($conn,"SELECT * FROM blog WHERE id='$b_id'");
        if(mysqli_num_rows($read_one_b)>0)
        {
            while($one=mysqli_fetch_assoc($read_one_b))
            {
$content=$one['content'];
$title=$one['title'];
$con=$one['con1'];

            }
        }
       }
       ?>
        <!-- =============================Start Our Services AREA ================================= -->
        <div class="all-our">
            <div class="header-serv">
                <h1 style="font-size:25px !important;"><?php echo $title ; ?></h1>
                <p><?php echo $con ; ?></p>
            </div>
            <div class="one-blog">
                
                <div class="texts">
                <?php echo $content ; ?>
              </div>
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