<?php include("thepopup/pop.php") ?>
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
        <link rel="stylesheet" href="css/testmonial.css">
        <link rel="stylesheet" href="css/logo-slider.css">
<style>
    div:where(.swal2-container).swal2-backdrop-show, div:where(.swal2-container).swal2-noanimation {
    background: rgba(0,0,0,.4);
    z-index: 9999 !important;

}


body.l-mode nav ul li .active{
    color: var(--p-color) !important;
    transition: 0.3s;

}

body.l-mode nav ul li .active::before{

    background-color: var(--p-color) !important;
}

.my-con nav ul li .active::before {

    content: "";
    width: 70px;
    height: 3px;
    background-color: var(--s-color) !important;
    position: absolute;
    top: 25px;
    border-radius: 20px;
    transition: 0.4s;
}

</style>
        <!-- Alertify CDN link -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />
        <title>I Hub</title>
    </head>
    <body>
           <!-- i call my header using php.-->
       <?php
       include("header.php");
       ?>
        <div id="global-loader">
            <div class="whirly-loader"> </div>
            </div>

        <!-- SUBSCRIBE FORM -->
        <div class="sub-body">
            <div class="sub">
                <button class="close-sub"><i class="fas fa-xmark"></i></button>
                <h2>Subscribtion Form</h2>
                <form action>
                    <input type="text" name
                        placeholder="Inter Your Email Here......" id>
                    <button class="sub-btn"><i class="fas fa-bell"></i>
                        &nbsp;Subcribe Now</button>
                </form>
            </div>
        </div>
        <!-- Coment FORM -->
        <div class="com-body">
            <div class="com">
                <button class="close-com"><i class="fas fa-xmark"></i></button>
                <h2>Coment</h2>
                <form action="admin/check_p_comment.php" method="POST" enctype="multipart/form-data">
                    <label for>Your Photo</label>
                    <input  id="avatarInput"  accept=".jpg, .jpeg" name="image" type="file">
                    <input name="name" placeholder="Inter Your Name" type="text">
                    <textarea name="coment" id="myTextArea"
                        placeholder="Write You Coment Here..."  cols="62"
                        rows="10"></textarea>
                    <button type="submit" name="submit" class="com-btn"><i class="fas fa-paper-plane"></i>
                        &nbsp;Send Now</button>
                </form>
            </div>
        </div>
        <!-- Events FORM -->
        <div class="event-body">
            <div class="event">
                <button onclick="closeevent()" class="close-event"><i class="fas fa-xmark"></i></button>
                <h2>Eventent</h2>
                <form action='admin/check_event.php' method='post'>
                    <input name='name' placeholder="Inter Your Name" type="text">
                    <input name='email' placeholder="Inter Your Email" type="email">
                    <textarea name='event' id="myTextArea"
                        placeholder="Write You eventent Here..." name id cols="62"
                        rows="10"></textarea>
                    <button type="submit" name="submit" class="event-btn"><i class="fas fa-paper-plane"></i>
                        &nbsp;Send Your Event</button>
                </form>
            </div>
        </div>
     

       <!-- =============================START HERO AREA ================================= -->

        <div class="hero-area">
            <section class="text">
                <!-- ===THIS PHP CODE READING A HERRO TEXT=== -->
<?php
$read_herro_text = mysqli_query($conn, "SELECT * FROM hero WHERE id='1'");
if (mysqli_num_rows($read_herro_text) > 0) {

    while ($row = (mysqli_fetch_assoc($read_herro_text))) {

        $text1 = $row['text_1'];
        $text2 = $row['text_2'];
        $btn_text = $row['btn_text'];

        ?>
                <h1><?php echo $text1; ?></h1>
                <p><?php echo $text2; ?></p>
                <input target='_blank' onclick="window.open('pdf.pdf','_blank');" readonly type="text"
                    placeholder="<?php echo $btn_text; ?>" name id>
                <button target='_blank' onclick="window.open('pdf.pdf','_blank');"><i
                        class="fas fa-download"></i></button>
           <?php }}?> </section>

            <section class="img-slide">
                <div class="slider-my-con">
                    <div class="slider">
                        <?php
