<!doctype html>
<html>
   <head>
      <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!---  Main Inner Wrapper --->
      <div class="wraper-main-inner login-main-wrap">
         <div class="container">
            <div class="wrap-login-section">
               <div class="login-title">
                  <h5> Friedman Forgot Password </h5>
                  <p>Some Heading will be here with some more texts here </p>
               </div>
               <div class="box-wrap-login">
                  <h6 class="box-title">Forgot Your Password</h6>
                  <?php echo $this->session->flashdata('msg'); ?>
                  <form action="<?php echo base_url("User/forgot_password")?>" method="post" class="form-signin">
                      <div class="form-group">
                        <input type="text" name="firstname" class="style-input" value="<?php echo set_value('firstname'); ?>" placeholder="Enter firstname">
                        <?php echo form_error('firstname'); ?>
                     </div>
                      <div class="form-group">
                        <input type="text" name="lastname" class="style-input" value="<?php echo set_value('lastname'); ?>" placeholder="Enter lastname">
                        <?php echo form_error('lastname'); ?>
                     </div>
                     <div class="form-group">
                        <input type="text" name="email" class="style-input" value="<?php echo set_value('email'); ?>" placeholder="Enter email">
                        <?php echo form_error('email'); ?>
                     </div>
                    
                     
                     <div class="form-group">
                        <input type="submit" name="forgot_password" class="style-input submit-style" value="Reset">
                     </div>
                     <div class="register-forgot">
                        <a href="<?php echo base_url('user/register'); ?>">Register</a>
                        <a href="<?php echo base_url('user/login'); ?>" class="pull-right">Login</a>
                     </div>
                     <a href="<?php echo base_url(); ?>" class="backtohome"><i class="fa fa-long-arrow-left"></i> Back to Home Page?</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
<script class="example">

$(document).ready(function(){

   $('.form-signin').parsley();

});

</script>
