@extends('master',['countries'=>$countries])

@section('content')
 <style>
.head{
        background: url({!!asset('resources/images/page_header/landing.jpg')!!}) no-repeat;
        background-size: cover;
    }    
</style>


<div class="head">
    <div class="headIn">
        <h1> </h1> 
    </div>
</div>
<div class="splash2">
    <h1>LIVE YOUR DREAM</h1>
</div>

<div class="unitDiv">
    <div class="unitDivL">
        <div class="flexslider">
            <h1 class="unit">{{$unit->uType}} | {{$unit->uPrice}} {{$unit->uPriceType}}</h1>
            <ul class="slides">
                <li>
                    <img src="{!!asset('unit/'.$unit->uFirstImage)!!}" />
                </li>                        
            </ul>
        </div> 
    </div>

    <div class="unitDivR">
        <h1>Unit Details:</h1>
        <p><span>Code : </span>{{$unit->uCode}}</p>
        
        <p><span>Type : </span>{{$unit->uType}}</p>   
        
        <p><span>Location : </span>{{$unit->uRegion}}, {{$unit->uCity}},{{$unit->uCountry}} .</p>
        
        <p><span>Project : </span>{{$unit->uProject}}</p>  
        
        <p><span>Total Current Price : </span>{{$unit->uPrice}}  {{$unit->uPriceType}} </p>
        
         @if($unit->uAreaSQM != '0')

           

@if($unit->uType == 'Villa' or $unit->uType == 'Twin' or $unit->uType == 'standalone' or $unit->uType =='TwonHouse')


<p><span>Build up Area:</span> {{$unit->uAreaSQM}}

</p>
<p><span>Land Area : </span> {{ $unit->uAreaSQM}}  m2</p>

@else

<p><span>Area : </span>{{ $unit->uLandArea}}  m2</p>

@endif
@endif
        
        @if($unit->uNRooms != '0')
        <p><span>Rooms : </span>{{$unit->uNRooms}} rooms</p>


        
        @elseif($unit->uNBedRooms != '0') 
        <p><span>Bed Rooms : </span>{{$unit->uNBedRooms}} rooms</p>
        
        @elseif($unit->uNBathRooms != '0') 
        @endif


        <p><span>Bathrooms : </span>{{$unit->uNBathRooms}} rooms</p>
        
        <p><span>Finished : </span>{{$unit->uFurnished}}</p>
        
        <p><span>Parking : </span>{{$unit->uParking}}</p>
        
        @if(!empty($unit->uYearlyServiceCharge)) 

        <p><span>Yearly Service Charge : </span> {{$unit->uYearlyServiceCharge}}
        @endif
        <p><span>Description : </span> {{$unit->uDescription}}</p> 

        <p>
            <span>Share This Unit On Facebook : </span>
        <div class="fb-share-button" data-href="<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a  style="background-color: #365899;color: #fff;display: inline-block;padding: 5px;text-decoration: none;" class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>&amp;src=sdkpreparse">Share on Facebook</a></div>
        </p>

        <a href="{{url('contactus')}}" class="unitBtn"><i class="fa fa-hand-o-right"></i> Request This Unit</a>
    </div>
    <div class="clear"></div>
</div>

@if($unit->uMap1 == 0)

@else
<div class="unitDivMap">
    <h1>The Unit Map:</h1>
    <div id="map"></div>
</div>
@endif


<!--<iframe style="border:0;" width="100%" height="500px" src="http://maps.google.com/maps?q=29.963830,31.246254&zoom=14&output=embed"></iframe>-->
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@stop