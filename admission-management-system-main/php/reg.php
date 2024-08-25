<?php
include("connection.php");
session_start();
$unit= $_SESSION['unit'];
if(isset($_POST['submit']))
{
  
  $sscroll=mysqli_real_escape_string($conn,$_POST['ssc_roll']);
  $sscreg=mysqli_real_escape_string($conn,$_POST['ssc_reg']);
  $board1=mysqli_real_escape_string($conn,$_POST['board1']);
  $year1=mysqli_real_escape_string($conn,$_POST['year1']);

  $hscroll=mysqli_real_escape_string($conn,$_POST['hsc_roll']);
  $hscreg=mysqli_real_escape_string($conn,$_POST['hsc_reg']);
  $board2=mysqli_real_escape_string($conn,$_POST['board2']);
  $year2=mysqli_real_escape_string($conn,$_POST['year2']);

  $select=mysqli_query($conn,"SELECT * FROM ssc_result INNER JOIN hsc_result ON ssc_result.Reg_no=hsc_result.Reg_no where ssc_result.Reg_no='$sscreg' and ssc_result.Roll='$sscroll' and hsc_result.roll='$hscroll' and board1='$board1'and board2='$board2' and year1='$year1'and year2='$year2'" ) or die ('query failed');
  $select1=mysqli_query($conn,"SELECT * FROM admission where Reg_no='$sscreg'");
  if(mysqli_num_rows($select)<=0)
  {
       $message[]='invalid data';
       
  }
  else{

        
           $row=mysqli_fetch_assoc($select);
          if($unit=="A")
          {
                  if($row['gr']=="Science" && $row['gr2']=="Science")
                   {
                       
                    if($row['result']>=4.5 && $row['result2']>=4.5)
                   {


                    $message[]='you are eligible';
                    $_SESSION['sscreg']=$row['Reg_no'];
                    if(mysqli_num_rows($select1)<=0)
                     {
                           
                       header('location:reg1.php');
                     }
                     else{
                       header('location:p.php');
                     }
                      
                    
                   }
                    else
                    $message[]='result are not eligible';
                  
                   
                  
                   }
                   else
                   $message[]='group are not eligible';
          }


          if($unit=="B")
          {
                  
                    if($row['result']>=4 && $row['result2']>=3.5)
                   {


                    $message[]='you are eligible';
                    $_SESSION['sscreg']=$row['Reg_no'];
                    if(mysqli_num_rows($select1)<=0)
                     {
                           
                       header('location:reg1.php');
                     }
                     else{
                       header('location:p.php');
                     }
                      
                    
                   }
                    else
                    $message[]='result are not eligible';
                  
                   
                  
                   }
                  

          if($unit=="C")
          {
                  
                    if($row['result']>=4 && $row['result2']>=3)
                   {


                    $message[]='you are eligible';
                    $_SESSION['sscreg']=$row['Reg_no'];
                    if(mysqli_num_rows($select1)<=0)
                     {
                           
                       header('location:reg1.php');
                     }
                     else{
                       header('location:p.php');
                     }
                      
                    
                   }
                    else
                    $message[]='result are not eligible';
                  
                   
                  
                   }
                  
          if($unit=="D")
          {
                  if($row['gr']=="Science" && $row['gr2']=="Science")
                   {
                       
                    if($row['result']>=4.5 && $row['result2']>=4.5)
                   {


                    $message[]='you are eligible';
                    $_SESSION['sscreg']=$row['Reg_no'];
                    if(mysqli_num_rows($select1)<=0)
                     {
                           
                       header('location:reg1.php');
                     }
                     else{
                       header('location:p.php');
                     }
                      
                    
                   }
                    else
                    $message[]='result are not eligible';
                  
                   
                  
                   }
                   else
                   $message[]='group are not eligible';

          }
          if($unit=="E")
          {
                  if(($row['gr']=="Science"||$row['gr']=="Commerce") && ($row['gr2']=="Science"||$row['gr2']=="Commerce"))
                   {
                       
                    if($row['result']>=4.5 && $row['result2']>=4)
                   {


                    $message[]='you are eligible';
                    $_SESSION['sscreg']=$row['Reg_no'];
                    if(mysqli_num_rows($select1)<=0)
                     {
                           
                       header('location:reg1.php');
                     }
                     else{
                       header('location:p.php');
                     }
                      
                    
                   }
                    else
                    $message[]='result are not eligible';
                  
                   
                  
                   }
                   else
                   $message[]='group are not eligible';

          }



      
       
      //  $insert=mysqli_query($conn,"insert into `stu`(reg,name,dob,email) values ('$sscroll','$board1','$board1','$board1')");
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style3.css">

     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>reg form</title>
</head>
<body>



  <div class="container">

  
        
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

    
            <div class="form first">

            <?php
        if(isset($message))
        {
          foreach($message as $message)
          { 
            echo '<div class="message">'.$message.'</div>';

            
          }
        }
        ?>
              <div class="details personal">
                 <span class="title">Applications</span>

        

                 <div class="fields">




                 <div class="input-field">
                  
                    <input type="text" name="ssc_roll" placeholder="SSC roll no" required>
                  </div>

                  <div class="input-field">
                   
                    <input type="text"name="ssc_reg" placeholder="SSC reg no"required >
                  </div>
                 

                 <div class="input-field">
                    <select id="country" name="board1"required>
                      <option value="SSC Board">SSC Board</option>
                      <option value="Dhaka">Dhaka</option>
                      <option value="Chittagong">Chittagong</option>
                      <option value="Sylhet">Sylhet</option>
                      <option value="Dinajpur">Dinajpur</option>
                    </select>
                  </div>


                  <div class="input-field">
                    <select id="country" name="year1"required>
                      <option value="SSC Year">SSC Year</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                    </select>
                  </div>
                 
                  
                  <div class="input-field">
                    <input type="text" name="hsc_roll" placeholder="HSC roll no"required >
                  </div>

                  <div class="input-field">
                    <input type="text" name="hsc_reg" placeholder="HSC reg no" required>
                  </div>
                 

                  <div class="input-field">
                    <select id="country" name="board2"required>
                      <option value="HSC Board">HSC Board</option>
                      <option value="Dhaka">Dhaka</option>
                      <option value="Chittagong">Chittagong</option>
                      <option value="Sylhet">Sylhet</option>
                      <option value="Dinajpur">Dinajpur</option>
                      <option value="Comilla">Comilla</option>
                      <option value="Mymensingh">Mymensingh</option>
                    </select>
                  </div>

                  <div class="input-field">
                    <select id="country" name="year2"required>
                      <option value="HSC Year">HSC Year</option> 
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                     
                    </select>
                  </div>
                  
                

                  </div>


                 <!-- <button class="nxtBtn">
                  <span class="btnText"> Next</span>
                  <i class="uil uil-navigator"></i>
                 </button> -->

                
                 
                        <div class="butto1">
                          
                 <input type="submit" name="submit" value="next" class="button"></div>


                </div>
            </div>
          </form>
         
  
          <div class="hea2">
           </div>
    

</div> 
<script src="script.js"></script>



        
</body>
</html>