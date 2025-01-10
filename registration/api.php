<?php
header('Content-Type: application/json');
// Calling Connection File
include("conn.php");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// Sender Start here
function SEND_EMAIL($conn,$email,$fullName)
{

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';  // Use your actual domain for Bluehost
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'affanacademy0@gmail.com';                     //SMTP username
    $mail->Password   = 'uubg lzsu mlqx ojev';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('affanacademy0@gmail.com', 'Himilo Inovation Hub');
    $mail->addAddress($email, $fullName);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Waad Mahadsantahay'.$fullName;
    $mail->Body    = "
    <!DOCTYPE html>
<html lang='so'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Email Design</title>
    <style>
        body {
            font-family: 'Poppins',Arial, sans-serif;
            background-color: #f8f1ea; /* Light background color */
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .email-header {
            background-color: #13488e; /* Primary color */
            color: #ffffff;
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px 10px 0 0;
        }
        .email-header img {
            width: 100px; /* Adjust the size of the logo */
            height: auto;
            margin-bottom: 10px;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-footer {
            /* text-align: center; */
            font-size: 12px;
            color: #999999;
            padding: 20px;
        }
        a.button {
            background-color: #ec8723; /* Secondary color */
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        a.button:hover {
            background-color: #d76b1e; /* Slightly darker shade for hover */
        }
    </style>
</head>
<body>
    <div class='email-container'>
        <!-- Header Section -->
        <div class='email-header'>
            <!-- Logo -->
            <img src='https://ihub.himilouniversity.edu.so/uploads/logo.png' alt='Logo' />
            <h1>Waan Ku Salaamay, $fullName</h1>
        </div>

        <!-- Body Section -->
        <div class='email-body'>
            <p>Waad Ku Mahadsatahay Is Diiwan Galintaada.</p>
            <p>Waan Kula Soo Xeriiri Doonaa Si Aad U Dhameystirato Stepska Kuu Haray.</p>
            <p>Haddii aad qabtid su'aalo ama aad u baahan tahay wax dheeraad ah, fadlan <a href='https://ihub.himilouniversity.edu.so/contact-us'> Nala soo xiriir </a> waqti kasta.</p>
            <p>Mahadsanid,<br>
            <strong>Himilo Innovation Hub</strong></p>

            <!-- Call to action button -->
            <p><a href='https://ihub.himilouniversity.edu.so/' class='button'>Booqo Website-keena</a></p>
        </div>

        <!-- Footer Section -->
        <div class='email-footer'>
            <p>Haddii aad rabto inaad nala soo xiriirto, waxaad noogu soo qori kartaa <a href='mailto:affanacademy0@gmail.com'>affanacademy0@gmail.com</a>.</p>
            <p>&copy; ".date('Y') ."Himilo Innovation Hub - Dhammaan Xuquuqaha Waa Xifdisan Yihiin.</p>
        </div>
    </div>
</body>
</html>
";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode([
        'status'=>'success',
        'message'=>'Hampaliyo '.$fullName.' Si Sax Ayaad Isku Diiwan Galisay Waan Kula Soo Xriiri Doonaa!'
    ]);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
// Sender End here

// Action
if(isset($_POST['action']))
{
    $action=$_POST['action'];
    $action($conn);
}
else
{
    echo json_encode(value: ["status"=>"error","message"=>"Action Is Required!"]);
}

// Register Function
function MentorReg($conn)
{
    if(isset($_POST['MentorReg']) && $_POST['MentorReg']=="ihub#44")
    {
        // Extracting All Post Method Into Varibles
        extract($_POST);
        if($fullName == NULL || $phone == NULL || $email == NULL || $address == NULL)
        {
            echo json_encode(value: ["status"=>"error","message"=>"Waa Qasab In Formka Oo Idil Aad Buuxiso!"]);
        }
        else
        {
            // Check Old Data
            $read_old_email= mysqli_query($conn,"SELECT * FROM mentor_students WHERE Email = '$email'");
            if($read_old_email && mysqli_num_rows($read_old_email)>0)
            {
                echo json_encode(value: ["status"=>"error","message"=>"($email)-Iimaylkaan Hore Ayaa Loo Qaatay!"]);
            }
            else
            {
                 // Check Old Data
            $read_old_Phone= mysqli_query($conn,"SELECT * FROM mentor_students WHERE Phone = '$phone'");
            if($read_old_Phone && mysqli_num_rows($read_old_Phone)>0)
            {
                echo json_encode(value: ["status"=>"error","message"=>"($phone)-Number Taleefankaan Hore Ayaa Loo Qaatay!"]);
            }
            else
            {
                $insert = mysqli_query($conn , "INSERT INTO mentor_students( fullName, Email, Phone, Address)VALUES('$fullName','$email','$phone','$address')");
                if($insert)
                {
                    // SEND_EMAIL($conn,$email,$fullName);
                      echo json_encode([
        'status'=>'success',
        'message'=>'Hampaliyo '.$fullName.' Si Sax Ayaad Isku Diiwan Galisay Waan Kula Soo Xriiri Doonaa!'
    ]);
                }
                else
                {
                    echo json_encode(value: ["status"=>"error","message"=>"Waxbaa Qaldan Fadlan Nala Soo Xariir <a href='https://wa.link/ovqav5'>0615546003</a>"]);
                }
            }
            }
        }
    }
    else
    {
        echo json_encode(value: ["status"=>"error","message"=>"Registration Mentor Is Required Or Registration Mentor Password Is Invalid "]);
    }
}

// Read
function MentorRead($conn)
{
    if(isset($_POST['MentorRead']) && $_POST['MentorRead']=="MentorRead2024")
    {
        $read = mysqli_query($conn,"SELECT * FROM mentor_students");
        if($read && mysqli_num_rows($read)>0)
        {
            foreach($read as $row)
            {
            $data[]="
            <tr>
            <td>$row[id]<td>
            <td>$row[fullName]<td>
            <td>$row[Phone]<td>
            <td>$row[Email]<td>
            <td>$row[Address]<td>
            <td>$row[create_date]<td>
            <tr>
            ";
            }
            echo json_encode(value: ["status"=>"success","message"=>$data]);
        }
        else
        {
            echo json_encode(value: ["status"=>"error","message"=>"<tr><td colspan='6'>We Don't Have Any Data!</td></tr>"]);
        }
    }
}
?>
