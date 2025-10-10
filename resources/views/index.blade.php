@extends('layout.layout1')

@section('content')

	<!--==================================================-->
	<!-- Start solutek hero Area -->
	<!--==================================================-->

	<div class="hero-area d-flex align-items-center">
		<div class="container">
			<div class="row hero align-items-center">
				<div class="col-lg-6">
					<div class="hero-contant">
						<h5>PT.Technodrives Services</h5>
						<h1>Innovative Electrical Solutions</h1>
						<h2 style="color: white;">For Industry & Data Centers</h2>
						<p>Delivering precision-engineered electrical systems with reliability and cutting-edge technology.</p>
						<div class="solutek-btn">
							<a href="{{ route('contact') }}">Connect with Our Team
								<div class="solutek-hover-btn hover-bx"></div>
								<div class="solutek-hover-btn hover-bx2"></div>
								<div class="solutek-hover-btn hover-bx3"></div>
								<div class="solutek-hover-btn hover-bx4"></div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-thumb">
						<img src="assets/images/hero-thumb.png" alt="hero-thumb">
					</div>
				</div>
			</div>
		</div>
	</div>

<!--==================================================-->
<!-- end solutek hero Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start solutek about Area -->
<!--==================================================-->

	<div class="feature-area">
		<div class="container">
			<div class="row about align-items-center">
				<div class="feature-box">
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="assets/images/feature1.png" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Data Center</h3>
							<p class="feature-text">Electrical solutions for data centers, from installation to commissioning</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="assets/images/feature2.png" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Testing</h3>
							<p class="feature-text">Comprehensive testing for switchgear, transformers, and power systems</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="assets/images/feature3.png" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Commissioning</h3>
							<p class="feature-text">Ensuring proper setup and activation of electrical systems</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="assets/images/feature4.png" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Consulting</h3>
							<p class="feature-text">Expert advice on electrical system design and upgrades</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="assets/images/feature5.png" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Energy Audit</h3>
							<p class="feature-text">Power analysis to improve efficiency and cut costs</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

<!--==================================================-->
<!-- end solutek about Area -->
<!--==================================================-->




<!--==================================================-->
<!-- start solutek about Area -->
<!--==================================================-->

	<div class="about-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-lg-6">
					<div class="about-thumb">
						<img src="assets/images/about-thumb.png" alt="about-thumb">
						<div class="about-shape">
							<img src="assets/images/about1.png" alt="about1">
						</div>
						<h4 class="about-title">Expert Electrical Solutions</h4>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section-title text-left">
						<h5 class="section-sub-title">PT. Technodrives</h5>
						<h1 class="section-main-title">Essential Electrical Solutions</h1>
						<h1 class="section-main-title">for <span>Modern Industries</span></h1>
						<p class="section-title-descr">Comprehensive electrical systems, testing, and consulting tailored to power your business operations efficiently and reliably.</p>
					</div>
					<div class="about-box d-flex align-items-center">
						<div class="about-icon">
							<img src="assets/images/about4.png" alt="about4">
						</div>
						<div class="about-tiltle">
							<h3>Power Systems Solutions</h3>
						</div>
					</div>
					<div class="about-text">
						<p>End-to-end electrical solutions, from installation and testing to optimization, ensuring system reliability and safety.</p>
					</div>
					<div class="solutek-btn">
						<a href="{{ route('index') }}">EXPLORE MORE
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

<!--==================================================-->
<!-- end solutek about Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek service Area -->
<!--==================================================-->

