<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Gallery</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Gallery Master</h2>
            <div style="text-align:right;">
               <a href="<?php echo  base_url();?>admin_gallery" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <br>
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New Data Created successfully
               </div>
               <?php 
			   //redirect(base_url().'slider/sliderList');
			   } ?>
               <form name="add" method="POST" action="<?php echo  base_url();?>admin_gallery/add" class="form-horizontal form-validate-jquery" 
			   enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label col-md-3"><b>Title</b> <strong style="color:red;">*</strong></label>
						<div class="col-md-9">
						   <input name="title" placeholder="Title" class="form-control required" type="text" required="required">
						   <span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Image</label>
						<div class="col-md-9">
						   <input name="image" class="form-control file-styled" type="file" required="required">
						   <span class="help-block"><b style="color:red">Max file size 2MB, Upload Resolution : 1000 * 1000</b></span>
						</div>
					</div>

                  <div style="text-align:center">
                     <input type="submit" name="submit_data" value="Add" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>

               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
