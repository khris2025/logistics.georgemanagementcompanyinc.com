@extends('Frontend.layouts.app')
@section('content')

<!-- end slider -->
<div class="section-note">
  <div class="container">
    <h6>Barcodes, Inc. <strong>Logistics Facilities</strong> & Technical Support to Continue Operations as Essential Services</h6>
  </div>
  <!-- end container -->
</div>
<!-- end section-note -->
<section class="content-section no-top-spacing">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <figure class="video-thumb"> <img src="{{ asset('assets/images/video-thumb.jpg') }}" alt="Image"> <a href="videos/video01.mp4" data-fancybox>Play Button</a> </figure>
        <!-- end video-thumb -->
      </div>
      <!-- end col-5 -->
      <div class="col-lg-7">
        <form action="{{ route('track') }}" method="post">
          @csrf
          <div class="track-shipping-form">
            <div class="inner">
              <h3>Track your shipment</h3>
              <div class="form-group half">
                <input type="radio" checked name="track">
                Shipping number
              </div>
              <div class="form-group">
                <input type="text" placeholder="Shipping Number" name="trackingnumber">
              </div>
              <div class="form-group">
                <button type="submit" name="track"><i class="lni lni-search-alt"></i> SEARCH</button>
              </div>
            </div>
          </div>
          <form>
      </div>
      <!-- end col-7 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="side-content">
          <h2>Worldwide Logistics,
            Air Freight Forwarding,
            Road Haulage.
          </h2>
          <p>GEORGE_MGT COMP LOGISTICS is a leading third party contract logistics company
            based in the Midlands, United Kingdom. We specialise in providing
            supply-chain warehousing and transport services throughout the
            UK, Ireland and Continental Europe.
          </p>
          <a href="#" class="custom-button">Discover All Solutions</a>
        </div>
        <!-- end side-content -->
      </div>
      <!-- end col-7 -->
      <div class="col-lg-5">
        <figure class="side-image"> <img src="{{ asset('assets/images/side-image01.jpg') }}" alt="Image"> </figure>
        <!-- end side-image -->
      </div>
      <!-- end col-5 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="inner">
            <figure><img src="{{ asset('assets/images/icon01.png') }}" alt="Image"></figure>
            <h6>Leadership</h6>
            <p>Experts who have extensive,
              hands-on experience in supply
              chain management
            </p>
            <a href="#" class="custom-link">Connect with an Expert</a>
          </div>
          <!-- end inner -->
        </div>
        <!-- end icon-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="inner">
            <figure><img src="{{ asset('assets/images/icon02.png') }}" alt="Image"></figure>
            <h6>Technology</h6>
            <p>innovative and varied use of
              technology on the road, ocean,
              railways, in the air.
            </p>
            <a href="#" class="custom-link">Connect with an Expert</a>
          </div>
          <!-- end inner -->
        </div>
        <!-- end icon-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="inner">
            <figure><img src="{{ asset('assets/images/icon03.png') }}" alt="Image"></figure>
            <h6>Solution</h6>
            <p>Global leaders in intermodal,
              less-than-truckload, supply
              chain management.
            </p>
            <a href="#" class="custom-link">Connect with an Expert</a>
          </div>
          <!-- end inner -->
        </div>
        <!-- end icon-box -->
      </div>
      <!-- end col-4 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section" data-background="#f9f7ef">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
          <h2>Global supply chain solutions</h2>
          <p>Dedicated specialists taking care of your products</p>
        </div>
        <!-- end section-title -->
      </div>
      <!-- end col-12 -->
      <div class="col-lg-3">
        <div class="solution-box">
          <figure>
            <img src="{{ asset('assets/images/solution-image01.jpg') }}" alt="Image">
            <figcaption>
              <small>Solutions</small>
              <h6>Food & Beverage</h6>
              <a href="#">Discover More</a>
            </figcaption>
          </figure>
        </div>
        <!-- end solution-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3">
        <div class="solution-box">
          <figure>
            <img src="{{ asset('assets/images/solution-image02.jpg') }}" alt="Image">
            <figcaption>
              <small>Solutions</small>
              <h6>Global 4PL</h6>
              <a href="#">Discover More</a>
            </figcaption>
          </figure>
        </div>
        <!-- end solution-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-6">
        <div class="solution-box">
          <figure>
            <img src="{{ asset('assets/images/solution-image03.jpg') }}" alt="Image">
            <figcaption>
              <small>Solutions</small>
              <h6>Consumer Packaged Goods</h6>
              <a href="#">Discover More</a>
            </figcaption>
          </figure>
        </div>
        <!-- end solution-box -->
      </div>
      <!-- end col-6 -->
      <div class="col-lg-4 offset-lg-2">
        <div class="solution-box">
          <figure>
            <img src="{{ asset('assets/images/solution-image04.jpg') }}" alt="Image">
            <figcaption>
              <small>Solutions</small>
              <h6>Transportation</h6>
              <a href="#">Discover More</a>
            </figcaption>
          </figure>
        </div>
        <!-- end solution-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4">
        <div class="solution-box">
          <figure>
            <img src="{{ asset('assets/images/solution-image05.jpg') }}" alt="Image">
            <figcaption>
              <small>Solutions</small>
              <h6>Retails</h6>
              <a href="#">Discover More</a>
            </figcaption>
          </figure>
        </div>
        <!-- end solution-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-2">
        <div class="solution-button"> <a href="#"><i class="lni lni-chevron-right"></i></a> <small>DISCOVER<br>
            ALL SOLUTIONS</small>
        </div>
        <!-- end solution-button -->
      </div>
      <!-- end col-2 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
  <div class="container">
    <div class="row align-items-center no-gutters">
      <div class="col-lg-6">
        <div class="side-services">
          <h6>Services</h6>
          <h2>Quality delivered <br>
            as standard
          </h2>
          <ul>
            <li><a href="#">Forwarding <i class="lni lni-chevron-right"></i></a></li>
            <li><a href="#">Supply Chain <i class="lni lni-chevron-right"></i></a></li>
            <li><a href="#">Outsourcing <i class="lni lni-chevron-right"></i></a></li>
            <li><a href="#">Technology <i class="lni lni-chevron-right"></i></a></li>
          </ul>
          <a href="#" class="custom-link">View All Services</a>
        </div>
        <!-- end side-services -->
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
        <figure class="side-image full-right">
          <div class="info-box">
            <figure><img src="{{ asset('assets/images/icon-infobox.png') }}" alt="Image"></figure>
            <p>Personnel deliver bespoke
              solutions that are designed
              to increase speed to market, <strong>simplify inventory</strong> management,
              streamline product flow and
              drive down costs.
            </p>
          </div>
          <!-- end info-box -->
          <img src="{{ asset('assets/images/side-image02.jpg') }}" alt="Image">
        </figure>
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6">
        <div class="counter-box">
          <span class="odometer" data-count="175" data-status="yes">0</span>
          <h6>UK operating centres</h6>
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="counter-box">
          <span class="odometer" data-count="120" data-status="yes">0</span>
          <h6>Countries
            Worldwide
          </h6>
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="counter-box">
          <span class="odometer" data-count="50" data-status="yes">0</span><span class="symbol">K</span>
          <h6>Logistics
            Professionals
          </h6>
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="counter-box">
          <span class="odometer" data-count="450" data-status="yes">0</span><span class="symbol">K</span>
          <h6>containers of freight</h6>
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="counter-box">
          <span class="odometer" data-count="35" data-status="yes">0</span><span class="symbol">K</span>
          <h6>Project delivery
            vehicles
          </h6>
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="counter-box">
          <span class="odometer" data-count="20" data-status="yes">0</span><span class="symbol">K</span>
          <h6>sq.ft of
            warehousing
          </h6>
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end col-3 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section dark-overlay" data-background="{{ asset('assets/images/section-bg-01.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="cta-bar">
          <h2>We are now Logistics <br>
            Industry Limited
          </h2>
          <p>We’re one of the UK’s leading shipping and logistics providers.</p>
          <a href="#" class="custom-button">Get A Quote</a> <a href="#" class="light-button">Estimate cost</a>
        </div>
        <!-- end cta-bar -->
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-bottom-spacing bottom-bg-half">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-left">
          <h6>TOTAL DELIVERY COST</h6>
          <h2>Find out the approximate cost of <br>
            delivery of your shipments
          </h2>
        </div>
        <!-- end section-title -->
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="calculator">
          <div class="row inner">
            <div class="form-group col-md-6">
              <span>Distance</span>
              <select>
                <option>Please select</option>
              </select>
            </div>
            <!-- end form-group -->
            <div class="form-group col-md-6"> <span>Destination</span>
              <input type="text">
            </div>
            <!-- end form-group -->
            <div class="form-group col-lg-3 col-md-6"> <span>Width</span>
              <input type="text">
            </div>
            <!-- end form-group -->
            <div class="form-group col-lg-3 col-md-6"> <span>Height</span>
              <input type="text">
            </div>
            <!-- end form-group -->
            <div class="form-group col-lg-3 col-md-6"> <span>Weight</span>
              <input type="text">
            </div>
            <!-- end form-group -->
            <div class="form-group col-lg-3 col-md-6">
              <span>Fragile</span>
              <div class="yes-no" id="yes-no">
                <input type="radio" name="rdo" id="yes" value="15000" checked />
                <input type="radio" name="rdo" id="no" value="0" />
                <div class="switch">
                  <label for="yes">Yes</label>
                  <label for="no">No</label>
                  <span></span>
                </div>
              </div>
              <!-- end yes-no -->
            </div>
            <!-- end form-group -->
            <div class="form-group col-12">
              <label>
                <input type="checkbox" checked>
                Express Delivery</label>
              <label>
                <input type="checkbox">
                Insurance</label>
              <label>
                <input type="checkbox">
                Packaging</label>
            </div>
            <!-- end form-group -->
            <div class="form-group col-12">
              <div class="estimated-price"><b>Estimated Price :</b> <strong>$0.000</strong></div>
              <!-- end estimated-price -->
            </div>
            <!-- end form-group -->
          </div>
          <!-- end row inner -->
        </div>
        <!-- end calculator -->
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section bg-half">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="testimonials-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial">
                <p>As a first time importer from the Far
                  East, the process can be quite daunting.
                  John Good has provided exceptional
                  service and support right through
                  the process.
                </p>
                <h6>Steve Macholnad </h6>
                <small>Manager Smart Move LTD</small>
              </div>
              <!-- end testimonial -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div class="testimonial">
                <p>As a first time importer from the Far
                  East, the process can be quite daunting.
                  John Good has provided exceptional
                  service and support right through
                  the process.
                </p>
                <h6>Joshua Olenik</h6>
                <small>Sales Team Acrostishe </small>
              </div>
              <!-- end testimonial -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div class="testimonial">
                <p>As a first time importer from the Far
                  East, the process can be quite daunting.
                  John Good has provided exceptional
                  service and support right through
                  the process.
                </p>
                <h6>Jack Abraham</h6>
                <small>Director of Envato LLC</small>
              </div>
              <!-- end testimonial -->
            </div>
            <!-- end swiper-slide -->
          </div>
          <!-- end swiper-wrapper -->
          <div class="swiper-pagination"></div>
          <!-- end swiper-pagination -->
        </div>
        <!-- end testimonials-slider -->
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6 offset-lg-1">
        <div class="section-title">
          <h2>Trusted By Some
            The World's Companies
            for over 180 years
          </h2>
        </div>
        <!-- end section-title -->
        <div class="row inner">
          <div class="col-6">
            <figure class="logo-item"> <img src="{{ asset('assets/images/logo01.jpg') }}" alt="Image"> </figure>
            <!-- end logo-item -->
          </div>
          <!-- end col-6 -->
          <div class="col-6">
            <figure class="logo-item"> <img src="{{ asset('assets/images/logo02.jpg') }}" alt="Image"> </figure>
            <!-- end logo-item -->
          </div>
          <!-- end col-6 -->
          <div class="col-6">
            <figure class="logo-item"> <img src="{{ asset('assets/images/logo03.jpg') }}" alt="Image"> </figure>
            <!-- end logo-item -->
          </div>
          <!-- end col-6 -->
          <div class="col-6">
            <figure class="logo-item"> <img src="{{ asset('assets/images/logo04.jpg') }}" alt="Image"> </figure>
            <!-- end logo-item -->
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>

@endsection