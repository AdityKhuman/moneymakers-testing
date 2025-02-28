<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MoneymKershub</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/imagehover.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }} ">
</head>
<body>
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Moneym<span>Kershub</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="btn-trial"><a href="{{ route('login') }}">Sign In</a></li>
                <li class="btn-trial"><a href="{{ route('register') }}">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->
<!--Modal box-->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center form-title">Login</h4>
            </div>
            <div class="modal-body padtrbl">
                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="form-group">
                        <form name="" id="loginForm">
                            <div class="form-group has-feedback">
                                <!----- username -------------->
                                <input class="form-control" placeholder="Username" id="loginid" type="text"
                                       autocomplete="off"/>
                                <span
                                    style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                    id="span_loginid"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <!----- password -------------->
                                <input class="form-control" placeholder="Password" id="loginpsw" type="password"
                                       autocomplete="off"/>
                                <span
                                    style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                    id="span_loginpsw"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" id="loginrem"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-green btn-block btn-flat"
                                            onclick="userlogin()">Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ Modal box-->
<!--Banner-->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="banner-text text-center">
                    <div class="text-border">
                        <h2 class="text-dec">Trust & Quality</h2>
                    </div>
                    <div class="intro-para text-center quote">
                        <p class="big-text">Welcome to MoneyMakers Hub</p>
                        <p class="small-text">Learn, Earn, Connect.</p>
                        {{--                        <a href="#footer" class="btn get-quote">GET A QUOTE</a>--}}
                    </div>
                    <a href="#feature" class="mouse-hover">
                        <div class="mouse"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Banner-->
