<?php
//connect to database class
require_once (dirname(__FILE__)).'/../controllers/UserController.php';

// keeping track of errors
$errors = array();

// check if button is clicked
if(isset($_POST["submit"])){
    // grab form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["password2"];

    // validate data

    // check if fields are empty
    if(empty($username)){array_push($errors, "name is required");}
    if(empty($email)){array_push($errors, "email is required");}
    if(empty($password)){array_push($errors, "password is required");}
    if(empty($confirm_password)){array_push($errors, "password 2 is required");}

    // check if fields are of appropriate length
    if(strlen($username) > 100){array_push($errors, "name must be under 100 characters");}
    if(strlen($email) > 100){array_push($errors, "email must be under 100 characters");}

    // check if passwords are the same
    if($password != $confirm_password){array_push($errors, "passwords need to be the same");}
    
    // validate email with regex
    $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // set error if not an email
    if(!preg_match($regex, $email)){array_push($errors, "enter a valid email");}
    
    // image validation
    $target_dir = "images/";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if image has been uploaded
    if(empty($_FILES["image"]["name"])){
        array_push($errors, "file cannot be empty");
    }else{
        // check if its an actual image
        $check  = getimagesize($_FILES["image"]["tmp_name"]);
        if($check == false){
            array_push($errors, "file is not an image");
        }
        // check if file already exists
        if(file_exists($target_file)){
            array_push($errors, "file already exists");
        }

        // limit file size to 5MB
        if($_FILES["image"]["size"] > 5000000){
            array_push($errors, "file is too large");
        }

        // limit file type
        if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
            array_push($erros, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }
    }

    // if form is fine
    if(count($errors) == 0){
        // upload image
        $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], '../'.$target_file);

        // check if uploaded successfully and then add new user
        // note we are storing the path to the image in the database
        if($upload_image){
            // encrypt password
            $password = md5($password);
            $register_user = register_new_user($username, $email, $password, $target_file);

            // check if user is registered
            if(!$register_user){
                echo "failed";
            }else{
                // redirect
                echo "success";
            }
        }else{
            echo "upload failed";
        }
    }else{
        session_start();
        // store errors inside session
        $_SESSION["errors"] = $errors;
        //print_r($errors);
        header("location: ../index.php");
    }
    
}