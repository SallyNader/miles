
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Milestone</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{!!asset('5/ninja-slider.css')!!}" rel="stylesheet" type="text/css" />




<!--video api-->




<!--video api-->


        <!--ninjaVideoPlugin.js is required only when the slider contains video or audio.-->
    <script src="{!!asset('5/ninjaVideoPlugin.js')!!}"></script>
    <script src="{!!asset('5/ninja-slider.js')!!}" type="text/javascript"></script>
    <script type="text/javascript">
        //don't copy the script below into your page.
        if (!document.domain) alert("The video will not work properly if opening the page by local path. Please test this page through HTTP on a web or localhost server");    
    </script>
    <style>
        body {font: normal 0.9em Arial;margin:0;}
        a {color:#1155CC;}
        ul li {padding: 10px 0;}
        header {display:block;padding:60px 0 10px;background-color:#333; text-align:center;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #555;
            text-decoration:none;
            transition: color 0.7s;
        }
        header a.active {
            font-weight:bold;
            width: 24px;
            height: 24px;
            padding: 4px;
            text-align: center;
            display:inline-block;
            border-radius: 50%;
            background: #4d5256;
            color: #191919;
        }
    </style>
</head>
<body>
    <!--<style>
    #load_s{
        background-color: rgba(0,0,0,.6);
        position: fixed;
        top:0px;
        bottom: 0px;
        left:0px;
        right:0px;
        text-align: center;
        z-index: 10000;
    }
    .load_thing{
        width:50px;
        height:50px;         
        margin:20% auto;  
        color: #fff;
        border-radius: 50%;
        border:3px outset #eee;
        font-family: Arial;
        font-size: 30px;
        font-weight: 100;
        animation: rotat .2s infinite;        
    }
    @keyframes rotat {        
        to{transform: rotate(360deg)}               
    }
</style>
<div id="load_s">
    <div class="load_thing">
    </div>
</div>
<script>
    window.addEventListener("load", function () {
        var load_screen = document.getElementById("load_s");
        document.body.removeChild(load_screen);
    });
</script>-->
    <!-- Home Slider Styles -->
<link rel="stylesheet" href="{!!asset('resources/css/supersized.css')!!}" type="text/css" media="screen" />
<link rel="stylesheet" href="{!!asset('resources/css/style.css')!!}" type="text/css" media="screen"/>
<link rel="stylesheet" href="{!!asset('resources/css/font-awesome.min.css')!!}" type="text/css"/>
<link rel="stylesheet" href="{!!asset('resources/theme/supersized.shutter.css')!!}" type="text/css" media="screen" />
<style type="text/css">
    ul#demo-block{ margin:0 15px 15px 15px; }
    ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url('img/bg-black.png'); font:11px Helvetica, Arial, sans-serif; }
    ul#demo-block li a{ color:#eee; font-weight:bold; }
</style>

<!-- Home Slider Scripts -->
<script type="text/javascript" src="{!!asset('resources/js/jquery-1.11.2.min.js')!!}"></script>
<script type="text/javascript" src="{!!asset('resources/js/jquery.easing.min.js')!!}"></script>
<script type="text/javascript" src="{!!asset('resources/js/supersized.3.2.7.min.js')!!}"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $.supersized({
            // Functionality
            slide_interval: 3000, // Length between transitions
            transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 2500, // Speed of transition

            // Components                           
            slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: [// Slideshow Images
                {image: 'resources/images/slider/slide1.jpg', title: 'Image Credit: Maria Kazvan', thumb: '', url: ''},
                {image: 'resources/images/slider/slide2.jpg', title: 'Image Credit: Maria Kazvan', thumb: '', url: ''},
                {image: 'resources/images/slider/slide3.jpg', title: 'Image Credit: Maria Kazvan', thumb: '', url: ''},
                {image: 'resources/images/slider/slide4.jpg', title: 'Image Credit: Colin Wojno', thumb: '', url: ''},
                {image: 'resources/images/slider/slide1.jpg', title: 'Image Credit: Colin Wojno', thumb: '', url: ''},
                {image: 'resources/images/slider/slide2.jpg', title: 'Image Credit: Colin Wojno', thumb: '', url: ''},
                {image: 'resources/images/slider/slide3.jpg', title: 'Image Credit: Brooke Shaden', thumb: '', url: ''},
                {image: 'resources/images/slider/slide4.jpg', title: 'Image Credit: Brooke Shaden', thumb: '', url: ''},
                {image: 'resources/images/slider/slide1.jpg', title: 'Image Credit: Brooke Shaden', thumb: '', url: ''}
            ]
        });
    });
</script>    <div style="height: 100%" class="main">
        <div class="mainIn">
            <img src="{!!asset('resources/images/logo.png')!!}" alt="logo"/>
            <h1>
                <a href="{{url('home')}}">Home</a>
                <a href="{{url('about')}}">About</a>
                <a href="{{url('contactus')}}">Contact</a>
            </h1>
              <!--start-->
    <div id='ninja-slider' style="margin-top: 350px;margin-bottom: 55px" >
        <div class="slider-inner">
            <ul>
               <!-- <li><a class="ns-img" href="img/1.jpg"></a></li>
                <li>
                    <div class="video">
                        <iframe src="https://player.vimeo.com/video/93292237" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <a class="ns-img" href="img/2.jpg"></a>
                    <div class="caption">Supports Youtube, Vimeo and HTML video/audio</div>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/Bp119VFEjHE?enablejsapi=1&start=216&rel=0&showinfo=0&iv_load_policy=3&modestbranding=1" frameborder="0" allowfullscreen data-autoplay="false"></iframe>
                    </div>
                    <a class="ns-img" href="img/3.jpg"></a>
                    <div class="caption">This video starts from 3:36</div>
                    <div class="video-playbutton-layer"></div>
                </li>-->
               
                @unless(empty($videos))

@foreach($videos  as  $link)
@if($link->appearInHome != '0') <li>
                 
                       <iframe width="800" height="400" src="{{$link->youtubeLink}}" frameborder="0" allowfullscreen></iframe>


                    
                </li>
                @endif
@endforeach
                          @endunless
               <!-- <li>
                    <a class="ns-img" href="img/5.jpg"></a>
                    <div class="video" style="background-color:transparent;height:auto;top:auto;bottom:0px;">
                        <audio controls data-autoplay="1">
                            <source src="img/mcaudio.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </li>-->
            </ul>
            <div class="fs-icon"></div>
        </div>
    </div>
    <!--end-->
        </div>
    <!--<div>
            <div class="selectIndex">
                <h1 class="h1">Find Your Property <span><i class="fa fa-fw fa-angle-down"></i></span></h1>
                <div class="countries">
                    <div class="allCountries">
                        <a href="en/?page=search&country=egypt">Egypt</a>
                        <a href="en/?page=search&country=dubai">Dubai</a>  
                        <a href="en/?page=search&country=cyprus">Cyprus</a>                                            
                    </div>
                </div>
            </div>
        </div>-->

          
    </div>
  

    <script>
        // Select Property Index Page
        $(".h1").on("click", function () {
            $(".allCountries").slideToggle(100);
        });
    </script>
</body>
</html>