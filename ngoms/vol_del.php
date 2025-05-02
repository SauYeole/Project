<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysqli_query($conn,"DELETE FROM add_vol WHERE vol_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:vol_list.php');
		}
		else
		{
			echo "Failed";
		}

?>