<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" type="text/css" />
	<!--<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />


	<link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" /> 
	<link rel="stylesheet" href="{{ asset('demos/store/css/fonts.css') }}" type="text/css" /> 
	<link rel="stylesheet" href="{{ asset('demos/store/store.css') }}" type="text/css" /> 
-->
<link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css" /> 
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" sizes="16x16">

	<!-- Document Title
	============================================= -->
	<title>Store | Canvas</title>

</head>

<body class="stretched modal-subscribe-bottom">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Modal -->
		<div class="modal animated fadeInUp fast pr-0" id="modal-subscribe" role="dialog" displayed="false" data-backdrop="static">

			<div class="modal-dialog" role="subscribe">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close" style="z-index: 1">
							<span aria-hidden="true">&times;</span>
						</button>

						<div class="form-widget mx-auto" data-loader="button" style="padding: 30px">

							<h2 class="font-weight-bold h1 mb-3" style="letter-spacing: -2px">Get Special Discount!</h2>
							<p>Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>

							<div class="form-result"></div>

							<form class="mb-0" id="modal-subscribe-form" action="include/form.php" method="post" enctype="multipart/form-data">
								<label for="modal-subscribe-form-email">Email Address <span>*</span></label>
								<input type="email" name="modal-subscribe-form-email" id="modal-subscribe-form-email" class="form-control required rounded-0" placeholder="youremail@address.com">

								<input class="d-none" type="text" id="modal-subscribe-form-botcheck" name="modal-subscribe-form-botcheck" value="" />
								<button name="modal-subscribe-form-submit" class="button btn-block btn-danger m-0 mt-2" type="submit">Subscribe Now</button>

								<input type="hidden" name="prefix" value="modal-subscribe-form-">
							</form>
							<div class="text-center">
								<small class="text-black-50 mt-1"><em>We never send SPAM to your Email</em></small>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="dark transparent-header floating-header" data-sticky-shrink="false" data-sticky-class="not-dark" data-logo-height="70" data-menu-padding="24">
			<div id="header-wrap">
				<div class="container-fluid">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="mr-lg-0">
							<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('logo.png') }}"><img src="{{ asset('logo.png') }}" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('logo@2x.png') }}"><img src="{{ asset('logo@2x.png') }}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Login
							============================================= -->
							<div id="top-account" class="px-4">
                                @if (!Auth::check())
                                    <a href="#modal-register" data-lightbox="inline">Sign up/Login</a>
                                @else
                                <a href="#" >Hey {{ Auth::user()->name}}!</a>
                                @endif
                                
								
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart">
								<a href="#" id="top-cart-trigger" class="position-relative"><i class="icon-line-bag"></i><span class="top-cart-number"> @if (Auth::check()) {{ Cart::session(Auth::user()->id)->getTotalQuantity() }} @endif</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
                                        @if(Auth::check())
                                            @php
                                            $cartContent = Cart::session(Auth::user()->id)->getContent();
                                            @endphp
                                            @foreach ($cartContent as $item)
                                            <div class="top-cart-item">
                                                <div class="top-cart-item-image">
                                                    <a href="#"><img src="{{ $item->associatedModel->cover_image }}" alt="{{ $item->name }}" /></a>
                                                </div>
                                                <div class="top-cart-item-desc">
                                                    <div class="top-cart-item-desc-title">
                                                        <a href="#" class="font-weight-normal">{{ $item->name }}</a>
                                                        <span class="top-cart-item-price d-block">${{ $item->price }}</span>
                                                    </div>
                                                    <div class="top-cart-item-quantity font-weight-semibold">x {{ $item->quantity }}</div>
                                                </div>
                                            </div> 
                                            @endforeach
                                        @endif
                                        
										{{-- <div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="demos/shop/images/items/featured/5.jpg" alt="Blue Shoulder Bag" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#" class="font-weight-normal">White athletic shoe</a>
													<span class="top-cart-item-price d-block">$35.00</span>
												</div>
												<div class="top-cart-item-quantity font-weight-semibold">x 1</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#" class="font-weight-normal"><img src="demos/shop/images/items/featured/1.jpg" alt="Leather Bag" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#" class="font-weight-normal">Round Neck Solid Light Blue Colour T-shirts</a>
													<span class="top-cart-item-price d-block">$12.49</span>
												</div>
												<div class="top-cart-item-quantity font-weight-semibold">x 2</div>
											</div>
										</div> --}}
									</div>
									<div class="top-cart-action">
                                        <span class="top-checkout-price font-weight-semibold text-dark">@if(Auth::check()){{ Cart::session(Auth::user()->id)->getSubTotal() }}@endif</span>
                                        <form action="{{ url('/checkout') }}">
                                            <input type="submit" value="Checkout" class="button button-dark button-small m-0">
                                        </form>
										{{-- <button class="button button-dark button-small m-0">Checkout</button> --}}
									</div>
								</div>
							</div><!-- #top-cart end -->
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
                        ============================================= -->
                        {{ menu('frontend','menu') }}
						{{-- <nav class="primary-menu with-arrows">

							<!-- Menu Left -->
							<ul class="not-dark menu-container">
								<li class="menu-item current"><a class="menu-link" href="#"><div>Home</div></a></li>
								<li class="menu-item mega-menu"><a class="menu-link" href="#"><div>Men</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="mega-menu-column sub-menu-container border-left-0 col-lg-3">
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Footwear</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Casual Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Formal Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Flip Flops</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Slippers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sandals</div></a></li>
														</ul>
													</li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Clothing</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Casual Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>T-Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Collared Tees</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Pants / Trousers</div></a></li>
														</ul>
													</li>
												</ul>
												<ul class="mega-menu-column sub-menu-container border-left-0 col-lg-3">
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Sportswear</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports Casual Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports T-Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports Collared Tees</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Jackets</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Swimwears</div></a></li>
														</ul>
													</li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Innerwears</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Boxers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Vests</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sleepwears</div></a></li>
														</ul>
													</li>
												</ul>
												<ul class="mega-menu-column sub-menu-container border-left-0 col-lg-3">
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Innerwears</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Boxers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Vests</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sleepwears</div></a></li>
														</ul>
													</li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Sunglasses</div></a></li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Watches</div></a></li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Bags</div></a></li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Headphones</div></a></li>
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Accessories</div></a></li>
												</ul>
												<ul class="mega-menu-column sub-menu-container col-lg-3 border-left-0">
													<li class="card p-0 bg-transparent border-0">
														<img class="card-img-top" src="demos/store/images/others/menu.jpg" alt="image cap">
														<a href="#" class="btn btn-link text-left font-weight-medium pl-0 bg-transparent"><u>Editor's Pick</u></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li><!-- .mega-menu end -->
								<li class="menu-item"><a class="menu-link" href="#"><div>Women</div></a></li>
								<li class="menu-item mega-menu"><a class="menu-link" href="#"><div>Help</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Contact Us</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<div class="widget">
																	<address>
																		<strong>Melbourne Store:</strong><br>
																		795 Folsom Ave, Suite 600<br>
																		San Francisco, CA 94107<br>
																	</address>
																	<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
																	<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
																	<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
																</div>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>Inquiries</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>About Us</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Size Chart</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Our Policies</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Exchange/Return</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Payments</div></a></li>
														</ul>
													</li>
												</ul>
												<ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
													<li class="mega-menu-title menu-item"><a class="menu-link" href="#"><div>FAQs</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Q. How do I purchase an item?</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Q. How do I return my items?</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Q. Shipping Charges?</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Q. What is your Delivery time?</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Q. Is there any hidden Charges?</div></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li><!-- .mega-menu end -->
								<li class="menu-item"><a class="menu-link" href="#"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end --> --}}

					</div>

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-100" data-loop="true" data-speed="1000" data-autoplay="5000">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Premium Classic Shoe</h2>
									<p class="mb-4" data-animate="fadeInUp" data-delay="100">A New Collection of Summer 2019.</p>
									<div>
										<a href="#" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Men</a>
										<a href="#" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Women</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('demos/store/images/slider/1.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">New Sports Collection</h2>
									<p class="mb-4" data-animate="fadeInUp" data-delay="100">Black &amp; White Collections</p>
									<div>
										<a href="#" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Men</a>
										<a href="#" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Women</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.6)), url('demos/store/images/slider/2.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Latest Sweatshirts</h2>
									<p class="mb-4" data-animate="fadeInUp" data-delay="100">Collections for Summer Clothes</p>
									<div>
										<a href="#" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Men</a>
										<a href="#" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Women</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('demos/store/images/slider/3.jpg');"></div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

				<div class="social-icons">
					<a href="#" class="social-icon si-small si-borderless si-rounded si-facebook">
						<i class="icon-facebook text-white-50"></i>
						<i class="icon-facebook"></i>
					</a>
					<a href="#" class="social-icon si-small si-borderless si-rounded si-instagram">
						<i class="icon-instagram text-white-50"></i>
						<i class="icon-instagram"></i>
					</a>
					<a href="#" class="social-icon si-small si-borderless si-rounded si-youtube">
						<i class="icon-youtube text-white-50"></i>
						<i class="icon-youtube"></i>
					</a>
				</div>

			</div>
		</section><!-- #Slider End -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0">

				<!-- Login/Register Modal -->
				<div class="modal-register mfp-hide" id="modal-register">
					<div class="card mx-auto" style="max-width: 540px;">
						<div class="card-header py-3 bg-transparent center">
							<h3 class="mb-0 font-weight-normal">Hello, Welcome Back</h3>
						</div>
						<div class="card-body mx-auto py-5" style="max-width: 70%;">

							<a href="{{url('/login/facebook')}}" class="button button-large btn-block si-colored si-facebook nott font-weight-normal ls0 center m-0"><i class="icon-facebook-sign"></i> Log in with Facebook</a>

							<div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span></div>

							<!-- <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post"> -->

                                    {!! Form::open(['url'=>'/login','method'=>'POST','name'=>"login", 'class'=>"mb-0 row"]) !!}
                        

								<div class="col-12">
									<input type="text" id="login-form-username" name="username" value="" class="form-control not-dark" placeholder="Username" />
								</div>

								<div class="col-12 mt-4">
									<input type="password" id="login-form-password" name="password" value="" class="form-control not-dark" placeholder="Password" />
								</div>

								<div class="col-12 text-right">
									<a href="#" class="text-dark font-weight-light mt-2">Forgot Password?</a>
								</div>

								<div class="col-12 mt-4">
									<button class="button btn-block m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-4 center">
							<p class="mb-0">Don't have an account? <a href={{ url("/register") }}><u>Sign up</u></a></p>
						</div>
					</div>
				</div>

                @yield('content')
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-color dark border-0">

			<div class="container-fluid">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-5">

					<div class="row">

						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-3 nott">Features</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Help Center</a></li>
									<li><a href="#">Paid with Moblie</a></li>
									<li><a href="#">Status</a></li>
									<li><a href="#">Changelog</a></li>
									<li><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-3 nott">Support</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">FAQs</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Contact</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-3 nott">Trending</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Shop</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="#">Forums</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-3 nott">Get to Know us</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Corporate</a></li>
									<li><a href="#">Agency</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Personal</a></li>
									<li><a href="#">OnePage</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-4">
							<div class="widget">

								<h4 class="ls0 mb-3 nott">Instagram Feed</h4>
								<div id="instagram-photos" class="instagram-photos masonry-thumbs grid-5" data-user="blog.canvastemplate" data-count="10"></div>

							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container-fluid clearfix">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<ul class="list-unstyled d-flex flex-row mb-2 clearfix">
								<li class="mr-2"><img src="demos/xmas/images/cards/visa.svg" alt="Visa" width="34"></li>
								<li class="mr-2"><img src="demos/xmas/images/cards/mc.svg" alt="Master Card" width="34"></li>
								<li class="mr-2"><img src="demos/xmas/images/cards/ae.svg" alt="American Express" width="34"></li>
								<li class="mr-2"><img src="demos/xmas/images/cards/pp.svg" alt="PayPal" width="34"></li>
								<li class="mr-2"><img src="demos/xmas/images/cards/sk.svg" alt="Skrill" width="34"></li>
								<li class="mr-2"><img src="demos/xmas/images/cards/2co.svg" alt="2CheckOut" width="34"></li>
								<li class="mr-2"><img src="demos/xmas/images/cards/wu.svg" alt="Western Union" width="34"></li>
							</ul>
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<!--<script src="{{ asset('js/jquery.js') }} "></script> -->

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/all.js') }}"></script>

	<script>
		$(document).ready(changeHeaderColor);
		$(window).on('resize',changeHeaderColor);

		function changeHeaderColor(){
			if (jQuery(window).width() > 991.98) {
				jQuery( "#header" ).hover(
					function() {
						if (!$(this).hasClass("sticky-header")) {
							$( this ).addClass( "hover-light" ).removeClass( "dark" );
							SEMICOLON.header.logo();
						}
						$( "#wrapper" ).addClass( "header-overlay" );
					}, function() {
						if (!$(this).hasClass("sticky-header")) {
							$( this ).removeClass( "hover-light" ).addClass( "dark" );
							SEMICOLON.header.logo();
						}
						$( "#wrapper" ).removeClass( "header-overlay" );
					}
				);
			}
		};

		$(window).scroll(function() {
			if ($(document).scrollTop() > 2000 && $("#modal-subscribe").attr("displayed") === "false") {
				$('#modal-subscribe').modal('show');
				$("#modal-subscribe").attr("displayed", "true");
			}
		});

		jQuery('#modal-subscribe-form').on( 'formSubmitSuccess', function(){
			$("#modal-subscribe").addClass("fadeOutDown");
			setTimeout(function() { $('#modal-subscribe').modal('hide'); }, 400);
			$("#modal-subscribe").attr("displayed", "false");
		});

	</script>

</body>
</html>