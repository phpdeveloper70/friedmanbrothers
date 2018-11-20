<!doctype html>
<html>
   <head>
      <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!---  Main Inner Wrapper --->
      <div class="wraper-main-inner login-main-wrap">
	<div class="container">
		<div class="wrap-login-section">
			<div class="login-title">
			<h5> Register Now </h5>
			<p>Create your account. It's free &amp; only take a minute </p>
			</div>


			<!-- Step Wizard -->


			<!-- Step Wizard End -->



			<div class="box-wrap-login register-reset-brd">
							<form method="post">
					<div class="form-group">
						<input type="text" name="user" class="style-input required" placeholder="Username">
					</div>
					<div class="form-group reset-mbile-margin">
					<div class="row">
					<div class="col-sm-6 mb-view-15">
						<input type="password" name="pwd" class="style-input required" placeholder="Password">
					</div>
					<div class="col-sm-6 mb-view-15">
						<input type="password" name="cnfpwd" class="style-input required" placeholder="Confirm Password">
					</div>
					</div> <!-- Row End -->
					</div>

					<div class="form-group reset-mbile-margin">
					<div class="row">
					<div class="col-sm-6 mb-view-15">
						<input type="text" name="fname" class="style-input required" placeholder="First Name">
					</div>
					<div class="col-sm-6 mb-view-15">
						<input type="text" name="lname" class="style-input required" placeholder="Last Name">
					</div>
					</div> <!-- Row End -->
					</div>

					<div class="form-group">
						<input type="email" name="email" class="style-input required" placeholder="Email Address">
					</div>

					<div class="form-group">
						<input type="button" name="check" class="style-input submit-style" value="Next Step" onclick="location.href='register2.html'">

					</div>



				</form>
			</div>

		</div>
	</div>
</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
