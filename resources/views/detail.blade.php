<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/bounty/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 08:34:48 GMT -->
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset('img/xfav.png.pagespeed.ic.kxfTH6g2UG.png')}}">

    <meta name="author" content="codepixer">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>{{$detail->title}}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/A.linearicons.css%2bfont-awesome.min.css%2bbootstrap.css%2bmagnific-popup.css%2bnice-select.css%2banimate.min.css%2bowl.carousel.css%2bmain.css%2cMcc.Ynbm4ZBB5d.css.pagespeed.cf.AL2QzNOntx.css')}}" />
    <script nonce="1a106d5c-6044-4a7e-a9a6-55ea456cef9c">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body>
<section class="header-top">
    <div class="container box_1170">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('img/logo.png')}}" alt="">
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
                    <li><a href="{{url('/')}}">Home</a></li>
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
<section class="blog_area section-gap single-post-area">
    <div class="container box_1170">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_details">
                    <img class="img-fluid" src="{{asset('uploads/product/'.$detail->imageOne)}}" alt="">
                    <h4>{{$detail->title}}</h4>
                    <div class="user_details">
                        <div class="float-left">
                            <a href="">{{$detail->category}}</a>
                        </div>
                        <div class="float-right">
                            <div class="media">
                                <div class="media-body">
                                    <p>{{$detail->created_at->diffForHumans()}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p>{{$detail->detailOne}}</p>
                    @if($detail->quote!=null)
                    <blockquote class="blockquote">
                        <p class="mb-0">"{{$detail->quote}}"</p>
                    </blockquote>
                    @endif
                    <p>{{$detail->detailTwo}}</p>
                    @if($detail->imageTwo!=null)
                    <img class="img-fluid" src="{{asset('uploads/product/'.$detail->imageTwo)}}" alt="">
                    @endif

                </div>
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
</section>


@include('footer')
<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('js/vendor%2c_bootstrap.min.js%2beasing.min.js%2bhoverIntent.js%2bsuperfish.min.js%2bjquery.ajaxchimp.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.Yfv98U6Axs.js')}}"></script><script>eval(mod_pagespeed_WM6zbjjowO);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script>eval(mod_pagespeed_ZSMIky3ssu);</script>
<script>eval(mod_pagespeed_6h4lkACYMS);</script>
<script>eval(mod_pagespeed_e0jqbpTeaE);</script>
<script>eval(mod_pagespeed_tMCFAwwIcJ);</script>
<script>eval(mod_pagespeed_n2OGoUaN_k);</script>
<script src="{{asset('js/owl.carousel.min.js%2bjquery.tabs.min.js%2bjquery.nice-select.min.js%2bwaypoints.min.js%2bmail-script.js%2bmain.js.pagespeed.jc.6_KGHDxtOy.js')}}"></script><script>eval(mod_pagespeed_OjVYEhRE1w);</script>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7057a6572a35cb7f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bounty/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 08:34:59 GMT -->
</html>
