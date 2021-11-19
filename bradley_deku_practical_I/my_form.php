<!-- Bradley Deku -->


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
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Search Forms</title>
</head>

<body>
  <form method="POST">
    <h2>BYTESearch 1</h2>

    <?php
    $search1Value = (isset($_POST['search1']))
     ? htmlentities($_POST['search1']) : '';
     $_SESSION['search']=$search1Value;
   ?>

    <div>
      <input type="text" placeholder="Enter Search Item" name="search1" value="<?= $search1Value ?>">

    </div>
    <button type="submit" value="search">Submit</button>
  </form>
  <br>
  <br>
  <br>

  <h2>BYTESearch 2</h2>

  <form method="POST">
    <div>
      <input type="text" placeholder="Enter Search Item" name="search2">
    </div>
    <button type="submit" value="search">Submit</button>
  </form>

  <br>
  <br>
  <br>

  <h4>Search Results: </h4>


  <?php

    if(isset($_POST['search1']))
    {

        $user_search = $_POST['search1'];

        $sql = "SELECT Search_term FROM practical_lab_table where Search_term='$user_search' " ;
        $searchResult = $conn->query($sql);

        if ($searchResult->num_rows > 0)
        {
          // Fetching Record
          while($row = $searchResult->fetch_assoc())
          {
            echo  " Search_term " . $row["Search_term"].  "<br>";

          }
        } else
          {
            echo "0 search results found";
          }
    }


    ?>


</body>

</html>
