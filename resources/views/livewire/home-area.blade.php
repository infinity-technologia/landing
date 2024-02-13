<div>


    <header class="site-header mo-left header header-black style-1 navstyle4">
        <!-- main header -->
        <div class="main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix bg-primary">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('logo.png') }}" alt="logo">
                            {{-- <div class="logo-text">
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.5s">M</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.5s">.</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.6s">I</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.6s">.</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.7s">T</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.7s">I</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.8s">T</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.8s">Y</span>

                            </div> --}}
                        </a>
                    </div>
                    <!-- extra nav -->
                    {{-- <div class="extra-nav">
                        <div class="extra-cell">
                            <div class="video-wraper">
                                <div class="video-play">
                                    <a href="https://www.youtube.com/watch?v=UMX6eWoMXAM" class="popup-youtube video">
                                        <div><i class="fa fa-play"></i></div><span>Showreel ‘18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{ url('/') }}" wire:navigate>Home </a>
                            </li>
                            <li><a href="{{ url('/about') }}"wire:navigate>About</a></li>
                            <li><a href="{{ url('/services') }}" wire:navigate>Services</a></li>
                            {{-- <li>
                                <a href="javascript:void(0);">Services <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services-details.html">services Details</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Works <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="work.html">Works</a></li>
                                    <li><a href="work-details.html">Work Details</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ url('/contact') }}" wire:navigate>Contacts</a></li>
                            {{-- <li><a href="javascript:void(0);">Blog <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu left">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <div class="page-content bg-white">
        <!-- contact area -->
        <div class="content-block">
            <!-- Banner -->
            <div class="section-full content-inner-1 bg-primary page-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <h3 class="intro-title" data-text="YOUR">YOUR</h3>
                            <h3 class="intro-title" data-text="BUSINESS">BUSINESS</h3>
                            <h3 class="intro-title" data-text="SOLUTION">SOLUTION</h3>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="video-box">
                                <div class="slide-carousel owl-carousel owl-btn-center-lr">

                                    <div class="item">
                                        <div class="slide-media">
                                            <img src="{{ asset('') }}images/slide/thumb2.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slide-media">
                                            <img src="{{ asset('') }}images/slide/thumb3.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slide-media">
                                            <img src="{{ asset('') }}images/slide/thumb1.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6 col-sm-6">
                                            <h3 class="pt-title pull-left text-black">MEANINGFUL SOLUTIONS</h3>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                            <div class="showreel">
                                                <h3 class="pt-title text-black">Ideas <i class="ti-arrow-up m-l20"></i>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <p>Discover MIT: Your IT Partner, Advancing Your Business Ahead. Think Big,
                                                Design Smart, Develop Fast.</p>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <div class="social-list">
                                                <div class="clearfix">
                                                    <h3 class="pt-title text-black pull-right">FOLLOW ME <i
                                                            class="ti-arrow-down m-l20"></i></h3>
                                                </div>
                                                <ul>
                                                    <li class="wow fadeInRight" data-wow-duration="2s"
                                                        data-wow-delay="0.2s"><a href="#">Facebook</a></li>
                                                    <li class="wow fadeInRight" data-wow-duration="2s"
                                                        data-wow-delay="0.4s"><a href="#">Instagram</a></li>
                                                    <li class="wow fadeInRight" data-wow-duration="2s"
                                                        data-wow-delay="0.6s"><a
                                                            href="https://www.linkedin.com/company/pt-mulia-infinity-teknologia">Linkdin</a>
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
                <a href="{{ url('/contact') }}" class="contact-btn side-btn" wire:navigate>Contact us</a>
                <a href="{{ url('/contact') }}" class="discover-btn side-btn" wire:navigate><i
                        class="fa fa-long-arrow-down"></i>
                    DISCOVER ME </a>
            </div>
            <!-- Banner End -->
            <!-- Split Slider -->
            <div class="section-full bg-primary">
                <div class="row split-box-area spno ">
                    <div class="col-xl-12 col-lg-4 col-md-6 col-6 row split-box" id="project1">
                        <div class="col-xl-6 col-lg-12 p-lr0 theme-bg" data-anchor-target="#project2"
                            data-bottom-top="background:hsl(41, 100%, 57%);"
                            data-top-bottom="background:hsl(41, 100%, 16%);">
                            <div class="split-content">
                                <div class="split-text">
                                    <h2 class="title" data-start="letter-spacing: -50px; opacity:0;"
                                        data-top="letter-spacing: 5px; opacity:1;">Integrity</h2>
                                    <p class="description">Developing All You Need, Delivering Trust, Building
                                        Relationships.</p>
                                </div>
                                <div class="split-text">
                                    <a href="#" class="btn-link text-white link-line">VIEW CASE
                                        STUDY <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 split-item p-lr0">
                            <div class="split-thumb bg-yellow">
                                <img src="{{ asset('banner1.png') }}" data-start="transform:scale(1.5);"
                                    data-top="transform:scale(1);" alt="">
                            </div>
                            <h2 class="title"><a href="#">INTEGRITY</a></h2>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-4 col-md-6 col-6 row split-box" id="project2"
                        data-start="opacity:0;" data-top="opacity:1;">
                        <div class="col-xl-6 col-lg-12 p-lr0 theme-bg" data-anchor-target="#project3"
                            data-bottom-top="background:hsl(41, 100%, 57%);"
                            data-top-bottom="background:hsl(41, 100%, 16%);">
                            <div class="split-content">
                                <div class="split-text">
                                    <h2 class="title" data-start="letter-spacing: -50px; opacity:0;"
                                        data-top="letter-spacing: 5px; opacity:1;">Community</h2>
                                    <p class="description">Uniting Hearts, Empowering Growth, Building Together for a
                                        Brighter Tomorrow.</p>
                                </div>
                                <div class="split-text">
                                    <a href="#" class="btn-link text-white link-line">VIEW CASE
                                        STUDY <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 split-item p-lr0" data-start="opacity:0;"
                            data-top="opacity:1;">
                            <div class="split-thumb bg-purple">
                                <img src="{{ asset('banner2.png') }}" data-start="transform:scale(1.5);"
                                    data-top="transform:scale(1);" alt="">
                            </div>
                            <h2 class="title"><a href="#">COMUNITY</a></h2>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Split Slider End -->
            <!-- Social Section -->
            <div class="section-full social-section">
                <div class="container">
                    <div class="row sp60">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 content-inner-2 bg-white after-right">
                            <h3 class="text-uppercase pt-title text-black wow fadeIn" data-wow-delay="1.5s"
                                data-wow-duration="2s">Check More Work</h3>
                            <div class="project-carousel owl-carousel" id="lightgallery">
                                <div class="item wow bounceInUp" data-wow-delay="0.5s" data-wow-duration="2s">
                                    <div class="project-bx">
                                        <div class="media">
                                            <img src="{{ asset('magicpen.png') }}" alt="magic-pen" />
                                        </div>
                                        <div class="info">
                                            <span data-exthumbimage="{{ asset('magicpen.png') }}"
                                                data-src="{{ asset('magicpen.png') }}" class="check-km"
                                                title="Magic Pen">
                                                <i class="ti-image"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow bounceInUp" data-wow-delay="1.0s" data-wow-duration="2s">
                                    <div class="project-bx">
                                        <div class="media">
                                            <img src="{{ asset('images/slide/izidok.png') }}" alt="" />
                                        </div>
                                        <div class="info">
                                            <span data-exthumbimage="{{ asset('images/slide/izidok.png') }}"
                                                data-src="{{ asset('images/slide/izidok.png') }}" class="check-km"
                                                title="Title Come Here">
                                                <i class="ti-image"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="item wow bounceInUp" data-wow-delay="1.5s" data-wow-duration="2s">
                                    <div class="project-bx">
                                        <div class="media">
                                            <img src="images/our-work/construct-work/pic3.jpg" alt="" />
                                        </div>
                                        <div class="info">
                                            <span data-exthumbimage="images/our-work/construct-work/pic3.jpg"
                                                data-src="images/our-work/construct-work/pic3.jpg" class="check-km"
                                                title="Title Come Here">
                                                <i class="ti-image"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow bounceInUp" data-wow-delay="2.0s" data-wow-duration="2s">
                                    <div class="project-bx">
                                        <div class="media">
                                            <img src="images/our-work/construct-work/pic4.jpg" alt="" />
                                        </div>
                                        <div class="info">
                                            <span data-exthumbimage="images/our-work/construct-work/pic4.jpg"
                                                data-src="images/our-work/construct-work/pic4.jpg" class="check-km"
                                                title="Title Come Here">
                                                <i class="ti-image"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 content-inner-2 d-none d-lg-block wow fadeInRight"
                            data-wow-delay="1s" data-wow-duration="1s">
                            <p class="text-uppercase pt-title text-black">Discover more of our work on</p>
                            <h2 class="title">
                                <a href="javascript:void(0);">FACEBOOK</a>
                                <a href="javascript:void(0);">TWITTER</a>
                                <a href="https://www.linkedin.com/company/pt-mulia-infinity-teknologia"
                                    target="_blank">LINKEDIN</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Section End -->
        </div>
    </div>
</div>
