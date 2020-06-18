@extends('layouts.master')
@section('content')
<div class="grid-filter-wrap">

    <!-- Portfolio Filter
    ============================================= -->
    <ul class="grid-filter" data-container="#portfolio">
        <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
        <li><a href="#" data-filter=".pf-icons">Icons</a></li>
        <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
        <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
        <li><a href="#" data-filter=".pf-media">Media</a></li>
        <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>
    </ul><!-- .grid-filter end -->

    <div class="grid-shuffle rounded" data-container="#portfolio">
        <i class="icon-random"></i>
    </div>

</div>

</div>

<!-- Portfolio Items
============================================= -->
<div id="portfolio" class="portfolio row grid-container no-gutters" data-layout="fitRows">

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="portfolio-single.html">
                <img src="images/portfolio/3/1.jpg" alt="Open Imagination">
            </a>
            <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="portfolio-single.html">
                <img src="images/portfolio/3/2.jpg" alt="Locked Steel Gate">
            </a>
            <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
            <span><a href="#">Illustrations</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="#">
                <img src="images/portfolio/3/3.jpg" alt="Mac Sunglasses">
            </a>
            <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
    <div class="grid-inner">
        <div class="portfolio-image">
            <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/4.jpg" alt="Morning Dew"></a></div>
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/4-1.jpg" alt="Morning Dew"></a></div>
                    </div>
                </div>
            </div>
            <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                    <a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
            <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-media">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="portfolio-single.html">
                <img src="images/portfolio/3/5.jpg" alt="Console Activity">
            </a>
            <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single.html">Console Activity</a></h3>
            <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
    <div class="grid-inner">
        <div class="portfolio-image">
            <div class="fslider" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/6.jpg" alt="Shake It"></a></div>
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/6-1.jpg" alt="Shake It"></a></div>
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/6-2.jpg" alt="Shake It"></a></div>
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/6-3.jpg" alt="Shake It"></a></div>
                    </div>
                </div>
            </div>
            <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                    <a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
            <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="portfolio-single-video.html">
                <img src="images/portfolio/3/7.jpg" alt="Backpack Contents">
            </a>
            <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
            <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="portfolio-single.html">
                <img src="images/portfolio/3/8.jpg" alt="Sunset Bulb Glow">
            </a>
            <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
            <span><a href="#">Graphics</a></span>
        </div>
    </div>
</article>

<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations pf-icons">
    <div class="grid-inner">
        <div class="portfolio-image">
            <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/9.jpg" alt="Bridge Side"></a></div>
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/9-1.jpg" alt="Bridge Side"></a></div>
                        <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/3/9-2.jpg" alt="Bridge Side"></a></div>
                    </div>
                </div>
            </div>
            <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a href="images/portfolio/full/9.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                    <a href="images/portfolio/full/9-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="images/portfolio/full/9-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio-single.html">Bridge Side</a></h3>
            <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
        </div>
    </div>
</article>
@endsection