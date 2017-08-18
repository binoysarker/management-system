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
           

           {{-- displaying information about the student --}}
           <div class="contact_form wow fadeInLeft">
           <a href="{{ url('/ms/student-profile/create') }}" title="" class="btn btn-info">Create Student Profile</a>

            <table class="table table-hover wow fadeInLeft">
              <caption><strong>All students Detail</strong></caption>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>FatherName</th>
                  <th>MotherName</th>
                  <th>MobileNumber</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Student Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               
                @foreach ($studentprofile as $profile)
                  {{-- expr --}}
                  <tr>
                    <td>{{substr($profile->student_name, 0,6)."..."}}</td>
                    <td>{{substr($profile->student_fatherName, 0,6)."..."}}</td>
                    <td>{{substr($profile->student_motherName, 0,6)."..."}}</td>
                    <td>{{substr($profile->student_mobileNumber, 0,6)."..."}}</td>
                    <td>{{substr($profile->student_email, 0,6)."..."}}</td>
                    <td>{{substr($profile->student_subject, 0,6)."..."}}</td>
                    <td>{{substr($profile->student_address, 0,6)."..."}}</td>
                    <td>
                      <form action="{{ url('ms/student-profile') }}{{'/'.$profile->id}}" method="post">
                         {{csrf_field()}}
                         {{method_field('DELETE')}}
                         
                          <a href="{{ url('ms/student-profile') }}{{'/'.$profile->id.'/edit'}} " class="btn btn-warning" title="">Edit</a>
                          <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                      </form>
                    </td>
                  </tr>
                @endforeach
               
              </tbody>
            </table>
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
    
    