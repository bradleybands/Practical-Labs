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


$id = $_POST['Lab_id']; // get id through query string

$del = mysqli_query($conn,"DELETE from 'practical_lab_table' where 'Lab_id' = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:my_form.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
