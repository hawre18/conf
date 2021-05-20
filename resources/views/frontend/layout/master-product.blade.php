@extends('frontend.layout.master')
@section('content')
    <div class="modal-video" tabindex="9">
        <video src="images/section-3-video/video.mp4" controls></video>
    </div>
    <!-- Start Responsive menu -->
    <!-- Start header -->
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
                                <a data-zoom-id="jeans" href="" data-image="{{$photo->path}}"><img class="header-subsidiary-image" src="{{$photo->path}}"></a>
                            @endforeach
                            <video src="images/section-3-video/video.mp4" class="header-subsidiary-image" id="head-video"></video>
                        </div>
                        <div class="main-img-container" id="main-img-container">
                            <a href="" class="MagicZoom" id="jeans" data-options="selectorTrigger: hover; transitionEffect: false; zoomWidth:300px;zoomHeight:300px;"><img src="{{$product->photos[0]->path}}"></a>
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
                                Visit the Amazon Basics Store
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
                        @if(!$product->discount_price==null)
                            <div class="description-2">
                                <ul class="lightgray-color p-0">
                                    <li>
                                        قیمت اصلی: <span class="in-line">{{$product->price}} تومان</span>
                                    </li>
                                    <li>قیمت تخفیف خورده: <span class="red-color">{{$product->discount_price}} تومان</span></li>
                                    <li>مقدار سود شما: <span class="red-color">{{$product->price-$product->discount_price}} تومان</span></li>
                                </ul>
                                @endif
                                <div class="colors-product">
                                    <span>color:<h5 id="product-color"></h5></span>
                                    <div class="d-flex align-items-center">
                                        <div class="color" id="black"></div>
                                        <div class="color" id="white"></div>
                                    </div>
                                </div>
                                <div class="styles">
                                    <span>Style:<h5 id="style"></h5></span>
                                    <div class="product-button-tabs">
                                        <button type="button">Portal</button>
                                        <button type="button">Portal Plus</button>
                                        <button type="button">Portal TV</button>
                                    </div>
                                    <div class="product-styles">
                                        <div class="product-style d-flex align-items-center justify-content-between">
                                            <h5 class="m-0">Brand</h5>
                                            <p class="m-0 gray-color">Facebook</p>
                                        </div>
                                        <div class="product-style d-flex align-items-center justify-content-between">
                                            <h5 class="m-0">Brand</h5>
                                            <p class="m-0 gray-color">Facebook</p>
                                        </div>
                                        <div class="product-style d-flex align-items-center justify-content-between">
                                            <h5 class="m-0">Brand</h5>
                                            <p class="m-0 gray-color">Facebook</p>
                                        </div>
                                        <div class="product-style d-flex align-items-center justify-content-between">
                                            <h5 class="m-0">Brand</h5>
                                            <p class="m-0 gray-color">Facebook</p>
                                        </div>
                                        <div class="product-style d-flex align-items-center justify-content-between">
                                            <h5 class="m-0">Brand</h5>
                                            <p class="m-0 gray-color">Facebook</p>
                                        </div>
                                        <div class="product-style d-flex align-items-center justify-content-between">
                                            <h5 class="m-0">Brand</h5>
                                            <p class="m-0 gray-color">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="description-3">
                                <h5>About this item</h5>
                                <ul class="dark-color about-product">
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Dolor deserunt doloremque, explicabo quos facilis minus,
                                        fugiat alias dolorem obcaecati consectetur accusantium.
                                    </li>
                                </ul>

                                <div class="d-flex flex-column align-items-start information">
                                    <button type="button" class="blue-color">
                                        <i class="fas fa-angle-down"></i>
                                        Show more
                                    </button>

                                    <button href="#" class="blue-color">
                                        New & Used (8) form <span class="red-color">$149.99</span>
                                    </button>
                                </div>
                            </div>
                    </div>
                    <div class="container-downloads-box">
                        <div class="downloads-box d-flex align-items-center">
                            <img
                                src="images/download-img/download.jpg"
                                alt="download"
                                class="download-icon"
                            />
                            <button class="download">
                                <img src="images/download-img/pdf.jpg" alt="pdf" />
                            </button>
                            <button class="download">
                                <img src="images/download-img/software.jpg" alt="software" />
                            </button>
                            <button class="download">
                                <img src="images/download-img/zip.png" alt="zip" />
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-2 header-descriptions-content-2 header-middle">
                    <div class="descriptions-box">
                        <div class="box inner-box-1">
                            <h5 class="red-color title-box-1">$14.99</h5>

                            <p class="lightred-color">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Autem culpa voluptas dicta sint error veritatis accusantium at
                                corrupti tempora recusandae?
                            </p>

                            <div class="location">
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="#" class="blue-color">
                                    Lorem ipsum dolor sit amet.
                                </a>
                            </div>

                            <button type="submit" class="add-cart">
                                <i class="fas fa-shopping-cart head-shopping-cart"></i>
                                Add to Cart
                            </button>
                        </div>
                        <div class="box inner-box-2">
                            <button class="gray-color">
                                New & Used (8) form <span class="red-color">$149.99</span>
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                        <div
                            class="social-networks d-flex align-items-center justify-content-center"
                        >
                            <span>Share</span>
                            <a href="#">
                                <i class="fas fa-envelope" style="color: #222222"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook-official" style="color: #3664a2"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" style="color: #68acd1"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest" style="color: #df2a12"></i>
                            </a>
                        </div>
                        <div class="box inner-box-3">
                            <h5 class="other-sell-title m-0">Lorem ipsum dolor sit.</h5>
                            <div class="other-selles">
                                <div class="other-sell d-flex justify-content-between flex-wrap">
                                    <h5 class="red-color">$168.24</h5>
                                    <button type="submit" class="add-othersell-cart">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="lightgray-color M-0">
                                    Lorem, ipsum: <span class="gray-color">Lorem</span>
                                </p>
                            </div>
                            <div class="other-selles">
                                <div class="other-sell d-flex justify-content-between flex-wrap">
                                    <h5 class="red-color">$168.24</h5>
                                    <button type="submit" class="add-othersell-cart">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="lightgray-color M-0">
                                    Lorem, ipsum: <span class="gray-color">Lorem</span>
                                </p>
                            </div>
                            <div class="other-selles">
                                <div class="other-sell d-flex justify-content-between flex-wrap">
                                    <h5 class="red-color">$168.24</h5>
                                    <button type="submit" class="add-othersell-cart">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="lightgray-color M-0">
                                    Lorem, ipsum: <span class="gray-color">Lorem</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row second-header-row">
                <div class="col-12 col-md-8">
                    <div class="header-descriptions-product">
                        <div class="description-1">
                            <h1 class="header-title dark-color">
                                Amazon Basics High-Density Exercise, Massage, Muscle Recovery,
                                Round Foam Roller, 12", 18", 24", 36"
                            </h1>
                            <a href="#" class="blue-color score-content">
                                Visit the Amazon Basics Store
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
                                <li>
                                    List Price: <span class="in-line">$179.00</span>
                                    <a href="#" class="blue-color">Details</a>
                                </li>
                                <li>Price: <span class="red-color">$149.00</span></li>
                                <li>you save: <span class="red-color">$29.01 (16%)</span></li>
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
                                <div class="product-button-tabs">
                                    <button type="button">Portal</button>
                                    <button type="button">Portal Plus</button>
                                    <button type="button">Portal TV</button>
                                </div>
                                <div class="product-styles">
                                    <div
                                        class="product-style d-flex align-items-center justify-content-between"
                                    >
                                        <h5 class="m-0">Brand</h5>
                                        <p class="m-0 gray-color">Facebook</p>
                                    </div>
                                    <div
                                        class="product-style d-flex align-items-center justify-content-between"
                                    >
                                        <h5 class="m-0">Brand</h5>
                                        <p class="m-0 gray-color">Facebook</p>
                                    </div>
                                    <div
                                        class="product-style d-flex align-items-center justify-content-between"
                                    >
                                        <h5 class="m-0">Brand</h5>
                                        <p class="m-0 gray-color">Facebook</p>
                                    </div>
                                    <div
                                        class="product-style d-flex align-items-center justify-content-between"
                                    >
                                        <h5 class="m-0">Brand</h5>
                                        <p class="m-0 gray-color">Facebook</p>
                                    </div>
                                    <div
                                        class="product-style d-flex align-items-center justify-content-between"
                                    >
                                        <h5 class="m-0">Brand</h5>
                                        <p class="m-0 gray-color">Facebook</p>
                                    </div>
                                    <div
                                        class="product-style d-flex align-items-center justify-content-between"
                                    >
                                        <h5 class="m-0">Brand</h5>
                                        <p class="m-0 gray-color">Facebook</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="description-3">
                            <h5>About this item</h5>
                            <ul class="dark-color about-product">
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolor deserunt doloremque, explicabo quos facilis minus,
                                    fugiat alias dolorem obcaecati consectetur accusantium.
                                </li>
                            </ul>

                            <div class="d-flex flex-column align-items-start information">
                                <button type="button" class="blue-color">
                                    <i class="fas fa-angle-down"></i>
                                    Show more
                                </button>

                                <button href="#" class="blue-color">
                                    New & Used (8) form <span class="red-color">$149.99</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container-downloads-box">
                        <div class="downloads-box d-flex align-items-center">
                            <img
                                src="images/download-img/download.jpg"
                                alt="download"
                                class="download-icon"
                            />
                            <button class="download">
                                <img src="images/download-img/pdf.jpg" alt="pdf" />
                            </button>
                            <button class="download">
                                <img src="images/download-img/software.jpg" alt="software" />
                            </button>
                            <button class="download">
                                <img src="images/download-img/zip.png" alt="zip" />
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="descriptions-box">
                        <div class="box inner-box-1">
                            <h5 class="red-color title-box-1">$14.99</h5>

                            <p class="lightred-color">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Autem culpa voluptas dicta sint error veritatis accusantium at
                                corrupti tempora recusandae?
                            </p>

                            <div class="location">
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="#" class="blue-color">
                                    Lorem ipsum dolor sit amet.
                                </a>
                            </div>

                            <button type="submit" class="add-cart">
                                <i class="fas fa-shopping-cart head-shopping-cart"></i>
                                Add to Cart
                            </button>
                        </div>
                        <div class="box inner-box-2">
                            <button class="gray-color">
                                New & Used (8) form <span class="red-color">$149.99</span>
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                        <div
                            class="social-networks d-flex align-items-center justify-content-center"
                        >
                            <span>Share</span>
                            <a href="#">
                                <i class="fas fa-envelope" style="color: #222222"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook-official" style="color: #3664a2"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" style="color: #68acd1"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest" style="color: #df2a12"></i>
                            </a>
                        </div>
                        <div class="box inner-box-3">
                            <h5 class="other-sell-title m-0">Lorem ipsum dolor sit.</h5>
                            <div class="other-selles">
                                <div class="other-sell d-flex justify-content-between">
                                    <h5 class="red-color">$168.24</h5>
                                    <button type="submit" class="add-othersell-cart">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="lightgray-color M-0">
                                    Lorem, ipsum: <span class="gray-color">Lorem</span>
                                </p>
                            </div>
                            <div class="other-selles">
                                <div class="other-sell d-flex justify-content-between">
                                    <h5 class="red-color">$168.24</h5>
                                    <button type="submit" class="add-othersell-cart">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="lightgray-color M-0">
                                    Lorem, ipsum: <span class="gray-color">Lorem</span>
                                </p>
                            </div>
                            <div class="other-selles">
                                <div class="other-sell d-flex justify-content-between">
                                    <h5 class="red-color">$168.24</h5>
                                    <button type="submit" class="add-othersell-cart">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="lightgray-color M-0">
                                    Lorem, ipsum: <span class="gray-color">Lorem</span>
                                </p>
                            </div>
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
                    <div class="col-12 col-md-2">
                        <div class="product-features">
                            <div class="product-feature bg-light">
                                <h5>Lorem, ipsum</h5>
                            </div>
                            <div class="product-feature bg-white">
                                <h5>Lorem, ipsum</h5>
                            </div>
                            <div class="product-feature bg-light">
                                <h5>Lorem, ipsum</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="owl-carousel owl-theme owl-1">
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-1.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-2.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-3.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-4.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-4.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-1.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-1.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-introduction">
                                    <div>
                                        <img
                                            src="images/section-1-slider-img/img-1.png"
                                            alt="New-product"
                                        />
                                        <h5 class="text-center m-3">title</h5>
                                    </div>
                                    <div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-white w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                        <div
                                            class="product-feature d-flex align-items-center justify-content-center bg-light w-100"
                                        >
                                            <p class="m-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section 1 -->

        <!-- Start section 2 -->
        <section class="section section-2">
            <div class="container-fluid">
                <h5 class="red-color">Lorem, ipsum dolor.</h5>
                <div class="banner">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div>
                                <h2 class="banner-title m-auto">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Maxime Lorem, ipsum dolor sit amet
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <img
                                    src="images/section-2-banner-img/banner-img.png"
                                    alt="banner img"
                                    class="banner-img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section 2 -->

        <!-- Start section 3 -->
        <section>
            <div class="container-fluid">
                <video
                    src="images/section-3-video/video.mp4"
                    width="100%"
                    height="600px"
                    style="object-fit: cover; margin-bottom: 5rem;"
                    controls
                ></video>
            </div>
        </section>
        <!-- End section 3 -->

        <!-- Start section 4 -->
        <section class="section-4">
            <div class="container-fluid">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div>
                        <div class="row align-items-center slider-section-4">
                            <div class="col-12 col-lg-5">
                                <div class="left-sction-slider">
                                    <div class="description-slider">
                                        <div class="slider-image-icon-container">
                                            <i class="fas fa-video camera-icon"></i>
                                        </div>
                                        <h2 class="slider-title">
                                            Lorem ipsum <br />
                                            dolor sit amet.
                                        </h2>
                                        <p class="lightgray-color self-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Numquam, at amet voluptatem aut quas eos magni
                                            asperiores sequi quo, possimus modi, dignissimos quos.
                                            Incidunt animi veritatis cumque dolore pariatur omnis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div>
                                    <img
                                        src="images/section-4-slider-img/Screenshot (310).png"
                                        alt="slider img"
                                        class="section-4-slider-img"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row align-items-center slider-section-4">
                            <div class="col-12 col-lg-5">
                                <div class="left-sction-slider">
                                    <div class="description-slider">
                                        <div class="slider-image-icon-container">
                                            <i class="fas fa-video camera-icon"></i>
                                        </div>
                                        <h2 class="slider-title">
                                            Lorem ipsum <br />
                                            dolor sit amet.
                                        </h2>
                                        <p class="lightgray-color self-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Numquam, at amet voluptatem aut quas eos magni
                                            asperiores sequi quo, possimus modi, dignissimos quos.
                                            Incidunt animi veritatis cumque dolore pariatur omnis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div>
                                    <img
                                        src="images/section-4-slider-img/Screenshot (310).png"
                                        alt="slider img"
                                        class="section-4-slider-img"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row align-items-center slider-section-4">
                            <div class="col-12 col-lg-5">
                                <div class="left-sction-slider">
                                    <div class="description-slider">
                                        <div class="slider-image-icon-container">
                                            <i class="fas fa-video camera-icon"></i>
                                        </div>
                                        <h2 class="slider-title">
                                            Lorem ipsum <br />
                                            dolor sit amet.
                                        </h2>
                                        <p class="lightgray-color self-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Numquam, at amet voluptatem aut quas eos magni
                                            asperiores sequi quo, possimus modi, dignissimos quos.
                                            Incidunt animi veritatis cumque dolore pariatur omnis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div>
                                    <img
                                        src="images/section-4-slider-img/Screenshot (310).png"
                                        alt="slider img"
                                        class="section-4-slider-img"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row align-items-center slider-section-4">
                            <div class="col-12 col-lg-5">
                                <div class="left-sction-slider">
                                    <div class="description-slider">
                                        <div class="slider-image-icon-container">
                                            <i class="fas fa-video camera-icon"></i>
                                        </div>
                                        <h2 class="slider-title">
                                            Lorem ipsum <br />
                                            dolor sit amet.
                                        </h2>
                                        <p class="lightgray-color self-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Numquam, at amet voluptatem aut quas eos magni
                                            asperiores sequi quo, possimus modi, dignissimos quos.
                                            Incidunt animi veritatis cumque dolore pariatur omnis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div>
                                    <img
                                        src="images/section-4-slider-img/Screenshot (310).png"
                                        alt="slider img"
                                        class="section-4-slider-img"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section 4 -->

        <!-- Start section 5 -->
        <section class="section-5">
            <div class="container-fluid">
                <h5 class="red-color">Lorem, ipsum.</h5>
                <div class="d-flex align-items-center section-5-title">
                    <p class="gray-color m-0">
                        lorem: <span class="dark-color">ipsum</span>
                    </p>
                    <span> | </span>
                    <p class="gray-color m-0">
                        lorem: <span class="dark-color">ipsum</span>
                    </p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="descriptions-section-5">
                            <p class="gray-color">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                saepe corrupti culpa quidem excepturi earum, repudiandae
                                tenetur nesciunt nostrum id, tempore alias natus numquam
                                minima reiciendis labore? Temporibus ullam eius officia quas
                                eos hic omnis voluptate aut tempore enim quis eligendi, quos
                                non tenetur consequatur fugiat quidem distinctio, veniam illo
                                aperiam. Sint sunt consectetur dolorum officiis omnis,
                                pariatur ducimus odit laboriosam. Enim labore autem nobis
                                tempora sit perferendis obcaecati quis expedita, distinctio
                                sed architecto facilis molestias? Quis at et deserunt,
                                corrupti laboriosam dolorum. Dicta aut optio consequatur quos
                                error neque rerum corrupti. Quia totam corrupti ipsum aliquid
                                voluptas? Molestias, pariatur? dolor sit amet consectetur
                                adipisicing elit. At saepe corrupti culpa quidem excepturi
                                earum, repudiandae tenetur nesciunt nostrum id, tempore alias
                                natus numquam minima reiciendis labore? Temporibus ullam eius
                                officia quas eos hic omnis voluptate aut tempore enim quis
                                eligendi, quos non tenetur consequatur fugiat quidem
                                distinctio, veniam illo aperiam. Sint sunt consectetur dolorum
                                officiis omnis, pariatur ducimus odit laboriosam. Enim labore
                                autem nobis tempora sit perferendis obcaecati quis expedita,
                                distinctio sed architecto facilis molestias? Quis at et
                                deserunt, corrupti laboriosam dolorum. Dicta aut optio
                                consequatur quos error neque rerum corrupti. Quia totam
                                corrupti ipsum aliquid voluptas?
                            </p>
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
                        <h4>Lorem, ipsum dolor.</h4>
                        <div class="owl-carousel owl-theme owl-2">
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <classh5 ="dark-color">$10.50 - $12.00</classh5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                            <div class="main-slide">
                                <img src="images/section-7-img/slide-img.png" alt="product" class="product-section-7-slider">
                                <p class="gray-color">Lorem ipsum dolor sit, amet elit....</p>

                                <h5 class="dark-color">$10.50 - $12.00</h5>
                                <p class="gray-color">100.0 <span class="dark-color">Pieces</span>  <span class="lightgray-color">(MOO)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section 7 -->

        <section>
            <div class="container-fluid">
                <div class="histories d-flex align-items-start justify-content-between">
                    <div class="historie-products">
                        <div class="d-lg-flex align-items-lg-center flex-wrap text-md-center main-title-history">
                            <h4 class="red-color">Lorem, ipsum dolor</h4>
                            <p class="blue-color m-0 title-section-8">Lorem ipsum dolor sit amet consectetur.
                            </p>
                            <small class="blue-color">></small>
                        </div>
                        <h4 class="history-res-title">History</h4>
                        <div class="product-histories-container d-flex align-items-center flex-wrap">
                            <div class="product-history">
                                <img src="images/section-8-img/histori.png" alt="product history">
                            </div>
                            <div class="product-history">
                                <img src="images/section-8-img/histori.png" alt="product history">
                            </div>
                            <div class="product-history">
                                <img src="images/section-8-img/histori.png" alt="product history">
                            </div>
                        </div>
                    </div>
                    <div class="sign-in-container">
                        <p class="dark-color sign-in-title m-0">Lorem, ipsum dolor ipsum dolor dolor</p>
                        <button type="submit" class="sign-in-btn">Sign in</button>
                        <div class="new-customer">
                            <small class="dark-color">Lorem, ipsum?</small>
                            <a href="#" class="blue-color">
                                Start here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End main Content -->

@endsection
