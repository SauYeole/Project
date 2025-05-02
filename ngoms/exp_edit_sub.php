<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$exp_id=$_POST['exp_id'];
		$exp_for=$_POST['exp_for'];
		$exp_desc=$_POST['exp_desc'];
		$exp_by=$_POST['exp_by'];
		$exp_amt=$_POST['exp_amt'];
		$exp_date=$_POST['exp_date'];

		$upd=mysqli_query($conn,"UPDATE expenditure SET exp_for='$exp_for',exp_desc='$exp_desc',exp_by='$exp_by',exp_amt='$exp_amt',exp_date='$exp_date' WHERE exp_id='$exp_id'");

		if ($upd)
		{
			header('location:exp_list.php');
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