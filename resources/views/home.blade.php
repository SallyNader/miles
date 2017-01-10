@extends('master')
@section('content')

<div id="target1" class="windowSize target1">
    <div class="windowSizeInFst">
        <div class="divContFst">
            <h1>Milestone</h1>
            <p>AT MILESTONE WE STRIVE AND WORK HARD, TO GET OUR CUSTOMERS ONLY THE BEST PROJECTS, WITH BEST LOCATIONS AND PAYMENT PLANS.</p>
            <img src="../resources/images/global/1212.png"/>
        </div>
        <a data-scroll href="#target2"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div>    
</div>

 <script type="text/javascript">
        //don't copy the script below into your page.
        if (!document.domain) alert("The video will not work properly if opening the page by local path. Please test this page through HTTP on a web or localhost server");
    </script>
 
      <!--start-->
      <div style="background-color:rgba(0,0,0,.4);">
    <div id="ninja-slider" class="windowSizeInFst" style="height: 1100px;background-image: url('images/slider/slide3.jpg'); "  >
        <div class="slider-inner" style="padding-top: 290px;" >
            <ul >
                <li>
                    <div class="video">
                        <iframe src="https://player.vimeo.com/video/136205074?title=0&portrait=0&byline=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </li>
                <li>
                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/Bp119VFEjHE?enablejsapi=1&start=0&rel=0&showinfo=0&iv_load_policy=3&modestbranding=1" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <a class="ns-img" href="{!!asset('img/2.jpg')!!}"></a>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <div class="video">
                        <video controls data-autoplay="false">
                            <source src="{!!asset('img/mcvideo.mp4')!!}" type="video/mp4" />
                        </video>
                    </div>
                    <a class="ns-img" href="{!!asset('img/3.jpg')!!}"></a>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <a class="ns-img" href="{!!asset('img/4.jpg')!!}"></a>
                    <div class="video" style="background-color:transparent;height:auto;top:auto;bottom:0px;">
                        <audio controls>
                            <source src="{!!asset('img/mcaudio.mp3')!!}" type="audio/mpeg">
                        </audio>
                    </div>
                </li>
            </ul>
        </div>
        <div id="thumbs">
            <span onclick="nslider.displaySlide(0)"><img src="{!!asset('img/1.jpg')!!}" /></span>
            <span onclick="nslider.playVideo(1)"><img src="{!!asset('img/2.jpg')!!}" /><span class="playvideo">AUTO</span></span>
            <span onclick="nslider.displaySlide(2)"><img src="{!!asset('img/3.jpg')!!}" /></span>
            <span onclick="nslider.playVideo(3)"><img src="{!!asset('img/4.jpg')!!}" /><span class="playvideo">AUTO</span></span>
        </div>
    </div>   
</div>
</div>
 

   
<div id="target2" class="windowSize target2">
    <div class="windowSizeIn">
        <div class="divCont">
            <div class="divContIn">
                <h1>NEW CAIRO PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>

                <img src="../resources/images/units/unit1.jpg"/>
            </div> 
        </div>
        <a data-scroll href="#target3"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>

    </div> 



<div id="target3" class="windowSize target3">

    <div class="windowSizeIn">
        <div class="divCont2">
            <div class="divContIn">
                <h1>6th OF OCTOBER PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>

                <img src="../resources/images/units/unit3.jpg"/> 
                <img src="../resources/images/units/unit2.jpg"/>            
                
            </div> 
        </div>
        <a data-scroll href="#target4"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div> 
</div>

<div id="target4" class="windowSize target4">
    <div class="windowSizeIn">
        <div class="divCont3">
            <div class="divContIn">
                <h1>North Coast PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>
                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>
            </div> 
        </div>

        <a data-scroll href="#target5"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div> 
</div>

<div id="target5" class="windowSize target5">
    <div class="windowSizeIn">
        <div class="divCont4">
            <div class="divContIn">
                <h1>North Coast PROJECTS</h1>

                <img src="../resources/images/units/unit1.jpg"/>
                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>                
            </div> 
        </div>
        <a data-scroll href="#target1"><span class="downMore"><i class="fa fa-fw fa-angle-up"></i></span></a>
    </div> 
</div>                     
@stop