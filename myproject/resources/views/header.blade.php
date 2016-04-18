<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="ngwa pius">
    <meta name="viewport" content="width=device-width, initial-scale=1">{{--make page touch zooming --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta name="keywords" content="GHS Bafut,College,High school, secondary school, mezam division" />
    <title>Home | GHS Bafut</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
    <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
    <!-- Homepage Specific -->
    <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
    <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
    <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
    <!-- / Homepage Specific -->
</head>

<div class="wrapper row1">
    <div id="header" class="clear">
        <div class="fl_left">
            <h1><a href="index.html">{{trans('english.ghs_bafut')}}</a></h1>
            <p style="color: blueviolet; transition: ease-in-out;">{{trans('english.moto')}}</p>
        </div>
        <div class="fl_right">
            <p><a href="#">A - Z Index</a> | <a href="#">Student Login</a> | <a href="#">Staff Login</a></p>
            <form action="#" method="post" id="sitesearch">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                    <input type="image" src="layout/images/search.gif" id="search" alt="Search" />
                </fieldset>
            </form>
        </div>
        <div id="topnav">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="pages/style-demo.html">{{trans('english.about_ghs_bafut')}}</a></li>
                <li><a href="pages/full-width.html">{{ trans('english.campus')}}</a></li>
                <li><a href="pages/3-columns.html"> {{ trans('english.academic')}}</a></li>
                <li><a href="pages/portfolio.html">Portfolio</a></li>
                <li><a href="pages/gallery.html">{{ trans('english.staff')}}</a></li>
                <li><a href="#"> {{ trans('english.ex-students')}}</a></li>
            </ul>
        </div>
    </div>
</div>







    <link href="{{URL::asset('css/layout.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('font-awesome-4.5.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

   <script type="text/javascript" src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{URL::asset('js/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/respond.min.js')}}"></script>
    <script type="text/javascript">
        var URL = 'http://localhost:8000/';

    </script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<input type="hidden" id="baseUrl" value="{!! URL::to('/') !!}"/>

