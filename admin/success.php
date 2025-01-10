<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="contan">
    <div class="error">
       <h1 class="h1"><i class="fa-solid fa-circle-check"></i></h1>
            <h2 class="h2"><strong>Congratulations!</strong></h2><br>
            <p class="p"><?php error_reporting(false);  echo $_SESSION['success']  ;  ?></p><br>
            <form action="" method="post">
            <a href="<?php echo $_SESSION['link']; ?>"  name="canel" id="canel">OK</a>
            </form>
        </div>
    </div>

<!-- canel button -->

    <!-- this is style -->

    <style>

@import url('https://fonts.googleapis.com/css2?family=Gafata&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


*{

margin:0;
padding:0;
font-family: 'poppins',sans-serif;
  
}



.contan{
align-items: center;
height: 100vh;
width: 100%;
    display:flex;
    justify-content: center;
    background-color: rgba(34, 33, 33,0.5);
    place-content: center;
position: fixed;
z-index: 1111;
top: 0;


}

.h1 i{

    color:green;
}

.error{

    background-color: rgb(255, 255, 255);
    padding: 20px;
    border-radius: 10px;
    width: 50vh;
 
    text-align: center;
   
}

.h2 strong{

    color:green;

}

.p{

    color:rgb(8, 61, 8);

}

#canel{


background-color: rgb(55, 229, 113);
border: none;
color: white;
padding:5px;
width: 55px;
font-weight: bold;
border-radius: 5px;
cursor: pointer;
text-decoration:none !important;
}
#canel:hover{

    background-color: rgb(206, 48, 100);
}
    </style>
</body>
</html>