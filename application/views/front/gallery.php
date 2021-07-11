<section id="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Gallery</h2>
				<ul class="breadcrumb-nav list-inline">
					<li ><a href="<?php echo base_url(); ?>">Home</a></li>
					<li >Gallery</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/thumbnail/baguetteBox.min.css">
<style>
p
{
	margin: 10px 0px;
	text-align:justify;
	font-size: 15px;
    line-height: 25px;
}
</style>
	<style>
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
	</style>
<section id="welcome" class="section-padding" style="padding: 0px 0;">
	<div class="container gallery-container"> 	
		
		
		<div class="tz-gallery">

        <div class="row">
			<?php 
			foreach($gallery as $row)
			{
			?>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="<?php echo base_url(); ?>uploads/gallery/<?php echo $row->image; ?>">
                    <img src="<?php echo base_url(); ?>uploads/gallery/<?php echo $row->image; ?>" alt="Bridge" style="height:220px;">
                </a>
            </div>
			<?php
			}
			?>
        </div>

    </div>
	

	</div>
</section>

<script src="<?php echo base_url(); ?>assets/front/thumbnail/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>