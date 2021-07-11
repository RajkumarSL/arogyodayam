<!-- Main sidebar -->
<div class="sidebar sidebar-main">
   <div class="sidebar-content">
      <!-- User menu -->
      <div class="sidebar-user-material">
         <div class="category-content">
            <div class="sidebar-user-material-content">
               <?php if($this->session->userdata('photo')!=null)
                  {?>
               <a href="#"><img src="<?php echo base_url('upload/'.$this->session->userdata('photo'));?>" class="img-circle img-responsive" alt=""></a>
               <?php    }
                  else {?>
               <a href="#"><img src="<?php echo base_url('assets/admin/images/1483513967886.png');?>" class="img-circle img-responsive" alt=""></a>
               <?php        }
                  ?>
               <h6><?php echo $this->session->userdata('first_name');?></h6>
            </div>
            <div class="sidebar-user-material-menu">
               <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
            </div>
         </div>
         <div class="navigation-wrapper collapse" id="user-nav">
            <ul class="navigation">
               <li><a href="<?php echo base_url('changepassword');?>"><i class="icon-lock"></i> <span>Change Password</span></a></li>
               <li><a href="<?php echo base_url('settings');?>"><i class="icon-menu"></i> <span>Settings</span></a></li>
               <li><a href="<?php echo base_url(); ?>/User/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
            </ul>
         </div>
      </div>
      <!-- /user menu -->
      <!-- Main navigation -->
      <div class="sidebar-category sidebar-category-visible">
         <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">
               <!-- Main -->
               <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
               <li class="active"><a href="<?php echo base_url('Dashboard');?>"><i class="icon-home7"></i> <span>Dashboard</span></a></li>
               <li ><a href="<?php echo base_url('admin_slider');?>"><i class="icon-stack3"></i> <span>Slider</span></a></li>
               <li ><a href="<?php echo base_url('our_treatments');?>"><i class="icon-stack3"></i> <span>Our Treatments</span></a></li>
               <li ><a href="<?php echo base_url('our_teams');?>"><i class="icon-stack3"></i> <span>Our Teams</span></a></li>
               <li ><a href="<?php echo base_url('admin_testimonials');?>"><i class="icon-stack3"></i> <span>Testimonials</span></a></li>
               <li ><a href="<?php echo base_url('admin_gallery');?>"><i class="icon-stack3"></i> <span>Gallery</span></a></li>
                <li ><a href="<?php echo base_url('our_products');?>"><i class="icon-stack3"></i> <span>Our Products</span></a></li>
            </ul>
         </div>
      </div>
      <!-- /main navigation -->
   </div>
</div>
<!-- /main sidebar -->