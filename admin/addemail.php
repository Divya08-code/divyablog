<?php

include "dbcon.php";

if(isset($_POST['subscribe']))
{
	echo $e=$_POST['email'];

	$q="INSERT INTO email(email)values('$e')";

	$s=mysqli_query($con,$q);
	if($s)
	{	
		echo "<script>alert('Thankyou for subscribing')</script>";
	}
	else
	{
		echo "<script>alert('try again')</script>";
	}
}
?>