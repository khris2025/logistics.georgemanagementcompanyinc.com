@extends('Frontend.layouts.app')
@section('content')

<!-- end page-header -->
<section class="content-section">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-title">
               <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
               <h2>Reliable UK & Ireland Transport<br>
                  Logistics Since 1973
               </h2>
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-12 -->
         <div class="col-lg-6 col-right-spacing">
            <p>Because we understand that your top priority is to get your
               goods to your customers on time and in full, we offer a full
               spectrum of transport logistics solutions to ensure you have
               the flexibility to send different sizes of consignment without
               having to find a new provider.
            </p>
            <p> With so many options available you can rest assured that we
               will be able to deliver your consignment, regardless of its size.
               And if there’s ever a time where you need some advice on
               choosing the right solution, our transport team, who have more
               than 120 years’ experience.
            </p>
            <br>
            <figure class="image top-spacing">
               <img src="{{ asset('assets/images/logistic-image02.jpg') }}" alt="Image">
            </figure>
            <!-- end image -->
         </div>
         <!-- end col-6 -->
         <div class="col-lg-6 col-left-spacing">
            <figure class="image bottom-spacing">
               <img src="{{ asset('assets/images/logistic-image01.jpg') }}" alt="Image">
            </figure>
            <!-- end image -->
            <figure class="image">
               <img src="{{ asset('assets/images/logistic-image03.jpg') }}" alt="Image">
            </figure>
            <!-- end image -->
         </div>
         <!-- end col-6 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing" data-background="#f9f7ef">
   <div class="container">
      <div class="row align-items-center no-gutters">
         <div class="col-lg-6">
            <div class="side-list">
               <h2>GEORGE_MGT COMP LOGISTICS
                  .com
                  Services Include:
               </h2>
               <div class="list-box">
                  <ul>
                     <li><i class="lni lni-checkmark"></i> Contract distribution</li>
                     <li><i class="lni lni-checkmark"></i> Ad-hoc transport</li>
                     <li><i class="lni lni-checkmark"></i> Groupage</li>
                     <li><i class="lni lni-checkmark"></i> Tail-lift deliveries</li>
                     <li><i class="lni lni-checkmark"></i> Double-deck trailers</li>
                     <li><i class="lni lni-checkmark"></i> Reverse logistics</li>
                     <li><i class="lni lni-checkmark"></i> Curtain-sided vehicles</li>
                     <li><i class="lni lni-checkmark"></i> Next day delivery</li>
                     <li><i class="lni lni-checkmark"></i> Timed deliveries</li>
                     <li><i class="lni lni-checkmark"></i> AM deliveries</li>
                  </ul>
               </div>
               <!-- end list-box -->
            </div>
            <!-- end side-list -->
         </div>
         <!-- end col-6 -->
         <div class="col-lg-6">
            <figure class="side-image full-right"> <img src="{{ asset('assets/images/side-image02.jpg') }}" alt="Image"> </figure>
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
            <div class="contact-bar">
               <h2>Contact us today!</h2>
               <p>Contact us today for your airfreight <br>
                  requirements
               </p>
               <a href="contact.php">CLICK HERE TO CONTACT US!</a>
            </div>
            <!-- end contact-bar -->
         </div>
         <!-- end col-12 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-top-spacing">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-4 col-md-6">
            <div class="image-content-box">
               <figure> <img src="{{ asset('assets/images/service-image01.jpg') }}" alt="Image"> </figure>
               <h6>Full, Part, and <br>
                  Consolidated Loads
               </h6>
               <p>Our dedicated fleet of vehicles
                  operates nationally throughout the
                  UK delivering both full, part, and
                  consolidated loads.
               </p>
            </div>
            <!-- end image-content-box -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-4 col-md-6">
            <div class="image-content-box">
               <figure> <img src="{{ asset('assets/images/service-image02.jpg') }}" alt="Image"> </figure>
               <h6>Palletforce <br>
                  Equipments
               </h6>
               <p>Sending smaller consignments of
                  less than 10 pallets used to be
                  expensive business, but we have a
                  solution for you
               </p>
            </div>
            <!-- end image-content-box -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-4 col-md-6">
            <div class="image-content-box">
               <figure> <img src="{{ asset('assets/images/service-image03.jpg') }}" alt="Image"> </figure>
               <h6>European Transport <br>
                  Logistics
               </h6>
               <p>In addition to our UK services, through
                  our trusted and fully-vetted network of
                  partners, we offer a full import and
                  export service
               </p>
            </div>
            <!-- end image-content-box -->
         </div>
         <!-- end col-4 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
@endsection