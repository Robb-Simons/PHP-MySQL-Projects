<?php 
    // #1: Show current table records
    include 'dbconn.php';
    $query = "select * from soaringscene";
    $results = mysqli_query($conn, $query);
    echo "<html><body><table>";
    while ($row = mysqli_fetch_array($results)) {
        $filepath = 'http://localhost/fileupload/uploaded_files/'.$row[1];  
        echo "<tr><td><a href='$filepath'>$row[1]</a></td></tr>";
    }
    echo "</table></body></html>";


?>