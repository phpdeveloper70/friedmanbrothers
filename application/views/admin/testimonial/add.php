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
                <input type="text" class="span6" name="title"  placeholder="Enter Testimonials Title" />
              </div>
            </div>
          
            <div class="control-group">
              <label class="control-label"> Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="description" placeholder="Enter Description" />
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <div class="uploader" id="uniform-undefined"><input type="file" size="19" name="image" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Customer Name :</label>
              <div class="controls">
                <input type="text" class="span6" name="customer_name" placeholder="Enter name" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Customer Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="customer_desc" placeholder="Enter desc" />
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
<script type="text/javascript">
function set_slug(VALUE)
{
  //alert(VALUE);
  $("#url_slug").val(string_to_slug(VALUE));
}
function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }
    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes
    return str;
}
</script>