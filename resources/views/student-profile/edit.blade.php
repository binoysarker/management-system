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
                

                
                  {{-- expr --}}
                <img src="{{ url("/storage/$studentprofile->profile") }}" class="img-circle " style="height: 16rem; width: 16rem;" alt="img">
             </div>  
              <div class="singlecourse_bottom">
                <h2>{{$studentprofile->student_name}}</h2>
              </div>
           </div>

           {{-- displaying information about the student --}}
           <div class="contact_form wow fadeInLeft">

            <form class="submitphoto_form" action="{{ url('ms/student-profile') }}{{"/".$studentprofile->id}}" method="POST">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <input type="text" class="wp-form-control wpcf7-text" name="student_name" value="{{$studentprofile->student_name}}" placeholder="Your name">
              <input type="text" class="wp-form-control wpcf7-text" name="student_fatherName" value="{{$studentprofile->student_fatherName}}" placeholder="Father name">
              <input type="text" class="wp-form-control wpcf7-text" name="student_motherName" value="{{$studentprofile->student_motherName}}" placeholder="Mother name">
              <input type="number" class="wp-form-control wpcf7-text" name="student_mobileNumber" value="{{$studentprofile->student_mobileNumber}}" placeholder="Mobile name">
              <input type="mail" class="wp-form-control wpcf7-email" name="student_email" value="{{$studentprofile->student_email}}" placeholder="Email address">          
              <input type="text" class="wp-form-control wpcf7-text" name="student_subject" value="{{$studentprofile->student_subject}}" placeholder="Subject">
              <textarea class="wp-form-control wpcf7-textarea" name="student_address" value="" cols="30" rows="10" placeholder="Your home address">{{$studentprofile->student_address}}</textarea>
              <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
              
            </form>
         </div>
                
           
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
    
    