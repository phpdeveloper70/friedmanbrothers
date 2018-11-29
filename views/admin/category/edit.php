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
              <label class="control-label">Department :</label>
              <div class="controls">
              <select class="span6" name="DeptID" required id="select_cat">
        <?php foreach ($department as $key => $value) { ?>
              <option value='<?php echo $value->id;?>' <?php if ($result[0]->DeptID == $value->id ) echo 'selected' ; ?>>
               <?php echo $value->DeptTitle;?></option>
            <?php } ?>
            </select>
          </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Category Title :</label>
              <div class="controls">
                <input type="text" class="span6" name="CatTitle" onkeyup="return set_slug(this.value);" value="<?php echo $result[0]->CatTitle; ?>" placeholder="Enter Category Name" />
              </div>
            </div>
             
            <div class="control-group">
              <label class="control-label">Short Description :</label>
              <div class="controls">
                <input type="text" class="span6" name="CatShortDesc" value="<?php echo $result[0]->CatShortDesc; ?>"placeholder="Enter CatShortDesc" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <textarea class="span6"  name="CatDescription" placeholder="Enter description"><?php echo $result[0]->CatDescription; ?></textarea>
             
              </div>
            </div>
             <br>
              <div class="control-group">
              <label class="control-label">How To Order :</label>
              <div class="controls">
                <textarea class="span6"  name="HowToOrder" placeholder="Enter HowToOrder"><?php echo $result[0]->HowToOrder; ?></textarea>
             
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
              <label class="control-label">Crm Royalties:</label>
              <div class="controls">
               <select class="span6" name="crm_royalties" required>
                
                <option value='no' <?php echo($result[0]->crm_royalties=="no")?'selected':''; ?>>No</option>
                <option value='yes' <?php echo($result[0]->crm_royalties=="yes")?'selected':''; ?> >Yes</option>
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

$(document).ready(function(){
  $('#form').parsley();
  $('#select_cat').val('<?php echo $result[0]->DeptID; ?>').change();
  $("#select_cat > option[value=" + <?php echo $result[0]->DeptID; ?> + "]").prop("selected",true);
});

</script>