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
					<h4>Contact</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Contact</li>
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
<!-- Start solutek contact Area -->
<!--==================================================-->

<div class="about-area style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-thumbail">
					<div class="about-thumb">
						<img src="assets/images/35.png" alt="about-thumb">	
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
						<h1 class="section-main-title">Location</h1>
						<!-- <h1 class="section-main-title">Switchgear</h1> -->
						<p class="section-title-descr" style="text-align: justify;">The company’s Head Office is located at Bellagio Residence Unit OL3-28A, Kawasan Niaga Kuningan Bara, Kav. E4-3, Kuningan Timur, Setiabudi, South Jakarta. The Operational Office is situated at Jl. Pisok XIX Blok EB 15A No. 31, Bintaro Jaya Sektor 5, South Tangerang 15412, while the Workshop is based at Bizhub Warehouse Complex Blok GE No.15, Jl. Raya Serpong – Gunung Sindur, Pabuaran, Gunung Sindur – Bogor, West Java.</p>
					</div>
					
					<div class="solutek-btn">
						<a href="{{ route('index') }}" class="btn-2">EXPLORE MORE</a>
					</div>
					<div class="about-contact-box">
						<div class="call-box">
							<div class="about-contact">
								<img src="assets/images/home-two/call-icon.png" alt="icon">
							</div>
							<div class="about-contact-content">
								<h4>Contact Us</h4>
								<p>(+62 21) 737 2402</p>
								<p>(+62 21) 736 4033</p>
								<p>Fax: (+62 21) 737 2402</p>
							</div>
						</div>
				   </div>
				</div>	
			</div>
		</div>
	</div>
</div>


<!--==================================================-->
<!-- end solutek contact Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start solutek google map area-->
<!--==================================================-->
<div class="google-map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d126915.86685667255!2d106.60577655242065!3d-6.247803389687293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-6.1964288!2d106.6369024!4m5!1s0x2e69f0713d8481e7%3A0xdb081a504a537e1e!2sPT.%20TECHNODRIVES%20Ops.%20Office%2C%20Jl.%20Pisok%20XIX%20Blok%20EB%2015A%20No.%2031%20Bintaro%20Jaya%20Sektor%205%2C%20Pondok%20Ranji%2C%20Ciputat%20Timur%2C%20South%20Tangerang%20City%2C%20Banten%2015412!3m2!1d-6.2748186!2d106.73071309999999!5e0!3m2!1sen!2sid!4v1759897774608!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			
				</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!--End solutek google map area-->
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