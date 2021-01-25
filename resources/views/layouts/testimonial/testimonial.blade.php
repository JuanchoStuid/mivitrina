<!-- Carousel Inner Starts -->
<div class="testimonial-inner">
    <!-- Container Starts -->
    <div class="container">
      <!-- Row Starts -->
      <div class='row'>
        <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
          <!-- Carousel Items / Quotes -->
          <div class="carousel-inner">
            @foreach ($testimonials as $tes)
              <div class="item {{ $tes->tes_div_class_active }}">
                <blockquote>
                  <div class="col-sm-3 text-center animated zoomIn">
                    <img class="img-circle" src="{{ $tes->tes_img_src }}" alt="">
                  </div>
                  <div class="col-sm-9 animated delay-0-5 fadeInUp">
                    <p>
                      <i class="fa fa-quote-left fa-2x">
                      </i>
                      {{ $tes->tes_div_p }}
                    </p>
                    <small>
                      <span class="name">
                        <i class="fa fa-user">
                        </i>
                        {{ $tes->tes_div_span_name }}
                      </span>
                      <span class="company">
                        <i class="fa fa-building">
                        </i>
                        {{ $tes->tes_div_span_company }}
                      </span>
                    </small>
                  </div>
                </blockquote>
              </div>
            @endforeach
          </div>
          <!-- Carousel Buttons Next/Prev -->
          <a data-slide="prev" href="#testimonial-carousel" class="left carousel-control">
            <i class="fa fa-chevron-left">
            </i>
          </a>
          <a data-slide="next" href="#testimonial-carousel" class="right carousel-control">
            <i class="fa fa-chevron-right">
            </i>
          </a>
        </div>
      </div><!-- Row Ends -->
    </div><!-- Container Ends -->
  </div><!-- Testimonial Ends -->