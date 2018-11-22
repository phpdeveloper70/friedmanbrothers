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
      		<li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
      		<li class="breadcrumb-item active" aria-current="page">FAQ's</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="container">

			<div class="accordion indicator-plus-before round-indicator" id="accordionH" aria-multiselectable="true">
			<div class="faq-wrap">
				<div class="faq-item">
				<?php foreach($result as $row){ ?>
				<div class="card m-b-0">
					<div class="card-header collapsed" role="tab" id="headingOneH" href="#collapse<?php echo $row->id;?>" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseOneH">
						<a class="card-title"><?php echo $row->title?></a>
					</div>
					<div class="collapse" id="collapse<?php echo $row->id;?>" role="tabpanel" aria-labelledby="headingOneH" style="">
						<div class="card-body">
							<?php echo $row->description ?>
						</div>
					</div>
				
				</div>
			<?php }?>
				</div>
				</div> <!-- Row --->

			</div>
</div>
</div>

      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
