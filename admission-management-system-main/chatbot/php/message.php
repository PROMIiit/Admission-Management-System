<?php
// ----- DATABASE CONNECTION ----- //
include_once '../includes/config.ini.php';

// ----- GETTING USER MESSAGE ----- //
$msg = mysqli_real_escape_string($db, $_POST['text']);

// ----- COMPARING USER MSG TO DATABASE DATA ----- //
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$msg%'";
$run_query = mysqli_query($db, $check_data) or die("Error");

// ----- IF USER MSG MATCHED WITH DATABASE DATA ----- //
if(mysqli_num_rows($run_query) > 0) {
  $fetch_data = mysqli_fetch_assoc($run_query);
  $replay = $fetch_data['replies'];
  echo $replay;
}else {
  echo "Sorry can't be able to understand you!";
}

 ?>