$read_img=mysqli_query($conn,"SELECT * FROM slide_image ");
if(mysqli_num_rows($read_img)>0){

while($row2=mysqli_fetch_assoc($read_img)){

    $imgka=$row2['image'];


?>
                        <img   class="img" src="<?php echo $imgka ; ?>" alt="Image 1">
                   <?php }

} ?>
                    </div>
                    <button class="prv button"
                        onclick="prvSlide()">&#10094;</button>
                    <button class="nxt button"
                        onclick="nxtSlide()">&#10095;</button>
                </div>
            </section>
        </div>
        <br>
        <!-- =============================ENDT HERO AREA ================================= -->

        <!-- =============================Start About Us AREA ================================= -->
        <!-- About Us Section -->
<!-- ====This is A php Code THat Write A About Us Image And Text From Data Base===== -->
      <?php
      $read_about=mysqli_query($conn,"SELECT * FROM about_us WHERE id='1'");
     if(mysqli_num_rows($read_about)>0){

while($about_row=mysqli_fetch_assoc($read_about)){

    
$topic1=$about_row['topic'];
$topic2=$about_row['topic_2'];
$sh_text=$about_row['short_text'];
$about_img=$about_row['image'];


     ?>
<div class="about-us">
            <h1><?php echo $topic1; ?></h1>
            <div class="contents">

                <div class="left">
                    <img src="<?php echo $about_img; ?>" alt="Searching..">
                </div>
                <div class="right">
                    <h1><?php echo $topic2; ?></h1>
                    <p><?php echo $sh_text; ?></p>
                    <button onclick="document.location='about-us'"
                        class="read-more-btn"><i class="fas fa-book"></i>
                        Read More</button>
                </div>
            </div>
        </div>

        <?php
}

}
        ?>
        <!-- =============================END About Us AREA ================================= -->
<!-- Numberada Ordo -->

            <!-- =============================START COUNT NUMBERS================================= -->

            <div class="con-num">
                <div class="title">
                    <h1>Our Impact</h1>
                    <p>Our Impact on The Innovation Ecosystem<strong class="g-user"><i class="fas fa-user-graduate"></i></strong></p>
                </div><br><br>
                <div class="colums">
                    <?php 
                    $read_count=mysqli_query($conn,"SELECT * FROM impact");
                    if(mysqli_num_rows($read_count)>0)
                    {
                        while($row_impac=mysqli_fetch_assoc($read_count))
                        {
                            $name=$row_impac['name'];
                            $icon=$row_impac['icon'];
                            $number=$row_impac['number'];
                      
                    ?>
                    <div class="column">
                        <div class="icon"><?php echo $icon ;  ?></div><div
                            class="number"
                            id="number1"><?php echo $number ;  ?>+</div>
                        <h3><?php echo $name ;  ?></h3>
    
                    </div>
                  <?php    }} ?>
    
                </div></div>
        
            <!-- =============================END COUNT NUMBERS================================= -->
       

        <!-- START OUR SERVCES  -->

        <div class="services-body">
            <div class="s-header">
                <h1>Our Services</h1>
                <p>These Are Some Of The Services We Offer.</p></div>
            <div class="services">
                <!-- PHP READ OUR SERVICES 3 LAST SERV -->
