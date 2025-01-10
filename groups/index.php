<!doctype html>
<?php
 session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ihub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  </head>
  <body>
     <!-- SweetAlert CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        <?php
        // session_start();
        if (isset($_SESSION['aff_success'])) {
            $whatsappMessage = "Asalamu Calaykum Waan Isa Soo Diiwan Geliyaya. Xugtayda Waakan:\nMagacaygu Waa: {$_SESSION['name']}\nNumber Tellefankeygu Waa: {$_SESSION['phone']}\nJinsigaygu Nah Waa: {$_SESSION['sex']}\nLevelkaygu Waa: {$_SESSION['address']}";
            $whatsappLink = "https://api.whatsapp.com/send?phone=+252615546003&text=" . urlencode($whatsappMessage);
        ?>
            Swal.fire({
                title: 'Success!',
                text: '<?php echo addslashes($_SESSION['aff_success']); ?>',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '<?php echo $whatsappLink; ?>';
            });
        <?php
            unset($_SESSION['aff_success']); // Clear the session variable
        }

        if (isset($_SESSION['aff_error'])) {
            echo "Swal.fire('Error!', '{$_SESSION['aff_error']}', 'error');";
            unset($_SESSION['aff_error']); // Clear the session variable
        }
        ?>
    });
</script>

   <div class="container  col-lg-4 col-sm-6">
    <div style="display: flex;
     justify-content: center;" class="img mt-5 ">
        <img  width="180px" height="100px"  src="logo.png" alt="">
    </div>
    <form action="insert.php" method="post" enctype="multipart/form-data" class="form-group">
        <label  class="mt-2 mb-2">Full Name</label>
        <input name="name" placeholder="Enter Your Full Name Here.." type="text" class="form-control">
        <label  class="mt-2 mb-2">Phone Number</label>
        <input name="phone" placeholder="Enter Your Phone Number Here.." type="text" class="form-control">
        <label  class="mt-2 mb-2">Choose Sex</label>
        <div class="form-check">
            <input name="sex" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="male" checked>
            <label class="form-check-label" for="exampleRadios1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input name="sex" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="female">
            <label class="form-check-label" for="exampleRadios2">
            Female
            </label>
          </div>
        <label  class="mt-2 mb-2">Ku Cadeey Heerkaaga Boqoley Ahaan!</label>
        <textarea class="form-control" name="adress" type="text">Htmlka Waxaan Ka Fahan Sanahy:()       ,  Csska Waxaan Ka Fahan Sanahy:()</textarea> 
    
          <div class="footer col-12 mt-2">
            <button  type="submit" name="submit" class="btn btn-success col-12">Regiter Me Now</button></div>
    </form></div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>