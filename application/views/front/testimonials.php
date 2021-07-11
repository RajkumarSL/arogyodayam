<script src="<?php echo base_url(); ?>assets/js/flexible.pagination.js"></script>
<section id="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Testimonials</h2>
				<ul class="breadcrumb-nav list-inline">
					<li ><a href="<?php echo base_url(); ?>">Home</a></li>
					<li >Testimonials</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<style>
.hide{display: none;}

#pagination{
    margin-top: 20px;
    text-align: center;
}


.result{
    min-height: 20px;
    padding: 19px;
    margin-top: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
}

#showingInfo{
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic);
blockquote{
  font-size: 1.4em;
  font-family:Open Sans;
  font-style:italic;
  color: #555555;
  padding:1.2em 30px 1.2em 75px;
  border-left:8px solid #78C0A8 ;
  line-height:1.6;
  position: relative;
}

blockquote::before{
  font-family:Arial;
  content: "\201C";
  color:#78C0A8;
  font-size:4em;
  position: absolute;
  left: 10px;
  top:-10px;
}

blockquote::after{
  content: '';
}

blockquote span {
  display: block;
  text-align: right;
  font-size:18px;
  margin-top: 10px;
  text-transform: uppercase;
}

</style>
<section id="welcome" class="section-padding" style="padding: 50px 0;">
	<div class="container"> 	
        <div class="row">
			<div class="col-md-12">
				<input class="searchBox form-control" placeholder="Search Something">
			</div>
			<div class="col-md-12">	
				<div id="content">
					<?php 
					foreach($testimonials as $row)
					{
					?>
					<div class="result info-box mt-4" >
						<blockquote>
							<i class="fas fa-user" style="font-size: 23px;"></i>
							<p style="font-size: 25px;font-weight: bold;line-height: 30px;color: #2c3145;"><?php echo $row->title; ?></p>
							<p><?php echo $row->description; ?></p>
							<span> - <?php echo $row->author; ?></span>
						
						</blockquote>
                    </div>
					<?php
					}
					?>
				</div>
			</div>
			
			<div class="col-md-3">
				<div id="showingInfo" style="text-align: left;"></div>
			</div>
			<div class="col-md-9" style="text-align:right">
				<div id="pagingControls" style="margin: 15px 0;"></div>
			</div>
			  
			
			
        </div>
	</div>
</section>


<script>
    $(function() {

        var flexiblePagination = $('#content').flexiblePagination({
            itemsPerPage : 10,
            displayedPages: 3,
            itemSelector : '.result:visible',
            pagingControlsContainer : '#pagingControls',
            showingInfoSelector : '#showingInfo',
            css: {
                btnNumberingClass: 'btn btn-sm btn-success',
                btnFirstClass: 'btn btn-sm btn-success',
                btnLastClass: 'btn btn-sm btn-success',
                btnNextClass: 'btn btn-sm btn-success',
                btnPreviousClass: 'btn btn-sm btn-success'
            },
            searchBox: {
                onClick: false,  //If this is turn to false, the search-box will filter view on keyup.
                onClickSelector: '#butop'
            }
        });
        flexiblePagination.getController().onPageClick = function(pageNum, e){
            console.log('You Clicked Page: '+pageNum)
        };

// Direct JS Object method of using the FlexiblePagination
//        var pager = new Flexible.Pagination();
//        pager.itemsPerPage = 1;
//        pager.pagingContainer = '#content';
//        pager.itemSelector = 'div.result:visible';  //That is, Select and paginate only the filtered visible '.result' div.
//        pager.pagingControlsContainer = '#pagingControls';
//        pager.searchBox.onClick = false;
//        pager.searchBox.onClickSelector = '';        
//        pager.showCurrentPage();
    });

    </script>