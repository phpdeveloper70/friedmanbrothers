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
                                    <li><a href="<?php echo base_url('user/dashboard'); ?>" class="nav-link active">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('user/edit_details'); ?>" class="nav-link">Account details</a></li>
									                  <li><a href="<?php echo base_url('user/change_password'); ?>"  class="nav-link">Change Password</a></li>
									                  <li><a href="<?php echo base_url('user/orders'); ?>" class="nav-link">Orders</a></li>
                                     <li><a href="<?php echo base_url('user/address'); ?>" class="nav-link">Address</a></li>
                                 
                                    <li><a href="<?php echo base_url('user/logout'); ?>" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active"  id="address">
                                         <h4 class="billing-address">Address 1</h4>
                                       
                                        <p><?php echo $result[0]->address_one ;?> </p>  
                                        <?php if($result[0]->address_two !=""){?>
                                         <h4 class="billing-address">Address 2</h4>
                                        
                                       
                                        <p><?php echo $result[0]->address_two ;?> </p> 
                                         <?php }?>
                                    </div>
                                    <?php if($result[0]->address_three !=""){?>
                                      <h4 class="billing-address">Address 3</h4>
                                       
                                       
                                        <p><?php echo $result[0]->address_three ;?> <br/></p>
                                         <?php }?>

                                         <?php if($result[0]->zip !=""){?>
                                        <p> <span>Zip Code  - <?php echo $result[0]->zip ;?></span></p> 
                                        <?php }else{?>
                                         <p> <span>Zip Code  - Not Found !</span></p> 
                                        <?php }?>


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
