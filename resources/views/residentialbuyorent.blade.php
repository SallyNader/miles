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
        <h1>{{$country}} Properties</h1> 
    </div>
</div>
<div class="splash2">
    <h1>Find The Best Property In {{$country}}</h1>
</div>

<div class="s_pages">    
    <a href="{{url('choose-city/'.$country.'/Buy/residential')}}"><div><img src="{!!asset('resources/images/global/Flora-Terrace.jpg')!!}"/></div> <span>Residential for buy</span> </a>
    <a href="{{url('choose-city/'.$country.'/Rent/residential')}}"><div><img src="{!!asset('resources/images/global/1212.png')!!}"/></div> <span>Residential for rent</span> </a>
    <a href="{{url('choose-city/'.$country.'/Buy/commercial')}}"><div><img src="{!!asset('resources/images/global/dsfdsf.jpg')!!}"/></div> <span>Commercial for buy</span> </a>
    <a href="{{url('choose-city/'.$country.'/Rent/commercial')}}"><div><img src="{!!asset('resources/images/global/unit4.jpg')!!}"/></div> <span>Commercial for rent</span> </a>      
</div>   

@stop