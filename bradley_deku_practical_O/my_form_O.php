<!-- Bradley Deku -->


<?php
// Start the session
session_start();
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

        <div >
            <input type="text" placeholder="Enter Search Item"  name="search1" value="<?= $search1Value ?>">

        </div>
        <button type="submit" value="search">Submit</button>
    </form>
    <br>
    <br>
    <br>

    <h2>BYTESearch 2</h2>

    <form method="POST">
        <div >
            <input type="text" placeholder="Add Item" id ="addEntry" >
        </div>
        <button type="submit" value="search" id = "addBtn" onClick="addToDatabase()">Add</button>
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


<script type="text/javascript">
  function addToDatabase(){
    const addVal = document.getElementById("addEntry");
    alert(addVal.value);

    $.ajax({
      type: "POST",
      url: "results_page.php",
      data: {
        addEntry: addVal
      },
      cache: false,
      success: function(data) {
        alert(data);
      },
      error: function(xhr, status, error) {
        console.error(xhr);
                    }

    });

  }
</script>

  </body>
</html>
