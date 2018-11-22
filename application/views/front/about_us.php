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
      		<h4>About Us</h4>
      	  <ol class="breadcrumb">
      		<li class="breadcrumb-item"><a href="#">Home</a></li>
      		<li class="breadcrumb-item active" aria-current="page">About Us</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="container">
		<div class="row">
		<div class="col-lg-9 col-md-8">
			<div class="inner-about">
				<div class="wrap-inner-abt">
					<img src="<?php echo base_url('assets/front/images/about-us-img.jpg') ?>">
				</div> <!-- Wrapper Img -->

				<!-- Content -->

				<div class="content-description">
					<?php echo $result[2]->html?>

				</div>
			</div>
		</div> <!-- Column First --->

		<div class="col-lg-3 col-md-4">
			<div class="side-bar">
				<div class="top-side-links">
					<ul class="list-group side-link">
					  <li class="list-group-item"><a href="index.php?pid=14" class="active">About Us </a></li>
					  <li class="list-group-item"><a href="index.php?pid=15">Products </a></li>
					  <li class="list-group-item"><a href="index.php?pid=16">Custom </a></li>
					  <li class="list-group-item"><a href="index.php?pid=17">FAQ </a></li>
					  <li class="list-group-item"><a href="index.php?pid=18">Contact Us </a></li>
					  <li class="list-group-item"><a href="index.php?pid=19">Handcrafting Process </a></li>
					</ul>
				</div>
			</div> <!-- link End --->

			<div class="circle-img">
				<img src="<?php echo base_url('assets/front/images/made-in-usa.jpg'); ?>">
			</div>

			<div class="b-wrap-side">
				<div class="bottom-text-side">
				<strong>Since 1903</strong>
				<span>"Handcrafted wood frames using traditional 18th Century production techniques"</span>
				<div class="divider"></div>
				</div>
				<strong>Custom designs, sizes & finishes.</strong>
			</div>


		</div> <!-- Right Column --->


		</div> <!-- Row End -->
	</div>
</div>

      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
