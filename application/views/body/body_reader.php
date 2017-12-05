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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Bitter" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css')?>" type="text/css">

</head>
<body>
<div id="content" class="container-fluid">
	<div id="my-mg-bg" class="container-fluid">
		<div id="my-mg" class="container">
			<div id="my-mg-info" class="row">
				<div class="alert alert-warning row" role="alert">
					<div class="col-md-7"><h3><span class="label label-primary">My magazines</span></h3></div>
					<div class="col-md-2"><button class="btn btn-success btn-xs" type="button" style="margin-left:40px ">View more>></button></div>
				</div>
			</div>
			<div id="row-shelf" class="row" style="width: 950px">
				<div class="col-xs-4 col-md-2"><a href=""><img src="http://s3.media.squarespace.com/production/697614/8178705/2007/05/cover_nature-447-7140.jpg" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5b9s8c-xcKOkiXU8OKXuZG0FpHk46F4UlmYlP-zjLAtmqoHrRLQ" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Ko8bC_zfvcom7mHoL9eRzxLlbYtraZ3pYoDsKnm2j6IMo6Oa9g" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWD7L_q1AuZdLzvHKN9b12f7ChJdsjsgGFmxC6P62fV5DxqeNb" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1YvTf-b1k3dKjmv8AMQ4fjUdXm3QUWxaGUwBR_-b9qQ2AOTg4nA" class="img-responsive book"></a></div>
				<div class="col-xs-12 shelf"></div>

				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjYm7DM6IfIep7eOPbd267GRmLeNwisYvfCxghqPQTEKAt_-0z" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuHka752BbSc_RyAuJOtwAc75J3MH37vFYfDA5oqv5Daj-QhRqkQ" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjm0oYUeT6kmVtpzY-yHYreVJqFjT4uuD_x9ySjrAR9M6PQa9U" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJgG7DG3e5SqTIhocaHoXcQ86DgLH4KWmjem4z7gLWqsumshvygQ" class="img-responsive book"></a></div>
				<div class="col-xs-4 col-md-2"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTecgNByM2EE9bbMqBm7A3V_vScBYpkxbhGkRXE2ouQSa5o-Thv" class="img-responsive book"></a></div>
				<div class="col-xs-12 shelf"></div>
<!--				<script>-->
<!--					for(i=0;i<=10;i++){-->
<!--						document.write(' <div class="col-xs-4 col-md-2"><a href=""><img src="http://placehold.it/150x190/e8117f/fff&amp;text=Book%20Title" class="img-responsive book"></a></div>');-->
<!--						if(i%5==0 && i!=0){-->
<!--							document.write('<div class="col-xs-12 shelf"></div>');-->
<!--						}-->
<!--					}-->
<!--				</script>-->

			</div>
		</div>
	</div>

	<hr class="half-rule"/>

	<div class="col-1">
			<div id="btn-full-screen" class="col-lg-1">
				<button class="btn btn-info btn-lg">
					<span class="glyphicon glyphicon-resize-full"></span>
				</button>
			</div>
	</div>
	<div class="col-20">
		<div id="view-mg" class="container">
			<div id="flipbook-row" class="row">
				<div class="col-lg-1">
					<button id="btn-rate" class="btn btn-info btn-lg" href="#" target="_blank">
						<span class="glyphicon glyphicon-star"></span>
						<a href="<?php echo base_url('rating/index.html')?>" target="_blank"></a>
					</button>
					<script>
//						var btn = document.getElementById('btn-rate');
//						btn.onclick = function() {
//							window.open('./rating/index.html','newtaborsomething');
//						}
$(function(){
	$('#btn-rate').click(function(){
		container1.style.display = "block";
		container1.css("position", "fixed");
		container1.css("top", ($(window).height()/2 - this.height()/2) + "px");
		container1.css("left", ($(window).width()/2 - this.width()/2) + "px");
//		$this.load( "<?php //echo base_url('rating/index.html')?>//" );
	})
//	$('#btn-rate').click(function(){
//		container1.style.display = "none";
//	}
})

					</script>
				</div>
					<div id="flipbook"class="col-lg-10">
						<div class="hard"> <img height="460px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/mg11.jpg')?>"alt="First slide" ></div>

						<div class="pg1"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg2.jpg')?>"alt="First slide" ></div>
						<div class="pg2"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg3.jpg')?>"alt="First slide" ></div>
						<div class="pg3"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg4.jpg')?>"alt="First slide" ></div>
						<div class="pg4"> <img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg5.jpg')?>"alt="First slide" ></div>
						<div class="hard"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg6.jpg')?>"alt="First slide" ></div>
						<div class="hard"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg7.jpg')?>"alt="First slide" ></div>
						<div class="pg1"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg8.jpg')?>"alt="First slide" ></div>
						<div class="pg2"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg9.jpg')?>"alt="First slide" ></div>
						<div class="pg3"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg10.jpg')?>"alt="First slide" ></div>
						<div class="pg4"> <img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg4.jpg')?>"alt="First slide" ></div>
						<div class="hard"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg2.jpg')?>"alt="First slide" ></div>
						<div class="hard"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg3.jpg')?>"alt="First slide" ></div>
						<div id="a1" class="hard"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/mg8.jpg')?>"></div>
						<div class="hard"><img height="500px" width="480px" class="d-block w-100" src="<?php echo base_url('images/magazine/pgs/pg11.jpg')?>"> </div>
					</div>

				<div id="advertisement" class="col-lg-1">
						<img height="500px" width="100px" class="d-block w-100" src="<?php echo base_url('images/add2.png')?>"alt="First slide" >
					</div>
				<div id="ad-space" class="row">
					<span id="add-msg"class="info">Place your add here</span>
				</div>
			</div>

		</div>
	</div>
		<script type="text/javascript">
			var height = $('#flipbook-row').height();
//			var width = $('#flipbook-row').width();
//			alert(height);
			$("#flipbook").turn({
				width: 500,
				height: height-90,
				gradients:true,
				duration:1500,
//				overflow:hidden,

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
				<div class="container">
					<div class="row" style="background-color: #f0f0f0;border-radius: 5%; ;padding-bottom: 40px; padding-top: 40px;">
						<div class="col-lg-1"></div>
						<div class="col-lg-10 col-xs-12 col-sm-12">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleControls" data-slide-to="1"></li>
									<li data-target="#carouselExampleControls" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100" src="<?php echo base_url('images/magazine/mg1.jpg')?>"alt="First slide" >
											</div>
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg2.jpg')?>" alt="First slide">
											</div>
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg3.jpg')?>" alt="First slide">
											</div>

										</div>
									</div>

									<div class="carousel-item">
										<div class="row">
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg9.jpg')?>" alt="Two slide">
											</div>
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg5.jpg')?>" alt="Two slide">
											</div>
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg6.jpg')?>" alt="Two slide">
											</div>
										</div>
									</div>

									<div class="carousel-item">
										<div class="row">
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg1.jpg')?>" alt="Three slide">
											</div>
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg8.jpg')?>" alt="Three slide">
											</div>
											<div class="col-lg-4 col-xs-4 col-sm-4">
												<img height="270px" width="250px" class="d-block w-100"  src="<?php echo base_url('images/magazine/mg9.jpg')?>" alt="Three slide">
											</div>

										</div>
									</div>

								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	</div>



</div>
</body>
</html>
