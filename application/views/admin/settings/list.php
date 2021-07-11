<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Settings</li>
   </ul>
</div>
<br>
<?php 
//var_dump($getData);
?>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h3 >Settings Master</h3>
			 </div>
			<div class="panel-body">
				<form name="add" method="POST" action="<?php echo  base_url();?>settings/update/<?php echo $getData->id; ?>" class="form-horizontal form-validate-jquery" 
			   enctype="multipart/form-data">
				<div class="tabbable">
					<ul class="nav nav-xs nav-tabs nav-tabs-solid nav-tabs-component">
						<li class="active"><a href="#mini_basic" data-toggle="tab" class="legitRipple" aria-expanded="true">Logo</a></li>
						<li class=""><a href="#mini_address" data-toggle="tab" class="legitRipple" aria-expanded="false">Address</a></li>
						<li class=""><a href="#mini_social_link" data-toggle="tab" class="legitRipple" aria-expanded="false">Social Link</a></li>
						<li class=""><a href="#mini_timings" data-toggle="tab" class="legitRipple" aria-expanded="false">Timings</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="mini_basic">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-1"><b>Logo</b></label>
									<div class="col-md-2">
										<img src="<?php echo base_url(); ?>uploads/settings/logo/<?php echo $getData->logo; ?>" class="img-responsive"/>
									</div>
									<div class="col-md-9">
										<input name="get_logo_name" class="form-control" type="hidden" value="<?php echo $getData->logo;?>">
										<input name="setting_logo" class="form-control file-styled" type="file" >
										<span class="help-block"><b style="color:red">Max file size 1MB, Upload Resolution : 320 * 90 px</b></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-1"><b>Favicon</b></label>
									<div class="col-md-2">
										<img src="<?php echo base_url(); ?>uploads/settings/favicon/<?php echo $getData->favicon; ?>" class="img-responsive"/>
									</div>
									<div class="col-md-9">
										<input name="get_favicon_name" class="form-control" type="hidden" value="<?php echo $getData->favicon;?>">
										<input name="setting_favicon" class="form-control" type="file" >
										<span class="help-block"><b style="color:red">Upload Resolution : 100 * 100 px</b></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><b>Email address</b></label>
									<div class="col-md-9">
									   <input name="setting_emailone" class="form-control" type="email" value="<?php echo $getData->email_one; ?>" >
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><b>Contact No</b></label>
									<div class="col-md-9">
									   <input name="setting_contactnoone" class="form-control" type="text" value="<?php echo $getData->contact_one; ?>" required="required">
									</div>
								</div>
							</div>
							
						</div>

						<div class="tab-pane" id="mini_address">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-2"><b>Address 1</b></label>
									<div class="col-md-10">
									   <input name="setting_addressone" class="form-control" type="text" value="<?php echo $getData->address_one; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Address 1</b></label>
									<div class="col-md-10">
									   <input name="setting_addresstwo" class="form-control" type="text" value="<?php echo $getData->address_two; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>City</b></label>
									<div class="col-md-10">
									   <input name="setting_city" class="form-control" type="text" value="<?php echo $getData->city; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>State</b></label>
									<div class="col-md-10">
									   <input name="setting_state" class="form-control" type="text" value="<?php echo $getData->state; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Country</b></label>
									<div class="col-md-10">
									   <input name="setting_country" class="form-control" type="text" value="<?php echo $getData->country; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Zipcode</b></label>
									<div class="col-md-10">
									   <input name="setting_zipcode" class="form-control" type="text" value="<?php echo $getData->zipcode; ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="mini_social_link">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-2"><b>Facebook</b></label>
									<div class="col-md-10">
									   <input name="setting_facebook" class="form-control" type="text" value="<?php echo $getData->social_facebook; ?>" >
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Linked-IN</b></label>
									<div class="col-md-10">
									   <input name="setting_linkedin" class="form-control" type="text" value="<?php echo $getData->social_linkedin; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Twitter</b></label>
									<div class="col-md-10">
									   <input name="setting_twitter" class="form-control" type="text" value="<?php echo $getData->social_twitter; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Instagram</b></label>
									<div class="col-md-10">
									   <input name="setting_instagram" class="form-control" type="text" value="<?php echo $getData->social_instagram; ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="mini_timings">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-2"><b>Days</b></label>
									<div class="col-md-10">
									   <input name="setting_days" class="form-control" type="text" value="<?php echo $getData->opening_days; ?>" >
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2"><b>Timings</b></label>
									<div class="col-md-10">
									   <input name="setting_times" class="form-control" type="text" value="<?php echo $getData->opening_times; ?>" >
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">&nbsp;</div>
				<div class="col-md-12">&nbsp;</div>
				<div class="col-md-12" style="text-align:right">
					<input type="submit" name="submit_settings_data" value="Update" class="btn btn-success">
				</div>
				</form>
				
			</div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
