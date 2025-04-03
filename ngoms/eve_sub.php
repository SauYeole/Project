<?php

	include 'include/conn.php';

		if (isset($_POST['save']))
		{
			$event_name=$_POST['event_name'];
			$evnt_desc=$_POST['evnt_desc'];
			$event_coord=$_POST['event_coord'];
			$coord_mob=$_POST['coord_mob'];
			$evnt_addre=$_POST['evnt_addre'];
			$evnt_fund=$_POST['evnt_fund'];
			$evnt_day=$_POST['evnt_day'];
			$evnt_mnth=$_POST['evnt_mnth'];
			$evnt_yr=$_POST['evnt_yr'];


			$ins=mysql_query("INSERT INTO add_eve(event_name,evnt_desc,event_coord,coord_mob,evnt_addre,evnt_fund,evnt_day,evnt_mnth,evnt_yr) VALUES('$event_name','$evnt_desc','$event_coord','$coord_mob','$evnt_addre','$evnt_fund','$evnt_day','$evnt_mnth','$evnt_yr')");

			if ($ins)
			{
				echo "Success";
				header('location:eve_list.php');
			}
			else
			{
				echo "Failed";
			}
		}
		else
		{
			echo "Not Clicked";
		}
	
?>