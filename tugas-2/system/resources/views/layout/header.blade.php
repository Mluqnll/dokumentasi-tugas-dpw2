@php
  function checkRouteActive($route)
  {
    if (Route::current ()->uri == $route) {
        return 'active';
    }
  }  
@endphp

<header class="header d-blue-bg">
    <div class="header-mid">
        <div class="container">
            <div class="heade-mid-inner">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="header__info">
                            <div class="logo">
                                <a href="#" class="logo-image"><img
                                        src="{{ url('public/admin') }}/img/logo/logobibit.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="header__search">
                            <form action="#">
                                <div class="header__search-box">
                                    <input class="search-input" type="text" placeholder="I'm shopping for...">
                                    <button class="button" type="submit"><i class="far fa-search"></i></button>
                                </div>
                                <div class="header__search-cat">
                                    <select>
                                        <option>All Categories</option>
                                        <option>Best Seller Products</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                        <div class="header-action">
                            <div class="block-userlink">
                                <a class="icon-link" href="{{ url('akses') }}">
                                    <i class="flaticon-user"></i>
                                    <span class="text">
                                        <span class="sub">Login </span>
                                        My Account </span>
                                </a>
                            </div>
                            <div class="block-wishlist action">
                                <a class="icon-link" href="wishlist.html">
                                    <i class="flaticon-heart"></i>
                                    <span class="text">
                                        <span class="sub">Favorite</span>
                                        My Wishlist </span>
                                </a>
                            </div>
                            <div class="block-cart action">
                                <a class="icon-link" href="cart.html">
                                    <i class="flaticon-shopping-bag"></i>
                                    <span class="text">
                                        <span class="sub">Your Cart:</span>
                                        Rp000.00 </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-lg-3">
                    <div class="cat__menu-wrapper side-border d-none d-lg-block">
                        <div class="cat-toggle">
                            <button type="button" class="cat-toggle-btn" style="color:white">
                                Aneka Bibit Tanaman</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-3">
                    <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="side-menu d-lg-none mr-20">
                            <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i
                                    class="fas fa-bars"></i></button>
                        </div>
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ url('home') }}" class="{{ checkRouteActive('home') }}">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('shop') }}" class="{{ checkRouteActive('shop') }}">Shop </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-9">
                    <div class="shopeing-text text-sm-end">
                        <p>Pembelian di atas Rp 1.200.000,00 akan mendapatkan diskon !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
