<?php

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


// keeping track of errors
$errors = array();

// check if button is clicked
if(isset($_POST["submit"])){
    // grab form data
    $search1 = $_POST["search1"];

    // validate data

    // check if fields are empty
    if(empty($search1)){array_push($errors, "search 1 is required");}


    // validate email with regex
    $regex = "/^\d+$/";
    // set error if input is not only numbers
    if(!preg_match($regex, $search1)){array_push($errors, "search should contain only numbers");}


    // if form is fine
    if(count($errors) == 0){

        $search1Result = $_POST['search1'];
        echo $search1Result;

      }else{
        session_start();
        // store errors inside session
        $_SESSION["errors"] = $errors;
        //print_r($errors);
        header("location: ../my_form_prac_A.php");
    }
  }

?>
