<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view('admin/layout/head');?>
</head>
<body>

<!--Header-part-->

<!--sidebar-menu-->

<?php $this->load->view('admin/layout/left-side-bar'); ?>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Contact</a> <a href="<?php echo base_url()?>admin/contact/add" class="current">Edit Contact </a> </div>
  <h1>Contact</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Contact</h5>
        </div>
       <div class="widget-content nopadding">
          <form action="<?php echo base_url()?>admin/Contact/edit" id="form" method="post" class="form-horizontal">
          <div class="control-group">
              <label class="control-label">Row Type :</label>
              <div class="controls">
                <input type="text" class="span6" name="row_type"  value=" <?php echo $result[0]->row_type?>" placeholder="Enter Row Type" />
              </div>
            </div>
             
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span6" name="name" value="<?php echo $result[0]->name; ?>"placeholder="Enter name" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span6"  value="<?php echo $result[0]->firstname; ?>" name="firstname" placeholder="Enter firstname">
             
              </div>
            </div>
             <br>
              <div class="control-group">
              <label class="control-label">Last Name:</label>
              <div class="controls">
                <input type="text" class="span6"  name="lastname" value="<?php echo $result[0]->lastname; ?>" placeholder="Enter lastname"></textarea>
             
              </div>
            </div>
         <div class="control-group">
              <label class="control-label">Address One:</label>
              <div class="controls">
                <input type="text" class="span6" name="address_one" value="<?php echo $result[0]->address_one; ?>" placeholder="Enter address_one " />

              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Address Two:</label>
              <div class="controls">
                <input type="text" class="span6" name="address_two" value="<?php echo $result[0]->address_two; ?>" placeholder="Enter address_two " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Address Three:</label>
              <div class="controls">
                <input type="text" class="span6" name="address_three" value="<?php echo $result[0]->address_three; ?>" placeholder="Enter address_three " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Country:</label>
              <div class="controls">
                <input type="text" class="span6" name="country" value="<?php echo $result[0]->country; ?>" placeholder="Enter country " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">State Code:</label>
              <div class="controls">
                <input type="text" class="span6" name="state" value="<?php echo $result[0]->state; ?>" placeholder="Enter state " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">City:</label>
              <div class="controls">
                <input type="text" class="span6" name="city" value="<?php echo $result[0]->city; ?>" placeholder="Enter city " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Zip:</label>
              <div class="controls">
                <input type="text" class="span6" name="zip" value="<?php echo $result[0]->zip; ?>" placeholder="Enter zip " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Other Information:</label>
              <div class="controls">
                <input type="text" class="span6" name="title" value="<?php echo $result[0]->title; ?>" placeholder="Enter title " />

              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Job Description:</label>
              <div class="controls">
                <input type="text" class="span6" name="job_description" value="<?php echo $result[0]->job_description; ?>" placeholder="Enter job_description " />

              </div>
            </div>

  <div class="control-group">
              <label class="control-label">Phone:</label>
              <div class="controls">
                <input type="text" class="span6" name="phone" value="<?php echo $result[0]->phone; ?>" placeholder="Enter phone " />

              </div>
            </div>

  <div class="control-group">
              <label class="control-label">Fax:</label>
              <div class="controls">
                <input type="text" class="span6" name="fax" value="<?php echo $result[0]->fax; ?>" placeholder="Enter fax " />

              </div>
            </div>

  <div class="control-group">
              <label class="control-label">Bussiness Type:</label>
              <div class="controls">
                <input type="text" class="span6" name="fax" value="<?php echo $result[0]->business_type; ?>" placeholder="Enter fax " />

              </div>
            </div>

  <div class="control-group">
              <label class="control-label">Company:</label>
              <div class="controls">
                <input type="text" class="span6" name="crm_dept" value="<?php echo $result[0]->crm_dept; ?>" placeholder="Enter fax " />

              </div>
            </div>


           <div class="form-actions">
              <button type="submit" name="submit" class="btn btn-success">Save</button>
           <!--   <a href="<?php echo base_url()?>admin/category/listing"> <button type="submit"  class="btn  btn-success btn-xs">Cancel</button></a> -->
            </div>
          </form>
        </div>
      </div>
     
    
    </div>

  </div>

</div>
<!--Footer-part-->

</body>
<?php $this->load->view('admin/layout/footer');?>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $('#form').parsley();
});
</script>