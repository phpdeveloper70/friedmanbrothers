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
                        <input type="text" name="address1" class="style-input required" value="<?php echo set_value('address1'); ?>" placeholder="Address 1">
                        <?php echo form_error('address1'); ?>
                     </div>
                     <div class="form-group">
                        <input type="text" name="address2" class="style-input required" value="<?php echo set_value('address2'); ?>" placeholder="Address 2">
                        <?php echo form_error('address2'); ?>
                     </div>
                     <div class="form-group">
                        <input type="text" name="address3" class="style-input required" value="<?php echo set_value('address3'); ?>" placeholder="Address 3">
                        <?php echo form_error('address3'); ?>
                     </div>
                     <div class="form-group reset-mbile-margin">
                        <div class="row">
                           <div class="col-sm-6 mb-view-15">
                             <?php $countries = $this->front_model->fetch_country(); ?>
                              <select name="country" class="style-input" id="country">
                                 <option value="">Select Country </option>
                                 <?php foreach($countries as $country){ ?>
                                   <option ids="<?php echo $country->id; ?>" value="<?php echo $country->name; ?>"><?php echo $country->name; ?></option>
                                 <?php } ?>
                              </select>
                           </div>
                           <div class="col-sm-6 mb-view-15">
                              <select name="state" class="style-input" id='state'>
                                 <option value="">Select State </option>
                              </select>
                           </div>
                           <?php echo form_error('country'); ?>
                           <?php echo form_error('state'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group reset-mbile-margin">
                        <div class="row">
                           <div class="col-sm-6 mb-view-15">
                              <input type="text" name="city" class="style-input required" placeholder="City Name" value="<?php echo set_value('city'); ?>">
                           </div>
                           <div class="col-sm-6 mb-view-15">
                              <input type="text" name="zip" class="style-input required" placeholder="Zip Code" value="<?php echo set_value('zip'); ?>">
                           </div>
                           <?php echo form_error('city'); ?>
                           <?php echo form_error('zip'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group reset-mbile-margin">
                        <div class="row">
                           <div class="col-sm-6 mb-view-15">
                              <input type="text" name="phone" class="style-input required" placeholder="Phone no." value="<?php echo set_value('phone'); ?>">
                           </div>
                           <div class="col-sm-6 mb-view-15">
                              <input type="text" name="fax" class="style-input required" placeholder="Fax" value="<?php echo set_value('fax'); ?>">
                           </div>
                           <?php echo form_error('phone'); ?>
                           <?php echo form_error('fax'); ?>
                        </div>
                        <!-- Row End -->
                     </div>
                     <div class="form-group">
                        <input type="submit" name="register-step-2" class="style-input submit-style" value="Next Step">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End -->

      <?php $this->load->view('front/layout/footer'); ?>
      <script>
      $(document).ready(function(){
          $('#country').change(function(){
              var country_id = $('#country option:selected').attr('ids');
              if(country_id!='')
              {
                  $.ajax({
                    'type':'post',
                    'url':'<?php echo base_url('welcome/get_state') ?>',
                    'data':{'cid':country_id},
                    'success':function(response_data)
                    {
                        $('#state').html(response_data);
                    }
                  });
              }
          });
      });
      </script>
   </body>
</html>
