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
    <div id="breadcrumb"> <a href="<?php echo base_url()?>admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Faq</a> </div>
    <h1>Faq</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
     <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Faq Listing</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Faq Title</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                <?php  $sno = 0;foreach($result as $row){?>
                
                <tr class="gradeX">
                  <td><?php echo ++$sno?></td>
                  <td><?php echo $row->title?></td>
                  <td><?php echo $row->description?></td>
                  <td width="15%">
                    <a href="<?php echo base_url('admin/faq/edit/'.$row->id); ?>" class="btn  btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Edit</a>
                    <a href="<?php echo base_url('admin/faq/delete/'.$row->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i>Delete
                    </a>
                  </td>
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
