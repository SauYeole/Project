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

		$ins=mysqli_query($conn,"INSERT INTO add_donar(don_name,don_addr,don_mob,don_email,don_dob,dona_type,dona_amt,dona_date) VALUES('$don_name','$don_addr','$don_mob','$don_email','$don_dob','$dona_type','$dona_amt','$dona_date')");

		if ($ins)
		{
			header('location:don_list.php');
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