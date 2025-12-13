@extends('Frontend.layouts.app')
@section('content')

<!-- end page-header -->
<section class="content-section">
   <div class="section-title">
      <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
      <h2>Everyone within our business <br>
         understands our mission
      </h2>
      <p>It means we don’t just come to work to do a job, we come to work to make a difference.</p>
   </div>
   <!-- end section-title -->
   <div class="image-quote" data-background="{{ asset('assets/images/quote-image.jpg') }}">
      <div class="quote-box">
         <blockquote>“ To make the process of buying and
            managing shipping and logistics
            services simple, efficient, stress free
            and cost effective.”
         </blockquote>
         
         <p>We do this by providing a friendly, efficient
            and personalised service combined with
            innovative IT solutions that enable our
            customers to always be in control of their
            supply chains.
         </p>
      </div>
      <!-- end quote-box -->
   </div>
   <!-- end image-quote -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="section-title text-left">
               <h6>Our Values</h6>
               <h2>Giving customers <br>
                  a unique experience <br>
                  of partnership.
               </h2>
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-6 -->
         <div class="col-lg-5 offset-lg-1">
            <div class="accordion" id="accordion" role="tablist">
               <div class="card">
                  <div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Provide a service we are proud of</a> </div>
                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">We are committed to the long-term, profitable
                        future of our business and aim to achieve sustained
                        growth that provides enhanced value to customers
                        and industry partners and opportunities
                     </div>
                     <!-- end card-body -->
                  </div>
                  <!-- end collapse -->
               </div>
               <!-- end card -->
               <div class="card">
                  <div class="card-header" role="tab" id="headingTwo"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Support each other and work together</a> </div>
                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                     <div class="card-body"> We are committed to the long-term, profitable
                        future of our business and aim to achieve sustained
                        growth that provides enhanced value to customers
                        and industry partners and opportunities
                     </div>
                     <!-- end card-body -->
                  </div>
                  <!-- end collapse -->
               </div>
               <!-- end card -->
               <div class="card">
                  <div class="card-header" role="tab" id="headingThree"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Make long-term business decisions</a> </div>
                  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">We are committed to the long-term, profitable
                        future of our business and aim to achieve sustained
                        growth that provides enhanced value to customers
                        and industry partners and opportunities
                     </div>
                     <!-- end card-body -->
                  </div>
                  <!-- end collapse -->
               </div>
               <!-- end card -->
               <div class="card">
                  <div class="card-header" role="tab" id="headingFour"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Always seek to improve</a> </div>
                  <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                     <div class="card-body">We are committed to the long-term, profitable
                        future of our business and aim to achieve sustained
                        growth that provides enhanced value to customers
                        and industry partners and opportunities
                     </div>
                     <!-- end card-body -->
                  </div>
                  <!-- end collapse -->
               </div>
               <!-- end card -->
               <div class="card">
                  <div class="card-header" role="tab" id="headingFive"> <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Member of the community</a> </div>
                  <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                     <div class="card-body">We are committed to the long-term, profitable
                        future of our business and aim to achieve sustained
                        growth that provides enhanced value to customers
                        and industry partners and opportunities
                     </div>
                     <!-- end card-body -->
                  </div>
                  <!-- end collapse -->
               </div>
               <!-- end card -->
            </div>
            <!-- end accordion -->
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
<section class="content-section" data-background="#f9f7ef">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-title">
               <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
               <h2>GEORGE_MGT COMP LOGISTICS
                  .com has grown from <br>
                  strength to strength
               </h2>
               <p>It means we don’t just come to work to do a job, we come to work to make a difference.</p>
            </div>
         </div>
         <!-- end col-12 -->
         <div class="col-12">
            <ul class="history-box-list masonry">
               <li>
                  <div class="history-box">
                     <div class="description">
                        <h6>ISO ACCREDITATION</h6>
                        <p>In November 2016 after a lot of work Atlas
                           Logistics UK Ltd became ISO 9001 and ISO
                           27001 accredited, complying with The
                           Provision of Import and Export Solutions and
                           Associated Services.
                        </p>
                     </div>
                     <!-- end description -->
                     <small class="date">11-23-2016</small>
                  </div>
                  <!-- end history-box -->
               </li>
               <li>
                  <div class="history-box">
                     <div class="description">
                        <h6>2016 RE BRAND</h6>
                        <p>New logo, new website, fresh new brand but
                           still the same reliable team. Follow our blog
                           article for more information.
                        </p>
                     </div>
                     <!-- end description -->
                     <small class="date">11-23-2016</small>
                  </div>
                  <!-- end history-box -->
               </li>
               <li>
                  <div class="history-box">
                     <div class="description">
                        <h6> LOGISTICS PVT WERE</h6>
                        <p>In September 2015 the shares of Logistics
                           PVT were acquired by the UK Company,
                           meaning Atlas Logistics
                        </p>
                     </div>
                     <!-- end description -->
                     <small class="date">11-23-2016</small>
                  </div>
                  <!-- end history-box -->
               </li>
               <li>
                  <div class="history-box">
                     <div class="description">
                        <h6>2013 BOTH OFFICES</h6>
                        <p>In March 2013 both offices moved to larger
                           premises, London being strategically placed
                           close to Heathrow Airport, and Birmingham
                           moving to a facility giving the Company
                           access to 30,000 square feet of Logistics
                           warehousing.
                        </p>
                     </div>
                     <!-- end description -->
                     <small class="date">11-23-2016</small>
                  </div>
                  <!-- end history-box -->
               </li>
               <li>
                  <div class="history-box">
                     <div class="description">
                        <h6>2012 GEORGE_MGT COMP LOGISTICS
                           .com</h6>
                        <p>In June 2012 GEORGE_MGT COMP LOGISTICS
                           .com became
                           members of the WCA, the world’s largest and
                           most powerful network of independent
                           freight forwarders,
                        </p>
                     </div>
                     <!-- end description -->
                     <small class="date">11-23-2016</small>
                  </div>
                  <!-- end history-box -->
               </li>
               <li>
                  <div class="history-box">
                     <div class="description">
                        <h6>LOGISTICS BEGAN TRADING</h6>
                        <p>Logistics UK Ltd began trading in October
                           2009 as an independent company, being
                           associated through share ownership
                        </p>
                     </div>
                     <!-- end description -->
                     <small class="date">11-23-2016</small>
                  </div>
                  <!-- end history-box -->
               </li>
            </ul>
         </div>
         <!-- end col-12 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
   <div class="tab-content">
      <ul class="tab-nav">
         <li class="active"><a href="#tab01">Postal</a></li>
         <li><a href="#tab02">Retail</a></li>
         <li><a href="#tab03">Logistics</a></li>
         <li><a href="#tab04">Ticketing</a></li>
         <li><a href="#tab05">Industrial</a></li>
         <li><a href="#tab06">Other</a></li>
      </ul>
      <div id="tab01" class="tab-item active-item">
         <div class="tab-inner">
            <figure><img src="{{ asset('assets/images/tab-image01.jpg') }}" alt="Image"></figure>
            <div class="content">
               <h3>Postal</h3>
               <p>The retail industry is not only shaped by the quality
                  of services and goods, but also by economic trends
                  that are beyond an organization's control. In order to
                  maximize shareholder value, retailers constantly
                  endeavor to optimize their service and the flow of
                  goods from the supply chain to the store.
               </p>
               <p> Such dynamic optimization cannot be realized
                  without proactive handling of accurate data.
               </p>
            </div>
            <!-- end content -->
         </div>
         <!-- end tab-inner -->
      </div>
      <!-- end tab01 -->
      <div id="tab02" class="tab-item">
         <div class="tab-inner">
            <figure><img src="{{ asset('assets/images/tab-image02.jpg') }}" alt="Image"></figure>
            <div class="content">
               <h3>Retail</h3>
               <p>The retail industry is not only shaped by the quality
                  of services and goods, but also by economic trends
                  that are beyond an organization's control. In order to
                  maximize shareholder value, retailers constantly
                  endeavor to optimize their service and the flow of
                  goods from the supply chain to the store.
               </p>
               <p> Such dynamic optimization cannot be realized
                  without proactive handling of accurate data.
               </p>
            </div>
            <!-- end content -->
         </div>
         <!-- end tab-inner -->
      </div>
      <!-- end tab02 -->
      <div id="tab03" class="tab-item">
         <div class="tab-inner">
            <figure><img src="{{ asset('assets/images/tab-image03.jpg') }}" alt="Image"></figure>
            <div class="content">
               <h3>Logistics</h3>
               <p>The retail industry is not only shaped by the quality
                  of services and goods, but also by economic trends
                  that are beyond an organization's control. In order to
                  maximize shareholder value, retailers constantly
                  endeavor to optimize their service and the flow of
                  goods from the supply chain to the store.
               </p>
               <p> Such dynamic optimization cannot be realized
                  without proactive handling of accurate data.
               </p>
            </div>
            <!-- end content -->
         </div>
         <!-- end tab-inner -->
      </div>
      <!-- end tab03 -->
      <div id="tab04" class="tab-item">
         <div class="tab-inner">
            <figure><img src="{{ asset('assets/images/tab-image04.jpg') }}" alt="Image"></figure>
            <div class="content">
               <h3>Ticketing</h3>
               <p>The retail industry is not only shaped by the quality
                  of services and goods, but also by economic trends
                  that are beyond an organization's control. In order to
                  maximize shareholder value, retailers constantly
                  endeavor to optimize their service and the flow of
                  goods from the supply chain to the store.
               </p>
               <p> Such dynamic optimization cannot be realized
                  without proactive handling of accurate data.
               </p>
            </div>
            <!-- end content -->
         </div>
         <!-- end tab-inner -->
      </div>
      <!-- end tab04 -->
      <div id="tab05" class="tab-item">
         <div class="tab-inner">
            <figure><img src="{{ asset('assets/images/tab-image05.jpg') }}" alt="Image"></figure>
            <div class="content">
               <h3>Industrial</h3>
               <p>The retail industry is not only shaped by the quality
                  of services and goods, but also by economic trends
                  that are beyond an organization's control. In order to
                  maximize shareholder value, retailers constantly
                  endeavor to optimize their service and the flow of
                  goods from the supply chain to the store.
               </p>
               <p> Such dynamic optimization cannot be realized
                  without proactive handling of accurate data.
               </p>
            </div>
            <!-- end content -->
         </div>
         <!-- end tab-inner -->
      </div>
      <!-- end tab05 -->
      <div id="tab06" class="tab-item">
         <div class="tab-inner">
            <figure><img src="{{ asset('assets/images/tab-image06.jpg') }}" alt="Image"></figure>
            <div class="content">
               <h3>Other</h3>
               <p>The retail industry is not only shaped by the quality
                  of services and goods, but also by economic trends
                  that are beyond an organization's control. In order to
                  maximize shareholder value, retailers constantly
                  endeavor to optimize their service and the flow of
                  goods from the supply chain to the store.
               </p>
               <p> Such dynamic optimization cannot be realized
                  without proactive handling of accurate data.
               </p>
            </div>
            <!-- end content -->
         </div>
         <!-- end tab-inner -->
      </div>
      <!-- end tab06 -->
   </div>
   <!-- end tab-content -->
