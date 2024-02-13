<div>
    <!-- header -->
    <header class="site-header mo-left header header-white style-1 navstyle4">
        <!-- main header -->
        <div class="main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('logo.png') }}" alt="logo">
                            {{-- <div class="logo-text">
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.5s">S</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.6s">M</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.7s">A</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.8s">R</span>
                                <span class="wow bounce" data-wow-duration="2s" data-wow-delay="0.9s">T</span>
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
                            <li>
                                <a href="{{ url('/') }}" wire:navigate>Home </a>
                            </li>
                            <li><a href="{{ url('/about') }}" wire:navigate>About</a></li>
                            <li><a href="{{ url('/services') }}" wire:navigate>Services</a></li>

                            <li><a href="{{ url('/contact') }}" wire:navigate>Contacts</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr no-bg-bnr">
            <div class="container">
                <div class="dlab-bnr-inr-entry text-black text-left">
                    <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">WHAT WE DO</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">Here’s the most important thing
                        you need to know: we’re more than just a IT Company. We help small businesses and big company to
                        realize their full growth potential, and we’re invested in their success.

                    </p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Services -->
            <div class="section-full">
                <h2 class="title-back text-right title-stroke">Analys & Develop</h2>
                <div class="row m-lr0 services-box-area">
                    <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="2s"
                        style="background-image: url(images/our-services/AI.webp);">
                        <a href="#" class="services-box">
                            <div class="services-text">
                                <div class="number">01</div>
                                <h2 class="title">AI Project</h2>
                                <p class="description">We can provide consultations regarding business ideas integration
                                    with AI
                                    that you wil or have developed </p>
                            </div>
                            <span class="btn-link text-white">Learn More</span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="2s"
                        style="background-image: url(images/our-services/develop.jpeg);">
                        <a href="#" class="services-box">
                            <div class="services-text">
                                <div class="number">02</div>
                                <h2 class="title">Software Development</h2>
                                <p class="description">The process of creating, designing, and programming computer
                                    programs,
                                    applications, or systems that enable specific functions or tasks to be
                                    performed on a computer or digital device.</p>
                            </div>
                            <span class="btn-link text-white">Learn More</span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="2s" data-wow-duration="2s"
                        style="background-image: url(images/our-services/system.jpeg);">
                        <a href="#" class="services-box">
                            <div class="services-text">
                                <div class="number">03</div>
                                <h2 class="title">System Integration</h2>
                                <p class="description">The practice of connecting and coordinating different software
                                    and hardware
                                    systems within an organization to function as a unified, cohesive whole.</p>
                            </div>
                            <span class="btn-link text-white">Learn More</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Services End -->
            <!-- Testimonials -->
            <div class="section-full content-inner bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-head wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="2s">
                                <h2 class="title">PROCESS WE STRICTLY FOLLOW IN OUR WORK</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 wow bounceInUp" data-wow-delay="0.5s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black m-b30">
                                        <p class="number">01</p>
                                        <h3 class="title">ANALYS</h3>
                                        <p>We need analys what your business need, how to imporve in technology.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow bounceInUp" data-wow-delay="1.0s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black m-b30">
                                        <p class="number">02</p>
                                        <h3 class="title">DEVELOPMENT</h3>
                                        <p>With secure team, we develop your need to ready to use applications.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow bounceInUp" data-wow-delay="1.5s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black m-b30">
                                        <p class="number">03</p>
                                        <h3 class="title">TESTING</h3>
                                        <p>We test what we build, so you will get bug free applications.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow bounceInUp" data-wow-delay="2.0s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black m-b30">
                                        <p class="number">04</p>
                                        <h3 class="title">DOCUMENTATION</h3>
                                        <p>We write the documentation of our work, so next developing must be easy.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow bounceInUp" data-wow-delay="2.5s"
                                    data-wow-duration="2s">
                                    <div class="info-box text-black m-b30">
                                        <p class="number">05</p>
                                        <h3 class="title">RELEASE</h3>
                                        <p>On your apps relase, it will help grow the business faster.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials -->
            <div class="section-full content-inner-2 bg-primary text-black">
                <div class="container">
                    <div class="row testimonial-box">
                        <div class="col-lg-4 m-b30">
                            <div class="testimonial-detail wow fadeInUp" data-wow-delay="0.7s"
                                data-wow-duration="2s">
                                <strong class="testimonial-name">Satrya Wira</strong>
                                <span class="testimonial-position">CEO</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="testimonial-text wow fadeInUp" data-wow-delay="1.5s" data-wow-duration="2s">
                                <p>we believe that nowadays a product should be as smart as beautiful, we help clients
                                    to achieve goals through design and technology thinking. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials End -->
            <!-- Testimonials -->
            <div class="section-full content-inner-2 bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-head wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="2s">
                                <h2 class="title">STACK</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.0s"
                                    data-wow-duration="2s">
                                    <div class="service-list-box">
                                        <h2 class="title">FULLSTACK</h2>
                                        <ul>
                                            <li><a href="javascript:void(0);">PHP Laravel</a></li>
                                            <li><a href="javascript:void(0);">PHP codeigniter</a></li>
                                            <li><a href="javascript:void(0);">Javascript MERN</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.5s"
                                    data-wow-duration="2s">
                                    <div class="service-list-box">
                                        <h2 class="title">BACKEND</h2>
                                        <ul>
                                            <li><a href="javascript:void(0);">PHP Laravel</a></li>
                                            <li><a href="javascript:void(0);">Node JS</a></li>
                                            <li><a href="javascript:void(0);">GO</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="2.0s"
                                    data-wow-duration="2s">
                                    <div class="service-list-box">
                                        <h2 class="title">FRONTEND</h2>
                                        <ul>
                                            <li><a href="javascript:void(0);">Vue JS</a></li>
                                            <li><a href="javascript:void(0);">React JS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials End -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
</div>
