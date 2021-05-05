<!-- Container Starts -->
<div class="container">
    <h1 class="section-title wow fadeInUpQuick">
      {{ $section_estadisticas->sec_valor }}
    </h1>
    <!-- Row Starts -->
    <div class="row">
      
      @foreach ($coolsfacts as $cool)
      <div class="col-md-4">
        <!-- Fact Block Starts -->
        <div class="fact-block clearfix wow fadeInUp" data-wow-delay="{{ $cool->coo_data_wow_delay }}">
          <div class="fact-count text-center">
            <i class="{{ $cool->coo_i_class_icon }} fa-5x">
            </i>
            <h3>
              <span class="counter">
                {{ $cool->coo_h3_span_numero }}
              </span>
            </h3>
            <h4>
              {{ $cool->coo_h4_text }}
            </h4>
          </div>
        </div>
        <!-- Fact Block Ends -->
      </div>
      @endforeach
      
    </div><!-- Row Ends -->
  </div><!-- Container Ends -->