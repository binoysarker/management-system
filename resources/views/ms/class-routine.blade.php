@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Class Routine
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Class Routine</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->

  
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="courseArchive">
    <div class="container">
      <div class="row">
        <!-- start course content -->
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="courseArchive_content">              
           <div class="singlecourse_ferimg_area">
             <div class="singlecourse_ferimg">
               <img src="{{ asset('img/course-single.jpg') }}" alt="img">
             </div>  
              <div class="singlecourse_bottom">
                <h2>Introduction To Matrix</h2>
                <span class="singlecourse_author">
                  <img alt="img" src="{{ asset('img/author.jpg') }}">
                  Richard Remus, Teacher
                </span>
                <span class="singlecourse_price">$20</span>
              </div>
           </div>
           <div class="single_course_content">
             <h2>About The Class Routine</h2>
             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
             
              {{-- image of the class Routine --}}
             <div class="singlecourse_ferimg">
             </div> 
               <img src="{{ asset('img/exam-routine.jpg') }}" class="img-responsive" alt="img">


             <table class="table table-striped course_table">
              <thead>
                <tr>          
                  <th>Course Title</th>
                  <th>Instructor</th>
                  <th>Timing</th>
                </tr>
              </thead>
              <tbody>
                <tr>          
                  <td>Basic Of Matrix</td>
                  <td>Dr. Steve Palmer</td>
                  <td>08:00 to 13:00</td>
                </tr>
                <tr>
                  <td>Matrix Overview</td>          
                  <td>Jacob</td>                    
                  <td>08:00 to 13:00</td>
                </tr>
                <tr>
                  <td>Matrix Application</td>          
                  <td>Kimberly Jones</td>                    
                  <td>08:00 to 13:00</td>
                </tr>
                <tr>
                  <td>Advanced Matrix</td>          
                  <td>Dr. Klee</td>                    
                  <td>08:00 to 13:00</td>
                </tr>
              </tbody>
            </table>
           </div>
           <!-- start related course -->
           <div class="related_course">
              <h2>More Routines</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_course wow fadeInUp" >
                    <div class="singCourse_imgarea">
                      <img src="{{ asset('img/course-1.jpg') }}">
                      <div class="mask">                         
                        <a class="course_more" href="#">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <div class="singCourse_author">
                      <img alt="img" src="{{ asset('img/author.jpg') }}">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_course wow fadeInUp" >
                    <div class="singCourse_imgarea">
                      <img src="{{ asset('img/course-1.jpg') }}">
                      <div class="mask">                         
                        <a class="course_more" href="#">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <div class="singCourse_author">
                      <img alt="img" src="{{ asset('img/author.jpg') }}">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </div>                                    
              </div>
            </div>
            <!-- End related course -->
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
    
    