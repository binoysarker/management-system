@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Apply Now
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Apply Procedure</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  
  <!--=========== BEGIN CONTACT SECTION ================-->
  <section id="contact">
    <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12"> 
          <div class="title_area">
            <h2 class="title_two">We are Wpf Degree</h2>
            <span></span> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
        </div>
     </div>
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8">
         <div class="contact_form wow fadeInLeft">
            

            <form class="submitphoto_form" action="{{ url('/ms/apply-now') }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="text" class="wp-form-control wpcf7-text" name="student_name" placeholder="Your name">
              <input type="text" class="wp-form-control wpcf7-text" name="student_fatherName" placeholder="Father name">
              <input type="text" class="wp-form-control wpcf7-text" name="student_motherName" placeholder="Mother name">
              <input type="number" class="wp-form-control wpcf7-text" name="student_mobileNumber" placeholder="Mobile name">
              <input type="mail" class="wp-form-control wpcf7-email" name="student_email" placeholder="Email address">          
              <input type="text" class="wp-form-control wpcf7-text" name="student_subject" placeholder="Subject">
              <label for="#myfile">Insert your image</label>
              <input type="file" name="profile" id="myfile" value="Upload">
              <br>
              <textarea class="wp-form-control wpcf7-textarea" cols="30" name="student_address" rows="10" placeholder="Your home address"></textarea>
              <input type="submit" name="submit" value="Apply Now" class="wpcf7-submit">
            </form>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="contact_address wow fadeInRight">
           
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
    
