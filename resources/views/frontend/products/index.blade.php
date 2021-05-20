@extends('frontend.layout.master')
@section('content')
<div class="modal-video" tabindex="9">
    <video src="/images/section-3-video/video.mp4" controls></video>
</div>
<!-- Start Responsive menu -->
<header>
    <div class="container-fluid">
        <ul class="Route d-flex align-items-center p-0 flex-wrap">
            <li class="lightgray-color">
                <a href="#" class="lightgray-color">Electronics</a>
                >
            </li>
        </ul>
        <div class="row">
            <div class="col-12 col-lg-6 col-head-1">
                <div class="header-images d-flex align-items-start">
                    <div class="header-subsidiary-images d-flex flex-column">
                        @foreach($product->photos as $photo)
                        <a data-zoom-id="jeans" href="{{$photo->path}}" data-image="jeans1-small.jpg"><img class="header-subsidiary-image" src="{{$photo->path}}"></a>
                        @endforeach
                       <video src="/images/section-3-video/video.mp4" class="header-subsidiary-image" id="head-video"></video>
                    </div>

                    <div class="main-img-container" id="main-img-container">
                        <a href="{{$product->photos[0]->path}}" class="MagicZoom" id="jeans" data-options="selectorTrigger: hover; transitionEffect: false; zoomWidth:300px;zoomHeight:300px;"><img src="{{$product->photos[0]->path}}"></a>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 header-descriptions-content header-middle">
                <div class="header-descriptions-product">
                    <div class="description-1">
                        <h1 class="header-title dark-color">
                            {{$product->title}}
                        </h1>
                        <a href="#" class="blue-color score-content">
                            {{$product->slug .' '.'مدل'}}
                        </a>
                        <div>
                            <div class="product-score d-flex align-items-center">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="#" class="blue-color score-content">
                                    58,777 ratings
                                </a>
                            </div>
                            <div class="d-flex align-items-center scors">
                                <span class="blue-color header-line"> | </span>
                                <a href="#" class="blue-color score-content">
                                    224 answered questions
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center a-declarative">
                                <span class="text-white">Amazon's </span>
                                <span class="orange-color"> Choice</span>
                            </div>
                            <small class="ac-badge-triangle"></small>
                            <p class="m-0 dark-color">
                                in Foam Rollers by Amazon Basics...
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="description-2">
                        <ul class="lightgray-color p-0">
                            @if(!$product->discount_price==null)
                            <li>قیمت قبلی: <span class="in-line">{{$product->price}} تومان</span></li>
                            <li>قیمت تخفیف خورده: <span class="red-color">{{$product->discount_price}} تومان</span></li>
                            <li>سود شما: <span class="red-color">{{$product->price- $product->discount_price}}تومان</span></li>
                            @else
                                <li>قیمت تخفیف خورده: <span class="red-color">{{$product->price}} تومان</span></li>
                            @endif
                        </ul>
                        <div class="colors-product">
                  <span
                  >color:
                    <h5 id="product-color"></h5>
                  </span>
                            <div class="d-flex align-items-center">
                                <div class="color" id="black"></div>
                                <div class="color" id="white"></div>
                            </div>
                        </div>
                        <div class="styles">
                  <span
                  >Style:
                    <h5 id="style"></h5>
                  </span>
                            <div class="product-styles">
                                <div class="product-style d-flex align-items-center justify-content-between">
                                    <h5 class="m-0">برند</h5>
                                    <p class="m-0 gray-color">{{$product->brand->title}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="description-3">
                        <h5>توضیحات</h5>
                        <ul class="dark-color about-product"><li>{!! $product->long_description !!}</li></ul>
                    </div>
                </div>
                <div class="container-downloads-box">
                    <div class="downloads-box d-flex align-items-center">
                        <img
                            src="/images/download-img/download.jpg"
                            alt="download"
                            class="download-icon"
                        />
                        <button class="download">
                            <img src="/images/download-img/pdf.jpg" alt="pdf" />
                        </button>
                        <button class="download">
                            <img src="/images/download-img/software.jpg" alt="software" />
                        </button>
                        <button class="download">
                            <img src="/images/download-img/zip.png" alt="zip" />
                        </button>
                    </div>
                </div>
            </div>


        <div class="row second-header-row">
            <div class="col-12 col-md-8">
                <div class="header-descriptions-product">
                    <div class="description-1">
                        <h1 class="header-title dark-color">
                            {{$product->title}}
                        </h1>
                        <a href="#" class="blue-color score-content">
                            {{$product->slug.' '.'مدل'}}
                        </a>
                        <div>
                            <div class="product-score d-flex align-items-center">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="#" class="blue-color score-content">
                                    58,777 ratings
                                </a>
                            </div>
                            <div class="d-flex align-items-center scors">
                                <span class="blue-color header-line"> | </span>
                                <a href="#" class="blue-color score-content">
                                    224 answered questions
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="description-2">
                        <ul class="lightgray-color p-0">
                            @if(!$product->discount_price==null)
                                <li>قیمت قبلی: <span class="in-line">{{$product->price}} تومان</span></li>
                                <li>قیمت تخفیف خورده: <span class="red-color">{{$product->discount_price}} تومان</span></li>
                                <li>سود شما: <span class="red-color">{{$product->price- $product->discount_price}}تومان</span></li>
                            @else
                                <li>قیمت تخفیف خورده: <span class="red-color">{{$product->price}} تومان</span></li>
                            @endif
                        </ul>
                        <div class="colors-product">
                  <span>color:<h5 id="product-color"></h5></span>
                            <div class="d-flex align-items-center">
                                <div class="color" id="black"></div>
                                <div class="color" id="white"></div>
                            </div>
                        </div>
                        <div class="styles">
                  <span>Style:<h5 id="style"></h5></span>
                            <div class="product-styles">
                                <div class="product-style d-flex align-items-center justify-content-between">
                                    <h5 class="m-0">برند</h5>
                                    <p class="m-0 gray-color">{{$product->brand->title}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="description-3">
                        <h5>توضیحات اجمالی</h5>
                        <ul class="dark-color about-product">
                            <li>
                                {!! $product->long_description !!}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container-downloads-box">
                    <div class="downloads-box d-flex align-items-center">
                        <img src="/images/download-img/download.jpg" alt="download" class="download-icon"/>
                        <button class="download"><img src="/images/download-img/pdf.jpg" alt="pdf" /></button>
                        <button class="download"><img src="/images/download-img/software.jpg" alt="software" /></button>
                        <button class="download"><img src="/images/download-img/zip.png" alt="zip" /></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->

<!-- Start main Content -->
<main>
    <!-- Start section 1 -->
    <section class="section section-1">
        <div class="container-fluid">
            <h2 class="text-center">Product Comparison</h2>
            <div class="product-informations d-flex align-items-end"></div>
            <div class="row align-items-end">

                <div class="col-12 col-md-10">
                    <div class="owl-carousel owl-theme owl-1">
                        @foreach($varietes as $variety)
                        <div>
                            <div class="product-introduction">
                                <div>
                                    <img src="{{$variety->photos[0]->path}}" alt="New-product"/>
                                    <h5 class="text-center m-3">{{$variety->product['title']}}</h5>
                                </div>
                                <div>
                                    @foreach($variety->attributeValues->sortByDesc('id') as $attribute)
                                    <div class="product-feature d-flex align-items-center justify-content-center bg-light w-100">
                                        <p class="m-0">{{$attribute->title}}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End section 1 -->

    <!-- Start section 2 -->
    <section class="section section-2">
        <div class="container-fluid">
            @foreach($product->baners as $baner)
            <div class="banner">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div>
                            <h2 class="banner-title m-auto">
                                {!! $baner->description !!}
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div>
                            <img src="{{$baner->photo->path}}" alt="banner img" class="banner-img"/>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End section 2 -->

    <!-- Start section 3 -->
    <section>
        <div class="container-fluid">
            <video src="/images/section-3-video/video.mp4" width="100%" height="600px" style="object-fit: cover; margin-bottom: 5rem;" controls></video>
        </div>
    </section>
    <!-- End section 3 -->

    <!-- Start section 4 -->
    <section class="section-4">
        <div class="container-fluid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach($features as $feature)
                <div>
                    <div class="row align-items-center slider-section-4">
                        <div class="col-12 col-lg-5">
                            <div class="left-sction-slider">
                                <div class="description-slider">
                                    <div class="slider-image-icon-container">
                                        <i class="fas fa-video camera-icon"></i>
                                    </div>
                                    <h2 class="slider-title">
                                        {{$feature->title}} <br />
                                    </h2>
                                    <p class="lightgray-color self-description">
                                        {!! $feature->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div>
                                <img src="{{$feature->photo->path}}" alt="slider img" class="section-4-slider-img"/>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End section 4 -->

    <!-- Start section 5 -->
    <section class="section-5">
        <div class="container-fluid">
            <div class="d-flex align-items-center section-5-title">
                <p class="gray-color m-0">توضیحات: </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="descriptions-section-5">
                        {!! $product->long_description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section 5 -->

    <!-- Start section 6 -->

    <!-- End section 6 -->

    <!-- Start section 7 -->
    <section class="section-7">
        <div class="container">
            <div class="background bg-light m-auto">
                <div class="slide-section-7-container m-auto">
                    <h4>محصولات مشابه</h4>
                    <div class="owl-carousel owl-theme owl-2">
                        <div class="main-slide">
                            @foreach($relatedProducts as $related)

                                <a href="{{route('products.single',['id'=>$product->id])}}"><img src="{{$related->photos[0]->path}}" alt="product" class="product-section-7-slider"></a>
                                <a href="{{route('products.single',['id'=>$product->id])}}"><p class="gray-color">{{$related->title}}</p></a>
                            <h5 class="dark-color">{{$related->price}}</h5>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section 7 -->

</main>
@endsection
