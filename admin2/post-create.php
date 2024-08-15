<?php 
session_start();
include "includes/sessions.php";
include "../includes/connect.php";


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 06:05:58 GMT -->
<head>
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
Main contain START -->
<section class="py-4">
	<div class="container">
    <div class="row pb-4">
			<div class="col-12">
        <!-- Title -->
					<h1 class="mb-0 h2">Create a post</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Chart START -->
				<div class="card border">
					<!-- Card body -->
					<div class="card-body">
            <!-- Form START -->
            <form>
              <!-- Main form -->
              <div class="row">
                <div class="col-12">
                  <!-- Post name -->
                  <div class="mb-3">
                    <label class="form-label">Post name</label>
                    <input required id="con-name" name="tit" type="text" class="form-control" placeholder="Post name">
                    
                  </div>
                </div>
                <!-- Post type START -->
              
              </div>
              <!-- Post type END -->
              
              <!-- Short description -->
              <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Short description </label>
                    <textarea class="form-control" rows="3" name="desc" placeholder="Add description"></textarea>
                </div>
              </div>

              <!-- Main toolbar -->
                <div class="col-md-12">
                  <!-- Subject -->
                  <div class="mb-3">
                    <label class="form-label">Post body</label>
                    <!-- Editor toolbar -->
                      <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                        <span class="ql-formats">
                          <select class="ql-size"></select>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                          <button class="ql-strike"></button>
                        </span>
                        <span class="ql-formats">
                          <select class="ql-color"></select>
                          <select class="ql-background"></select>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                          <button class="ql-indent" value="-1"></button>
                          <button class="ql-indent" value="+1"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-link"></button>
                          <button class="ql-image"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-clean"></button>
                        </span>
                      </div>
                      <!-- Main toolbar -->
                      <div class="bg-body border rounded-bottom h-300 overflow-hiddn" name="content" id="quilleditor">
</div>
                    </div>	
                </div>
                <div class="col-12">
                  <div class="mb-3">
                  <!-- Image -->
                  <div class="position-relative">
                    <h6 class="my-2">Upload post image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                    <label class="w-100" style="cursor:pointer;">
                      <span> 
                        <input class="form-control stretched-link" type="file" name="photos" id="image" accept="image/gif, image/jpeg, image/png">
                      </span>
                    </label>
                  </div>
                  <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <!-- Tags -->
                  <div class="mb-3">
                    <label class="form-label">Tags</label>
                    <textarea class="form-control" rows="1" name="tags" placeholder="business, investment ..."></textarea>
                    <small>Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing.</small>
                  </div>
                </div>
                <div class="col-lg-5">
                  <!-- Message -->
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="cat" aria-label="Default select example">
                      <option>Select category...</option>
                      <?php 
                      $catres = $conn->query("SELECT * FROM category");
                      
                      while($catrow = $catres->fetch_assoc()){?>
                      <option value="<?php echo $catrow['category_id'];?>"><?php echo $catrow['category_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="postCheck">
                    <label class="form-check-label" for="postCheck">
                      Make this post featured?
                    </label>
                  </div>
                </div>
                <!-- Create post button -->
                <div class="col-md-12 text-start">
                  <button class="btn btn-primary w-100" type="submit">Create post</button>
                </div>
              </div>
            </form>
            <!-- Form END -->
					</div>
				</div>
				<!-- Chart END -->
			</div>
    </div>
	</div>
</section>
<!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
 <!-- ======= Footer ======= -->
 <?php include 'includes/footer.php'; ?>
</body>


</html>