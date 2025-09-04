<?php
session_start();
 include("include/otherheader.php");
?>

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Contact Us</h1>
				
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Get connected with us</h2>
						<?php
						if(isset($_SESSION['success'])){
?>
<div class="alert alert-success" role="alert">
							<strong><?php echo $_SESSION['success'] ?></strong>
						</div>
<?php
						}
						unset($_SESSION['success']);
						?>

						<?php
						if(isset($_SESSION['error'])){
?>
<div class="alert alert-danger" role="alert">
							<strong><?php echo $_SESSION['error'] ?></strong>
						</div>
<?php
						}
						unset($_SESSION['error']);
						?>
						
					</div>
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="mail.php" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-3">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" name="submit_btn" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<img src="images/resource/c-1.png" alt="" class="w-100">
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!-- Map Section-->
	<!-- <section class="map-section">
		<iframe  class="map"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
	</section> -->
	<!--End Map Section-->

  <!-- Main Footer -->
	<footer class="main-footer">
		<div class="bg bg-pattern-6"></div>
		<!-- Footer Uppper -->
		<div class="footer-upper">
			<div class="auto-container">
				<div class="row">
					<!-- Contact info Block -->
					<div class="contact-info-block col-lg-4 col-md-6">
						<div class="inner">
							<i class='icon bx bx-map' ></i>
							<div class="text">Office address - 2nd floor, School Block, S - 698, Block C, Nirman Vihar, Shakarpur, Delhi, 110092</div>
						</div>
					</div>
					<!-- Contact info Block -->
					<div class="contact-info-block col-lg-4 col-md-6">
						<div class="inner">
							<i class='icon bx bx-envelope' ></i>
							<div class="text">
								<a href="mailto:digitalmaking97@gmail.com">Digitalmaking97@gmail.com</a>
								<a href="tel:+919220364396">+919220364396</a>
							</div>
						</div>
					</div>
					<!-- Contact info Block -->
					<div class="contact-info-block col-lg-4 col-md-6">
						<div class="inner">
							<i class='icon bx bx-time' ></i>
							<div class="text">Mon - Sat: 10:00 am to 7:00 pm <br>Sunday: CLOSED</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="call-to-action">
						<div class="outer-box">
							<div class="bg bg-pattern-3"></div>
							<div class="title-box">
								<h3 class="title">Let’s Discuss How to <br > Make your Business Better.</h3>
								<a href="contact.php" title="" class="theme-btn btn-style-one dark-bg hover-light"><span class="btn-title">Connect Us</span></a>
							</div>
							<div class="image-box">
								<span class="icon icon-bulb"></span>
								<figure class="image"><img src="images/resource/c-2.png" alt="" ></figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		include("include/footer.php");
		?>