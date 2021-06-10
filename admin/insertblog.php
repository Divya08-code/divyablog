<?php
session_start();

include_once 'dbcon.php';
if(isset($_POST['submit'])){
	 echo $t=$_POST['title'];
	 echo $d=mysqli_real_escape_string($con,$_POST['description']);
	 echo $filename=$_FILES['image']['name'];
	 echo $tempname=$_FILES['image']['tmp_name'];

	 $z="upload/".$filename;
	 move_uploaded_file($tempname, $z);


	 $data="INSERT into blog_list(title,description,image)values('$t','$d','$z')";


	 $query=mysqli_query($con,$data);
	 if($query){
	 	$_SESSION['success']="add blog successfully";
	 	header('location:addblog.php');
	 }

	 else{
	 	$_SESSION['error']="not inserted";
	 	header('location:addblog.php');
	 }

	 // if($query){
	 // 	echo "<script>alert('data saved')</script";
	 // }

	 // else{
	 // 	echo "<script>alert('data not saved')</script>";
	 // }

}