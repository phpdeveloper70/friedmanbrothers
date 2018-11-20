<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo ADMINTITLE; ?></title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" />
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap-responsive.min.css'); ?>" />
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/matrix-login.css'); ?>" />
      <link href="<?php echo base_url('assets/admin/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
      <style> .has-error {font-weight: bold;  color: red;}
      .logo{ background-color: #fff;
    padding: 14px;
    border-radius: 15px; }
      </style>
   </head>
   <body>
      <div id="loginbox">
         <?php $attributes = array('class' => 'form-vertical', 'id' => 'loginform', 'method' => 'post'); ?>
         <?php echo form_open('admin/login',$attributes); ?>
            <div class="control-group normal_text">
               <h3><img src="<?php echo base_url('assets/admin/img/logo.png'); ?>" alt="Logo" class='logo'/></h3>
               <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <div class="control-group">
               <div class="controls">
                  <div class="main_input_box">
                     <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>"/>
                     <?php echo form_error('email'); ?>
                  </div>
               </div>
            </div>
            <div class="control-group">
               <div class="controls">
                  <div class="main_input_box">
                     <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
                     <?php echo form_error('password'); ?>
                  </div>
               </div>
            </div>
            <div class="form-actions">
               <?php /*<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>*/ ?>
               <span class="pull-right"><button type="submit" class="btn btn-success" name="login-btn"/> Login</button></span>
            </div>
         <?php echo form_close(); ?>
         <form id="recoverform" action="#" class="form-vertical">
            <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
            <div class="controls">
               <div class="main_input_box">
                  <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
               </div>
            </div>
            <div class="form-actions">
               <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
               <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
            </div>
         </form>
      </div>
      <script src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/admin/js/matrix.login.js'); ?>"></script>
   </body>
</html>
