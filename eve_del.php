<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysqli_query($conn,"DELETE FROM add_eve WHERE eve_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:eve_list.php');
		}
		else
		{
			echo "Failed";
		}

?>