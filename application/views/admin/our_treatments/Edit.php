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
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Our Treatments</li>
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
				<h3 class="panel-title">Our Treatments Edit
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>our_treatments" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
			</div>
         </div>
		 <br>
		 <hr/>
         <div class="container-fluid">
            <!-- content Starts Here-->
            
            <div class="col-md-12">
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> Data Updated successfully
               </div>
               <?php } ?>
               <?php foreach($our_treatments as $row){?>
				<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>our_treatments/edit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
				<div class="col-md-12">
						<fieldset class="content-group">
							<!--legend class="text-bold"></legend-->
							<div class="form-group">
								<label class="control-label col-md-3"><b>Title</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="title" placeholder="Title" class="form-control required" type="text" required="required" value="<?php echo $row->title;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Description</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								  <textarea name="description" id="editor-full" rows="2" cols="2" required="required">
									<?php echo $row->description; ?>
								  </textarea>
								   <span class="help-block"></span>
								</div>
							 </div>
							
							<div class="form-group">
								<label class="control-label col-md-3"><b>Images</b></label>
								<div class="col-md-9">
									<?php 
									if($row->images != "")
									{
										?>
											<img src="<?php echo base_url().'uploads/our_treatments/'.$row->images;?>" class="img-responsive" style="width:250px;height:150px;">
											<input type="file" name="gallery" class="form-control file-styled" data-popup="tooltip" title="Select File(It is required field)" data-placement="bottom">
											<input type="hidden" name="old_featured_image" value="<?php echo $row->images; ?>">
								   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;">Max file size 2MB, Upload Resolution : 200 * 200 only.</span>
										<?php 
									}
									else
									{
										?>
											<input type="file" name="gallery" class="form-control file-styled" data-popup="tooltip" title="Select File(It is required field)" data-placement="bottom">
								   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;">Max file size 2MB, Upload Resolution : 200 * 200 only.</span>
										<?php
									}
									?>
								</div>
							</div>
							<div class="text-right">
								<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
								<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="Update_data"> 
							</div>
					</div>
				</div>
			</div>
		</form>		
	</div>

               <?php } ?>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
