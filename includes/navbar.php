<?php
$navcats = $conn->query("SELECT * FROM category WHERE cat_status=1 LIMIT 2");
?>
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand py-0" href="index.php">
				<img class="navbar-brand-item light-mode-item" src="assets/images/logo3.png" alt="logo" style="width:180px;height:80px;">			
				<img class="navbar-brand-item dark-mode-item" src="assets/images/logo3-dark.png" alt="logo"style="width:180px;height:80px;">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<!-- Nav Search START -->
				<div class="nav mt-3 mt-lg-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="rounded position-relative">
							<input class="form-control pe-5 bg-light" type="search" placeholder="Search the blog" aria-label="Search">
							<button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">
					<!-- Nav item 5 link-->
					<li class="nav-item"> <a class="nav-link" href="index.php">Home</a></li>
					
					

					<?php while($navcatrow = $navcats->fetch_assoc()){
						$cat = $navcatrow['category_id'];
						$navblogsres = $conn->query("SELECT * FROM blog WHERE category_id=$cat AND blog_status=1  ORDER BY blog_views LIMIT 3");
						
						?>
					<!-- Nav item 4 Mega menu -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $navcatrow['category_name'];?></a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">

								<?php while($navblogsrow = $navblogsres->fetch_assoc()){?>
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="uploads/<?php echo $navblogsrow['blog_image'];?>" alt="">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="post-single.php?id=<?php echo $navblogsrow['blog_id'];?>&<?php echo $navblogsrow['blog_slag'];?>" class="btn-link text-reset fw-bold"><?php echo $navblogsrow['blog_title'];?></a></h6>
												
											</div>
										</div>
									</div>
									<!-- Card item END -->

								<?php } ?>
									
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
											<span>Smart Money</span>
											<h3>Insights Direct to your E-Mail</h3>
											<p>Become a Member Today!</p>
											<a href="index.php#subscribe" class="btn btn-warning">Subscribe Now!</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3 d-none">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>
					<?php } ?>



					<!-- Nav item 5 link-->
					<li class="nav-item"> <a class="nav-link link-danger fs-5" href="index.php#subscribe"><u>Subscribe Now</u></a></li>
				</ul>
			</div>
			<!-- Main navbar END -->
			<!-- Dark mode options START -->
			<div class="nav-item dropdown ms-4">
				<!-- Switch button -->
				<button class="modeswitch" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
					<svg class="theme-icon-active"><use href="#"></use></svg>
				</button>
				<!-- Dropdown items -->
				<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
					<li class="mb-1">
						<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
							<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
								<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
								<use href="#"></use>
							</svg>Light
						</button>
					</li>
					<li class="mb-1">
						<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
								<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
								<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
								<use href="#"></use>
							</svg>Dark
						</button>
					</li>
					<li>
						<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
								<use href="#"></use>
							</svg>Auto
						</button>
					</li>
				</ul>
			</div>
			<!-- Dark mode options END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>