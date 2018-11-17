<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view('admin/layout/head');?>
</head>
<body>
<?php $this->load->view('admin/layout/left-side-bar'); ?>
<!--close-left-menu-stats-sidebar-->
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Product</a> <a href="<?php echo base_url()?>admin/category/add" class="current">Add Product </a> </div>
  <h1>Product</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Product</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" id="form" class="form-horizontal" enctype="multipart/form-data"  >
              <div class="control-group">
              <label class="control-label">Parent Category :</label>
              <div class="controls">
               <select class="span6"   name="DeptID" required >
                    <option value='0'>Root</option>
                    <?php echo $this->Category_model->get_all_child_category(0); ?>
               </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Title :</label>
              <div class="controls">
                <input type="text" class="span6" name="ProdTitle"  placeholder="Enter Product Title" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Product Sku :</label>
              <div class="controls">
                <input type="text" class="span6" name="Sku"  placeholder="Enter Product Title" />
              </div>
            </div>
         
          <div class="form-actions">
              <button type="submit" name="submitform" class="btn btn-success">Save</button>
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