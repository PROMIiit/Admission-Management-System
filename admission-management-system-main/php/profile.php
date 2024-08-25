<?php
include("connection.php");
session_start();
$sscreg=$_SESSION['sscreg'];


$select=mysqli_query($conn,"SELECT * FROM admission inner join ssc_result on ssc_result.Reg_no=admission.Reg_no inner join hsc_result on hsc_result.Reg_no=admission.Reg_no where ssc_result.Reg_no='$sscreg'" ) or die ('query failed');
$row=mysqli_fetch_assoc($select);

$a=mysqli_query($conn,"SELECT * FROM a where Reg_no='$sscreg'" ) or die ('query failed');
$b=mysqli_query($conn,"SELECT * FROM b where Reg_no='$sscreg'" ) or die ('query failed');
$c=mysqli_query($conn,"SELECT * FROM c where Reg_no='$sscreg'" ) or die ('query failed');
$d=mysqli_query($conn,"SELECT * FROM d where Reg_no='$sscreg'" ) or die ('query failed');
$e=mysqli_query($conn,"SELECT * FROM e where Reg_no='$sscreg'" ) or die ('query failed');

if(isset($_POST['submita']))
{
    $row1=mysqli_fetch_assoc($a);
    $_SESSION['unit']="A";
   
    $_SESSION['roll']=$row1['roll'];
    header('location:seat.php');
}

if(isset($_POST['submitb']))
{
    $row2=mysqli_fetch_assoc($b);
    $_SESSION['unit']="B";
   
    $_SESSION['roll']=$row2['roll'];
    header('location:seat.php');
}
if(isset($_POST['submitc']))
{
    $row2=mysqli_fetch_assoc($c);
    $_SESSION['unit']="C";
   
    $_SESSION['roll']=$row2['roll'];
    header('location:seat.php');
}
if(isset($_POST['submitd']))
{
    $row3=mysqli_fetch_assoc($d);
    $_SESSION['unit']="D";
   
    $_SESSION['roll']=$row3['roll'];
    header('location:seat.php');
}
if(isset($_POST['submite']))
{
    $row4=mysqli_fetch_assoc($e);
    $_SESSION['unit']="";
   
    $_SESSION['roll']=$row4['roll'];
    header('location:seat.php');
}
  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile1.css">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   
</head>

<body>
    
