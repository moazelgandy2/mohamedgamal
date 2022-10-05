<?php
                                session_start();
                
                                if (!isset($_SESSION['SESSION_EMAIL'])) {
                                    header("Location: ../signup/index.php");
                                    die();
                                }

                                include 'connect.php';
                                $tim = date("H:i", strtotime("+0 HOURS"));
                                $date = date("Y-m-d", strtotime("+0 HOURS"));
                                // echo "Error: " . $sqll . "<br>" . $conn->error;
                                mysqli_query($conn,"UPDATE timee SET time = NOW()  WHERE student_name='{$_SESSION['SESSION_EMAIL']}'");
                                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $queryyy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $ti = mysqli_query($conn , "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'")


                                // if (mysqli_num_rows($query) > 0) {
                                //     $row = mysqli_fetch_assoc($query);

                                //     echo "Welcome " . $row['name'] . " <a href='../signup/logout.php'>Logout</a>";
                                // }
?>

<?php




                                $queryy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $code = mysqli_query($conn, "SELECT * FROM users WHERE code='{$_SESSION['SESSION_EMAIL']}'");   
                                
                            

?>  

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework.css"/>
    <link rel="stylesheet" href="../profile/css/master.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/logo3.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;5O0&display=swap" rel="stylesheet"/>
    <title>Fourth Dimention</title>
</head>
<body>
    <div class="page d-flex" >
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">Admin Dashboard</h3>

            <div class="container">
                <ul>
                <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="dashboard.php">
                        <i class="fa-solid fa-chart-bar fa-fw"></i>
                        
                        <span class="hide-mobile">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="upload.php">
                        <i class="fa-solid fa-upload"></i>
                        <span>Upload</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        <span>Activating</span>
                        </a>
                    </li> -->
                    <li id="ex">
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="explain.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span>Explanations</span>
                        </a>
                    </li>


                    <li id="ex2">
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="lectures.php">
                        <i class="fa-solid fa-book-open fa-fw"></i>                    
                        <span>Lectures</span>
                        </a>

                    <li id="ex3">
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="question.php">
                        <i class="fa-solid fa-question fa-fw"></i>
                        
                        <span>Question</span>
                        </a>
                    </li>
                    <!-- <li id="ad">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="admin.php">
                        <i class="fa-solid fa-gears"></i>
                        <span>Admin</span>
                        </a>
                    </li> -->
                </ul>

            </div>

        </div>
        <div class="content w-full" style="width: 100%;">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex" style="padding: 15px; background-color:white; display:flex; justify-content: space-between; align-items:center;">
                <div class="search p-relative" style="position: relative;">
                    <input class="p-10" type="search" placeholder="Search for lectures?">
                </div>
                <div class="icons d-flex align-center">

                    <span class="notification p-relative">
                    <i class="fa-solid fa-bell fa-lg"></i>
                    </span>
                    <img src="imgs/avatar.png" alt="">
                </div>

            </div>
            <!-- End Head -->
            <h1 class="p-relative">Admin</h1>
            <div class="wrapper d-grid gap-20">
                <!-- Draft -->
                <div class="quick-draft p-20 bg-white rad-10">
                    <?php
			            require 'connect.php';
			
			            $query = mysqli_query($conn, "SELECT * FROM `videos`") or die(mysqli_error());
			            while($fetch = mysqli_fetch_array($query)){
		            ?>
			        <div class="" >
                        <video width="400" height="300" src="<?php echo $fetch['video']?>" poster="<?php echo $fetch['video_img']?>"  controls  type="video/mp4">></video>
				        <center><h5><?php echo $fetch['video_name']?></h5></center>
                        
				        <br />
			        </div>
		            <?php		
			            }
		            ?>
                </div>
                <!-- End Draft -->

            </div>
        </div>
    </div>
</body>
</html>