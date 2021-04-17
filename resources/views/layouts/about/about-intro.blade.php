<div class="container">
    <div class="row">
      @foreach ($abouts as $abou)
        <div class="col-sm-6 col-md-6">
          <div class="heading">
            <h3 class="small-title">
              {{ $abou->abo_h3_titulo_principal }}
            </h3>
          </div>
          <div class="the-company wow fadeIn">
            <p>
              <img class="{{ $abou->abo_img_class }}" src="{{ Voyager::image( $abou->abo_img_src ) }}" alt="{{ $abou->abo_img_alt }}">
              {{ $abou->abo_img_p }}
              </p>              
          </div>
        </div> 
      @endforeach         
      <div class="col-sm-6 col-md-6 skill-wrapper wow fadeIn" data-wow-delay=".8s">
        <div class="heading">
          <h3 class="small-title">
            {{ $abouts1->abo_h3_titulo_secundario }}
          </h3>
        </div>
        {{-- @foreach ($skills as $ski)
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $ski->ski_div_aria_valuenow }}" aria-valuemin="{{ $ski->ski_div_aria_valuemin }}" aria-valuemax="{{ $ski->ski_div_aria_valuemax }}" style="width: {{ $ski->ski_div_style }}">
                <p>
                    {{ $ski->ski_p }}
                </p>
                </div>
                <span class="percent">
                    {{ $ski->ski_span }}
                </span>
            </div>
        @endforeach --}}
      </div>
    </div>
  </div>