</section>
<!-- end content-section -->
<section class="content-section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="section-title">
               <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
               <h2>Meet our team of experts</h2>
               <p>Advice and best practice from our own team</p>
            </div>
         </div>
         <!-- end col-12 -->
         <div class="col-lg-4 col-md-6">
            <div class="team-member">
               <div class="inner">
                  <figure> <img src="{{ asset('assets/images/team-member01.jpg') }}" alt="Image"> </figure>
                  <h6>ALEXANDER RICHIEZ</h6>
                  <small>Chief Operations Officer</small>
                  <p>At vero eos et accusamus et
                     iusto odio dignissimos ducimus
                     qui blanditiis praesentium
                  </p>
               </div>
               <!-- end inner -->
            </div>
            <!-- end team-member -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-4 col-md-6">
            <div class="team-member">
               <div class="inner">
                  <figure> <img src="{{ asset('assets/images/team-member02.jpg') }}" alt="Image"> </figure>
                  <h6>RICHARD HILL</h6>
                  <small>Head of Administration</small>
                  <p>At vero eos et accusamus et
                     iusto odio dignissimos ducimus
                     qui blanditiis praesentium
                  </p>
               </div>
               <!-- end inner -->
            </div>
            <!-- end team-member -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-4 col-md-6">
            <div class="team-member">
               <div class="inner">
                  <figure> <img src="{{ asset('assets/images/team-member03.jpg') }}" alt="Image"> </figure>
                  <h6>DYLAN TAYLOR</h6>
                  <small>Financial Manager</small>
                  <p>At vero eos et accusamus et
                     iusto odio dignissimos ducimus
                     qui blanditiis praesentium
                  </p>
               </div>
               <!-- end inner -->
            </div>
            <!-- end team-member -->
         </div>
         <!-- end col-4 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section image-bar" data-background="{{ asset('assets/images/section-bg-02.jpg') }}"> </section>
