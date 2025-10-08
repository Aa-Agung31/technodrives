<!--==================================================-->
<!-- Start solutek Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="solutek_nav_manu">
  <div class="container-fluid">
    <div class="row d-flex align-items-center">
      <div class="col-lg-2">
        <div class="logo">
          <a class="logo_img" href="{{ route('index') }}" title="solutek">
            <img src="assets/images/footer-logo.png" alt="logo">
          </a>
          <a class="main_sticky" href="{{ route('index') }}" title="solutek">
            <img src="assets/images/footer-logo.png" alt="astute">
          </a>
        </div>
      </div>
      <div class="col-lg-8">
        <nav class="solutek_menu">
          <ul class="nav_scroll">
             <li><a href="#">Home <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('index') }}">Home Version 01</a></li>
                <li><a href="{{ route('index2') }}">Home Version 02</a></li>
                <li><a href="{{ route('index3') }}">Home Version 03</a></li>
              </ul>
            </li>
            <li><a href="#">Company <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('team') }}">Our Team</a></li>
                <li><a href="{{ route('teamdetails') }}">Team Details</a></li>
                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                <li><a href="{{ route('project') }}">Project</a></li>
                <li><a href="{{ route('projectdetails') }}">Project Details</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('faq') }}">Faq</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </li>
            <li><a href="{{ route('project') }}">Portfolio</a></li>
            <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="{{ route('servicedetails') }}">Service Details</a></li>
              </ul>
            </li>
            <li><a href="#">Blog <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('bloggrid') }}">Blog Grid</a></li>
                <li><a href="{{ route('blog2coulmn') }}">Blog 2Column</a></li>
                <li><a href="{{ route('blogdetails') }}">Blog Details</a></li>
              </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-2">
        <div class="header-btn">
          <a href="{{ route('contact') }}">Get A Quote NOW <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- solutek Mobile Menu Area -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
  <div class="mobile-menu">
    <nav class="solutek_menu">
      <ul class="nav_scroll">
            <li><a href="#">Home <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('index') }}">Home Version 01</a></li>
                <li><a href="{{ route('index2') }}">Home Version 02</a></li>
                <li><a href="{{ route('index3') }}">Home Version 03</a></li>
              </ul>
            </li>
            <li><a href="#">Company <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('team') }}">Our Team</a></li>
                <li><a href="{{ route('teamdetails') }}">Team Details</a></li>
                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                <li><a href="{{ route('project') }}">Project</a></li>
                <li><a href="{{ route('projectdetails') }}">Project Details</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('faq') }}">Faq</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </li>
            <li><a href="{{ route('project') }}">Portfolio</a></li>
            <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="{{ route('servicedetails') }}">Service Details</a></li>
              </ul>
            </li>
            <li><a href="#">Blog <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('bloggrid') }}">Blog Grid</a></li>
                <li><a href="{{ route('blog2coulmn') }}">Blog 2Column</a></li>
                <li><a href="{{ route('blogdetails') }}">Blog Details</a></li>
              </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </nav>
  </div>
</div>
<!--==================================================-->
<!-- End solutek Main Menu Area -->
<!--==================================================-->