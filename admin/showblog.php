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
    include "dbcon.php";

    if (isset($_GET['id'])) {
    echo $id = $_GET['id'];

    $a = "SELECT * from blog_list where id=$id";
    $b = mysqli_query($con,$a);
    $c = mysqli_fetch_assoc($b);
    }


    ?>

   <h2>id: <?php echo $c['id']?></h2><br><br>
   <h2>Title: <?php echo $c['title']?></h2><br><br>
   <h2>Description: <?php echo $c['description']?></h2><br><br>
   <h2>image:<img src="<?php echo $c['image']?>" style="height: 100px; width: 100px;"></h2>   












<?php include "footer.php"; ?>