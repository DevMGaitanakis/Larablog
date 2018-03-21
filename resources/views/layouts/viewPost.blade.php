<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Blog Details</title>

    <link rel="stylesheet" type="text/css" href="app/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="app/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="app/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="app/css/grid.css">
    <link rel="stylesheet" type="text/css" href="app/css/styles.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="app/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="app/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="app/css/owl.carousel.min.css">
    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
</style>
</head>


<body class=" ">

    @include('includes.header')


<div class="content-wrapper">
<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{$post->title}}</h1>
    </div>
</div>


<div class="container">
    <div class="row medium-padding120">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{$post->featured}}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link">{{$author}}</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" >
                                    {{$post->created_at->diffForHumans()}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">Business,</a>
                                <a href="#">Seo</a>
                            </span>

                        </div>

                        <div class="post__content-info">

                            <p class="post__subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore.
                            </p>

                            <p class="post__text">Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                lectorum. Mirum <span class="c-primary">est notare quam littera gothica</span>, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima
                                eodem modo typii quam nunc putamus parum claram, anteposuerit.
                            </p>

                            <div class="testimonial-item quote-left">

                                <h5 class="h5 testimonial-text">
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                    anteposuerit litterarum formas humanitatis placerat facer possim assum.
                                </h5>

                                <div class="author-info-wrap table">
                                    <div class="author-info table-cell">
                                        <h6 class="author-name c-primary">Angelina Johnson</h6>
                                        <div class="author-company">Envato Market</div>
                                    </div>
                                </div>

                                <div class="quote">
                                    <i class="seoicon-quotes"></i>
                                </div>

                            </div>

                            <p class="post__text">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                praesent luptatum quam nunc putamus parum claram, anteposuerit litterarum formas.
                            </p>

                            <h4 class="mb30">Qum Soluta Nobis Eleifend</h4>

                            <p class="post__text">Iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat <span class="c-dark">nulla facilisis at vero eros</span>
                                et accumsan et iusto odio dignissim qui blandit praesent luptatum quam nunc putamus parum claram.
                            </p>

                            <ul class="list list--secondary">
                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh <span class="c-primary">euismod tincidunt;</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Mirum est notare quam littera gothica;</a>
                                </li>
                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                        molestie consequat, vel illum dolore eu feugiat nulla;
                                    </a>
                                </li>
                                <li>
                                    <i class="seoicon-check"></i>
                                    <a href="#">Investigationes demonstraverunt lectores.</a>
                                </li>
                            </ul>

                            <p class="post__text">Quis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                et iusto odio dignissim qui blandit praesent quam nunc putamus parum claram.
                            </p>

                            <div class="widget w-tags">
                                <div class="tags-wrap">
                                    <a href="#" class="w-tags-item">SEO</a>
                                    <a href="#" class="w-tags-item">Advertising</a>
                                    <a href="#" class="w-tags-item">Business</a>
                                    <a href="#" class="w-tags-item">Optimization</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="socials">Share:
                        <a href="#" class="social__item">
                            <i class="seoicon-social-facebook"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-twitter"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-linkedin"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-google-plus"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-pinterest"></i>
                        </a>
                    </div>

                </article>

                <div class="blog-details-author">

                    <div class="blog-details-author-thumb">
                        <img src="app/img/blog-details-author.png" alt="Author">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">Philip Demarco</h5>
                            <p class="author-info">SEO Specialist</p>
                        </div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod.
                        </p>
                        <div class="socials">

                            <a href="#" class="social__item">
                                <img src="app/svg/circle-facebook.svg" alt="facebook">
                            </a>

                            <a href="#" class="social__item">
                                <img src="app/svg/twitter.svg" alt="twitter">
                            </a>

                            <a href="#" class="social__item">
                                <img src="app/svg/google.svg" alt="google">
                            </a>

                            <a href="#" class="social__item">
                                <img src="app/svg/youtube.svg" alt="youtube">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="pagination-arrow">

                    <a href="#" class="btn-prev-wrap">
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                            <p class="btn-content-subtitle">Claritas Est Etiam Processus</p>
                        </div>
                    </a>

                    <a href="#" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Previous Post</div>
                            <p class="btn-content-subtitle">Duis Autem Velius</p>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>

                </div>

                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>


            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="h1 heading-title">Other Articles</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>




                    </div>
                </aside>
            </div>
    </div>

</div>
<div class="owl-carousel owl-theme">
  @foreach($samecategoryposts as $samecategorypost)
  <div class="item"><h4>1</h4></div>
  @endforeach

    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

<script src="app/js/jquery-2.1.4.min.js"></script>
<script src="app/js/owl.carousel.min.js"></script>
<script src="app/js/crum-mega-menu.js"></script>
<script src="app/js/swiper.jquery.min.js"></script>
<script src="app/js/theme-plugins.js"></script>
<script src="app/js/main.js"></script>
<script src="app/js/form-actions.js"></script>
<script src="app/js/velocity.min.js"></script>
<script src="app/js/ScrollMagic.min.js"></script>
<script src="app/js/animation.velocity.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        }
    }
})
</script>
<!-- ...end JS Script -->

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/15_blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:10 GMT -->
</html>
