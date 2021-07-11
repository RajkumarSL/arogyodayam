<section id="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Our Treatments</h2>
				<ul class="breadcrumb-nav list-inline">
					<li ><a href="<?php echo base_url(); ?>">Home</a></li>
					<li >Our Treatments</li>
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
					<h2 style="font-size: 30px;">Our Treatments</h2>
					<hr>
				</div>
			</div>
		</div>
		<?php 
		$get_ourtreatments = $this->db->get("tbl_our_treatments")->result();
		foreach($get_ourtreatments as $row_ot)
		{
		?>
		<div class="row">
			<div class="col-md-2">
				<img src="<?php echo base_url(); ?>uploads/our_treatments/<?php echo $row_ot->images; ?>" alt="" class="img-responsive card-1" style="border: 3px solid #017a48;">
			</div>
			<div class="col-md-10">
				<h4><?php echo $row_ot->title; ?></h4>
                <p><?php echo $row_ot->description; ?></p>
			</div>
		</div>
		<div class="row">&nbsp;</div>
		<?php		
		}
		?>
	</div>
</section>