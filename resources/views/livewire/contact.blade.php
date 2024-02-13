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

                            {{-- <li>
                                <a href="javascript:void(0);">Services <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services-details.html">services Details</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="javascript:void(0);">Works <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="work.html">Works</a></li>
                                    <li><a href="work-details.html">Work Details</a></li>
                                </ul>
                            </li> --}}
                            <li class="active"><a href="{{ url('/contact') }}" wire:navigate>Contacts</a></li>
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
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr no-bg-bnr">
            <div class="container">
                <div class="dlab-bnr-inr-entry text-black text-left">
                    <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">DON’T BE SHY, <span
                            class="text-primary">SAY HI</span></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 m-b50 m-sm-b30 wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s">
                            <div class="contact-info text-black text-center">
                                <div class="thumb">
                                    <img src="{{ asset('jakarta.png') }}" alt="">
                                </div>
                                <h4 class="title font-weight-700"> JAKARTA</h4>
                                <p>STC Senayan <br />Jakarta Pusat, DKI Jakarta 10270, Indonesia</p>
                                <a href="#" class="btn-link text-black"><i class="la la-map-marker"></i>VIEW ON
                                    MAP</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 m-b50 m-sm-b0 wow fadeInUp" data-wow-delay="1.5s"
                            data-wow-duration="1s">
                            <div class="contact-info text-black text-center">
                                <div class="thumb">
                                    <img src="{{ asset('bali.png') }}" alt="">
                                </div>
                                <h4 class="title font-weight-700">BALI </h4>
                                <p>Jl Gatot Subroto <br />Denpasar, Bali. Indonesia</p>
                                <a href="#" class="btn-link text-black"><i class="la la-map-marker"></i>VIEW ON
                                    MAP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->

        {{-- <div class="content-block">
            <div class="seaction-full content-inner-3">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="massage" class="form-label">Massage</label>
                                        <textarea name="" id="massage" class="form-control" cols="30" rows="10"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
    </div>
    <!-- Content END -->

</div>
