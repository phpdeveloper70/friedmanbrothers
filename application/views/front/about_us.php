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
					<p>Friedman Brothers is the oldest and most prestigious manufacturer of handcrafted decorative
					wall art in the United States. The company has been family owned and operated for over 100 years,
					spending much of that history perfecting the
					art of Decorative Mirrors, Consoles, Sconces, Brackets, Cornices, Window Treatments and More.</p>

					<p>The company was founded by two brothers who emigrated from England in 1903. They brought with
					them an outstanding talent for old-world elegant design and the skilled crafts of wood carving and
					finishing, with special emphasis on Old World gold leafing. Through hard work and an unyielding commitment
					to design and quality, the Friedman brothers
					became the interior designer's supplier of choice for elegant and sophisticated decorative wall art.</p>

					<p>The brothers then passed down their craft through the generations where this same original
					commitment to design and quality can be found in the company's products today.</p>

					<p>Friedman Brothers decorative art is so high in quality that it can be found in the most prestigious
					places in the World, including Museums, The Vatican and The White House. From the best hotels to private
					residences,
					interior designers specify Friedman products to bring a touch of prestige and elegance to their designs.</p>

				</div>
			</div>
		</div> <!-- Column First --->

		<div class="col-lg-3 col-md-4">
			<div class="side-bar">
				<div class="top-side-links">
					<ul class="list-group side-link">
					  <li class="list-group-item"><a href="#" class="active">About Us </a></li>
					  <li class="list-group-item"><a href="#">Products </a></li>
					  <li class="list-group-item"><a href="#">Custom </a></li>
					  <li class="list-group-item"><a href="#">FAQ </a></li>
					  <li class="list-group-item"><a href="#">Contact Us </a></li>
					  <li class="list-group-item"><a href="#">Handcrafting Process </a></li>
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
