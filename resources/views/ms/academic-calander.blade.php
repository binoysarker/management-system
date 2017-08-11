@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Academic Calander
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Academic Calander</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  
  <!--=========== BEGIN CONTACT SECTION ================-->
  <section id="contact">
    <div class="container">
     
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8">
        
        {{-- calander need to be included --}}

        <form action="{{ url('ms/calanderEvent') }}" class="col-lg-8" method="get" accept-charset="utf-8">
          <legend><strong>Academic Calander </strong></legend>
          <input type="datetime-local" class="form-control" name="date" value="" placeholder="insert the date">
          <br>
          <input type="text" class="form-control" name="datetopic" value="" placeholder="insert the topic">
          <br>
          <textarea name="datedescription" class="form-control" rows="5" placeholder="Description"></textarea>
          <br>
          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>

       </div>
       <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="contact_address wow fadeInRight">
           
           <div class="single_sidebar">
             <h2>Recent Events <span class="fa fa-angle-double-right"></span></h2>
             <ul>
               <li><a href="#"><strong>Date</strong> and Events</a></li>
               <li><a href="#"><strong>Date</strong> and Events</a></li>
               <li><a href="#"><strong>Date</strong> and Events</a></li>
             </ul>
           </div>

           <div class="single_sidebar">
             <h2>Quick Links <span class="fa fa-angle-double-right"></span></h2>
             <ul>
               <li><a href="#">Admission Notice'17</a></li>
               <li><a href="#">Application Instructions</a></li>
               <li><a href="#">Catchment Area Insturction</a></li>
             </ul>
           </div>
           <div class="address_group">
            <ul class="footer_social">
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
              </ul>
           </div>
         </div>
       </div>
     </div>
    </div>
  </section>
  <!--=========== END CONTACT SECTION ================-->

  
@endsection
    
