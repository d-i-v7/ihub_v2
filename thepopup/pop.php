<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my pop up</title>
<!-- font Awesoem Cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Custom Css Link -->
<link rel="stylesheet" href="thepopup/app.css">
</head>
<body>
<div class="popup-container">
    <div class="popup">
        <div class="popup-header">
            <span class="close-btn"><i class="fas fa-xmark"></i></span>
        </div>
        <h2 style="margin-bottom: 10px; text-align: center; font-size: 25px;">Don’t Miss Our Boot Camps!</h2>
        <div class="popup-content">
            <div class="left">
                <div class="image">
                    <img src="thepopup/wp.png" alt="searching...">
                </div>
            </div>
            <div class="right">
                <div class="title">
                    <h2>Wordpress BootCamp</h2>
                </div>
                <h5>It will be held <strong>October 9, 2024</strong>, and <strong> October 16, 2024 </strong></h5>
            </div>
          <button onclick='document.location="images.rar"' class="popup-btn">
  <i class="fas fa-user-plus"></i>&nbsp; Download Resources
</button>

        </div>
        <div class="popup-content">
            <div class="left">
                <div class="image">
                    <img style="width: 130% !important;" src="thepopup/2918517.webp" alt="searching...">
                </div>
            </div>
            <div class="right">
                <div class="title">
                    <h2>FullStack BootCamp</h2>
                </div>
                <h5>It will start <strong>Nov 12, 2024</strong>, and <strong> Lasts 6 months. </strong></h5>
            </div>
            <button class="popup-btn j-f"><i class="fas fa-user-plus"></i>&nbsp; Join Now</button>
        </div>
    </div>
</div>


<!-- Scrip Links -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="thepopup/app.js"></script>
</body>
</html>