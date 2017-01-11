
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Milestone</title>
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