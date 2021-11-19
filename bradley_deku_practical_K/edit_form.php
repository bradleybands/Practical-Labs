<?php
// Start the session
session_start();
require __DIR__."/database_credentials.php";


//Create Connection
$conn = new mysqli(servername,username,password,dbname);

if($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
  echo "Connection Failed.";
}

else {
  echo "";
}

if (isset($_POST['Update'])) {

  $edit_term = $_POST['edit']; //input
  $new_term = $_POST['update_term'];

  $edit = mysqli_query($conn, "UPDATE `practical_lab_table` SET `Search_term`='$new_term' where `Search_term`='$edit_term' ");

  if ($edit) {
    mysqli_close($conn);
    header("location:my_form_prac_A.php");
    exit;
  } else {
    echo "Error updating record: " . $conn->error;
  }
  // Closing the connection.

}

$conn->close();

?>


<!DOCTYPE html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h3>Update Data</h3>

  <form method="POST" action="my_form_prac_A.php">


     <label for ="update2">Change record to :</label>
    <input type="text" id="update_term" name="update_term" >
    <br><br>
    <input type="submit" name="Update" value="Update">
  </form>