<?php
$read_serv = mysqli_query($conn, "SELECT * FROM our_ser ORDER BY id asc LIMIT 3");
if(mysqli_num_rows($read_serv)>0){

    while($serv_row=mysqli_fetch_assoc($read_serv)){

$topic=$serv_row['topic'];
$image=$serv_row['image'];
$text=$serv_row['text'];


?><style>
.no-date{
display:none !important;
}
</style>
                <div class="one-servic">
                    <img src="<?php echo $image ;  ?>" alt>
                    <span class="s-name"><?php echo $topic ;  ?></span>
                    <p><?php echo $text ;?></p>
 <p class="no-date" style="color:#13488e; width:100%; position:relative; justify-content: center;
align-items: center;
display: flex;
padding: 40px 0px;
font-size: 30px;
font-weight:bold !important;
">No Services Availible Now Here!</p>
                </div>
               <?php
    }}

?>

                <br>

            </div>
            <div class="more-s">
                <button onclick="document.location='our-services'" class="more-s-btn"><i class="fas fa-angles-right"></i>
                    View More</button>
            </div>
        </div>
        <!-- =============================END OUR SERVICES AREA ================================= -->



        <!-- =============================Start TESTMONIAL AREA ================================= -->
        <section class="my_n_container">
            <div class="testi-header">
            <h1>The FeedBack Of Our Community</h1>
        <p>We Love Our Community!</p>
        <button style="font-size: 14px !important;" onclick="opencom()"
        class="more-s-btn"><i class="fas fa-plus"></i>
        Add Your FeedBack</button>
    </div>
            <div class="my_n_slider">
                <!-- Read Coments Form Data Base -->
                <?php
$read_comment=mysqli_query($conn,"SELECT * FROM current_coment");

