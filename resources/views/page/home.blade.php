@extends('page.layout.master')

@section('content')
	<!-- banner -->
		<div class="banner">
			<div class="container">
				<div class="w3ls_logo">
					<h1><a href="index.html">Cattle Farm</a></h1>
				</div>
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3l_banner_info">
									<h3>Fusce et egestas erat. Mauris eget iaculis magna, non gravida orci.</h3>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h3>Mauris eget iaculis magna, non gravida orci. Aenean nec odio quis.</h3>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h3>Aenean a dolor lobortis, luctus augue vel, ultrices lorem fermentum.</h3>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h3>Phasellus libero tellus, pulvinar vitae sem sit amet, faucibus neque.</h3>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h3>Vestibulum non erat ut odio euismod accumsan. Phasellus libero tellus.</h3>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
			</div>
		</div>
	<!-- //banner -->
	<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="col-md-7 wthree_banner_bottom_left">
					<h2>Aenean id lectus tempus, dapibus urna ut, efficitur justo. Sed vel ornare elit.</h2>
				</div>
				<div class="col-md-5 wthree_banner_bottom_right">
					<div class="more">
						<a href="single.html" class="button button--nina button--size-s" data-text="Learn more">
							<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //banner-bottom -->
	<!-- services -->
		<div class="services">
			<div class="container">
				<div class="col-md-4 agileits_service_grid">
					<div class="agileits_service_grid1">
						<span></span>
					</div>
					<h3>Etiam fringilla magna velit</h3>
					<p>Ut volutpat mi sit amet eros fermentum posuere. Sed mollis, tellus et imperdiet
						aliquet, turpis ex tincidunt lectus.</p>
				</div>
				<div class="col-md-4 agileits_service_grid">
					<div class="agileits_service_grid2">
						<span></span>
					</div>
					<h3>amet eros fermentum posuere</h3>
					<p>Ut volutpat mi sit amet eros fermentum posuere. Sed mollis, tellus et imperdiet
						aliquet, turpis ex tincidunt lectus.</p>
				</div>
				<div class="col-md-4 agileits_service_grid">
					<div class="agileits_service_grid3">
						<span></span>
					</div>
					<h3>Tellus et imperdiet turpis</h3>
					<p>Ut volutpat mi sit amet eros fermentum posuere. Sed mollis, tellus et imperdiet
						aliquet, turpis ex tincidunt lectus.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //services -->
	<!-- gallery -->
		<div class="gallery">
			<h3 class="head"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Our Cattle Farm</h3>
			<div class="w3_gallery_grids">
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt=" " />
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<span id="jzBoxMoreItems">
							<div id="jzBoxCounter"></div>
							<i class="arrow-left" id="jzBoxPrev"></i>
							<i class="arrow-right" id="jzBoxNext"></i>
						</span>
						<i class="close" id="jzBoxClose"></i>
					</div>
				</div>
						<div class="col-md-2 w3_gallery_grid">
							<a href="images/1.jpg" class="jzBoxLink" title="Cattle Farm">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="w3_gallery_grid1">
								<h4>turpis tincidunt</h4>
								<p>Sed mollis, tellus et imperdiet aliquet, turpis.</p>
							</div>
						</div>
						<div class="col-md-2 w3_gallery_grid">
							<a href="images/2.jpg" class="jzBoxLink" title="Cattle Farm">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="w3_gallery_grid1">
								<h4>imperdiet aliquet</h4>
								<p>Sed mollis, tellus et imperdiet aliquet, turpis.</p>
							</div>
						</div>
						<div class="col-md-2 w3_gallery_grid">
							<a href="images/3.jpg" class="jzBoxLink" title="Cattle Farm">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="w3_gallery_grid1">
								<h4>mollis tellus turpis</h4>
								<p>Sed mollis, tellus et imperdiet aliquet, turpis.</p>
							</div>
						</div>
						<div class="col-md-2 w3_gallery_grid">
							<a href="images/5.jpg" class="jzBoxLink" title="Cattle Farm">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="w3_gallery_grid1">
								<h4>sit amet faucibus</h4>
								<p>Sed mollis, tellus et imperdiet aliquet, turpis.</p>
							</div>
						</div>
						<div class="col-md-2 w3_gallery_grid">
							<a href="images/4.jpg" class="jzBoxLink" title="Cattle Farm">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="w3_gallery_grid1">
								<h4>interdum sollicit</h4>
								<p>Sed mollis, tellus et imperdiet aliquet, turpis.</p>
							</div>
						</div>
						<div class="col-md-2 w3_gallery_grid">
							<a href="images/6.jpg" class="jzBoxLink" title="Cattle Farm">
								<img src="images/6.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="w3_gallery_grid1">
								<h4>suscipit sapien</h4>
								<p>Sed mollis, tellus et imperdiet aliquet, turpis.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					<script src="js/jzBox.js"></script>
			</div>
		</div>
	<!-- //gallery -->
	<!-- features -->
		<div class="features">
			<div class="container">
				<h3 class="head"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>Special Features</h3>
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Feature-1</a></li>
							<li role="presentation"><a href="#Feature1" role="tab" id="Feature1-tab" data-toggle="tab" aria-controls="Feature1">Feature-2</a></li>
							<li role="presentation"><a href="#Feature2" role="tab" id="Feature2-tab" data-toggle="tab" aria-controls="Feature2">Feature-3</a></li>
							<li role="presentation"><a href="#Feature3" role="tab" id="Feature3-tab" data-toggle="tab" aria-controls="Feature3">Feature-4</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="w3agile_tabs">
									<div class="col-md-7 w3agile_tab_left">
										<h4>suscipit sapien nec interdum sollicitudin</h4>
										<p>Nunc faucibus lorem a arcu gravida, eget auctor eros
											ultrices. Vestibulum non erat ut odio euismod accumsan.
											Phasellus libero tellus, pulvinar vitae sem sit amet,
											faucibus consectetur neque.</p>
										<ul>
											<li>pulvinar vitae sem sit amet</li>
											<li>faucibus consectetur neque</li>
											<li>erat odio euismod accumsan</li>
											<li>sapien nec interdum euismod</li>
											<li>Phasellus libero tellus sem</li>
											<li>gravida eget auctor eros</li>
										</ul>
									</div>
									<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
										<img src="images/7.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">
								<div class="w3agile_tabs">
									<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
										<img src="images/8.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 w3agile_tab_left">
										<h4>pulvinar vitae sem sit amet non erat ut</h4>
										<p>Nunc faucibus lorem a arcu gravida, eget auctor eros
											ultrices. Vestibulum non erat ut odio euismod accumsan.
											Phasellus libero tellus, pulvinar vitae sem sit amet,
											faucibus consectetur neque.</p>
										<ul>
											<li>pulvinar vitae sem sit amet</li>
											<li>faucibus consectetur neque</li>
											<li>erat odio euismod accumsan</li>
											<li>sapien nec interdum euismod</li>
											<li>Phasellus libero tellus sem</li>
											<li>gravida eget auctor eros</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
								<div class="w3agile_tabs">
									<div class="col-md-7 w3agile_tab_left">
										<h4>faucibus consectetur neque sollicitudin</h4>
										<p>Nunc faucibus lorem a arcu gravida, eget auctor eros
											ultrices. Vestibulum non erat ut odio euismod accumsan.
											Phasellus libero tellus, pulvinar vitae sem sit amet,
											faucibus consectetur neque.</p>
										<ul>
											<li>pulvinar vitae sem sit amet</li>
											<li>faucibus consectetur neque</li>
											<li>erat odio euismod accumsan</li>
											<li>sapien nec interdum euismod</li>
											<li>Phasellus libero tellus sem</li>
											<li>gravida eget auctor eros</li>
										</ul>
									</div>
									<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
										<img src="images/9.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab">
								<div class="w3agile_tabs">
									<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
										<img src="images/10.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 w3agile_tab_left">
										<h4>gravida eget auctor eros libero tellus</h4>
										<p>Nunc faucibus lorem a arcu gravida, eget auctor eros
											ultrices. Vestibulum non erat ut odio euismod accumsan.
											Phasellus libero tellus, pulvinar vitae sem sit amet,
											faucibus consectetur neque.</p>
										<ul>
											<li>pulvinar vitae sem sit amet</li>
											<li>faucibus consectetur neque</li>
											<li>erat odio euismod accumsan</li>
											<li>sapien nec interdum euismod</li>
											<li>Phasellus libero tellus sem</li>
											<li>gravida eget auctor eros</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	<!-- //features -->
@endsection
