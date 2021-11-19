<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Results</title>
  </head>

  <body>

    <h2>Search Box 2 Results</h2>

    <?php

    require __DIR__."/database_credentials.php";


    //Create Connection
    $conn = new mysqli(servername,username,password,dbname);

    $formInput2 = $_POST['search2'];
    $sql = "INSERT INTO practical_lab_table (Search_term) VALUES ('$formInput2')";


      if($conn ->query($sql) === TRUE) {

        echo "New Record Created Successfully:  ";
        echo $formInput2;
      }

      else {
        echo "Error: ".$sql. "<br>".$conn->error;
      }
    ?>

  </body>
</html>
