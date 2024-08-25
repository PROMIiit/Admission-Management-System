<?php
include("connection.php");
session_start();
if(isset($_POST['login']))
{
  
  $cn=mysqli_real_escape_string($conn,$_POST['cn']);
  $ps=mysqli_real_escape_string($conn,$_POST['ps']);
  

  
  $select=mysqli_query($conn,"SELECT * FROM admission where cont1='$cn' and pass=$ps");
  if(mysqli_num_rows($select)<=0)
  {
       $message[]='invalid data';

       
  }
else
{
  $row=mysqli_fetch_assoc($select);
  $_SESSION['sscreg']=$row['Reg_no'];
    header('location:profile.php');
}
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   
</head>

<body>
    

    <section class="experience-section7">

    <form action=" " method="post" enctype="multipart/form-data">
        <br><br><br><br>
        <div class="ok">
        <center> <div class="half-width7 left-experience7">
        <center><h2 >LOGIN</h2></center>  
        <p class="ass-color">Login if you have already completed the application process</p>
               <br>
            Applicant's mobile number
             <input id="telNo" name="cn" type="tel" placeholder="Ex: 01xxxxxxx" required />
            
            
             <br><br>
            Password
            <input type="password" name="ps" id="ps" name="pwd" minlength="5" required>
        
            
             <br><br>
            <center>
            <?php
        if(isset($message))
        {
          foreach($message as $message)
          { 
            echo '<div class="message">'.$message.'</div>';

            
          }
        }
        ?>
            <div class="butto1">
                          
                          <input type="submit" name="login" value="login" class="button"></div>
</div>
        </center>
        </div>
   

        
</form>
    </section>
         <br>
    <center>
    <a href="../html/contact.html"> <button class="black1-color">Mobile number retrive</button></a>
    <a href="../html/contact.html">   <button class="black1-color">Password retrive</button></a>
       
      
    </center>
    
</body>

</html>
