<?php
    include('connect.php');
    $sql = "SELECT * FROM videos";
    $res = mysqli_query($conn, $sql);
    echo "<h1>My Videos</h1>";
    while($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        $name = $row['video_url'];

        echo "<h4><a href='watch.php?id=$id'>" .$name. $img. "</a></h4><br/>";
    }
?>