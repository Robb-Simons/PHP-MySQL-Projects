<?php
    $delid = $_POST['delid'];
    $delrecord = $_POST['delete'];
    if($delid && $delrecord){
        include 'dbconn.php'; 
        $query = "delete from soaringscene where id = $delid";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        echo "Record deleted!";
    }
    else{
        echo "Record NOT deleted. Please enter ID number.<br>";
    }
    echo "<a href='delete.php'>ShowNewsletters</a>";
?>