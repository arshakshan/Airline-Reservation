<?php
session_start();
include_once 'dbconnect2.php';

if(!isset($_SESSION['user'])){
    header("Location: customersignin.html");
}else{
    $user = $_SESSION['user'];	
    $bookid = $_POST['bookid'];

	$delete = "DELETE FROM book WHERE ID = '$bookid'";
	if(mysqli_query($conn,$delete)){
		 header("Location: homepage.html");
	}else{
		echo "Error";
	}

}


?>