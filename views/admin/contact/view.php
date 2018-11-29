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
  <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Contact</a> <a href="<?php echo base_url()?>admin/contact/add" class="current">Add Contact </a> </div>
  <h1>Contact</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span9">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>View Contact</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">

            <div class="control-group">
              <label class="control-label">Row Type :</label>
              <div class="controls">
               <?php echo $result[0]->row_type?>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
               <?php echo $result[0]->name?>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
               <?php echo $result[0]->firstname?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name:</label>
              <div class="controls">
               <?php echo $result[0]->lastname?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
               <?php echo $result[0]->email?>
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Address One :</label>
              <div class="controls">
               <?php echo $result[0]->address_one?>
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Address Two :</label>
              <div class="controls">
               <?php echo $result[0]->address_two?>
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Address Three :</label>
              <div class="controls">
               <?php echo $result[0]->address_three?>
              </div>
            </div>
                  <div class="control-group">
              <label class="control-label">Country :</label>
              <div class="controls">
               <?php echo $result[0]->country?>
              </div>
            </div>
                  <div class="control-group">
              <label class="control-label">State :</label>
              <div class="controls">
               <?php echo $result[0]->state?>
              </div>
            </div>
                  <div class="control-group">
              <label class="control-label">City:</label>
              <div class="controls">
               <?php echo $result[0]->city?>
              </div>
            </div>
                 <div class="control-group">
              <label class="control-label">Zip:</label>
              <div class="controls">
               <?php echo $result[0]->zip?>
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Other Information:</label>
              <div class="controls">
               <?php echo $result[0]->title?>
              </div>
            </div>

                 <div class="control-group">
              <label class="control-label">Job Description:</label>
              <div class="controls">
               <?php echo $result[0]->job_description?>
              </div>
            </div>
                  <div class="control-group">
              <label class="control-label">Phone:</label>
              <div class="controls">
               <?php echo $result[0]->phone?>
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Fax:</label>
              <div class="controls">
               <?php echo $result[0]->fax?>
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Tax Id:</label>
              <div class="controls">
               <?php echo $result[0]->notes?>
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Bussiness Type:</label>
              <div class="controls">
               <?php echo $result[0]->business_type?>
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Company:</label>
              <div class="controls">
               <?php echo $result[0]->crm_dept?>
              </div>
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