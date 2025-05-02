<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$feed_name=$_POST['feed_name'];		
		$feedback=$_POST['feedback'];
		$feed_date=$_POST['feed_date'];

		$ins=mysqli_query($conn,"INSERT INTO feedback(feed_name,feedback,feed_date) VALUES('$feed_name','$feedback','$feed_date')");
		if ($ins)
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