if(mysqli_num_rows($read_comment)>0)
{

    while($com_row=mysqli_fetch_assoc($read_comment)){

$image=$com_row['image'];
$name=$com_row['name'];
$coment=$com_row['coment'];



?>
              <div class="my_n_slide my_n_slide-1">
                <div class="my_n_slide-text">
                  <p class="testimonial-text">
                    “<?php echo $coment; ?> ”
                  </p>
                  <p class="author-text">Author Name
                    <span>"<?php echo $name; ?>"</span></p>
                </div>
                <div class="my_n_slide-img">
                  <img src="admin/<?php echo $image; ?>" alt="img">
                </div>
              </div>
             <?php
             
    }

}
             ?>
             
                <div class="next"><i class="fas fa-chevron-right"></i></div>
                <div class="prev"><i class="fas fa-chevron-left"></i></div>
           
            </div>
          </section>

        <!-- =============================END TESTMONIAL AREA ================================= -->





        <!-- =============================Start Our Events AREA ================================= -->
        <div class="our-eve">
        <div class="eve-header">
            <h1>Our Events</h1></div>
            <div class="all-eve">
                <div class="one-eve">
                    <span class="eve-name">Startup Showcases</span>
                    <p calss="eve-con">Celebrate the spirit of entrepreneurship
                        at our Startup Showcases. </p>
                </div>
                <div class="one-eve">
                
                    <span class="eve-name">Innovation Talks</span>
                    <p calss="eve-con">Engage in thought-provoking discussions
                        with industry leaders, innovators, and visionaries
                        through our Innovation Talks.</p>
                </div>
                <div class="one-eve">
                    
                    <span class="eve-name">Workshops and Masterclasses</span>
                    <p calss="eve-con">Sharpen your skills and broaden your
                        horizons through our hands-on workshops and
                        masterclasses. </p>
                </div>
                <div class="one-eve">
                  
                    <span class="eve-name">Hackathons and Ideation
                        Challenges</span>
                    <p calss="eve-con">Unleash your creativity and
                        problem-solving abilities in our hackathons and ideation
                        challenges. </p>
                </div>
                <div class="one-eve">
                 
                    <span class="eve-name">Investor Pitch Days</span>
                    <p calss="eve-con">Are you seeking funding for your startup?
                        Participate in our Investor Pitch Days, where you can
                        present your business ideas to a panel of investors and
                        venture capitalists. </p>
                </div>
                <div class="one-eve">
               
                    <span class="eve-name">Networking Events and Meetups</span>
                    <p calss="eve-con">Connect, collaborate, and expand your
                        professional network at our networking events and
                        meetups. </p>
                </div>

            </div>
            <div class="footer-event"><button onclick="openevent()"
               ><i class="fas fa-plus"></i>
                Add Your Event</button></div>
        </div>
        <!-- =============================End Our Events AREA ================================= -->


  
    <!-- =============================Start Our Blog AREA ================================= -->
    <div class="blogs">
        <div class="blogs-header">
            <h1>Our Last Blogs</h1>
            <p>Here we discuss sensitive topics that are useful to society</p>
            <br>
            <div class="blog-tabs">
                 <button class="tab active" onclick="showContent('blogs', this)">Blogs</button>
                <button class="tab" onclick="showContent('podcasts', this)">Podcasts</button>
                <button class="tab" onclick="showContent('founder-talks', this)">Founder Talks</button>
               
            </div>
        
        </div>
        
         
    <div class='blogs-content' style="display: none;" id="podcasts-content">
        <div class="clumns"> 
            <div class="clumn">
            <div class="image"> <img src="images/1.jpg" alt="Blog Image.."></div>
            <div class="title">
               Title ONE
            </div>
            <div class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, rerum?
            </div>
            <div class="date"><i class="fas fa-calendar"></i>&nbsp;12-23-2023</div>
            <div class="read-more"><button onclick="document.location='one-blog.php?b_id='"><i class="fas fa-book"></i> &nbsp;Read Now</button></div>
        </div>
            <div class="clumn">
            <div class="image"> <img src="images/1.jpg" alt="Blog Image.."></div>
            <div class="title">
               Title ONE
            </div>
            <div class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, rerum?
            </div>
            <div class="date"><i class="fas fa-calendar"></i>&nbsp;12-23-2023</div>
            <div class="read-more"><button onclick="document.location='one-blog.php?b_id='"><i class="fas fa-book"></i> &nbsp;Read Now</button></div>
        </div>
            <div class="clumn">
            <div class="image"> <img src="images/1.jpg" alt="Blog Image.."></div>
            <div class="title">
               Title ONE
            </div>
            <div class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, rerum?
            </div>
            <div class="date"><i class="fas fa-calendar"></i>&nbsp;12-23-2023</div>
            <div class="read-more"><button onclick="document.location='one-blog.php?b_id='"><i class="fas fa-book"></i> &nbsp;Read Now</button></div>
        </div>
    </div>
    </div>

    <div class="blogs-content" id="founder-talks-content" style="display: none;">
        <div class="clumns"> 
            <div class="clumn">
            <div class="image"> <img src="images/1.jpg" alt="Blog Image.."></div>
            <div class="title">
               Title ONE
            </div>
            <div class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, rerum?
            </div>
            <div class="date"><i class="fas fa-calendar"></i>&nbsp;12-23-2023</div>
            <div class="read-more"><button onclick="document.location='one-blog.php?b_id='"><i class="fas fa-book"></i> &nbsp;Read Now</button></div>
        </div>
            <div class="clumn">
            <div class="image"> <img src="images/2.jpg" alt="Blog Image.."></div>
            <div class="title">
               Title two
            </div>
            <div class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, rerum?
            </div>
            <div class="date"><i class="fas fa-calendar"></i>&nbsp;12-23-2023</div>
            <div class="read-more"><button onclick="document.location='one-blog.php?b_id='"><i class="fas fa-book"></i> &nbsp;Read Now</button></div>
        </div>
     
    </div>
    </div>

    <div class="blogs-content" id="blogs-content" style="display: none;">
        <div class="clumns"> 
        <?php
        $read = mysqli_query($conn, "SELECT * FROM blog ORDER BY id desc LIMIT 4");
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

          
        </div>
    </div>
    <!-- =============================End Our Blog AREA ================================= -->
    
    <script>
        // Initial setup to display the content of the first tab
        document.getElementById("blogs-content").style.display = "block";

        function showContent(tabName, tabButton) {
            var tabs = document.getElementsByClassName("blogs-content");
            var tabButtons = document.getElementsByClassName("tab");

            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
                tabButtons[i].classList.remove("active");
            }

            document.getElementById(tabName + "-content").style.display = "block";
            tabButton.classList.add("active");
        }
    </script>

        <!-- =============================Start Our Parthener Ship ================================= -->

