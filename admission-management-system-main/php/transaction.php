<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include 'connection.php';
session_start();
$sscreg=$_SESSION['sscreg'];
$unit=$_SESSION['unit'];
$ac="uil";
$roll=rand(1000000,99999999); 
$t_id= $_SESSION['t_id'];
$email=$_SESSION['email'];

if(isset($_POST['send1']))
{
$t_id1=mysqli_real_escape_string($conn,$_POST['telNo']);


if($t_id==$t_id1)
{
if($unit=="A")
{

$insert= mysqli_query($conn,"INSERT INTO `a`(t_id,Reg_no,roll,ac) VALUES ('$t_id','$sscreg','$roll','$ac')") or die ('query failed');

}
if($unit=="B")
{
    $insert= mysqli_query($conn,"INSERT INTO `b`(t_id,Reg_no,roll,ac) VALUES ('$t_id','$sscreg','$roll','$ac')") or die ('query failed');
// $insert= mysqli_query($conn,"INSERT INTO `b`(t_id,Reg_no,roll,ac) VALUES ('$t_id',$sscreg','$roll','$ac')") or die ('query failed');
}
if($unit=="C")
{
    $insert= mysqli_query($conn,"INSERT INTO `c`(t_id,Reg_no,roll,ac) VALUES ('$t_id','$sscreg','$roll','$ac')") or die ('query failed');
}
if($unit=="D")
{
    $insert= mysqli_query($conn,"INSERT INTO `d`(t_id,Reg_no,roll,ac) VALUES ('$t_id','$sscreg','$roll','$ac')") or die ('query failed');
}
if($unit=="E")
{
    $insert= mysqli_query($conn,"INSERT INTO `e`(t_id,Reg_no,roll,ac) VALUES ('$t_id','$sscreg','$roll','$ac')") or die ('query failed');
}

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
    $mail->Subject = 'Roll number generation';
    $mail->Body    = "Your Roll number of $unit is $roll";
    

    $mail->send();
    echo 'Message has been sent';
    $message[]='registration successfully';
    header('location:paydone.php');
} catch (Exception $e) {
  $message[]='registration failed';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}

else 
{
      echo "transaction id dont match";
}

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/transaction.css">
    <title>Transaction</title>
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
            <center><bold>Transaction ID :</bold> 
             <input id="telNo" name="telNo" type="tel" placeholder="enter transaction ID" />
            </center><br>
        
           
            <div class="blue-color">
            
                          <input type="submit" name="send1" value="Submit" class="button"></div>

                         </div>

</form>
            </div>
        </center>

    </section>
    
</body>

</html>
