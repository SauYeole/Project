<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysqli_query($conn,"DELETE FROM expenditure WHERE exp_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:exp_list.php');
		}
		else
		{
			echo "Failed";
		}

?>