<?php 
    $sql = "SELECT * FROM videos";
    $res = mysqli_query($conn, $sql);

if (isset($_POST['submit']) && isset($_FILES['my_img'])) {
	include "connect.php";
    $video_name = $_FILES['my_img']['name'];
    $tmp_name = $_FILES['my_img']['tmp_name'];
    $error = $_FILES['my_img']['error'];

    if ($error === 0) {
    	$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

    	$video_ex_lc = strtolower($video_ex);

    	$allowed_exs = array("mp4", 'webm', 'avi', 'flv','png','jpg');

    	if (in_array($video_ex_lc, $allowed_exs)) {
    		
    		$new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
    		$video_upload_path = 'uploads/'.$new_video_name;
    		move_uploaded_file($tmp_name, $video_upload_path);

    		// Now let's Insert the video path into database
            $sql = "INSERT INTO videos_img(img_url) 
                   VALUES('$new_video_name')";
            mysqli_query($conn, $sql);
            echo 'Uploaded';
            // header("Location: view.php");
    	}else {
    		$em = "You can't upload files of this type";
    		header("Location: uploadvid.php?error=$em");
    	}
    }


}else{
	header("Location: uploadvid.php");
}

?>
