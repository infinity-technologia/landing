<div>
    <header class="site-header mo-left header header-white style-1 navstyle4">
        <!-- main header -->
        <div class="main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('logo.png') }}" alt="logo">
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
                            <li>
                                <a href="{{ url('/') }}" wire:navigate>Home </a>
                            </li>
                            <li class="active"><a href="{{ url('/about') }}" wire:navigate>About</a></li>
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
        <!-- inner page banner -->
        <div class="dlab-bnr-inr no-bg-bnr">
            <div class="container">
                <div class="dlab-bnr-inr-entry text-black text-left">
                    <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">WHO WE ARE</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">We are your dedicated IT
                        partner, committed to advancing your business forward by thinking big, designing smart, and
                        developing fast.
                    </p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- About Info -->
            <div class="section-full bg-white p-sm-t40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 m-md-b30 wow bounceInUp" data-wow-delay="0.3s"
                            data-wow-duration="2s">
                            <div class="info-box text-black">
                                <h3 class="title">AGENCY</h3>
                                <p>An Technology Company Who loved developing what your business need. we have strong
                                    vision to make all business go digital in 2045</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-md-b30 wow bounceInUp" data-wow-delay="0.5s"
                            data-wow-duration="2s">
                            <div class="info-box text-black">
                                <h3 class="title">MISSION</h3>
                                <p>We are your dedicated IT
                                    partner, committed to advancing your business forward by thinking big, designing
                                    smart, and
                                    developing fast.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-md-b0 wow bounceInUp" data-wow-delay="0.8s"
                            data-wow-duration="2s">
                            <div class="info-box text-black">
                                <h3 class="title">TEAM</h3>
                                <p><i>Small Team, Big Dreams.</i> We belived strong minded and super focused person will
                                    develop our team grow faster </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Info End -->
            <!-- Team -->
            <div class="section-full content-inner-1">
                <div class="container">
                    <div class="row spsm15">
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 m-sm-b15 col-6 wow bounceInUp"
                            data-wow-delay="0.3s" data-wow-duration="3s">
                            <div class="team-box text-white dlab-media dlab-overlay-primary dlab-img-overlay1">
                                <div class="thumb">
                                    <img src="{{ asset('pic.png') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h4 class="name">Satrya Wicaksana</h4>
                                    <h6 class="position">CEO</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 m-sm-b15 col-6 wow bounceInUp"
                            data-wow-delay="0.5s" data-wow-duration="3s">
                            <div class="team-box text-white dlab-media dlab-overlay-primary dlab-img-overlay1">
                                <div class="thumb">
                                    <img src="{{ asset('pic.png') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h4 class="name">Miarta Yasa</h4>
                                    <h6 class="position">Developer</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.8s"
                            data-wow-duration="3s">
                            <div class="section-head m-sm-b0">
                                <h2 class="title">Want to join our team?</h2>
                                <a href="{{ url('contact') }}" class="btn-link text-black">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->
            <!-- Our Services -->
            <div class="section-full content-inner-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-head wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                                <h2 class="title">OUR VALUES SHAPE THE WAY WE WORK</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 m-b0 m-sm-b0 wow fadeInUp" data-wow-delay="0.8s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black">
                                        <h3 class="title">AI Project</h3>
                                        <p>We can provide consultations regarding business ideas integration with AI
                                            that you wil or have developed </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-b50 m-sm-b30 wow fadeInUp" data-wow-delay="0.3s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black">
                                        <h3 class="title">Software Development</h3>
                                        <p>The process of creating, designing, and programming computer programs,
                                            applications, or systems that enable specific functions or tasks to be
                                            performed on a computer or digital device.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-b50 m-sm-b30 wow fadeInUp" data-wow-delay="0.5s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black">
                                        <h3 class="title">System Integration</h3>
                                        <p>The practice of connecting and coordinating different software and hardware
                                            systems within an organization to function as a unified, cohesive whole.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Services End -->
            <!-- Img Carousel  -->
            {{-- <div class="section-full content-inner-1 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
                <div class="img-carousel owl-carousel owl-none" id="lightgallery">
                    <div class="item">
                        <div class="project-bx">
                            <div class="media">
                                <img src="images/slide/slide1.png" alt="">
                            </div>
                            <div class="info">
                                <span data-exthumbimage="images/slide/slide1.png" data-src="images/slide/slide1.png"
                                    class="check-km" title="Title Come Here">
                                    <i class="ti-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-bx">
                            <div class="media">
                                <img src="images/slide/slide2.png" alt="">
                            </div>
                            <div class="info">
                                <span data-exthumbimage="images/slide/slide2.png" data-src="images/slide/slide2.png"
                                    class="check-km" title="Title Come Here">
                                    <i class="ti-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-bx">
                            <div class="media">
                                <img src="images/slide/slide3.png" alt="">
                            </div>
                            <div class="info">
                                <span data-exthumbimage="images/slide/slide3.png" data-src="images/slide/slide3.png"
                                    class="check-km" title="Title Come Here">
                                    <i class="ti-image"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Clients -->
            <div class="section-full content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-head">
                                <h2 class="title">CLIENTS</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <ul class="client-logo-list light-border column-4 m-b0">
                                <li class="wow zoomIn img-grey" data-wow-delay="0.1s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/magicpen.png" alt=""></a>
                                </li>
                                <li class="wow zoomIn img-grey" data-wow-delay="0.1s" data-wow-duration="2.5s"><a
                                        href="#"><img src="images/client-logo/medlinx.png" alt=""></a>
                                </li>
                                <li class="wow zoomIn img-grey" data-wow-delay="0.1s" data-wow-duration="2.5s"><a
                                        href="#"><img src="images/client-logo/izidok.png" alt=""></a>
                                </li>

                                {{-- <li class="wow zoomIn" data-wow-delay="0.2s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo2.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.3s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo3.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo4.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.5s" data-wow-duration="2.5s"><a
                                        href="#"><img src="images/client-logo/logo/logo5.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.6s" data-wow-duration="2.5s"><a
                                        href="#"><img src="images/client-logo/logo/logo6.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.7s" data-wow-duration="2.5s"><a
                                        href="#"><img src="images/client-logo/logo/logo7.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.8s" data-wow-duration="2.5s"><a
                                        href="#"><img src="images/client-logo/logo/logo8.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo9.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="0.10s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo10.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="1.11s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo1.png"
                                            alt=""></a></li>
                                <li class="wow zoomIn" data-wow-delay="1.12s" data-wow-duration="2s"><a
                                        href="#"><img src="images/client-logo/logo/logo2.png"
                                            alt=""></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Clients End -->
        </div>
        <!-- contact area END -->
    </div>
</div>