<div class="p-ship">
    <div class="p-ship-header">
        <h1>Our Partnerships</h1>
    </div>
    <div class="all-p-ship">
<?php
$read_p=mysqli_query($conn,"SELECT * FROM logo_slider ORDER BY id asc LIMIT 4");
if(mysqli_num_rows($read_p)>0)
{
    while($row_p=mysqli_fetch_assoc($read_p))
    {
        $p_logo=$row_p['logo'];

?>
        <div class="one-p-ship">
            <img  src="<?php echo $p_logo;  ?>" alt="">
        </div>
      <?php      }
} ?>
    </div>
    <div class="footer-event"><button onclick="document.location=('our-partners')"
               ><i class="fas fa-grip"></i>
                View More</button></div>
</div>

 <!-- =============================End Our Parthener Ship ================================= -->

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
            <!-- Read Link Of Socail media Form Data Base -->
            <?php
$read_link=mysqli_query($conn,"SELECT * FROM footer");

if($read_link  && mysqli_num_rows($read_link)>0){

    while($row_link=mysqli_fetch_assoc($read_link)){


 
?>
                    <li class="social-icon__item"><a class="social-icon__link"
                            href="<?php echo "$row_link[fb_link]";  ?>">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a></li>
                    <li class="social-icon__item"><a class="social-icon__link"
                            href="<?php echo "$row_link[tw_link]";  ?>">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a></li>
                   
                    <li class="social-icon__item"><a class="social-icon__link"
                            href="<?php echo "$row_link[in_link]";  ?>">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a></li>
              <?php }} ?>  </ul>
               
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
        <!-- Logo Slider Js Link -->
        <script src="js/logo-slider.js"></script>
         <!-- Include Slick carousel CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Add SweetAlert library -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

document.getElementById('avatarInput').addEventListener('change', handleFileSelect);

function handleFileSelect(event) {
  const fileInput = event.target;
  const file = fileInput.files[0];

  // Check if a file is selected
  if (file) {
    // Check if the file type is jpg or jpeg
    if (file.type === 'image/jpeg' || file.type === 'image/jpg') {
      // Check image dimensions
      const img = new Image();
      img.src = URL.createObjectURL(file);

      img.onload = function () {
        if (img.width > 600 || img.height > 600) {
          // Show error SweetAlert for small image dimensions
          Swal.fire({
            icon: 'error',
            title: 'Invalid Image Dimensions',
            text: 'Please select an image with dimensions Les than or equal to 400px width and 400px height.',
          });

          // Reset the file input
          fileInput.value = '';
        } else {
          // Display the custom text as the preview
          document.getElementById('fileUploadText').textContent = "File Selected: " + file.name;

          // Show success SweetAlert for successful upload
          // Swal.fire({
          //   position: "top-end",
          //   icon: "success",
          //   title: "Uploaded",
          //   showConfirmButton: false,
          //   timer: 1500
          // });
        }
      };
    } else {
      // Show error SweetAlert for unsupported file type
      Swal.fire({
        icon: 'error',
        title: 'Unsupported File Type',
        text: 'Please select a JPG or JPEG  file.',
      });

      // Reset the file input
      fileInput.value = '';
    }
  } else {
    // Reset the text when no file is selected
    document.getElementById('fileUploadText').textContent = "Click Here Or Drag and drop an Image to upload";
  }
}
</script>
   
</body>
</html>