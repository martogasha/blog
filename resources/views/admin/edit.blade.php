<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from wpkixx.com/html/Admo/admo/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2022 06:18:04 GMT -->
<head>

    <!-- Meta-Information -->
    <title>Admo - Responsive Admin Dashboard Template</title>
    <meta charset="utf-8">
    <meta name="description" content="Admo is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Admo comes with 3 amazing Dashboard layouts. Admo is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
    <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, Admo">
    <meta name="author" content="Admo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
</head>
<body>
<div class="se-pre-con"></div>
<!-- Our Website Content Goes Here -->
<header class="simple-normal">
    <div class="top-bar">
        <div class="logo"> <a href="index-2.html" title=""><img src="asset/images/main-logo.png" alt=""> Admo</a> </div>
        <div class="menu-options"><span class="menu-action"><i></i></span></div>
        <div class="search-dashboard">
            <div class="responsive-search"> <i class="fa fa-search"></i> </div>
            <form>
                <input type="text" placeholder="Search here" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Search Dashboard -->
        <div class="top-bar-quick-sec">
            <ul class="quick-notify-section custom-dropdowns">
                <li class="language dropdown"> <span><i class="fa fa-globe"></i><strong>EN</strong></span>
                    <div class="languages drop-list">
                        <ul>
                            <li> <a href="#" title="">ENG</a> </li>
                            <li> <a href="#" title="">USSR</a> </li>
                            <li> <a href="#" title="">ARB</a> </li>
                        </ul>
                    </div>
                    <!-- Message Drop List -->
                </li>
                <li class="message-list dropdown"> <span><i class="fa fa-bell-o"></i><strong class="skyblue-bg">{{\App\Models\Contact::count()}}</strong></span>
                    <!-- Message Drop List -->
                </li>
                <li class="notification-list dropdown"> <span><i class="fa fa-envelope-o"></i><strong class="red-bg"></strong></span>
                    <!-- Notification Drop list -->
                </li>
                <li class="activity-list dropdown"> <span><i class="fa fa-history"></i><strong class="blue-bg"></strong></span>
                    <!-- Activity Drop list -->
                </li>
            </ul>
            <span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt"></i></span> <span class="open-panel"><i class="fa fa-cog fa-spin"></i></span>
            <div class="name-area"> <a href="#" title=""><strong>Thompson</strong> <img src="asset/images/resource/admin.jpg" alt="" /></a>
                <ul>
                    <li class="profile-status"><span>Profile Completion 70%</span></li>
                    <li><a href="#" title=""><i class="fa fa-dollar"></i> My Balance</a></li>
                    <li><a href="#" title=""><i class="fa fa-inbox"></i> Inbox</a></li>
                    <li><a href="#" title=""><i class="fa fa-gear"></i> Setting</a></li>
                    <li><a href="#" title=""><i class="ti-check"></i> Available</a>
                        <ul>
                            <li><a href="#" title="">Available</a></li>
                            <li><a href="#" title="">Invisible</a></li>
                            <li><a href="#" title="">Away</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><i class="ti-power-off"></i> logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top Bar -->
    <div class="side-menu-sec" id="header-scroll">
        <div class="side-menus">
            <nav>
                <ul class="parent-menu">
                    <li class="menu-item-has-children active"> <a title=""><i class="ti-desktop"></i><span>Dashboard <i class="badge red-bg">HOT</i></span></a>
                        <ul class="" style="display:block">
                            <li><a href="{{url('admin')}}" title="">Home</a></li>
                            <li><a href="{{url('blog')}}" title="">Blog</a></li>
                            <li><a href="{{url('users')}}">Users</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <span class="footer-line">2020 &copy; Admo All Rights Reseved</span>
        </div>
    </div>