<nav>
			<!-- <div class="logoimg">
				<img src="images/ju_logo.png" alt="" width="80px">
			</div> -->
			<div class="logo"><img src="../images/whlogo.png" alt="" width="80px">
				 <!-- <h1 style="font-size: 20px;"> Jahangirnagar University </h1>  -->
			
			</div>
			<div class="logotext"><h1 style="font-size: 20px;"> Jahangirnagar University </h1></div>

         
		  
			<div class="menu">

                <a href="../index.html" >Home</a>
				<a href="../html/FAQ.html">FAQ</a>
				<a href="../html/contact.html" >Help</a>
				<a href="unitreg.php">Registration</a>
				<a href="login.php">LogIn</a>
				<a href="../chatbot/index.html">Chatbot</a>


			</div>
		</nav>
		

    <section class="experience-section8">
    <center> <h2 class="exp-header8">Student Admission System</h2></center> 

        <div class="flexible-container8 experience-container8">

            <div class="half-width8 left-experience8">
                <h2>Student Profile</h2>
                <center> <h4 class="blue-color">Picture</h4></center>
                <?php echo '<img src="../im/'.$row['pic'].'" height=200px width=200px >';?> 
                <center> <h4 class="blue-color">Signature</h4></center>
                <?php echo '<img src="../im1/'.$row['sign'].'" height=50px width=200px>';?> 

                <h3 class="orange-color">Personal Information</h3>
                <div class="ul1">
					
                <strong>Name:</strong> <?php echo $row['name'];?><br>
                    <strong>Father's Name:</strong> <?php echo $row['fathers_name'];?><br>
                    <strong>Mother's Name:</strong> <?php echo $row['mothers_name'];?><br>
					<strong>Phone:</strong> <?php echo $row['cont1'];?><br>
                    
                    </div>

                <h3 class="orange-color">HSC</h3>
               <div class="ul1">
					<strong>Roll:</strong> <?php echo $row['roll'];?><br>
                    <strong>Group:</strong> <?php echo $row['gr2'];?><br>
                    <strong>Passing year & Board:</strong><?php echo $row['year2'];?> - <?php echo $row['board2'];?><br>
                    <strong>GPA:</strong> </strong><?php echo $row['result2'];?> <br>
                    </div>

                <h3 class="orange-color">SSC</h3>
                <div class="ul1">
					<strong>Roll:</strong> <?php echo $row['Roll'];?><br>
                    <strong>Group:</strong> <?php echo $row['gr'];?><br>
                    <strong>Passing year & Board:</strong><?php echo $row['year1'];?> - <?php echo $row['board1'];?><br>
                    <strong>GPA:</strong><?php echo $row['result'];?><br>
                    </div>

                <h3 class="orange-color">Emergency Contact</h3>
                <div class="ul1">
					<strong>Phone:</strong> 555-555-5555<br>
                    <strong>Email:</strong><href>juniv.admsn.help@juniv.edu</href><br>
                    </div>       
            </div>


            <div class="half-width8 right-experience8">
                <h3>Units applied for</h3>
                <div class="huday">
                  <?php
                    if(mysqli_num_rows($a)>0)
                    {
                        
                        echo '<div class="a-unit"><p>A Unit</p></div>';
       
                    }
                    if(mysqli_num_rows($b)>0)
                    {
                        
                        echo '<div class="a-unit"><p>B Unit</p></div>';
       
                    }
                    if(mysqli_num_rows($c)>0)
                    {
                        
                        echo '<div class="a-unit"><p>C Unit</p></div>';
       
                    }
                    if(mysqli_num_rows($d)>0)
                    {
                        
                        echo '<div class="a-unit"><p>D Unit</p></div>';
       
                    }
                    if(mysqli_num_rows($e)>0)
                    {
                        
                        echo '<div class="a-unit"><p>E Unit</p></div>';
       
                    }
                      ?>

