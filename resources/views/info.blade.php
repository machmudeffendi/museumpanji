@extends('layouts.artmuseum.base')

@section('title', 'Gallery')

@section('content')
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						About Us				
					</h1>	
					<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
				</div>											
			</div>
		</div>
	</section>
	<!-- End banner Area -->	

	<!-- Start quote Area -->
	<section class="quote-area pt-100">
		<div class="container">				
			<div class="row">
				<div class="col-lg-6 quote-left">
					<h1>
						<span>Music</span> gives soul to the universe, <br>
						wings to the <span>mind</span>, flight <br>
						to the <span>imagination</span>.
					</h1>
				</div>
				<div class="col-lg-6 quote-right">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</p>
				</div>
			</div>
		</div>	
	</section>
	<!-- End quote Area -->			


	<!-- Start service Area -->
	<section class="service-area section-gap" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-service">
						<span class="lnr lnr-clock"></span>
						<h4>Openning Hours</h4>
						<p>
							Mon - Fri: 10.00am to 05.00pm
						Sat: 12.00pm to 03.00 pm
						Sunday Closed
						</p>						 	
						<div class="overlay">
							<div class="text">
								<p>
									Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
								</p>
								<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							</div>
						</div>
					</div>							
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<span class="lnr lnr-rocket"></span>
						<h4>Ongoing Exhibitions</h4>
						<p>
							Mon - Fri: 10.00am to 05.00pm
						Sat: 12.00pm to 03.00 pm
						Sunday Closed
						</p>						 	
						<div class="overlay">
							<div class="text">
								<p>
									Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
								</p>
								<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							</div>
						</div>
					</div>							
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<span class="lnr lnr-briefcase"></span>
						<h4>Openning Events</h4>
						<p>
							Mon - Fri: 10.00am to 05.00pm
						Sat: 12.00pm to 03.00 pm
						Sunday Closed
						</p>						 	
						<div class="overlay">
							<div class="text">
								<p>
									Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
								</p>
								<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							</div>
						</div>
					</div>							
				</div>												
			</div>
		</div>	
	</section>
	<!-- End service Area -->

	<!-- Start about info Area -->
	<section class="section-gap info-area" id="about">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-40 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Few words about our Museum</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>					
			<div class="single-info row mt-40">
				<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
					<div class="info-thumb">
						<img src="{{asset('assets/image/patung.jpg')}}" width="90%" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 no-padding info-rigth">
					<div class="info-content">
						<h2 class="pb-30">We Realize that <br>
						there are reduced <br>
						Wastege Stand out</h2>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
						</p>
						<br>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
						</p>
						<br>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
						</p>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End about info Area -->
@endsection