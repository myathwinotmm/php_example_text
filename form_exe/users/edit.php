<?php
require_once '../config/config.php';

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];      
    
    // checking empty fields
    if(empty( $user_name) || empty( $email) || empty( $password)|| empty( $phone)) {            
        if(empty( $user_name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty( $password)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }  
        if(empty( $phone)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }      
    } else {    
        //updating the table
        $query = "UPDATE users SET  user_name = '$user_name', password = '$password', email = '$email', phone = '$phone' WHERE id='$id' ";
        $result = mysqli_query($con, $query);
        //redirectig to the display page. In our case, it is index.php
        header("Location: list.php");
    }
}
?>