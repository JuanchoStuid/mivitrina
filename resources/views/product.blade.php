@section('titleMaestro')
	| producto
@endsection

@section('style')
@endsection

@extends('layouts.master-product')

@section('title', '')
{{-- Inicio de la información --}}
@section('content-title')
    productos
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
<div class="slider-for slider">
    @if ($producto->pro_img_slider != null)
        @foreach (json_decode($producto->pro_img_slider, true) as $imag)
            <div>
                <img src="{{ Voyager::image( $imag ) }}">
            </div>
        @endforeach
    @else
        <p>No hay imagenes</p>
    @endif
</div>
<ul id="productthumbnail" class="slider slider-nav">
    @if ($producto->pro_img_thumbnail != null)
        @foreach (json_decode($producto->pro_img_thumbnail, true) as $imag1)
            <li>
                <img src="{{ Voyager::image( $imag1 ) }}">
            </li>
        @endforeach
    @else
        <p>No hay imagenes</p>
    @endif
</ul>
@endsection
@section('content-info-panel')
    <h1 class="product-title">{{ $producto->pro_h3 }}</h1>
    <div class="comments">
        <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <span>{{ $producto->pro_div_span }}</span>
        </div>                  
    </div>
    <div class="price">
    $ {{ $producto->pro_precio }}
    </div>
    {{-- <div class="stock-list">
        <div class="product-details-sku">
            <p><b>SKU: </b><span>017</span></p>               
        </div>
        <div class="product-details-category">
            <p><b>Category: </b><span><a href="#">Outerwear</a>, <a href="#">T-Shirts</a></span></p>     
        </div>
        <div class="product-details-tags">
            <p><b>Tags: </b><span><a href="#">Clothing</a>, <a href="#">Mens</a></span></p>
        </div>
    </div> --}}
    <div class="description">
        <p>{{ $producto->pro_descripcion }}</p>
    </div>
    {{-- <div class="size">
        <h4>Size Options</h4>
        <span>S</span>
        <span>M</span>
        <span>L</span>
        <span>XL</span>
        <span>XXL</span>
    </div> --}}
    {{-- <div class="product-details-addtocart margin-bottom-10">
        <button class="btn btn-large btn-addtocart">add to cart <span><i class="fa fa-shopping-cart"></i></span></button>
    </div>
    <div class="product-details--wishlist">
        <button class="addtowishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>               
    </div> --}}
@endsection
{{-- Fin de la información --}}
@section('script')
@endsection