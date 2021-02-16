
<?php
//getting id from url
require_once '../config/config.php';
$id = $_GET['id'];
 
//selecting data associated with this particular id
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($con, $query);
if ($result->num_rows == 1) {
while($row = $result->fetch_assoc()){
{
    $user_name = $row['user_name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['password'];
}
}
}
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
            <form action="edit.php" Method="POST" enctype="multipart/form-data">

                 <div class=form>
                        <h1>Register Form</h1>
                        <hr/>
                    <!-- ---   user name ---- -->
                        <div class=row>
                            <label>User Name</label>
                        
                           
                            <input type="text" name="user_name"  value="<?php echo  $user_name; ?>">
                        </div>
                    <!-- ---   email ---- -->    

                        <div class=row>
                            <label>Email</label>
                         
                            <input type="email" name="email" value="<?php echo $email; ?>">
                        </div>
                
                    <!-- ---   password ---- -->    

                        <div class=row>
                            <label>Password</label>
                            <input type="password" name="password" Value="<?php echo  $email; ?>">
                        </div>

                    <!-- ---   phone ---- -->    
                        <div class=row>
                            <label>Phone</label>
                            <input type="tel" name="phone" Value="<?php echo  $phone; ?>">
                        </div>


                        <div class="row">
                            <input type="submit" name="update" value="update">
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                            <input type="cancel" name="cancel" value="cancel">
                        </div>
                </div>
            </form>
                
        </div>
    </div>
</body>
</html>
