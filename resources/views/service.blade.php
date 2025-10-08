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
					<h4>Services</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Services</li>
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
<!-- start solutek service Area style-two-->
<!--==================================================-->

<div class="sservice-area style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">SOLUTEK COMPANY</h5>
					<h1 class="section-main-title">How Professional IT Services</h1>
					<h1 class="section-main-title">Can Drive <span>Success.</span></h1>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb1.png" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="assets/images/inner/service-icon.png" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails') }}">IT Management</a></h3>
						<p class="service-text">Marketing repurpose success tech
							sapien maximus design.</p>
						<div class="service-btn">
							<a href="#"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb2.png" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="assets/images/inner/service-icon.png" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails') }}">Digital Marketing</a></h3>
						<p class="service-text">Marketing repurpose success tech
							sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb3.png" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="assets/images/inner/service-icon.png" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails') }}">Web Development</a></h3>
						<p class="service-text">Marketing repurpose success tech
							sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb4.png" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="assets/images/inner/service-icon.png" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails') }}">App Development</a></h3>
						<p class="service-text">Marketing repurpose success tech
							sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
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
						<img src="assets/images/home-two/team-thu.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
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
						<img src="assets/images/home-two/team-thu2.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
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
						<img src="assets/images/home-two/team-thu3.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
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
						<img src="assets/images/home-two/team-thu4.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
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

<div class="blog-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">OUR LATEST BLOG</h5>
					<h1 class="section-main-title">Exploring Its Potential in</h1>
					<h1 class="section-main-title">Various <span>Industries.</span></h1>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="project-right">
					<div class="solutek-btn">
						<a href="{{ route('bloggrid') }}">VIEW  all post
							<div class="solutek-hover-btn hover-bx"></div>
							<div class="solutek-hover-btn hover-bx2"></div>
							<div class="solutek-hover-btn hover-bx3"></div>
							<div class="solutek-hover-btn hover-bx4"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-5 col-lg-6 col-md-6">
				<div class="blog-singele-box">
					<div class="blog-thumb">
						<img src="assets/images/blog1.png" alt="blog1">
					</div>
					<div class="blog-content">
						<div class="blog-date">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
						<h3 class="blog-title"><a href="{{ route('blogdetails') }}">Leveraging Descriptive Solutions for Business Growth.</a></h3>
						<p class="blog-tex">Appropriatel promote enterprise-wide vortals throuh in information
						without equity best  revolutioniz</p>
						<div class="blog-btn">
							<a href="{{ route('blogdetails') }}">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-md-6">
				<div class="blog-singele-box-tow">
					<div class="blog-thumb-tow">
						<img src="assets/images/blog2.png" alt="blog1">
					</div>
					<div class="blog-content-tow">
						<div class="blog-date-tow">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
						<h3 class="blog-title-two"><a href="{{ route('blogdetails') }}">How to Create Modern Web Site For Your Business..</a></h3>
						<p class="blog-tex-tow">Appropriatel promote enterprise-wide throuh in information
						without best  revolutioniz</p>
						<div class="blog-btn-tow">
							<a href="{{ route('blogdetails') }}">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="blog-singele-box-tow">
					<div class="blog-thumb-tow">
						<img src="assets/images/blog3.png" alt="blog1">
					</div>
					<div class="blog-content-tow">
						<div class="blog-date-tow">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
						<h3 class="blog-title-two"><a href="{{ route('blogdetails') }}">How to Create Modern Web Site For Your Business..</a></h3>
						<p class="blog-tex-tow">Appropriatel promote enterprise-wide throuh in information
						without best  revolutioniz</p>
						<div class="blog-btn-tow">
							<a href="{{ route('blogdetails') }}">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




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