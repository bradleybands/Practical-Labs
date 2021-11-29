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


  <h2>Image Uploads</h2>


  <form action="my_form_N.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Upload Image</label>
        <input type="file" name="image">
    </div>
    <button type="submit" name="submitFile" value="submitFile">Submit</button>
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




    <?php
    if(isset($_POST['submitFile']))
    {
      $user_image = $_FILES['image'] ['name'];
      $tempname = $_FILES['image'] ['tmp_name'];

      move_uploaded_file($tempname, "../bradley_deku_practical_N/images/$user_image");

      $uquery = "INSERT INTO practical_upload_table (User_image) VALUES ('$user_image')";
      $urun = mysqli_query($conn, $uquery);




  if ($urun  == true)
  {
    ?>
    <script>
      alert("Image added successfully !");
      window.open('my_form_N.php', '_self');
    </script>
<?php
  }
  else
  {
    echo  mysqli_error($conn);
  }
}


      ?>
      <h4>Images: </h4>
      <?php

      $img_query = "SELECT User_image FROM practical_upload_table";
      $img_run = mysqli_query($conn, $img_query);

      if ($img_run->num_rows > 0)
      {
        // Fetching Record
        while($row = $img_run->fetch_assoc())
        {
          ?>
          <img src="../bradley_deku_practical_N/images/<?php echo $row["User_image"]; ?>" width="200" alt="">
          <br>
          <?php

        }
      } else
        {
          echo "0 images found";

        }

       ?>


</body>

</html>
