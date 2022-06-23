<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/newsbit/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jun 2022 05:57:12 GMT -->
<head>
    <title>Home - Trending News Updates</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('images/fav.png')}}">

    <link href="A.plugin-frameworks%2c%2c_bootstrap.css%2bfonts%2c%2c_ionicons.css%2bcommon%2c%2c_styles.css%2cMcc.2MZeWeb18u.css.pagespeed.cf.TWQ6SgV67V.css" rel="stylesheet" />
    <script nonce="034e3b8f-1b4b-47f6-a1d6-d6ce2596d4f0">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4317286144362168"
        crossorigin="anonymous"></script>
<body>
<header>
    <div class="container">
        <a class="logo" href="{{url('/')}}"><img src="images/blogo.png" alt="Logo"></a>
        <a class="right-area src-btn" href="#">
            <i class="active src-icn ion-search"></i>
            <i class="close-icn ion-close"></i>
        </a>
        <div class="src-form">
            <form action="{{url('sear')}}" method="post">
                @csrf
                <input type="text" name="searchBlog" placeholder="Search here">
                <button type="submit"><i class="ion-search"></i></button>
            </form>
        </div>
        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
        <ul class="main-menu" id="main-menu">
            <li><a href="{{url('news')}}">NEWS</a></li>
            <li><a href="{{url('entertainment')}}">ENTERTAINMENT</a></li>
            <li><a href="{{url('sports')}}">SPORTS</a></li>
            <li><a href="{{url('tech')}}">TECH</a></li>
            <li><a href="{{url('lifestyle')}}">LIFESTYLE</a></li>
            <li><a href="{{url('business')}}">BUSINESS</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</header>
