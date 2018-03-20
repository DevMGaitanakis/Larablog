<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{$title}}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css')}}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css')}}">

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

    <style>

    .first-section{
    margin-bottom: 150px;
    }
    .post-additional-info.first-posts  {
        position: absolute;
        bottom: 0px;
        left: 34px;
        color: white;
        background: rgba(247, 249, 249, 0.38);
        left: 15px;
        width: calc( 100% - 30px );
        padding-left: 23px;
    }
    .post-additional-info.first-posts a  {
        color: white;
    }
    .post-additional-info.first-posts span {
        margin-right: 23px;
    }
    .post-title {
      position: absolute;
      left: 39px;
      font-size: 25px;
      background: rgba(0, 0, 0, 0.08);
      left: 15px;
      padding-left: 23px;
      width: calc( 100% - 30px );
      }
      .post-title a{
        color: white;
        }
      .first-post-img{
        height: 420px;
      }
      .second-post-img{
        height: 200px;
        width: 100%;
      }
      .third-post-img{
        height: 200px;
        width: 100%;
      }
    </style>

</head>


<body class=" ">
<div class="content-wrapper">
    @include('includes.header')
    <div class="header-spacer"></div>
    <div class="container">
          <div class="row first-section">
              <div class="col-lg-6">
                <div class="article-boxes-after-head">
                  <div class="post-title">
                    <a href="{{ route('viewPost.page',['slug' => $first_post->slug]) }}">{{$first_post->title}} aa</a>
                  </div>
                 <img src="{{$first_post->featured}}" alt="" class="img-responsive first-post-img">
                   <div class="post-additional-info first-posts">
                       <span class="date">
                           <i class="seoicon-clock"></i>
                           <time class="published">
                               {{$first_post->created_at->diffForHumans()}}
                           </time>
                       </span>
                       <span class="category">
                           <i class="seoicon-tags"></i>
                           <a href="{{ route('viewPost.page',['slug' => $first_post->slug]) }}">{{$first_post->category->name}}</a>
                       </span>
                       <span class="post__comments">
                           <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                           6
                       </span>
                   </div>
               </div>
              </div>

              <div class="col-lg-6 ">
                  <div class="col-lg-12"  style="margin-bottom:20px">
                      <div class="article-boxes-after-head">
                        <div class="post-title">
                          <a href="{{ route('viewPost.page',['slug' => $second_post->slug]) }}">{{$second_post->title}}</a>
                        </div>
                    <img src="{{$second_post->featured}}" alt="" class="img-responsive second-post-img">
                    <div class="post-additional-info first-posts">
                        <span class="category">
                            <i class="seoicon-tags"></i>
                            <a href="{{ route('viewPost.page',['slug' => $first_post->slug]) }}">{{$second_post->category->name}}</a>
                        </span>
                        <span class="post__comments">
                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                            6
                        </span>
                    </div>
                  </div>
                  </div>

                  <div class="col-lg-12">
                      <div class="article-boxes-after-head">
                        <div class="post-title">
                          <a href="{{ route('viewPost.page',['slug' => $third_post->slug]) }}">{{$third_post->title}}</a>
                        </div>
                    <img src="{{$third_post->featured}}" alt="" class="img-responsive third-post-img">
                    <div class="post-additional-info first-posts">
                        <span class="category">
                            <i class="seoicon-tags"></i>
                            <a href="{{ route('viewPost.page',['slug' => $third_post->slug]) }}">{{$third_post->category->name}}</a>
                        </span>
                        <span class="post__comments">
                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                            6
                        </span>
                    </div>
                  </div>
                  </div>
              </div>
          </div>

        <div class="row">
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="app/img/2.png" alt="seo">
                            <div class="overlay"></div>
                            <a href="app/img/2.png" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title ">
                                        <a href="{{ route('viewPost.page',['slug' => $fourth_post->slug]) }}">{{$fourth_post->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published">
                                              {{$fourth_post->created_at->diffForHumans()}}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{ route('viewPost.page',['slug' => $fourth_post->slug]) }}">{{$fourth_post->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="app/img/3.jpg" alt="seo">
                            <div class="overlay"></div>
                            <a href="app/img/3.jpg" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">
                            <div class="post__content-info">
                                    <h2 class="post__title entry-title ">
                                        <a href="{{ route('viewPost.page',['slug' => $fifth_post->slug]) }}">{{$fifth_post->title}}</a>
                                    </h2>
                                    <div class="post-additional-info">
                                        <span class="post__date">
                                            <i class="seoicon-clock"></i>
                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$fifth_post->created_at->diffForHumans()}}
                                            </time>
                                        </span>
                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{$fourth_post->category->name}}</a>
                                        </span>
                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row padded-50 bg-border-color">
            <div class="container">
                <div class="offers">
@foreach($categories as $category)
  <div class="padded-50"></div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">{{$category->name}}</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($category->posts()->take(3)->get() as $post)
                        <div class="case-item-wrap">

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$post->featured}}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="{{ route('viewPost.page',['slug' => $post->slug]) }}">{{$post->title}}</a></h6>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
@endforeach

            </div>
          </div>
        </div>
      </div>
    </div>

    <footer style="height:250px; background:black">

    </footer>
<!-- End Overlay Search -->
<!-- JS Script -->
<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>
<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>


<!-- ...end JS Script -->

</body>
</html>
