@extends('master',['countries'=>$countries])

@section('content')
 <style>
 .head{
        background: url({!!asset('resources/images/page_header/Bali-Villa-164.jpg')!!}) no-repeat;
        background-size: cover;
    }    
</style>

<div class="head">
    <div class="headIn">
        <h1>{{$country}} Properties</h1> 
    </div>
</div>
<div class="splash2">
    <h1>Select The Region</h1>
</div>

    
<div class="s_pages">


@unless(empty($regions))

@foreach($regions as $region)
        <a href="{{url('choose-project/'.$city.'/'.$region->rName.'/'.$country.'/'.$status.'/'.$category)}}"><div><img src="{!!asset('resources/images/region/'.$region->rPic)!!}"/></div> <span>{{$region->rName}}</span> </a>

        @endforeach
@endunless

    </div>


     @stop

