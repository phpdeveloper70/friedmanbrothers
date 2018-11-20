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
      <div class="wraper-main-inner">
         <div class="container">
            <div class="row">
               <!-- Left Column --->
               <div class="col-lg-12 col-md-8">
                  <div class="listing-product">
                     <div class="about-brother">
                        <h2><?php echo $category[0]->CatTitle; ?></h2>
                        <p><?php echo $category[0]->CatDescription; ?></p>
                     </div>
                     <div class="product-wrapper">
                        <div class="row">
                           <!-- Column-1 -->
                           <?php foreach($productdata as $product){ ?>
                           <div class="col-md-3  col-lg-3">
                              <div class="main-box">
                                 <div class="img-wrap">
                                    <img src="<?php echo base_url('assets/front/images/most-3.jpg'); ?>">
                                    <div class="hoverbox">
                                       <a href="#" class="view-prod">View Product</a>
                                       <a href="#" class="wishilist"><i class="fa fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="description">
                                    <span><?php echo $product->ProdTitle; ?></span>
                                    <small>Style#: <?php echo $product->Sku; ?></small>
                                 </div>
                              </div>
                           </div>
                         <?php } ?>
                           <!-- Column-1 -->
                        </div>
                        <!-- Row End --->
                        <!--
                        <div class="load-more-btn">
                           <a href="#">Load More</a>
                        </div>
                        -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Row End --->
         </div>
      </div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
