
      <!-- Container Starts -->
      <div class="container">
        <h1 class="section-title wow fadeInUpQuick">
          Portfolio 
        </h1>
      </div><!-- Container Ends -->
      
      <!-- Portfolio Controller/Buttons -->
      <div class="controls text-center">
        <a class="filter btn btn-common" data-filter="all">
          All 
        </a>
        <a class="filter btn btn-common" data-filter=".branding">
          Branding 
        </a>
        <a class="filter btn btn-common" data-filter=".marketing">
          Marketing
        </a>
        <a class="filter btn btn-common" data-filter=".planning">
          Planning 
        </a>
        <a class="filter btn btn-common" data-filter=".research">
          Research 
        </a>
      </div>
      <!-- Portfolio Controller/Buttons Ends-->


      <!-- Portfolio Items Wrapper Starts-->
      <div id="portfolio-items" class="portfolio-items text-center">

        <!-- Portfolio Item Starts -->
        @foreach ($portfolios as $por)
          <div class="mix {{ $por->por_div_class_mix }}">
            <figure class="effect-layla">
              <img src="{{ $por->por_img_src }}">
              <figcaption>
                <h3>
                  {{ $por->por_h3 }}
                </h3>
                <div class="portfolio-category">
                  <span>{{ $por->por_div_span }}</span>
                </div>
              </figcaption>
            </figure>
          </div>
        @endforeach
        <!-- Portfolio Item Ends -->
        
      </div><!-- Portfolio Items Wrapper Ends-->