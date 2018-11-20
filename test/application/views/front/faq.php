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
      		<h4>FAQ's</h4>
      	  <ol class="breadcrumb">
      		<li class="breadcrumb-item"><a href="#">Home</a></li>
      		<li class="breadcrumb-item active" aria-current="page">FAQ's</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="container">

			<div class="accordion indicator-plus-before round-indicator" id="accordionH" aria-multiselectable="true">
			<div class="faq-wrap">
				<div class="faq-item">
				<div class="card m-b-0">
					<div class="card-header collapsed" role="tab" id="headingOneH" href="#collapseOneH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseOneH">
						<a class="card-title">How do I order a Catalog?</a>
					</div>
					<div class="collapse" id="collapseOneH" role="tabpanel" aria-labelledby="headingOneH" style="">
						<div class="card-body">
							Register for an account on our website and then contact us.
						</div>
					</div>
					<div class="card-header collapsed" role="tab" id="headingTwoH" href="#collapseTwoH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseTwoH">
						<a class="card-title">Why do you charge for your catalog?</a>
					</div>
					<div class="collapse" id="collapseTwoH" role="tabpanel" aria-labelledby="headingTwoH">
						<div class="card-body">
							Our catalog contains over 300 pages and costs over $50 to produce.
						</div>
					</div>
					<div class="card-header collapsed" role="tab" id="headingThreeH" href="#collapseThreeH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseThreeH">
						<a class="card-title">What is the meaning of life the universe and everything?</a>
					</div>
					<div class="collapse" id="collapseThreeH" role="tabpanel" aria-labelledby="headingThreeH">
						<div class="card-body">
							You can order missing pages. Contact us with a list of your missing pages. A small charge to cover our costs will apply.
						</div>
					</div>
				</div>
				</div>
				</div> <!-- Row --->

			</div>
</div>
</div>

      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