</header>
<div class="slide-panel" id="panel-scroll">
    <ul role="tablist" class="nav nav-tabs panel-tab-btn">
        <li class="nav-item"> <a class="active" data-toggle="tab" role="tab" data-target="#panel-tab1"> <i class="ti-email"></i> <span>Your Emails</span> </a> </li>
        <li class="nav-item"> <a data-toggle="tab" role="tab" data-target="#panel-tab2"> <i class="ti-settings"></i> <span>Your Setting</span> </a> </li>
    </ul>
    <div class="tab-content panel-tab">
        <div id="panel-tab1" class="tab-pane active fade show">
            <div class="recent-mails-widget">
                <form>
                    <div id="searchMail"></div>
                </form>
                <h3>Recent Emails</h3>
                <ul id="mail-list" class="mail-list">
                    <li>
                        <div class="title"> <span><img src="asset/images/resource/email1.jpg" alt="" /><i class="online"></i></span>
                            <h3><a href="#" title="">Jhon Andrew</a><span>3 min ago</span></h3>
                            <a href="#"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a> </div>
                        <h4>Themeforest Admin Template</h4>
                        <p>This product is so good that i manage to buy.</p>
                    </li>
                    <li>
                        <div class="title"> <span><img src="asset/images/resource/email2.jpg" alt="" /><i class="online"></i></span>
                            <h3><a href="#" title="">Thompson</a><span>2 hours ago</span></h3>
                            <a href="#"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a> </div>
                        <h4>Themeforest Admin Template</h4>
                        <p>This product is so good that i manage to buy.</p>
                    </li>
                    <li>
                        <div class="title"> <span><img src="asset/images/resource/email3.jpg" alt="" /><i class="offline"></i></span>
                            <h3><a href="#" title="">Jonathan Doe</a><span>8 min ago</span></h3>
                            <a href="#"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a> </div>
                        <h4>Themeforest Admin Template</h4>
                        <p>This product is so good that i manage to buy.</p>
                    </li>
                </ul>
                <a href="#/pages/inbox" title="" class="red-bg">View All Messages</a> </div>
            <!-- Recent Email Widget -->

            <div class="file-transfer-widget">
                <h3>FILE TRANSFER</h3>
                <div class="toggle">
                    <ul>
                        <li> <i class="ti-file"></i>
                            <h4>my-excel.xls<i>20 min ago</i></h4>
                            <div class="progress">
                                <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar red-bg"> 90% </div>
                            </div>
                            <div class="file-action-btn"> <a href="#" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a> <a href="#" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a> </div>
                        </li>
                        <li> <i class="ti-zip"></i>
                            <h4>my-cv.pdf<i>8 min ago</i></h4>
                            <div class="progress">
                                <div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar blue-bg"> 40% </div>
                            </div>
                            <div class="file-action-btn"> <a href="#" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a> <a href="#" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a> </div>
                        </li>
                        <li> <i class="ti-files"></i>
                            <h4>portfolio-shoot.mp4<i>12 min ago</i></h4>
                            <div class="progress">
                                <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar green-bg"> 70% </div>
                            </div>
                            <div class="file-action-btn"> <a href="#" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a> <a href="#" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a> </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- File Transfer -->
        </div>
        <div id="panel-tab2" class="tab-pane fade">
            <div class="setting-widget">
                <form>
                    <h3>Accounts</h3>
                    <div class="toggle-setting"> <span>Office Account</span>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                    <div class="toggle-setting"> <span>Personal Account</span>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                    <div class="toggle-setting"> <span>Business Account</span>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                </form>
                <form>
                    <h3>General Setting</h3>
                    <div class="toggle-setting"> <span>Notifications</span>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                    <div class="toggle-setting"> <span>Notification Sound</span>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                    <div class="toggle-setting"> <span>My Profile</span>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                    <div class="toggle-setting"> <span>Show Online</span>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                    <div class="toggle-setting"> <span>Public Profile</span>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span data-unchecked="Off" data-checked="On"></span> </label>
                    </div>
                </form>
            </div>
            <!-- Setting Widget -->
        </div>
    </div>
