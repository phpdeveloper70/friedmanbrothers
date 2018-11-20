<!DOCTYPE html>
<html lang="en">
   <head>
     <?php $this->load->view('admin/layout/head');?>
   </head>
   <body>
      <?php $this->load->view('admin/layout/left-side-bar'); ?>
      <!--main-container-part-->
      <div id="content">
         <!--breadcrumbs-->
         <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
         </div>
         <!--End-breadcrumbs-->
         <!--Action boxes-->
         <div class="container-fluid">
            <div class="quick-actions_homepage">
               <ul class="quick-actions">
                  <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i><span class="label label-important"><?php echo $num_results?></span>Total User </a> </li>
                <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Total Product </a> </li>
                 <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i><span class="label label-success"><?php echo $cat_results?></span> Total Categories</a> </li>

               </ul>

            </div>


      </div>
      <!--end-main-container-part-->
      <!--Footer-part-->
      <div class="row-fluid">
         <div id="footer" class="span12"> 2018 &copy; <b>Graphics Merlin Studio Pvt Ltd</b>.</div>
      </div>
      <!--end-Footer-part-->
      <script src="<?php echo base_url('assets/admin/js/excanvas.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.ui.custom.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.flot.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.peity.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/fullcalendar.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.dashboard.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.gritter.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.interface.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.chat.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.validate.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.form_validation.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.wizard.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.uniform.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/select2.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.popover.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.tables.js'); ?>"></script>
   </body>
</html>
