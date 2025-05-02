<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$exp_for=$_POST['exp_for'];
		$exp_desc=$_POST['exp_desc'];
		$exp_by=$_POST['exp_by'];
		$exp_amt=$_POST['exp_amt'];
		$exp_date=$_POST['exp_date'];

		$ins=mysqli_query($conn,"INSERT INTO expenditure(exp_for,exp_desc,exp_by,exp_amt,exp_date) VALUES('$exp_for','$exp_desc','$exp_by','$exp_amt','$exp_date')");

		if ($ins)
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