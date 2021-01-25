<!-- Container Ends -->
<div class="container">
    <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
      Clients
    </h1>
    <div class="wow fadeInUpQuick" data-wow-delay=".9s">
      <!-- Row and Scroller Wrapper Starts -->
      <div class="row" id="clients-scroller">
        @foreach ($clients as $cli)
          <div class="client-item-wrapper">
            <img src="{{ $cli->cli_div_img_src }}" alt="{{ $cli->cli_img_alt }}">
          </div>
        @endforeach
      </div><!-- Row and Scroller Wrapper Starts -->
    </div>
  </div><!-- Container Ends -->