</div>
                <!-- <button ><h4 class="green-color">A Unit</h4></button>
                <button ><h4 class="green-color">D Unit</h4></button> -->
                <p class="green-color">Following units fee payment and application is complete. 
                    After the scheduled time download the admit card and attend the exam.</p>
            
                    <h3 class="koyri-color">Urgent instructions for application process!</h3>
          
                    <?php
                    if(mysqli_num_rows($a)>0)
                    {
                        
                        
                        echo '<div class="unit">
                  
                       
                            <div class=first> 
                          
                              <h3 class="blue-color">A Unit</h3>
                              <strong>Medium is Bengali</strong><br>
                            <p class="green-color">Fee payment completed.</p>
                           <!-- <strong>Medium is english</strong><br>  -->
                          <!-- <p> See Eligible Subjects...</p>  -->

                                 </div>
                           
                           
                       
                        <div class="second">
                        <strong class="black-color">Download Admit card</strong>
                        <a href = "../pdf/A_unit_admit.pdf" download ><br>
                        <button> Download </button> </a>

                        </div>
                        <div class="third">
                               
                        <form action=" " method="post" enctype="multipart/form-data">
                        <a href = "seat.php" seat plan ><br>
                        <input type="submit" name="submita" value="Seat Plan" class="button" ></a> </form>
                        <a href = "result.php" result >
                        <input type="submit" name="submit" value="Result" class="button" ></a>
                       
                               
                            
                             </div>

                    </div>';

                }

                if(mysqli_num_rows($b)>0)
                {
                    
                    echo '<div class="unit">
              
                   
                        <div class=first> 
                      
                          <h3 class="blue-color">B Unit</h3>
                          <strong>Medium is English</strong><br>
                        <p class="green-color">Fee payment completed.</p>
                       <!-- <strong>Medium is Bengali</strong><br>  -->
                      <!-- <p> See Eligible Subjects...</p>  -->

                             </div>
                       
                       
                   
                    <div class="second">
                    <strong class="black-color">Download Admit card</strong>
                    <a href = "../pdf/A_unit_admit.pdf" download ><br>
                    <button> Download </button> </a>

                    </div>
                    <div class="third">
                    <form action=" " method="post" enctype="multipart/form-data">
                    <a href = "seat.php" seat plan ><br>
                        <input type="submit" name="submitb" value="Seat Plan" class="button" ></a> </form>
                        <a href = "result.php" result >
                        <input type="submit" name="submit" value="Result" class="button" ></a>
                           
                        
                         </div>

                </div>';

            }

            if(mysqli_num_rows($c)>0)
            {
                
                
                echo '<div class="unit">
          
               
                    <div class=first> 
                  
                      <h3 class="blue-color">C Unit</h3>
                      <strong>Medium is Bengali</strong><br>
                    <p class="green-color">Fee payment completed.</p>
                   <!-- <strong>Medium is Bengali</strong><br>  -->
                  <!-- <p> See Eligible Subjects...</p>  -->

                         </div>
                   
                   
               
                <div class="second">
                <strong class="black-color">Download Admit card</strong>
                <a href = "../pdf/A_unit_admit.pdf" download ><br>
                <button> Download </button> </a>

                </div>
                <div class="third">
                <form action=" " method="post" enctype="multipart/form-data">
                <a href = "seat.php" seat plan ><br>
                <input type="submit" name="submitc" value="Seat Plan" class="button" ></a></form>
                <a href = "result.php" result >
                <input type="submit" name="submit" value="Result" class="button" ></a>
                        
                    
                     </div>

            </div>';


        }

        if(mysqli_num_rows($d)>0)
        {
           
            echo '<div class="unit">
      
           
                <div class=first> 
              
                  <h3 class="blue-color">D Unit</h3>
                  <strong>Medium is Bengali</strong><br>
                <p class="green-color">Fee payment completed.</p>
               <!-- <strong>Medium is Bengali</strong><br>  -->
              <!-- <p> See Eligible Subjects...</p>  -->

                     </div>
               
               
           
            <div class="second">
            <strong class="black-color">Download Admit card</strong>
            <a href = "../pdf/A_unit_admit.pdf" download ><br>
            <button> Download </button> </a>

            </div>
            <div class="third">
            <form action=" " method="post" enctype="multipart/form-data">
            <a href = "seat.php" seat plan ><br>
                        <input type="submit" name="submitd" value="Seat Plan" class="button" ></a> </form>
                        <a href = "result.php" result >
                        <input type="submit" name="submit" value="Result" class="button" ></a>
                    
               
                 </div>

        </div>';

    }
    if(mysqli_num_rows($e)>0)
    {
        
        
        echo '<div class="unit">
  
       
            <div class=first> 
          
              <h3 class="blue-color">E Unit</h3>
              <strong>Medium is Bengali</strong><br>
            <p class="green-color">Fee payment completed.</p>
           <!-- <strong>Medium is Bengali</strong><br>  -->
          <!-- <p> See Eligible Subjects...</p>  -->

                 </div>
           
           
       
        <div class="second">
        <strong class="black-color">Download Admit card</strong>
        <a href = "../pdf/A_unit_admit.pdf" download ><br>
        <button> Download </button> </a>

        </div>
        <div class="third">
               
        <form action=" " method="post" enctype="multipart/form-data">
         <a href = "seat.php" seat plan ><br>
                        <input type="submit" name="submite" value="Seat Plan" class="button" ></a> </form>
                        <a href = "result.php" result >
                        <input type="submit" name="submit" value="Result" class="button" ></a>
           
             </div>

    </div>';

}
                ?>
                    



            
                </div>
        </div>
    </section>

    <section class="f1">
			<center><h3>Powered by: Institite of information Technology(IIT)</h3></center>
</section>
    
</body>

<!-- <input type="submit" name="submit" value="Seat Plan" class="button" ><br>
<input type="submit" name="submit" value="Result" class="button"> -->

</html>
