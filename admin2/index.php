<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 06:05:58 GMT -->
<head>
	<title>Admin Panel | Money Smart Kenya </title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ganiam Tech">
	<meta name="description" content="Administrator Login">

	   <!-- Head Content -->
	   <?php include 'includes/head-content.php'; ?>
</head>

<body>



<!-- **************** MAIN CONTENT START **************** -->
<main>



<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="p-4 p-sm-5 bg-primary bg-opacity-10 rounded">
					<h2>Log in to Admin Panel</h2>
					<!-- Form START -->
					<form class="mt-4"method="POST" action="processes.php">
						<!-- Email -->
						<div class="mb-3">
							<label class="form-label" for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
						</div>
						<!-- Password -->
						<div class="mb-3">
							<label class="form-label" for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
						</div>
						<!-- Checkbox -->
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">keep me signed in</label>
						</div>
						<!-- Button -->
						<div class="row align-items-center">
							<div class="col-sm-4">
								<button type="submit" name="login" class="btn btn-success">Sign me in</button>
							</div>
						</div>
					</form>
					<!-- Form END -->
					<hr>
					<!-- Social-media btn -->
					
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->




</main>
<!-- **************** MAIN CONTENT END **************** -->
 <!-- ======= Footer ======= -->
 <?php include 'includes/footer.php'; ?>
</body>


</html>