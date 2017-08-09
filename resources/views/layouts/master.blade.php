<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>@yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('img/wpf-favicon.png') }}"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{ asset('css/superslides.css') }}">
    <!-- Slick slider css file -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"> 
    <!-- preloader -->
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{ asset('css/jquery.tosrus.all.css') }}" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="{{ asset('css/themes/green-theme.css') }}" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- clanander css --}}
    <link rel='stylesheet' href='{{ asset('css/themes/green-theme.css') }}' />
    <link rel="stylesheet" media="print" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.print.css"/>
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      @include('partials.navbar')   
    </header>
    <!--=========== END HEADER SECTION ================--> 

    

    <!--=========== BEGIN ABOUT US SECTION ================-->
    @yield('content')
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->    
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    @include('partials.footer')
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="{{ asset('js/queryloader2.min.js') }}" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="{{ asset('js/wow.min.js') }}"></script>  
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- superslides slider -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.animate-enhanced.min.js') }}"></script>
    <script src="{{ asset('js/jquery.superslides.min.js') }}" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery.tosrus.min.all.js') }}"></script>   

    <script src='{{ asset('css/jquery.min.js') }}'></script>
    <script src='{{ asset('css/moment.min.js') }}'></script>
    <script src='{{ asset('js/fullcalendar.js') }}'></script>

    <!-- Custom js-->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>