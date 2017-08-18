<!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <div class=""><a class="navbar-brand" href="index.html"><img src="{{ url('img/logo(small).png') }}" class="img-circle " alt=""></a></div>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="{{ url('ms') }}">Home</a></li>
                <li><a href="{{ url('ms/course-archive') }}">ABOUT US</a></li>
                <li><a href="{{ url('ms/scholarship') }}">INFORMATION</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMISSION<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/ms/student-profile') }}">Student Profile</a></li>
                    <li><a href="{{ url('ms/student-profile/create') }}">Apply Now</a></li>
                    <li><a href="{{ url('ms/admission') }}">Admission Test Result</a></li>
                    <li><a href="#">Fast Facts</a></li>               
                    <li><a href="#">Fees & Paymenst</a></li>               
                    <li><a href="#">Scholership</a></li>               
                    <li><a href="#">Transfer Procedure</a></li>               
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ACADEMIC<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('ms/apply-now') }}">Code Of Conducts</a></li>
                    <li><a href="{{ url('ms/admission-result') }}">Guidline for parents</a></li>
                    <li><a href="{{ url('ms/apply-now') }}">Dress Code</a></li>               
                    <li><a href="{{ url('ms/apply-now') }}">Lession Plan</a></li>               
                    <li><a href="{{ url('ms/academic-calander') }}">Academic Calander</a></li>               
                    <li><a href="{{ url('ms/apply-now') }}">Book list & Syllabus</a></li>               
                    <li><a href="{{ url('ms/apply-now') }}">Class Routine</a></li>               
                    <li><a href="{{ url('ms/apply-now') }}">Exam schedule</a></li>               
                    <li><a href="{{ url('ms/apply-now') }}">Results</a></li>               
                    <li><a href="{{ url('ms/co-curriculer') }}">Co-curricular Activities</a></li>               
                  </ul>
                </li>
                <li><a href="{{ url('ms/gallery') }}">DOWNLOADS</a></li>                
                <li><a href="{{ url('ms/gallery') }}">ARCHIVES</a></li>                
                <li><a href="{{ url('ms/blog-archive') }}">BLOG</a></li>
                               
                <li><a href="{{ url('ms/contact') }}">CONTACT</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU --> 