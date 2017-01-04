@extends('master',['countries'=>$countries])

@section('content')
 <style>
.head{
        background: url({!!asset('resources/images/page_header/search.jpg')!!}) no-repeat;
        background-size: cover;
    }    
</style>

<div class="head">
    <div class="headIn">
        <h1>{{$country}} Units</h1> 
    </div>
</div>
<div class="splash">
    <h1>Choose City</h1>
</div>

    
<div class="s_pages">  

@unless(empty($cities))

@foreach($cities as $city)
            <a href="{{url('choose-region/'.$city->cityName.'/'.$country.'/'.$status.'/'.$category)}}"><div><img src="{!!asset('resources/images/city/'.$city->cityPic)!!}"/></div> <span>{{$city->cityName}} </span> </a>

            @endforeach

            @endunless
    
    </div>

    @stop

