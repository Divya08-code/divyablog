<?php

include_once 'dbcon.php';
if(isset($_POST['submit'])){
	 echo $u=$_POST['username'];
	 echo $p=$_POST['password'];
	 echo $filename=$_FILES['image']['name'];
	 echo $tempname=$_FILES['image']['tmp_name'];
	  echo $d=mysqli_real_escape_string($con,$_POST['description']);

	 $z="upload/".$filename;
	 move_uploaded_file($tempname, $z);


	 $data="INSERT into admin(username,password, image ,description)values('$u','$p','$z','$d')";


	 $query=mysqli_query($con,$data);

	 if($query){
	 	echo "<script>alert('data saved')</script";
	 }

	 else{
	 	echo "<script>alert('data not saved')</script>";
	 }

}
?>