<!--Feature-->
<section id="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>What is MoneyMakers Hub?</h2>
                <p>MoneyMakers Hub is your go-to destination for mastering the art of making money online. Whether
                    you're a seasoned entrepreneur or just starting out, our platform offers specialized courses,
                    freelancing opportunities, and a supportive community to help you achieve your financial goals.</p>
                <hr class="bottom-line">
            </div>
{{--            <div class="feature-info">--}}
{{--                <div class="fea">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="heading pull-right">--}}
{{--                            <h4>Latest Technologies</h4>--}}
{{--                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin--}}
{{--                                metus non urna in eros tincidunt convallis id id nisi in interdum.</p>--}}
{{--                        </div>--}}
{{--                        <div class="fea-img pull-left">--}}
{{--                            <i class="fa fa-css3"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="fea">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="heading pull-right">--}}
{{--                            <h4>Toons Background</h4>--}}
{{--                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin--}}
{{--                                metus non urna in eros tincidunt convallis id id nisi in interdum.</p>--}}
{{--                        </div>--}}
{{--                        <div class="fea-img pull-left">--}}
{{--                            <i class="fa fa-drupal"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="fea">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="heading pull-right">--}}
{{--                            <h4>Award Winning Design</h4>--}}
{{--                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin--}}
{{--                                metus non urna in eros tincidunt convallis id id nisi in interdum.</p>--}}
{{--                        </div>--}}
{{--                        <div class="fea-img pull-left">--}}
{{--                            <i class="fa fa-trophy"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!--/ feature-->
<!--Organisations-->
<section id="organisations" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="detail-info">
                    <hgroup>
                        <h3 style="margin-bottom: 50px" class="det-txt text-center"> How It Works ?</h3>
                    </hgroup>
                </div>
            </div>
            <div class="fea">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="heading pull-right">
                        <h4>Explore Courses</h4>
                        <p>Dive into our curated selection of online money-making courses taught by industry experts.</p>
                    </div>
                    <div class="fea-img pull-left d-flex">
                        <img class="img-fluid h-25" style="width: 75%" src="{{ asset('assets/img/number-1.png') }}">
                    </div>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-4">
                    <div class="heading pull-right">
                        <h4>Watch Videos</h4>
                        <p>Learn directly from the pros with embedded YouTube videos covering a wide range of topics.</p>
                    </div>
                    <div class="fea-img pull-left d-flex">
                        <img class="img-fluid h-25" style="width: 75%" src="{{ asset('assets/img/number-2.png') }}">
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="heading pull-right">
                        <h4>Freelance Opportunities</h4>
                        <p>Put your skills to work and earn money by completing tasks and projects.</p>
                    </div>
                    <div class="fea-img pull-left d-flex">
                        <img class="img-fluid h-25" style="width: 75%" src="{{ asset('assets/img/number-3.png') }}">
                    </div>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-4">
                    <div class="heading pull-right">
                        <h4>Bid on Courses</h4>
                        <p> Need extra help? Bid on courses to receive personalized assistance from other students.</p>
                    </div>
                    <div class="fea-img pull-left d-flex">
                        <img class="img-fluid h-25" style="width: 75%" src="{{ asset('assets/img/number-4.png') }}">
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="heading pull-right">
                        <h4>Connect</h4>
                        <p>Engage with fellow learners through our chat feature. Ask questions, share insights, and connect with like-minded individuals.</p>
                    </div>
                    <div class="fea-img pull-left d-flex">
                        <img class="img-fluid h-25" style="width: 75%" src="{{ asset('assets/img/number-5.png') }}">
                    </div>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-4">
                    <div class="heading pull-right">
                        <h4>Toons Background</h4>
                        <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin
                            metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                    </div>
                    <div class="fea-img pull-left d-flex">
                        <img class="img-fluid h-25" style="width: 75%" src="{{ asset('assets/img/number-6.png') }}">
                    </div>
                </div>
            </div>
        </div>
        {{--            <div class="col-md-6">--}}
        {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
        {{--                    <div class="orga-stru">--}}
        {{--                        <h3>65%</h3>--}}
        {{--                        <p>Say NO!!</p>--}}
        {{--                        <i class="fa fa-male"></i>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
        {{--                    <div class="orga-stru">--}}
        {{--                        <h3>20%</h3>--}}
        {{--                        <p>Says Yes!!</p>--}}
        {{--                        <i class="fa fa-male"></i>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
        {{--                    <div class="orga-stru">--}}
        {{--                        <h3>15%</h3>--}}
        {{--                        <p>Can't Say!!</p>--}}
        {{--                        <i class="fa fa-male"></i>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}


    </div>
    </div>
</section>
<!--/ Organisations-->
<!--work-shop-->
<div class="col-md-12" style="text-align: center;margin: 50px 0px">
    <h3 style="margin-bottom: 25px" class="det-txt text-center"> Get Started Today</h3>
    <a href="{{ route('login') }}" class="btn btn-primary" style="border: none ;background-color: #4cae4c">Sign In</a>
    <a href="{{ route('register') }}" class="btn btn-primary" style="border: none ;background-color: #4cae4c"> Sign Up</a>
</div>
<section id="work-shop" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Ready to turn your dreams into reality?</h2>
                <p> Join MoneyMakers Hub now and start your journey towards financial freedom!</p>
                <hr class="bottom-line">
            </div>
        </div>
    </div>
</section>

<!--/ work-shop-->
<!--Cta-->

<!--/ Cta-->
<!--Faculity member-->
{{--<section id="faculity-member" class="section-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="header-section text-center">--}}
{{--                <h2>Meet Our Faculty Member</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores,--}}
{{--                    magni dolorum aliquam.</p>--}}
{{--                <hr class="bottom-line">--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-4">--}}
{{--                <div class="pm-staff-profile-container">--}}
{{--                    <div class="pm-staff-profile-image-wrapper text-center">--}}
{{--                        <div class="pm-staff-profile-image">--}}
{{--                            <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pm-staff-profile-details text-center">--}}
{{--                        <p class="pm-staff-profile-name">Bryan Johnson</p>--}}
{{--                        <p class="pm-staff-profile-title">Lead Software Engineer</p>--}}

{{--                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec--}}
{{--                            et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem--}}
{{--                            ullamcorper tincidunt. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-4">--}}
{{--                <div class="pm-staff-profile-container">--}}
{{--                    <div class="pm-staff-profile-image-wrapper text-center">--}}
{{--                        <div class="pm-staff-profile-image">--}}
{{--                            <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pm-staff-profile-details text-center">--}}
{{--                        <p class="pm-staff-profile-name">Bryan Johnson</p>--}}
{{--                        <p class="pm-staff-profile-title">Lead Software Engineer</p>--}}

{{--                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec--}}
{{--                            et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem--}}
{{--                            ullamcorper tincidunt. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-4 col-sm-4">--}}
{{--                <div class="pm-staff-profile-container">--}}
{{--                    <div class="pm-staff-profile-image-wrapper text-center">--}}
{{--                        <div class="pm-staff-profile-image">--}}
{{--                            <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pm-staff-profile-details text-center">--}}
{{--                        <p class="pm-staff-profile-name">Bryan Johnson</p>--}}
{{--                        <p class="pm-staff-profile-title">Lead Software Engineer</p>--}}

{{--                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec--}}
{{--                            et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem--}}
{{--                            ullamcorper tincidunt. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!--/ Faculity member-->--}}
{{--<!--Testimonial-->--}}
{{--<section id="testimonial" class="section-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="header-section text-center">--}}
{{--                <h2 class="white">See What Our Customer Are Saying?</h2>--}}
{{--                <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt--}}
{{--                    vitae,<br> maiores, magni dolorum aliquam.</p>--}}
{{--                <hr class="bottom-line bg-white">--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-sm-6">--}}
{{--                <div class="text-comment">--}}
{{--                    <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis--}}
{{--                        sem"</p>--}}
{{--                    <p class="text-name">Abraham Doe - Creative Dırector</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-sm-6">--}}
{{--                <div class="text-comment">--}}
{{--                    <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis--}}
{{--                        sem"</p>--}}
{{--                    <p class="text-name">Abraham Doe - Creative Dırector</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!--/ Testimonial-->--}}
{{--<!--Courses-->--}}
{{--<section id="courses" class="section-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="header-section text-center">--}}
{{--                <h2>Courses</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores,--}}
{{--                    magni dolorum aliquam.</p>--}}
{{--                <hr class="bottom-line">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 col-sm-6 padleft-right">--}}
{{--                <figure class="imghvr-fold-up">--}}
{{--                    <img src="img/course01.jpg" class="img-responsive">--}}
{{--                    <figcaption>--}}
{{--                        <h3>Course Name</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam--}}
{{--                            consequatur libero fugiat, similique quis.</p>--}}
{{--                    </figcaption>--}}
{{--                    <a href="#"></a>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 padleft-right">--}}
{{--                <figure class="imghvr-fold-up">--}}
{{--                    <img src="img/course02.jpg" class="img-responsive">--}}
{{--                    <figcaption>--}}
{{--                        <h3>Course Name</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam--}}
{{--                            consequatur libero fugiat, similique quis.</p>--}}
{{--                    </figcaption>--}}
{{--                    <a href="#"></a>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 padleft-right">--}}
{{--                <figure class="imghvr-fold-up">--}}
{{--                    <img src="img/course03.jpg" class="img-responsive">--}}
{{--                    <figcaption>--}}
{{--                        <h3>Course Name</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam--}}
{{--                            consequatur libero fugiat, similique quis.</p>--}}
{{--                    </figcaption>--}}
{{--                    <a href="#"></a>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 padleft-right">--}}
{{--                <figure class="imghvr-fold-up">--}}
{{--                    <img src="img/course04.jpg" class="img-responsive">--}}
{{--                    <figcaption>--}}
{{--                        <h3>Course Name</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam--}}
{{--                            consequatur libero fugiat, similique quis.</p>--}}
{{--                    </figcaption>--}}
{{--                    <a href="#"></a>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 padleft-right">--}}
{{--                <figure class="imghvr-fold-up">--}}
{{--                    <img src="img/course05.jpg" class="img-responsive">--}}
{{--                    <figcaption>--}}
{{--                        <h3>Course Name</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam--}}
{{--                            consequatur libero fugiat, similique quis.</p>--}}
{{--                    </figcaption>--}}
{{--                    <a href="#"></a>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-6 padleft-right">--}}
{{--                <figure class="imghvr-fold-up">--}}
{{--                    <img src="img/course06.jpg" class="img-responsive">--}}
{{--                    <figcaption>--}}
{{--                        <h3>Course Name</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam--}}
{{--                            consequatur libero fugiat, similique quis.</p>--}}
{{--                    </figcaption>--}}
{{--                    <a href="#"></a>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!--/ Courses-->--}}
{{--<!--Pricing-->--}}
{{--<section id="pricing" class="section-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="header-section text-center">--}}
{{--                <h2>Our Pricing</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores,--}}
{{--                    magni dolorum aliquam.</p>--}}
{{--                <hr class="bottom-line">--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="price-table">--}}
{{--                    <!-- Plan  -->--}}
{{--                    <div class="pricing-head">--}}
{{--                        <h4>Monthly Plan</h4>--}}
{{--                        <span class="fa fa-usd curency"></span> <span class="amount">200</span>--}}
{{--                    </div>--}}

{{--                    <!-- Plean Detail -->--}}
{{--                    <div class="price-in mart-15">--}}
{{--                        <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="price-table">--}}
{{--                    <!-- Plan  -->--}}
{{--                    <div class="pricing-head">--}}
{{--                        <h4>Quarterly Plan</h4>--}}
{{--                        <span class="fa fa-usd curency"></span> <span class="amount">800</span>--}}
{{--                    </div>--}}

{{--                    <!-- Plean Detail -->--}}
{{--                    <div class="price-in mart-15">--}}
{{--                        <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="price-table">--}}
{{--                    <!-- Plan  -->--}}
{{--                    <div class="pricing-head">--}}
{{--                        <h4>Year Plan</h4>--}}
{{--                        <span class="fa fa-usd curency"></span> <span class="amount">1200</span>--}}
{{--                    </div>--}}

{{--                    <!-- Plean Detail -->--}}
{{--                    <div class="price-in mart-15">--}}
{{--                        <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!--/ Pricing-->--}}
{{--<!--Contact-->--}}
{{--<section id="contact" class="section-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="header-section text-center">--}}
{{--                <h2>Contact Us</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores,--}}
{{--                    magni dolorum aliquam.</p>--}}
{{--                <hr class="bottom-line">--}}
{{--            </div>--}}
{{--            <div id="sendmessage">Your message has been sent. Thank you!</div>--}}
{{--            <div id="errormessage"></div>--}}
{{--            <form action="" method="post" role="form" class="contactForm">--}}
{{--                <div class="col-md-6 col-sm-6 col-xs-12 left">--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name"--}}
{{--                               data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>--}}
{{--                        <div class="validation"></div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"--}}
{{--                               data-rule="email" data-msg="Please enter a valid email"/>--}}
{{--                        <div class="validation"></div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"--}}
{{--                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>--}}
{{--                        <div class="validation"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-sm-6 col-xs-12 right">--}}
{{--                    <div class="form-group">--}}
{{--                        <textarea class="form-control" name="message" rows="5" data-rule="required"--}}
{{--                                  data-msg="Please write something for us" placeholder="Message"></textarea>--}}
{{--                        <div class="validation"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-xs-12">--}}
{{--                    <!-- Button -->--}}
{{--                    <button type="submit" id="submit" name="submit"--}}
{{--                            class="form contact-form-button light-form-button oswald light">SEND EMAIL--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--/ Contact-->
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">


        <form class="mc-trial row">
            <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
                <div class=" controls">
                    <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
                </div>
            </div>
            <!-- End email input -->
            <div class="form-group col-md-3 col-sm-4">
                <div class=" controls">
                    <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
                </div>
            </div>
            <!-- End email input -->
            <div class="col-md-2 col-sm-4">
                <p>
                    <button name="submit" type="submit" class="btn btn-block btn-submit">
                        Submit <i class="fa fa-arrow-right"></i></button>
                </p>
            </div>
        </form>
        <!-- End newsletter-form -->
        <ul class="social-links">
            <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
{{--        ©2016 Mentor Theme. All rights reserved--}}
{{--        <div class="credits">--}}
{{--            Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>--}}
{{--        </div>--}}
    </div>
</footer>
<!--/ Footer-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
