<?php
    
    if(isset($_GET["user_name"]))
    {

    $user_name=$_GET["user_name"];
  
    }

    else{
        $user_name="";
      
    }
// email 
    if(isset($_GET["email"]))
    {

    $email=$_GET["email"];
  
    }

    else{
        $email="";
      
    }

// password

if(isset($_GET["password"]))
{

$password=$_GET["password"];

}

else{
    $password="";
  
}

if(isset($_GET["phone"]))
{

$phone=$_GET["phone"];

}

else{
    $phone="";
  
}

?>

<?php
require_once '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Register Form 
    </title>
    <style>
       h4{
          float:right;
          color:red;  
        }
    </style>
</head>
<body>
    <div class="body">
        <div class="nav">
            <div class="inner_nav">
            <div class="row">
                <ul>
                    <li><a href="index.php">Register</a></li>
                    <li><a href="detail.php">Detail</a></li>
                    <li><a href="detail.php">List</a></li>
                </ul>
            </div>
        </div>
      <!--  cut -->
      <div class="inner_body">
            <form action="store.php" Method="POST" enctype="multipart/form-data">

                 <div class=form>
                        <h1>Register Form</h1>
                        <hr/>
                    <!-- ---   user name ---- -->
                        <div class=row>
                            <label>User Name</label>
                        
                            <h4>*<?php echo  $user_name; ?></h4>
                            <input type="text" name="user_name"  value="">
                        </div>
                    <!-- ---   email ---- -->    

                        <div class=row>
                            <label>Email</label>
                            <h4>*<?php echo  $email; ?></h4>
                            <input type="email" name="email" value="">
                        </div>
                
                    <!-- ---   password ---- -->    

                        <div class=row>
                            <label>Password</label>
                            <h4>*<?php echo  $password; ?></h4>
                            <input type="password" name="password" Value="">
                        </div>

                    <!-- ---   phone ---- -->    
                        <div class=row>
                            <label>Phone</label>
                            <h4>*<?php echo  $phone; ?></h4>
                            <input type="tel" name="phone" Value="">
                        </div>


                        <div class="row">
                            <input type="submit" name="submit" value="submit">
                            <input type="cancel" name="cancel" value="cancel">
                        </div>
                </div>
            </form>
                
        </div>
    </div>
</body>
</html>
