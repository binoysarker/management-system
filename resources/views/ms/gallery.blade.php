@extends('layouts.master')
@section('title')
  {{-- expr --}}
  WpF Degree : Gallery
@endsection
@section('content')
  {{-- expr --}}
  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="imgBanner">
    <h2>Gallery</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->
  
  <!--=========== BEGIN GALLERY SECTION ================-->
  <section id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div id="gallerySLide" class="gallery_area">
              <a href="{{ asset('img/gallery/img-large1.jpg') }}" title="This is Title">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small1.jpg') }}" alt="img" />
              <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large2.jpg') }}" title="This is Title2">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small2.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large3.jpg') }}" title="This is Title3">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small3.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large4.jpg') }}" title="This is Title4">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small4.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large1.jpg') }}" title="This is Title5">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small1.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large2.jpg') }}">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small2.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large3.jpg') }}">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small3.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large4.jpg') }}">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small4.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
               <a href="{{ asset('img/gallery/img-large1.jpg') }}" title="This is Title">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small1.jpg') }}" alt="img" />
              <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large2.jpg') }}" title="This is Title2">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small2.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large3.jpg') }}" title="This is Title3">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small3.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large4.jpg') }}" title="This is Title4">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small4.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large1.jpg') }}" title="This is Title5">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small1.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large2.jpg') }}">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small2.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large3.jpg') }}">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small3.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
              <a href="{{ asset('img/gallery/img-large4.jpg') }}">
                <img class="gallery_img" src="{{ asset('img/gallery/img-small4.jpg') }}" alt="img" />
                <span class="view_btn">View</span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--=========== END GALLERY SECTION ================-->
@endsection
    
    