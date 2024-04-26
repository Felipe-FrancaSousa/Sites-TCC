<?php
	@include('../../connect.php');

	$id = 	$_POST['id'];

	if(mysqli_query($con, "DELETE FROM `tbl_feedback` WHERE id = $id;"))
	{
	}
	else
	{
		echo "foi o else";
	}
?>
