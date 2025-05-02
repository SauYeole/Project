<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$don_id=$_POST['don_id'];
		$don_name=$_POST['don_name'];
		$don_addr=$_POST['don_addr'];
		$don_mob=$_POST['don_mob'];
		$don_email=$_POST['don_email'];
		$don_dob=$_POST['don_dob'];
		$dona_type=$_POST['dona_type'];
		$dona_amt=$_POST['dona_amt'];
		$dona_date=$_POST['dona_date'];

		$upd=mysqli_query($conn,"UPDATE add_donar SET don_name='$don_name',don_addr='$don_addr',don_mob='$don_mob',don_email='$don_email',don_dob='$don_dob',dona_type='$dona_type',dona_amt='$dona_amt',dona_date='$dona_date' WHERE don_id='$don_id'");

		if ($upd)
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
		echo "not clicked";
	}

?>