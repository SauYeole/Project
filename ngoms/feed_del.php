<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysql_query("DELETE FROM feedback WHERE feed_id=$id");

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
