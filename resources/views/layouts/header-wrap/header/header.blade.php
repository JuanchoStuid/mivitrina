 <!-- Nav Menu with Logo area starts -->
 <div class="logo-menu">

  <!-- Navbar Starts -->
  <nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
    <div class="container">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        </button>
        <a class="navbar-brand" href="{{ route('home.index') }}">
          {{-- <img src="assets/img/logo.png" alt="PLAIN HTML5 Template"> --}}
          <img src="{{ Voyager::image( $logo->value ) }}" alt="Mi Vitrina HTML5 Template">
        </a>
      </div>
      <!-- Brand and toggle menu for mobile ends -->

      <!-- Navbar Starts -->
      <div class="collapse navbar-collapse" id="navbar">
          {{ menu('mivitrina', 'layouts.menus.mivitrina') }}
        
        <!-- Form for navbar search area -->
        <form class="full-search">
          <div class="container">
            <input type="text" placeholder="Type to Search">
            <a href="#" class="close-search">
              <span class="fa fa-times fa-2x">
              </span>
            </a>
          </div>
        </form>
        <!-- Search form ends -->
        
      </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
      {{ menu('mivitrina', 'layouts.menus.mivitrina') }}
    </ul>
    <!-- Mobile Menu End -->

  </nav>
  <!-- Navbar Ends -->

</div>
<!-- Nav Menu and logo area ends -->

<div id="carousel-area">
  <div id="carousel-slider" class="carousel slide" data-interval="3000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach ($sliders as $slid)
        <li data-target="#carousel-slider" data-slide-to="{{ $slid->sli_li_data_slide_to }}" class="{{ $slid->sli_li_class }}">
        </li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      <!-- Carousel Items Strarts-->
      @foreach ($sliders as $slid)
        <div class="item {{ $slid->sli_div_class_item }}" style="background-image: url({{ Voyager::image( $slid->sli_style_url_img ) }});">
          <div class="carousel-caption">
            <h2>
              {{ $slid->sli_h2 }}
            </h2>
            <h3>
              {{ $slid->sli_h3 }}
            </h3>
            {{-- <a class="btn btn-lg btn-common" href="#">
              <i class="{{ $slid->sli_i_class }}">
              </i>
              {{ $slid->sli_a_texto }}
            </a> --}}
          </div>
        </div>
      @endforeach
    </div>
    <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
      <i class="fa fa-chevron-left">
      </i>
    </a>
    <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
      <i class="fa fa-chevron-right">
      </i>
    </a>
  </div>
</div>