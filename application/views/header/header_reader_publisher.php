<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: Sachini-->
<!-- * Date: 11/28/2017-->
<!-- * Time: 7:05 PM-->
<!-- */-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>

	<link href="<?php echo base_url('assets/css/styles_header.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<script src="<?php echo base_url('assets/js/Proper.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.js')?>" type="text/javascript"></script>


</head>
<body>
<div id="header" class="container-fluid">
	<div class="navbar-header">
		<div id="header-nav" class="row">
			<div class="col-lg-2">
				<a class="navbar-brand" href="#">
					<img alt="Brand" src="...">
				</a>
			</div>
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div>
			</div>
			<div class="col-md-1">
				<div class="dropdown">
					<div id="profile" class="btn-group btn-group-sm" role="group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						</div>
						<button type="button" class="btn btn-default">
							<img src="<?php echo base_url('images/user.png')?>" class="profile-image img-circle" style="max-width:40px">
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
