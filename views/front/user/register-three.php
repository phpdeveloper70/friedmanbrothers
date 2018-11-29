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
              <div class="trades-account">
                 <h4>Trade Accounts Only</h4>
                 <p>(Please complete if your business purchases <br>or specifies furniture accessories)</p>
              </div>
               <div class="box-wrap-login register-reset-brd">

                  <form method="post">
                      <?php echo $this->session->flashdata('msg_register'); ?>
                     <div class="form-group">
                        <input type="text" name="company" class="style-input required" placeholder="Company Name">
                        <?php echo form_error('company'); ?>
                     </div>
                     <div class="form-group">
                        <input type="text" name="taxid" class="style-input required" placeholder="Tax Id">
                        <?php echo form_error('taxid'); ?>
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-sm-12">Which of the following best describes the activities of your company?</div>
                           <div class="col-sm-6">
                              <label> <input type="checkbox" name="business_types[]" value="interior"> <span class="style-bg"> Interior Design </span> </label>
                              <label> <input type="checkbox" name="business_types[]" value="antique"> <span class="style-bg"> Antique Dealer  </span> </label>
                              <label> <input type="checkbox" name="business_types[]" value="furniture"> <span class="style-bg"> Furniture Store</span> </label>
                              <label><input type="checkbox" name="business_types[]" value="contractor"> <span class="style-bg"> Contractor-Builder </span> </label>
                              <label><input type="checkbox" name="business_types[]" value="architect"> <span class="style-bg"> Architect</span> </label>
                           </div>
                           <div class="col-sm-6">
                              <label> <input type="checkbox" name="business_types[]" value="Accessory Store"> <span class="style-bg">  Accessory Store </span> </label>
                              <label> <input type="checkbox" name="business_types[]" value="Trade Showroom"> <span class="style-bg"> Trade Showroom </span> </label>
                              <label> <input type="checkbox" name="business_types[]" value="Purchasing Agent"> <span class="style-bg"> Purchasing Agent</span> </label>
                              <label><input type="checkbox" name="business_types[]" value="Furn. Manufacturer "> <span class="style-bg"> Furn. Manufacturer </span> </label>
                              <label><input type="checkbox" name="business_types[]" value="Hospitality"> <span class="style-bg"> Hospitality</span> </label>
                           </div>
                           <?php echo form_error('business_types[]'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-sm-12">Which of the following best describes your job function?</div>
                           <div class="col-sm-6">
                              <label> <input type="checkbox" name="job_descriptions[]" value="Architect"> <span class="style-bg"> Architect</span> </label>
                              <label> <input type="checkbox" name="job_descriptions[]" value="Designer"> <span class="style-bg"> Designer  </span> </label>
                              <label> <input type="checkbox" name="job_descriptions[]" value="Sales Associate"> <span class="style-bg"> Sales Associate</span> </label>
                           </div>
                           <div class="col-sm-6">
                              <label> <input type="checkbox" name="job_descriptions[]" value="Stock Buyer"> <span class="style-bg">  Stock Buyer</span> </label>
                              <label> <input type="checkbox" name="job_descriptions[]" value="Librarian"> <span class="style-bg"> Librarian</span> </label>
                           </div>
                           <?php echo form_error('job_descriptions[]'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-sm-12">
                              <input type="text" name="other" class="style-input required" placeholder="Other Information">
                              <?php echo form_error('other'); ?>
                           </div>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group">
                        <input type="submit" name="register-step-3" class="style-input submit-style" value="Register Now">
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
