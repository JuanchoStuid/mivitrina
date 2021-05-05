<div class="container">
    <!-- Container Starts -->
      <h1 class="section-title wow fadeInUp">
        {{ $section_other_services->sec_valor }}
      </h1>
      <div class="row">

        <!-- Other Service Item Wrapper Starts -->
        <div class="col-sm-6 col-md-6">
          @foreach ($otherservices as $oth)
            <article class="other-service-item {{ $oth->oth_article_class }}" data-wow-delay="{{ $oth->oth_data_wow_delay }}">
              <div class="icon">
                <i class="{{ $oth->oth_i_class }} icon-medium"></i>
              </div>              
              <div class="service-content">
                <h3>{{ $oth->oth_div_h3 }}</h3>
                <p>
                  {{ $oth->oth_div_p }}
                </p>
              </div>
            </article>
          @endforeach
        </div><!-- Other Service Item Wrapper Ends -->

        <!-- Other Service Image -->
        <div class="col-sm-6 com-md-6 wow fadeInRightQuick" data-wow-delay=".2s">
          <img src="assets/img/about/other-services.png" class="img-responsive" alt="">
        </div><!-- Other Service Image Ends-->

      </div>
    </div><!-- Container Ends -->