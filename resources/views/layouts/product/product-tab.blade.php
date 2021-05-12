<div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="single-pro-tab-menu">
          <!-- Nav tabs -->
          <ul class="">
            <li class="active"><a href="#description" data-toggle="tab">Descripción</a></li>
            {{-- <li><a href="#reviews" data-toggle="tab">Reviews</a></li> --}}
            <li><a href="#information" data-toggle="tab">Información</a></li>
            <li><a href="#tags" data-toggle="tab">Tags</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="description">
            <div class="pro-tab-info pro-description">
              <h3 class="small-title">Descripción</h3>
              <p>{{ $producto->pro_descripcion_2 }}</p>
            </div>
          </div>
          {{-- <div class="tab-pane" id="reviews">
            <div class="pro-tab-info pro-reviews">
              <div class="customer-review">
                <h3 class="small-title">Customer review</h3>
                <ul class="product-comments clearfix">
                  <li class="mb-30">
                    <div class="pro-reviewer">
                      <img src="assets/img/reviewer/1.jpg" alt="">
                    </div>
                    <div class="pro-reviewer-comment">
                      <div class="fix">
                        <div class="pull-left mbl-center">
                          <h5><strong>Gerald Barnes</strong></h5>
                          <p class="reply-date">27 Jun, 2016 at 2:30pm</p>
                        </div>
                        <div class="comment-reply pull-right">
                          <a href="#"><i class="fa fa-reply"></i></a>
                          <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    </div>
                  </li>
                  <li class="threaded-comments">
                    <div class="pro-reviewer">
                      <img src="assets/img/reviewer/2.jpg" alt="">
                    </div>
                    <div class="pro-reviewer-comment">
                      <div class="fix">
                        <div class="pull-left mbl-center">
                          <h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
                          <p class="reply-date">27 Jun, 2016 at 2:30pm</p>
                        </div>
                        <div class="comment-reply pull-right">
                          <a href="#"><i class="fa fa-reply"></i></a>
                          <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="leave-review">
                <h3 class="small-title">Leave your reviw</h3>
                <div class="your-rating mb-30">
                  <p class="mb-10"><strong>Your Rating</strong></p>
                  <span>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                  </span>
                  <span class="separator">|</span>
                  <span>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                  </span>
                  <span class="separator">|</span>
                  <span>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                  </span>
                  <span class="separator">|</span>
                  <span>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                  </span>
                  <span class="separator">|</span>
                  <span>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                  </span>
                </div>
                <div class="reply-box">
                  <form action="" class="form-horizontal">
                    <div class="form-group">
                      <div class="col-md-6">
                        <input class="form-control" name="Name" id="author" value="" type="text" placeholder="Your name here...">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" name="subject" id="author" value="" type="text" placeholder="Subject...">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <textarea class="form-control input-lg" name="comment" rows="4" placeholder="Your review here..."></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <button class="btn btn-common" type="submit">Submit Review</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>    
          </div> --}}
          <div class="tab-pane" id="information">
            <div class="pro-tab-info pro-information">
              <h3 class="small-title">Información</h3>
              <p>{{ $producto->pro_informacion }}</p>
            </div>                      
          </div>
          <div class="tab-pane" id="tags">
            <div class="pro-tab-info pro-information">
              <h3 class="small-title">Tags</h3>
              <p>{{ $producto->pro_tags }}</p>
            </div>                      
          </div>
        </div>                  
      </div>
    </div>
  </div>