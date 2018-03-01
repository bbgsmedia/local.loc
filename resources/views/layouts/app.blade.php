<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="assets/img/favicon.ico">
    <title>{{ config('app.name', 'BBGS') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Jasny CSS -->
    <link href="{{ asset('assets/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Code CSS -->
    <link href="{{ asset('assets/css/tomorrow-night.css') }}" rel="stylesheet">
    <!-- Gallery CSS -->
    <link href="{{ asset('assets/css/bootstrap-gallery.css') }}" rel="stylesheet">
    <!-- ColorBox CSS -->
    <link href="{{ asset('assets/css/colorbox.css') }}" rel="stylesheet">
    <!-- Custom font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <!-- Un Compressor
    <link href="assets/css/style.css" rel="stylesheet"> -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page-loader">
    <div class="loader-in">Loading...</div>
    <div class="loader-out">Loading...</div>
</div>

<aside class="navmenu">
    <div class="post-titles">
        <div class="tag-title">
            <div class="container">
                <p class="tags" id="post-titles">
                    <a data-filter=".pt-fashion" href="#">fashion</a>
                    <a data-filter=".pt-culture" href="#">culture</a>
                    <a data-filter=".pt-art" href="#">art</a>
                    <a data-filter="*" href="#" class="unfilter hide">all</a>
                </p>
            </div>
        </div>
        <button type="button" class="remove-navbar"><i class="fa fa-times"></i></button>
        <ul class="post-title-list clearfix">
            <li class="pt-fashion pt-culture">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Five simple steps to designing grid systems preface</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 28</span>   •   
                        <span>2 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-culture pt-art">
                <div>
                    <h5>
                        <i>26</i>
                        <a href="#">Hemingway: A Text Editor That Cares About What You Write</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 26</span>   •   
                        <span>2 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-art">
                <div>
                    <h5>
                        <i class="fa fa-link"></i>
                        <a href="#">Mobile Design Inspiration and Creativity</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 25</span>   •   
                        <span>4 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-culture">
                <div>
                    <h5>
                        <i class="fa fa-comment"></i>
                        <a href="#">Envato Stories: Coming August 2014</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 24</span>   •   
                        <span>3 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-culture pt-art">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Meet #59 Interface Designer Kerem Suer</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 24</span>   •   
                        <span>6 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-art">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Founders, Travel and Epic Beards: What Happens After Envato</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 22</span>   •   
                        <span>12 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-culture">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Why Designers Make Good Founders (and Cofounders)</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 21</span>   •   
                        <span>9 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-culture pt-art">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Getting Your Team Through the Storm A Good Product Designer...</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 20</span>   •   
                        <span>16 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-art">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Introducing LaRead Chat Post</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 18</span>   •   
                        <span>24 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-culture">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">The Future of WordPress</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 16</span>   •   
                        <span>13 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-culture pt-art">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Workshop: Brand Asset Management</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 16</span>   •   
                        <span>8 Comments</span>
                    </div>
                </div>
            </li>
            <li class="pt-fashion pt-art">
                <div>
                    <h5>
                        <i class="fa fa-file-text-o"></i>
                        <a href="#">Long Live The Kings - Short Film</a>
                    </h5>
                    <div class="post-subinfo">
                        <span>June 12</span>   •   
                        <span>26 Comments</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div class="canvas">
    <div class="canvas-overlay"></div>
    <header>
        <nav class="navbar navbar-fixed-top navbar-laread">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="large-image-v1-2.html"><img height="64" src="assets/img/logo-light.png" alt=""></a>
                </div>
                <div class="get-post-titles">
                    <button type="button" class="navbar-toggle push-navbar" data-navbar-type="default">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <a href="#" data-toggle="modal" data-target="#login-form" class="modal-form">
                    <i class="fa fa-user"></i>
                </a>
                <button type="button" class="navbar-toggle collapsed menu-collapse" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-plus"></i>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOME</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="large-image-v1-1.html">Large Image v1</a></li>
                                <li><a href="large-image-v2-1.html">Large Image v2</a></li>
                                <li><a href="medium-image-v1-1.html">Medium Image v1</a></li>
                                <li><a href="medium-image-v2-1.html">Medium Image v2</a></li>
                                <li><a href="masonry-1.html">Masonry</a></li>
                                <li><a href="banner-v1.html">BannerMode v1</a></li>
                                <li><a href="banner-v2.html">-v2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">GALLERY</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="gallery-v1.html">Gallery v1</a></li>
                                <li><a href="gallery-v2.html">Gallery v2</a></li>
                                <li><a href="gallery-v3.html">Gallery v3</a></li>
                                <li><a href="gallery-v4.html">Gallery v4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PAGES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about-v1.html">About v1</a></li>
                                <li><a href="about-v2.html">-v2</a></li>
                                <li><a href="authors.html">Authors</a></li>
                                <li><a href="author-detail.html">Author Detail</a></li>
                                <li><a href="archive.html">Archive</a></li>
                                <li><a href="contact-v1.html">Contact v1</a></li>
                                <li><a href="contact-v2.html">-v2</a></li>
                                <li><a href="404.html">Not Found</a></li>
                                <li><a href="newsletter.html" target="_blank">Newsletter</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FEATURES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="widget.html">Widgets</a></li>
                                <li><a href="typography-1.html">Typography -1</a></li>
                                <li><a href="typography-2.html">-2</a></li>
                                <li><a href="typography-3.html">-3</a></li>
                                <li><a href="typography-4.html">-4</a></li>
                                <li><a href="shortcode-1.html">Shortcode -1</a></li>
                                <li><a href="shortcode-2.html">-2</a></li>
                                <li><a href="shortcode-3.html">-3</a></li>
                                <li><a href="shortcode-4.html">-4</a></li>

                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div>
        </nav>
    </header>

    <div class="container">
        <div class="head-text">
            <h1>LaRead</h1>
            <p class="lead-text">Blog. Designed for Read.</p>
        </div>
    </div>

    <div class="post-fluid large-image-v1">
        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="post-item-banner">
                        <img src="assets/img/banner-40.jpg" alt="" />
                    </div>
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">28</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="post-item-paragraph">
                                <h2><a href="#" class="quick-read"><i class="fa fa-eye"></i></a><a href="#">Meet #59 Interface Designer John Doe</a></h2>
                                <p class="ellipsis-fade-six">Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst. Mauris non libero ligula, sed volutpat mauris. Duis facilisis elementum nisl, non aliquam enim tincidunt vitae. Donec laoreet est vitae erat auctor porttitor. Curabitur orci enim, congue at egestas a, feugiat luctus massa. Sed risus quam, dignissim a commodo sed, semper ac dolor. Nulla facilisi. Suspendisse nunc leo, hendrerit vestibulum pharetra in, consectetur quis sapien. Nunc facilisis pulvinar tempor.Mauris fermentum fringilla lorem, in rutrum massa sodales et. <a href="#" class="more"></a></p>
                            </div>
                            <div class="post-item-info clearfix">
                                <div class="pull-left">
                                    By <a href="#">Daniele Zedda</a>   •   <a href="#">12 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">26</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="post-item-paragraph">
                                <h2><a href="#" class="quick-read"><i class="fa fa-eye"></i></a><a href="#">Workshop: Brand Asset Management</a></h2>
                                <p>Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst. Mauris non libero ligula, sed volutpat mauris. Duis facilisis elementum nisl, non aliquam enim tincidunt vitae. Donec laoreet est vitae erat auctor porttitor. Curabitur orci enim, congue at egestas a, feugiat luctus massa. Sed risus quam, dignissim a commodo sed, semper ac dolor. <a href="#" class="more">[...]</a></p>
                            </div>
                            <div class="post-item-info clearfix">
                                <div class="pull-left">
                                    By <a href="#">Morris Math</a>   •   <a href="#">19 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="post-item-banner lg-banner">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/banner-41.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="assets/img/banner-42.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="assets/img/banner-43.jpg" alt="" />
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">25</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="post-item-paragraph">
                                <h2><a href="#" class="quick-read"><i class="fa fa-eye"></i></a><a href="#">Harbiye Open Air Concerts</a></h2>
                                <p class="six-lines">Ornare turpis vel ipsum vulputate lacinia. Pellentesque blandit sagittis tempor. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, lorem eget fringilla libero sagittis animous ledra sitemah eget. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst. Mauris non libero ligula, sed volutpat mauris. Duis facilisis elementum nisl, non aliquam enim tincidunt vitae. Donec laoreet est vitae erat auctor porttitor. Curabitur orci enim, congue at egestas a, feugiat luctus massa. Sed risus quam, dignissim a commodo sed, semper ac dolor. Nulla facilisi. Suspendisse nunc leo, hendrerit vestibulum pharetra in, consectetur quis sapien. </p>

                            </div>
                            <div class="post-item-info clearfix">
                                <div class="pull-left">
                                    By <a href="#">Gannon Burget</a>   •   <a href="#">31 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="post-item-banner embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/49445992" class="embed-responsive-item" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">23</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="post-item-paragraph">
                                <h2><a href="#" class="quick-read"><i class="fa fa-eye"></i></a><a href="#">Long Live The Kings - Short Film</a></h2>
                                <p class="ellipsis-fade-six">Sed vel magna leo, in pretium nunc. Ut ornare turpis vel ipsum vulputate lacinia. Pellentesque blandit sagittis tempor. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet <a href="#" class="more"></a></p>
                            </div>
                            <div class="post-item-info clearfix">
                                <div class="pull-left">
                                    By <a href="#">Justin Freen</a>   •   <a href="#">23 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="post-item-banner embed-responsive embed-responsive-16by9">
                        <iframe  class="embed-responsive-item" src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/186983384&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
                    </div>
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">23</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="post-item-paragraph">
                                <h2><a href="#" class="quick-read"><i class="fa fa-eye"></i></a><a href="#">Show Me Love (Out Now)</a></h2>
                                <p>Sed vel magna leo, in pretium nunc. Ut ornare turpis vel ipsum vulputate lacinia. Pellentesque blandit sagittis tempor. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. <a href="#" class="more">[...]</a></p>
                            </div>
                            <div class="post-item-info clearfix">
                                <div class="pull-left">
                                    By <a href="#">Gannon Burget</a>   •   <a href="#">62 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">22</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="in-quote">
                                <img src="assets/img/banner-44.jpg" alt="" />
                                <div class="block-overlay">
                                    <div class="overlay-quote">
                                        <span class="quote-icon">“</span>
                                        <a href="#" class="spot">The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack of will.</a>
                                        <span class="name">- Vince Lombardi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item-info no-border clearfix">
                                <div class="pull-left">
                                    By <a href="#">Daniele Zedda</a>   •   <a href="#">46 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row post-items">
                    <div class="col-md-2">
                        <div class="post-item-short">
                            <span class="big-text">21</span>
                            <span class="small-text">June 2015</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="post-item">
                            <div class="in-link">
                                <img src="assets/img/banner-45.jpg" alt="" />
                                <div class="block-overlay">
                                    <div class="overlay-link">
                                        <i class="fa fa-link fa-rotate-90"></i>
                                        <a href="#">http://themeforest.net/category/wordpress</a>
                                        <span class="link-text">Inside - Personal or Corparete<br />Flexible and Multipurpose WP Theme</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item-info no-border clearfix">
                                <div class="pull-left">
                                    By <a href="#">Jared Erondu</a>   •   <a href="#">18 Comments</a>
                                </div>
                                <div class="post-item-social">
                                    <a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row default-post-nav">
        <div class="container">
            <div class="col-md-10 col-md-offset-2">
                <a href="large-image-v1-2.html" class="post-nav post-older">OLDER →</a>
            </div>
        </div>
    </div>

    <footer class="container-fluid footer">
        <div class="container text-center">
            <div class="footer-logo"><img src="assets/img/logo-black.png" alt=""></div>
            <p class="laread-motto">Designed for Read.</p>
            <div class="laread-social">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-pinterest"></a>
            </div>
        </div>
    </footer>
</div>

<div id="quick-read" class="qr-white-theme">
    <div class="quick-read-head">
        <div class="container">
            <a href="#" class="qr-logo"></a>
            <div class="qr-tops">
                <a href="#" class="qr-search-close"><i class="fa fa-times"></i></a>
                <a href="#" class="qr-search"><i class="fa fa-search"></i></a>
                <a href="#" class="qr-change"><i class="fa fa-adjust"></i></a>
                <a href="#" class="qr-close"><i class="fa fa-times"></i></a>
            </div>
            <form class="qr-search-form">
                <input type="text" placeholder="Search LaRead">
            </form>
        </div>
    </div>
    <div class="quick-dialog">
        <div class="quick-body">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="qr-content post-item-paragraph">

                        <article>
                            <h2>A Nice Street Cafe in London</h2>

                            <p>Consectetur adipiscing elit. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst.</p>

                            <p>What if instead your website used machine learning to build itself, and then rebuilt as necessary, based on data it was gathering about how it was being used? That's what The Grid is aiming to do. After you add content such as pictures, text, the stuff everyone enjoys interacting with your obligation to design...</p>

                            <h4>The Truth about Teens and Privacy</h4>

                            <p>Social media has introduced a new dimension to the well-worn fights over private space and personal expression. Teens do not want their parents to view their online profiles or look over their shoulder when they’re chatting with friends. Parents are no longer simply worried about what their children wear out of the house but what they photograph themselves wearing in their bedroom to post online. Interactions that were previously invisible to adults suddenly have traces, prompting parents to fret over.</p>

                            <h4>Here are some of the ways you may be already being hacked:</h4>

                            <ul class="in-list">
                                <li>Everyone makes mistakes</li>
                                <li>You can control only your behavior</li>
                                <li>Good habits create discipline</li>
                                <li>Remember the <u>big picture</u></li>
                                <li>Everyone learns differently</li>
                                <li>Focus on the Benefits, Not the Difficulties</li>
                                <li>Traditions are bonding opportunities</li>
                            </ul>

                            <p>This is not a comprehensive list. Rather, it is a snapshot in time of real-life events that are happening right now. In the future, we will likely read this list and laugh at all the things I failed to envision.</p>
                            <p class="with-img">
                                <a href="assets/img/banner-85-1.jpg" data-fluidbox-qr><img src="assets/img/banner-85.jpg" alt=""></a>
                                <span class="img-caption">Walk through the Forest</span>
                            </p>
                            <p>Elit try-hard consectetur, dolore voluptate minim distillery. Bespoke Cosby sweater pug street art et keytar. Nihil fish whatever trust fund, dreamcatcher in fingerstache squid seitan accusamus. Organic Wes Anderson High Life setruhe authentic iPhone, aute art party hashtag fixie church-key art veniam Tumblr polaroid. DIY polaroid vinyl, sustainable hella scenester accusamus fanny pack. Ut Neutra enim pariatur cornhole actually Banksy, tote bag fugiat ad accusamus. Incididunt fixie normcore fingerstache. Freegan proident literally brunch before they sold out.
                            </p>

                            <p>Readymade fugiat narwhal, typewriter VHS aute stumptown hoodie irure put a bird on it. Fashion axe raw denim brunch put a bird on it voluptate Truffaut. Bitters PBR&amp;B nulla Odd Future swag leggings. Banh mi Wes Anderson butcher letterpress skateboard quis. Chambray hella retro viral Cosby sweater photo booth. Schlitz elit Cosby sweater, Blue Bottle non chambray chia. Single-origin coffee pickled.</p>

                            <h5>Blockquote</h5>

                            <p>Do officia aliqua, pop-up ut et occupy sriracha. YOLO meggings PBR sartorial mollit, Schlitz assumenda vero kitsch plaid post-ironic PBR&amp;B keffiyeh. Cosby sweater wolf YOLO Austin bespoke, American Apparel crucifix paleo flexitarian. Aliquip bitters food truck, incididunt tofu accusamus magna nesciunt typewriter drinking vinegar Shoreditch try-hard you probably haven’t heard of them labore. </p>

                            <blockquote>
                                <p><i>“The Muppets Take Manhattan”</i><br />
                                    This movie was a disappointment. The Muppets do not take Manhattan at all. They merely visit it.<br />
                                    <span>— No stars.</span></p>
                            </blockquote>

                            <p>Do officia aliqua, pop-up ut et occupy sriracha. YOLO meggings PBR sartorial mollit, Schlitz assumenda vero kitsch plaid post-ironic PBR&amp;B keffiyeh. Cosby sweater wolf YOLO Austin bespoke, American Apparel crucifix paleo flexitarian. Aliquip bitters food truck, incididunt tofu accusamus.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quick-read-bottom">
        <p class="qr-info">By <a href="#">Daniele Zedda</a>   •   18 February</p>
        <div class="qr-nav">
            <a href="#" class="qr-prev">← PREV POST</a>
            <a href="#" class="qr-share" tabindex="0" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>"><i class="fa fa-share-alt"></i></a>
            <a href="#" class="qr-comment"><i class="fa fa-comment"></i></a>
            <a href="#" class="qr-like"><i class="fa fa-heart"></i> 34</a>
            <a href="#" class="qr-next">NEXT POST →</a>
        </div>
    </div>
    <div class="quick-read-bottom qr-bottom-2 hide">
        <div class="qr-nav">
            <a href="#" class="qr-prev">← PREV POST</a>
            <p class="qr-info">By <a href="#">Daniele Zedda</a>   •   18 February</p>
            <a href="#" class="qr-next">NEXT POST →</a>
            <a href="#" class="qr-like"><i class="fa fa-heart"></i> 34</a>
            <div class="qr-sharebox">
                <span>Share on</span>
                <a href='#'><i class='fa fa-facebook'></i></a>
                <a href='#'><i class='fa fa-twitter'></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal leread-modal fade" id="login-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="login-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>LaRead Sign In</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="linkbox">
                        <a href="#">Forgot password ?</a>
                        <span>No account ? <a href="#" id="register-btn" data-toggle="modal" data-target="#register-form">Sign Up.</a></span>
                        <span class="form-warning"><i class="fa fa-exclamation"></i>Fill the require.</span>
                    </div>
                    <div class="linkbox">
                        <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
                        <button type="button" class="btn btn-golden btn-signin">SIGN IN</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="provider">
                    <span>Sign In With</span>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="modal-content" id="register-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-lock"></i>LaRead Sign Up</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password">
                    </div>
                    <div class="linkbox">
                        <span>Already got account? <a href="#" id="login-btn" data-target="#login-form">Sign In.</a></span>
                    </div>
                    <div class="linkbox">
                        <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
                        <button type="button" class="btn btn-golden btn-signin">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/prettify.js') }}"></script>
<script src="{{ asset('assets/js/lang-css.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blueimp-gallery.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
<script src="{{ asset('assets/js/masonry.js') }}"></script>
<script src="{{ asset('assets/js/viewportchecker.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/calendar.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ellipsis.min.js') }}"></script>
<script src="{{ asset('assets/js/classie.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/js/uiProgressButton.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('assets/js/jquery.dotdotdot.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/js/gmaps.js') }}"></script>
<script src="{{ asset('assets/js/screenfull.js') }}"></script>
<script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>

<!-- Localized -->