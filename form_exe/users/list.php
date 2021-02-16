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
    <title>User List</title>
</head>
<body>
    <div class="body">
        <div class="inner_body">
            <div class="user_list">
                <div class="row">
                <h1>User List</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <?php include_once 'record.php' ?>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>