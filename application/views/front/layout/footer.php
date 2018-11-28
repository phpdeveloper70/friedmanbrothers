<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-6  col-lg-3">
               <div class="footer-title">
                  <h4>Site Menu</h4>
                  <div class="footer-content">
                     <ul>
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                        <li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
                        <li><a href="<?php echo base_url('user/register'); ?>">Register</a></li>
                        <li><a href="<?php echo base_url('support'); ?>">Support</a></li>
                        <li><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6  col-lg-3">
               <div class="footer-title">
                  <h4>Our Categories</h4>
                  <div class="footer-content">
                     <ul>
                        <?php $top_cattegory = $this->front_model->get_top_category(); ?>
                        <?php foreach($top_cattegory as $top_cat){ ?>
                        <li>
                           <a href="<?php echo base_url('products/'.create_slug($top_cat->DeptTitle) .'?deptid='.$top_cat->id); ?>"><?php echo $top_cat->DeptTitle; ?></a>
                        </li>
                      <?php } ?>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6  col-lg-3">
               <div class="footer-title">
                  <h4>About Company</h4>
                  <div class="footer-content text-btm">
                     <p>Some Contact Us text will  be here with email addresses
                        and otehr contact informaiton and details. Some Contact Us text.
                     </p>
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
                     <form class="newsletter" action="<?php echo base_url('Welcome/index'); ?>"" method="post" >
                        <div class="form-group">
                          <?php if($this->session->flashdata('msg')): ?>
                              <p><center><?php echo $this->session->flashdata('msg'); ?></center></p>
                          <?php endif; ?>
                           <label>Join to Receive Updates on Promotions</label>

                           <input type="text" name="email" required  placeholder="Enter Your Email Address" />

                           <input type="submit" name="submit"  value="Signup For Newsletter" />
                        </div>
                     </form>
                  </div>
                  <?php echo validation_errors(); ?>
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
                  <li class="list-inline-item"><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
                  <li class="list-inline-item"><a href="<?php echo base_url('catalogs'); ?>">Catalogs</a></li>
                  <li class="list-inline-item"><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-4">
            <div class="payment-mode-icon">
               <ul>
                  <li><a href="#"><img src="<?php echo base_url('assets/front/'); ?>images/visa.jpg"></a></li>
                  <li><a href="#"><img src="<?php echo base_url('assets/front/'); ?>images/master-card.jpg"></a></li>
                  <li><a href="#"><img src="<?php echo base_url('assets/front/'); ?>images/american.jpg"></a></li>
                  <li><a href="#"><img src="<?php echo base_url('assets/front/'); ?>images/rupay.jpg"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<a href="#" id="scroll" style="display: none;"><span>
<!-- Javascript --->
<script src="<?php echo base_url('assets/front/'); ?>js/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url('assets/front/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/front/'); ?>js/popper.min.js"></script>
<script src="<?php echo base_url('assets/front/'); ?>js/owl.carousel.min.js"></script>
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
