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

	<link href="<?php echo base_url('assets/css/styles_body.css')?>" rel="stylesheet">

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
			<button class="btn btn-info btn-lg">
				<span class="glyphicon glyphicon-resize-full"></span>
			</button>
		</div>
	</div>
	<div class="col-20">
		<div id="view-mg" class="container">
				<div id="flipbook-row" class="row">
					<div class="col-lg-1"></div>
					<div id="flipbook"class="col-lg-10">
						<div class="hard"> Turn.js msmsagaielmz/lknclwfw</div>
						<div id="a1" class="hard"></div>
						<script>
							for(i=0;i<=20;i++){
								document.write('<div class="pg1"><object data="test.pdf" type="application/pdf" width="100" height="100">alt : <a href="aa.pdf">your.pdf</a></object></div>');
							}
						</script>
						<div class="pg1"> Page 1</div>
						<div class="pg2"> Page 2 </div>
						<div class="pg3"> Page 3 </div>
						<div class="pg4"> Page 4 </div>
						<div class="hard"></div>
						<div class="hard"></div>
					</div>
					<div class="col-lg-1">
						advertising
					</div>
				</div>
		</div>
	</div>
		<script type="text/javascript">
			var height = $('#flipbook-row').height();
//			var width = $('#flipbook-row').width();
//			alert(height);
			$("#flipbook").turn({
				width: 700,
				height: height-50,
				gradients:true,
				duration:1500,

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

	<hr class="half-rule"/>

	<div id="recommend_mg" class="container">
		<div id="" class="row">
			<div class="col-5"></div>
			<div class="col-1">
			<button id="btn-add" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-plus"></span>
			</button>
			</div>
		</div>

		<div id="" class="row">
			<div id="mg-slider" class="container">

			</div>
		</div>
	</div>

	</div>



</div>
</body>
</html>
