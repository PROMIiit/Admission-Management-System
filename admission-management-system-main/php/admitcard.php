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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
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
		  
			
		</nav>
		

    <section class="experience-section8">
    <center> <h2 class="exp-header8">Student Admission System</h2></center> 

        <div class="flexible-container8 experience-container8">

            

            <div class="half-width8 right-experience8">
                <h3>Units applied for</h3>
                 
                <button ><h4 class="green-color">A Unit</h4></button>
                <button ><h4 class="green-color">D Unit</h4></button>
                <p class="green-color">Following units fee payment and application is complete. 
                    After the scheduled time download the admit card and attend the exam.</p>
            
                    <h3 class="koyri-color">Urgent instructions for application process!</h3>
          
                    <div class="unit">
                  
                       
                            <div class=first> 
                          
                              <h3 class="blue-color">A Unit</h3>
                              <strong>Medium is Bengali</strong><br>
                            <p class="green-color">Fee payment completed.</p>
                           <!-- <strong>Medium is Bengali</strong><br>  -->
                          <!-- <p> See Eligible Subjects...</p>  -->

                                 </div>
                           
                           
                       
                        <div class="second">
                        <strong class="black-color">Download Admit card</strong>
                        <a href = "A_unit_admit.pdf" download ><br>
                        <button> Download </button> </a>

                        </div>
                        <div class="third">
                               
                        <input type="submit" name="submit" value="Seat Plan" class="button" ><br>
                        <input type="submit" name="submit" value="Result" class="button">
                                
                            
                             </div>

                    </div>
                    



            
                </div>
        </div>
    </section>

    <section class="f1">
			<center><h3>Powered by: Institite of information Technology(IIT)</h3></center>
</section>
    
</body>

</html>


