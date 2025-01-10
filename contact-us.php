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
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <!-- FONT AWSOME  LINK. FONT AWESOME IS A ICON MAKING WEBISTE -->
        <link rel="stylesheet" href="font-awesome/css/all.min.css">
        <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
        <!-- THIS IS CUSTOM CSS LINK -->
        <link rel="stylesheet" href="css/contac-us.css">
        <link rel="stylesheet" href="css/about-us.css">
        <link rel="stylesheet" href="css/style.css">
      
  <!-- Alertify CDN link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />

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
         <!-- =============================Start About Us AREA ================================= -->
        <!-- About Us Section -->

        <div class="about-us">
         <div class="header-about"><h1>Contact Us</h1></div> 
         <div class="container">
            <div class="contents">
                <div class="content">
                    <div class="left-side">
                      <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Wadnaha STREET
                         </div>
                        <div class="text-two"> MOGADISHU-SOMALIA</div>
                      </div>
                      <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+252 613968797
                          </div>
                        <div class="text-two">+252 615400533</div>
                      </div>
                      <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">ihub1@gmail.com</div>
                        <div class="text-two">ihub@himilouniversity.edu.so</div>
                      </div>
                    </div>
                    <div class="right-side">
                      <div class="topic-text">Send us a message</div>
                      <p class="second-topic">If you are interested in contacting us directly, contact us at these addresses or fill out this form to let us know your complaint. Thank you.</p>
                      <form onsubmit="Send();" return false; >
                  
                        <div class="input-box">
                          <input type="text" name="name" id="name" placeholder="Enter your name" />
                        </div>
                        <div class="input-box">
                          <input type="email" name="email" id="email" placeholder="Enter your email" />
                        </div>
                        <div class="input-box">
                          <input type="text" name="subject" id="subject" placeholder="Enter your Subject" />
                        </div>
                        <div class="input-box message-box">
                          <textarea name="message" id="msg" placeholder="Enter your message"></textarea>
                        </div>
                       
                        <button type="submit"class="com-btn"><i class="fas fa-paper-plane"></i>
                            &nbsp;Send Now</button>
                       
                      </form>
                    </div>
           </div></div>
        </div>
        <!-- =============================END About Us AREA ================================= -->

  
  
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
      <script>
        // current year
          function updateCopyrightYear() {
            var currentYear = new Date().getFullYear();
            document.getElementById('currentYear').textContent = currentYear;
        }
        
        // Call the function to update the year when the page loads
        window.onload = function() {
            updateCopyrightYear();
        };</script>
      <script src="js/smtp.js"></script>
      <script src="https://smtpjs.com/v3/smtp.js">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</script>    <script>

function Send(){

  console.log("sending...");
   var name = document.getElementById("name").value;
   var email = document.getElementById("email").value;
   var sub = document.getElementById("subject").value;
   var mess = document.getElementById("msg").value;

   var body = "Name: " + name + "<br/> Email:" + email +   "<br/> Message:" + mess;
    
   console.log(body);
    Email.send({
      SecureToken : "b8c5495d-57b6-4635-a093-9b146d4af7b4",
     To : 'taamir.mm@gmail.com',
     From : email,
     Subject : sub,
     Body : body
}).then(
  message => alert(message)
);

    

}



</script>
    </body>
</html>