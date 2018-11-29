
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
            <h4> Collection</h4>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page"> Collection</li>
            </ol>
         </div>
      </div>
      <!---  Main Inner Wrapper --->
      <div class="wraper-main-inner">
         <div class="container">
            <div class="row">
             
               <!-- Left Column --->
               <div class="col-lg-9 col-md-8">
                  <div class="listing-product">
                    
                     <div class="product-wrapper">
                        <div class="row">
                           <!-- Column-1 -->
                           <?php if(count($WISHLIST)>0){ ?>
                           <?php foreach($WISHLIST as $product){ ?>
                           <div class="col-md-4  col-lg-4">
                              <div class="main-box">
                                 <div class="img-wrap">
                                    <img src="<?php echo base_url('assets/front/images/most-3.jpg'); ?>">
                                    <div class="hoverbox">
                                       <a href="<?php echo base_url('product-detail/'.create_slug($product->ProdTitle.$product->Sku).'?pid='.$product->id); ?>" class="view-prod">View Product</a>

                                     
                                    <a href="#" class="wishilist" onclick= "add_wish('<?php echo $product->id?>')"><i class="fa fa-heart"></i></a>  
                                       </div>


                                 </div>
                                 <div class="description">
                                   <a href="<?php echo base_url('product-detail/'.create_slug($product->ProdTitle.$product->Sku).'?pid='.$product->id); ?>">
                                    <span><?php echo $product->ProdTitle; ?></span>
                                    <small>Style#: <?php echo $product->Sku; ?></small>
                                  </a>
                                 </div>
                              </div>
                           </div>
                         <?php } }else{ ?>
                        <div class='data-not-found col-md-6  col-lg-6'>There are no products to list in this category.</div>
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


