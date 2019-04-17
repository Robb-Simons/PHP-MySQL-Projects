<?php
  function showRecords(){  
    include 'dbconn.php'; 
    $query = "select * from soaringscene";
    $results = mysqli_query($conn, $query);
    echo "<table>";
    while ($row = mysqli_fetch_array($results)) {
        $filepath = 'http://localhost/fileupload/uploaded_files/'.$row[1];  
        echo "<tr><td>$row[0]</td><td><a href='$filepath'>$row[1]</a></td></tr>";
    }
    echo "</table>";
    mysqli_close($conn);
  }
  showRecords();
?>
<html>
  <body>
    <form action='procdelete.php' method='post'>
      <input type='text' name='delid'>
      <input name='delete' type='submit' value='Delete Record'>
    </form>
  </body>
</html> 