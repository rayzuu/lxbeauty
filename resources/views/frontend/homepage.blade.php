@extends('layouts.frontend')
@section('title', 'Homepage')
@section('content')
    <!-- slides -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/assets/img/logo/Karosel 1.jpeg') }}" class="d-block w-100 shadow-nih"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/assets/img/logo/Karosel 2.jpeg') }}" class="d-block w-100 shadow-nih"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/assets/img/logo/Karosel 3.jpeg') }}" class="d-block w-100 shadow-nih"
                    alt="...">
            </div>
        </div>


        <!-- end slides -->

        <!-- categories -->
        <div class="container mt-5">
            <div class="section-title-furits text-center">
                <h2>FEATURED CATEGORIES</h2>
            </div>
            <br>
            <div class="row mt-5">
                @foreach ($categories as $category)
                    <div class="col-lg-3 mb-5">
                        <div class="card category-card">
                            <a href="{{ route('shop.index', $category->slug) }}">
                                <img class="img-cover" src="{{ Storage::url('images/categories/' . $category->cover) }}"
                                    alt="">
                                <span class="position-absolute category-name"
                                    style=" position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);background-color: white;padding: .8rem 1rem;border: 3px solid #f0f0f0;">
                                    {{ $category->name }}
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end categories -->

        <!-- services -->

        <!-- end services -->

        <!-- products -->
        <div class="popular-product-area wrapper-padding-3 pt-115 pb-115">
            <div class="container-fluid">
                <br>
                <div class="section-title-furits section-title-6 text-center mb-50">
                    <h2>Popular Product</h2>
                </div>
                <br>
                <div class="product-style">
                    <div class="popular-product-active owl-carousel">
                        @foreach ($products as $product)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        @if ($product->firstMedia)
                                            <img src="{{ asset('storage/images/products/' . $product->firstMedia->file_name) }}"
                                                alt="{{ $product->name }}">
                                        @else
                                            <img src="{{ asset('frontend/assets/img/product/fashion-colorful/1.jpg') }}"
                                                alt="{{ $product->name }}">
                                        @endif
                                    </a>
                                    <div class="product-action">
                                        <a class="animate-left add-to-fav" title="Wishlist"
                                            product-slug="{{ $product->slug }}" href="">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a class="animate-top add-to-card" title="Add To Cart" href=""
                                            product-id="{{ $product->id }}" product-slug="{{ $product->slug }}">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="funiture-product-content text-center">
                                    <h4><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                                    </h4>
                                    <span>Rp.{{ number_format($product->price) }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end products -->
    @endsection
