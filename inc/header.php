<div class="my_search">
    <div class="close_search"><i class='bx bx-x'></i></div>
    <input type="text" placeholder="Search Product..." style= "border:none">
</div>
<div class="menu_left">
    <div class="menu_left-navbar">
        <div class="energy">
            <div class="close_left"><i class='bx bx-x'></i></div>
            <div class="shopping_left"><i class='bx bx-shopping-bag'></i><span>1</span></div>
            <div class="heart_left"><i class='bx bx-heart'></i><span>1</span></div>
            <div><i class='bx bx-refresh'></i><span>0</span></div>
            <div><i class='bx bx-file-find'></i><span>0</span></div>
            <div class="user_left" onclick="signIn_menu()"><i class='bx bx-user'></i></div>
        </div>
        <div class="name_shop"><span>BAMAN</span></div>
    </div>
    <div class="menu_left-content">
        <div class="menu_top-heart my_heart-1 add" style="padding: 2.5rem 2rem;">
            <div class="title">Your Wishlist</div>
            <div class="card_heart">
                <img src="../public/img/product/2.webp" alt="">
                <div class="card_heart-name_product">
                    <span>Beaded double necklace</span>
                    <div class="price" style="color: #9c9c9c;">$240.00 / <span style="color: salmon;">In
                            stock</span></div>
                    <span>Add to cart</span>
                </div>
                <i class='bx bx-trash'></i>
            </div>
        </div>

        <div class="container_cart my_shopping-1 add" style="padding: 2.5rem 2rem;">
            <div class="menu_top-ship-free">
                <div class="menu_top-ship-free--title">
                    These product are limited, checkout within <span style="color: #9c9c9c;">00m : 00s</span>
                </div>
                <div class="menu_top-ship-free--content">
                    <span>BUY $500.00 <span style="font-weight: 600;">MORE TO ENJOY FREE SHIPPING</span></span>
                    <div class="icon">
                        <img src="../public/img/ship/7.png" alt="">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="menu_top-cart">
            <div class="my_cart flex py-[1rem] gap-[10px]">
                <img src="../public/img/product/2.webp" alt="" class="w-[80px]">
                <div class="card_heart-name_product flex flex-col justify-center">
                    <span>Beaded double necklace</span>
                    <div class="price" style="color: #9c9c9c;">
                        $240.00 /
                        <span style="color: salmon;">Instock</span>
                    </div>
                </div>
            </div>
            <div class="my_cart flex py-[1rem] gap-[10px]">
                <img src="../public/img/product/7.webp" alt="" class="w-[80px]">
                <div class="card_heart-name_product flex flex-col justify-center">
                    <span>Rhinestone crystal earring</span>
                    <div class="price" style="color: #9c9c9c;">
                        $68.00 /
                        <span style="color: salmon;">Instock</span>
                    </div>
                </div>
            </div>
                <div class="button">
                    <button><a href="../public/checkout.php">Checkout</a></button>
                    <button>Start Shopping</button>
                </div>
            </div>
        </div>


        <div class="account-area action-content active" data-target-name="account">
            <div class="panel-top-title">
                <span class="form-action-btn signin-title active" data-target-form="login">
                    <span onclick="signIn_menu()">Sign In<i class='bx bx-right-arrow-circle'></i>&nbsp;</span>
                </span>
                <span class="form-action-btn register-title" data-target-form="register">
                    <span onclick="register_menu()"><i class='bx bx-user'></i>&nbsp;Register</span>
                </span>
            </div>
            <div class="account-area-form-wrapper">
                <div class="login-form-content active">
                    <form class="woocommerce-form woocommerce-form-login login goldsmith-ajax-login add" method="post">
                        <p class="form-row form-row-first goldsmith-is-required">
                            <label for="username">Username or email&nbsp;<span class="required">*</span></label>
                            <input type="text" class="input-text" name="username" id="username" autocomplete="username">
                            <span class="goldsmith-form-message"></span>
                        </p>
                        <p class="form-row form-row-last goldsmith-is-required">
                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                            <input class="input-text" type="password" name="password" id="password" autocomplete="current-password">
                            <span class="goldsmith-form-message"></span>
                        </p>
                        <div class="clear"></div>
                        <p class="form-row">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" value="forever"> <span>Remember me</span>
                            </label>
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="0c6dd1c4b1">
                            <input type="hidden" name="_wp_http_referer" value="/themes/goldsmith/">
                            <input type="hidden" name="redirect" value="">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit goldsmith-btn-medium goldsmith-btn goldsmith-bg-black" name="login" value="Login">Login</button>
                        </p>
                        <p class="lost_password">
                            <a href="https://ninetheme.com/themes/goldsmith/my-account/lost-password/">Lost your
                                password?</a>
                        </p>
                        <div class="clear"></div>
                        <input type="hidden" name="action" value="ajaxlogin">
                    </form>
                </div>
                <div class="login-form-content active register add">
                    <div class="register-form-content">
                        <form method="post" class="woocommerce-form woocommerce-form-register register">
                            <p class="form-row goldsmith-is-required">
                                <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">
                                <span class="goldsmith-form-message"></span>
                            </p>
                            <p>A password will be sent to your email address.</p>
                            <div class="woocommerce-privacy-policy-text">
                                <p>Your personal data will be used to support your experience throughout this
                                    website, to manage access to your account, and for other purposes described in
                                    our <a href="https://ninetheme.com/themes/goldsmith/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.
                                </p>
                            </div>
                            <p class="form-row">
                                <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="33a08b3dbd">
                                <input type="hidden" name="_wp_http_referer" value="/themes/goldsmith/">
                                <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit goldsmith-btn-medium goldsmith-btn goldsmith-bg-black" name="register" value="Register">Register</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu_left menu_top">
    <div class="menu_left-navbar">
        <div class="energy">
            <div class="close_top" style="background-color: rgb(241, 241, 241);"><i class='bx bx-x'></i></div>
            <div class="shopping_top" style="margin-left: 17rem;"><i class='bx bx-shopping-bag'></i><span>1</span></div>
            <div class="heart_top"><i class='bx bx-heart'></i><span>1</span></div>
            <div class="refresh_top"><i class='bx bx-refresh'></i><span>0</span></div>
        </div>
        <div class="menu_top-ship-free">
            <div class="menu_top-ship-free--title">
                These product are limited, checkout within <span style="color: #9c9c9c;">00m : 00s</span>
            </div>
            <div class="menu_top-ship-free--content">
                <span>BUY $500.00 <span style="font-weight: 600;">MORE TO ENJOY FREE SHIPPING</span></span>
                <div class="icon">
                    <img src="../public/img/ship/7.png" alt="">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="menu_top-heart my_heart add_1">
            <div class="title">Your Wishlist</div>
            <div class="card_heart">
                <img src="../public/img/product/2.webp" alt="">
                <div class="card_heart-name_product">
                    <span>Beaded double necklace</span>
                    <div class="price" style="color: #9c9c9c;">$240.00 / <span style="color: salmon;">In
                            stock</span></div>
                    <span>Add to cart</span>
                </div>
                <i class='bx bx-trash'></i>
            </div>
        </div>

        <div class="menu_top-cart add_1 my_shopping">
            <div class="my_cart flex py-[1rem] gap-[10px]">
                <img src="../public/img/product/2.webp" alt="" class="w-[80px]">
                <div class="card_heart-name_product flex flex-col justify-center">
                    <span>Beaded double necklace</span>
                    <div class="price" style="color: #9c9c9c;">
                        $240.00 /
                        <span style="color: salmon;">Instock</span>
                    </div>
                </div>
            </div>
            <div class="my_cart flex py-[1rem] gap-[10px]">
                <img src="../public/img/product/7.webp" alt="" class="w-[80px]">
                <div class="card_heart-name_product flex flex-col justify-center">
                    <span>Rhinestone crystal earring</span>
                    <div class="price" style="color: #9c9c9c;">
                        $68.00 /
                        <span style="color: salmon;">Instock</span>
                    </div>
                </div>
            </div>
            <div class="button">
                <button><a href="../public/checkout.php">Checkout</a></button>
                <button>Start Shopping</button>
            </div>
        </div>

    </div>

