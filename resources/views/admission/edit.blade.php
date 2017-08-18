@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Edit Admission Result
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Edit Admission Result</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  
  <!--=========== BEGIN CONTACT SECTION ================-->
  <section id="contact">
    <div class="container">
     
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8">
        {{-- adding student result --}}
        <div class="contact_form wow fadeInLeft">

         <form class="submitphoto_form" action="{{ url('ms/admission/'.$showStudentDetail->id) }}" method="POST">
           {{csrf_field()}} 
           {{method_field('PUT')}}
           <input type="text" name="student_name" class="wp-form-control wpcf7-text" value="{{$showStudentDetail->student_name}} " placeholder="Student name">
           <input type="number" name="student_class" class="wp-form-control wpcf7-text" value="{{$showStudentDetail->student_class}}" placeholder="{{$showStudentDetail->student_class}}">
           <input type="number" name="student_roll" class="wp-form-control wpcf7-text" value="{{$showStudentDetail->student_roll}}" placeholder="{{$showStudentDetail->student_roll}} ">
           <input type="text" maxlength="15" name="student_result" value="{{$showStudentDetail->student_result}} " class="wp-form-control wpcf7-text" placeholder="Student Result">
           <input type="submit" name="submit" class="btn btn-primary" value="Update Student Date">
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
  </section>
  <!--=========== END CONTACT SECTION ================-->

  
@endsection
    
