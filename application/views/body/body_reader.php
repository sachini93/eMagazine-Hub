<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: Sachini-->
<!-- * Date: 11/29/2017-->
<!-- * Time: 12:05 AM-->
<!-- */-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>

	<link href="<?php echo base_url('assets/css/styles_body.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


	<script src="<?php echo base_url('assets/turnjs4/lib/turn.js"')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/Proper.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.js')?>" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/screenfull.js/3.3.2/screenfull.js"></script>

</head>
<body>
<div id="content" class="container-fluid">
	<div id="my-mg" class="container">
		<div id="my-mg-info" class="row">
			<div class="alert alert-warning row" role="alert">
				<div class="col-md-7"><h3><span class="label label-primary">My magazines</span></h3></div>
				<div class="col-md-2"><button class="btn btn-success btn-xs" type="button" style="margin-left:40px ">View more>></button></div>
			</div>
		</div>
		<div id="row-shelf" class="row" style="width: 950px">
			<script>
				for(i=0;i<=10;i++){
					document.write(' <div class="col-xs-4 col-md-2"><a href=""><img src="http://placehold.it/150x190/e8117f/fff&amp;text=Book%20Title" class="img-responsive book"></a></div>');
					if(i%5==0 && i!=0){
						document.write('<div class="col-xs-12 shelf"></div>');
					}
				}
			</script>
		</div>
	</div>

	<hr class="half-rule"/>

	<div class="col-1">
		<div id="btn-full-screen" class="col-sm-1">
			<button class="btn btn-info">
				<span class="glyphicon glyphicon-resize-full"></span>
			</button>
		</div>
	</div>
	<div class="col-sm-20">
		<div id="view-mg" class="container">
				<div class="row">
					<div id="flipbook"class="col-sm-8">
						<div class="hard"> Turn.js msmsagaielmz/lknclwfw</div>
						<div id="a1" class="hard"></div>
						<script>
							for(i=0;i<=2;i++){
								document.write(' <div class="pg1"> ABC</div>');
							}
						</script>
						<div class="pg1"> </div>
						<div class="pg2"> Page 2 </div>
						<div class="pg3"> Page 3 </div>
						<div class="pg4"> Page 4 </div>
						<div class="hard"></div>
						<div class="hard"></div>
					</div>
					<div class="col-sm-1">
						advertising
					</div>
				</div>
			</div>
	</div>
		<script type="text/javascript">
			$("#flipbook").turn({
				width: 700,
				height: 400,
				gradients:true,
			});
			//$( "#a1" ).load( "./ex.html div#x");//try load from database
		</script>
		<script type="text/javascript">
			const el = document.getElementById('view-mg');
			document.getElementById('btn-full-screen').addEventListener('click',function(){
				if(screenfull.enabled) {
					screenfull.request(el);
				}
			});
		</script>
	</div>

	<hr class="half-rule"/>

	<div id="recommends-mg" class="container">
		<div class="row">

		</div>

		<div class="row"></div>
	</div>

</div>
</body>
</html>
