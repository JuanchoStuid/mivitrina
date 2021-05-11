<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Mi Vitrina @yield('titleMaestro')
    </title>
    @include('layouts.links.links1')

    <!-- Color CSS Styles  -->  
    @include('layouts.links.links2')

    @yield('title1')
    @yield('style')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  </head>
  <body class="@yield('pageType')">

  <!-- Header area wrapper starts -->
    <header id="header-wrap">
      @include('layouts.header-wrap.header-wrap-sin')
    </header>
    <!-- Header-wrap area ends -->
    
    <!-- Page Header -->
    <div class="page-header">
      <div class="page-header-inner">
        <div class="container">
          <h1 class="section-title page-title">
            About us 1
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="page">About Us 1</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Page Header End -->
        
    <!-- About us 1 Intro -->
    <section id="about-intro-block">
      @include('layouts.about.about-intro')
    </section>
    <!-- About Us-1 Intro Section End -->
      
    <!-- Why Choose -->
    <section id="why-choose" data-0="background-position:0px -200px;" data-10000="background-position:0px 2000;">
      @include('layouts.why-choose.why-choose')
    </section>
    <!-- Why Choose Section End -->
        
    <!-- Clients Section -->
    <section id="clients">
        @include('layouts.clients.clients')
    </section>
    <!-- Client Section End -->
        
    <!-- Testimonial Section -->
    <section id="testimonial">
        @include('layouts.testimonial.testimonial')
    </section>
    <!-- Testimonial Section End -->
        
    <!-- Team Section -->
    <section id="team">
        @include('layouts.team.team')
    </section>
    <!-- Team Section End -->
        
    <!-- Progress Section -->
    <section id="progress" style="width: 100%; height: 100%;" data-vide-bg="assets/video/progress-bg" data-vide-options="position: 0% 50%">
      <!-- Progress Inner Starts -->
      @include('layouts.progress.progress')
      <!-- Progress Inner Ends -->
    </section>
    <!-- Progress Section End -->  
        
    <!-- Notice Section -->
    {{-- <section id="notice">
    <!-- Container Starts -->
      <div class="container">
      <!-- Row Starts -->
        <div class="row">
          <!-- Notice Ciontents Starts -->
          <div class="notice-content clearfix wow fadeIn">
            <div class="col-md-10">
              <h4>
                PLAIN - MultiPurpose Business Template
              </h4>
              <p>
                Clean and Refreshing Solution for Your Next Project
              </p>
            </div>
            <!-- Notice Button -->
            <div class="col-md-2 notice-button">
              <a href="#" class="btn btn-common btn-lg pull-right">
                <i class="fa fa-shopping-cart">
                </i>
                Download Now 
              </a>
            </div>
          </div>
          <!-- Notice Container Ends -->
        </div>
      <!-- Row Starts -->
      </div>
      <!-- Container Ends -->
    </section> --}}
    <!-- Notice Section Ends -->  
        
    <!-- Footer Section -->
    <footer>
        @include('layouts.footer.footer')
    </footer>
    <!-- Footer Section End-->
    
    <!-- ScrollTop Starts-->
    <div class="scroll-top" data-spy="affix" data-offset-top="500">
      <a onclick="smoothScr.anim('roof')">
        <i class="fa fa-angle-up fa-2x">
        </i>
      </a>      
    </div><!-- ScrollTop Starts-->

    <!-- Start Loader -->
    <div id="loader">
      <div class="square-spin">
        <img src="assets/img/preloader.gif" alt="">
      </div>
    </div>
    
    <!-- Style Switcher -->
    {{-- <div class="switcher-box">      
      <h4>
        Color Style
      </h4>
      <ul class="colors-list">
        <li>
          <a onClick="setActiveStyleSheet('default'); return false;" title="Default" class="default">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('lightblue'); return false;" title="Lightblue" class="lightblue">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('gray'); return false;" title="Gray" class="gray">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('coffee'); return false;" title="Coffee" class="coffee">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('wisteria'); return false;" title="wisteria" class="wisteria">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('mblue'); return false;" title="Mblue" class="mblue">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('greensea'); return false;" title="Greensea" class="greensea">
          </a>
        </li>
      </ul>    
      <p class="switcher-massage">+ unlimited colors with colorpicker.</p>
      <a class="open-switcher show-switcher">
        <i class="fa fa-cog fa-spin"></i>
      </a>
    </div> --}}

    
    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="assets/js/jquery-min.js">
    </script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js">
    </script>
    <!--Text Rotator-->
    <script src="assets/js/jquery.mixitup.js">
    </script>
    <!--WOW Scroll Spy-->
    <script src="assets/js/wow.js">
    </script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.js">
    </script>
    <!-- Placeholder -->
    <script src="assets/js/placeholdem.min.js">
    </script>
    <!-- Vide -->
    <script src="assets/js/jquery.vide.js">
    </script>
    <!-- Skrollr -->
    
    <!-- Smooth Scroll -->
    <script src="assets/js/smooth-scroll.js">
    </script>
    <!-- WayPoint -->
    <script src="assets/js/waypoints.min.js">
    </script>
    <!-- CounterUp -->
    <script src="assets/js/jquery.counterup.min.js">
    </script>
    <!-- ScrollTop -->
    <script src="assets/js/scroll-top.js">
    </script>
    <!-- Appear -->
    <script src="assets/js/jquery.appear.js">
    </script>
    <!-- Slicknav -->
    <script src="assets/js/jquery.slicknav.js">
    </script>
    <!-- All JS plugin Triggers -->
    <script src="assets/js/main.js">
    </script>
    
  </body>
</html>