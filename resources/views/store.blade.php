@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="mx-auto center bottommargin" style="max-width: 700px">
        <h2>Fresh Collection of 2019</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur repudiandae nobis earum voluptate id adipisci nostrum mollitia, ipsam, asperiores, soluta dolorem facere exercitationem laborum. Magni mollitia laudantium vel tempore.</p>
    </div>
</div>

<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-4 mb-5">
            <div class="card cat-card rounded-0 border-0 dark">
                <img src="demos/store/images/cat/outerwear.jpg" class="card-img rounded-0" alt="...">
                <div class="d-flex align-items-start flex-column card-img-overlay p-4">
                    <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto">50% Off</h3>
                    <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Outerwear</h3>
                    <p>This is a wider card as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="button button button-white button-light ml-0">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card cat-card rounded-0 border-0 dark">
                <img src="demos/store/images/cat/footwear.jpg" class="card-img rounded-0" alt="...">
                <div class="d-flex align-items-start flex-column card-img-overlay bg p-4">
                    <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto">50% Off</h3>
                    <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Footwear</h3>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="button button button-white button-light ml-0">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card cat-card rounded-0 border-0 dark">
                <img src="demos/store/images/cat/workout.jpg" class="card-img rounded-0" alt="...">
                <div class="d-flex align-items-start flex-column card-img-overlay bg p-4">
                    <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto">30% Off</h3>
                    <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Sportswear</h3>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="button button button-white button-light ml-0">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container-fluid topmargin">
    <div class="row">
        <div class="col-md-2 sticky-sidebar-wrap">
            <ul class="list-unstyled items-nav sticky-sidebar">
                <li><a href="#" class="text-dark font-weight-semibold">All Collections</a></li>
                <li class="no-divider"><a href="#" class="text-dark font-weight-semibold">New Arrivals</a></li>
                <li><hr></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Skirts</a></li>
                <li><a href="#">Sportswear</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">Sweat-shirts</a></li>
                <li><a href="#">Sweaters</a></li>
                <li><a href="#">Flats</a></li>
                <li><a href="#">Sandals</a></li>
                <li><a href="#">Loafers & Oxfords</a></li>
                <li><a href="#">Heels</a></li>
            </ul>
        </div>

        <div class="col-md-10">
            <div class="row">

                <!-- Shop Item 1
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/1-1.jpg" alt="Black Shoe"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/1-2.jpg" alt="Black Shoe"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">Black Sports Shoe</a></h3>
                                <span><a href="#">Nike</a></span>
                            </div>
                            <div class="product-price"><ins>$21.49</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 2
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/2-1.jpg" alt="Sports Shoe"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/2-2.jpg" alt="Sports Shoe"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">Sports Shoe</a></h3>
                                <span><a href="#">Nike</a></span>
                            </div>
                            <div class="product-price"><ins>$21.49</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 3
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/3-1.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/3-2.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/3-3.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/3-4.jpg" alt="Morning Dew"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">Men Black Sweatshirt</a></h3>
                                <span><a href="#">Sweatshirt</a></span>
                            </div>
                            <div class="product-price"><ins>$21.49</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 4
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/4-1.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/4-2.jpg" alt="Morning Dew"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">Roundneck T-shirt</a></h3>
                                <span><a href="#">T-shirt</a></span>
                            </div>
                            <div class="product-price"><ins>$21.49</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 5
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/5-1.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/5-2.jpg" alt="Morning Dew"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">Women Sports Pant</a></h3>
                                <span><a href="#">Trousers</a></span>
                            </div>
                            <div class="product-price"><ins>$21.49</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 6
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/6-1.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/6-2.jpg" alt="Morning Dew"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">Men White Escaper SL Running Sports Shoes</a></h3>
                                <span><a href="#">Sports Shoes</a></span>
                            </div>
                            <div class="product-price"><ins>$21.49</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 7
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image position-relative">
                            <div class="fslider" data-arrows="false" data-pagi="false" data-speed="400" data-pause="6000" data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide" data-thumb="demos/store/images/product/7-1.jpg">
                                            <a href="#"><img src="demos/store/images/product/7-1.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide" data-thumb="demos/store/images/product/7-2.jpg">
                                            <a href="#"><img src="demos/store/images/product/7-2.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide" data-thumb="demos/store/images/product/7-3.jpg">
                                            <a href="#"><img src="demos/store/images/product/7-3.jpg" alt="Morning Dew"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#">The Cotton Weave Shirtdress</a></h3>
                                <span><a href="#">Women Dress</a></span>
                            </div>
                            <div class="product-price"><ins>$78</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 8
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img src="demos/store/images/product/8-1.jpg" alt="Morning Dew"></a>
                            <a href="#"><img src="demos/store/images/product/8-2.jpg" alt="Morning Dew"></a>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#"> Navi Blue Jeans</a></h3>
                                <span><a href="#">Denim</a></span>
                            </div>
                            <div class="product-price"><ins>$78</ins></div>
                        </div>
                    </div>
                </div>

                <!-- Shop Item 9
                ============================================= -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product">
                        <div class="product-image">
                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/9-1.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/9-2.jpg" alt="Morning Dew"></a>
                                        </div>
                                        <div class="slide">
                                            <a href="#"><img src="demos/store/images/product/9-3.jpg" alt="Morning Dew"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="cart-btn button button-white button-light"><i class="icon-line-plus"></i>Add to Cart</a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title">
                                <h3><a href="#"> Navi Blue Jeans</a></h3>
                                <span><a href="#">Denim</a></span>
                            </div>
                            <div class="product-price"><ins>$78</ins></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6 mb-5">
            <img src="demos/store/images/others/travel.jpg" alt="image" class="mb-4">
            <h4 class="mb-2"><a href="#">Want to travel? Great Stuffs for Travel</a></h4>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo doloremque eveniet dolorem, porro earum. Eius, corrupti provident iusto modi sunt.</p>
            <a href="#" class="stretched-link btn p-0 font-weight-semibold"><u>View Details</u> <i class="icon-line-arrow-right position-relative ml-1" style="top: 2px"></i></a>
        </div>

        <div class="col-md-6 mb-5">
            <img src="demos/store/images/others/store.jpg" alt="image" class="mb-4">
            <h4 class="mb-2">Our Melbourne Store</h4>
            <p class="mb-2">Authoritatively deliver 2.0 niches vis-a-vis backward-compatible infomediaries. Authoritatively actualize empowered e-tailers with just in time.</p>
            <p class="mb-3"><i class="icon-map-marker-alt"></i> <strong>Headquarters: </strong><a href="#" class="text-black-50 under btn-link"> 795 Folsom Ave, Suite 600 San Francisco, CA 94107</a></p>
            <a href="#" class="btn p-0 font-weight-semibold"><u>Visit Our Store</u> <i class="icon-line-arrow-right position-relative ml-1" style="top: 2px"></i></a>
        </div>
    </div>
