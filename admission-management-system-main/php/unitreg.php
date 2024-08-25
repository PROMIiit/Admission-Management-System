<?php
include("connection.php");
session_start();

if(isset($_POST['a']))
{
	
	$_SESSION['unit']="A";
	header('location:reg.php');
}

else if(isset($_POST['b']))
{
	$_SESSION['unit']="B";
	header('location:reg.php');
}
else if(isset($_POST['c']))
{
	$_SESSION['unit']="C";
	header('location:reg.php');
}
else if(isset($_POST['d']))
{
	$_SESSION['unit']="D";
	header('location:reg.php');
}
else if(isset($_POST['e']))
{
	$_SESSION['unit']="E";
	header('location:reg.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	  <link rel="stylesheet" href="../css/foot.css">
	  <link rel="stylesheet" href="../css/notice.css">
      <link rel="stylesheet" href="../css/unitregg.css">
</head>


<div class="all">
	<header> 
	
		<nav>
			<!-- <div class="logoimg">
				<img src="images/ju_logo.png" alt="" width="80px">
			</div> -->
			<div class="logo"><img src="../images/ju_logo.png" alt="" width="80px">
				 <!-- <h1 style="font-size: 20px;"> Jahangirnagar University </h1>  -->
			
			</div>
			<div class="logotext"><h1 style="font-size: 20px;"> Jahangirnagar University </h1></div>
		  
			<div class="menu">
				<a href="../index.html" >Home</a>
				<a href="../html/FAQ.html">FAQ</a>
				<a href="../html/contact.html" >Help</a>
				<a href="php/unitreg.php">Registration</a>
				<a href="login.php">LogIn</a>
				<a href="../chatbot/index.html">Chatbot</a>

			</div>
		</nav>
		
			<main>
			<form action=" " method="post" enctype="multipart/form-data">
				<section class="home">	
					<!-- <a href="#"  class="btnone" name="ab" >A Unit <br>Minimum Requirement:<br> SSC 4.5<br>HSC 4.5</a> -->
					<a href="unitreg.php"  class="btnone">A Unit <br>Minimum Requirement:<br> SSC 4.5<br>HSC 4.5 <br>
				
					<input type="submit" name="a" value="Apply" class="button">
				
				</a>				
					<a href="unitreg.php"  class="btnone">B Unit <br>Minimum Requirement:<br> SSC 4.0<br>HSC 3.5<br>
					<input type="submit" name="b" value="Apply" class="button">
				</a>
					<a href="unitreg.php"  class="btnone">C Unit <br>Minimum Requirement:<br> SSC 4.0<br>HSC 3.0<br>
					<input type="submit" name="c" value="Apply" class="button">
				</a>
					<a href="unitreg.php"  class="btnone">D Unit <br>Minimum Requirement:<br> SSC 4.5<br>HSC 4.5<br>
					<input type="submit" name="d" value="Apply" class="button">
				</a>
					<a href="unitreg.php" class="btnone">E Unit <br>Minimum Requirement:<br> SSC 4.5<br>HSC 4.0<br>
					<input type="submit" name="e" value="Apply" class="button">
				</a>

					

				</section>
				
</form>
			</main>
		</header>




		<section class="experience-section1">
    

<br><br>
			<div class="flexible-container1 experience-container1">
	
			 
					<div class="half-width1 left-experience1">
					<h4 class="koyri-color">Notification regarding application for admission to first year Bachelor (Honours) category in the academic year 2021-2022.</h4>
					<a href = "../pdf/nb.pdf" download >
					   <center> <button class="blue-color"> Download </button> </a></center> 
					   <hr class="rounded1">
					   <h4 class="koyri-color">2021-2022 First Year Graduate (Honours) Admission 
						Test Admit Card download process has started.</h4>
						<hr class="rounded1">
						<h4 class="koyri-color">Detailed Time Table of First Year Graduate (Honours) Admission Test for Academic Year 2021-2022.
							<a href = "../pdf/ju.pdf" download >
							<button class="blue-color"> Download </button> </a></h4>
	
	
	
				</div>
	
				<div class="half-width1 right-experience1">   
						 <center><h3 class="blue-color">Notice Board</h3></center>
						 <p class="as-color">02 Aug,2022</p>
						<h4 class="koyri-color">Detailed Time Table of First Year Graduate (Honours) Admission Test for Academic Year 2021-2022.
						<a href = "../pdf/time.pdf" download >
							<button class="blue-color"> Download </button> </a></h4>
							<hr class="rounded1">
							<p class="as-color">02 Aug,2022</p>
				 <h4 class="koyri-color">Last date to change language of question paper is 23 July (23/07/2022) 5 PM, 2022</h4>
					</div>
	
	
				</div>
	
	
		</section>




		








		<section class="experience-section">
			<center><h3>Powered by: Institite of information Technology(IIT)</h3></center>
			
			
				
	
			</div>
		
	
		</section>


		
		
	</div>
</div>





</body>
</html>