@extends('layout.layout4')

@section('content4')



<!--==================================================-->
<!-- Start solutek breadcumb Area -->
<!--==================================================-->

<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h4>Services Details</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Services Details</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek breadcumb Area -->
<!--==================================================-->


<!--==================================================-->
<!--start solutek service details area -->
<!--==================================================-->
<div class="services-details-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12">
						<div class="services-details-thumb">
							<img src="assets/images/inner/service-details.png" alt="thumb">
						</div>
						<div class="services-details-content">
							<h4 class="services-details-title">Best Solutions for App Development</h4>

							<p class="services-details-desc">Alternative innovation to ethical network environmental whiteboard pursue compelling results for premier methods empowerment. Dramatically architect go forward opportunities before user-centric partnerships.Credibly implement exceptional </p>

							<p class="services-details-desc">Continually fashion orthogonal leadership skills whereas wireless metrics. Uniquely syndicate exceptional opportunities with interdependent users. Globally enhance fully tested meta-services rather than pandemic solutions. Proactively integrate client-integrate go forward architectures and turnkey meta-services.Interactively harness integrated ROI whereas frictionless products. 	
							</p>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="service-detalis-text-box">
									<div class="service-details-content">
										<h4>Why Choose Us</h4>
										<p>Alternative innovation to ethical network
											environmental whiteboard pursue
											compelling results for premier  methods
											empowerment forward.</p>
									</div>
									<div class="service-details-list">
										<ul>
											<li><i class="bi bi-arrow-right"></i>Success Stories</li>
											<li><i class="bi bi-arrow-right"></i>Success service</li>
											<li><i class="bi bi-arrow-right"></i>Success store</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="service-details-icon-box">
									<div class="service-det-icon">
										<img src="assets/images/inner/det-icon.png" alt="icon">
									</div>
									<div class="service-det-content">
										<h3>Empowering Your Success</h3>
										<p>Alternative innovation to ethical network
											environmental whiteboard pursue
											compelling results for premier  methods
											empowerment forward environmental
											whiteboard pursue process dsign.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="tab_container">
								<div class="feq-content">
									<h3 class="faq-title">Frequently Asked Questions</h3>
									<p class="faq-description">Alternative innovation to ethical network environmental whiteboard pursue compelling results for premier methods empowerment. Dramatically architect go forward opportunities</p>
								</div>
								<div id="tab" class="tab_content">
									<ul class="accordion">
										<li>
											<a>01<span>How Can I Get Started With Your Services?</span></a>
											<p style="display: none;">Alternative in network environmental whiteboard pursue compelling results for premier our team methods empowerment. Dramatically architect go forward opportunities or premier to designer methods empowerment. Dramatically architect.</p>
										</li>
										<li>
											<a>02<span>How Do You Approach New Projects?</span></a>
											<p style="display: none;">Alternative in network environmental whiteboard pursue compelling results for premier our team methods empowerment. Dramatically architect go forward opportunities or premier to designer methods empowerment. Dramatically architect.</p>
										</li>
										<li>
											<a>03<span>What Makes Your Company Different?</span></a>
											<p style="display: none;">Alternative in network environmental whiteboard pursue compelling results for premier our team methods empowerment. Dramatically architect go forward opportunities or premier to designer methods empowerment. Dramatically architect.</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12">
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4>Main Services</h4>
							</div>
							<div class="widget-category">
								<ul>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">Database Security<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">IT Solution<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">Technology Consult<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">App Development<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">UI/UX Design<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">Cyber Security<i class="bi bi-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>						
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4>Downloads</h4>
							</div>
							<div class="widget-sidber-download-button">
								<a href="#"><i class="bi bi-file-earmark-pdf"></i>Service Report<span><i class="bi bi-download"></i></span></a>

								<a class="active" href="#"><i class="bi bi-file-earmark-pdf"></i>Download Lists<span><i class="bi bi-download"></i></span></a>
							</div>
						</div>
						<div class="widget-sidber-contact-box">
							<div class="widget-sidber-contact">
								<img src="assets/images/inner-images/sidber-cont-icon.png" alt="">
							</div>
							<p class="widget-sidber-contact-text">Call Us Anytime</p>
							<h3 class="widget-sidber-contact-number">+123 (4567) 890</h3>
							<span class="widget-sidber-contact-gmail"><i class="bi bi-envelope-fill"></i>example@gmail.com</span>
							<div class="widget-sidber-contact-btn">
								<a href="{{ route('contact') }}">Contact Us <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- end solutek service details area  -->
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