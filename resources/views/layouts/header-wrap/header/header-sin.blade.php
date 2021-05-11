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
          {{-- <img src="{{ $logo->value ?? '' }}" alt="Mi Vitrina HTML5 Template"> --}}
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