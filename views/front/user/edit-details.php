<?php  $user_name = $this->session->userdata('USER_NAME');?>
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
  <?php if($this->session->flashdata('message')): ?>
                              <p><center><?php echo $this->session->flashdata('message'); ?></center></p>
                          <?php endif; ?>
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
                                    <li><a href="<?php echo base_url('user/edit_details'); ?>" class="nav-link active">Account details</a></li>
									                  <li><a href="<?php echo base_url('user/change_password'); ?>"  class="nav-link">Change Password</a></li>
									                  <li><a href="<?php echo base_url('user/orders'); ?>" class="nav-link">Orders</a></li>
                                     <li><a href="<?php echo base_url('user/address'); ?>" class="nav-link">Address</a></li>

                                    <li><a href="<?php echo base_url('user/logout'); ?>" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                          
                            <div class="col-md-8">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                  <div class="tab-pane active show" id="account-details">
                                    <h3>Account details </h3>
                      <form id="account-detail" action="" method="post">
                              <div class="row">
                                  <div class="col-md-6">
                                      <p>First name <span class="highlight-asterisk">*</span></p>
                                      <input type="text" name="firstname" id="firstname" value= "<?php echo @$user_data[2]->firstname;?>" required class="form-input-edit">
                                      <?php echo form_error('firstname'); ?>
                                  </div>
                                  <div class="col-md-6">
                                      <p>Last Name <span class="highlight-asterisk">*</span></p>
                                      <input type="text" name="lastname" id="lastname" 
                                      value= "<?php echo @$user_data[2]->lastname;?>" required class="form-input-edit">
                                       <?php echo form_error('lastname'); ?>
                                  </div>
                 <div class="col-md-12">
                                      <p>User name <span class="highlight-asterisk">*</span></p>
                                      <input type="text" readonly="readonly" value ="<?php echo @$user_name ;?>" name="name" id="name" class="form-input-edit">
                                       
                  <span class="hint">This will be how your name will be displayed in the account section and in reviews</span>
                                  </div>

      <div class="col-md-6">
    <p>Address <span class="highlight-asterisk">*</span></p>
    <input type="text" name="address_one" required  id="address_one" value= "<?php echo @$user_data[1]->address_one;?>" class="form-input-edit">
                   <?php echo form_error('address_one'); ?>
                 </div>
          <div class="col-sm-6 mb-view-15">
          <p>Address1 <span class="highlight-asterisk">*</span></p>
          <input type="text" name="address_two" required id="address_two" value= "<?php echo @$user_data[1]->address_two;?>"class="form-input-edit">
          <?php echo form_error('address_two'); ?>
          </div>
                <div class="col-sm-6 mb-view-15">
                <p>Country <span class="highlight-asterisk">*</span></p>

          <select name="country" id="country" required class="form-input-edit">
            <option>Select Country</option>
              <?php
    foreach($country as $row)
    { ?>


         <option value='<?php echo $row->id;?>' <?php if ($row->name ==$user_data[0]->country ) echo 'selected' ; ?>>
               <?php echo @$row->name;?></option>
 <?php   }
    ?>
          </select>
          <?php echo form_error('country'); ?>
        </div>
        <div class="col-sm-6 mb-view-15">
        <p>State <span class="highlight-asterisk">*</span></p>
        <select name="state" id="state"  class="form-input-edit">
            <option value="">Select State</option>
          </select>
          <?php echo form_error('state'); ?>
          </div>

          <div class="col-sm-6 mb-view-15">
          <p>City <span class="highlight-asterisk">*</span></p>
          <input type="text" name="city" value= "<?php echo @$user_data[1]->city;?>"  class="form-input-edit">
          <?php echo form_error('city'); ?>
        </div>
          <div class="col-sm-6 mb-view-15">
          <p>Zip Code <span class="highlight-asterisk">*</span></p>
          <input type="text" required name="zip" value= "<?php echo @$user_data[1]->zip;?>" class="form-input-edit">
        </div>
        <div class="col-sm-6 mb-view-15">
        <p>Company  <span class="highlight-asterisk">*</span></p>
          <input type="text" name="company" value= "<?php echo @$user_data[0]->name;?>" required class="form-input-edit">
          <?php //echo form_error('company'); ?>
        </div>

          <div class="col-sm-6 mb-view-15">
          <p>Tax Id <span class="highlight-asterisk">*</span></p>
          <input type="text" name="taxid" required  value= "<?php echo @$user_data[0]->notes;?>"  class="form-input-edit">
            <?php echo form_error('taxid'); ?>
        </div>
         <?php 
         @$business_type = $user_data[0]->business_type;
           @$checkbox_array = explode(";",$business_type);

          @$job_description = $user_data[2]->job_description;
           @$checkbox_array_job = explode(";",$job_description);
          //print_R($checkbox_array);
           ?>


          <div class="col-sm-12">Which of the following best describes the activities of your company?<span class="highlight-asterisk">*</span></div>
          <div class="col-sm-6 list-activities">
        <label> <input type="checkbox"   name ="business_type[]" <?php if(in_array("interior", @$checkbox_array)) {?> checked="checked"<?php } ?> value="interior"> <span class="style-bg"> Interior Design </span> </label> <br>
        <label> <input type="checkbox" <?php if(in_array("antique", @$checkbox_array)) {?> checked="checked"<?php } ?>name ="business_type[]" value="antique"> <span class="style-bg"> Antique Dealer  </span> </label><br>
        <label> <input type="checkbox" <?php if(in_array("furniture", @$checkbox_array)) {?> checked="checked"<?php } ?> name ="business_type[]" value="furniture"> <span class="style-bg"> Furniture Store</span> </label><br>
        <label><input type="checkbox" <?php if(in_array("contractor", @$checkbox_array)) {?> checked="checked"<?php } ?>name ="business_type[]" value="contractor"> <span class="style-bg"> Contractor-Builder	  </span> </label><br>
        <label><input type="checkbox"<?php if(in_array("architect", @$checkbox_array)) {?> checked="checked"<?php } ?> name ="business_type[]" value="architect"> <span class="style-bg"> Architect</span> </label>
        
        </div>
        <div class="col-sm-6 list-activities">
        <label> <input type="checkbox" <?php if(in_array("Accessory Store", @$checkbox_array)) {?> checked="checked"<?php } ?> name="business_type[]" value="Accessory Store"> <span class="style-bg">  Accessory Store </span> </label><br>
        <label> <input type="checkbox" <?php if(in_array("Trade Showroom", @$checkbox_array)) {?> checked="checked"<?php } ?>  name="business_type[]"value="Trade Showroom"> <span class="style-bg"> Trade Showroom </span> </label><br>
        <label> <input type="checkbox" <?php if(in_array("Purchasing Agent", @$checkbox_array)) {?> checked="checked"<?php } ?>name="business_type[]"value="Purchasing Agent"> <span class="style-bg"> Purchasing Agent</span> </label><br>
        <label><input type="checkbox"  <?php if(in_array("Furn. Manufacturer", @$checkbox_array)) {?> checked="checked"<?php } ?>name="business_type[]" value="Furn. Manufacturer"> <span class="style-bg"> Furn. Manufacturer </span> </label><br>
        <label><input type="checkbox" <?php if(in_array("Hospitality", @$checkbox_array)) {?> checked="checked"<?php } ?> name="business_type[]"value="Hospitality"> <span class="style-bg"> Hospitality</span> </label><br>
        
        </div>
         <?php echo form_error('business_type'); ?>
        <div class="col-sm-12">Which of the following best describes your job function?<span class="highlight-asterisk">*</span></div>
        <div class="col-sm-6">
        <label> <input type="checkbox"  <?php if(in_array("Architect", @$checkbox_array_job)) {?> checked="checked"<?php } ?>name="job_description[]" value="Architect"> <span class="style-bg"> Architect</span> </label><br>
        <label> <input type="checkbox"  <?php if(in_array("Designer", @$checkbox_array_job)) {?> checked="checked"<?php } ?> name="job_description[]" value="Designer"> <span class="style-bg"> Designer  </span> </label><br>
        <label> <input type="checkbox"  <?php if(in_array("Sales Associate", @$checkbox_array_job)) {?> checked="checked"<?php } ?>name="job_description[]" value="Sales Associate"> <span class="style-bg"> Sales Associate</span> </label>
        </div>

        <div class="col-sm-6">
        <label> <input type="checkbox"  <?php if(in_array("Stock Buyer", @$checkbox_array_job)) {?> checked="checked"<?php } ?>name="job_description[]" value="Stock Buyer"> <span class="style-bg">  Stock Buyer</span> </label><br>
        <label> <input type="checkbox"  <?php if(in_array("Librarian", @$checkbox_array_job)) {?> checked="checked"<?php } ?>name="job_description[]" value="Librarian"> <span class="style-bg"> Librarian</span> </label>
        </div>
         <?php echo form_error('job_description'); ?>
                              </div>
                              <button type="submit" name="submit" class="reply-btn">Save Changes </button>
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
<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>user/fetch_state",
    method:"POST",
    data:{id:country_id},
    success:function(data)
    {
     $('#state').html(data);
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
 }
 });
});
</script>
