@extends('template.admin')
@section('content')
    <main>
        <!-- slider-area-start -->
        <div class="slider-area">
            <div class="swiper-container slider__active">
                <div class="slider-wrapper swiper-wrapper">
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                        data-background="{{ url('public/admin') }}/img/slider/atas.jpg">
                    </div><!-- /single-slider -->
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                        data-background="{{ url('public/admin') }}/img/slider/atas-2.jpg">
                    </div><!-- /single-slider -->
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                        data-background="{{ url('public/admin') }}/img/slider/atas-3.jpg">
                    </div><!-- /single-slider -->
                    <div class="main-slider-paginations"></div>
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- recomand-product-area-start -->
        <section class="recomand-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Recommended For You</h5>
                            </div>
                            <div class="button-wrap">
                                <a href="{{ url('shop') }}">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="product-bs-slider-2">
                        <div class="product-slider-3 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="product__item mb-20 ">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="#">
                                                <img style="height:235px; width:235px;"
                                                    src="{{ url('public/admin') }}/img/product/sawit.png" alt="product">
                                            </a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#sawit">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="#">Sawit</a></h6>
                                        <div class="price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                    </div>
                                    <div class="product__add-cart text-center">
                                        <button type="button"
                                            class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="product__item mb-20 ">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="#">
                                                <img style="height:235px; width:235px;"
                                                    src="{{ url('public/admin') }}/img/product/pinang-1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#pinang">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="#">Pinang</a></h6>
                                        <div class="price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                    </div>
                                    <div class="product__add-cart text-center">
                                        <button type="button"
                                            class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="product__item mb-20 ">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="#">
                                                <img style="height:235px; width:235px;"
                                                    src="{{ url('public/admin') }}/img/product/kelengkeng.jpg"
                                                    alt="product">
                                            </a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#kelengkeng">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="#">Kelengkeng</a></h6>
                                        <div class="price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                    </div>
                                    <div class="product__add-cart text-center">
                                        <button type="button"
                                            class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                                <div class="product__item mb-20 ">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="#">
                                                <img style="height:235px; width:235px;"
                                                    src="{{ url('public/admin') }}/img/product/jeruk.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#jeruk">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="#">Jeruk</a></h6>
                                        <div class="price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                    </div>
                                    <div class="product__add-cart text-center">
                                        <button type="button"
                                            class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- recomand-product-area-end -->

        {{-- sawit --}}
        <div class="modal fade" id="sawit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/sawit.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel"
                                                aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/sawit1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel"
                                                aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/sawit2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel"
                                                aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/sawit3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav1" type="button" role="tab"
                                                    aria-controls="nav1" aria-selected="true">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/sawit.png"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav2" type="button" role="tab"
                                                    aria-controls="nav2" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/sawit1.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav3" type="button" role="tab"
                                                    aria-controls="nav3" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/sawit2.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav4" type="button" role="tab"
                                                    aria-controls="nav4" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/sawit3.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="#">Sawit</a></h4>

                                        <div class="product__price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> pertumbuhan : 50-55
                                                        cm/tahun</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> produksi pelepas :
                                                        12-16 pelepah/tahun</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> usia mulai berbuah :
                                                        22 bulan</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> jumlah tandan : 18-25
                                                        kg/tandan</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Sawit</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>Tanaman, Bibit</span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end sawit --}}

        {{-- pinang --}}
        <div class="modal fade" id="pinang" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContentPinang">
                                            <div class="tab-pane fade show active" id="navpinang-1" role="tabpanel"
                                                aria-labelledby="navpinang-1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/pinang-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navpinang-2" role="tabpanel"
                                                aria-labelledby="navpinang-2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/pinang2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navpinang-3" role="tabpanel"
                                                aria-labelledby="navpinang-3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/pinang3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navpinang-4" role="tabpanel"
                                                aria-labelledby="navpinang-4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/pinang4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalpinangTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="navpinang-1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navpinang-1" type="button" role="tab"
                                                    aria-controls="navpinang-1" aria-selected="true">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/pinang-1.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navpinang-2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navpinang-2" type="button" role="tab"
                                                    aria-controls="navpinang-2" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/pinang2.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navpinang-3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navpinang-3" type="button" role="tab"
                                                    aria-controls="navpinang-3" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/pinang3.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navpinang-4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navpinang-4" type="button" role="tab"
                                                    aria-controls="navpinang-4" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/pinang4.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="#">Pinang</a></h4>

                                        <div class="product__price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> pertumbuhan : 5-6
                                                        tahun</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> produksi buah mencapai
                                                        131 butir pertandan</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> usia tanam hingga 25
                                                        tahun</a></li> <br>
                                                <li><a href="#"><i class="fas fa-circle"></i> tinggi batang 5-10
                                                        meter</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Pinang</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>Tanaman, Bibit</span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end pinang --}}

        {{-- kelengkeng --}}
        <div class="modal fade" id="kelengkeng" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="navkelengkeng-1" role="tabpanel"
                                                aria-labelledby="navkelengkeng-1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/kelengkeng.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navkelengkeng-2" role="tabpanel"
                                                aria-labelledby="navkelengkeng-2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/kelengkeng1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navkelengkeng-3" role="tabpanel"
                                                aria-labelledby="navkelengkeng-3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/kelengkeng2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navkelengkeng-4" role="tabpanel"
                                                aria-labelledby="navkelengkeng-4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/kelengkeng3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="navkelengkeng-1-tab"
                                                    data-bs-toggle="tab" data-bs-target="#navkelengkeng-1" type="button"
                                                    role="tab" aria-controls="navkelengkeng-1" aria-selected="true">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/kelengkeng.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navkelengkeng-2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navkelengkeng-2" type="button" role="tab"
                                                    aria-controls="navkelengkeng-2" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/kelengkeng1.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navkelengkeng-3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navkelengkeng-3" type="button" role="tab"
                                                    aria-controls="navkelengkeng-3" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/kelengkeng2.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navkelengkeng-4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navkelengkeng-4" type="button" role="tab"
                                                    aria-controls="navkelengkeng-4" aria-selected="false">
                                                    <img style="height: 100px; width: 100px;"
                                                        src="{{ url('public/admin') }}/img/quick-view/kelengkeng3.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="#">Kelengkeng</a></h4>

                                        <div class="product__price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> masa produktif : 1
                                                        tahun sudah belajar berbuah</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> buah bisa langsung
                                                        dimakan</a></li> <br>
                                                <li><a href="#"><i class="fas fa-circle"></i> tinggi batang 1-3
                                                        meter</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Kelengkeng</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>Tanaman, Bibit</span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- endkelengkeng --}}

        {{-- jeruk --}}
        <div class="modal fade" id="jeruk" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="navjeruk-1" role="tabpanel"
                                                aria-labelledby="navjeruk-1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/product/jeruk.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navjeruk-2" role="tabpanel"
                                                aria-labelledby="navjeruk-2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/jeruk1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navjeruk-3" role="tabpanel"
                                                aria-labelledby="navjeruk-3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/jeruk2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navjeruk-4" role="tabpanel"
                                                aria-labelledby="navjeruk-4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ url('public/admin') }}/img/quick-view/jeruk3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="navjeruk-1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navjeruk-1" type="button" role="tab"
                                                    aria-controls="navjeruk-1" aria-selected="true">
                                                    <img style="height: 100px; width: 100px"
                                                        src="{{ url('public/admin') }}/img/product/jeruk.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navjeruk-2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navjeruk-2" type="button" role="tab"
                                                    aria-controls="navjeruk-2" aria-selected="false">
                                                    <img style="height: 100px; width: 100px"
                                                        src="{{ url('public/admin') }}/img/quick-view/jeruk1.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navjeruk-3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navjeruk-3" type="button" role="tab"
                                                    aria-controls="navjeruk-3" aria-selected="false">
                                                    <img style="height: 100px; width: 100px"
                                                        src="{{ url('public/admin') }}/img/quick-view/jeruk2.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="navjeruk-4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#navjeruk-4" type="button" role="tab"
                                                    aria-controls="navjeruk-4" aria-selected="false">
                                                    <img style="height: 100px; width: 100px"
                                                        src="{{ url('public/admin') }}/img/quick-view/jeruk3.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="#">Jeruk</a></h4>

                                        <div class="product__price">
                                            <span>Rp 50.000,00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> masa produktif : 1
                                                        tahun sudah belajar berbuah</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> buah bisa langsung
                                                        dimakan</a></li> <br>
                                                <li><a href="#"><i class="fas fa-circle"></i> tinggi batang 1-3
                                                        meter</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Jeruk</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>Tanaman, Bibit</span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- endjeruk --}}

    </main>
@endsection
