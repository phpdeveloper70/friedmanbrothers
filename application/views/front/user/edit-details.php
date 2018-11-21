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
                                    <li><a href="<?php echo base_url('user/edit_details'); ?>" class="nav-link active">Account details</a></li>
									                  <li><a href="<?php echo base_url('user/change_password'); ?>"  class="nav-link">Change Password</a></li>
									                  <li><a href="<?php echo base_url('user/orders'); ?>" class="nav-link">Orders</a></li>
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
                                      <input type="text" name="fname" id="fname" class="form-input-edit">
                                  </div>
                                  <div class="col-md-6">
                                      <p>Last Name <span class="highlight-asterisk">*</span></p>
                                      <input type="text" name="lname" id="lname" class="form-input-edit">
                                  </div>
                 <div class="col-md-12">
                                      <p>User name <span class="highlight-asterisk">*</span></p>
                                      <input type="text" name="uname" id="uname" class="form-input-edit">
                  <span class="hint">This will be how your name will be displayed in the account section and in reviews</span>
                                  </div>

                 <div class="col-md-6">
                                      <p>Address <span class="highlight-asterisk">*</span></p>
                                      <input type="text" name="address" id="address" class="form-input-edit">
                                  </div>
          <div class="col-sm-6 mb-view-15">
          <p>Address1 <span class="highlight-asterisk">*</span></p>
          <input type="text" name="address" class="form-input-edit">
          </div>
                <div class="col-sm-6 mb-view-15">
                <p>Country <span class="highlight-asterisk">*</span></p>
          <select name="country" class="form-input-edit">
            <option value="-1">Select Country </option>
            <option value="-1">India</option>
            <option value="-1">Pak</option>
            <option value="-1">Srilanka</option>
            <option value="-1">Bangladesh</option>
          </select>
        </div>
        <div class="col-sm-6 mb-view-15">
        <p>State <span class="highlight-asterisk">*</span></p>
        <select name="state" class="form-input-edit">
            <option value="-1">Select State </option>
            <option value="-1">Mumbai</option>
            <option value="-1">Delhi</option>
            <option value="-1">Kolkata</option>
            <option value="-1">Chennai</option>
          </select>
          </div>

          <div class="col-sm-6 mb-view-15">
          <p>City <span class="highlight-asterisk">*</span></p>
          <input type="text" name="city" class="form-input-edit">
        </div>
          <div class="col-sm-6 mb-view-15">
          <p>Zip Code <span class="highlight-asterisk">*</span></p>
          <input type="text" name="zip" class="form-input-edit">
        </div>
        <div class="col-sm-6 mb-view-15">
        <p>Company  <span class="highlight-asterisk">*</span></p>
          <input type="text" name="country" class="form-input-edit">
        </div>

          <div class="col-sm-6 mb-view-15">
          <p>Tax Id <span class="highlight-asterisk">*</span></p>
          <input type="text" name="taxid" class="form-input-edit">
        </div>



          <div class="col-sm-12">Which of the following best describes the activities of your company?</div>
          <div class="col-sm-6 list-activities">
        <label> <input type="checkbox" name="interior"> <span class="style-bg"> Interior Design </span> </label> <br>
        <label> <input type="checkbox" name="antique"> <span class="style-bg"> Antique Dealer  </span> </label><br>
        <label> <input type="checkbox" name="furniture"> <span class="style-bg"> Furniture Store</span> </label><br>
        <label><input type="checkbox" name="contractor"> <span class="style-bg"> Contractor-Builder	  </span> </label><br>
        <label><input type="checkbox" name="architect"> <span class="style-bg"> Architect</span> </label>
        </div>

        <div class="col-sm-6 list-activities">
        <label> <input type="checkbox" name="Accessory Store"> <span class="style-bg">  Accessory Store </span> </label><br>
        <label> <input type="checkbox" name="Trade Showroom"> <span class="style-bg"> Trade Showroom </span> </label><br>
        <label> <input type="checkbox" name="Purchasing Agent"> <span class="style-bg"> Purchasing Agent</span> </label><br>
        <label><input type="checkbox" name="Furn. Manufacturer"> <span class="style-bg"> Furn. Manufacturer </span> </label><br>
        <label><input type="checkbox" name="Hospitality"> <span class="style-bg"> Hospitality</span> </label><br>
        </div>

        <div class="col-sm-12">Which of the following best describes your job function?</div>
        <div class="col-sm-6">
        <label> <input type="checkbox" name="Architect"> <span class="style-bg"> Architect</span> </label><br>
        <label> <input type="checkbox" name="Designer"> <span class="style-bg"> Designer  </span> </label><br>
        <label> <input type="checkbox" name="Sales Associate"> <span class="style-bg"> Sales Associate</span> </label>
        </div>

        <div class="col-sm-6">
        <label> <input type="checkbox" name="Stock Buyer"> <span class="style-bg">  Stock Buyer</span> </label><br>
        <label> <input type="checkbox" name="Librarian"> <span class="style-bg"> Librarian</span> </label>
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
