<?php  include "header.php"; ?>

<?php include "sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">view blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<?php
include_once 'dbcon.php';

if(isset($_POST['update'])){

  echo $id=$_POST['id'];
  echo $t=$_POST['title'];
  echo $d=$_POST['description'];
  


  $update= "UPDATE blog_list set  title='$t',description='$d' where id='$id'";

  $result=mysqli_query($con,$update);
  if($result){
    header("location:viewblog.php");
    echo "<script>alert('data updated successfully')";

  }
  else{
    echo "<script>alert('data not update')</script";
  }


}
?>