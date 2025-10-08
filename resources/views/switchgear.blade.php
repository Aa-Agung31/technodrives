@extends('layout.layout1')

@section('content')


<!--==================================================-->
<!-- Start solutek breadcumb Area -->
<!--==================================================-->

<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h4>LV & MV Switchgear</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>LV & MV Switchgear</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek breadcumb Area -->
<!--==================================================-->


<div class="about-area style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-thumbail">
					<div class="about-thumb">
						<img src="assets/images/home-two/28.png" alt="about-thumb">	
					</div>
					<div class="about-shape">
						<img src="assets/images/home-two/about-shape.png" alt="about1">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-section-content">
					<div class="section-title text-left">
						<h5 class="section-sub-title">PT.Technodrives Services</h5>
						<h1 class="section-main-title">LV & MV</h1>
						<h1 class="section-main-title">Switchgear</h1>
						<p class="section-title-descr" style="text-align: justify;">The Leaflet Switchgear outlines Technodrives’ expertise in switchgear testing and commissioning through online and offline methods such as thermography, breaker timing, insulation, and relay protection tests. It emphasizes the use of advanced tools, compliance with international standards, and proven project experience with global clients like ABB, AWS, Microsoft, and STT Telemedia, highlighting the company’s strong focus on safety, quality, and reliability.</p>
					</div>
					<div class="about-list-item">
						<ul>
							<li><img src="assets/images/home-two/about-icon2.png" alt="icon">Services – Advanced switchgear testing.</li>
							<li><img src="assets/images/home-two/about-icon2.png" alt="icon">Expertise – Trusted by ABB, AWS, Microsoft, STT.</li>
						</ul>
					</div>
					<div class="solutek-btn">
						<a href="{{ route('about') }}" class="btn-2">EXPLORE MORE</a>
					</div>
					<div class="about-contact-box">
						<div class="call-box">
							<div class="about-contact">
								<img src="assets/images/home-two/call-icon.png" alt="icon">
							</div>
							<div class="about-contact-content">
								<h4>Contact Us</h4>
								<p>(+62 21) 737 2402</p>
							</div>
						</div>
				   </div>
				</div>	
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- start solutek service Area style-two-->
<!--==================================================-->

<div class="sservice-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">PT. Technodrives</h5>
					<h1 class="section-main-title">Online Test</h1>
					<!-- <h1 class="section-main-title">Drive <span>Success.</span></h1> -->
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service1.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Visual Inspection</h3>
						<p class="service-text">Visual inspection ensures breaker condition, power connections, wiring, terminals, cable markers, and grounding connections remain reliable.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service2.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Power Monitoring</h3>
						<p class="service-text">Power monitoring tracks voltage, current, frequency, overall power, and lamp indicators, ensuring reliable, safe, and efficient performance.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service3.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Infrared Thermography</h3>
						<p class="service-text">Infrared thermography detects hotspots in cables, terminals, components, and busbars, ensuring safety, preventing failures, and improving reliability.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			
		</div>
		<div class="service-shape bounce-animate3">
			<img src="assets/images/service5.png" alt="service5">
		</div>
		<div class="service-shape2">
			<img src="assets/images/service7.png" alt="service5">
		</div>
		<div class="service-shape3 bounce-animate4">
			<img src="assets/images/service8.png" alt="service5">
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek service Area style-two-->
<!--==================================================-->
<div class="sservice-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">PT. Technodrives</h5>
					<h1 class="section-main-title">Offline Test</h1>
					<!-- <h1 class="section-main-title">Drive <span>Success.</span></h1> -->
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service1.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Circuit breakaer</h3>
						<p class="service-text">Circuit breaker testing includes CB timing, resistance checks, motor current, and minimum pickup, ensuring reliable performance.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service2.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Main Busbar</h3>
						<p class="service-text">Main busbar testing covers insulation resistance, contact resistance, and Hipot test ensuring safety, reliability, and performance.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service3.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Secondary current injection</h3>
						<p class="service-text">Secondary current injection includes protection relay testing and metering test, ensuring accurate performance, reliability, and safety.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service4.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Voltage Transformer</h3>
						<p class="service-text">Voltage transformer testing covers ratio verification, polarity checks, burden measurement, and winding resistance evaluation to ensure accuracy, reliability, and overall electrical system safety.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service4.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Current Transformer Test</h3>
						<p class="service-text">Current transformer testing involves ratio verification, polarity checks, burden measurement, knee point analysis, and winding resistance evaluation to ensure accuracy, reliability, and system safety.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="service-shape bounce-animate3">
			<img src="assets/images/service5.png" alt="service5">
		</div>
		<div class="service-shape2">
			<img src="assets/images/service7.png" alt="service5">
		</div>
		<div class="service-shape3 bounce-animate4">
			<img src="assets/images/service8.png" alt="service5">
		</div>
	</div>
</div>


<!--==================================================-->
<!--start solutek team Area style-two-->
<!--==================================================-->
<div class="team-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">OUR TEAM MEMBER</h5>
					<h1 class="section-main-title">Dedicated Team Members</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/29.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>LV & MV Switchgear</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/30.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>LV & MV Switchgear</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/31.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>LV & MV Switchgear</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/32.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>LV & MV Switchgear</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek team Area style-two-->
<!--==================================================-->






<!--==================================================-->
<!-- Start solutek blog Area -->
<!--==================================================-->






<!--==================================================-->
<!-- end solutek blog Area -->
<!--==================================================-->






<!--==================================================-->
<!-- Start solutek address Area -->
<!--==================================================-->


<div class="address-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="address-box">
					<div class="address-icon">
						<img src="assets/images/address1.png" alt="address1">
					</div>
					<div class="address-title">
						<h3>Elevating Customer Experience.</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="address-box2">
					<div class="address-icon">
						<img src="assets/images/address2.png" alt="address1">
					</div>
					<div class="solutek-btn">
						<a href="{{ route('contact') }}">+44 920 090 505
							<div class="solutek-hover-btn hover-bx"></div>
							<div class="solutek-hover-btn hover-bx2"></div>
							<div class="solutek-hover-btn hover-bx3"></div>
							<div class="solutek-hover-btn hover-bx4"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!--==================================================-->
<!-- end solutek address Area -->
<!--==================================================-->

@endsection