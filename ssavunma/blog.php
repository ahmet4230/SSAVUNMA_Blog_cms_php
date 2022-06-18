
<?php include "inc/header.php"?>
<?php include "inc/navigation.php"?>

	<!--==========================
    INSIDE HERO SECTION Section
============================-->
	<section class="page-image page-image-blog md-padding">
		<h1 class="text-white text-center">SSAVUNMA</h1>
	</section>

	<!--==========================
    Contact Section
============================-->
	<section id="blog" class="md-padding">
		<div class="container">
			<div class="row">
				<main id="main" class="col-md-8">
					<div class="row">


					<?php

$sql_query = "SELECT * FROM posts";
$select_all_posts = mysqli_query($conn,$sql_query);

while($row = mysqli_fetch_assoc($select_all_posts)){
	$post_id = $row["post_id"];
	$post_author = $row["post_author"];
	$post_date  = $row["post_date"];
	$post_comment_number = $row["post_comment_number"];
	$post_title = strtoupper($row["post_title"]);
	$post_text = substr($row["post_text"],0,100);
	$post_image = $row["post_image"];



	?>
	
	<div class="col-md-6">
	<div class="blog">
		<div class="blog-img">
			<img src="img/<?php echo $post_image; ?>" class="img-fluid">
		</div>
		<div class="blog-content">
			<ul class="blog-meta">
				<li><i class="fas fa-users"></i><span class="writer"><?php echo $post_author; ?></span></li>
				<li><i class="fas fa-clock"></i><span class="writer"><?php echo $post_date; ?></span></li>
				<li><i class="fas fa-comments"></i><span class="writer"><?php echo $post_comment_number; ?></span></li>
			</ul>
			<h3><?php echo $post_title; ?></h3>
			<p><?php echo $post_text; ?></p>
			<a href="blog-single.php?look=<?php echo $post_id; ?>">Read More</a>
		</div>
	</div>
</div>


	<?php }	?>




					
						
		
					</div>
								

					<div class="row"></div>
				</main>
				
<?php include "inc/sidebar.php" ?>
				
				
				
			</div>

		</div>
	</section>

	<?php include "inc/footer.php" ?>