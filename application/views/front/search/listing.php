<!doctype html>
<html>
   <?php $this->load->view('front/layout/head'); ?>
<body>
 <?php $this->load->view('front/layout/header'); ?>
<!-- Side bar --->


<!-- Breadcrumb --->
<div class="page-title">
   <div class="container">
      <h4>Product Listing</h4>
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
     </ol>
   </div>
</div>
<!---  Main Inner Wrapper --->
<div class="wraper-main-inner">
   <div class="container">
      <div class="row">
   
         
         <div class="col-lg-9 col-md-8">
               <div class="listing-product">
  
         
               <div class="product-wrapper">
      <div class="row">

           <?php if(count($productdata)>0){ ?>
                           <?php foreach($productdata as $product){ ?>
         <div class="col-md-4  col-lg-4">
            <div class="main-box">
               <div class="img-wrap">
                  <img src="<?php echo base_url('assets/front/images/most-3.jpg'); ?>">
                  <div class="hoverbox">
                     <a data-toggle="modal" data-target="#exampleModalCenter" class="view-prod">View Product</a>
                     <a href="#" class="wishilist"><i class="fa fa-heart"></i></a>
                  </div>
               </div>
               
               <div class="description">
                  <a href="internal-product.html"><span><?php echo $product->ProdTitle; ?></span></a>
                  <small>Style#: <?php echo $product->Sku; ?></small>
               </div>
               
            </div>
         </div> <!-- Column-1 -->
       <?php } }else{ ?>
                        <div class='data-not-found col-md-6  col-lg-6'>There are no products to list in this category.</div>   
                         <?php } ?>
        </div> <!-- Row End --->
      
      <div class="load-more-btn">
         <a href="#">Load More</a>
      </div>
      
   </div> 
</div>
            
         </div>
      </div> <!-- Row End ---> 
   </div>
