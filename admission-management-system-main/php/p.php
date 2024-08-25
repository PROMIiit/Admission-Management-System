<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include 'connection.php';
session_start();
$sscreg=$_SESSION['sscreg'];
$unit=$_SESSION['unit'];

$select1=mysqli_query($conn,"SELECT * FROM admission where Reg_no='$sscreg'");
$row=mysqli_fetch_assoc($select1);

$email=$row['email'];

if(isset($_POST['send']))
{


$t_id=rand(1000000,99999999); 
$_SESSION['t_id']= $t_id;
$_SESSION['email']= $email;

require ('PHPMailer/Exception.php');
require ('PHPMailer/SMTP.php');
require ('PHPMailer/PHPMailer.php');

$mail = new PHPMailer(true);

try {
   
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'admissioniit10@gmail.com';                     
    $mail->Password   = 'xtwdprtvcrffbdyo';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
    $mail->Port       = 587;                                    
    $mail->setFrom('admissioniit10@gmail.com', 'admission');
    $mail->addAddress($email);    
    $mail->Subject = 'Transaction Id generation';
    $mail->Body    = "Your Transaction id = $t_id";
    

    $mail->send();
    echo 'Message has been sent';
    $message[]='registration successfully';
    header('location:transaction.php');
} catch (Exception $e) {
  $message[]='registration failed';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

   
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pay.css">
    <title>Payment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    

    <section class="experience-section7">
        <br><br><br><br>
        <form action=" " method="post" enctype="multipart/form-data">
    <center> <div class="half-width7 left-experience7">  
                <center><img src="../images/b.jpg" alt="bikas" width="180" height="180"> </center><br>
            
                <center> Amount :   750 Tk.(only) </center>
                <center> Mobile Number :  0<?php echo $row['cont1'];?>
            </center>
        
            <center>Email : <?php echo $row['email'];?>
                
             </center>
             <br>
           <!-- <a href="transaction.php"><center><button class="blue-color">Send</button></center></a>  -->
           
                        <div class="blue-color">
                          <input type="submit" name="send" value="Send" class="button"></div>
                         </div>
        </div>
        </center>
</form>
    </section>
    
</body>

</html>
