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
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Category</a> <a href="<?php echo base_url()?>admin/category/add" class="current">Add Category </a> </div>
  <h1>Category</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Category</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">
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
              <label class="control-label">Category Title :</label>
              <div class="controls">
                <input type="text" class="span6" name="CatTitle" onkeyup="return set_slug(this.value);" placeholder="Enter Category Title" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">URL Slug :</label>
              <div class="controls">
                <input type="text" class="span6" name="url_slug" id="url_slug" value="<?php echo set_value('url_slug'); ?>"readonly placeholder="Enter Url Slug" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Short Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="CatShortDesc" placeholder="Enter CatShortDesc" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="CatDescription" placeholder="Enter CatDescription" />
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Root Display :</label>
              <div class="controls">
                <select class="span6" name="root_display" required>
                    <option value='yes'>Yes</option>
                    <option value='no'>No</option>
          </select>
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