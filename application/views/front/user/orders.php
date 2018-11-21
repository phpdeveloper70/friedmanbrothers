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
                                    <li><a href="<?php echo base_url('user/dashboard'); ?>" class="nav-link ">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('user/edit_details'); ?>" class="nav-link">Account details</a></li>
									                  <li><a href="<?php echo base_url('user/change_password'); ?>"  class="nav-link">Change Password</a></li>
									                  <li><a href="<?php echo base_url('user/orders'); ?>" class="nav-link active">Orders</a></li>
                                    <li><a href="<?php echo base_url('user/logout'); ?>" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                  <div class="tab-pane active" id="orders">
                                      <h3>Orders</h3>
                                      <div class="table-responsive">
                                          <table class="table">
                                              <thead>
                                                  <tr>
                                                      <th>Order</th>
                                                      <th>Date</th>
                                                      <th>Status</th>
                                                      <th>Total</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>May 10, 2018</td>
                                                      <td>Processing</td>
                                                      <td>$25.00 for 1 item </td>
                                                      <td><a href="#" class="view">Status</a></td>
                                                  </tr>
                                                  <tr>
                                                      <td>2</td>
                                                      <td>May 10, 2018</td>
                                                      <td>Processing</td>
                                                      <td>$17.00 for 1 item </td>
                                                      <td><a href="#" class="view">Status</a></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
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