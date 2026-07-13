<?php
$error="";
$email="";
$password="";
// $checkpassword="";
include("dbconnect.php");



if($_SERVER["REQUEST_METHOD"]=="POST"){

    
     $email=mysqli_real_escape_string($conn,$_POST["email"]);
      $password=mysqli_real_escape_string($conn,$_POST["password"]);
      
       if($email==""||$password==""){
        $error="all field are required";
       echo $error;}
    //    elseif($password!=$checkpass){
    //     $error="paassword doesnt match.";
    //     echo $error;
    //    }
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
        $selectQuery="Select * from user where email='$email' and password='$password'";

        $result=mysqli_query($conn,$selectQuery);
        $user=mysqli_fetch_assoc($result);
        if($user){
            session_start();
            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['name'];
            $_SESSION['user_email']=$user['email'];
            // if($user['role']==0){
            //     header("location:admindashboard.php");
            // } 
            // else{
            header("location: dashboard.php");
            exit();
        }
        else{
            echo "Invalid credentials" ;
            echo "error:".mysqli_error($conn);
        }
        // page ko redirect krna
       }
}
//echo strlen($password);