</div>
<!-- Slide Panel -->
<div class="main-content">
    <div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <span>Welcome back, Thompson</span> </div>
                </div>
                <div class="col-md-9 column">
                    <div class="top-bar-chart">
                        <div class="bar-chart-details">
                            <p>New User</p>
                            <h5>17,561</h5>
                        </div>
                        <span id="new-orders" class="sparkline">4,5,6,7,6,5,4,3,3,4</span> </div>
                    <div class="top-bar-chart">
                        <div class="bar-chart-details">
                            <p>My Balance</p>
                            <h5>$21,561.01</h5>
                        </div>
                        <span id="my-balance" class="sparkline">4,3,6,3,8,6,4,3,3,4</span> </div>
                    <div class="quick-btn-title"><a href="#" title=""><i class="fa fa-cloud-upload"></i> Upload Files</a> </div>
                </div>
            </div>
        </div>
        <!-- Heading Sec -->
        <ul class="breadcrumbs">
            <li><a href="{{url('admin')}}" title="">Home</a></li>
            <li>Blogs</li>
        </ul>
        <div class="main-content-area">
            @include('flash-message')
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('editB')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$edit->id}}">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Placement</label>
                            <select class="form-control" name="placement" id="exampleFormControlSelect1">
                                <option value="{{$edit->placement}}">{{$edit->placement}}</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="four">Four</option>
                                <option value="five">Five</option>
                                <option value="six">Six</option>
                                <option value="seven">Seven</option>
                                <option value="eight">Eight</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" name="category" id="exampleFormControlSelect1">
                                <option value="{{$edit->category}}">{{$edit->category}}</option>
                                <option value="news">News</option>
                                <option value="entertainment">Entertainment</option>
                                <option value="sports">Sports</option>
                                <option value="tech">Tech</option>
                                <option value="lifestyle">Lifestyle</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" class="form-control" value="{{$edit->title}}" name="title" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Detail 1</label>
                            <input class="form-control" value="{{$edit->detailOne}}" name="detailOne" id="exampleFormControlTextarea1"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlAName</label>
                            <input class="form-control" name="urlAName" value="{{$edit->urlAName}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlA</label>
                            <input class="form-control" name="urlA" value="{{$edit->urlA}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">DetailA</label>
                            <input class="form-control" name="detailA" value="{{$edit->detailA}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlBName</label>
                            <input class="form-control" name="urlBName" value="{{$edit->urlBName}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlB</label>
                            <input class="form-control" name="urlB" value="{{$edit->urlB}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">DetailB</label>
                            <input class="form-control" name="detailB" value="{{$edit->detailB}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Quote</label>
                            <input type="text" class="form-control" value="{{$edit->quote}}" name="quote" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Quote Author</label>
                            <input type="text" class="form-control" name="quoteAuthor" value="{{$edit->whoSaid}}" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Detail 2</label>
                            <input class="form-control" value="{{$edit->detailTwo}}" name="detailTwo" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlCName</label>
                            <input class="form-control" name="urlCName" value="{{$edit->urlCName}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlC</label>
                            <input class="form-control" name="urlC" value="{{$edit->urlC}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">DetailC</label>
                            <input class="form-control" name="detailC" value="{{$edit->detailC}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlDName</label>
                            <input class="form-control" name="urlDName" value="{{$edit->urlDName}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">urlD</label>
                            <input class="form-control" name="urlD" value="{{$edit->urlD}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">DetailD</label>
                            <input class="form-control" name="detailD" value="{{$edit->detailD}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Youtube Url</label>
                            <input class="form-control" name="youtube" value="{{$edit->youtube}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Image 1</label>
                            <input type="file"  class="form-control-file" name="image" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Detail Photo (1200*900)</label>
                            <input type="file" class="form-control-file" name="imageOne" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Category Photo(600*450)</label>
                            <input type="file" class="form-control-file" name="imageTwo" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel Content -->
</div>

<!-- Vendor: Javascripts -->
<script src="{{asset('asset/js/jquery-2.1.3.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<!-- Our Website Javascripts -->
<script src="{{asset('asset/js/app.js')}}"></script>
<script src="{{asset('asset/js/common.js')}}"></script>
</body>

<!-- Mirrored from wpkixx.com/html/Admo/admo/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2022 06:18:32 GMT -->
</html>
