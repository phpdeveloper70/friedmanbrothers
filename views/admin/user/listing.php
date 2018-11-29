<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view('admin/layout/head');?>
</head>
<body>
<!--Header-part-->
<?php $this->load->view('admin/layout/left-side-bar'); ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">User</a> </div>
    <h1>User</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
     <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>User Listing</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>User Name</th>
				  <th>User Type</th>
               
                </tr>
              </thead>
              <tbody>
              
                <?php  $sno = 0;foreach($result as $row){?>
                
                <tr class="gradeX">
                  <td><?php echo ++$sno?></td>
                  <td><?php echo $row->name?></td>
				  <td><?php echo $row->usertype?></td>
              
               </tr>
              <?php }?>
             </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<?php $this->load->view('admin/layout/footer');?>
</body>
</html>
