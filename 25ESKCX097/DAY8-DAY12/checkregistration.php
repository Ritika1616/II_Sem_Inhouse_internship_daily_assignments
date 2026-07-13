<?php
$error="";
$name="";
$email="";
$password="";
$checkpass="";
$skills="";
include("dbconnect.php");



if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=mysqli_real_escape_string($conn,$_POST["name"]);
     $email=mysqli_real_escape_string($conn,$_POST["email"]);
      $password=mysqli_real_escape_string($conn,$_POST["password"]);
       $checkpass=mysqli_real_escape_string($conn,$_POST["currentpassword"]);
       if(isset($_POST["skills"])){
          $skills=implode(",",$_POST["skills"]);
        }
        else{
          $skills="";
        }
       
       if($name==""||$email==""||$password==""||$checkpass==""){
        $error="all field are required";
       echo $error;}
       elseif($password!=$checkpass){
        $error="paassword doesnt match.";
        echo $error;
       }
       else if(empty($password)){
    echo "enter password";
      }
      else if(strlen($password)<8){
    echo "enter atleast 8 character ";
}

      else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "invalid email";
     }
       else{
        
        $insertQuery="Insert into user(name,email,password,skills)
        values('$name','$email','$password','$skills')";

        $result=mysqli_query($conn,$insertQuery);
        if($result){
            header("location: success.php");
            exit();
        }
        else{
            echo "error occurred while storing data" ;
            echo "error:".mysqli_error($conn);
        }
        // page ko redirect krna
       }
}
//echo strlen($password);

