<?php
include("connection.php");
session_start();
$sscreg=$_SESSION['sscreg'];
$unit=$_SESSION['unit'];
$roll=$_SESSION['roll'];

$select=mysqli_query($conn,"SELECT * FROM ssc_result  where ssc_result.Reg_no='$sscreg'" ) or die ('query failed');
$row=mysqli_fetch_assoc($select);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Plan</title>
    <link rel="stylesheet" href="../css/seat.css">
</head>
<body>

    <div class="container">

   
    <p><?php echo $unit;?> Unit: Seat Plan</p>
    <table>
        
            <th colspan="2"><h3>Exam Roll:<?php echo $roll;?></h3></th>
        
        <tr>
            <td>Name</td>
            <td><?php echo $row['name'];?></td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td><?php echo $row['fathers_name'];?></td>
        </tr>

        <tr>
            <td>Exam Date</td>
            <td>Tuesday,August 2,2023</td>
        </tr>
        <tr>
            <td>Time</td>
            <td>9:00 AM - 10:00 AM</td>
        </tr>
        <tr>
            <td>Building</td>
            <td>Physics Building</td>
        </tr>
        <tr>
            <td>Room No</td>
            <td>104</td>
        </tr>
    </table>
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3994.3603488350836!2d90.26651094279936!3d23.887736305661935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e998af65bee5%3A0x51e41cefc20b8fa8!2sJahangirnagar%20University%2C%20Savar%20Union!5e0!3m2!1sen!2sbd!4v1680252866924!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
</div>
    
</body>
</html>