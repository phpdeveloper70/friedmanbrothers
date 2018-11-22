<!doctype html>
<html>
   <head>
      <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!---  Main Inner Wrapper --->
      <div class="page-title">
      	<div class="container">
      		<h4>Support</h4>
      	  <ol class="breadcrumb">
      		<li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
      		<li class="breadcrumb-item active" aria-current="page">Support</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="wraper-main-inner login-main-wrap">
	<div class="container">
		<div class="wrap-login-section">

			<div class="box-wrap-login support">
				<h6 class="box-title">Submit a request</h6>
				<form method="post">
				<div class="form-group">
						<input type="text" name="subject"  class="style-input" placeholder="Subject">
						 <?php echo form_error('subject'); ?>
					</div>
					<div class="form-group">
						<input type="text" name="email"  class="style-input" placeholder="Email">
						          <?php echo form_error('email'); ?>
					</div>

					<div class="form-group">
						<textarea rows="5" name="message"  placeholder="Message"></textarea>
						 <?php echo form_error('message'); ?>
					</div>
                   <div class="form-group">
						<input type="submit" name="submit" class="style-input submit-style" value="Send Now">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
