<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Our Products</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
			<div class="col-md-6">
				<h3 class="panel-title">Add New
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>our_products" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
			</div>
         </div>
		 <br>
		 <hr/>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-12">
               
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
               <?php } ?>
			</div>   
	<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>our_products/add" method="POST" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="panel panel-flat">
					<!--div class="panel-heading"><h2 style="margin-left: 0px;">News Details</h2></div-->
					<div class="panel-body">
						<fieldset class="content-group">
							<!--legend class="text-bold"></legend-->
							
							<div class="form-group">
								<label class="control-label col-md-3"><b>Name</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="title" placeholder="Title" class="form-control required" type="text" required="required">
								   <span class="help-block"></span>
								</div>
							</div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Description</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								  <textarea name="description" class="form-control" id="editor-full" rows="2" cols="2" required="required"></textarea>
								   <span class="help-block"></span>
								</div>
							 </div>
							
							 <div class="form-group">
								<label class="control-label col-md-3">
								
								<b>Image</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								
								  <input type="file" name="gallery" class="form-control file-styled" data-popup="tooltip" title="Select File(It is required field)" data-placement="bottom">
							   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;">Max file size 2MB, Upload Resolution : 360w * 420h only.</span>
								</div>
							 </div>

							 <style>
								.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline
								{
									padding-top: 0px;
								}
								#cke_1_contents
								{
									    height: 100%!important;
								}
							 </style>
						</fieldset>
					</div>
				</div>
			</div>
					
			<div class="col-md-12">
				<div class="text-right">
					<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
					<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Submit" name="Submit_data"> 
				</div>
			</div>
		</form>		
	</div>		

         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>

