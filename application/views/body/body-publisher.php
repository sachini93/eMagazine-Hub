
<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: Sachini-->
<!-- * Date: 12/3/2017-->
<!-- * Time: 4:12 PM-->
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
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<script src="<?php echo base_url('assets/js/Proper.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.js')?>" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/screenfull.js/3.3.2/screenfull.js"></script>
	<script src="<?php echo base_url('assets/turnjs4/lib/turn.js"')?>" type="text/javascript"></script>

<style>
	#main-div{
		height: 900px;
		background-image: url("https://www.aje.com/en/arc/dist/img/arc/Write-research-grant-get-funded.f84e744f.jpg");
		background-size: cover;
	}
	#nav-tab{
		margin: 50px;
		width:100%;
		height: 100%;

	}


</style>



	<div id="header" class="container-fluid">
		<div class="navbar-header">
			<div id="header-nav" class="row">
				<div class="col-2">
					<a class="navbar-brand" href="#">
						<img id="logo" width="50px" height="60px" alt="Brand" src="<?php echo base_url('images/logo.png"')?>">
					</a>
				</div>
				<div id="brand-name" class="col-3">
					<strong><h1 class="text-warning">Flip-Mag Hub</h1></strong>
				</div>
				<div class="col-6">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
					</div>
				</div>
				<div class="col-1">
					<div class="dropdown">
						<div id="profile" class="btn-group btn-group-sm" role="group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">View Profile</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log Out</a>
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
</head>

<body>

<div id="main-div" class="container-fluid">

	<div id="nav-tab" class="row content">
		<div class="col-lg-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="window.open(<?php echo base_url('NewArticle.html')?>)">Edit Profile</a>
				<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add Magazine</a>
				<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Add Article</a>
				<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete Article</a>
			</div>

		</div>
		<script>

		</script>

</div>


</body>
</html>

