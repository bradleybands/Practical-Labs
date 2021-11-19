<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Upload Results</title>
  </head>

  <body>

    <h2>Image Upload Results</h2>

    <?php

    require __DIR__."/database_credentials.php";


    //Create Connection
    $conn = new mysqli(servername,username,password,dbname);

    $image_input = $_POST[''];
    $sql = "INSERT INTO practical_upload_table (User_image) VALUES ('')";


      if($conn ->query($sql) === TRUE) {

        echo "Image Uploaded Successfully:  ";

      }

      else {
        echo "Error: ".$sql. "<br>".$conn->error;
      }
    ?>

  </body>
</html>
