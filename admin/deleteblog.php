<?php
include_once 'dbcon.php';
$id=$_GET['id'];

$del="DELETE from blog_list where id=$id";
mysqli_query($con,$del);

header("location:viewblog.php");
?>
