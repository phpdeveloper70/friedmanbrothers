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
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Product</a> <a href="<?php echo base_url()?>admin/product/add" class="current">Add Product </a> </div>
  <h1>Product</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Product</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" id="form" enctype="multipart/form-data" class="form-horizontal">
           
               <div class="control-group">
              <label class="control-label">Product Sku :</label>
              <div class="controls">
                <input type="text" class="span6" name="Sku" value="<?php echo $result[0]->Sku; ?>" placeholder="Enter Product Sku" />
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Department :</label>
              <div class="controls">
              <select class="span6" name="DeptID" required id="select_cat">
                      <?php foreach ($department as $key => $value) { ?>
              <option value='<?php echo $value->id;?>' <?php if ($result[0]->DeptID == $value->id ) echo 'selected' ; ?>>
               <?php echo $value->DeptTitle;?></option>
            <?php } ?>
            </select>
          </div>
            </div>

              <div class="control-group">
              <label class="control-label">Category :</label>
              <div class="controls">
              <select class="span6" name="CatID"  id="select_cat">
                      <?php foreach ($category as $key => $value) { ?>
              <option value='<?php echo $value->id;?>' <?php if ($result[0]->CatID == $value->id ) echo 'selected' ; ?>>
               <?php echo $value->CatTitle;?></option>
            <?php } ?>
            </select>
          </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Title :</label>
              <div class="controls">
                <input type="text" class="span6" name="ProdTitle" value="<?php echo $result[0]->ProdTitle; ?>" placeholder="Enter Product Title" />
              </div>
            </div>
          <!--      <div class="control-group">
         <label class="control-label">Product Icon :</label>
          <input type="file" class="span6" name="ProdIcon" >          
        </div>  -->
            <div class="control-group">
              <label class="control-label">Product Description :</label>
              <div class="controls">
                 <textarea class="span6"  name="ProdDescription" placeholder="Enter ProdDescription"><?php echo $result[0]->ProdDescription; ?></textarea>
              
              </div>
            </div>
            

            <div class="control-group">
              <label class="control-label">Short Description :</label>
              <div class="controls">
                <textarea class="span6"  name="ProdShortDesc" placeholder="Enter ProdShortDesc"><?php echo $result[0]->ProdShortDesc; ?></textarea>
             
              </div>
            </div>
            
            

             <div class="control-group">
              <label class="control-label">Published State:</label>
              <div class="controls">
               <select class="span6" name="published_state" required>
              <option value='no' <?php echo($result[0]->published_state=="no")?'selected':''; ?>>No</option>
                <option value='yes' <?php echo($result[0]->published_state=="yes")?'selected':''; ?> >Yes</option>
          </select>
              </div>
            </div>

            
                <div class="control-group">
              <label class="control-label">Display Order:</label>
              <div class="controls">
                <input type="text" class="span6" name="DisplayOrder" value="<?php echo $result[0]->DisplayOrder; ?>" placeholder="Enter DisplayOrder " />

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
$(document).ready(function(){
  $('#form').parsley();
  $('#select_cat').val('<?php echo $result[0]->DeptID; ?>').change();
  $("#select_cat > option[value=" + <?php echo $result[0]->DeptID; ?> + "]").prop("selected",true);
});

</script>