</div>

<div class="section m-0 border-0" style="padding: 120px 0;">
    <div class="video-wrap" style="z-index: 0">
        <video poster="one-page/images/page/portrait/video-poster.jpg" preload="auto" loop autoplay muted>
            <source src='one-page/images/page/portrait/video.mp4' type='video/mp4' />
        </video>
        <div class="video-overlay" style="background: rgba(0,0,0,0.2)"></div>
    </div>
    <div class="emphasis-title widget subscribe-widget mx-auto center px-4" data-loader="button" style="max-width: 650px">
        <h2 class="font-weight-bold text-white">Subscribe Now</h2>
        <p class="mb-5 text-white-50 lead" data-delay="100">Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>
        <div class="widget-subscribe-form-result"></div>
        <form id="widget-subscribe-form-2" action="include/subscribe.php" method="post" class="mt-1 input-group input-group-lg mb-0">
            <input type="email" id="widget-subscribe-form-2-email" name="widget-subscribe-form-email" class="form-control required email rounded-0 border-0" placeholder="Enter your Email Address">

             <div class="input-group-append">
                <button class="btn btn-dark bg-color rounded-0 text-uppercase font-weight-bold" type="submit" style="font-size: 16px">Subscribe Now</button>
            </div>
        </form>
    </div>
</div>

<div class="section mt-0 mb-0" style="padding: 80px 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4 class="text-uppercase">Shipping Worldwide</h4>
                <p>Minimum $999 for free Shipping. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio sequi natus eveniet, dicta magni! Modi nihil quis quos at mollitia.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="text-uppercase">Free Returns</h4>
                <p class="h6 font-weight-bold">Within 30 days Guarantee</p>
                <p>Synergistically repurpose ethical value and backend paradigms. Holisticly architect effective expertise for installed base e-markets.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="text-uppercase">Customer Service</h4>
                <p>Odio sequi natus eveniet, dicta magni! Modi nihil quis quos at mollitia.</p>
                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+0) 9876 543211<br>
                <abbr title="Fax"><strong>Fax:</strong></abbr> (+0) 11 2222 3333<br>
                <abbr title="Email Address"><strong>Email:</strong></abbr> noreply@canvas.com<br>

                <a href="#" class="social-icon si-small si-light si-rounded si-facebook mt-4 mr-2">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" class="social-icon si-small si-light si-rounded si-instagram mt-4 mr-2">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                </a>
                <a href="#" class="social-icon si-small si-light si-rounded si-youtube mt-4 mr-2">
                    <i class="icon-youtube"></i>
                    <i class="icon-youtube"></i>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="text-uppercase">Our Stores</h4>
                <address>
                    <strong>Melbourne Store:</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                </address>

                <address class="mb-3">
                    <strong>Sydney Store:</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                </address>
                <abbr title="Time"><strong>Timing:</strong></abbr> Every day: 10am – 7pm<br>
            </div>
        </div>
    </div>
</div>

<div class="section bg-transparent py-3">
    <div class="container-fluid">
        <div class="row justify-content-center m-auto" style="max-width: 1000px;">
            <div class="col-md-7">
                <p class="h6 mb-0 text-muted">Conveniently network effective total linkage via intermandated opportunities. Distinctively <a href="mailto:noreply@canvas.com"><u>noreply@canvas.com</u></a> premium products.</p>
            </div>
            <div class="col-md-5 mt-3 mt-md-0">
                <h2 class="h1 font-weight-bold ls--1 color"><a href="tel:09876543211">(+0) 9876 543210</a></h2>
            </div>
        </div>
    </div>
</div>

<!-- <div class="instagram-button position-relative">
    <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-8" data-user="5834720953" data-count="8" data-type="user" data-resolution="low_resolution"></div>
</div> -->
@endsection