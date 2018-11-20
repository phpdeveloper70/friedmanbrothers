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
	<div class="main-tables-wrap">
  <?php $k = 0; foreach($productdata as $product){ $k++; ?>
	<div class="table-wrap <?php echo ($k%2==0)?'back-img':'back-blue'; ?>">
		<div class="container">
			<div class="table-wrap">
				<div class="row align-items-center">
        <?php if($k%2==0){ ?>
          <div class="col-md-6">
  					<div class="description-table text-blue">
  					<h3><?php echo $product->ProdTitle; ?> (Style#: <?php echo $product->Sku; ?>)</h3>
  					<strong>Description:</strong>
  					<span> <?php echo $product->ProdDescription; ?></span>
  					<a href="javascript_void(0)" class="btn know-more bg-white mt-2">More Info <i class="fa fa-caret-right"></i></a>
  					<a href="javascript_void(0)" class="btn know-more bg-white mt-2">Request Call Back <i class="fa fa-caret-right"></i></a>
  					</div>
  				</div>
        <div class="col-md-6">
				<div class="table-img-wrap">
					<img src="<?php echo base_url('assets/front/images/table-1.png'); ?>">
				</div>
				</div>
        <?php }else{ ?>
          <div class="col-md-6">
  				<div class="table-img-wrap">
  					<img src="<?php echo base_url('assets/front/images/table-1.png'); ?>">
  				</div>
  				</div>
  				<div class="col-md-6">
  					<div class="description-table text-white">
  					<h3><?php echo $product->ProdTitle; ?> (Style#: <?php echo $product->Sku; ?>)</h3>
  					<strong>Description:</strong>
  					<span>This is a symmetrical table with a cloverleaf shaped top.
  					It is <br>  shown with inset glass but as with all of our designs many  <br>  custom options are available.</span>
  					<strong>Standard Sizes:</strong>
  					<span>S 39"w x 34"h x 35"d</span>
  					<a href="javascript_void(0)" class="btn know-more bg-white mt-2">More Info <i class="fa fa-caret-right"></i></a>
  					<a href="javascript_void(0)" class="btn know-more bg-white mt-2">Request Call Back <i class="fa fa-caret-right"></i></a>
  					</div>
  				</div>
        <?php } ?>
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
