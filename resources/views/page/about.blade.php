@extends('page.layout.master')

@section('content')
	<!-- banner -->
		<div class="banner1">
			<div class="container">
				<div class="w3ls_logo w3ls_logo_about">
					<h1><a href="index.html">Cattle Farm</a></h1>
				</div>
			</div>
		</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
		<div class="agileits_breadcrumbs">
			<div class="container">
				<div class="agileits_breadcrumbs_left">
					<ul>
						<li><a href="index.html">Home</a><i>|</i></li>
						<li>About Us</li>
					</ul>
				</div>
				<div class="agileits_breadcrumbs_right">
					<h2>About Us</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //breadcrumbs -->
	<!-- about -->
		<div class="about">
			<div class="container">
				<h3 class="head"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>About Us</h3>
				<div class="w3_about_grids">
					<div class="col-md-6 w3_about_grid_left">
						<h5>Integer facilisis velit leo, vitae gravida</h5>
						<p>Suspendisse ornare sed purus a imperdiet. Integer viverra nisi orci,
							in volutpat leo ornare vitae. Nulla faucibus, arcu at consequat vulputate,
							turpis metus blandit urna, quis suscipit orci nibh nec est.</p>
						<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche voluptate
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body panel_text">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							   <div class="panel-body panel_text">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry qui
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							   <div class="panel-body panel_text">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi sint cliche proident
								</a>
							  </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							   <div class="panel-body panel_text">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							  </div>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-md-6 w3_about_grid_right">
						<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="wmuSliderWrapper">
								<article style="position: absolute; width: 100%; opacity: 0;">
									<div class="banner-wrap">
										<img src="images/11.jpg" alt=" " class="img-responsive" />
									</div>
								</article>
								<article style="position: absolute; width: 100%; opacity: 0;">
									<div class="banner-wrap">
										<img src="images/12.jpg" alt=" " class="img-responsive" />
									</div>
								</article>
							</div>
						</div>
						<script src="js/jquery.wmuSlider.js"></script>
							<script>
								$('.example1').wmuSlider();
							</script>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!-- //about -->
	<!-- team -->
		<div class="team">
			<div class="container">
				<h3 class="head"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Meet Our Team</h3>
				<div class="agile_team_grids">
					<div class="col-md-3 agile_team_grid">
						<div class="agile_team_grid1">
							<img src="images/1.png" alt=" " class="img-responsive" />
							<div class="agile_team_grid1_pos">
								<a href="#" class="facebook1"></a>
							</div>
							<div class="agile_team_grid1_pos1">
								<ul>
									<li><a href="#" class="google1"></a></li>
									<li><a href="#" class="instagram1"></a></li>
								</ul>
							</div>
						</div>
						<h4>Daniel Paul <span>Farmer</span></h4>
						<p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
					</div>
					<div class="col-md-3 agile_team_grid">
						<div class="agile_team_grid1">
							<img src="images/3.png" alt=" " class="img-responsive" />
							<div class="agile_team_grid1_pos">
								<a href="#" class="twitter1"></a>
							</div>
							<div class="agile_team_grid1_pos1">
								<ul>
									<li><a href="#" class="facebook1"></a></li>
									<li><a href="#" class="instagram1"></a></li>
								</ul>
							</div>
						</div>
						<h4>Mark Doe <span>Farmer</span></h4>
						<p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
					</div>
					<div class="col-md-3 agile_team_grid">
						<div class="agile_team_grid1">
							<img src="images/2.png" alt=" " class="img-responsive" />
							<div class="agile_team_grid1_pos">
								<a href="#" class="google1"></a>
							</div>
							<div class="agile_team_grid1_pos1">
								<ul>
									<li><a href="#" class="instagram1"></a></li>
									<li><a href="#" class="twitter1"></a></li>
								</ul>
							</div>
						</div>
						<h4>John Crisp <span>Farmer</span></h4>
						<p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
					</div>
					<div class="col-md-3 agile_team_grid">
						<div class="agile_team_grid1">
							<img src="images/4.png" alt=" " class="img-responsive" />
							<div class="agile_team_grid1_pos">
								<a href="#" class="instagram1"></a>
							</div>
							<div class="agile_team_grid1_pos1">
								<ul>
									<li><a href="#" class="facebook1"></a></li>
									<li><a href="#" class="twitter1"></a></li>
								</ul>
							</div>
						</div>
						<h4>Michael Carl <span>Farmer</span></h4>
						<p>Morbi placerat molestie felis. Integer facilisis velit leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!-- //team -->
	<!-- team-bottom -->
		<div class="team-bottom">
			<div class="container">
				<h3>Nulla faucibus, arcu at consequat vulputate, turpis metus blandit urna,
					quis suscipit orci nibh nec est. Phasellus tempus augue turpis.</h3>
				<p class="dolor">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<div class="more more1">
					<a href="mail.html" class="button button--nina button--size-s" data-text="Mail Us">
						<span>M</span><span>a</span><span>i</span><span>l</span> <span>U</span><span>s</span>
					</a>
				</div>
			</div>
		</div>
	<!-- //team-bottom -->
@endsection
