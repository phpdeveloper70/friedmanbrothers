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
                  <h5> Friedman Login </h5>
                  <p>Some Heading will be here with some more texts here </p>
               </div>
               <div class="box-wrap-login">
                  <h6 class="box-title">Login Here</h6>
                  <?php echo $this->session->flashdata('message'); ?>
                  <?php echo $this->session->flashdata('msge'); ?>
                  <form method="post" >
                     <div class="form-group">
                        <input type="text" name="email" class="style-input" value="<?php echo set_value('email'); ?>" placeholder="Enter username or email">
                        <?php echo form_error('email'); ?>
                     </div>
                     <div class="form-group">
                        <input type="password" name="password" class="style-input" value="<?php echo set_value('password'); ?>" placeholder="Enter password">
                        <?php echo form_error('password'); ?>
                     </div>
                     <div class="form-group">
                        <label>
                        <input type="checkbox" name="check_remember"> <span class="style-bg"> Remember Me </span> </label>
                     </div>
                     <div class="form-group">
                        <input type="submit" name="login" class="style-input submit-style" value="Login Now">
                     </div>
                     <div class="register-forgot">
                        <a href="<?php echo base_url('user/register'); ?>">Register</a>
                        <a href="<?php echo base_url('user/forgot_password'); ?>" class="pull-right">Forgot Your Password</a>
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
