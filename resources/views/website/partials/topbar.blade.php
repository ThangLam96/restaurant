<div class="tst-menu-frame">
    <!-- top bar -->
    <div class="tst-dynamic-menu" id="tst-dynamic-menu">
      <div class="tst-menu">
        <!-- logo -->
        <img src=" {{ asset('assets/theme/img/logo-sm.svg') }}" class="tst-logo" alt="Tastyc">
        <!-- menu -->
        <nav>
          <ul>
            <li class="menu-item-has-children current-menu-item"><a href="{{route('website.index')}}">Home</a>
              <ul>
                <li><a href="home-slider.html">Home slider</a></li>
                <li><a href="home-image.html">Home image</a></li>
                <li><a href="home-video.html">Home video</a></li>
                <li><a data-no-swup target="_blank" href="onepage.html">Onepage</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="about-us.html">About</a>
              <ul>
                <li><a href="about-us.html">About us</a></li>
                <li><a href="about-me.html">About employee</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="history.html">History</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="menu-1.html">Menu</a>
              <ul>
                <li><a href="menu-1.html">Menu type 1</a></li>
                <li><a href="menu-2.html">Menu type 2</a></li>
                <li><a href="menu-3.html">Menu type 3</a></li>
                <li><a href="menu-4.html">Menu type 4</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="blog-list.html">blog</a>
              <ul>
                <li><a href="blog-list.html">blog list</a></li>
                <li><a href="blog-single.html">publication</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <!-- menu end -->
        <!-- top bar right -->
        <div class="tst-menu-right li-follow">
          <!-- reservation button -->
          <a href="#." class="tst-btn tst-res-btn">
              Đăng Nhập
          </a>
          <a href="{{route('website.create')}}" class="tst-res-btn">
            <i class="fa fa-user icon" aria-hidden="true">
              Đăng Ký
            </i>
          </a>
          <div class="tst-minicart">
            <!-- minicart button -->

            <a href="#." class="tst-cart">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                <path
                  d="M87.7,33.1l-0.8-10.8C86,10.4,76,1,64,1s-22.1,9.4-22.9,21.3l-0.8,10.8H28.8c-4.7,0-8.6,3.7-9,8.4l-5.4,75.9c0,0,0,0,0,0 c-0.2,2.5,0.7,5,2.4,6.8s4.1,2.9,6.6,2.9h81.3c2.5,0,4.9-1,6.6-2.9c1.7-1.8,2.6-4.3,2.4-6.8l-5.4-75.2c-0.4-5.1-4.6-9-9.7-9H87.7z M47.1,22.7C47.7,13.9,55.1,7,64,7s16.3,6.9,16.9,15.7l0.7,10.4H46.3L47.1,22.7z M102.3,42.6l5.4,75.2c0.1,0.8-0.2,1.6-0.8,2.3 c-0.6,0.6-1.4,1-2.2,1H23.4c-0.8,0-1.6-0.3-2.2-1s-0.9-1.4-0.8-2.3h0l5.4-75.9c0.1-1.6,1.4-2.8,3-2.8h11.1l-0.6,8 c-0.1,1.7,1.1,3.1,2.8,3.2c0.1,0,0.1,0,0.2,0c1.6,0,2.9-1.2,3-2.8l0.6-8.4h36.2l0.6,8.4c0.1,1.7,1.5,2.9,3.2,2.8 c1.7-0.1,2.9-1.5,2.8-3.2l-0.6-8h10.5C100.5,39.1,102.1,40.6,102.3,42.6z" />
              </svg>
              <div class="tst-cart-number">5</div>
            </a>
            <!-- minicart button end -->
            <!-- minicart -->
             <div class="tst-minicart-window">

              <div class="tst-minicart-header">
                <div class="tst-suptitle tst-suptitle-center"></div>
                <h5>Your order, sir!</h5>
              </div>

              <ul class="woocommerce-mini-cart cart_list product_list_widget">
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                  <a href="#.">
                    <img src=" {{ asset('assets/theme/img/menu/1.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                    Pancakes with strawberries
                  </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>7.50</bdi></span></span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                  <a href="#.">
                    <img src=" {{ asset('assets/theme/img/menu/2.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                    King Burger
                  </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                  <a href="#.">
                    <img src=" {{ asset('assets/theme/img/menu/3.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                    Мegan casserole
                  </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>16.50</bdi></span></span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                  <a href="#.">
                    <img src=" {{ asset('assets/theme/img/menu/4.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                    The largest burger
                  </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>59.00</bdi></span></span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                  <a href="#.">
                    <img src=" {{ asset('assets/theme/img/menu/5.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                    Berry cocktail with ice
                  </a>
                  <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></span></span>
                </li>
              </ul>
              <p class="woocommerce-mini-cart__total total">
                <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>298.00</bdi></span>
              </p>
              <p class="woocommerce-mini-cart__buttons buttons">
                <a href="#." class="button wc-forward tst-anima-link">View cart</a>
                <a href="#." class="button checkout wc-forward tst-anima-link">Checkout</a>
              </p>

            </div>
          </div>
          <!-- minicart end -->
          <!-- menu button -->
          <div class="tst-menu-button-frame">
            <div class="tst-menu-btn">
              <div class="tst-burger">
                <span></span>
              </div>
            </div>
          </div>
          <!-- menu button end -->
        </div>
        <!-- top bar right end  -->
      </div>
    </div>
    <!-- top bar end -->
  </div>