<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles --><!--{{ URL::asset('style.css') }}-->
    <link id="bs-css" href="{{ URL::asset('admin/css/bootstrap-cerulean.min.css') }}" rel="stylesheet">

    <link href='{{ URL::asset("admin/css/charisma-app.css") }}' rel="stylesheet">
    <link href='{{ URL::asset("admin/bower_components/fullcalendar/dist/fullcalendar.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/bower_components/fullcalendar/dist/fullcalendar.print.css") }}' rel='stylesheet' media='print'>
    <link href='{{ URL::asset("admin/bower_components/chosen/chosen.min.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/bower_components/colorbox/example3/colorbox.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/bower_components/responsive-tables/responsive-tables.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/jquery.noty.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/noty_theme_default.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/elfinder.min.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/elfinder.theme.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/jquery.iphone.toggle.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/uploadify.css") }}' rel='stylesheet'>
    <link href='{{ URL::asset("admin/css/animate.min.css") }}' rel='stylesheet'>

    <!-- jQuery -->
    <script src="{{ URL::asset('admin/bower_components/jquery/jquery.js') }}"></script>



    <!-- The fav icon -->
    <link rel="{{ URL::asset('admin/shortcut icon') }}" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="{{ URL::asset('admin/img/logo20.png') }}" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="/manage"><i class="glyphicon glyphicon-home"></i><span> 主页</span></a>
                        </li>
                        <li>
                            <a href="chart.html" class="ajax-link">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>管理员列表</span>
                            </a>
                        </li>
                       <li class="accordion">
                            <a href="#">
                                <i class="glyphicon glyphicon-align-justify"></i>
                                <span>用户管理</span>
                            </a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/manage/user/create">添加</a></li>
                                <li><a href="#">查看</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html" class="ajax-link">
                                <i class="glyphicon glyphicon-list-alt"></i>
                                <span>评论管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="/manage/article" class="ajax-link">
                                <i class="glyphicon glyphicon-pencil"></i>
                                <span>文章管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="chart.html" class="ajax-link">
                                <i class="glyphicon glyphicon-picture"></i>
                                <span>照片管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="chart.html" class="ajax-link">
                                <i class=" glyphicon glyphicon-bookmark"></i>
                                <span>积分管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="chart.html" class="ajax-link">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <span>私信管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="chart.html" class="ajax-link">
                                <i class=" glyphicon glyphicon-leaf"></i>
                                <span>分类管理</span>
                            </a>
                        </li>
                        
                    </ul>

                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

       
        
        <div id="content" class="col-lg-10 col-sm-10">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
            </ul>
                    @section('content')
                    @show
         <div>
    
</div>







    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>


</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="{{ URL::asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- library for cookie management -->
<script src="{{ URL::asset('admin/js/jquery.cookie.js') }}"></script>
<!-- calender plugin -->
<script src="{{ URL::asset('admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ URL::asset('admin/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- data table plugin -->
<script src="{{ URL::asset('admin/js/jquery.dataTables.min.js') }}"></script>

<!-- select or dropdown enhancer -->
<script src="{{ URL::asset('admin/bower_components/chosen/chosen.jquery.min.js') }}"></script>
<!-- plugin for gallery image view -->
<script src="{{ URL::asset('admin/bower_components/colorbox/jquery.colorbox-min.js') }}"></script>
<!-- notification plugin -->
<script src="{{ URL::asset('admin/js/jquery.noty.js') }}"></script>
<!-- library for making tables responsive -->
<script src="{{ URL::asset('admin/bower_components/responsive-tables/responsive-tables.js') }}"></script>
<!-- tour plugin -->
<script src="{{ URL::asset('admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
<!-- star rating plugin -->
<script src="{{ URL::asset('admin/js/jquery.raty.min.js') }}"></script>
<!-- for iOS style toggle switch -->
<script src="{{ URL::asset('admin/js/jquery.iphone.toggle.js') }}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{ URL::asset('admin/js/jquery.autogrow-textarea.js') }}"></script>
<!-- multiple file upload plugin -->
<script src="{{ URL::asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{ URL::asset('admin/js/jquery.history.js') }}"></script>
<!-- application script for Charisma demo -->
<script src="{{ URL::asset('admin/js/charisma.js') }}"></script>

</body>
</html>
