<!--==================================================-->
<!-- Start solutek Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="solutek_nav_manu">
  <div class="container-fluid">
    <div class="row d-flex align-items-center">
      <div class="col-lg-2">
        <div class="logo">
          <a class="logo_img" href="{{ route('index') }}" title="PT.Technodrives">
            <img src="assets/images/logo.png" alt="logo">
          </a>
          <a class="main_sticky" href="{{ route('index') }}" title="PT.Technodrives">
            <img src="assets/images/footer-logo.png" alt="astute">
          </a>
        </div>
      </div>
      <div class="col-lg-8">
        <nav class="solutek_menu">
          <ul class="nav_scroll">
            <li><a href="{{ route('index') }}">Home</i></a></li>
            <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('datacenter') }}">Data Center</a></li>
                <li><a href="{{ route('gemo') }}">Generator & Motor</a></li>
                <li><a href="{{ route('switchgear') }}">LV & MV Switchgear</a></li>
                <li><a href="{{ route('transformer') }}">Transformer</a></li>
                <li><a href="{{ route('ss') }}">Substation/Switchyard</a></li>
                <li><a href="{{ route('pumpsystem') }}">Pump System</a></li>
                <li><a href="{{ route('instrumentation') }}">Instrumentation</a></li>
                <li><a href="{{ route('cable') }}">MV & HV Cable</a></li>
              
                <!-- <li><a href="{{ route('servicedetails') }}">Center Details</a></li> -->
                <!-- <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="{{ route('servicedetails') }}">Service Details</a></li> -->
              </ul>
            </li>
            <li><a href="{{ route('tools') }}">Tools</a></li>
            <li><a href="{{ route('projek') }}">Projects / Clients</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </nav>
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
        <li><a href="{{ route('index') }}">Home</i></a></li>
            <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="{{ route('service') }}">Data Center</a></li>
                <li><a href="{{ route('servicedetails') }}">Service Details</a></li>
                <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="{{ route('servicedetails') }}">Service Details</a></li>
              </ul>
            </li>
            <li><a href="{{ route('project') }}">Projects / Clients</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </nav>
  </div>
</div>
<!--==================================================-->
<!-- End solutek Main Menu Area -->
<!--==================================================-->