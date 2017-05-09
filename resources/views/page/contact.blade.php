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
						<li>Mail Us</li>
					</ul>
				</div>
				<div class="agileits_breadcrumbs_right">
					<h2>Mail Us</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //breadcrumbs -->
	<!-- mail -->
		<div class="w3_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7859812.209374686!2d101.30962748076922!3d15.86716175385292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31157a4d736a1e5f%3A0xb03bb0c9e2fe62be!2sVietnam!5e0!3m2!1sen!2sin!4v1461066179025" style="border:0"></iframe>
		</div>
		<div class="mail">
			<div class="container">
				<h3 class="head"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail Us</h3>
				<div class="agile_mail_grids">
					<div class="agile_mail_grid">
						<form action="#" method="post">
							<div class="col-md-6 agile_mail_grid_left">
								<input type="text" name="Name" placeholder="Name" required="">
								<input type="text" name="Phone" placeholder="Phone" required="">
							</div>
							<div class="col-md-6 agile_mail_grid_left">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Subject" placeholder="Subject" required="">
							</div>
							<div class="clearfix"> </div>
							<textarea name="Message" placeholder="Message..." required=""></textarea>
							<input type="submit" value="Submit Now">
						</form>
					</div>
				</div>
				<div class="agile_mail_grid1">
					<div class="col-md-4 agile_mail_grid1_left">
						<div class="mail_grid1_left1">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<h4>Contact By Email</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
								voluptatibus maiores alias.</p>
							<ul>
								<li>Mail1: <a href="mailto:info@example.com">info@example1.com</a></li>
								<li>Mail2: <a href="mailto:info@example.com">info@example2.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 agile_mail_grid1_left">
						<div class="mail_grid1_left1">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<h4>Contact By Phone</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
								voluptatibus maiores alias.</p>
							<ul>
								<li>Phone: +0000 123 312</li>
								<li>Fax: +123 312</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 agile_mail_grid1_left">
						<div class="mail_grid1_left1">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							<h4>Looking For Address</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
								voluptatibus maiores alias.</p>
							<ul>
								<li>Address: General Pvt 66, Dong Da</li>
								<li>Hanoi, Vietnam.</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!-- //mail -->
@endsection
