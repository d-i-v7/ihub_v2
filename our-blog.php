<?php
include "admin/conn.php";
?>
<!DOCTYPE php>
<php lang="en">
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
                <h1>Our Blogs</h1>
                <p>This Page You Get All Of Our Blogs!</p>
            </div>
              <!-- =============================Start Our Blog AREA ================================= -->
        <div class="blogs">
            <!-- <div class="blogs-header">
                <h1>Our Last Blogs</h1>
                <p>Here we discuss sensitive topics that are useful to society</p>
            </div> -->
            <div class="clumns">
            <?php
        $read = mysqli_query($conn, "SELECT * FROM blog ORDER BY id asc");
        if (mysqli_num_rows($read) > 0) {
            while ($row = mysqli_fetch_assoc($read)) {
                $read_title = $row['title'];
                $read_con = $row['con1'];
                $read_image = $row['image'];
                $read_date = $row['create_date'];
                $read_id = $row['id'];
        ?>
                <div class="clumn">
                    <div class="image"> <img src="<?php echo $read_image; ?>" alt="Blog Image.."></div>
                    <div class="title">
                        <?php echo $read_title; ?>
                    </div>
                    <div class="desc">
                        <?php echo $read_con; ?>
                    </div>
                    <div class="date"><i class="fas fa-calendar"></i>&nbsp; <?php echo $read_date; ?></div>
                    <div class="read-more"><button onclick="document.location='one-blog.php?b_id=<?php echo $row_id=$row['id'] ; ?>'"><i class="fas fa-book"></i> &nbsp;Read Now</button></div>
                </div>
        <?php
            }
        }
        ?>
               
            </div>
           
        </div>

        <!-- =============================End Our Blog AREA ================================= -->
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
</php>