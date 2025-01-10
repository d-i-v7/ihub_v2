<?php
// include "security.php";
header('Content-Type: application/json');

// Get the user's time zone from the browser
$userTimeZone = isset($_GET['timezone']) ? $_GET['timezone'] : 'UTC';

// Set the time zone to the user's time zone
date_default_timezone_set($userTimeZone);

// Get current date and time
$currentDate = new DateTime();
$date = $currentDate->format('Y-m-d');
$time = $currentDate->format('H:i:s');
$day = $currentDate->format('l');

// Return the data as JSON
echo json_encode(['date' => $date, 'time' => $time, 'day' => $day]);
?>