</div>
<!-- End -->
<footer>
<div class="footer">
         <div class="container">
            <div class="row">


               <div class="col-md-6  col-lg-3">
                  <div class="footer-title">
                     <h4>Site Menu</h4>
                     <div class="footer-content">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about-us.html">About Us</a></li>
                           <li><a href="product-listing.html">Mirrors </a></li>
                           <li><a href="#">Tables </a></li>
                           <li><a href="#">Sconcess  </a></li>
                           <li><a href="#">Cornices   </a></li>
                           <li><a href="#">More Products   </a></li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="col-md-6  col-lg-3">
                  <div class="footer-title">
                     <h4>Our Categories</h4>
                     <div class="footer-content">
                        <ul>
                           <li><a href="#">Royal Mirror</a></li>
                           <li><a href="#">National Mirror</a></li>
                           <li><a href="#">Classic Mirror </a></li>
                           <li><a href="#">Federal Mirror </a></li>
                           <li><a href="#">Casual Mirror  </a></li>
                           <li><a href="#">Modern Mirror   </a></li>
                           <li><a href="#">Archive Mirror  </a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               
                <div class="col-md-6  col-lg-3">
                  <div class="footer-title">
                          <h4>About Company</h4>
                     <div class="footer-content text-btm">
                     <p>Some Contact Us text will  be here with email addresses 
                     and otehr contact informaiton and details. Some Contact Us text.</p>
                     <div class="contact-btm">
                     <a href="#" class="fooPhone"><i class="fa fa-phone"></i> +91-11-12345678</a>
                     <a href="#" class="fooMail"><i class="fa fa-envelope"></i> info@friedmanbrothers.com</a>
                     </div>
                     <div class="social-btm">
                     <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                     <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                     <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                     <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                     
                     </div>
                     
                     </div>
                  </div>
               </div>

               <div class="col-md-6  col-lg-3">
                  <div class="footer-title">
                     <h4>News and Updates</h4>
                           
                     <div class="footer-content">
                        <form class="newsletter" method="post">
                           <div class="form-group">
                           <label>Join to Receive Updates on Promotions</label>
                           <input type="text" name="newletter" placeholder="Enter Your Email Address" />
                           <input type="submit" name="submit" value="Signup For Newsletter" />
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>   
   
   <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
               <div class="btm-copy">
                     <p>Copyrights ©  Friedman Brothers 2018. All Rights Reserved.</p>
                     <ul class="list-inline">
                     <li class="list-inline-item"><a href="#">Contact Us</a></li>
                     <li class="list-inline-item"><a href="#">Catalogs</a></li>
                     <li class="list-inline-item"><a href="#">FAQ</a></li>
                     </ul>
                     </div>
               </div>
               
               <div class="col-md-4">
                  <div class="payment-mode-icon">
                     <ul>
                        <li><a href="#"><img src="images/visa.jpg"></a></li>
                        <li><a href="#"><img src="images/master-card.jpg"></a></li>
                        <li><a href="#"><img src="images/american.jpg"></a></li>
                        <li><a href="#"><img src="images/rupay.jpg"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
          </div>
      </div>


      
      
      <!-- Modal  Quick View -->
      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Product Quick View</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
     <div class="control">
     <a href="javascript_void(0)" class="prev-icon"><i class="fa fa-angle-left"></i></a>
     <a href="javascript_void(0)" class="next-icon"><i class="fa fa-angle-right"></i></a>
     </div>
     
      <div class="row">
         <div class="col-xl-5">
                  <div class="preview-product">
         <div class="exzoom hidden" id="exzoom">
            <div class="exzoom_img_box">
               <ul class='exzoom_img_ul'>
                  <li><img src="images/large-product.jpg"/></li>
                    <li><img src="images/large-product.jpg"/></li>
                     <li><img src="images/large-product.jpg"/></li>
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
         </div> <!-- Column One End -->
         
         <div class="col-xl-7">
            <div class="product-details-view">
               <div class="title-single">
                  Berkeley Square
               </div>
               <div class="sub-title">
                  Style#: 6995
               </div>
               
               <div class="single-description">
                  <h6>Description:</h6>
                  <ul class="desc-point">
                  <li><i class="fa fa-angle-right"></i> <span>Delightfully elegant Transitional Square Mirror. </span></li>
                  <li><i class="fa fa-angle-right"></i> <span>Based on a filigree lattice of curled feathers. </span></li>
                  <li><i class="fa fa-angle-right"></i> <span>Attractive highlights and shadows are created when set near to direct lighting from either side, top or opposite at an angle. </span></li>
                  </ul>
                  <h6>Standard Size:</h6>
                  <form method="post">
                  <select name="size">
                  <option value="0">S 36"w x 36"h </option>
                  <option value="0">M 38"w x 38"h </option>
                  <option value="0">L 40"w x 40"h </option>
                  </select>
                  </form>
                  
                  <h6>SELECT FRAME FINISH:</h6>
                  
                  <ul class="list-inline frame-list">
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                     <li class="list-inline-item"><img src="images/thumb-icon.jpg"/></li>
                  </ul>
                  
                  <div class="get-quote">
                  <a href="">Get quote & More Info</a>
                  </div>
                  
                  <div class="also-like">
                     <div class="title-single">You May Also Like:</div>
                     
                     <div class="row">
                     <div class="col-md-4">
                        <div class="img-like-wrap">
                           <img src="images/royal-prince.jpg"/>
                        </div>
                        
                        <div class="short-desc">
                        <strong>The Royal Prince </strong>
                        <span>Style #6887</span>
                        </div>
                        
                     </div>
                     <div class="col-md-4">
                        <div class="img-like-wrap">
                           <img src="images/royal-prince2.jpg"/>
                        </div>
                        <div class="short-desc">
                        <strong>The Royal Prince </strong>
                        <span>Style #6887</span>
                        </div>
                        
                     </div>
                     <div class="col-md-4">
                        <div class="img-like-wrap">
                           <img src="images/royal-prince3.jpg"/>
                        </div>
                        
                        <div class="short-desc">
                        <strong>The Royal Prince </strong>
                        <span>Style #6887</span>
                        </div>
                     </div>
                     </div>
                     
                  </div>
                  
               </div>
               
            </div>
         </div>
         
      </div> <!-- Row End --->
      </div>

    </div>
  </div>
</div>




      
<a href="#" id="scroll" style="display: none;"><span>

<!-- Javascript --->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.exzoom.js"></script>
 <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main").style.marginLeft = "320px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.5)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>


<script>
$('.owl-testimonial').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
});


// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

</script>

<script type="text/javascript">
    $('.preview-product').imagesLoaded( function() {
  $("#exzoom").exzoom({
        autoPlay: false,
    });
  $("#exzoom").removeClass('hidden')
});
</script>
</body>

</html>

