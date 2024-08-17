<?php
require "includes/connect.php";

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$blogsres = $conn->query("SELECT * FROM blog b JOIN category c ON b.category_id=c.category_id WHERE b.blog_status=1 AND b.category_id=$id ORDER BY b.blog_views");

	$catres = $conn->query("SELECT * FROM category WHERE category_id=$id");
	$catrow = $catres->fetch_assoc();

	$title = $catrow["category_name"];
}else{
	$blogsres = $conn->query("SELECT * FROM blog b JOIN category c ON b.category_id=c.category_id WHERE b.blog_status=1 ORDER BY b.blog_views");

	$title = "Top Posts";
}


$catsres = $conn->query("SELECT * FROM category WHERE cat_status=1 AND category_id<>$id LIMIT 5");
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title><?php echo $title;?> | Money Smart Kenya</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ganiam Tech">
	<meta name="description" content="">

	   <!-- Head Content -->
	   <?php include 'includes/head-content.php'; ?>
</head>

<body>

<!-- =======================
Header START -->
<?php include 'includes/navbar.php'; ?>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-300 text-center" style="background-image:url(uploads/<?php echo $catrow["cat_image"];?>); background-position: center left; background-size: cover;">
					<!-- Card Image overlay -->
					<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
						<div class="w-100 my-auto">
							<div class="text-white mb-3">Browsing category:</div>
							<h1 class="text-white h2">
								<span class="badge text-bg-warning mb-2">
									<i class="fas fa-circle me-2 small fw-bold"></i><?php echo $catrow["category_name"];?></span>
							</h1>
							<div class="text-center position-relative">
								<span class="badge text-bg-info fs-6"><?php echo $blogsres->num_rows; ?> posts</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container-fluid" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<div class="row gy-4">


				<?php while($blogsrow = $blogsres->fetch_assoc()){?>
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="uploads/<?php echo $blogsrow['blog_image'];?>" alt="">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.php?id=<?php echo $blogsrow['blog_id'];?>&<?php echo $blogsrow['blog_slag'];?>" class="btn-link text-reset fw-bold"><?php echo $blogsrow['blog_title'];?></a></h4>
								<p class="card-text"><?php echo $blogsrow['blog_description'];?></p>
								<!-- Card info -->
								
							</div>
						</div>
					</div>
					<!-- Card item END -->
					 <?php } ?>
					
				</div>
			</div>
			<!-- Main Post END -->

			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky data-margin-top="80" data-sticky-for="767">
					<!-- Categories -->
					<div class="row g-2">
						<h5>Other Categories</h5>
						<?php while($catsrow = $catsres->fetch_assoc()){?>
						<div class="d-flex justify-content-between align-items-center bg-warning bg-opacity-15 rounded p-2 position-relative">
							<h6 class="m-0 text-primary"><?php echo $catsrow['category_name'];?></h6>
							<a href="category.php?id=<?php echo $catsrow['category_id'];?>&<?php echo $catsrow['category_slag'];?>" class="badge bg-warning text-dark stretched-link"></a>
						</div>
						<?php } ?>

					</div>
					<!-- ADV widget START -->
					<div class="col-12 col-sm-6 col-lg-12 my-4 d-none">
						<a href="#" class="d-block card-img-flash">
							<img src="assets/images/adv.png" alt="">
						</a>
						<div class="smaller text-end mt-2 d-none">ads via <a href="#" class="text-body-secondary"><u>Bootstrap</u></a></div>
					</div>
					<!-- ADV widget END -->
				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->



</main>
<!-- **************** MAIN CONTENT END **************** -->



</body>
  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'; ?>
</html>