<!-- end content-section -->
<section class="content-section no-spacing">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
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
         <!-- end col-6 -->
         <div class="col-md-6">
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
         <!-- end col-6 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-title">
               <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
               <h2>Our accreditations </h2>
               <p>We are committed to delivering professional services of the highest standard</p>
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-12 -->
         <div class="col-lg-3 col-6">
            <div class="logo-item"> <img src="{{ asset('assets/images/logo01.jpg') }}" alt="Image"> </div>
            <!-- end logo-item -->
         </div>
         <!-- col-3 -->
         <div class="col-lg-3 col-6">
            <div class="logo-item"> <img src="{{ asset('assets/images/logo02.jpg') }}" alt="Image"> </div>
            <!-- end logo-item -->
         </div>
         <!-- col-3 -->
         <div class="col-lg-3 col-6">
            <div class="logo-item"> <img src="{{ asset('assets/images/logo03.jpg') }}" alt="Image"> </div>
            <!-- end logo-item -->
         </div>
         <!-- col-3 -->
         <div class="col-lg-3 col-6">
            <div class="logo-item"> <img src="{{ asset('assets/images/logo04.jpg') }}" alt="Image"> </div>
            <!-- end logo-item -->
         </div>
         <!-- col-3 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="gallery-item"> <a href="images/gallery-item01.jpg" data-fancybox><img src="{{ asset('assets/images/gallery-item01.jpg') }}" alt="Image"></a> </div>
            <!-- end gallery-item -->
         </div>
         <!-- col-6 -->
         <div class="col-md-6">
            <div class="row inner">
               <div class="col-md-6">
                  <div class="gallery-item"> <a href="images/gallery-item02.jpg" data-fancybox><img src="{{ asset('assets/images/gallery-item02.jpg') }}" alt="Image"></a> </div>
                  <!-- end gallery-item -->
               </div>
               <!-- col-6 -->
               <div class="col-md-6">
                  <div class="gallery-item"> <a href="images/gallery-item03.jpg" data-fancybox><img src="{{ asset('assets/images/gallery-item03.jpg') }}" alt="Image"></a> </div>
                  <!-- end gallery-item -->
               </div>
               <!-- col-6 -->
               <div class="col-md-6">
                  <div class="gallery-item"> <a href="images/gallery-item04.jpg" data-fancybox><img src="{{ asset('assets/images/gallery-item04.jpg') }}" alt="Image"></a> </div>
                  <!-- end gallery-item -->
               </div>
               <!-- col-6 -->
               <div class="col-md-6">
                  <div class="gallery-item"> <a href="images/gallery-item05.jpg" data-fancybox><img src="{{ asset('assets/images/gallery-item05.jpg') }}" alt="Image"></a> </div>
                  <!-- end gallery-item -->
               </div>
               <!-- col-6 -->
            </div>
            <!-- end row inner -->
         </div>
         <!-- col-6 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<div class="section-note">
   <div class="container">
      <h6>Barcodes, Inc. <strong>Logistics Facilities</strong> &amp; Technical Support to Continue Operations as Essential Services</h6>
   </div>
   <!-- end container -->
</div>

@endsection