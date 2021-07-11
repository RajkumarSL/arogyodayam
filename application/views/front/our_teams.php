<section id="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Our Teams</h2>
				<ul class="breadcrumb-nav list-inline">
					<li ><a href="<?php echo base_url(); ?>">Home</a></li>
					<li >Our Teams</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<style>
p
{
	margin: 10px 0px;
	text-align:justify;
	font-size: 15px;
    line-height: 25px;
}
.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
</style>
<section id="welcome" class="section-padding">
	<div class="container">            
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12 text-center">
				<div class="section-title">
					<h3>Welcome to</h3>
					<h2 style="font-size: 30px;">Our Teams</h2>
					<hr>
				</div>
			</div>
		</div>
		<?php 
		$get_ourteams = $this->db->get("tbl_our_teams")->result();
		foreach($get_ourteams as $row_oteams)
		{
		?>
			<div class="row">
				<div class="col-md-12 col-12 text-center">
					<img src="<?php echo base_url(); ?>uploads/our_teams/<?php echo $row_oteams->images; ?>" style="width:200px;" class="img-responsive" />
				</div>
				<p style="margin: 0px;padding: 0px;">&nbsp;</p>
				<div class="col-md-12 col-12 text-center">
					<div class="section-title" style="    margin-bottom: 20px;">
						<h2 style="font-size: 30px;margin-bottom: 0px;"><?php echo $row_oteams->title; ?></h2>
						<br><small style="font-size: 13px;"><?php echo $row_oteams->position; ?></small>
					</div>
				</div>
				<div class="col-md-12 col-12 text-center">
					<p><?php echo $row_oteams->description; ?></p>
				</div>
			</div>
			<div class="row">&nbsp;</div>
		<?php		
		}
		?>
		
	</div>
</section>