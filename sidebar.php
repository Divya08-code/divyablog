

<?php
include_once 'dbcon.php';
$a = "SELECT * from admin";
$b = mysqli_query($con,$a);     
$c = mysqli_fetch_array($b);
?>


<header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html"><?php echo $c['username']?></a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/div.jpg" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Divya Jain.Currently I am pursuing btech from ITM GOI, Gwalior.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/divya-jain-12b469203/"><i class="fab fa-linkedin"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100026623388069"><i class="fab fa-facebook"></i></i></a></li>
			            <li class="list-inline-item"><a href="https://www.instagram.com/divyajain910/"><i class="fab fa-instagram"></i></i></a></li>
			           
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				
				
			</div>
		</nav>
    </header>