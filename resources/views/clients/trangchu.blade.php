@extends('layouts.client')

@section('title')
    Trang chủ
@endsection

@section('css')
    <style>
        .content {
            background-color: aqua;
        }
    </style>
    <link rel="stylesheet" href="style.css">
@endsection

@section('content')
<section class="product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">our products</h2>
                    <p class="sub-title">Add our products to weekly lineup</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-container">
                    <!-- product tab menu start -->
                    <div class="product-tab-menu">
                        <ul class="nav justify-content-center">
                            <li><a href="#tab1" class="active" data-bs-toggle="tab">Entertainment</a></li>
                            <li><a href="#tab2" data-bs-toggle="tab">Storage</a></li>
                            <li><a href="#tab3" data-bs-toggle="tab">Lying</a></li>
                            <li><a href="#tab4" data-bs-toggle="tab">Tables</a></li>
                        </ul>
                    </div>
                    <!-- product tab menu end -->

                    <!-- product tab content start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                <!-- product item start -->
                                @foreach ($listProduct as $item)
                                    
                                @endforeach
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="pri-img" src="{{Storage::url($item->hinh_anh)}}" alt="product">
                                            <img class="sec-img" src="{{Storage::url($item->hinh_anh)}}" alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span>new</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>10%</span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                        </div>
                                        <div class="cart-hover">
                                            <a href="" class="btn btn-cart">add to cart</a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            {{-- <p class="manufacturer-name"><a href="product-details.html">Gold</a></p> --}}
                                        </div>
                                        <ul class="color-categories">
                                            <li>
                                                <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                            </li>
                                            <li>
                                                <a class="c-darktan" href="#" title="Darktan"></a>
                                            </li>
                                            <li>
                                                <a class="c-grey" href="#" title="Grey"></a>
                                            </li>
                                            <li>
                                                <a class="c-brown" href="#" title="Brown"></a>
                                            </li>
                                        </ul>
                                        <h6 class="product-name">
                                            <a href="product-details.html">{{$item->ten_san_pham}}</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">{{$item->gia_san_pham}}</span>
                                            <span class="price-old"><del>{{$item->gia_khuyen_mai}}</del></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product item end -->
                            </div>
                        </div>
                    </div>
                    <!-- product tab content end -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script src=""></script>
    <script>
        // Code script
    </script>
@endsection
