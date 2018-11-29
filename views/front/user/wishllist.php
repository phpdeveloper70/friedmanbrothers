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
	<img src="images/product-1.jpg">
	</div>
	<div class="item-details">
	<strong>Tables</strong>
	<span>$849.99</span>	
	<span> Qty: 01</span>	
	<a href="javascript:void(0)"><i class="fa fa-trash"></i></a>	
	</div>
	</li> <!-- First Item  End-->
	
		<!-- First Item -->
	<li>
	<div class="photo">
	<img src="images/product-1.jpg">
	</div>
	<div class="item-details">
	<strong>Tables</strong>
	<span>$849.99</span>	
	<span>Qty: 01</span>	
	<a href="javascript:void(0)"><i class="fa fa-trash"></i></a>	
	</div>
	</li> <!-- First Item  End-->
	
	</ul>
	
	<div class="checkoutbtn">
		<a href="#" class="btn side-checkout">Checkout</a>
	</div>
	
  </div>
  
</div>
<div class="page-title">
	<div class="container">
		<h4>Wishlist</h4>
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
	  </ol>
	</div>
</div>

<!---  Main Inner Wrapper --->
<div class="wraper-main-inner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wishlist">
				<div class="wish-wraper table-responsive">
					<table class="table table-bordered text-center">
						<thead>
						  <tr>
							<th>Image</th>
							<th>Title</th>
							<th>Style</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
						 <!-- Column-1 -->
                           <?php if(count($WISHLIST)>0){ ?>
                           <?php foreach($WISHLIST as $product){ ?>
						  <tr>
							<td><a href="<?php echo base_url('product-detail/'.create_slug($product->ProdTitle.$product->Sku).'?pid='.$product->id); ?>">    
							 <!-- <img src="<?php echo base_url('assets/front/images/most-3.jpg'); ?>"> -->
                              <?php $default_r_img = $this->front_model->get_default_image($product->id);
                                   if(count($default_r_img)>0){
                                   $imgpath = base_url().choose_image_size($default_r_img[0]->img_path,"thumb");
                                   $large_image = base_url().choose_image_size($default_r_img[0]->img_path,"large");
                                 }else{ $large_image = ''; }
                             ?>
                           <img src="<?php echo $imgpath?>">


							</a></td>
							<td> <?php echo $product->ProdTitle; ?></td>
							<td>Style#:<?php echo $product->Sku; ?></td>
							<td>
							<a href="<?php echo base_url()?>User/remove_wishlist/<?php echo $product->id; ?>" id="delete-wish" class="wish-trash"><i class="fa fa-trash"></i></a></td>
						  </tr>
						<?php } }else{ ?>
                        <div class='data-not-found col-md-6  col-lg-6'>There are no item in this Wishlist.</div>
                         <?php } ?>
						  
						</tbody>
					  </table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->
<footer>
   <?php $this->load->view('front/layout/footer'); ?>
	</footer>	
	



<a href="#" id="scroll" style="display: none;"><span>

<!-- Javascript --->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
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
</body>
</html>