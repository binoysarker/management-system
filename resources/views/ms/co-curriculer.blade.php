@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Co-curricular Activities
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Co-curricular Activities</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="courseArchive">
    <div class="container">
      <div class="row">
        <!-- start course content -->
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="courseArchive_content">
            <!-- start blog archive  -->
            <div class="row">
              <!-- start single blog -->
              <div class="col-lg-12 col-12 col-sm-12">
                <div class="single_blog">
                  <div class="blogimg_container">
                    <a href="#" class="blog_img">
                      <img alt="img" src="{{ asset('img/blog.jpg') }}">
                    </a>
                  </div>
                  <h2 class="blog_title"><a href="blog-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                  <div class="blog_commentbox">
                    <p><i class="fa fa-user"></i>Richard Remus</p>
                    <p><i class="fa fa-calendar"></i>15 March 2015</p>
                    <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                  </div>
                  <p>সৃজনশীলতা ও সংস্কৃতিচর্চাঃ বাংলাদেশ যে কয়টি শিক্ষা প্রতিষ্ঠান তাদের নির্ধারিত শিক্ষাক্রমের পাশাপাশি সৃজনশীলতা তথা সংস্কৃতি চর্চাকে অব্যাহত রেখেছে ভিকারুননিসা নূন স্কুল ও কলেজ তার মধ্যে অন্যতম। শিক্ষার্থীদের যোগ্যতাকে পরিশীলিত করার লক্ষ্যে এখানে প্রাতিষ্ঠানিকভাবে তিনটি ক্লাব আছে। ভিকারুননিসা নূন ডিবেটিং ক্লাব, ভিকারুননিসা নূন সাইন্স ক্লাব ও ভিকারুননিসা নূন এনভায়রনমেন্ট ক্লাব। তাছাড়া আছে সাংস্কৃতিক কমিটি ও স্পোর্টস কমিটি। সমাজের প্রতিটি ক্ষেত্রে এই স্কুলের মেয়েরা আজ সুপ্রতিষ্ঠিত। দেশের নারী সমাজের অগ্রগতির জন্য প্রশংসনীয়ভাবে পরিচালিত নারী শিক্ষা প্রতিষ্ঠান ভিকারুননিসা নূন স্কুল আজ ছাপান্ন বছর পূর্ণ করেছে। এই পূর্ণতার প্রাপ্তি অত্যন্ত গভীর ও তাৎপর্যবহ। প্রাপ্তির আনন্দে, আত্মসমীক্ষণে, কর্মতৎপরতার প্রতিজ্ঞায় উত্তরোত্তর আলোকিত হোক স্কুল প্রাঙ্গণ, আলোকিত হয়ে উঠুক পরিপার্শ্ব।</p>
                  <blockquote>
                    <span class="fa fa-quote-left"></span>
                    Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel.
                  </blockquote>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                  <h3>This is example of H3</h3>
                  <h4>This is example of H4</h4>
                  <h5>This is example of H5</h5>
                  <h6>This is example of H6</h6>

                  <ul>
                    <li><span class="fa fa-angle-double-right"></span>There are many variations of passages</li>
                    <li><span class="fa fa-angle-double-right"></span>Lorem Ipsum generators</li>
                    <li><span class="fa fa-angle-double-right"></span>There are many variations of passages</li>
                    <li><span class="fa fa-angle-double-right"></span>The uses a dictionary of over 200 Latin words</li>
                    <li><span class="fa fa-angle-double-right"></span>Proin condimentum risus ligula</li>
                  </ul>
                  
                </div>
                <!-- single blog nex & prev button -->
                <div class="single_blog_prevnext">
                  <a class="prev_post wow fadeInLeft" href="#"><i class="fa fa-angle-left"></i>Previous Post</a>
                  <a class="next_post wow fadeInRight" href="#">Next Post<i class="fa fa-angle-right"></i></a>
                </div>
              </div>
              <!-- End single blog -->                
            </div>
            <!-- end blog archive  -->
            <!-- start related post -->
            <div class="related_post">
              <h2>Related News You May like</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_blog_archive wow fadeInUp">
                    <div class="blogimg_container">
                      <a class="blog_img" href="#">
                        <img src="{{ asset('img/blog.jpg') }}" alt="img">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="blog-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i>Richard Remus</p>
                      <p><i class="fa fa-calendar"></i>15 March 2015</p>
                      <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                    </div>
                    <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                    <a href="#" class="blog_readmore">Read More</a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_blog_archive wow fadeInUp">
                    <div class="blogimg_container">
                      <a class="blog_img" href="#">
                        <img src="{{ asset('img/blog.jpg') }}" alt="img">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="blog-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i>Richard Remus</p>
                      <p><i class="fa fa-calendar"></i>15 March 2015</p>
                      <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                    </div>
                    <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                    <a href="#" class="blog_readmore">Read More</a>
                  </div>
                </div>
              </div> 
            </div> 
            <!-- start related post -->           
          </div>
        </div>
        <!-- End course content -->

        <!-- start course archive sidebar -->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="courseArchive_sidebar">
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Popular post <span class="fa fa-angle-double-right"></span></h2>
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
              <h2>Category <span class="fa fa-angle-double-right"></span></h2>
              <ul>
                <li><a href="#">Food</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Games</a></li>
              </ul>
            </div>
            <!-- End single sidebar -->
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Tags <span class="fa fa-angle-double-right"></span></h2>
              <ul class="tags_nav">
                <li><a href="#"><i class="fa fa-tags"></i>Creative</a></li>
                <li><a href="#"><i class="fa fa-tags"></i>News</a></li>
                <li><a href="#"><i class="fa fa-tags"></i>Technology</a></li>
                <li><a href="#"><i class="fa fa-tags"></i>Art</a></li>
                <li><a href="#"><i class="fa fa-tags"></i>Audio</a></li>
                <li><a href="#"><i class="fa fa-tags"></i>video</a></li>
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
    
    