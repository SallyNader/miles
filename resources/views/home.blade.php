@extends('master',['countries'=>$countries])

@section('content')

        <div id="target1" class="windowSize target1">
    <div class="windowSizeInFst">
        <div class="divContFst">
            <h1>Milestone</h1>
            <p>AT MILESTONE WE STRIVE AND WORK HARD, TO GET OUR CUSTOMERS ONLY THE BEST PROJECTS, WITH BEST LOCATIONS AND PAYMENT PLANS.</p>
            <img src="{!!asset('resources/images/global/1212.png')!!}"/>
        </div>
        <a data-scroll href="#target2"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
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

                <img src="{!!asset('resources/images/units/unit1.jpg')!!}"/>
            </div> 
        </div>
        <a data-scroll href="#target3"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div>    
</div>

<div id="target3" class="windowSize target3">
    <div class="windowSizeIn">
        <div class="divCont2">
            <div class="divContIn">
                <h1>6th OF OCTOBER PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>

                <img src="{!!asset('resources/images/units/unit3.jpg')!!}"/> 
                <img src="{!!asset('resources/images/units/unit2.jpg')!!}"/>            
                
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

                <img src="{!!asset('resources/images/units/unit1.jpg')!!}"/>
                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>                
            </div> 
        </div>
        <a data-scroll href="#target1"><span class="downMore"><i class="fa fa-fw fa-angle-up"></i></span></a>
    </div> 
</div>                     


@stop