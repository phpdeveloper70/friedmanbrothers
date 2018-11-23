<!doctype html>
<html>
   <head>
      <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!---  Main Inner Wrapper --->
      <div class="page-title">
      	<div class="container">
      		<h4>My Account</h4>
      	  <ol class="breadcrumb">
      		<li class="breadcrumb-item"><a href="#">Home</a></li>
      		<li class="breadcrumb-item active" aria-current="page">My Account</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="account-dashboard">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Nav tabs -->
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="<?php echo base_url('user/dashboard'); ?>" class="nav-link">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('user/edit_details'); ?>" class="nav-link">Account details</a></li>
									                  <li><a href="<?php echo base_url('user/change_password'); ?>"  class="nav-link active">Change Password</a></li>
									                  <li><a href="<?php echo base_url('user/orders'); ?>" class="nav-link">Orders</a></li>
                                    <li><a href="<?php echo base_url('user/logout'); ?>" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">






									<!-- Change Password --->

									 <div class="tab-pane active" id="change-password">
                                       <h3>Change Password </h3>
                                        <form id="account-detail" action="" method="post">
                                <div class="row">

								     <div class="col-md-12">
                                        <p>Current password  </p>
                                        <input type="password" name="oldpassword" class="form-input-edit" id="name">
                                    </div>
									<div class="col-md-12">
                                        <p>New password</p>
                                        <input type="password" name="newpassword" id="name" class="form-input-edit">
                                    </div>
									<div class="col-md-12">
                                        <p>Confirm new password</p>
                                        <input type="password" name="confirmpassword" id="name" class="form-input-edit">
                                    </div>

                                </div>
                                <button type="submit" class="reply-btn">Save Changes </button>
                                <p class="form-messege"></p>
                            </form>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
