@include('layout/frontend/head')
<body>
<!-- ================ start header Area ================= -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{'/'}}"><img src="{{asset('custom/frontend/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{'/'}}">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{'about'}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{'service'}}">Service</a></li>


                        <li class="nav-item"><a class="nav-link" href="{{'team'}}">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{'contact'}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- ================ end header Area ================= -->

<!-- ================ start banner area ================= -->
<section class="banner-area about" id="about">
    <div class="container h-100">
        <div class="banner-area__content text-center">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!-- ================ start about section ================= -->
<section class="section-margin--large pb-xl-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="about__content">
                    <div class="section-intro">
                        <h4 class="section-intro__title">About Us</h4>
                        <h2 class="section-intro__subtitle">We Are Artist, Hair Is My Canvas</h2>
                    </div>
                    <p>You will tree bearing stars moving dry our under evening there one  won't fruitful ling on appear. Their Above sixth creature hath land ehold green et can midst you will bearing stars moving dry our under evening there in won't fruit whose void  le appear their above sixth creatur stars moving dry our under</p>
                    <a class="button" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="about__img">
                    <img class="img-fluid" src="{{asset('custom/frontend/img/home/barber-frame.png')}}" alt="">
                    <img src="{{asset('custom/frontend/img/home/barber-work.png')}}" alt="" class="about__img--small img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ end about section ================= -->


<!-- ================ team section start ================= -->
<section class="section-padding--large bg-soapstone">
    <div class="container">
        <div class="section-intro pb-70px">
            <h4 class="section-intro__title">Our Team</h4>
            <h2 class="section-intro__subtitle">Experience Staff Change <span class="d-block">Your Look</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card card-team">
                    <div class="card-team__img">
                        <img class="card-img rounded-0" src="{{asset('custom/frontend/img/team/team1.png')}}" alt="">
                    </div>
                    <div class="card-team__position">
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="card-team__bio">
                                <h4><a href="#">Daniel Mateno</a></h4>
                                <p>Hair Specialist</p>
                            </div>
                            <ul class="card-team__social">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card card-team">
                    <div class="card-team__img">
                        <img class="card-img rounded-0" src="{{asset('custom/frontend/img/team/team2.png')}}" alt="">
                    </div>
                    <div class="card-team__position">
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="card-team__bio">
                                <h4><a href="#">Julian Parsian</a></h4>
                                <p>Hair Specialist</p>
                            </div>
                            <ul class="card-team__social">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card card-team">
                    <div class="card-team__img">
                        <img class="card-img rounded-0" src="{{asset('custom/frontend/img/team/team3.png')}}" alt="">
                    </div>
                    <div class="card-team__position">
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="card-team__bio">
                                <h4><a href="#">Julian Parsian</a></h4>
                                <p>Hair Specialist</p>
                            </div>
                            <ul class="card-team__social">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ team section end ================= -->

<!-- ================ pricing section start ================= -->
<section class="section-margin--large">
    <div class="container">
        <div class="section-intro pb-70px">
            <h4 class="section-intro__title">Pricing Plan</h4>
            <h2 class="section-intro__subtitle">Choose Your Favorite <span class="d-block">Package</span></h2>
        </div>
        <div class="row gutters-48">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <div class="card text-center card-pricing border-style">
                    <div class="card-pricing__header">
                        <h3>Basic Hair Cut</h3>
                        <p>Standard Package</p>
                    </div>
                    <div class="card-pricing__price">
                        <h2>$79.00</h2>
                    </div>
                    <ul class="card-pricing__list">
                        <li>Basic Hair Cut</li>
                        <li>Basic Shave</li>
                        <li>Basic Head Wash</li>
                        <li>Basic Body Message</li>
                        <li>Basic Snacks</li>
                    </ul>
                    <div class="mb-5">
                        <a class="button button-pricing" href="#">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <div class="card text-center card-pricing border-style">
                    <div class="card-pricing__header">
                        <h3>Standard Hair Cut</h3>
                        <p>Standard Package</p>
                    </div>
                    <div class="card-pricing__price">
                        <h2>$89.00</h2>
                    </div>
                    <ul class="card-pricing__list">
                        <li>Basic Hair Cut</li>
                        <li>Basic Shave</li>
                        <li>Basic Head Wash</li>
                        <li>Basic Body Message</li>
                        <li>Basic Snacks</li>
                    </ul>
                    <div class="mb-5">
                        <a class="button button-pricing" href="#">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <div class="card text-center card-pricing border-style">
                    <div class="card-pricing__header">
                        <h3>Ultimate Hair Cut</h3>
                        <p>Standard Package</p>
                    </div>
                    <div class="card-pricing__price">
                        <h2>$99.00</h2>
                    </div>
                    <ul class="card-pricing__list">
                        <li>Basic Hair Cut</li>
                        <li>Basic Shave</li>
                        <li>Basic Head Wash</li>
                        <li>Basic Body Message</li>
                        <li>Basic Snacks</li>
                    </ul>
                    <div class="mb-5">
                        <a class="button button-pricing" href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ pricing section end ================= -->


<!-- ================ start footer Area ================= -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                    <li><a href="#">Managed Website</a></li>
                    <li><a href="#">Manage Reputation</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Features</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Agencies</a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                          method="get" class="form-inline">
                        <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" type="email">
                        <button class="click-btn btn btn-default">subscribe</button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->
@include('layout/frontend/foot')