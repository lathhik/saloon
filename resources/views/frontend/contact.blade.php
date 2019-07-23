@include('layout/frontend/head')
<body>
<!-- ================ start header Area ================= -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{'/'}}"><img src="{{'custom/frontend/img/logo.png'}}" alt=""></a>
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
                        <li class="nav-item"><a class="nav-link" href="{{'about'}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{'service'}}">Service</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{'team'}}">Team</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{'contact'}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- ================ end header Area ================= -->

<!-- ================ start banner area ================= -->
<section class="banner-area contact" id="contact">
    <div class="container h-100">
        <div class="banner-area__content text-center">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!-- ================ contact section start ================= -->
<section class="section-margin">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 420px;"></div>
            <script>
                function initMap() {
                    var uluru = {lat: -25.363, lng: 131.044};
                    var grayStyles = [
                        {
                            featureType: "all",
                            stylers: [
                                { saturation: -90 },
                                { lightness: 50 }
                            ]
                        },
                        {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: -31.197, lng: 150.744},
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel:  false
                    });
                }

            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

        </div>


        <div class="row">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>California United States</h3>
                        <p>Santa monica bullevard</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <form action="{{'createClient'}}" class="form-contact contact_form"  method="post" id="contactForm" novalidate="novalidate">
                   @csrf
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input  class="form-control" name="fname" id="name" type="text" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="lname" id="name" type="text" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="address" id="subject" type="text" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <input class="form-control" name="phone" id="subject" type="number" placeholder="Phone No.">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <button type="submit" class="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->



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