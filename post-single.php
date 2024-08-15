<?php
require "includes/connect.php";

$sid = $_GET['id'];
$profres = $conn->query("SELECT * FROM blog b JOIN category c ON b.category_id=c.category_id WHERE b.blog_id='$sid'");
$row = $profres->fetch_assoc();
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
		<div class="mt-5 container">
			<h3>5 comments</h3>
			<!-- Comment level 1-->
			<div class="my-4 d-flex">
			  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
			  <div>
				<div class="mb-2">
					<h5 class="m-0">Allen Smith</h5>
					<span class="me-3 small">June 11, 2022 at 6:01 am </span>
					<a href="#" class="text-body fw-normal">Reply</a>
				</div>
				<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
			  </div>
			</div>
				<!-- Comment children level 2 -->
				<div class="my-4 d-flex ps-2 ps-md-3">
				  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/02.jpg" alt="avatar">
				  <div>
					<div class="mb-2">
						<h5 class="m-0">Louis Ferguson</h5>
						<span class="me-3 small">June 11, 2022 at 6:55 am </span>
						<a href="#" class="text-body fw-normal">Reply</a>
					</div>
					<p>Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. </p>
				  </div>
				</div>
					<!-- Comment children level 3 -->
					<div class="my-4 d-flex ps-3 ps-md-5">
					  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
					  <div>
						<div class="mb-2">
							<h5 class="m-0">Allen Smith</h5>
							<span class="me-3 small">June 11, 2022 at 7:10 am </span>
							<a href="#" class="text-body fw-normal">Reply</a>
						</div>
						<p>Meant balls it if up doubt small purse. </p>
					  </div>
					</div>
				<!-- Comment level 2 -->
				<div class="my-4 d-flex ps-2 ps-md-3">
				  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/03.jpg" alt="avatar">
				  <div>
					<div class="mb-2">
						<h5 class="m-0">Frances Guerrero</h5>
						<span class="me-3 small">June 14, 2022 at 12:35 pm </span>
						<a href="#" class="text-body fw-normal">Reply</a>
					</div>
					<p>Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>
				  </div>
				</div>
			<!-- Comment level 1 -->
			<div class="my-4 d-flex">
			  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/04.jpg" alt="avatar">
			  <div>
				<div class="mb-2">
					<h5 class="m-0">Judy Nguyen</h5>
					<span class="me-3 small">June 18, 2022 at 11:55 am </span>
					<a href="#" class="text-body fw-normal">Reply</a>
				</div>
				<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. </p>
			  </div>
			</div>

		</div>
		<!-- Comments END -->
		<!-- Reply START -->
		<div class="container">
			<h3>Leave a reply</h3>
			<small>Your email address will not be published. Required fields are marked *</small>
			<form class="row g-3 mt-2">
			  <div class="col-md-6">
				<label class="form-label">Name *</label>
				<input type="text" class="form-control" aria-label="First name">
			  </div>
			  <div class="col-md-6">
				<label class="form-label">Email *</label>
				<input type="email" class="form-control">
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
				  <textarea class="form-control" rows="3"></textarea>
			  </div>
			  <div class="col-12">
				<button type="submit" class="btn btn-primary">Post comment</button>
			  </div>
			</form>
		</div>
		<!-- Reply END -->

        <!-- Next prev post START -->
				<div class="row g-0 mt-5 mx-0 border-top border-bottom">
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