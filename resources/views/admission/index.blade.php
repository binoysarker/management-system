@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Admission Result
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Admission Result</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  {{-- displaying message section --}}
  @include('partials.message')
  
  <!--=========== BEGIN CONTACT SECTION ================-->
  <section id="contact">
    <div class="container">
     
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8">
        
         <table class="table table-hover wow fadeInLeft">
           <caption>Individual Student result</caption>
           <span><a href="{{ url('ms/admission/create') }}" class="btn btn-primary">Create Admission Result</a></span>
           <thead>
             <tr>
               <th>Name</th>
               <th>Class</th>
               <th>Roll</th>
               <th>Result</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
            @if ($results->isEmpty())
              {{"No data is in the array"}}
            @else
              {{-- false expr --}}
             @foreach ($results as $result)
               {{-- expr --}}
               <tr>
                 <td><a href="{{ url('/ms/student-profile/'.$result->id) }}">{{$result->student_name}} <i class="fa fa-eye"></i></a></td>
                 <td>{{$result->student_class}}</td>
                 <td>{{$result->student_roll}}</td>
                 <td>{{$result->student_result}}</td>
                 <td>
                   <form action="{{ url('ms/admission') }}{{'/'.$result->id}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      
                       <a href="{{ url('/ms/admission') }}{{'/'.$result->id.'/edit'}} " class="btn btn-warning" title="">Edit</a>
                       <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                   </form>
                 </td>
               </tr>
             @endforeach
            @endif
           </tbody>
         </table>
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
    
