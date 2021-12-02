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


$addVal = $_POST['addEntry'];

$sql = "INSERT INTO practical_lab_table (Search_term) VALUES('$addVal')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else
{
    echo "failed";
}
?>
