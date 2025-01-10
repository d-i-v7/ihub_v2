<?php
// include "security.php";
?>
<div class="header">

<div class="header-left active">
<a href="#" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="#" class="logo-small">
<img src="assets/img/logo-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu timka">
<li class="nav-item nav-target-me">
    <script>
        function updateDateTime() {
            // Get the user's time zone
            const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

            // Make an AJAX request to fetch the current date and time with the user's time zone
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var data = JSON.parse(xhr.responseText);

                    // Display the information with classes
                    document.getElementById('date-info').textContent = 'Date: ' + data.date;
                    document.getElementById('time-info').textContent = 'Time: ' + data.time;
                    document.getElementById('day-info').textContent = 'Day: ' + data.day;
                }
            };
            xhr.open('GET', 'get_device_datetime.php?timezone=' + encodeURIComponent(userTimeZone), true);
            xhr.send();
        }

        // Initial update
        updateDateTime();

        // Update every 1000 milliseconds (1 second)
        setInterval(updateDateTime, 1000);
    </script>

    <style>
        .datetime-info, .nav-target-me {
            display: flex !important;
            color: #ec8723;
            font-weight: bold;
            justify-content: space-between;
            margin-top: 10px;
            margin-right: 30px;
        }
    </style>
    <!-- Display the information with IDs for easy updating -->
    <p id="date-info" class="datetime-info"></p>
    <p id="time-info" class="datetime-info"></p>
    <p id="day-info" class="datetime-info"></p>
</li>



  <!-- Read User Image -->
  <?php
$read=mysqli_query($conn,"SELECT * FROM users WHERE id='$_SESSION[user_id]'");

if($rowka=mysqli_num_rows($read)>0){


    while($rowka=mysqli_fetch_assoc($read)){

$img=$rowka['image'];
$user_name=$rowka['user_name'];
$email=$rowka['email'];


 
?>
<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="<?php  echo $img ;  ?>" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">

<span class="user-img"><img src="<?php  echo $img; ?>" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6><?php  echo $user_name; ?></h6>
<h5>Admin</h5>
<?php
   }}

?>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile.php"> <i class="me-2" data-feather="image"></i> Your Profile</a>
<a class="dropdown-item" href="account.php"><i class="me-2" data-feather="users"></i>Your Account</a>
<a class="dropdown-item" href="setting.php"><i class="me-2" data-feather="settings"></i>Site Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="logout.php"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.php">Your Profile</a>
<a class="dropdown-item" href="account.php">Your Account</a>
<a class="dropdown-item" href="setting.php"><i class="me-2" data-feather="settings"></i>Site Settings</a>

<a class="dropdown-item" href="logout.php">Logout</a>
</div>
</div>

</div>
