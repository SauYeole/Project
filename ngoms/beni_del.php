<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysql_query("DELETE FROM add_beni WHERE don_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:beni_list.php');
		}
		else
		{
			echo "Failed";
		}

?>