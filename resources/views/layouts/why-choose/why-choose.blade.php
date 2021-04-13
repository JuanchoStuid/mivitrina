<div class="container">
    <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
      Porque Escogernos
    </h1>
    <div class="row">
      @foreach ($whys as $why)
        <div class="col-sm-6 col-md-4">
            <div class="item wow fadeIn" data-wow-delay="{{ $why->why_data_wow_delay }}">
            <div class="icon">
                <i class="{{ $why->why_i_class }}">
                </i>
            </div>
            <h2>
                {{ $why->why_h2 }}
            </h2>
            <p>
                {{ $why->why_p }}
            </p>
            </div>
        </div>
      @endforeach
    </div>
  </div>