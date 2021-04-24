
      <!-- Container Starts -->
      <div class="container">
        <h1 class="section-title wow fadeInUpQuick">
          Portfolio 
        </h1>
      </div><!-- Container Ends -->
      
      <!-- Portfolio Controller/Buttons -->
      <div class="controls text-center">
        @foreach ($filters as $filt)
          <a class="filter btn btn-common" data-filter="{{ $filt->fil_data_filter }}">
            {{ $filt->fil_data_name }}
          </a>
        @endforeach
      </div>
      <!-- Portfolio Controller/Buttons Ends-->


      <!-- Portfolio Items Wrapper Starts-->
      <div id="portfolio-items" class="portfolio-items text-center">

        <!-- Portfolio Item Starts -->
        @foreach ($portfolios as $por)
          <div class="mix {{ $por->por_div_class_mix }}">
            <a class="" href="{{ route("product.show",$por->por_id) }}">
              {{-- <h4>{{ $por->por_h3 }}</h4> --}}
            <figure class="effect-layla">
              <img src="{{ Voyager::image( $por->por_img_src ) }}" style="width: 100%;">
              <figcaption>
                  <h3>{{ $por->por_h3 }}</h3>
                <div class="portfolio-category">
                  <span>{{ $por->por_div_span }}</span>
                </div>
              </figcaption>
            </figure>
          </a>
          </div>
        @endforeach
        <!-- Portfolio Item Ends -->
        
      </div><!-- Portfolio Items Wrapper Ends-->