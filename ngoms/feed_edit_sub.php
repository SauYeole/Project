<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$feed_id=$_POST['feed_id'];
		$feed_name=$_POST['feed_name'];		
		$feedback=$_POST['feedback'];
		$feed_date=$_POST['feed_date'];

		$upd=mysql_query("UPDATE feedback SET feed_name='$feed_name',feedback='$feedback',feed_date='$feed_date' WHERE feed_id='$feed_id'");
		if ($upd)
		{
			header('location:feed_list.php');
		}
		else
		{
			echo "failed";
		}
	}
	else
	{
		echo " Not Clicked";
	}

?>