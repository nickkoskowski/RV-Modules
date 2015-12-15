<?php include 'header.php'; ?>
<main>
	<div class="container">
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="">Home</a> > <a href="">Brands</a> > <a href="">Coachmen</a> > Adrenaline</p>
				</div>
			</div>
		</div>
		<div id="content" class="row">
			<div class="col-md-6">
				<iframe id="modelVid" width="520" height="280" src="https://www.youtube.com/embed/fwK4_TtbqBQ" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 text-center">
				<img src="images/floorplans/Adrenaline/25WB.jpg" data-toggle="modal" data-target="#vidModal">
				<!--<form class="callback-cta">
					<input type="text" placeholder="Your Name">
					<input type="text" placeholder="Phone Number">
					<button>Request a Callback</button>
				</form> -->
				<button data-toggle="modal" data-target="#contactModal">Contact Us for More Info</button>
			</div>
		</div>
		<div id="inventory" class="row">
			<h2>Coachmen - Adrenaline Floorplans</h2>
			<div class="col-md-3 model" data-vidlink="https://www.youtube.com/embed/YJ6UeRVVkYQ">
				<img src="images/floorplans/Adrenaline/25WB.jpg">
				<h3>25WB</h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 model" data-vidlink="https://www.youtube.com/embed/YJ6UeRVVkYQ">
				<img src="images/floorplans/Adrenaline/30QBS.jpg">
				<h3>30QBS</h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 model" data-vidlink="https://www.youtube.com/embed/YJ6UeRVVkYQ">
				<img src="images/floorplans/Adrenaline/30QBS.jpg">
				<h3>30QBS</h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 model" data-vidlink="https://www.youtube.com/embed/YJ6UeRVVkYQ">
				<img src="images/floorplans/Adrenaline/30QBS.jpg">
				<h3>30QBS</h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
		</div>
		<div></div>
	</div>
</main>
</div>
<div id="vidModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Adrensline 25WB Floorplan</h4>
			</div>
			<div class="modal-body">
				<img src="images/floorplans/Adrenaline/25WB.jpg">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="contactModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Get More Information</h4>
			</div>
			<div class="modal-body">
				<form class="callback-cta">
					<input type="text" placeholder="Your Name">
					<input type="text" placeholder="Phone Number">
					<input type="text" placeholder="Email Address">
					<button>Request a Callback</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>