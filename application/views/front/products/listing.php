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
               <div class="col-lg-3 col-md-4">
                   <div class="search-section">
                     <h3 class="title-left">Search by Style</h3>
                     <form class="search-box mb-2" method="post"  action="<?php echo base_url('Products/search');?>">
                        <input class="form-control" type="search"  name="search_data" aria-label="Search">
                        <button class="btn" name="search" type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <!-- Shop By Categories --->
                  <div class="categories-menu">
                     <h3 class="title-left">Shop By Categories</h3>
                     <div id="accordion" class="category-link">
                       <?php $category_data = $this->front_model->get_department_category($department[0]->id); ?>
                       <?php if(count($category_data)>0){ ?>
                       <?php $left_cat_array = get_left_category($category_data,$department[0]->DeptTitle); ?>
                       <?php $j=0; foreach($left_cat_array as $d_key => $d_val_array){ $j++; ?>
                        <div class="card">
                           <div class="card-header active" id="headingOne">
                              <h5 class="mb-0">
                                 <a class="#" data-toggle="collapse" data-target="#collapseOne<?php echo $j; ?>" aria-expanded="true" aria-controls="collapseOne">
                                 <?php echo $d_key; ?> <span class="fa fa-angle-down"></span>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseOne<?php echo $j; ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                 <ul class="list-group">
                                    <?php foreach($d_val_array as $cat_data){ ?>
                                    <?php $products_count = $this->front_model->get_product_list($_GET['deptid'],$cat_data[0]); ?>
                                    <li class="list-group-item"><a href="<?php echo base_url('products/'.create_slug($d_key.'-'.$cat_data[1]).'?deptid='.$_GET['deptid'].'&cat_id='.$cat_data[0]); ?>"><?php echo $cat_data[1]; ?> (<?php echo count($products_count); ?>)</a></li>
                                    <?php } ?>
                                 </ul>
                              </div>
                           </div>
                        </div>

                      <?php } } ?>

                     </div>
                  </div>
                  <!-- Category Wraper -->
               </div>
               <!-- Left Column --->
               <div class="col-lg-9 col-md-8">
                  <div class="listing-product">
                     <div class="about-brother">
                        <h2><?php echo $category[0]->CatTitle; ?></h2>
                        <p><?php echo $category[0]->CatDescription; ?></p>
                     </div>
                     <div class="product-wrapper">
                        <div class="row">
                           <!-- Column-1 -->
                           <?php if(count($productdata)>0){ ?>
                           <?php foreach($productdata as $product){ ?>
                           <div class="col-md-4  col-lg-4">
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
