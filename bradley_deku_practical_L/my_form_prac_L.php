<!-- Bradley Deku -->


<?php
// Start the session
session_start();
include('database_credentials.php')
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Search Forms</title>
</head>

<body>
  <form id="form_L" method="POST">
    <h1>Form Regex</h1>
    <br>

    <h2>BYTESearch 1</h2>

    <?php
    $search1Value = (isset($_POST['search1']))
     ? htmlentities($_POST['search1']) : '';
     $_SESSION['search']=$search1Value;
   ?>

    <div>
      <input type="text" placeholder="Enter Search Item" id="search1" name="search1" value="<?php $search1Value ?>" pattern="[0-9]+">
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
      if(isset($_POST['search1'])){
        $search1Result = $_POST['search1'];
        echo $search1Result;
      }
    ?>





</body>
</html>
