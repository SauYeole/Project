<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysql_query("DELETE FROM add_donar WHERE don_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:don_list.php');
		}
		else
		{
			echo "Failed";
		}

?>