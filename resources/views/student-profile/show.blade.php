@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Student Profile
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Student Profile</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  
  {{-- displaying message section --}}
  @include('partials.message')

  
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="courseArchive">
    <div class="container">
      <div class="row">
        <!-- start course content -->
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="courseArchive_content">              
           <div class="singlecourse_ferimg_area">
             <div class="singlecourse_ferimg">
                @if (isset($studentprofile))
                  {{-- expr --}}
                <img src="{{ url('') }}{{''.$url}} " class="img-circle " style="height: 16rem; width: 16rem;" alt="img">
             </div>  
              <div class="singlecourse_bottom">
                <h2>{{$studentprofile->student_name}}</h2>
              </div>
           </div>

           {{-- displaying information about the student --}}
           <div class="contact_form wow fadeInLeft">
           <div class="panel panel-default">
             <div class="panel-heading">
               <h2 class="panel-title"><strong>Student Detail</strong></h2>
             </div>
             <div class="panel-body">
               <ul class="list-group">
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Student Name:</strong>
                   {{$studentprofile->student_name}}
                 </li>
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Father Name:</strong>
                   {{$studentprofile->student_fatherName}}
                 </li>
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Mother Name:</strong>
                   {{$studentprofile->student_motherName}}
                 </li>
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Mobile Number:</strong>
                   {{$studentprofile->student_mobileNumber}}
                 </li>
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Email Address:</strong>
                   {{$studentprofile->student_email}}
                 </li>
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Student Subject:</strong>
                   {{$studentprofile->student_subject}}
                 </li>
                 <li class="list-group-item">
                   <span class="badge">14</span>
                   <strong>Student Address:</strong>
                   {{$studentprofile->student_address}}
                 </li>
               </ul>
             </div>
           </div>
         </div>


                @else
              <h2 class="title_two singlecourse_price wow fadeInLeft">No Data to display. Please create a student profile</h2>
              <a href="{{ url('/ms/student-profile') }}{{'/'.$studentprofile->id}}" class="btn btn-primary">Create Student Profile</a>      
                
                @endif
           
          </div>
        </div>
        <!-- End course content -->

        <!-- start course archive sidebar -->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="courseArchive_sidebar">
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Events <span class="fa fa-angle-double-right"></span></h2>
              <ul class="news_tab">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="news_img">
                        <img alt="img" src="{{ asset('img/news.jpg') }}" class="media-object">
                      </a>
                    </div>
                    <div class="media-body">
                     <a href="#">Dummy text of the printing and typesetting industry</a>
                     <span class="feed_date">27.02.15</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="news_img">
                        <img alt="img" src="{{ asset('img/news.jpg') }}" class="media-object">
                      </a>
                    </div>
                    <div class="media-body">
                     <a href="#">Dummy text of the printing and typesetting industry</a>
                     <span class="feed_date">28.02.15</span>                
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="news_img">
                        <img alt="img" src="{{ asset('img/news.jpg') }}" class="media-object">
                      </a>
                    </div>
                    <div class="media-body">
                     <a href="#">Dummy text of the printing and typesetting industry</a>
                     <span class="feed_date">28.02.15</span>                
                    </div>
                  </div>
                </li>                  
              </ul>
            </div>
            <!-- End single sidebar -->
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Quick Links <span class="fa fa-angle-double-right"></span></h2>
              <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
              </ul>
            </div>
            <!-- End single sidebar -->
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
              <a class="side_add" href="#"><img src="{{ asset('img/side-add.jpg') }}" alt="img"></a>
            </div>
            <!-- End single sidebar -->
          </div>
        </div>
        <!-- start course archive sidebar -->
      </div>
    </div>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
@endsection
    
    