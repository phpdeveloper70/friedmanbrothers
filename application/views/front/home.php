<!doctype html>
<html>
   <head>
   <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!-- Side bar --->
      <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="cart-item-wraper">
            <div class="shopping-cart-header">
               <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
               <div class="shopping-cart-total">
                  <span class="lighter-text">Total:</span>
                  <span class="main-color-text">$2,229.97</span>
               </div>
            </div>
            <ul>
               <!-- First Item -->
               <li>
                  <div class="photo">
                     <img src="<?php echo base_url('assets/front/'); ?>images/product-1.jpg">
                  </div>
                  <div class="item-details">
                     <strong>Tables</strong>
                     <span>$849.99</span>
                     <span> Qty: 01</span>
                     <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                  </div>
               </li>
               <!-- First Item  End-->
               <!-- First Item -->
               <li>
                  <div class="photo">
                     <img src="<?php echo base_url('assets/front/'); ?>images/product-1.jpg">
                  </div>
                  <div class="item-details">
                     <strong>Tables</strong>
                     <span>$849.99</span>
                     <span>Qty: 01</span>
                     <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                  </div>
               </li>
               <!-- First Item  End-->
            </ul>
            <div class="checkoutbtn">
               <a href="#" class="btn side-checkout">Checkout</a>
            </div>
         </div>
      </div>
      <!-- Sidebar --->
      <!-- Slider  --->
      <div class="main-slider">
         <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
               <li data-target="#demo" data-slide-to="0" class="active"></li>
               <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="<?php echo base_url('assets/front/'); ?>images/slide-1.jpg">
                  <div class="container">
                     <div class="carousel-caption">
                        <h3>Shop MOdern Mirrors</h3>
                        <p>Our Collection of contemporary mirrors breathe life into the mirror home</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="<?php echo base_url('assets/front/'); ?>images/slide-1.jpg">
                  <div class="container">
                     <div class="carousel-caption">
                        <h3>Shop MOdern Mirrors</h3>
                        <p>Our Collection of contemporary mirrors breathe life into the mirror home</p>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
         </div>
      </div>
      <section class="feature">
         <div class="container">
            <div class="heading-section">
               <h1>Featured Heading here</h1>
               <p>Friedman Brothers has been the World's premier creator of
                  custom handcrafted <br/>decorative wall art for elegant interior design
               </p>
            </div>
            <div class="icon-box">
               <div class="row">
                  <div class="col-md-6  col-lg-3">
                     <div class="icon-wraper">
                        <div class="icon-left">
                           <img src="<?php echo base_url('assets/front/'); ?>images/icon-1.jpg"/>
                        </div>
                        <div class="icon-text">
                           <h5>Free Shipping</h5>
                           <p>Free shipping on all US order</p>
                        </div>
                     </div>
                  </div>
                  <!-- Col -->
                  <div class="col-md-6  col-lg-3">
                     <div class="icon-wraper">
                        <div class="icon-left">
                           <img src="<?php echo base_url('assets/front/'); ?>images/icon-2.jpg"/>
                        </div>
                        <div class="icon-text">
                           <h5>Online SuppoRt 24/7</h5>
                           <p>Support Online 24 hours a day</p>
                        </div>
                     </div>
                  </div>
                  <!-- Col -->
                  <div class="col-md-6  col-lg-3">
                     <div class="icon-wraper">
                        <div class="icon-left">
                           <img src="<?php echo base_url('assets/front/'); ?>images/icon-3.jpg"/>
                        </div>
                        <div class="icon-text">
                           <h5>Money Return</h5>
                           <p>Back Guarantee Under 7 Days</p>
                        </div>
                     </div>
                  </div>
                  <!-- Col -->
                  <div class="col-md-6  col-lg-3">
                     <div class="icon-wraper">
                        <div class="icon-left">
                           <img src="<?php echo base_url('assets/front/'); ?>images/icon-4.jpg"/>
                        </div>
                        <div class="icon-text">
                           <h5>Gift Coupons</h5>
                           <p>Gift Coupons over $120</p>
                        </div>
                     </div>
                  </div>
                  <!-- Col -->
               </div>
            </div>
            <!-- Icon End --->
            <!--- two img -->
            <div class="two-img">
               <div class="row">
                  <div class="col-md-4">
                     <div class="box-img">
                        <img src="<?php echo base_url('assets/front/'); ?>images/left-img.jpg">
                        <div class="overlay-text">
                           <h3>Mirrors</h3>
                           <p>Check Out Full Collection of Mirrors</p>
                           <a href="<?php echo base_url('products/mirrors?deptid=2'); ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="box-img">
                        <img src="<?php echo base_url('assets/front/'); ?>images/right-img.jpg">
                        <div class="overlay-text">
                           <h3>Comices Designs</h3>
                           <p>Check Out Full Collection of Comices</p>
                           <a href="<?php echo base_url('products/cornices?deptid=5'); ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Two --->
            <!-- Four Columns ---->
            <div class="four-cols">
               <div class="row">
                  <div class="col-md-6  col-lg-3">
                     <div class="box-four">
                        <img src="<?php echo base_url('assets/front/'); ?>images/product-1.jpg">
                        <div class="overlay-text">
                           <h3>Tables</h3>
                           <p>Check Out table Collection</p>
                           <a href="<?php echo base_url('products/tables?deptid=4'); ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <!-- Column One -->
                  <div class="col-md-6  col-lg-3">
                     <div class="box-four">
                        <img src="<?php echo base_url('assets/front/'); ?>images/hardware.jpg">
                        <div class="overlay-text">
                           <h3>Hardware</h3>
                           <p>Check Out hardware Collection</p>
                           <a href="<?php echo base_url('products/window-hardware-window-hardware?deptid=8&cat_id=1192'); ?>"><i class="fa fa-angle-right"></i></a>
                          
                        </div>
                     </div>
                  </div>
                  <!-- Column One -->
                  <div class="col-md-6  col-lg-3">
                     <div class="box-four">
                        <img src="<?php echo base_url('assets/front/'); ?>images/scones.jpg">
                        <div class="overlay-text">
                           <h3>Scones</h3>
                           <p>Check Out Scones Collection</p>
                           <a href="<?php echo base_url('products/sconces?deptid=3'); ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <!-- Column One -->
                  <div class="col-md-6  col-lg-3">
                     <div class="box-four">
                        <img src="<?php echo base_url('assets/front/'); ?>images/brackets.jpg">
                        <div class="overlay-text">
                           <h3>Brackets</h3>
                           <p>Check Out Brackets Collection</p>
                           <a href="<?php echo base_url('products/more-brackets?deptid=8&cat_id=1068'); ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <!-- Column One -->
               </div>
            </div>
            <!-- End Four -->
         </div>
      </section>
      <section class="most-selling">
         <div class="container">
            <div class="heading-section">
               <h1>Most Selling Products</h1>
               <p>Friedman Brothers has been the World's premier creator of custom handcrafted <br>
                  decorative wall art for elegant interior design
               </p>
            </div>
            <div class="product-wrapper">
               <div class="row">

                  <?php foreach($result as $row){?>
                  <div class="col-md-6  col-lg-3">
                     <div class="main-box">
                        <div class="img-wrap">
                           <img src="<?php echo base_url('assets/front/'); ?>images/most-3.jpg">
                           <div class="hoverbox">
                              <a href="#" class="view-prod">View Product</a>
                              <a href="#" class="wishilist"><i class="fa fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="description">
                           <span><?php echo $row->ProdTitle ?></span>
                           <small>Style#: <?php echo $row->Sku?></small>
                        </div>
                     </div>
                  </div>
               <?php }?>
                  <!-- Column-1 -->
                 
                  <!-- Column-1 -->
              
                  <!-- Column-1 -->
                
                  <!-- Column-1 -->
              
                  <!-- Column-1 -->
                
                  <!-- Column-1 -->
              
                  <!-- Column-1 -->
               
                  <!-- Column-1 -->
               </div>
               <!-- Row End --->
            </div>
            <!-- Product Wrapper --->
            <!-- About Brothers -->
            <div class="about-brother">
               <h2>About Friedman Brothers</h2>
               <p>Since 1903, Friedman Brothers has been the World's premier creator of custom handcrafted
                  decorative wall art for elegant interior design settings. Friedman Brothers products are
                  found in some of the most prestigious locations around the World, including the halls of The
                  Vatican and The White House. From private residences to World-class hotels,
                  interior designers use Friedman products to enhance the prestige and elegance of their projects.
               </p>
            </div>
         </div>
      </section>
      <section class="testimonials">
         <div class="container">
            <div class="heading-section">
               <h1>Client Testimonials</h1>
            </div>
            <div class="owl-carousel owl-testimonial">
               <div class="item">
                  <div class="client-quotes">
                     <p>It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                        of letters, as opposed to using 'Content here.
                     </p>
                  </div>
                  <div class="author-info">
                     <div class="client-pic">
                        <img src="<?php echo base_url('assets/front/'); ?>images/client-pic.jpg">
                     </div>
                     <div class="client-name">
                        <strong>Ryan Collins</strong>
                        <span>Friedman Customer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="client-quotes">
                     <p>It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                        of letters, as opposed to using 'Content here.
                     </p>
                  </div>
                  <div class="author-info">
                     <div class="client-pic">
                        <img src="<?php echo base_url('assets/front/'); ?>images/client-pic.jpg">
                     </div>
                     <div class="client-name">
                        <strong>Ryan Collins</strong>
                        <span>Friedman Customer</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>    
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
