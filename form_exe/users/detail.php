<?php
require_once '../config/config.php';
$id=$_GET['id'];
$sql="SELECT * FROM users WHERE id='$id'";
$result = $con->query($sql) or die(mysqli_error($con));

if($result->num_rows >= 1){
   
    while($row =$result->fetch_assoc()){
        
        $id=$row['id'];
        
        $user_name=$row['user_name'];
        $email = $row['email'];
        $phone  = $row['phone'];

       
    }
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detail.css">
    <title>Document</title>
</head>
<body>
    
    <div class="body">
        <div class="wrapper">
        <div class="inner_body">
            <div class="row">
                 <label>User Name : <?php echo $user_name; ?></label>
            </div>
            <div class="row">
                 <label>Email : <?php echo  $email; ?></label>
            </div>
            <div class="row">
                <label>Phone : <?php echo  $phone; ?></label>
            </div>

            <div class="list">
                <label><a href="list.php">List</label>
            </div>
        </div>
        </div>
       
    </div>
    
</body>
</html>