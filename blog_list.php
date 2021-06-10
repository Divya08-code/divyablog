  <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">




			    
			    <div class="intro" style="font-size: 20px;"><b>Welcome to my blog. Subscribe and get my latest blog post in your inbox.</b></div>
			    <form class="signup-form form-inline justify-content-center pt-3" method="post" action="addemail.php">
                    <div class="form-group" >
                        <label class="sr-only" for="email">Your email</label>
                        <input type="email"  name="email" class="form-control mr-md-1 email" placeholder="Enter email">
                    </div>
                    <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
                </form>
		    </div><!--//container-->
		  
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
		    	<?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from blog_list ORDER by id DESC";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {  
                     # code...
                  
                    ?>
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="admin/<?php echo $result['image']; ?>" >
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html"><?php echo $result['title']; ?></a></h3>
						    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro"><?php echo substr( $result['description'],0,300); ?></div>
						    <a class="more-link" href="details.php?id=<?php echo $result['id']?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			    <!--//item-->
				<?php
				}
				?>			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>