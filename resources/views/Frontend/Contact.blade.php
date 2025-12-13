@extends('Frontend.layouts.app')
@section('content')

<section class="content-section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="section-title">
               <figure><img src="{{ asset('assets/images/section-title-shape.png') }}" alt="Image"></figure>
               <h2>We’d love to hear from you</h2>
               <p>Please send your enquiry to <u>sales@ZTO.co.uk</u>, or contact your local<br>
                  specialists using the contact details below.
               </p>
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-12 -->
         <div class="col-lg-12 col-md-12">
            <div class="contact-box">
               <!-- <h5>(Head Office)</h5>
               <address>
               885 E. Fawn St. Indio, CA 92201 -->
               <br>
               <!-- Phone: +44 (0)1482 325781<br> -->
               <!-- Email: <a href="#">shipping@ZTO.co.uk</a> -->
               </address>
               <!-- <a href="https://www.google.com/maps/search/?api=1&amp;query=centurylink+field" data-fancybox="" data-width="640" data-height="360" class="custom-button">FIND US ON MAP</a> -->
            </div>
            <!-- end contact-box -->
         </div>
         <!-- end col-5 -->
         <!-- <div class="col-lg-5 col-md-6">
            <div class="contact-box">
               <h5>Arnstadt Office</h5>
               <address>
                  Arnstädter Str. 50, 99096 Erfurt, Germany<br>
                  Phone: +44 (0)1482 325781<br>
                  Email: <a href="#">shipping@ZTO.co.uk</a>
               </address>
               <a href="https://www.google.com/maps/search/?api=1&amp;query=centurylink+field" data-fancybox="" data-width="640" data-height="360" class="custom-button">FIND US ON MAP</a>
            </div>
         </div> -->
         <!-- end col-5 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-bottom-spacing" data-background="#f9f7ef">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-title text-left">
               <h6>Have Any Question?</h6>
               <h2>If you would like to know more <br>
                  about our services, please contact <br>
                  us using this form
               </h2>
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-12 -->
         <div class="col-12">
            <div class="contact-form">
               <div class="row inner">
                  <div class="form-group col-lg-4">
                     <input type="text" placeholder="Complate Name">
                  </div>
                  <!-- end form-group -->
                  <div class="form-group col-lg-4 col-md-6">
                     <input type="text" placeholder="Email Address">
                  </div>
                  <!-- end form-group -->
                  <div class="form-group col-lg-4 col-md-6">
                     <input type="text" placeholder="Phone No">
                  </div>
                  <!-- end form-group -->
                  <div class="form-group col-12">
                     <textarea placeholder="Message"></textarea>
                  </div>
                  <!-- end form-group -->
                  <div class="form-group col-12">
                     <input type="submit" value="SEND MESSAGE">
                  </div>
                  <!-- end form-group -->
               </div>
               <!-- end row inner -->
            </div>
            <!-- end contact-form -->
         </div>
         <!-- end col-12 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end content-section -->
<div class="google-maps">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.347500897131!2d-0.13080758422975197!3d51.50684040221758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2zTG9uZHJhLCBCaXJsZcWfaWsgS3JhbGzEsWs!5e0!3m2!1str!2str!4v1599044515207!5m2!1str!2str" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

@endsection