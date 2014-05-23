<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url()?>">Go Catholic
				Events</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li id="liHome"><a href="<?php echo base_url()?>">Home</a></li>
				<li id="liAbout"><a href="<?php echo site_url('about')?>">About</a></li>
				<li id="liContact"><a href="<?php echo site_url('contact')?>">Contact</a></li>
				<li id="liContribute"><a href="<?php echo site_url('contribute')?>">Contribute</a></li>

			</ul>
			<form class="navbar-form" role="search"
				action="<?php echo site_url("index/search/")?>" method="get">
				<div class="form-group">
					<input type="text" class="form-control"
						placeholder="City, State or Zip Code" name="location"
						value="<?php echo $this->session->userdata(LOCATION);?>">
				</div>
				<button type="submit" class="btn btn-default">
					<!-- 				<span class="glyphicon glyphicon-search"></span> -->
					Search
				</button>
			</form>
		</div>
	</div>
</div>
<script>
$(function() {
	var title = window.location.href;
	if (title.indexOf("contact") > 0) {
		highlight($('#liContact'));
	}
	else if (title.indexOf("about") > 0) {
	    highlight($('#liAbout'));
	}
	else if (title.indexOf("contribute") > 0) {
	    highlight($('#liContribute'));
	}
	else {
		highlight($('#liHome'));
	}
});
function highlight(element) {
	element.addClass('active');
}
</script>