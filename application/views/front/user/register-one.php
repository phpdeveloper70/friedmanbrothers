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
                  <h5> Register Now </h5>
                  <p>Create your account. It's free &amp; only take a minute </p>
               </div>
               <div class="box-wrap-login register-reset-brd">
                  <form method="post">
                     <div class="form-group">
                        <input type="text" name="username" class="style-input required" value="<?php echo set_value('username'); ?>" placeholder="Username">
                        <?php echo form_error('username'); ?>
                     </div>
                     <div class="form-group reset-mbile-margin">
                        <div class="row">
                           <div class="col-sm-6 mb-view-15">
                              <input type="text" name="fname" class="style-input required" placeholder="First Name" value="<?php echo set_value('fname'); ?>">
                           </div>
                           <div class="col-sm-6 mb-view-15">
                              <input type="text" name="lname" class="style-input required" placeholder="Last Name" value="<?php echo set_value('lname'); ?>">
                           </div>
                           <?php echo form_error('fname'); ?>
                           <?php echo form_error('lname'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group">
                        <input type="email" name="email" class="style-input required" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email'); ?>
                     </div>
                     <div class="form-group reset-mbile-margin">
                        <div class="row">
                           <div class="col-sm-6 mb-view-15">
                              <input type="password" name="pwd" class="style-input required" placeholder="Password" value="<?php echo set_value('pwd'); ?>">
                           </div>
                           <div class="col-sm-6 mb-view-15">
                              <input type="password" name="cpwd" class="style-input required" placeholder="Confirm Password" value="<?php echo set_value('cpwd'); ?>">
                           </div>
                           <?php echo form_error('pwd'); ?>
                           <?php echo form_error('cpwd'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group">
                        <input type="submit" name="register-step-1" class="style-input submit-style" value="Next Step">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
