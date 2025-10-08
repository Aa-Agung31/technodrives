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
					<h4>MV & HV Cable</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>MV & HV Cable</li>
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
				<div class="about-section-content">
					<div class="section-title text-left">
						<h5 class="section-sub-title">PT.Technodrives Services</h5>
						<h1 class="section-main-title">MV & HV Cable</h1>
						<!-- <h1 class="section-main-title">Switchgear</h1> -->
						<p class="section-title-descr" style="text-align: justify;">Medium Voltage (MV) and High Voltage (HV) cables play a vital role in power distribution, transmitting electricity from the source to major loads reliably. To ensure safety and performance, they undergo comprehensive diagnostic and commissioning tests to assess insulation, dielectric strength, and detect internal defects. These tests are performed during installation and maintenance, following IEC and IEEE standards, using advanced equipment such as Megger, BAUR, and Omicron.</p>
					</div>
					<div class="about-list-item">
						<ul>
							<li><img src="assets/images/home-two/about-icon2.png" alt="icon">Comprehensive Testing Methods</li>
							<li><img src="assets/images/home-two/about-icon2.png" alt="icon">Standards & Professional Tools</li>
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
			<div class="col-lg-6">
				<div class="about-thumbail">
					<div class="about-thumb">
						<img src="assets/images/43.png" alt="about-thumb">	
					</div>
					<div class="about-shape">
						<img src="assets/images/home-two/about-shape.png" alt="about1">
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
					<h1 class="section-main-title">Essential Diagnostic Procedures</h1>
					<h1 class="section-main-title">for MV &  <span>HV Cable Systems</span></h1>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service1.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">International Standards</h3>
						<p class="service-text">All cable testing procedures comply with IEC 60229, IEC 60502, IEEE 400 series, and related global standards to ensure reliability and accuracy.</p>
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
						<h3 class="service-title">Insulation Resistance Test</h3>
						<p class="service-text">Measures insulation resistance between conductors and from conductors to ground using DC voltage (1–5 kV) to detect moisture or contamination.</p>
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
						<h3 class="service-title">VLF Withstand Test</h3>
						<p class="service-text">Evaluates the dielectric strength of cable insulation using low-frequency AC voltage (0.1 Hz) for 15–30 minutes, based on IEEE 400.2 and IEC 60502 standards.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service4.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Tan Delta Test</h3>
						<p class="service-text">Measures dielectric loss (tan δ) to assess insulation degradation caused by aging, moisture, or contamination.</p>
						<!-- <div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service1.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Partial Discharge Test</h3>
						<p class="service-text">Detects early internal defects like voids, cracks, or poor joints using offline PD tests per IEC 60270 and IEEE 400.3.</p>
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
						<h3 class="service-title">Specialized Test Equipment</h3>
						<p class="service-text">Tests are conducted using professional devices such as BAUR FRIDA (IR & Hipot), Megger TDM 45 (VLF & Tan Delta), and BAUR PD Portable.</p>
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
						<img src="assets/images/8.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>MV & HV Cable</p>
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
						<img src="assets/images/9.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>MV & HV Cable</p>
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
						<img src="assets/images/39.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>MV & HV Cable</p>
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
						<img src="assets/images/40.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>MV & HV Cable</p>
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