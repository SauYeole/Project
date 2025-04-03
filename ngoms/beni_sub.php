<?php 

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$don_name=$_POST['don_name'];
		$don_addr=$_POST['don_addr'];
		$don_mob=$_POST['don_mob'];
		$don_email=$_POST['don_email'];
		$don_dob=$_POST['don_dob'];
		$dona_type=$_POST['dona_type'];
		$dona_amt=$_POST['dona_amt'];
		$dona_date=$_POST['dona_date'];

		$ins=mysql_query("INSERT INTO add_beni(don_name,don_addr,don_mob,don_email,don_dob,dona_type,dona_amt,dona_date) VALUES('$don_name','$don_addr','$don_mob','$don_email','$don_dob','$dona_type','$dona_amt','$dona_date')");

		if ($ins)
		{
			header('location:beni_list.php');
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