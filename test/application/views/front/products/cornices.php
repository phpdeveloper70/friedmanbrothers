<?php $category = $this->front_model->get_category_by_id($category_id); ?>
<!doctype html>
<html>
   <head>
      <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!-- Breadcrumb --->
      <div class="page-title">
         <div class="container">
            <h4><?php echo $department[0]->DeptTitle; ?> Collection</h4>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page"><?php echo $department[0]->DeptTitle; ?> Collection</li>
            </ol>
         </div>
      </div>
      <!---  Main Inner Wrapper --->
      <div class="wraper-main-inner pb-0">
	<div class="container">
		<!-- Text Wraper --->
		<div class="about-brother text-center pb-5">
		<h2>Friedman Brothers <?php echo $department[0]->DeptTitle; ?></h2>
		<p><?php echo strip_tags($category[0]->CatDescription); ?></p>
	</div>
	</div> <!-- End Container -->
	<div class="main-cornices">
  <?php $k = 0; foreach($productdata as $product){ $k++; ?>
	<div class="cornices-wrap <?php echo ($k%2==0)?'back-img':'back-blue'; ?>">
		<div class="container">
			<div class="table-wrap">
				<div class="row align-items-center">
          <div class="container">
			<div class="style-wrap">
				<div class="style-img-wrap">
					<img src="<?php echo base_url('assets/front/images/style-1.png'); ?>">
				</div>
				<div class="style-number">
					<span class="figure-item"><?php echo $product->ProdTitle; ?> Style# <?php echo $product->Sku; ?></span>
					<span class="vertical-line">&nbsp;</span>
					<a href="javascript_void(0)" class="btn know-more bg-white">More Info<i class="fa fa-caret-right"></i></a>
				</div>
			</div>
		</div>

				</div>
			</div>
		</div> <!-- End Container -->
	</div>
<?php } ?>

</div>

</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
