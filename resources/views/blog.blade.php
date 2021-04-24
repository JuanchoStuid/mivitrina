@section('titleMaestro')
	| Blog
@endsection

@section('style')
@endsection

@extends('layouts.master-blog')

@section('title', '')
{{-- Inicio de la información --}}
@section('content-title')
    Blogs
@endsection
@section('content-enlace')

@endsection
@section('content-icon')

@endsection
@section('content-call')

@endsection
@section('content-email')
    
@endsection
{{-- División del content --}}
@section('content-blog')
<div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="post">
          <header class="entry-header">
            <h1 class="blog-title entry-title">{{ $blog->blo_a_i_head }}</h1>
          </header>
          <img src="{{ $blog->blo_a_img_src }}" alt="{{ $blog->blo_a_img_alt }}">
          <div class="post-content">
            <div class="date">
              <a href="{{ $blog->blo_a_href_user }}">
                <i class="fa fa-user">                      
                </i>
                {{ $blog->blo_a_user_text }}
              </a>
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
            </div>
            <p>
                {{ $blog->blo_div_p }}
            </p>
            {{-- <div class="reading clearfix">
              <ul class="social-icons-fill light pull-right">   
                <li>
                <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
                  <i class="fa fa-twitter">
                  </i>
                </a>
              </li>
              <li>
                <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook">
                  <i class="fa fa-facebook">
                  </i>
                </a>
              </li>
              <li>
                <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google+">
                  <i class="fa fa-google-plus">
                  </i>
                </a>
              </li>
              <li>
                <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="LinkedIn">
                  <i class="fa fa-linkedin">
                  </i>
                </a>
              </li>
              </ul>
              <!-- share-btn -->          
            </div> --}}
          </div>
        </div>
        {{-- <div class="author">
          <div class="author-avatar">
            <img src="assets/img/blog/avatar.jpg" alt="">
          </div>              
          <div class="author-comment">
            <h4 class="author-name">
              Imran
            </h4>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <a class="author-link btn btn-common" href="#" rel="author">View all posts by Imran</a>
          </div>
          <div class="clear">
          </div>
        </div> --}}

        {{-- <nav class="navigation">
          <div class="nav-links">
            <div class="nav-previous">
              <a href="#">Plain Gallery Post Format</a>
            </div>
            <div class="nav-next">
              <a href="#">Plain Standard Post</a>
            </div>
          </div>
        </nav> --}}

        {{-- <div id="comments" class="havecomments">
          <h3>
            <i class="fa fa-comment-o"></i>
            5 Comments 
            <a class="btn btn-success pull-right" href="#respond">
            <i class="fa fa-plus"></i>
            Comments 
            </a>
          </h3>

          <ol class="commentlist">
            <li class="comment">
              <article class="clearfix comment-container">
                <div class="comment-author">
                  <img src="assets/img/blog/img-1.png" alt="">
                </div>
                <div class="comment-content">
                  <cite class="fn"><a href="#">Mohammad Musharrof</a></cite>
                  <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                  <section class="comment_content clearfix">
                    <p>Hey, Nicely Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
                  </section>
                  <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                </div>
                <!-- END comment-content -->
              </article>
              <ul class="children">
                <li class="comment byuser comment-author-imranmodel32 bypostauthor odd alt depth-2">
                  <article id="comment-32" class="clearfix comment-container">
                    <div class="comment-author">
                      <img src="assets/img/blog/img-1.png" alt="">
                    </div>
                    <div class="comment-content">
                      <cite class="fn"><a href="http://wpbean.com" class="url">Imran</a></cite>
                      <time datetime="2015-04-2"><a href="http://graygrids.com/demos/wordpress/plain/colorful-easter-eggs/#comment-32">April 2nd, 2015 </a></time>
                      <section class="comment_content clearfix">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
                      </section>
                      <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                    </div>
                    <!-- END comment-content -->
                  </article>
                  <ul class="children">
                    <li class="comment byuser comment-author-imranmodel32 bypostauthor even depth-3">
                      <article class="clearfix comment-container">
                        <div class="comment-author">
                          <img src="assets/img/blog/img-1.png" alt="">
                        </div>
                        <div class="comment-content">
                          <cite class="fn"><a href="#" class="url">Imran</a></cite>
                          <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                          <section class="comment_content clearfix">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
                          </section>
                          <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                        </div>
                        <!-- END comment-content -->
                      </article>
                    </li>
                    <li class="comment odd alt depth-3">
                      <article class="clearfix comment-container">
                        <div class="comment-author">
                          <img src="assets/img/blog/img-1.png" alt="">
                        </div>
                        <div class="comment-content">
                          <cite class="fn"><a href="#" class="url">Mohammad Musharrof</a></cite>
                          <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                          <section class="comment_content clearfix">
                            <p>unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          </section>
                          <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                        </div>
                        <!-- END comment-content -->
                      </article>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="comment even thread-odd thread-alt depth-1">
              <article class="clearfix comment-container">
                <div class="comment-author">
                  <img src="assets/img/blog/img-1.png" alt="">
                </div>
                <div class="comment-content">
                  <cite class="fn"><a href="#" class="url">Mohammad Musharrof</a></cite>
                  <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                  <section class="comment_content clearfix">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </section>
                  <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                </div>
                <!-- END comment-content -->
              </article>
            </li>
          </ol>
        </div> --}}

        {{-- <div class="respond">
          <h3>Leave a Comment</h3>
          <form action="" class="form-horizontal">
            <div class="form-group">
              <div class="col-md-5">
                <input class="form-control" name="Name" id="author" value="" type="text" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-5">
                <input class="form-control" name="Email" id="author" value="" type="text" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-5">
                <input class="form-control" name="web" id="author" value="" type="text" placeholder="Website">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <textarea class="form-control input-lg" name="comment" rows="4" placeholder="Type your comment here..."></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button class="btn btn-common" type="submit">Post Comment</button>
              </div>
            </div>
            <p class="comment-subscription-form">
              <input name="subscribe_comments" value="s"type="checkbox"> 
              <label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Notify me of follow-up comments by email.</label>
            </p>
            <p class="comment-subscription-form">
              <input name="subscribe_blog" id="subscribe_blog" value="subscribe"  type="checkbox">
              <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label>
            </p>
          </form>
        </div> --}}
      </div>

      <!-- Sidebar Start -->
      {{-- <div class="col-md-4">
        <div class="sidebar">
          <div class="search-box">
            <form action="" method="get">
              <fieldset>
                <div class="input-group">
                  <input name="s" class="form-control" type="text" placeholder="SEARCH...">
                    <span class="input-group-btn">
                    <button type="submit" class="btn plain-search-btn">
                      <i class="fa fa-search"></i>
                    </button>
                    </span>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="popular-post widget">
            <h4 class="widget-title">Recent Posts</h4>
            <ul>
              <li><a href="#">Starting a Business Guide</a></li>
              <li><a href="#">Plan for what is difficult</a></li>
              <li><a href="#">Colorful Easter Eggs</a></li>
              <li><a href="#">Plain Standard Post</a></li>
              <li><a href="#">Plain Image Post Format</a></li>
            </ul>
          </div>
          
          <div class="popular-post widget">
            <h4 class="widget-title">Archives</h4>
            <ul>
              <li><a href="#">April 2015</a></li>
              <li><a href="#">March 2015</a></li>
            </ul>
          </div>
          
          <div class="category widget">
            <h4 class="widget-title">Categories</h4>
            <ul>
              <li>
                <a href="#">
                  Audio Post
                </a>
              </li>
              <li>
                <a href="#">
                  Business Plan
                </a>
              </li>
              <li>
                <a href="#">
                  Daily Life
                </a>
              </li>
              <li>
                <a href="#">
                  Gallery Post
                </a>
              </li>
              <li>
                <a href="#">
                  Image Post
                </a>
              </li>
              <li>
                <a href="#">
                  Life Style
                </a>
              </li>
              <li>
                <a href="#">
                  Quote Post
                </a>
              </li>
              <li>
                <a href="#">
                  Uncategorized
                </a>
              </li>
              <li>
                <a href="#">
                  Video Post
                </a>
              </li>
            </ul>
          </div>
          
          <div class="meta widget">
            <h4 class="widget-title">Meta</h4>
            <ul>
              <li><a href="#">Log In</a></li>
              <li><a href="#">Entries RSS</a></li>
              <li><a href="#">Comments RSS</a></li>
              <li><a href="#">WordPress.Org</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection
@section('content-info-panel')
@endsection
{{-- Fin de la información --}}
@section('script')
@endsection