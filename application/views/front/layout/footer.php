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
