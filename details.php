<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>


}<?php
include_once 'dbcon.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	# code...
$a = "SELECT * from blog_list where $id=id";
$b = mysqli_query($con,$a);

$c = mysqli_fetch_assoc($b);
?>
  <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $c['title']; ?></h2>
				    <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				    	<img class="img-fluid" src="admin/<?php echo $c['image'] ?>" alt="image"></a>
				        
				    </figure>
				    <p><?php echo $c['description']; ?> </p>
</div>
</div>
</article>
</div>
<?php include_once 'footer.php'; ?>