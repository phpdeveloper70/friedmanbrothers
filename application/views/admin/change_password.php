<!DOCTYPE html>
<html lang="en">
   <head>
     <?php $this->load->view('admin/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('admin/layout/left-side-bar'); ?>
      <!--main-container-part-->
      <div id="content">
         <!--breadcrumbs-->
         <div id="content-header">
            <div id="breadcrumb">
                <a href="<?php echo base_url('admin/dashboard'); ?>" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
                <a href="#" class="tip-bottom">Settings</a>
                <a href="#" class="current">Change Password</a>
            </div>
         </div>
         <!--End-breadcrumbs-->
         <!--Action boxes-->
         <div class="container-fluid">
           <div class="row-fluid">
             <div class="span12">
               <div class="widget-box">
                 <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                   <h5>Change Password</h5>
                 </div>
                 <div class="widget-content nopadding">

                  <form action="#" method="post" class="form-horizontal valid-form">
                    <div class="control-group">
                    <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <div class="control-group">
                      <label class="control-label">New Password :</label>
                      <div class="controls">
                        <input type="text" class="span11" name="npwd" placeholder="enter new password" value="<?php echo set_value('npwd'); ?>" >
                        <?php echo form_error('npwd'); ?>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Confirm Password :</label>
                      <div class="controls">
                        <input type="text" class="span11" name="cpwd" placeholder="enter confirm password" value="<?php echo set_value('cpwd'); ?>" >
                        <?php echo form_error('cpwd'); ?>
                      </div>
                    </div>
                    <div class="form-actions">
                      <button type="submit" name="submit_form" class="btn btn-success">Save</button>
                    </div>
                  </form>
                </div>
               </div>
             </div>
           </div>
         </div>

      </div>
      <!--end-main-container-part-->
      <?php $this->load->view('admin/layout/footer'); ?>
   </body>
</html>
