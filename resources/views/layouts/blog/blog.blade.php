<!-- Container Starts -->
<div class="container">
    <h1 class="section-title wow fadeInUpQuick">
      Desde el Blog
    </h1>
    <!-- Row Starts -->
    <div class="row">

      @foreach ($blogs as $blog)
      <!-- Blog Item Starts -->
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
        <div class="blog-item-wrapper wow fadeIn" data-wow-delay="{{ $blog->blo_data_wow_delay }}">
          <div class="blog-item-img">
            <a href="{{ $blog->blo_div_a_href }}">
              <img src="{{ $blog->blo_a_img_src }}" alt="{{ $blog->blo_a_img_alt }}">
            </a>                
            <a href="{{ $blog->blo_a_href_category }}" class="blog-category">
              <i class="fa fa-folder-open-o"></i>
              {{ $blog->blo_a_i_head }}
            </a>
          </div>
          <div class="blog-item-text">
            <a href="{{ $blog->blo_a_href_item_text }}">
              <h3>
                {{ $blog->blo_a_href_h3 }}
              </h3>
            </a>
            <p>
              {{ $blog->blo_div_p }}
            </p>
            <div class="blog-item-info">
              <a href="{{ $blog->blo_a_href_clock }}">
                <i class="fa fa-clock-o">
                </i>
                {{ $blog->blo_a_clock_text }}
              </a>
              <a href="{{ $blog->blo_a_href_comments }}">
                <i class="fa fa-comments">
                </i>
                {{ $blog->blo_a_comments_text }}
              </a>
              <a href="{{ $blog->blo_a_href_user }}">
                <i class="fa fa-user">
                </i>
                {{ $blog->blo_a_user_text }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog Item Wrapper Ends-->
      @endforeach   
      
    </div><!-- Row Ends -->
  </div><!-- Container Ends -->