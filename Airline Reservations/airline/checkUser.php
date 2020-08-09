<?php

include_once 'dbconnect.php';

$user = $_POST['user'];

$result=mysqli_query($conn,"SELECT username FROM passanger WHERE username = '$user'");

	 while($row = mysqli_fetch_array($result)) {
		if( $row['user']) {
			echo 1;
		}
		else {
			echo 0;
		}
	 }
mysqli_close($conn);
?>