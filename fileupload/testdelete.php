<?php 
$server = 'localhost';
$db = 'newsletter';
$username = 'root';
$password = '';
$conn = mysqli_connect($server, $username, $password, $db);
$delete = $_POST['delete'];
	if(mysqli_connect_error())
	{
		echo "<p>OOppss..some error are occurring...kindly try again later...exiting...</p>";
		exit();
	}
?>
<html>
<head>
	<title>PHP and MySQLi Delete Record from Table Example</title>
</head>
<body>
<?php

    $q1 = "delete from soaringscene where id=$id";
    $r1 = $conn->query($q1);
    if($r1)
    {
        echo "Record with Id: <b>$id</b> is deleted successfully<br/>";
        $q2 = "select count(id) from soaringscene";
        $r2 = $conn->query($q2);
        if($r2)
        {
            $row2 = mysqli_fetch_row($r2);
            echo "Total Record Left = ". $row2[0] ."<br/>";
        }
        else 
        {
            echo "Error occurred in counting..exiting..<br/>";
            exit();
        }
   }
   else 
    {
       echo "Error occurred in deleting..exiting..<br/>";
       exit();
   }
}
?>
<form onsubmit="return confirm('Do you really want to delete this file?');" action="delete.php" method="post">
    <label>Entry number:</label>
    <br>
    <!--<textarea name='textareaone'></textarea>-->
    <input type="text" name='delete' value="Delete">
    <input type="submit" name="delbtn" value="delete">
</form>
</body>
</html>