<!-- Container Starts -->
<div class="container">

    <h1 class="section-title wow fadeInDown" data-wow-delay=".5s">
      {{ $section_who_we_are->sec_valor }}
    </h1>
    <!-- Row Starts -->
    <div class="row">

      @foreach ($teams as $team)
      <!-- Team Item Starts -->
      <div class="col-sm-6 col-md-3">
        <div class="team-item wow fadeInUpQuick" data-wow-delay="{{ $team->tea_data_wow_delay }}">
          <figure>
            <img src="{{ $team->tea_figure_img_src }}" alt="{{ $team->tea_img_alt }}">
            <div class="info">
              <h2>
                {{ $team->tea_h2 }}
              </h2>
              <p>
                {{ $team->tea_p }}
              </p>
            </div>
            <figcaption>
              <div class="social">
                <ul>
                  <li>
                    <a href="{{ $team->tea_a_href_facebook }}">
                      <i class="fa fa-facebook">
                      </i>
                    </a>
                  </li>
                  <li>
                    <a href="{{ $team->tea_a_href_twitter }}">
                      <i class="fa fa-twitter">
                      </i>
                    </a>
                  </li>
                  <li>
                    <a href="{{ $team->tea_a_href_linkedin }}">
                      <i class="fa fa-linkedin">
                      </i>
                    </a>
                  </li>
                  <li>
                    <a href="{{ $team->tea_a_href_google_plus }}">
                      <i class="fa fa-google-plus">
                      </i>
                    </a>
                  </li>
                </ul>
              </div>
            </figcaption>
          </figure>
        </div>
        </div>
      <!-- Team Item Ends -->
      @endforeach
      
    </div><!-- Row Ends -->
  </div><!-- Container Ends -->