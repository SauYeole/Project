<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysqli_query($conn,"DELETE FROM feedback WHERE feed_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:feed_list.php');
		}
		else
		{
			echo "Failed";
		}


?>