<div class="sservice-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">PT. Technodrives</h5>
					<h1 class="section-main-title">How Professional Electrical Solutions</h1>
					<h1 class="section-main-title">Drive <span>Success.</span></h1>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service1.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Data Center</h3>
						<p class="service-text">End-to-end electrical solutions ensuring reliable and efficient data center infrastructure.</p>
						<div class="service-btn">
							<a href="{{ route('datacenter') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service2.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Generator & Motor</h3>
						<p class="service-text">Installation, testing, and maintenance for continuous power.</p>
						<div class="service-btn">
							<a href="{{ route('gemo') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service3.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">LV & MV Switchgear</h3>
						<p class="service-text">Comprehensive testing and commissioning of low and medium voltage switchgear.</p>
						<div class="service-btn">
							<a href="{{ route('switchgear') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service4.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Transformer</h3>
						<p class="service-text">Testing and maintenance to ensure reliability and longer lifespan.</p>
						<div class="service-btn">
							<a href="{{ route('transformer') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service1.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Substation/Switchyard</h3>
						<p class="service-text">Installation, testing, and commissioning services for substations and switchyards.</p>
						<div class="service-btn">
							<a href="{{ route('ss') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service2.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Pump System</h3>
						<p class="service-text">Solutions for industrial pump systems including installation, automation, and maintenance.</p>
						<div class="service-btn">
							<a href="{{ route('pumpsystem') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service3.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Instrumentation</h3>
						<p class="service-text">Accurate instrumentation and monitoring systems for industrial applications.</p>
						<div class="service-btn">
							<a href="{{ route('instrumentation') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="assets/images/service4.png" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">MV & HV Cable</h3>
						<p class="service-text">Testing, installation, and assessment of medium and high-voltage cable systems.</p>
						<div class="service-btn">
							<a href="{{ route('cable') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
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
<!-- end solutek service Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek-brand Area -->
<!--==================================================-->


<div class="brand-area">
	<div class="container">
		<div class="row">
			<div class="brand_list owl-carousel">
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img1.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img2.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img3.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img4.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img5.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img6.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img7.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img8.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img9.png" alt="brand img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--==================================================-->
<!-- end solutek-brand Area -->
<!--==================================================-->



<!--==================================================-->
<!-- start solutek-faq Area -->
<!--==================================================-->


<div class="faq-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="section-title text-left">
					<h5 class="section-sub-title">PT. Technodrives</h5>
					<h1 class="section-main-title">Your Guide to Reliable</h1>
					<h1 class="section-main-title">Electrical <span>Solutions</span></h1>
				</div>
				<div class="faq-thumb">
					<img src="assets/images/faq1.png" alt="faq1">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="tab_container">
					<div class="feq-content">
						<h3 class="faq-title">Your Reliable Electrical Solution <span>Guide.</span></h3>
						<p class="faq-description">Offering complete electrical services for industrial systems and data centers. 
							From installation and testing to maintenance, we ensure your systems are safe, efficient, and always operational.</p>
					</div>
					<div id="tab1" class="tab_content">
						<ul class="accordion">
							<li>
								<a class=""><span>What Electrical Services Do You Provide?</span></a>
								<p style="display: none;">We provide electrical installation, testing, commissioning, and 
									maintenance services to ensure reliability and peak performance for industrial systems and data centers.</p>
							</li>
							<li>
								<a><span>Where Are Your Services Available?</span></a>
								<p>Our solutions are available across multiple sectors including manufacturing, energy, 
									telecommunications, and data centers, both locally and internationally.</p>
							</li>
							<li>
								<a><span>What Industries Do You Serve?</span></a>
								<p>We cater to a wide range of industries, delivering customized electrical solutions for each sector’s specific needs.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="faq-shape">
			<img src="assets/images/faq2.png" alt="faq2">
		</div>
		<div class="faq-shape2">
			<img src="assets/images/faq3.png" alt="faq2">
		</div>
	</div>
</div>



<!--==================================================-->
<!-- end solutek-faq Area -->
<!--==================================================-->

<div class="team-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">OUR Project</h5>
					<!-- <h1 class="section-main-title">Dedicated Team Members</h1> -->
				</div>
			</div>
		</div>

		<!-- Transformer -->

		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/36.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Transformer</p>
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
						<img src="assets/images/37.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Transformer</p>
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
						<img src="assets/images/38.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Transformer</p>
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
						<img src="assets/images/39.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Transformer</p>
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
		
		<!-- Data Center -->

		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/8.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Data Center</p>
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
								<p>Data Center</p>
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
						<img src="assets/images/12.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Data Center</p>
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
						<img src="assets/images/11.jpeg" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Documentation</a></h4>
								<p>Data Center</p>
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
						<h3>Enhancing Customer Experience.</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="address-box2">
					<div class="address-icon">
						<img src="assets/images/address2.png" alt="address1">
					</div>
					<div class="solutek-btn">
						<a href="{{ route('contact') }}">+62 21 736 4033						<div class="solutek-hover-btn hover-bx"></div>
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