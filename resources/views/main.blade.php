{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">--}}
    {{--<title>Main</title>--}}
    {{--<link rel="stylesheet" href="../layui/css/layui.css">--}}
{{--</head>--}}

{{--<style>--}}
    {{--body{--}}
        {{--background-image: url(../layui/images/face/73.jpg);--}}
    {{--}--}}

{{--</style>--}}
{{--<body>--}}
{{--<h1 style="color: #411c0e;text-align: center">That's All.</h1>--}}


{{--<script src="../layui/layui.js"></script>--}}
{{--<script>--}}
    {{--//一般直接写在一个js文件中--}}
    {{--layui.use(['layer', 'form'], function(){--}}
        {{--var layer = layui.layer--}}
            {{--,form = layui.form;--}}

        {{--layer.msg('Bye Bye~');--}}
    {{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}




        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$site_name}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="{{$site_logo}}">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animate.min.css">
    <link rel="stylesheet" href="static/css/et-line-font.css">
    <link rel="stylesheet" href="static/css/nivo-lightbox.css">
    <link rel="stylesheet" href="static/css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-circle">
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="display: flex;align-items: center;"><img style="width: 65px;margin-top: 18px;" src="{{$site_logo}}"> </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">{{$nav->home}}</a></li>
                <li><a href="#work" class="smoothScroll">{{$nav->work}}</a></li>
                <li><a href="#about" class="smoothScroll">{{$nav->about}}</a></li>
                {{--<li><a href="#team" class="smoothScroll">{{$nav->team}}</a></li>--}}
                {{--<li><a href="#portfolio" class="smoothScroll">{{$nav->portfolio}}</a></li>--}}
                {{--<li><a href="#pricing" class="smoothScroll">{{$nav->pricing}}</a></li>--}}
                <li><a href="#contact" class="smoothScroll">{{$nav->contact}}</a></li>
                {{--<li><a href="#contact" class="smoothScroll">{{$nav->login}}</a></li>--}}


            </ul>
        </div>
    </div>
</section>

<!-- home section -->
<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3>{{$home->home_h3}}</h3>
                <h1>{{$home->home_h1}}</h1>
                <hr>
                <a href="#{{$home->home_btn1_href}}" class="smoothScroll btn btn-danger">{{$home->home_btn1}}</a>
                <a href="#{{$home->home_btn2_href}}" class="smoothScroll btn btn-default">{{$home->home_btn2}}</a>
            </div>
        </div>
    </div>
</section>
<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
<!-- work section -->
<section id="work">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <strong>01</strong>
                    <h1 class="heading bold">{{$work->work_h1}}</h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <i class="icon-cloud medium-icon"></i>
                <h3>{{$work->work_h3_1}}</h3>
                <hr>
                <p>{{$work->work_p_1}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                <i class="icon-mobile medium-icon"></i>
                <h3>{{$work->work_h3_2}}</h3>
                <hr>
                <p>{{$work->work_p_2}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <i class="icon-laptop medium-icon"></i>
                <h3>{{$work->work_h3_3}}</h3>
                <hr>
                <p>{{$work->work_p_3}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <i class="icon-compass medium-icon"></i>
                <h3>{{$work->work_h3_4}}</h3>
                <hr>
                <p>{{$work->work_p_4}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <i class="icon-chat medium-icon"></i>
                <h3>{{$work->work_h3_5}}</h3>
                <hr>
                <p>{{$work->work_p_5}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <i class="icon-browser medium-icon"></i>
                <h3>{{$work->work_h3_6}}</h3>
                <hr>
                <p>{{$work->work_p_6}}</p>
            </div>
        </div>
    </div>
</section>

<!-- about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>02</strong>
                    <h1 class="heading bold">{{$about->about_h1}}</h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{$about->about_img}}" class="img-responsive" alt="about img">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3 class="bold">{{$about->about_h3}}</h3>
                <h1 class="heading bold">{{$about->about_heading_h1}}</h1>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">{{$about->about_li1}}</a></li>
                    <li><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">{{$about->about_li2}}</a></li>
                    <li><a href="#social" aria-controls="social" role="tab" data-toggle="tab">{{$about->about_li3}}</a></li>
                </ul>
                <!-- tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="design">
                        <p>{{$about->about_p1}}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="mobile">
                        <p>{{$about->about_p2}}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="social">
                        <p>{{$about->about_p3}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- team section -->
{{--<section id="team">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 col-sm-12">--}}
{{--<div class="section-title">--}}
{{--<strong>03</strong>--}}
{{--<h1 class="heading bold">{{$teams->team_h1}}</h1>--}}
{{--<hr>--}}
{{--</div>--}}
{{--</div>--}}
{{--@foreach($teams->teams as $team)--}}
{{--<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">--}}
{{--<div class="team-wrapper">--}}
{{--<img src="{{$team->avatar}}" class="img-responsive" alt="team img">--}}
{{--<div class="team-des">--}}
{{--<h4>{{$team->name}}</h4>--}}
{{--<h3>{{$team->position}}</h3>--}}
{{--<hr>--}}
{{--<ul class="social-icon">--}}
{{--<li><a href="javascript:;" onclick="alert('{{$team->we_chat}}')" class="fa fa-weixin wow fadeIn" data-wow-delay="0.3s"></a></li>--}}
{{--<li><a href="{{$team->blog}}" target="_blank" class="fa fa-home wow fadeIn" data-wow-delay="0.6s"></a></li>--}}
{{--<li><a href="{{$team->github}}" target="_blank" class="fa fa-github wow fadeIn" data-wow-delay="0.9s"></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

<!-- portfolio section -->
{{--<div id="portfolio">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 col-sm-12">--}}
{{--<div class="section-title">--}}
{{--<strong>04</strong>--}}
{{--<h1 class="heading bold">OUR PORTFOLIO</h1>--}}
{{--<hr>--}}
{{--</div>--}}
{{--<!-- ISO section -->--}}
{{--<div class="iso-section">--}}
{{--<ul class="filter-wrapper clearfix">--}}
{{--<li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>--}}
{{--<li><a href="#" class="opc-main-bg" data-filter=".html">HTML</a></li>--}}
{{--<li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>--}}
{{--<li><a href="#" class="opc-main-bg" data-filter=".wordpress">Wordpress</a></li>--}}
{{--<li><a href="#" class="opc-main-bg" data-filter=".mobile">Mobile</a></li>--}}
{{--</ul>--}}
{{--<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">--}}
{{--<div class="iso-box-wrapper col4-iso-box">--}}

{{--<div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6">--}}
{{--<a href="static/images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="static/images/portfolio-img1.jpg" alt="portfolio img"></a>--}}
{{--</div>--}}

{{--<div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">--}}
{{--<a href="static/images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="static/images/portfolio-img2.jpg" alt="portfolio img"></a>--}}
{{--</div>--}}

{{--<div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6">--}}
{{--<a href="static/images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="static/images/portfolio-img3.jpg" alt="portfolio img"></a>--}}
{{--</div>--}}

{{--<div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">--}}
{{--<a href="static/images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="static/images/portfolio-img4.jpg" alt="portfolio img"></a>--}}
{{--</div>--}}

{{--<div class="iso-box html photoshop col-lg-4 col-md-4 col-sm-6">--}}
{{--<a href="static/images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="static/images/portfolio-img5.jpg" alt="portfolio img"></a>--}}
{{--</div>--}}

{{--<div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">--}}
{{--<a href="static/images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="static/images/portfolio-img6.jpg" alt="portfolio img"></a>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>		--}}

<!-- pricing section -->
{{--<section id="pricing">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 col-sm-12 text-center">--}}
{{--<div class="section-title">--}}
{{--<strong>05</strong>--}}
{{--<h1 class="heading bold">OUR PRICING</h1>--}}
{{--<hr>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4 col-sm-6">--}}
{{--<div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">--}}
{{--<div class="plan_title">--}}
{{--<i class="icon-mobile medium-icon"></i>--}}
{{--<h3>BASIC</h3>--}}
{{--<h2>$150 <span>per year</span></h2>--}}
{{--</div>--}}
{{--<ul>--}}
{{--<li>100 GB Cloud Storage</li>--}}
{{--<li>5 Pro Websites</li>--}}
{{--<li>10 Secured Emails</li>--}}
{{--<li>24-hour Support</li>--}}
{{--</ul>--}}
{{--<button class="btn btn-warning">Get it now</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4 col-sm-6">--}}
{{--<div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">--}}
{{--<div class="plan_title">--}}
{{--<i class="icon-desktop medium-icon"></i>--}}
{{--<h3>BUSINESS</h3>--}}
{{--<h2>$260 <span>per year</span></h2>--}}
{{--</div>--}}
{{--<ul>--}}
{{--<li>200 GB Cloud Storage</li>--}}
{{--<li>10 Pro Websites</li>--}}
{{--<li>20 Secured Emails</li>--}}
{{--<li>30-Minute Support</li>--}}
{{--</ul>--}}
{{--<button class="btn btn-warning">Take this!</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4 col-sm-6">--}}
{{--<div class="plan plan-three wow bounceIn" data-wow-delay="0.3s">--}}
{{--<div class="plan_title">--}}
{{--<i class="icon-cloud medium-icon"></i>--}}
{{--<h3>PROFESSIONAL</h3>--}}
{{--<h2>$380 <span>per year</span></h2>--}}
{{--</div>--}}
{{--<ul>--}}
{{--<li>500 GB Cloud Storage</li>--}}
{{--<li>20 Pro Websites</li>--}}
{{--<li>40 Secured Emails</li>--}}
{{--<li>Live Support</li>--}}
{{--</ul>--}}
{{--<button class="btn btn-warning">Buy Now</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>		--}}
{{--</section>--}}

<!-- contact section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>03</strong>
                    <h1 class="heading bold">联系我们</h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contact-info">
                <h2 class="heading bold">联系信息</h2>
                <p>您可以用以下方式联系我们</p>
                <div class="col-md-6 col-sm-4">
                    <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
                    <p>410152354@qq.com</p>
                </div>
                <div class="col-md-6 col-sm-4">
                    <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
                    <p>16639781001</p>
                </div>
            </div>
            {{--<div class="col-md-6 col-sm-12">--}}
            {{--<form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">--}}
            {{--<div class="col-md-6 col-sm-6">--}}
            {{--<input type="text" class="form-control" placeholder="Name" name="name">--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-6">--}}
            {{--<input type="email" class="form-control" placeholder="Email" name="email">--}}
            {{--</div>--}}
            {{--<div class="col-md-12 col-sm-12">--}}
            {{--<textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>--}}
            {{--</div>--}}
            {{--<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">--}}
            {{--<input type="submit" class="form-control" value="SEND MESSAGE">--}}
            {{--</div>--}}
            {{--</form>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

<!-- footer section -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p>Copyright © 模因网络科技</p>
                <hr>
                {{--<ul class="social-icon">--}}
                {{--<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>--}}
                {{--<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>--}}
                {{--<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>--}}
                {{--<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>--}}
                {{--<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </div>
</footer>


<script src="static/js/jquery.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/smoothscroll.js"></script>
<script src="static/js/isotope.js"></script>
<script src="static/js/imagesloaded.min.js"></script>
<script src="static/js/nivo-lightbox.min.js"></script>
<script src="static/js/jquery.backstretch.min.js"></script>
<script src="static/js/wow.min.js"></script>
<script src="static/js/custom.js"></script>
<script>
    // HOME BACKGROUND SLIDESHOW
    $(function(){
        jQuery(document).ready(function() {
            $('#home').backstretch([
                "{{$home->home_background1}}",
                "{{$home->home_background2}}",
            ],  {duration: 2000, fade: 750});
        });
    })
</script>

</body>
