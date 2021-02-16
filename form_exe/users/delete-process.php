<?php
include("../config/config.php");
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
  
} else {
    echo "Error deleting record: " . mysqli_error($con);
 
}
header("Location: list.php");
mysqli_close($con);
?>