<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view('admin/layout/head');?>
</head>
<body>
<?php $this->load->view('admin/layout/left-side-bar'); ?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Testimonials</a> <a href="<?php echo base_url()?>admin/category/add" class="current">Add Testimonials </a> </div>
  <h1>Testimonials</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Testimonials</h5>
        </div>
        <div class="widget-content nopadding">

          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span6" name="title" value="<?php echo $result[0]->title; ?>" placeholder="Enter Testimonials Title" />
              </div>
            </div>
          
            <div class="control-group">
              <label class="control-label"> Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="description" value="<?php echo $result[0]->description; ?>"placeholder="Enter Description" />
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <div class="uploader" id="uniform-undefined">
                  <input type="file" class="form-control" required name="image" >
                      <input type="hidden" name="old_file" value="<?php echo $result[0]->image; ?>" >
               
                 </div>
                  <?php if(!empty($result[0]->image)){ ?>
                      <img src="<?php echo base_url('images/testimonials/').$result[0]->image; ?>" width="20%">
          <?php } ?>
              </div>
            </div>

  <div class="control-group">
              <label class="control-label">Customer Name :</label>
              <div class="controls">
                <input type="text" class="span6" name="customer_name" value="<?php echo $result[0]->customer_name; ?>" placeholder="Enter name" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Customer Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="customer_desc" value="<?php echo $result[0]->customer_desc; ?>" placeholder="Enter desc" />
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <select class="span6" name="status" required>
                    <option value='1'>Active</option>
                    <option value='0'>Inactive</option>
          </select>
              </div>
            </div>
          <div class="form-actions">
              <button type="submit" name="submit" class="btn btn-success">Save</button>
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