</div>


<div class="container_navbar">
    <div class="navbar">
        <div class="icon">
            <i class='bx bxl-facebook-circle' style='color:#ffffff'></i>
            <i class='bx bxl-twitter' style='color:#ffffff'></i>
            <i class='bx bxl-youtube' style='color:#ffffff'></i>
        </div>
        <div class="title">FREE SHIPPING ON ALL ORDER OVER $75</div>
        <div class="content">
            <a href="">CART</a>
            <a href="">SEARCH</a>
            <a href="">HELP</a>
        </div>
    </div>
</div>

<div class="reponsive_menu">
    <div class="oppenMenu   "><i class='bx bx-menu' style="padding-left: 1rem;"></i></div>
    <div class="name_shop" style="position: absolute; left: 50%; transform: translateX(-50%);"><a href="../public/home.php">BAMAN</a></div>
    <div class=""><i class='bx bx-shopping-bag'></i></div>
</div>
<div class="container_menu">
    <div class="menu" style="position: relative;">
        <div class="menu_1">
            <li><a href="../public/home.php">HOME<i class='bx bx-chevron-down'></i></a>
                <ul style=" box-shadow: 0px 0px 1px rgb(221, 221, 221);">
                    <li><a href="#">Home Main</a></li>
                    <li><a href="#">Modern</a></li>
                    <li><a href="#">Home Centered</a></li>
                    <li><a href="#">Left Sidebar</a></li>
                    <li><a href="#">Full Screen Slider</a></li>
                    <li><a href="#">Slider + Grid Banner</a></li>
                    <li><a href="#">Mosaic Banner</a></li>
                    <li><a href="#">Parallax</a></li>
                    <li><a href="#">Product Landing</a></li>
                    <li><a href="#">Campaign</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Split</a></li>
                </ul>
            </li>
            <li><a href="#">SHOP<i class='bx bx-chevron-down'></i></a>
                <ul style="width: 100%; display: flex; gap: 20px; padding: 1.5rem 5rem;">
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Catalog</li>
                        <li><a href="">Style 1</a></li>
                        <li><a href="">Style 2</a></li>
                        <li><a href="">Style 3</a></li>
                        <li><a href="">Load More</a></li>
                        <li><a href="">Infinite Scroll</a></li>
                        <li><a href="">Pagination</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Shop Layouts</li>
                        <li><a href="">Default</a></li>
                        <li><a href="">Left Sidebar</a></li>
                        <li><a href="">Right Sidebar</a></li>
                        <li><a href="">Top Sidebar</a></li>
                        <li><a href="">Fixed Sidebar ( Left )</a></li>
                        <li><a href="">Full Width ( no-sidebar )</a></li>
                        <li><a href="">Masonry Grid</a></li>
                        <li><a href="">Shop Category Page</a></li>
                        <li><a href="">Shop Tag Page</a></li>
                        <li><a href="">Shop Brand Page</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Shop Columns</li>
                        <li><a href="">List Type</a></li>
                        <li><a href="">Column Three</a></li>
                        <li><a href="">Column Four</a></li>
                        <li><a href="">Column Five</a></li>
                        <li><a href="">Column Six ( wide )</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Hero Types</li>
                        <li><a href="">Category List</a></li>
                        <li><a href="">Category Slider</a></li>
                        <li><a href="">Hero Small</a></li>
                        <li><a href="">Hero Breadcrumbs</a></li>
                        <li><a href="">Shop No Title</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Shop Pages</li>
                        <li><a href="">Catalog</a></li>
                        <li><a href="">Cart</a></li>
                        <li><a href="">Checkout</a></li>
                        <li><a href="">Checkout ( Multisteps )</a></li>
                        <li><a href="">My Account ( 2 Column )</a></li>
                        <li><a href="">My account ( Tabbed )</a></li>
                        <li><a href="">Order Tracking</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="#">PRODUCT<i class='bx bx-chevron-down'></i></a>
                <ul style="width: 100%; display: flex; gap: 20px; padding: 1.5rem 5rem;">
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Product Types</li>
                        <li><a href="">Simple</a></li>
                        <li><a href="">Color Variable</a></li>
                        <li><a href="">Image Variable</a></li>
                        <li><a href="">Grouped</a></li>
                        <li><a href="">Extenal</a></li>
                        <li><a href="">Out Of Stock</a></li>
                        <li><a href="">Countdown</a></li>
                        <li><a href="">Popup Video</a></li>
                        <li><a href="">360deg Product</a></li>
                    </div>
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Showcase Style</li>
                        <li><a href="">Carousel</a></li>
                        <li><a href="">Carousel Big</a></li>
                        <li><a href="">Carousel Small</a></li>
                        <li><a href="">Carousel Mini</a></li>
                        <li><a href="">Carousel Coverflow</a></li>
                        <li><a href="">Video Slider</a></li>
                        <li><a href="">Stretch</a></li>
                    </div>
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Gallery Styles</li>
                        <li><a href="">Thumbs Left</a></li>
                        <li><a href="">Thumbs Right</a></li>
                        <li><a href="">Thumbs Bottom</a></li>
                        <li><a href="">Thumbs Top</a></li>
                        <li><a href="">Grid</a></li>
                        <li><a href="">Column 2</a></li>
                        <li><a href="">Column 3</a></li>
                        <li><a href="">Video Grid - Auto Start</a></li>
                        <li><a href="">Video Popup</a></li>
                    </div>
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Page Layout</li>
                        <li><a href="">Left Sidebar</a></li>
                        <li><a href="">Right Sidebar</a></li>
                        <li><a href="">Fullwidth</a></li>
                        <li><a href="">Tabs</a></li>
                        <li><a href="">Accordion</a></li>
                        <li><a href="">Accordion 2</a></li>
                        <li><a href="">Advenced Review & Q&A</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="#">TEMPLATER<i class='bx bx-chevron-down'></i></a>
                <ul>
                    <li><a href="#">Header Slidebar</a></li>
                    <li><a href="#">Header Sidebar Right</a></li>
                    <li><a href="#">Header Sidebar Dark</a></li>
                    <li><a href="#">Light Styles</a></li>
                    <li><a href="#">Dark Styles</a></li>
                    <li><a href="#">Transparent Styles</a></li>
                    <li><a href="#">Topbars / Footers</a></li>
                </ul>
            </li>
            <li><a href="#">PAGES<i class='bx bx-chevron-down'></i></a>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Maintenance</a></li>
                    <li><a href="#">Coming Soon</a></li>
                    <li><a href="#">404</a></li>
                </ul>
            </li>
            <li><a href="#">MEGA<i class='bx bx-chevron-down'></i></a></li>
        </div>
        <div class="name_shop" style="position: absolute; left: 50%; transform: translateX(-50%);">BAMAN</div>
        <div class="energy">
            <div class="search"><i class='bx bx-search' style="padding-right: 1rem;"></i></div>
            <div class="shopping"><i class='bx bx-shopping-bag'></i><span>1</span></div>
            <div class="heart"><i class='bx bx-heart'></i><span>1</span></div>
            <div><i class='bx bx-refresh'></i><span>0</span></div>
            <div class="user"><i class='bx bx-user'></i></div>
            <div><i class='bx bx-menu' style="padding-left: 1rem;"></i></div>
        </div>
    </div>
</div>