<?php
  require __DIR__."/database_credentials.php";


  //Create Connection
  $conn = new mysqli(servername,username,password,dbname);

  if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    echo "Connection Failed.";
  }

  else {
    echo "Connection Successful";
  }

  $conn->close();

 ?>