<div class="container">
    <div class="h-600x h-sm-auto">
        <div class="h-2-3 h-sm-auto oflow-hidden">
            <div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
                <a class="pos-relative h-100 dplay-block" href="{{url('blog',['id'=>$one->id,'name'=>$one->category,'category'=>str_slug($one->title)])}}">
                    <div class="img-bg bg-1 bg-grad-layer-6" style="background:url({{asset('uploads/product/'.$one->image)}}) no-repeat center;background-size:cover"></div>
                    <div class="abs-blr color-white p-20 bg-sm-color-7">
                        <h3 class="mb-15 mb-sm-5 font-sm-13"><b>{{\Illuminate\Support\Str::of($one->title)->words(7)}}</b></h3>
                        <ul class="list-li-mr-20">
                            <li><span class="color-primary"><b>{{$one->category}}</b></span> </li>
                            <li><i class="color-primary mr-5 font-12 ion-ios-time"></i>{{$one->created_at->diffForHumans()}}</li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
                @foreach($twos as $two)
                <div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
                    <a class="pos-relative h-100 dplay-block" href="{{url('blog',['id'=>$two->id,'name'=>$two->category,'category'=>str_slug($two->title)])}}">
                        <div class="img-bg bg-2 bg-grad-layer-6" style="background:url({{asset('uploads/product/'.$two->image)}}) no-repeat center;background-size:cover"></div>
                        <div class="abs-blr color-white p-20 bg-sm-color-7">
                            <h4 class="mb-10 mb-sm-5"><b>{{\Illuminate\Support\Str::of($two->title)->words(7)}}</b></h4>
                            <ul class="list-li-mr-20">
                                <li><span class="color-primary"><b>{{$two->category}}</b></span> </li>
                                <li><i class="color-primary mr-5 font-12 ion-ios-time"></i>{{$two->created_at->diffForHumans()}}</li>
                            </ul>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="h-1-3 oflow-hidden">
            @foreach($threes as $three)
            <div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
                <a class="pos-relative h-100 dplay-block" href="{{url('blog',['id'=>$three->id,'name'=>$three->category,'category'=>str_slug($three->title)])}}">
                    <div class="img-bg bg-4 bg-grad-layer-6" style="background:url({{asset('uploads/product/'.$three->image)}}) no-repeat center;background-size:cover"></div>
                    <div class="abs-blr color-white p-20 bg-sm-color-7">
                        <h4 class="mb-10 mb-sm-5"><b>{{\Illuminate\Support\Str::of($three->title)->words(7)}}</b></h4>
                        <ul class="list-li-mr-20">
                            <li><span class="color-primary"><b>{{$three->category}}</b></span> </li>
                            <li><i class="color-primary mr-5 font-12 ion-ios-time"></i>{{$three->created_at->diffForHumans()}}</li>
                        </ul>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <h4 class="p-title"><b>RECENT NEWS</b></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{asset('uploads/product/'.$four->image)}}" alt="">
                        <h4 class="pt-20"><a href="{{url('blog',['id'=>$four->id,'name'=>$four->category,'category'=>str_slug($four->title)])}}"><b>{{\Illuminate\Support\Str::of($four->title)->words(7)}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 pb-20">
                            <li class="color-lite-black"><a href="{{url('blog',['id'=>$four->id,'name'=>$four->category,'category'=>str_slug($four->title)])}}" class="color-black"><b>{{$four->category}}</b></a></li>
                            <li><i class="color-primary mr-5 font-12 ion-ios-time"></i><b>{{$four->created_at->diffForHumans()}}</b></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        @foreach($fives as $five)
                        <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{{url('blog',['id'=>$five->id,'name'=>$five->category,'category'=>str_slug($five->title)])}}">
                            <div class="wh-100x abs-tlr"><img src="{{asset('uploads/product/'.$five->image)}}" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{\Illuminate\Support\Str::of($five->title)->words(7)}}</b></h5>
                                <h6 class="color-lite-black pt-10">{{$five->created_at->diffForHumans()}}</h6>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE</b></a>

                <h4 class="p-title mt-30"><b>RECOMMENDED FOR YOU</b></h4>
                <div class="row">
                    @foreach($sixs as $six)
                    <div class="col-sm-6">
                        <img src="{{asset('uploads/product/'.$six->image)}}" alt="">
                        <h4 class="pt-20"><a href="{{url('blog',['id'=>$six->id,'name'=>$six->category,'category'=>str_slug($six->title)])}}"><b>{{\Illuminate\Support\Str::of($six->title)->words(7)}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 pb-20">
                            <li class="color-lite-black"><a href="{{url('detail',$six->id)}}" class="color-black"><b>{{$six->category}}</b></a></li>
                            <li><i class="color-primary mr-5 font-12 ion-ios-time"></i><b>{{$six->created_at->diffForHumans()}}</b></li>
                        </ul>
                    </div>
                    @endforeach

                </div>
                <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE</b></a>

                <h4 class="p-title mt-30"><b>SPORTS</b></h4>
                <div class="row">
                    @foreach($sevens as $seven)
                        <div class="col-sm-6">
                            <img src="{{asset('uploads/product/'.$seven->image)}}" alt="">
                            <h4 class="pt-20"><a href="{{url('blog',['id'=>$seven->id,'name'=>$seven->category,'category'=>str_slug($seven->title)])}}"><b>{{\Illuminate\Support\Str::of($seven->title)->words(7)}}</b></a></h4>
                            <ul class="list-li-mr-20 pt-10 pb-20">
                                <li class="color-lite-black"><a href="{{url('detail',$seven->id)}}" class="color-black"><b>{{$seven->category}}</b></a></li>
                                <li><i class="color-primary mr-5 font-12 ion-ios-time"></i><b>{{$seven->created_at->diffForHumans()}}</b></li>
                            </ul>
                        </div>
                    @endforeach
                </div>
                <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE</b></a>
            </div>
            <div class="d-none d-md-block d-lg-none col-md-3"></div>
            <div class="col-md-6 col-lg-4">
                <div class="pl-20 pl-md-0">
                    <div class="mtb-50">
                        <h4 class="p-title"><b>TRENDING</b></h4>
                        @foreach($eights as $eight)
                            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{{url('blog',['id'=>$eight->id,'name'=>$eight->category,'category'=>str_slug($eight->title)])}}">
                                <div class="wh-100x abs-tlr"><img src="{{asset('uploads/product/'.$eight->image)}}" alt=""></div>
                                <div class="ml-120 min-h-100x">
                                    <h5><b>{{\Illuminate\Support\Str::of($eight->title)->words(7)}}</b></h5>
                                    <h6 class="color-lite-black pt-10">{{$eight->created_at->diffForHumans()}}</h6>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="mtb-50 pos-relative">
                    </div>
                    <div class="mtb-50 mb-md-0">
                        <h4 class="p-title"><b>NEWSLETTER</b></h4>
                        <p class="mb-20">Subscribe to our newsletter to get notification about new updates,
                            information, discount, etc..</p>
                        <form class="nwsltr-primary-1">
                            <input type="text" placeholder="Your email" />
                            <button type="submit"><i class="ion-ios-paperplane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-191 color-ccc">
    <div class="container">
        <div class="pt-50 pb-20 pos-relative">
            <div class="abs-tblr pt-50 z--1 text-center">
                <div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="{{asset('images/xmap.png.pagespeed.ic.8AQTgoDPa3.png')}}" alt=""></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-30">
                        <a href="#"><img src="{{asset('images/blogo.png')}}"></a>
                        <p class="color-ash">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<i class="ion-heart" aria-hidden="true"></i> by <a href="https://iconztech.com/" target="_blank">Icons Tech</a>

                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-30">
                        <h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
                        <div class="mb-20">
                            <a class="color-white" href="{{url('blog',['id'=>$on->id,'name'=>$on->category,'category'=>str_slug($on->title)])}}"><b>{{\Illuminate\Support\Str::of($on->title)->words(7)}}</b></a>
                            <h6 class="mt-10">{{$on->created_at->diffForHumans()}}</h6>
                        </div>
                        <div class="brdr-ash-1 opacty-2 mr-30"></div>
                        <div class="mt-20">
                            <a class="color-white" href="{{url('blog',['id'=>$son->id,'name'=>$son->category,'category'=>str_slug($son->title)])}}"><b>{{\Illuminate\Support\Str::of($son->title)->words(7)}}</b></a>
                            <h6 class="mt-10">{{$son->created_at->diffForHumans()}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-30">
                        <h5 class="color-primary mb-20"><b>TRENDING</b></h5>
                        <div class="mb-20">
                            <a class="color-white" href="{{url('blog',['id'=>$trend->id,'name'=>$trend->category,'category'=>str_slug($trend->title)])}}"><b>{{\Illuminate\Support\Str::of($trend->title)->words(7)}}</b></a>
                            <h6 class="mt-10">{{$trend->created_at->diffForHumans()}}</h6>
                        </div>
                        <div class="brdr-ash-1 opacty-2 mr-30"></div>
                        <div class="mt-20">
                            <a class="color-white" href="{{url('blog',['id'=>$tren->id,'name'=>$tren->category,'category'=>str_slug($tren->title)])}}"><b>{{\Illuminate\Support\Str::of($tren->title)->words(7)}}</b></a>
                            <h6 class="mt-10">{{$tren->created_at->diffForHumans()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brdr-ash-1 opacty-2"></div>
        <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
            <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
                <li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Jobs advertising</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-google"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                <li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/tether.min.js"></script>
<script src="plugin-frameworks/bootstrap.js"></script>
<script src="common/scripts.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7156309bea7dacb9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/newsbit/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jun 2022 05:57:42 GMT -->
</html>
