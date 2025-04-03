<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysql_query("DELETE FROM add_vol WHERE vol_id=$id");

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