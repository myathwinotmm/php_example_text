<?php
include("../config/config.php");
     $sql="SELECT * FROM users";
     $result = $con->query($sql) or die(mysqli_error($con));
  
     if($result->num_rows >= 1){
        
         while($row =$result->fetch_assoc()){
             
             $id=$row['id'];
             
             $user_name=$row['user_name'];
             $email = $row['email'];
             $phone  = $row['phone'];

             echo "<tr>";
			// echo "<td> <input type='checkbox' </td>";
		
			echo "<td>$id </td>";

			echo "<td>$user_name </td>";
			echo "<td> $email </td>";
			echo "<td>$phone </td>";
            echo "<td><a href=detail.php?id=$id> <input type='hidden' name='id' value='<?php echo $id; ?>' />
			<input type='button' name='View' id='".$row['id']."' style='margin-top:5px;'background-color:#00b300;'  value='View' /></a>
			
			</td>";
            echo "<td><a href='update.php?action=edit&id=$id' class='toggle edit' value='<?php echo $id; ?>' var='$id'><i class='far fa-edit'></i></a></td>";	
            echo "<td><a href='delete-process.php?action=delete&id=$id' class='toggle trash' value='<?php echo $id; ?>' var='$id'><i class='fas fa-trash'></i></a></td>";	
            echo"</tr>";
         }
     }
     mysqli_close($con);

?>