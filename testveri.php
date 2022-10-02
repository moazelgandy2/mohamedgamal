<?php
                                session_start();
                                if (!isset($_SESSION['SESSION_EMAIL'])) {
                                    header("Location: ../live/signup/index.php");
                                    die();
                                }

                                include 'connect.php';

                                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $code = mysqli_query($conn, "SELECT * FROM users WHERE code='{$_SESSION['SESSION_EMAIL']}'");   
                                if(mysqli_num_rows($code)>0){
                                    $qu = mysqli_query($conn, "UPDATE users SET verfication=0 WHERE verfication='{$_GET['verification']}'");
                                }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code=''")) > 0) {
                echo "Verified";                            
            }
            else{
                echo  "Not Verified ";
                die();
            }
        
    ?>
    <h1>Content</h1>
</body>
</html>