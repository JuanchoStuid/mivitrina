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
    <div>
        <img src="assets/img/single-product/1.jpg">
    </div>
    <div>
        <img src="assets/img/single-product/2.jpg">
    </div>
    <div>
        <img src="assets/img/single-product/3.jpg">
    </div>
    <div>
        <img src="assets/img/single-product/4.jpg">
    </div>
    <div>
        <img src="assets/img/single-product/5.jpg">
    </div>
    <div>
        <img src="assets/img/single-product/3.jpg">
    </div>
</div>
<ul id="productthumbnail" class="slider slider-nav">
    <li>
    <img src="assets/img/single-product/small/1.jpg">
    </li>
    <li>
    <img src="assets/img/single-product/small/2.jpg">
    </li>
    <li>
    <img src="assets/img/single-product/small/3.jpg">
    </li>
    <li>
    <img src="assets/img/single-product/small/4.jpg">
    </li>
    <li>
    <img src="assets/img/single-product/small/5.jpg">
    </li>
    <li>
    <img src="assets/img/single-product/small/3.jpg">
    </li>
</ul>
@endsection
@section('content-info-panel')
    <h1 class="product-title">{{ $producto->por_h3 }}</h1>
    <div class="comments">
        <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <span>{{ $producto->por_div_span }}</span>
        </div>                  
    </div>
    <div class="price">
    $ {{ $producto->por_precio }}
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
        <p>{{ $producto->por_descripcion }}</p>
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