<?php
require "includes/connect.php";

$sid = $_GET['id'];
$profres = $conn->query("SELECT * FROM blog b JOIN category c ON b.category_id=c.category_id WHERE b.blog_id='$sid'");
$row = $profres->fetch_assoc();

$revres=$conn->query("SELECT * FROM review WHERE blog_id=$sid ORDER BY review_id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 06:05:58 GMT -->
<head>
	<title><?php echo $row['blog_title'];?> | Money Smart Kenya</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ganiam Tech">
	<meta name="description" content="<?php echo $row['blog_description'];?>">

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
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto pt-md-5">
        <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $row['category_name'];?></a>
				<h1 class="display-4"><?php echo $row['blog_title'];?></h1>
        <p class="lead"><?php echo $row['blog_description'];?> </p>
        <!-- Info -->
        <ul class="nav nav-divider align-items-center">
          
          <li class="nav-item"><?php echo date('M d, Y', strtotime($row['date_created']));?></li>
          <li class="nav-item">5 min read</li>
        </ul>
        <img class="rounded mt-5" src="uploads/<?php echo $row['blog_image'];?>" alt="Image">
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section class="pt-0">
	<div class="container position-relative">
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-9 mx-auto">

<?php echo $row['blog_content'];?>
				

				
          </div>
				</div>
				
				<!-- Author info START -->
				<div class="d-flex p-2 p-md-4 mt-5 border rounded d-none">
					<!-- Avatar -->
					<a href="#">
						<div class="avatar avatar-xxl me-2 me-md-4">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
						</div>
					</a>
					<!-- Info -->
					<div>
						<div class="d-sm-flex align-items-center justify-content-between">
							<div>
								<h4 class="m-0"><a href="#">Louis Ferguson</a></h4>
								<small>An editor at Blogzine</small>
							</div>
							<a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
						</div>
						<p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015.</p>
						<!-- Social icons -->
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>					
					</div>
				</div>
				<!-- Author info END -->

				<!-- Comments START -->
		<div class="mt-5 container" id="comments">
			<h3><?php echo $revres->num_rows;?> comments</h3>
			<?php
			if($revres->num_rows > 0){ 
				while($revrow = $revres->fetch_assoc()){
			?>
			<!-- Comment level 1-->
			<div class="my-4 d-flex">
			  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/user-placeholder.png" alt="avatar">
			  <div>
				<div class="mb-2">
					<h5 class="m-0"><?php echo $revrow["name"];?></h5>
					<span class="me-3 small"><?php echo date('M d, Y h:i A', strtotime($revrow['date_reviewed']));?></span>
					
				</div>
				<p><?php echo $revrow["comment"];?> </p>
			  </div>
			</div>
			<?php }}else{ ?>
			<div class="my-4 d-flex">
				<div class="text-center">
					<h4>No Comments Yet!</h4>
				</div>
			</div>

			  <?php } ?>
				

		</div>
		<!-- Comments END -->

				<hr class="my-4">

		<!-- Reply START -->
		<div class="container">
			<h3>Leave a reply</h3>
			<small>Your email address will not be published. Required fields are marked *</small>
			<form class="row g-3 mt-2" method="post" action="processes.php"> 
			  <div class="col-md-6">
				<label class="form-label">Name *</label>
				<input type="text" class="form-control" name="name" aria-label="First name" required>
			  </div>
			  <div class="col-md-6">
				<label class="form-label">Email *</label>
				<input type="email" class="form-control" name="email" required>
			  </div>
			  <!-- custom checkbox -->
				<div class="col-md-12">
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					  <label class="form-check-label" for="flexCheckDefault">Save my name and email in this browser for the next time I comment. </label>
					</div>
				</div>
			  <div class="col-12">
				<label class="form-label">Your Comment *</label>
				  <textarea class="form-control" rows="3" name="comment" required></textarea>
			  </div>
			  <div class="col-12">
				<input type="hidden" name="blogid" value="<?php echo $sid;?>">
				<button type="submit" name="post-comment" class="btn btn-primary">Post comment</button>
			  </div>
			</form>
		</div>
		<!-- Reply END -->

        <!-- Next prev post START -->
				<div class="row g-0 mt-5 mx-0 border-top border-bottom d-none">
					<div class="col-sm-6 py-3 py-md-4">
						<div class="d-flex align-items-center position-relative">
							<!-- Icon -->
							<div class="bg-primary py-1">
								<i class="bi bi-chevron-compact-left fs-3 text-white px-1 rtl-flip"></i>
							</div>
							<!-- Title -->
							<div class="ms-3">
								<h5 class="m-0"> <a href="#" class="stretched-link btn-link text-reset">Around the web: 20 fabulous infographics about business</a></h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 py-3 py-md-4 text-sm-end">
						<div class="d-flex align-items-center position-relative">
							<!-- Title -->
							<div class="me-3">
								<h5 class="m-0"> <a href="#" class="stretched-link btn-link text-reset">12 worst types of business accounts you follow on Twitter</a></h5>
							</div>
							<!-- Icon -->
							<div class="bg-primary py-1">
								<i class="bi bi-chevron-compact-right fs-3 text-white px-1 rtl-flip"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- Next prev post START -->

			</div>
			<!-- Main Content END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->



</main>
<!-- **************** MAIN CONTENT END **************** -->



</body>
  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'; ?>
</html>