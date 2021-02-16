<?php

include("../config/config.php");

if(isset($_POST["submit"])){
        $user_name=$_POST["user_name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $phone=$_POST["phone"];

        $error_message="";
        $iserror=false;
        if(empty($_POST['user_name'])){
          $error.="user_name= Enter User name &";
          $iserror=true;
        }
        else{
          echo "$user_name <br>";
        }

        if(empty($_POST['email'])){
          $error.="email= Enter Email &";
          $iserror=true;
        }
        else{
          echo "$email <br>";
      }

      if(empty($_POST['password'])){
        $error.="password= Enter Password &";
          $iserror=true;
      }
      else{
        echo "$password <br>";
      }

      if(empty($_POST['phone'])){
        $error.="phone= Enter Phone";
          $iserror=true;
      }
      else{
        echo "$phone <br>";
      }
      if(isset($iserror)){
        header("location: index.php?$error");
      }  
    }
  if(empty($iserror)){
    $query = "INSERT INTO users(user_name,email,password,phone,create_up ,modified_up)VALUES('$user_name','$email','$password','$phone',NOW(),NOW())";
    mysqli_query($con, $query);

  $sql="SELECT * FROM users WHERE id=(SELECT max(id) FROM users)";

   $result = $con->query($sql) or die(mysqli_error($con));
   if($result->num_rows >= 1){
  
     while($row =$result->fetch_assoc()){
         
         $id=$row['id'];

        
     }
 }
    header("location: detail.php?id=$id");
    
  }
     
?>