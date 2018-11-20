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
			<h5> Friedman Login </h5>
			<p>Some Heading will be here with some more texts here </p>
			</div>

			<div class="box-wrap-login">
				<h6 class="box-title">Login Here</h6>
				<form method="post">
					<div class="form-group">
						<input type="email" name="email" class="style-input" placeholder="Username or Email">
					</div>
					<div class="form-group">
						<input type="password" name="pwd" class="style-input" placeholder="Password">
					</div>
					<div class="form-group">
					<label>
						<input type="checkbox" name="check"> <span class="style-bg"> Remember Me </span> </label>

					</div>

					<div class="form-group">
						<input type="submit" name="check" class="style-input submit-style" value="Login Now">
					</div>

					<div class="register-forgot">
						<a href="#">Register</a>
						<a href="#" class="pull-right">Forgot Your Password</a>
					</div>

					<a href="index.html" class="backtohome"><i class="fa fa-long-arrow-left"></i> Back to Home Page?</a>

				</form>
			</div>

		</div>
	</div>
</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
