<?php //print_r($product); ?>
<!doctype html>
<html>
   <head>
      <?php $this->load->view('front/layout/head'); ?>
      <link href="<?php echo base_url('assets/front/css/jquery.exzoom.css'); ?>" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!-- Breadcrumb --->
      <div class="page-title">
         <div class="container">
            <h4>Product Detail</h4>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
         </div>
      </div>
      <!---  Main Inner Wrapper --->
      <div class="wraper-main-inner">
         <div class="container">
            <div class="row">
               <div class="col-xl-5">
                  <div class="preview-product">
                     <div class="exzoom hidden" id="exzoom">
                        <div class="exzoom_img_box">
                           <ul class='exzoom_img_ul'>
                              <li><img src="<?php echo base_url('assets/front/images/large-product.jpg'); ?>"/></li>
                              <li><img src="<?php echo base_url('assets/front/images/large-product.jpg'); ?>"/></li>
                              <li><img src="<?php echo base_url('assets/front/images/large-product.jpg'); ?>"/></li>
                           </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        <p class="exzoom_btn">
                           <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                           <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                        </p>
                     </div>
                  </div>
                  <div class="share">
                     <ul class="list-inline">
                        <li class="list-inline-item"> <i class="fa fa-share-alt"></i> <a href="#"> Social Share </a></li>
                        <li class="list-inline-item"> <i class="fa fa-print"></i> <a href="#"> Print This </a></li>
                     </ul>
                  </div>
               </div>
               <!-- Column One End -->
               <div class="col-xl-7">
                  <div class="product-details-view">
                     <div class="title-single">
                        <?php echo $product[0]->ProdTitle; ?>
                     </div>
                     <div class="sub-title">
                        Style#: <?php echo $product[0]->Sku; ?>
                     </div>
                     <div class="single-description">
                        <h6>Description:</h6>
                        <?php echo $product[0]->ProdDescription; ?><br><br>
                        <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                           <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Standard Sizes</a>
                           <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Select Frame Finish</a>
                        </div>
                        <?php $available_size = $this->front_model->get_product_size($_GET['pid']); ?>
                        <div class="tab-content" id="nav-tabContent">
                           <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="form-inner-tab">
                                 <form class="tab-form" method="post">
                                    <div class="row">
                                       <select class="size" name='size'>
                                         <?php if(count($available_size)>0){ ?>
                                          <option value="">Select Size</option>
                                          <?php foreach($available_size as $size){ ?>
                                          <?php
                                            $w = format_fractions(roundUp($size->width, 4));
                                      			$h = format_fractions(roundUp($size->height, 4));
                                            $d = ($size->depth=='')?'':format_fractions(roundUp($size->depth, 0));
                                      		 ?>
                                          <option value="<?php echo $size->id; ?>"><b><?php echo $size->size_code; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $w; ?>"w  x  <?php echo $h; ?>"h <?php echo(!empty($d))?' x '.$d.'"d':''; ?></option>
                                          <?php } ?>
                                          <option value='custom'>Custom</option>
                                          <?php } ?>
                                       </select>
                                        <span class="custom_options_data" style="width: 100%; display:none;">
                                            <select class="custom-w">
                                  						<option value="">Width</option>
                                              <?php for($i=1; $i<=50; $i++){ ?>
                                  						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                              <?php } ?>
                                  					</select>

                                						<select class="custom-w">
                                    						<option value="">Height</option>
                                                <?php for($j=1; $j<=50; $j++){ ?>
                                    						<option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                                <?php } ?>
                                					  </select>
                                            <?php if(!empty($d)){ ?>
                                						<select class="custom-w">
                                    						<option value="">Depth</option>
                                                <?php for($k=1; $k<=50; $k++){ ?>
                                    						<option value="<?php echo $k; ?>"><?php echo $k; ?></option>
                                                <?php } ?>
                                		        </select>
                                            <?php } ?>
                                        </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                        </div>
                        <!-- After login Section  --->
                        <div class="after-login">
                           <div class="quotingfor">
                              <p><strong>Quoting For:</strong> <span>Jane Poole (Jane Poole)</span></p>
                              <span class="fa fa-plus"></span>
                           </div>
                           <div class="enter-password">
                              <form method="post">
                                 <label>Enter Password to Get Net Price</label>
                                 <input type="password" name="password" placeholder="Enter Password" class="custom-m" />
                                 <input type="submit" name="submit" value="Show Now"/>
                                 <p class="retail-text"><strong class="retail">Retail: </strong><strong class="each-price"> $3,741.80 Each </strong></p>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <label><strong>Net:</strong> $1,741.80 Each</label>
                                       <select class="each-size">
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                          <option value="150">150</option>
                                          <option value="200">200</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6">
                                       <label><strong>Quantity</strong></label>
                                       <select class="each-size">
                                          <option value="50">10</option>
                                          <option value="100">100</option>
                                          <option value="150">150</option>
                                          <option value="200">200</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-12">
                                       <textarea name="addquote" placeholder="Add Notes Here. Special Requests May Require Quote Adjustments." rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                       <label>Sidemark:</label>
                                       <input type="text" name="password" placeholder="eg. Smith Residence" />
                                    </div>
                                    <div class="col-sm-6">
                                       <label>Tag:</label>
                                       <input type="text" name="password" placeholder="eg. Dining Room Mirror" />
                                    </div>
                                    <div class="col-sm-6">
                                       <input type="submit" name="save" value="Save" />
                                       <input type="submit" name="order" value="Order Now" class="reset-bg"/>
                                    </div>
                                    <div class="col-sm-6">
                                       <span class="more">More: </span>
                                       <select class="delete">
                                          <option value="50">Delete this Order</option>
                                          <option value="100">Udpate Oreder</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="show-hide-mesage">
                                          <strong>Discount: 50 (0.5)</strong>
                                          <span>Select ‘Hide Net’ to turn off net pricing display</span>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <!-- After login End --->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Row End --->
         </div>
      </div>
      <!-- End -->
      <?php $related_products = $this->front_model->get_related_products($product[0]->Sku); ?>
      <?php if(count($related_products)>0){ ?>
      <section class="may-also">
         <div class="container">
            <div class="also-like">
               <div class="title-single">You May Also Like:</div>
               <div class="row">
                 <?php //print_r($related_products); ?>
                  <?php foreach($related_products as $r_l){ ?>
                  <?php $r_pro = $this->front_model->get_product_by_sku($r_l->RelatedSku); ?>
                  <?php if(count($r_pro)>0){ ?>

                  <div class="col-lg-2 col-md-4">
                    <a href="<?php echo base_url('product-detail/'.create_slug($r_pro[0]->ProdTitle.$r_pro[0]->Sku).'?pid='.$r_pro[0]->id); ?>" >
                     <div class="img-like-wrap">
                        <img src="<?php echo base_url('assets/front/images/royal-prince.jpg'); ?>"/>
                     </div>
                     <div class="short-desc">
                        <strong><?php echo $r_pro[0]->ProdTitle; ?></strong>
                        <span>Style #<?php echo $r_pro[0]->Sku; ?></span>
                     </div>
                  </div>
                <?php } ?>
                <?php } ?>

               </div>
            </div>
         </div>
      </section>
      <?php } ?>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
      <script src="<?php echo base_url('assets/front/js/jquery.exzoom.js'); ?>"></script>
      <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
      <script type="text/javascript">
         $('.preview-product').imagesLoaded( function() {
         $("#exzoom").exzoom({
             autoPlay: false,
         });
         $("#exzoom").removeClass('hidden')
         });

         $(document).ready(function(){
            $('.size').change(function(){
                var s_val = $(this).val();
                if(s_val=='custom')
                {
                    $('.custom_options_data').css('display','flex');
                }
                else
                {
                    $('.custom_options_data').hide();
                }
            });
         });
      </script>
   </body>
</html>
$v_html = '<iframe width="480" height="270" src="https://www.youtube.com/embed/'".$video_details['yt_id']."'?feature=oembed" frameborder="0" gesture="media" allowfullscreen></iframe>';
