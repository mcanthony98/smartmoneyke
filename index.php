<?php
require "includes/connect.php";


$swipblogsres = $conn->query("SELECT * FROM blog b JOIN category c ON b.category_id=c.category_id WHERE b.blog_status=1 ORDER BY b.blog_views LIMIT 3");
$catsres = $conn->query("SELECT * FROM category WHERE cat_status=1 LIMIT 5");

$blogsres = $conn->query("SELECT * FROM blog b JOIN category c ON b.category_id=c.category_id WHERE b.blog_status=1 ORDER BY b.blog_views LIMIT 12");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 06:05:58 GMT -->
<head>
	<title>Money Smart Kenya</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ganiam Tech">
	<meta name="description" content="Guide to Smart Finances">

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
Main hero START -->
<section class="pt-0 card-grid">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
					<div class="tiny-slider-inner"
					data-autoplay="true"
					data-hoverpause="true"
					data-gutter="0"
					data-arrow="true"
					data-dots="false"
					data-items="1">

					<?php while($swipblogsrow = $swipblogsres->fetch_assoc()){?>
						<!-- Slide 1 -->
						<div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url(uploads/<?php echo $swipblogsrow['blog_image'];?>); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
		          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5"> 
		            <div class="w-100 mt-auto">
			            <div class="col-md-10 col-lg-7">
			            	<!-- Card category -->
			            	<a href="category.php?id=<?php echo $swipblogsrow['category_id'];?>&<?php echo $swipblogsrow['category_slag'];?>" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $swipblogsrow['category_name'];?></a>
			            	<!-- Card title -->
			              <h2 class="text-white display-5"><a href="post-single.php?id=<?php echo $swipblogsrow['blog_id'];?>&<?php echo $swipblogsrow['blog_slag'];?>" class="btn-link text-reset fw-normal"><?php echo $swipblogsrow['blog_title'];?></a></h2>
			              <p class="text-white"><?php echo $swipblogsrow['blog_description'];?></p>
			              <!-- Card info -->
										
			            </div>
		            </div>
		          </div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main hero END -->


<!-- =======================
Trending topics START -->
<section class="p-0">
	<div class="container">
		<div class="row g-0">
			<div class="col-12 bg-light p-2 p-sm-4 rounded-3">
				<!-- Title -->
				<div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h2 class="m-0">Trending topics</h2>
					<a href="#" class="text-body text-primary-hover d-none"><u>View all categories</u></a>
				</div>
				<!-- Slider -->
				<div class="tiny-slider arrow-hover arrow-dark arrow-blur arrow-round">
					<div class="tiny-slider-inner"
					data-autoplay="false"
					data-hoverpause="true"
					data-gutter="24"
					data-arrow="true"
					data-dots="false"
					data-items-xl="5" 
					data-items-lg="4" 
					data-items-md="3" 
					data-items-sm="2" 
					data-items-xs="2"
					>

					<?php while($catsrow = $catsres->fetch_assoc()){?>
						<!-- Category item -->
						<div>
							<div class="card card-overlay-bottom card-img-scale">
								<img class="card-img" src="uploads/<?php echo $catsrow['cat_image'];?>" alt="">
								<div class="card-img-overlay d-flex px-3 px-sm-5">
									<h5 class="mt-auto mx-auto">
										<a href="category.php?id=<?php echo $catsrow['category_id'];?>&<?php echo $catsrow['category_slag'];?>" class="stretched-link btn-link fw-bold text-white"><?php echo $catsrow['category_name'];?></a>
									</h5>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div>
				</div> <!-- Slider END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Trending topics END -->




<!-- =======================
Highlights START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<?php while($blogsrow = $blogsres->fetch_assoc()){?>
				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="category.php?id=<?php echo $blogsrow['category_id'];?>&<?php echo $blogsrow['category_slag'];?>" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $blogsrow['category_name'];?></a>
							
							<!-- Title -->
							<h2 class="card-title">
								<a href="post-single.php?id=<?php echo $blogsrow['blog_id'];?>&<?php echo $blogsrow['blog_slag'];?>" class="btn-link text-reset stretched-link"><?php echo $blogsrow['blog_title'];?></a>
							</h2>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p><?php echo $blogsrow['blog_description'];?> </p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="uploads/<?php echo $blogsrow['blog_image'];?>" alt=" ">
						</div>
					</div>
				</div>
				<!-- Card item END -->
				 <?php } ?>
				
				<!-- Load more -->
				<a type="button" href="category.php" class="btn btn-primary-soft w-100">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></a>

			</div>
		</div>
	</div>
</section>
<!-- =======================
Highlights END -->

<!-- =======================
Newsletter START -->
<section class="pt-0" id="subscribe">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="bg-dark p-3 p-sm-5 rounded-3 position-relative overflow-hidden">
					<!-- SVG shape START -->
					<figure class="position-absolute top-50 start-50 translate-middle">
						<svg width="1848" height="481" viewBox="0 0 1848.9 481.8" xmlns="http://www.w3.org/2000/svg">
							<path class="fill-success" d="m779.4 251c-10.3-11.5-19.9-23.8-29.4-36.1-9-11.6-18.4-22.8-27.1-34.7-15.3-21.2-30.2-45.8-54.8-53.3-10.5-3.2-21.6-3.2-30.6 2.5-7.6 4.8-13 12.6-17.3 20.9-10.8 20.6-16.1 44.7-24.6 66.7-7.9 20.2-19.4 38.6-33.8 54.3-14.7 16.2-31.7 30-50.4 41-15.9 9.4-33.4 17.2-52 19.3-18.4 2-38-2.5-56.5-6.2-22.4-4.4-45.1-9.7-67.6-10.9-9.8-0.5-19.8-0.3-29.1 2.3-9.8 2.8-18.7 8.6-26.6 15.2-17.3 14.5-30.2 34.4-43.7 52.9-12.9 17.6-26.8 34.9-45.4 45.4-19.5 11-42.6 12.1-65 6.6-52.3-13.1-93.8-56.5-127.9-101.5-8.8-11.6-17.3-23.4-25.6-35.4-0.6-0.9-1.1-1.8-1.6-2.7-1.1-2.4-0.9-2.6 0.6-1.2 1 0.9 1.9 1.9 2.7 3 35.3 47.4 71.5 98.5 123.2 123.9 22.8 11.2 48.2 17.2 71.7 12.2 23-5 40.6-21.2 55.3-39.7 24.5-30.7 46.5-75.6 87.1-83 19.5-3.5 40.7 0.1 60.6 3.7 21.2 3.9 42.3 9.1 63.6 11.7 17.8 2.3 35.8-0.1 52.2-7 20-8.1 38.4-20.2 54.8-34.6 16.2-14.1 31-30.7 41.8-50.4 11.1-20.2 17-43.7 24.9-65.7 6.1-16.9 13.8-36.2 29.3-44.5 16.1-8.6 37.3-1.9 52.3 10.6 18.7 15.6 31.2 39.2 46.7 58.2"/>
							<path class="fill-warning" d="m1157.9 344.9c9.8 7.6 18.9 15.8 28.1 24 8.6 7.7 17.6 15.2 26 23.2 14.8 14.2 29.5 30.9 51.2 34.7 9.3 1.6 18.8 0.9 26.1-3.8 6.1-3.9 10.2-9.9 13.2-16.2 7.6-15.6 10.3-33.2 15.8-49.6 5.2-15.1 13.6-29 24.7-41.3 11.4-12.6 24.8-23.6 40-32.8 12.9-7.8 27.3-14.6 43.1-17.3 15.6-2.6 32.8-0.7 49 0.7 19.6 1.7 39.4 4 58.8 3.4 8.4-0.3 17-1.1 24.8-3.6 8.2-2.7 15.4-7.4 21.6-12.7 13.7-11.6 23.1-26.7 33.3-40.9 9.6-13.5 20.2-26.9 35.3-35.6 15.8-9.2 35.6-11.6 55.2-9.1 45.7 5.8 84.8 34.3 117.6 64.4 8.7 8 17.2 16.2 25.6 24.6 2.5 3.2 1.9 3-1.2 1-34.3-32-69.7-66.9-116.5-81.9-20.5-6.5-42.7-9.2-62.4-4-19.3 5.1-33.1 17.9-44.3 32.2-18.5 23.7-33.9 57.5-68.1 65.5-16.5 3.8-34.9 2.6-52.3 1.3-18.5-1.4-37-3.7-55.4-4.2-15.5-0.5-30.7 2.5-44.2 8.5-16.5 7.2-31.3 17.1-44.3 28.5-12.8 11.2-24.1 24.1-31.9 39-7.9 15.3-11.1 32.5-16.2 48.9-3.9 12.6-9 26.9-21.6 33.9-13.1 7.3-31.9 3.8-45.7-4.1-17.2-10-29.9-26.1-44.6-38.8"/>
							<path class="fill-warning opacity-6" d="m1840.8 379c-8.8 40.3-167.8 79.9-300.2 45.3-42.5-11.1-91.4-32-138.7-11.6-38.7 16.7-55 66-90.8 67.4-25.1 1-48.6-20.3-58.1-39.8-31-63.3 50.7-179.9 155.7-208.1 50.4-13.5 97.3-3.2 116.1 1.6 36.3 9.3 328.6 87.4 316 145.2z"/>
							<path class="fill-success opacity-6" d="M368.3,247.3C265.6,257.2,134,226,110.9,141.5C85,47.2,272.5-9.4,355.5-30.7s182.6-31.1,240.8-18.6    C677.6-31.8,671.5,53.9,627,102C582.6,150.2,470.9,237.5,368.3,247.3z"/>
						</svg>
					</figure>
					<!-- SVG shape END -->
					<div class="row">
						<div class="col-md-8 col-lg-6 mx-auto text-center py-5 position-relative">
							<!-- Title -->
							<h2 class="display-5 text-white">Never miss a story!</h2>
							<p class="text-white">Get the freshest headlines and updates sent uninterrupted to your inbox.</p>
							<!-- Form -->
							<form class="row row-cols-sm-auto g-2 align-items-center justify-content-center mt-3">
								<div class="col-12">
									<input type="email" class="form-control form-control-lg" placeholder="Enter your email address">
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-primary btn-lg m-0">Subscribe</button>
								</div>
								<div class="form-text text-white opacity-6 mt-2">By subscribing you agree to our 
									<a href="#" class="text-decoration-underline text-reset">Privacy Policy</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Newsletter END -->

<!-- =======================
Small post START -->
<section class="pt-4 pb-0 d-none">
	<div class="container">
		<div class="row">
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/07.jpg" alt="Card image">
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">7 common mistakes everyone makes while traveling</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Louis Ferguson</a>
							</li>
							<li class="nav-item">Mar 07, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/08.jpg" alt="Card image">
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Card overlay Top -->
							<div class="w-100 mb-auto d-flex justify-content-end">
								<div class="text-end ms-auto">
									<!-- Card format icon -->
									<div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">Skills that you can learn from business</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Samuel Bishop</a>
							</li>
							<li class="nav-item">Aug 15, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/09.jpg" alt="Card image">
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">10 tell-tale signs you need to get a new business</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Dennis Barrett</a>
							</li>
							<li class="nav-item">Jun 01, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/10.jpg" alt="Card image">
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">This is why this year will be the year of startups</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Bryan Knight</a>
							</li>
							<li class="nav-item">Dec 07, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/11.jpg" alt="Card image">
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Card overlay Top -->
							<div class="w-100 mb-auto d-flex justify-content-end">
								<div class="text-end ms-auto">
									<!-- Card format icon -->
									<div class="icon-md bg-success text-white fw-bold rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">Best Pinterest Boards for learning about business</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Judy Nguyen</a>
							</li>
							<li class="nav-item">Sep 07, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/12.jpg" alt="Card image">
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">How did we get here? The real history of our business</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Amanda Reed</a>
							</li>
							<li class="nav-item">Aug 06, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/13.jpg" alt="Card image">
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">Facts about business that will put you in a good mood</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Joan Wallace</a>
							</li>
							<li class="nav-item">Feb 18, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card mb-4">
					<!-- Card img -->
					<div class="card-fold position-relative">
						<img class="card-img" src="assets/images/blog/4by3/14.jpg" alt="Card image">
						<div class="card-img-overlay d-flex align-items-start flex-column p-3">
							<!-- Card overlay Top -->
							<div class="w-100 mb-auto d-flex justify-content-end">
								<div class="text-end ms-auto">
									<!-- Card format icon -->
									<div class="icon-md bg-danger text-white fw-bold rounded-circle" title="This post has audio"><i class="fas fa-volume-up"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body px-0 pt-3">
						<h4 class="card-title"><a href="post-single.php" class="btn-link text-reset stretched-link fw-bold">Questions everyone working in IT should know how to answer</a></h4>
						<!-- Card info -->
						<ul class="nav nav-divider align-items-center text-uppercase small">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset btn-link">Lori Stevens</a>
							</li>
							<li class="nav-item">Jun 03, 2022</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Card item END -->
		</div>
	</div>
</section>
<!-- =======================
Small post END -->

<!-- =======================
Tab post START -->
<section class="pt-4 pb-0 d-none">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item"> <a class="nav-link fs-5 active" data-bs-toggle="tab" href="#tab-1-1"> <i class="fab fa-readme me-2"></i> Most read </a> </li>
					<li class="nav-item"> <a class="nav-link fs-5" data-bs-toggle="tab" href="#tab-1-2"> <i class="fas fa-fire me-2"></i> Trending </a> </li>
				</ul>
				<div class="tab-content">
					<!-- Most read tab START -->
					<div class="tab-pane show active" id="tab-1-1">
						<div class="row">
							<!-- Tab items group START -->
							<div class="col-md-4">
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Never underestimate the influence of social media</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Business ideas that will boom in upcoming years</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">How the 10 worst business fails of all time could have been prevented</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Ten unconventional tips about startups that you can't learn from books</a></h5>
								</div>
							</div>
							<!-- Tab items group END -->
							<!-- Tab items group START -->
							<div class="col-md-4">
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">How did we get here? The history of the business told through tweets</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Bad habits that people in the business industry need to quit</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>
								</div>
							</div>
							<!-- Tab items group END -->
							<!-- Tab items group START -->
							<div class="col-md-4">
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>
								</div>
							</div>
							<!-- Tab items group END -->
						</div>
					</div>
					<!-- Most read tab END -->
					<!-- Trending tab START -->
					<div class="tab-pane show" id="tab-1-2">
						<div class="row">
							<!-- Tab items group START -->
							<div class="col-md-4">
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">10 facts about business that will instantly put you in a good mood</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>
								</div>
							</div>
							<!-- Tab items group END -->
							<!-- Tab items group START -->
							<div class="col-md-4">
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>
								</div>
							</div>
							<!-- Tab items group END -->
							<!-- Tab items group START -->
							<div class="col-md-4">
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">How 10 worst business fails of all time could have been prevented</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Business idea that will instantly put you in a good mood</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">How did we get here? The real history of our business</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">7 common mistakes everyone makes while traveling</a></h5>
								</div>
								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">21</span>
									<h5><a href="#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>
								</div>
							</div>
							<!-- Tab items group END -->
						</div>
					</div>
					<!-- Trending tab END -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Tab post END -->




</main>
<!-- **************** MAIN CONTENT END **************** -->


</body>
  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'; ?>
</html>