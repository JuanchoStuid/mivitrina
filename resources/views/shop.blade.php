@section('titleMaestro')
	| shop
@endsection

@section('style')
@endsection

@extends('layouts.master-shop')

@section('title', '')
{{-- Inicio de la información --}}
@section('content-title')
    shops
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
@section('content-slider')
{{-- <div class="slider-for slider">
    @if ($producto->por_img_slider != null)
        @foreach (json_decode($producto->por_img_slider, true) as $imag)
            <div>
                <img src="{{ Voyager::image( $imag ) }}">
            </div>
        @endforeach
    @else
        <p>No hay imagenes</p>
    @endif
</div>
<ul id="productthumbnail" class="slider slider-nav">
    @if ($producto->por_img_thumbnail != null)
        @foreach (json_decode($producto->por_img_thumbnail, true) as $imag1)
            <li>
                <img src="{{ Voyager::image( $imag1 ) }}">
            </li>
        @endforeach
    @else
        <p>No hay imagenes</p>
    @endif
</ul> --}}
@endsection
@section('content-shop')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="widget-search md-30">
          <form action="#">
            <input class="form-control" placeholder="Search here..." type="text">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
        <div class="widget-ct widget-categories mb-30">
          <div class="widget-title">
            <h4>Categories</h4>
          </div>
          <ul class="product-cat">
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Outerwear</a></li>
            <li><a href="#">Jackets & Coats</a></li>
            <li><a href="#">Pants & Chinos</a></li>
            <li><a href="#">Backpacks</a></li>
            <li><a href="#">T-Shirts & Tanks</a></li>
            <li><a href="#">Gadgets</a></li>
          </ul>
        </div>

        <div class="widget-ct widget-color mb-30">
          <div class="widget-title">
            <h4>Color</h4>
          </div>
          <div class="widget-info color-filter clearfix">
            <ul>
              <li><a href="#"><span class="color color-1"></span>LightSalmon<span class="count">12</span></a></li>
              <li><a href="#"><span class="color color-2"></span>Dark Salmon<span class="count">20</span></a></li>
              <li><a href="#"><span class="color color-3"></span>Tomato<span class="count">59</span></a></li>
              <li class="active"><a href="#"><span class="color color-4"></span>Deep Sky Blue<span class="count">45</span></a></li>
              <li><a href="#"><span class="color color-5"></span>Electric Purple<span class="count">78</span></a></li>
              <li><a href="#"><span class="color color-6"></span>Atlantis<span class="count">10</span></a></li>
              <li><a href="#"><span class="color color-7"></span>Deep Lilac<span class="count">15</span></a></li>
            </ul>
          </div>
        </div>

        <div class="widget-ct widget-size mb-30">
          <div class="widget-title">
            <h4>Size</h4>
          </div>
          <div class="widget-info size-filter clearfix">
            <ul>
              <li><a href="#">M</a></li>
              <li class="active"><a href="#">S</a></li>
              <li><a href="#">L</a></li>
              <li><a href="#">SL</a></li>
              <li><a href="#">XL</a></li>
            </ul>
          </div>
        </div>
        <div class="widget-ct widget-banner">
          <div class="widget-info widget-banner-img">
            <a href="#"><img src="assets/img/banner/img1.jpg" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="shop-content">
          <div class="col-md-12">
            <div class="product-option mb-30 clearfix">
              <ul class="shop-tab">
                <li class="active"><a aria-expanded="true" href="#grid-view" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                <li><a aria-expanded="false" href="#list-view" data-toggle="tab"><i class="fa fa-list"></i></a></li>
              </ul>
              <!-- Size end -->               
              <div class="showing text-right">
                <p class="hidden-xs">Showing 01-09 of 17 Results</p>
              </div>
            </div>            
          </div>

          <div class="tab-content">
            <div id="grid-view" class="tab-pane active">
                @foreach ($productos as $prod)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="shop-product">
                        <div class="product-box">
                            <a href="#"><img src="{{ Voyager::image( $prod->pro_img_src ) }}" alt=""></a>
                            <div class="cart-overlay"></div>
                            <span class="sticker sale"><strong>Sale</strong></span>
                            <button class="sticker wishlist"><i class="fa fa-heart-o"></i></button>
                            <button class="addtocart"><span>Adicionar al Carro</span><i class="fa fa-shopping-cart"></i></button>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="{{ route("product.show",$prod->pro_id) }}">{{ $prod->pro_h3 }}</a></h4>
                            <h4 class="product-title"><a href="{{ route("product.show",$prod->pro_id) }}">{{ $prod->pro_presentacion }}</a></h4>
                            <div class="star-rating">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star-o"></i></span>
                            <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <span class="price">$ {{ number_format(($prod->pro_precio), 2 , ",", ".") }}</span>
                        </div>
                        </div>            
                    </div>  
                @endforeach            
            </div>
            <div id="list-view" class="tab-pane">
              <div class="shop-list">
                  @foreach ($productos as $prod)
                    <div class="col-md-12">
                        <div class="shop-product clearfix">
                        <div class="product-box">
                            <a href="#"><img src="{{ Voyager::image( $prod->pro_img_src ) }}" alt=""></a>
                            <div class="cart-overlay"></div>
                            <span class="sticker sale"><strong>New</strong></span>
                            <button class="sticker wishlist"><i class="fa fa-heart-o"></i></button>
                            <button class="addtocart"><span>Adicionar al Carro</span><i class="fa fa-shopping-cart"></i></button>
                        </div>
                        <div class="product-info">
                            <div class="fix mb-10">
                            <h4 class="product-title pull-left"><a href="{{ route("product.show",$prod->pro_id) }}">{{ $prod->pro_h3 }}</a></h4>
                            <h4 class="product-title pull-left"><a href="{{ route("product.show",$prod->pro_id) }}">{{ $prod->pro_presentacion }}</a></h4>
                            <div class="star-rating pull-right">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            </div>
                            <div class="fix mb-20">
                            <span class="price">$ {{ number_format(($prod->pro_precio), 2 , ",", ".") }}</span>
                            {{-- <span class="old-price font-16px ml-10"><del>$ 96.20</del></span> --}}
                            </div>
                        <div class="product-description mb-30">
                            <p>{{ $prod->pro_descripcion }}</p>
                        </div>  
                            <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Adicionar a la Lista</button>                       
                        </div>
                        </div>            
                    </div>
                  @endforeach
              </div>
            </div>
          </div>

        </div>
        <!-- Pagination start -->
        <div class="shop-pagination  text-center">
          <div class="pagination">
            <ul>
              <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
              <li><a href="#">01</a></li>
              <li class="active"><a href="#">02</a></li>
              <li><a href="#">03</a></li>
              <li><a href="#">04</a></li>
              <li><a href="#">05</a></li>
              <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
            </ul>
          </div>
        </div> 
        <!-- Pagination end -->
      </div>
    </div>
</div>
@endsection
{{-- Fin de la información --}}
@section('script')
@endsection