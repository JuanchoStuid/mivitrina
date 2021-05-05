<!-- Container Starts -->
<div class="container">

    <h1 class="section-title wow fadeIn animated" data-wow-delay=".2s">
      {{ $section_que_hacemos->sec_valor }}
    </h1>
    <div class="row">
      <!-- Service-Block-1 Item Starts -->
      @foreach ($services as $ser)
        <div class="col-sm-6 col-md-3 text-center">
          <div class="service-item wow fadeInUpQuick animated" data-wow-delay="{{ $ser->ser_data_wow_delay }}">
            <div class="icon-wrapper">
              <i class="{{ $ser->ser_div_div_i_class }}">
              </i>
            </div>
            <h2>
              {{ $ser->ser_h2 }}
            </h2>
            <p>
              {{ $ser->ser_p }}
            </p>
            <a href="{{ $ser->ser_a_href_btn }}" class="btn btn-common">
              {{ $ser->ser_a_text_btn }}
            </a>
          </div>
        </div>
      @endforeach
      <!-- Service-Block-1 Item Ends -->
    </div>
  </div><!-- Container Ends -->