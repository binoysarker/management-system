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
  
  {{-- displying message --}}
  @if (session()->has('message'))

    <center><h2 class="title_two singlecourse_price">{{$msg = session()->get('message')}}</h2></center>
  @endif

  
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="courseArchive">
    <div class="container">
      <div class="row">
        <!-- start course content -->
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="courseArchive_content">              
           <div class="singlecourse_ferimg_area">
             <div class="singlecourse_ferimg">
               <img src="{{ asset('img/Binoy-Sarker.jpg') }}" class="img-circle " style="height: 16rem; width: 16rem;" alt="img">
             </div>  
              <div class="singlecourse_bottom">
                <h2>Binoy Sarker</h2>
              </div>
           </div>

           {{-- displaying information about the student --}}
           <div class="contact_form wow fadeInLeft">

            <form class="submitphoto_form" action="{{ url('/ms/edit-profile') }}" method="POST">
              <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
              <input type="text" class="wp-form-control wpcf7-text" placeholder="Father name">
              <input type="text" class="wp-form-control wpcf7-text" placeholder="Mother name">
              <input type="number" class="wp-form-control wpcf7-text" placeholder="Mobile name">
              <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">          
              <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
              <label for="#profile">Insert your image</label>
              <input type="file" name="profile" id="profile" value="Upload">
              <br>
              <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Your home address"></textarea>
              <input type="submit" value="Edit" class="btn btn-primary">
              <input type="submit" value="Delete" class="btn btn-danger">
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
    
    