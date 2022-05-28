<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/bounty/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 08:32:58 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PM8TXDL');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.png">

    <meta name="author" content="codepixer">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>Trending News Updates</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">

    <link rel="stylesheet" href="css/linearicons.css%2bfont-awesome.min.css%2bbootstrap.css%2bmagnific-popup.css%2bnice-select.css%2banimate.min.css%2bowl.carousel.css%2bmain.css.pagespeed.cc.Ynbm4ZBB5d.css" />
    <script nonce="14fd3143-e755-4894-aafd-60e3819e467c">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM8TXDL"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="header-top">
    <div class="container box_1170">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="{{url('/')}}" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
            </div>

        </div>
    </div>
</section>


<header id="header">
    <div class="container box_1170 main-menu">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li style="background-color:red"><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('news')}}">News</a></li>
                    <li><a href="{{url('entertainment')}}">Entertainment</a></li>
                    <li><a href="{{url('sports')}}">Sports</a></li>
                    <li><a href="{{url('tech')}}">Tech</a></li>
                    <li><a href="{{url('lifestyle')}}">Lifestyle</a></li>
                    <li><a href="{{url('business')}}">Business</a></li>
                    <li>   <a href="#" class="search">
                            <i class="lnr lnr-magnifier" id="search"></i></a>
                        </li>
                </ul>
            </nav>

        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container box_1170">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>


<section class="top-stories-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel active-stories-carousel">
                    @foreach($ones as $one)
                    <div class="single-stories-carousel d-flex align-items-center">
                        <div class="stories-thumb">
                            <a href="{{url('detail',$one->id)}}"><img class="img-fluid" src="{{asset('uploads/product/'.$one->image)}}" alt=""></a>
                        </div>
                        <div class="stories-details">
                            <h6><a href="{{url('detail',$one->id)}}">{{\Illuminate\Support\Str::of($one->title)->words(7)}}</a></h6>
                            <p>{{$one->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<section class="post-slider-area">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="owl-carousel active-post-carusel">
                    @foreach($twos as $two)

                    <div class="single-post-carousel">
                        <div class="post-thumb">
                            <img class="img-fluid" src="{{asset('uploads/product/'.$two->image)}}" alt="">
                        </div>
                        <div class="post-details">
                            <h2><a href="{{url('detail',$two->id)}}">{{\Illuminate\Support\Str::of($two->title)->words(10)}}</a></h2>
                            <div class="post-content d-flex justify-content-between">
                                <div class="post-meta">
                                    <div class="c-desc">
                                        <p><span class="lnr lnr-calendar-full"></span>{{$two->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-body section-gap">
    <div class="container box_1170">
        <h3>TRENDING</h3>
<br>
        <div class="row">
            <div class="col-lg-8 post-list">

                <section class="post-area">
                    <div class="row">
                        @foreach($threes as $three)

                        <div class="col-lg-6 col-md-6">
                            <div class="single-post-item">
                                <div class="post-thumb">
                                    <a href="{{url('detail',$three->id)}}"><img class="img-fluid" src="{{asset('uploads/product/'.$three->image)}}" alt=""></a>
                                </div>
                                <div class="post-details">
                                    <h4><a href="{{url('detail',$three->id)}}">{{\Illuminate\Support\Str::of($three->title)->words(10)}}</a></h4>
                                    <div class="blog-meta">
                                        <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>{{$three->created_at->diffForHumans()}}</a>
                                        <a href="#" class="m-gap"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-12">
                            <nav class="blog-pagination justify-content-center d-flex">
                                <button class="btn btn-info">Load More</button>
                            </nav>
                        </div>
                    </div>
                </section>

            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-widget popular-posts-widget">
                    <div class="jq-tab-wrapper" id="horizontalTab">
                        <div class="jq-tab-menu">
                            <div class="jq-tab-title active" data-tab="1">Top Stories</div>
                        </div>
                        <div class="jq-tab-content-wrapper">
                            <div class="jq-tab-content active" data-tab="1">
                                @foreach($fours as $four)
                                <div class="single-popular-post d-flex flex-row">
                                    <div class="popular-thumb">
                                        <a href="{{url('detail',$four->id)}}"><img class="img-fluid" src="{{asset('uploads/product/'.$four->image)}}" alt=""></a>
                                    </div>
                                    <div class="popular-details">
                                        <h6><a href="{{url('detail',$four->id)}}">{{\Illuminate\Support\Str::of($four->title)->words(10)}}</a></h6>
                                        <p>{{$four->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-widget category-widget">
                    <h4 class="title">Post Categories</h4>
                    <ul>
                        <li>
                            <a href="#" class="justify-content-between align-items-center d-flex">
                                <p><img src="img/bullet.png" alt="">International (56)</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="justify-content-between align-items-center d-flex">
                                <p><img src="img/bullet.png" alt="">Tours and Travels (45)</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="justify-content-between align-items-center d-flex">
                                <p><img src="img/bullet.png" alt="">Cooking Tips (23)</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="justify-content-between align-items-center d-flex">
                                <p><img src="img/bullet.png" alt="">Life Style and Fashion (72)</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="justify-content-between align-items-center d-flex">
                                <p><img src="img/bullet.png" alt="">Organic News (37)</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="justify-content-between align-items-center d-flex">
                                <p><img src="img/bullet.png" alt="">Games and Sports (19)</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="single-widget tags-widget">
                    <h4 class="title">Post Tags</h4>
                    <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Art</a></li>
                        <li><a href="#">Adventure</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Techlology</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Technology</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor%2c_bootstrap.min.js%2beasing.min.js%2bhoverIntent.js%2bsuperfish.min.js%2bjquery.ajaxchimp.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.Yfv98U6Axs.js"></script><script>eval(mod_pagespeed_WM6zbjjowO);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script>eval(mod_pagespeed_ZSMIky3ssu);</script>
<script>eval(mod_pagespeed_6h4lkACYMS);</script>
<script>eval(mod_pagespeed_e0jqbpTeaE);</script>
<script>eval(mod_pagespeed_tMCFAwwIcJ);</script>
<script>eval(mod_pagespeed_n2OGoUaN_k);</script>
<script src="js/owl.carousel.min.js%2bjquery.tabs.min.js%2bjquery.nice-select.min.js%2bwaypoints.min.js%2bmail-script.js%2bmain.js.pagespeed.jc.6_KGHDxtOy.js"></script><script>eval(mod_pagespeed_OjVYEhRE1w);</script>
<script>eval(mod_pagespeed_J2i7QIsZbQ);</script>
<script>eval(mod_pagespeed_DMnjQBhggl);</script>
<script>eval(mod_pagespeed_MjBkX20jQa);</script>
<script>eval(mod_pagespeed_Kn5L14EbMv);</script>
<script>eval(mod_pagespeed_0s$voUK9ok);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7057a62b4fc9cb7f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bounty/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 08:33:42 GMT -->
</html>
