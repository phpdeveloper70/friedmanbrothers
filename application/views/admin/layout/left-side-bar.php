<!--Header-part-->
<div id="header">
   <h1><a href="#">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse" style="right: 0;">
   <ul class="nav" style="float: right;">
      <li class=""><a title="" href="<?php echo base_url('admin/admin/change_password') ?>"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
      <li class=""><a title="" href="<?php echo base_url('admin/logout'); ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
   </ul>
</div>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<div id="sidebar">
   <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
   <ul>
      <li class="active"><a href="<?php echo base_url('admin/dashboard') ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="submenu">
         <a href="#"><i class="icon icon-user"></i> <span>Manage Users</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/Admin/listing'); ?>">All Users</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="#"><i class="icon-question-sign"></i> <span>Manage Categories</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/category/listing'); ?>">Category Listing</a></li>
            <li><a href="<?php echo base_url('admin/category/add'); ?>">Add New</a></li>
         </ul>
      </li>

      <li class="submenu">
         <a href="#"><i class="icon icon-fullscreen"></i> <span>Manage Testimonials</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/testimonial/listing'); ?>">All Testimonials</a></li>
            <li><a href="<?php echo base_url('admin/testimonial/add'); ?>">Add New Testimonials</a></li>
         </ul>
      </li>

     <!-- <li class="submenu">
         <a href="#"><i class="icon icon-leaf"></i> <span>Manage Language</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/language/listing'); ?>">Manage Language</a></li>
            <li><a href="<?php echo base_url('admin/language/add'); ?>">Add New</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="#"><i class="icon icon-money"></i> <span>Manage Height</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/height/listing'); ?>">Manage Height</a></li>
            <li><a href="<?php echo base_url('admin/height/add'); ?>">Add New</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="#"><i class="icon-question-sign"></i> <span>Manage Faq</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/faq/listing'); ?>">Manage Faq</a></li>
            <li><a href="<?php echo base_url('admin/faq/add'); ?>">Add New</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="#"><i class="icon icon-money"></i> <span>Manage Plans</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/plan/listing'); ?>">Manage Plans</a></li>
            <li><a href="<?php echo base_url('admin/plan/add'); ?>">Add New</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="#"><i class="icon icon-edit"></i> <span>CMS</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/cms/listing'); ?>">Manage CMS</a></li>
         </ul>
      </li>-->
        <li class="submenu">
         <a href="#"><i class="icon icon-edit"></i> <span>Admin</span></a>
         <ul>
            <li><a href="<?php echo base_url('admin/Admin/listing_admin'); ?>">Add Admin</a></li>
         </ul>
      </li>
   </ul>
</div>
<!--sidebar-menu-->
