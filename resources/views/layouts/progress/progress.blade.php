<!-- Progress Inner Starts -->
<div class="progress-inner">
    <!-- Container Starts -->
    <div class="container">
      <h1 class="section-title wow fadeInUpQuick">
        Our Work Progress
      </h1>
      <!-- Row Starts -->
      <div class="row">
        <!-- Progress Items Starts -->
        <div class="our-progress text-center">
          @foreach ($progress as $prs)
            <div class="col-md-3 progress-item {{ $prs->prs_div_class }}" data-wow-delay="{{ $prs->prs_data_wow_delay }}">
              <div class="icon-effect">
                <i class="{{ $prs->prs_i_class }}">
                </i>
              </div>
              <h3>
                {{ $prs->prs_div_h3 }}
              </h3>
              <p>
                {{ $prs->prs_div_p }}
              </p>
            </div>
          @endforeach
        </div><!-- Progress Items Ends -->
      </div><!-- Row Ends -->
    </div><!-- Container Ends -->
  </div><!-- Progress Inner Ends -->