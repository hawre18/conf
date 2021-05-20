@extends('frontend.layout.master')

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($slides as $slide)
                @foreach($slide->photos as $photo)
                    @if(($count+1)==1)
                        <div class="carousel-item active">
                            <img src="{{$photo->path}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$slide->title}}</h5>
                                <p>{{mb_substr($slide->description, 0, 15).' ...' }}</p>
                                <a href="" class="btn btn-secondary">more</a>
                            </div>
                        </div>
                        {{$count+=1}}
                    @else
                        <div class="carousel-item">
                            <img src="{{$photo->path}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$slide->title}}</h5>
                                <p>{{$slide->title}}</p>
                                <a href="" class="btn btn-secondary">more</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">قبلی</span>
        </button>
        <button id="nexttt" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">بعدی</span>
        </button>
    </div>
    <div class="container-fluid">
        <div class="row text-life">
            <search-products></search-products>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-left justify-content-between">
                <h4 class="mt-4 text-secondary">قیمت های ویژه</h4><br>
                <h4 class="mt-4 text-secondary">محصولات جدید</h4><br>
            </div>
        </div>
    </div>
    <hr class="mb-4">
    <div class="container-fluid mt-4 mb-5">
        <div class="row products">
            @foreach($products as $product)
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2 mt-1 text-center">
                    <a href="{{route('products.single',['id'=>$product->id])}}">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{$product->photos[0]->path}}"  width="100%" alt="{{$product->title}}" title="{{$product->title}}">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-5">
        <h4>News</h4>
    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div id="owl-demo" class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1325px, 0px, 0px); transition: all 0.25s ease 0s; width: 5300px;"><div class="owl-item" style="width: 1325px;"><div>
                            <div class="row align-items-center slider-section-4">
                                <div class="col-12 col-lg-5">
                                    <div class="left-sction-slider">
                                        <div class="description-slider">
                                            <div class="slider-image-icon-container">
                                                <i class="fas fa-video camera-icon"></i>
                                            </div>
                                            <h2 class="slider-title">
                                                Lorem ipsum <br>
                                                dolor sit amet.
                                            </h2>
                                            <p class="lightgray-color self-description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Numquam, at amet voluptatem aut quas eos magni
                                                asperiores sequi quo, possimus modi, dignissimos quos.
                                                Incidunt animi veritatis cumque dolore pariatur omnis.
                                            </p>
                                            <a href="" class="btn btn-secondary">بیشتر</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div>
                                        <img src="images/section-4-slider-img/Screenshot (310).png" alt="slider img" class="section-4-slider-img">
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 1325px;"><div>
                            <div class="row align-items-center slider-section-4">
                                <div class="col-12 col-lg-5">
                                    <div class="left-sction-slider">
                                        <div class="description-slider">
                                            <div class="slider-image-icon-container">
                                                <i class="fas fa-video camera-icon"></i>
                                            </div>
                                            <h2 class="slider-title">
                                                Lorem ipsum <br>
                                                dolor sit amet.
                                            </h2>
                                            <p class="lightgray-color self-description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Numquam, at amet voluptatem aut quas eos magni
                                                asperiores sequi quo, possimus modi, dignissimos quos.
                                                Incidunt animi veritatis cumque dolore pariatur omnis.
                                            </p>
                                            <a href="" class="btn btn-secondary">بیشتر</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div>
                                        <img src="images/section-4-slider-img/Screenshot (310).png" alt="slider img" class="section-4-slider-img">
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 1325px;"><div>
                            <div class="row align-items-center slider-section-4">
                                <div class="col-12 col-lg-5">
                                    <div class="left-sction-slider">
                                        <div class="description-slider">
                                            <div class="slider-image-icon-container">
                                                <i class="fas fa-video camera-icon"></i>
                                            </div>
                                            <h2 class="slider-title">
                                                Lorem ipsum <br>
                                                dolor sit amet.
                                            </h2>
                                            <p class="lightgray-color self-description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Numquam, at amet voluptatem aut quas eos magni
                                                asperiores sequi quo, possimus modi, dignissimos quos.
                                                Incidunt animi veritatis cumque dolore pariatur omnis.
                                            </p>
                                            <a href="" class="btn btn-secondary">بیشتر</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div>
                                        <img src="images/section-4-slider-img/Screenshot (310).png" alt="slider img" class="section-4-slider-img">
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 1325px;"><div>
                            <div class="row align-items-center slider-section-4">
                                <div class="col-12 col-lg-5">
                                    <div class="left-sction-slider">
                                        <div class="description-slider">
                                            <div class="slider-image-icon-container">
                                                <i class="fas fa-video camera-icon"></i>
                                            </div>
                                            <h2 class="slider-title">
                                                Lorem ipsum <br>
                                                dolor sit amet.
                                            </h2>
                                            <p class="lightgray-color self-description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Numquam, at amet voluptatem aut quas eos magni
                                                asperiores sequi quo, possimus modi, dignissimos quos.
                                                Incidunt animi veritatis cumque dolore pariatur omnis.
                                            </p>
                                            <a href="" class="btn btn-secondary">بیشتر</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div>
                                        <img src="images/section-4-slider-img/Screenshot (310).png" alt="slider img" class="section-4-slider-img">
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev">
                    <span class="fa fa-angle-left"></span>
                </button><button type="button" role="presentation" class="owl-next"><span class="fa fa-angle-right"></span></button>
            </div>

            </button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot">

            </button>
        </div>
    </div>
    </div>

@endsection
