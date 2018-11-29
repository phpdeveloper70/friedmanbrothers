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
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Admin</a> <a href="<?php echo base_url()?>admin/admin/add" class="current">Add User </a> </div>
  <h1>User</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add User</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">User Name :</label>
              <div class="controls">
                <input type="text" class="span6" name="name" placeholder="Enter Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">User Type :</label>
              <div class="controls">
               <select class="span6" name="usertype" required>
                <?php foreach($result as $row){ ?>
                
                  <option value='<?php echo $row->usertype?>' ><?php echo $row->usertype?></option>
                <?php }?> 
                </select>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">User mail :</label>
              <div class="controls">
                <input type="text" class="span6" name="mail_user"  placeholder="Enter User mail" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">User Password :</label>
              <div class="controls">
                <input type="text" class="span6" name="password" placeholder="Enter password" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <select class="span6" name="user_status" required>
                    <option value='unverified'>Verified</option>
                    <option value='verified'>Unverified</option>
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