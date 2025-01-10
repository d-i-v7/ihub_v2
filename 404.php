  <!-- THIS IS CUSTOM CSS LINKs -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/testmonial.css">
        <link rel="stylesheet" href="css/logo-slider.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php include("header.php"); ?>
<div class="contents">
    <h1>404</h1>
<p><i class="fa-solid fa-circle-exclamation"></i>&nbsp;Oops! Something went wrong</p>
<h2>The page you requested was not found.</h2>
<a href="./"><i class="fa-solid fa-backward"></i>&nbsp;Back To Home</a>
<style>
    .contents
    {
        width:100%;
        height:50vh;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    .contents p
    {
        color:#fff;
        font-size:25px;
        font-weight:bold;
    }
    .contents h1
    {
        color:#fff;
        font-size:70px;
        font-weight:bold;
    }
    .contents h2
    {
        color:#fff;
        
        font-weight:bold;
    }
    .contents a
    {
        color:#fff;
       padding:10px 20px;
       border-radius:20px;
       border:none;
       background-color:var(--s-color);
       text-decoration:none;
       margin-top:10px;
    }
    .l-mode .contents a
    {
       background-color:var(--p-color); 
    }
</style>
</div>
  <!-- custom js link -->
        <script src="js/main.js"></script>