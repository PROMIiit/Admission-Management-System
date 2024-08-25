<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include 'connection.php';
session_start();
$sscreg=$_SESSION['sscreg'];
if(isset($_POST['submit']))
{
  
  $nation=mysqli_real_escape_string($conn,$_POST['country']);
  $language=mysqli_real_escape_string($conn,$_POST['language']);
  $district=mysqli_real_escape_string($conn,$_POST['district']);
  $trivil=mysqli_real_escape_string($conn,$_POST['trivial']);

  $freedom=mysqli_real_escape_string($conn,$_POST['f1']);
  $gurdian=mysqli_real_escape_string($conn,$_POST['gurdian']);
  $district1=mysqli_real_escape_string($conn,$_POST['district1']);
  $village1=mysqli_real_escape_string($conn,$_POST['village1']);
  $upozilla1=mysqli_real_escape_string($conn,$_POST['upazilla1']);
  $post1=mysqli_real_escape_string($conn,$_POST['post_code1']);
  $land1=mysqli_real_escape_string($conn,$_POST['land_phone1']);
  $contact1=mysqli_real_escape_string($conn,$_POST['contact_number1']);
  $email1=mysqli_real_escape_string($conn,$_POST['email1']);
  $contact_op1=mysqli_real_escape_string($conn,$_POST['contact_number(op1)']);

  $gurdian2=mysqli_real_escape_string($conn,$_POST['Gurdian2']);
  $district2=mysqli_real_escape_string($conn,$_POST['District2']);
  $village2=mysqli_real_escape_string($conn,$_POST['village2']);
  $upozilla2=mysqli_real_escape_string($conn,$_POST['upazilla2']);
  $post2=mysqli_real_escape_string($conn,$_POST['post_code2']);
  $land2=mysqli_real_escape_string($conn,$_POST['land_phone2']);
  // $pic1=mysqli_real_escape_string($conn,$_POST['box1']);
  // $pic2=mysqli_real_escape_string($conn,$_POST['box2']);

  $pic1=$_FILES['image1']['name'];
  $pic1_tmp_name=$_FILES['image1']['tmp_name'];
  $pic1_folder='../im/'.$pic1;

  $pic2=$_FILES['image2']['name'];
  $pic2_tmp_name=$_FILES['image2']['tmp_name'];
  $pic2_folder='../im1/'.$pic2;




  
$randomnum=rand(10000,999999); 


  $select=mysqli_query($conn,"SELECT * FROM ssc_result INNER JOIN hsc_result ON ssc_result.Reg_no=hsc_result.Reg_no where ssc_result.Reg_no='$sscreg'" ) or die ('query failed');
 
  if(mysqli_num_rows($select)<=0)
  {
      
       echo "not matched";
  }
  else{
        
           
          $row=mysqli_fetch_assoc($select);
           $_SESSION['sscreg']=$row['Reg_no'];
          
       
      //  $insert=mysqli_query($conn,"insert into `stu`(reg,name,dob,email) values ('$sscroll','$board1','$board1','$board1')");
        
  }

  $insert= mysqli_query($conn,"INSERT INTO `admission`(Reg_no,nationality,language,district,	tribal,	ffstatus	,gur1,	dis1,	vil1,	up1,	post1	,land1,	cont1,	cont2,	email,	gur2,	vil2,	up2,	dist2,	post2,	land2,	pic,	sign,pass) VALUES ('$sscreg','$nation','$language','$district','$trivil','$freedom','$gurdian','$district1','$village1','$upozilla1','$post1','$land1','$contact1','$contact_op1','$email1','$gurdian2','$village2','$upozilla2','$district2','$post2','$land2','$pic1','$pic2',$randomnum)") or die ('query failed');

  if($insert)
  { 
    move_uploaded_file($pic1_tmp_name,$pic1_folder);
    move_uploaded_file($pic2_tmp_name,$pic2_folder);
    
  


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
    $mail->addAddress($email1);    
    $mail->Subject = 'password generation';
    $mail->Body    = "contact = $contact1 and password= $randomnum";
    

    $mail->send();
    echo 'Message has been sent';
    $message[]='registration successfully';
    header('location:regdone.php');
} catch (Exception $e) {
  $message[]='registration failed';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

   
  }

  else
  {
    $message[]='registration failed';

  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style5.css">

     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>reg form</title>
</head>


<body>

   <?php

  
   $query=mysqli_query($conn,"SELECT * from ssc_result INNER JOIN hsc_result on ssc_result.Reg_no=hsc_result.Reg_no where ssc_result.Reg_no='$sscreg'");
   if(mysqli_num_rows($query)>0){
   $row=mysqli_fetch_assoc($query);
   }
    
    ?>


  <div class="container">
          <!--<h3>hi, <span> admin</span></h3>-->

          <div class="hea">
    <header>Jahangirnagar University<br></header>
    <p>registration form for undergraduate program</p>

   </div>

   <div class="hea1">
   <div class="na">
        <p>    </p>
       </div>
       <div class="na">
        <p>    </p>
       </div>
       <div class="na">
        <p>home</p>
       </div>
       <div class="na">
        <p>photo and signature validatore</p>
       </div>
       <div class="na">
        <p>payment status</p>
       </div>
       <div class="na">
        <p>applicant copy</p>
       </div>
       <div class="na">
        <p>    </p>
       </div>
       <div class="na">
        <p>    </p>
       </div>

   </div>
         
       <form action=" " method="post" enctype="multipart/form-data">
        <?php
        if(isset($message))
        {
          foreach($message as $message)
          { 
            echo '<div class"message">'.$message.'</div>';
          }
        }
        ?>
            <div class="form first">
              <div class="details personal">
                 <span class="title">Personal Information</span>

                 <div class="fields">

                  <div class="input-field">
                    <label>Full Name    :</label>
                    <div class="country" >
                    <p><?php echo $row['name'];?></p>
                    </div>
                  </div>

                  <div class="input-field">
                    <label>Fathers Name    :</label>
                    <div class="country" >
                    <p><?php echo $row['fathers_name'];?></p>
                    </div>
                  </div>

                  <div class="input-field">
                    <label>date of birth   :</label>
                    <div class="country" >
                    <p><?php echo $row['DOB'];?></p>
                    </div>
                  </div>

                  <div class="input-field">
                    <label>mothers name    :</label>
                    <div class="country" >
                    <p><?php echo $row['mothers_name'];?></p>
                    </div>
                  </div>

                  <div class="input-field">
                    <label>gender:</label>
                    <div class="country" >
                    <p><?php echo $row['gender'];?></p>
                    </div>
                  </div>
                 

                  <div class="input-field">
                    <label>nationality</label>
                    
                    <select id="country" name="country"required>
                      <option value="Bangladeshi">Bangladeshi</option>
                      
                    </select>

                  </div>

                  <div class="input-field">
                    <label>Question language</label>
                    
                    <select id="country" name="language"required>
        
                      <option value="bangla">bangla</option>
                      <option value="english">english</option>
                     
                    </select>

                  </div>

                  <div class="input-field">
                    <label>Home district</label>
                    
                    <select id="country" name="district"required>
                      <option value="Dhaka">Dhaka</option>
                      <option value="Brahmanbaria">Brahmanbaria</option>
                      <option value="Jamalpur">Jamalpur</option>
                      <option value="patuakhali">patuakhali</option>
                      <option value="kurigram">kurigram</option>
                      <option value="feni">feni</option>
                      <option value="bhola">bhola</option>
                    </select>

                  </div>

                  <div class="input-field">
                    <label>trival quota</label>
                    
                    <select id="country" name="trivial"required>
                      <option value="none">none</option>
                      <option value="chakma">chakma</option>
                      <option value="marma">marma</option>
                      <option value="garo">garo</option>
                      <option value="saotal">saotal</option>
                    </select>

                  </div>

                  </div>
                  <div class="fields">
                 <div class="input-field">
                    <label>Fredom Fighter Status</label>
                     <div class="icce">
                    <input type="radio" id="html" name="f1" value="YES">
                  <label for="html">YES</label>
                 <input type="radio" id="css" name="f1" value="NO">
                  <label for="css">NO</label><br>
                    </div>
                  </div>

                  
                  
                  
                  <!--<div class="input-field">
                    <label>mobile number</label>
                    <input type="number" placeholder="mobile number" required>
                  </div>
                  
                  <div class="input-field">
                    <label>email</label>
                    
                    <select id="country" name="country"required>
                      <option value="usa">USA</option>
                      <option value="usa1">USA1</option>
                      <option value="usa2">USA2</option>
                      <option value="usa3">USA</option>
                    </select>

                  </div>

                  <div class="input-field">
                    <label>gender</label>
                    <input type="date" placeholder="gender" required>
                  </div>
     
                  <div class="input-field">
                    <label>occupation</label>
                    <input type="text" placeholder="occupation" required>
                  </div>

                   -->
                  
 
                  
                
                 <div class="details ID">
                 <span class="title">present address</span>

                 <div class="fields">

                  <div class="input-field">
                    <label>Gurdian/care off*</label>
                    <input type="text" name="gurdian" placeholder="Gurdian/careoff*" required>
                  </div>
                 
                  <div class="input-field">
                    <label>Home district</label>
                    
                    <select id="country" name="district1"required>
                      <option value="Dhaka">Dhaka</option>
                      <option value="Brahmanbaria">Brahmanbaria</option>
                      <option value="jamalpur">Jamalpur</option>
                      <option value="patuakhali">patuakhali</option>
                      <option value="kurigram">kurigram</option>
                      <option value="feni">feni</option>
                      <option value="bhola">bhola</option>
                    </select>

                  </div>
     
                  <div class="input-field">
                    <label>village/house/road no</label>
                    <input type="text" name="village1" placeholder="village/house/road no" required>
                  </div>

                  <div class="input-field">
                    <label>p.s/upazilla</label>
                    <input type="text" name="upazilla1" placeholder="p.s/upazilla" required>
                  </div>
                 
                  <div class="input-field">
                    <label>post code</label>
                    <input type="text" name="post_code1" placeholder="post code" required>
                  </div>
     
                  <div class="input-field">
                    <label>land phone(if any)</label>
                    <input type="text" name="land_phone1" placeholder="land phone" >
                  </div>
                  <div class="input-field">
                    <label>contact number</label>
                    <input type="text" name="contact_number1" placeholder="contact number" required>
                  </div>
                  <div class="input-field">
                    <label>email</label>
                    <input type="text" name="email1" placeholder="email" required>
                  </div>
                  <div class="input-field">
                    <label>contact number(optional)</label>
                    <input type="text" name="contact_number(op1)" placeholder="contact number(optional)" >
                  </div>

                 </div>

                 <div class="details ID">
                 <span class="title">parmanent address</span>

                 <div class="fields">

                  <div class="input-field">
                    <label>Gurdian/care off*</label>
                    <input type="text" name="Gurdian2" placeholder="Gurdian/careoff*" >
                  </div>
                 
                  <div class="input-field">
                    <label>Home district</label>
                    
                    <select id="country" name="District2"required>
                      <option value="Dhaka">Dhaka</option>
                      <option value="Brahmanbaria">Brahmanbaria</option>
                      <option value="Jamalour">Jamalpur</option>
                      <option value="patuakhali">patuakhali</option>
                      <option value="kurigram">kurigram</option>
                      <option value="feni">feni</option>
                      <option value="bhola">bhola</option>
                    </select>

                  </div>
     
                  <div class="input-field">
                    <label>village/house/road no</label>
                    <input type="text" name="village2" placeholder="village/house/road no" required>
                  </div>

                  <div class="input-field">
                    <label>p.s/upazilla</label>
                    <input type="text" name="upazilla2" placeholder="p.s/upazilla" required>
                  </div>
                 
                  <div class="input-field">
                    <label>post code</label>
                    <input type="text" name="post_code2" placeholder="post code" required>
                  </div>
     
                  <div class="input-field">
                    <label>land phone(if any)</label>
                    <input type="text" name="land_phone2" placeholder="land phone" >
                  </div>
                 
                 
                  

                 </div>

                

                 <div class="details ID">
                 <span class="title">Result</span>

                 <div class="fields">

                 <div class="input-field">
                    <label>SSC/equivalent result :</label>
                    <div class="country" >
                    <p><?php echo $row['result'];?></p>
                    </div>
                  </div>
                  
                  <div class="input-field">
                    <label>HSC/equivalent result   :</label>
                    <div class="country" >
                    <p><?php echo $row['result2'];?></p>
                    </div>
                  </div>
     
                      </div>

                  <div class="details1 ID">
                 <span class="title">Upload Photo and Signature</span>
                
                  <div class="fields">
                  <div class="input-field">
                    <label>Photo</label>
                    <input type="file" name="image1" class="box1" accept="image/jpg,mage/jpeg,image/png">
                  </div>
                 
                         </div>
                  <div class="fields">
                  <div class="input-field">
                    <label>signature</label>
                    <input type="file" name="image2" class="box2" accept="image/jpg,mage/jpeg,image/png">
                  </div>
                 
                 
     
                  
                
                 
                  

                 </div>
  </div>




  


                 <!-- <button class="nxtBtn">
                  <span class="btnText"> submit </span>
                  <i class="uil uil-navigator">

                  </i>
                 </button> -->

                 <div class="butto1">
                 <input type="submit" name="submit" value="next" class="button"></div>


                </div>
            </div>
          </form>
          <!-- <a href="reg.php" class="btn">submit</a> -->
  
          <div class="hea2">
    

   </div>
    

</div> 
<script src="script.js"></script>
</body>
</html>