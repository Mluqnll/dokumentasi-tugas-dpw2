@extends('template.admin')
@section('content')
    <div class="tab-content" id="productGridTabContent">
        <div class="tab-pane fade  show active" id="FourCol" role="tabpanel" aria-labelledby="FourCol-tab">
            <div class="tp-wrapper">
                <div class="row g-0">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/jambu.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#jambu">
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
                            <div class="product__content-3">
                                <h6><a href="#">Jambu</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/manggis.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#manggis">
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
                            <div class="product__content-3">
                                <h6><a href="#">Manggis</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/durian.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#durian">
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
                            <div class="product__content-3">
                                <h6><a href="#">Durian</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/petai.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#petai">
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
                            <div class="product__content-3">
                                <h6><a href="#">Petai</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/sawo.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#sawo">
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
                            <div class="product__content-3">
                                <h6><a href="#">Sawo</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/sawit.png" alt="product">
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
                            <div class="product__content-3">
                                <h6><a href="#">Sawit</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/rambutan.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#rambutan">
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
                            <div class="product__content-3">
                                <h6><a href="#">Rambutan</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/pinang-1.jpg" alt="product">
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
                            <div class="product__content-3">
                                <h6><a href="#">Pinang</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/mangga.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#mangga">
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
                            <div class="product__content-3">
                                <h6><a href="#">Mangga</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/kelengkeng.jpg" alt="product">
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
                            <div class="product__content-3">
                                <h6><a href="#">Kelengkeng</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/langsat.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#langsat">
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
                            <div class="product__content-3">
                                <h6><a href="#">Langsat</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item product__item-d">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="#">
                                        <img style="height:235px; width:235px;" src="{{url('public/admin')}}/img/product/jeruk.jpg" alt="product">
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
                            <div class="product__content-3">
                                <h6><a href="#">Jeruk</a></h6>
                                <div class="price mb-10">
                                    <span>Rp 50.000,00</span>
                                </div>
                            </div>
                            <div class="product__add-cart-s text-center">
                                <button type="button"
                                    class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                                <button type="button"
                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                    Quick View
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jambu --}}
    <div class="modal fade" id="jambu" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navjambu-1" role="tabpanel"
                                            aria-labelledby="navjambu-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/jambu.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navjambu-2" role="tabpanel"
                                            aria-labelledby="navjambu-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/jambu1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navjambu-3" role="tabpanel"
                                            aria-labelledby="navjambu-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/jambu2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navjambu-4" role="tabpanel"
                                            aria-labelledby="navjambu-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/jambu3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navjambu-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjambu-1" type="button" role="tab"
                                                aria-controls="navjambu-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jambu.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navjambu-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjambu-2" type="button" role="tab"
                                                aria-controls="navjambu-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jambu1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navjambu-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjambu-3" type="button" role="tab"
                                                aria-controls="navjambu-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jambu2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navjambu-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjambu-4" type="button" role="tab"
                                                aria-controls="navjambu-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jambu3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Jambu</a></h4>

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
                                                    <span>Jambu</span></a>
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
    {{-- endjambu --}}

    {{-- manggis --}}
    <div class="modal fade" id="manggis" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navmanggis-1" role="tabpanel"
                                            aria-labelledby="navmanggis-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/manggis.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navmanggis-2" role="tabpanel"
                                            aria-labelledby="navmanggis-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/manggis1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navmanggis-3" role="tabpanel"
                                            aria-labelledby="navmanggis-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/manggis2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navmanggis-4" role="tabpanel"
                                            aria-labelledby="navmanggis-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/manggis3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navmanggis-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmanggis-1" type="button" role="tab"
                                                aria-controls="navmanggis-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/manggis.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navmanggis-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmanggis-2" type="button" role="tab"
                                                aria-controls="navmanggis-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/manggis1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navmanggis-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmanggis-3" type="button" role="tab"
                                                aria-controls="navmanggis-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/manggis2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navmanggis-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmanggis-4" type="button" role="tab"
                                                aria-controls="navmanggis-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/manggis3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Manggis</a></h4>

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
                                                    <span>Manggis</span></a>
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
    {{-- endmanggis --}}

    {{-- durian --}}
    <div class="modal fade" id="durian" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navdurian-1" role="tabpanel"
                                            aria-labelledby="navdurian-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/durian.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navdurian-2" role="tabpanel"
                                            aria-labelledby="navdurian-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/durian1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navdurian-3" role="tabpanel"
                                            aria-labelledby="navdurian-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/durian2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navdurian-4" role="tabpanel"
                                            aria-labelledby="navdurian-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/durian3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navdurian-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navdurian-1" type="button" role="tab"
                                                aria-controls="navdurian-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/durian.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navdurian-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navdurian-2" type="button" role="tab"
                                                aria-controls="navdurian-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/durian1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navdurian-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navdurian-3" type="button" role="tab"
                                                aria-controls="navdurian-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/durian2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navdurian-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navdurian-4" type="button" role="tab"
                                                aria-controls="navdurian-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/durian3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Durian</a></h4>

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
                                                    <span>Durian</span></a>
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
    {{-- enddurian --}}

    {{-- petai --}}
    <div class="modal fade" id="petai" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navpetai-1" role="tabpanel"
                                            aria-labelledby="navpetai-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/petai.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navpetai-2" role="tabpanel"
                                            aria-labelledby="navpetai-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/petai1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navpetai-3" role="tabpanel"
                                            aria-labelledby="navpetai-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/petai2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navpetai-4" role="tabpanel"
                                            aria-labelledby="navpetai-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/petai3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navpetai-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpetai-1" type="button" role="tab"
                                                aria-controls="navpetai-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/petai.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navpetai-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpetai-2" type="button" role="tab"
                                                aria-controls="navpetai-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/petai1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navpetai-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpetai-3" type="button" role="tab"
                                                aria-controls="navpetai-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/petai2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navpetai-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpetai-4" type="button" role="tab"
                                                aria-controls="navpetai-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/petai3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Petai</a></h4>

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
                                                    <span>Petai</span></a>
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
    {{-- endpetai --}}

    {{-- sawo --}}
    <div class="modal fade" id="sawo" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navsawo-1" role="tabpanel"
                                            aria-labelledby="navsawo-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawo.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navsawo-2" role="tabpanel"
                                            aria-labelledby="navsawo-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawo1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navsawo-3" role="tabpanel"
                                            aria-labelledby="navsawo-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawo2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navsawo-4" role="tabpanel"
                                            aria-labelledby="navsawo-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawo3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navsawo-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawo-1" type="button" role="tab"
                                                aria-controls="navsawo-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawo.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navsawo-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawo-2" type="button" role="tab"
                                                aria-controls="navsawo-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawo1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navsawo-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawo-3" type="button" role="tab"
                                                aria-controls="navsawo-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawo2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navsawo-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawo-4" type="button" role="tab"
                                                aria-controls="navsawo-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawo3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Sawo</a></h4>

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
                                                    <span>Sawo</span></a>
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
    {{-- endsawo --}}

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
                                        <div class="tab-pane fade show active" id="navsawit-1" role="tabpanel"
                                            aria-labelledby="navsawit-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawit.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navsawit-2" role="tabpanel"
                                            aria-labelledby="navsawit-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawit1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navsawit-3" role="tabpanel"
                                            aria-labelledby="navsawit-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawit2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navsawit-4" role="tabpanel"
                                            aria-labelledby="navsawit-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/sawit3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navsawit-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawit-1" type="button" role="tab"
                                                aria-controls="navsawit-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawit.png"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navsawit-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawit-2" type="button" role="tab"
                                                aria-controls="navsawit-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawit1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navsawit-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawit-3" type="button" role="tab"
                                                aria-controls="navsawit-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawit2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navsawit-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navsawit-4" type="button" role="tab"
                                                aria-controls="navsawit-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/sawit3.jpg"
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
                                            <li><a href="#"><i class="fas fa-circle"></i> pertumbuhan : 50-55 cm/tahun</a></li>
                                            <li><a href="#"><i class="fas fa-circle"></i> produksi pelepas : 12-16 pelepah/tahun</a></li>
                                            <li><a href="#"><i class="fas fa-circle"></i> usia mulai berbuah : 22 bulan</a></li>
                                            <li><a href="#"><i class="fas fa-circle"></i> jumlah tandan : 18-25 kg/tandan</a></li>
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
    {{-- endsawit --}}

    {{-- rambutan --}}
    <div class="modal fade" id="rambutan" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navrambutan-1" role="tabpanel"
                                            aria-labelledby="navrambutan-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/rambutan.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navrambutan-2" role="tabpanel"
                                            aria-labelledby="navrambutan-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/rambutan1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navrambutan-3" role="tabpanel"
                                            aria-labelledby="navrambutan-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/rambutan2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navrambutan-4" role="tabpanel"
                                            aria-labelledby="navrambutan-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/rambutan3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navrambutan-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navrambutan-1" type="button" role="tab"
                                                aria-controls="navrambutan-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/rambutan.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navrambutan-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navrambutan-2" type="button" role="tab"
                                                aria-controls="navrambutan-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/rambutan1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navrambutan-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navrambutan-3" type="button" role="tab"
                                                aria-controls="navrambutan-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/rambutan2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navrambutan-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navrambutan-4" type="button" role="tab"
                                                aria-controls="navrambutan-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/rambutan3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Rambutan</a></h4>

                                    <div class="product__price">
                                        <span>Rp 50.000,00</span>
                                    </div>
                                    <div class="product__modal-des mt-20 mb-15">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-circle"></i> masa produktif : 1
                                                    tahun sudah belajar berbuah</a></li>
                                            <li><a href="#"><i class="fas fa-circle"></i> buah bisa langsung
                                                    dimakan</a></li> <br>
                                            <li><a href="#"><i class="fas fa-circle"></i> tinggi batang 4-6
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
                                                    <span>Rambutan</span></a>
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
    {{-- endrambutan --}}

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
                                    <div class="tab-content" id="modalTabContent">
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
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navpinang-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpinang-1" type="button" role="tab"
                                                aria-controls="navpinang-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/pinang-1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navpinang-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpinang-2" type="button" role="tab"
                                                aria-controls="navpinang-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/pinang2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navpinang-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpinang-3" type="button" role="tab"
                                                aria-controls="navpinang-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/pinang3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navpinang-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navpinang-4" type="button" role="tab"
                                                aria-controls="navpinang-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/pinang4.jpg"
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
                                            <li><a href="#"><i class="fas fa-circle"></i> pertumbuhan : 5-6 tahun</a></li>
                                            <li><a href="#"><i class="fas fa-circle"></i> produksi buah mencapai 131 butir pertandan</a></li>
                                            <li><a href="#"><i class="fas fa-circle"></i> usia tanam hingga 25 tahun</a></li> <br>
                                            <li><a href="#"><i class="fas fa-circle"></i> tinggi batang 5-10 meter</a></li>
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
    {{-- endpinang --}}

    {{-- mangga --}}
    <div class="modal fade" id="mangga" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navmangga-1" role="tabpanel"
                                            aria-labelledby="navmangga-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/mangga.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navmangga-2" role="tabpanel"
                                            aria-labelledby="navmangga-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/mangga1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navmangga-3" role="tabpanel"
                                            aria-labelledby="navmangga-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/mangga2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navmangga-4" role="tabpanel"
                                            aria-labelledby="navmangga-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/mangga3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navmangga-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmangga-1" type="button" role="tab"
                                                aria-controls="navmangga-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/mangga.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navmangga-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmangga-2" type="button" role="tab"
                                                aria-controls="navmangga-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/mangga1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navmangga-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmangga-3" type="button" role="tab"
                                                aria-controls="navmangga-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/mangga2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navmangga-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navmangga-4" type="button" role="tab"
                                                aria-controls="navmangga-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/mangga3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Mangga</a></h4>

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
                                                    <span>Mangga</span></a>
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
    {{-- endmangga --}}

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
                                            <button class="nav-link active" id="navkelengkeng-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelengkeng-1" type="button" role="tab"
                                                aria-controls="navkelengkeng-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/kelengkeng.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navkelengkeng-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelengkeng-2" type="button" role="tab"
                                                aria-controls="navkelengkeng-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/kelengkeng1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navkelengkeng-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelengkeng-3" type="button" role="tab"
                                                aria-controls="navkelengkeng-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/kelengkeng2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navkelengkeng-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelengkeng-4" type="button" role="tab"
                                                aria-controls="navkelengkeng-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/kelengkeng3.jpg"
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

    {{-- langsat --}}
    <div class="modal fade" id="langsat" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="navkelangsat-1" role="tabpanel"
                                            aria-labelledby="navkelangsat-1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/langsat.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navkelangsat-2" role="tabpanel"
                                            aria-labelledby="navkelangsat-2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/langsat1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navkelangsat-3" role="tabpanel"
                                            aria-labelledby="navkelangsat-3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/langsat2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navkelangsat-4" role="tabpanel"
                                            aria-labelledby="navkelangsat-4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ url('public/admin') }}/img/quick-view/langsat3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="navkelangsat-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelangsat-1" type="button" role="tab"
                                                aria-controls="navkelangsat-1" aria-selected="true">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/langsat.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navkelangsat-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelangsat-2" type="button" role="tab"
                                                aria-controls="navkelangsat-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/langsat1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navkelangsat-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelangsat-3" type="button" role="tab"
                                                aria-controls="navkelangsat-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/langsat2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navkelangsat-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navkelangsat-4" type="button" role="tab"
                                                aria-controls="navkelangsat-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/langsat3.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="#">Langsat</a></h4>

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
    {{-- endlangsat --}}

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
                                                <img src="{{ url('public/admin') }}/img/quick-view/jeruk.jpg"
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
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jeruk.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navjeruk-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjeruk-2" type="button" role="tab"
                                                aria-controls="navjeruk-2" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jeruk1.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navjeruk-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjeruk-3" type="button" role="tab"
                                                aria-controls="navjeruk-3" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jeruk2.jpg"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="navjeruk-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#navjeruk-4" type="button" role="tab"
                                                aria-controls="navjeruk-4" aria-selected="false">
                                                <img style="height: 100px; width: 100px;" src="{{ url('public/admin') }}/img/quick-view/jeruk3.jpg"
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
@endsection
