<?php
require "includes/connect.php";

if(isset($_GET['subscribe'])){
    $email = $_GET['subscribe'];
}else{
    $email = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 06:05:58 GMT -->
<head>
	<title>Subscribe | Money Smart Kenya</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ganiam Tech">
	<meta name="description" content="Subscribe to get the latest updates on new stories!">

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
      <div class="col-md-9 mx-auto text-center">
        <h1 class="display-4">Subscribe Today!</h1>
        <!-- breadcrumb -->
           
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Contact info START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
        
    
        
        <div class="row">
          <div class="col-12">
          <h2>Get the latest story in your inbox</h2>
          <p>Don't miss a story. Get updates direct to your email.</p>
          <!-- Form START -->
          <form class="contact-form" id="contact-form" action="processes.php"  method="POST">
            <!-- Main form -->
            <div class="row">
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3">
                  <input required id="con-name" name="fname" type="text" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3">
                  <input required id="con-name" name="lname" type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="col-md-6">
                <!-- email -->
                <div class="mb-3">
                  <input required id="con-email" name="email" value="<?php echo $email;?>"  type="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3">
                  <input required id="con-name" name="phone" type="text" class="form-control" placeholder="Phone Number Eg: +2547XXXXXXX">
                </div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 text-start"><button class="btn btn-primary w-100" name="subscribe" type="submit">Subscribe Now</button></div>
            </div>
          </form>
			  	<!-- Form END -->
          </div>
        </div>
      </div>  <!-- Col END -->
     </div>
  </div>
</section>
<!-- =======================
Contact info END -->


</main>
<!-- **************** MAIN CONTENT END **************** -->



</body>
  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'; ?>
</html>