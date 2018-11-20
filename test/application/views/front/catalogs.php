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
      		<h4>Catalogs</h4>
      	  <ol class="breadcrumb">
      		    <li class="breadcrumb-item"><a href="#">Home</a></li>
      		    <li class="breadcrumb-item active" aria-current="page">Catalogs</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="container">
			<div class="catalog-wraper">
				<div class="row">
					<div class="col-md-3">
						<div class="wrap-pdf">
							<div class="pdf-img">
								<img src="<?php echo base_url('assets/front/images/pdf.jpeg'); ?>">
							</div>
							<div class="pdf-link">
							<span>Introduction Retail Price List PDF</span>
								<a href="intro_pricelist.pdf" target="_blank" class="download-now"> <i class="fa fa-download"></i> Download Now </a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="wrap-pdf">
							<div class="pdf-img">
								<img src="<?php echo base_url('assets/front/images/pdf2.jpeg'); ?>">
							</div>
							<div class="pdf-link">
							<span>Catalog Retail Price List PDF</span>
								<a href="cat_pricelist.pdf" target="_blank" class="download-now"> <i class="fa fa-download"></i> Download Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
