
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title class="title">Milestone </title>
        <!--- video slider -->
         <link href="{!!asset('6/thumbs.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!!asset('5/ninja-slider.css')!!}" rel="stylesheet" type="text/css" />
    <!--ninjaVideoPlugin.js is required only when the slider contains video or audio.-->
    <script src="{!!asset('5/ninjaVideoPlugin.js')!!}"></script>
    <script src="{!!asset('5/ninja-slider.js')!!}" type="text/javascript"></script>
      <!--end video slider-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <link href="{!!asset('vendors/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
        <link href="{!!asset('resources/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/map.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/style.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/tap.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/mob.css')!!}" rel="stylesheet" type="text/css"/>        
        <link href="{!!asset('resources/css/flexslider.css')!!}" rel="stylesheet" type="text/css"/>
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
 
        <header class="elmentS" id="topUp">
            <div class="topHeader">
                <div class="logo">
                    <a href="../index.php"><img src="{!!asset('resources/images/logo.png')!!}"/></a>
                </div>
                <div class="lang">
                    <a class="en" href="../en">English</a>
                    <a class="ar" href="../ar">عربى</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottomHeader">
                <div class="scrl">
                    <a class="closeNav"><i class="fa fa-remove"></i></a>
                    <ul> 
                        <li class="barNav"><i class="fa fa-fw fa-bars"></i></li>
                        <li class="openIt"><i class="fa fa-fw fa-bars"></i></li>  
                        
                        <li><a  href="{{url('index')}}"> Home</a></li>
                        
                    <!--<li><a  href="?page=addproperty"><i class="fa fa-fw fa-plus-square"></i> Add your property</a></li>-->
                        <li class="li drop"><a ><i class="fa fa-search fa-fw"></i> Find Property <i class="fa fa-angle-down"></i></a>
                            <ul class="droped">
                                                       @unless(empty($countries))



                                                       @foreach($countries as $c)                                               
                                <li><a href="{{url('properties-buy-rent/'.$c->cName)}}">In {{$c->cName}}</a></li>

                                @endforeach

                                @endunless                               
                                                            </ul>                            
                        </li> 
                        @if(!Auth::check())
                        <li><a  href=""> Register</a></li>
                        <li><a  href=""> Sign In</a></li> 
                        @endif   

                        @if(Auth::check())
<li><a  href="{{url('profile')}}"> {{Auth::user()->name}}</a></li>
 <li><a  href="{{route('uploadunit.create')}}"> Upload New Unit</a></li>
                        <li><a  href=""> Sign Out</a></li>
                        @endif                       
                        <li><a  href="{{url('contactus')}}"> Contact us</a></li>
                        <li><a  href="{{url('about')}}"> About us</a></li>
                    <li><a  href="?page=search"><i class="fa fa-fw fa-search"></i> Advanced Search </a></li>   
                    </ul>
                    <!--<div class="user">
                                       
                        </div>--> 
                    <div class="social">
                        <p>Connect with us</p>
                        <a href="#"><i class="facebook fa fa-facebook fa-fw"></i></a> 
                        <a href="#"><i class="instagram fa fa-instagram fa-fw"></i></a>   
                        <a href="#"><i class="linkedin fa fa-linkedin fa-fw"></i></a> 
                    </div>                    
                </div>
            </div>
        </header>

       
    



@yield('content')






  

 <footer>
            <div class="fooLeft">                    
                <p>Mobile: 01000-545-707 / 012-7681-5030</p>
                <p>Email: info@milestone-eg.com</p>
                <p>Website: www.milestone-eg.com</p> 
                <p>Address: 19 Hassan Sadek St., Heliopolis, Cairo, Egypt. </p>
            </div>
            <div class="fooRight">
            <p><a href="?page=login">Login</a><a href="?page=register">Register</a></p> 
                    <div class="suSc">
                        <p class="text">Subscribe To Our Newsletter :</p>
                        <form action="" method="post">
                            <input type="email" placeholder="Your Email .." />
                            <input type="submit" value="Subscribe" />                            
                        </form>
                    </div>
                </div>
            <div class="clear"></div>
        </footer>
        <a class="moveUp" data-scroll href="#topUp">
            <i class="fa fa-fw fa-angle-up"></i>
        </a>
        
        <div class="copy">
            <p>Copyright &copy; Milestone 2016</p>
        </div>

        <!-- Scripts -->
        <script src="{!!asset('resources/js/jquery-1.11.2.min.js')!!}" type="text/javascript"></script>        
        <script src="{!!asset('resources/js/jquery.flexslider-min.js')!!}" type="text/javascript"></script>          
        <script src="{!!asset('resources/js/jquery.nicescroll.min.js')!!}" type="text/javascript"></script>
        <script src="{!!asset('resources/js/typed.js')!!}" type="text/javascript"></script>  
        <script src="{!!asset('resources/js/smooth-scroll.js')!!}" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{!!asset('resources/js/map.js')!!}"></script>
        <script src="{!!asset('resources/js/script.js')!!}" type="text/javascript"></script>        
    </body>
</html>
