@extends('master',['countries'=>$countries])

@section('content')
 <style>
.head{
        background: url({!!asset('resources/images/page_header/NEW-CAIRO.jpg')!!}) no-repeat;
        background-size: cover;
    }    
</style>

<div class="head">
    <div class="headIn">
        <h1>{{$country}} Properties</h1> 
    </div>
</div>
<div class="splash2">
    <h1>Find Your Best Property In {{$country}}</h1>
</div>
<div class="porFeeds">
     
    
   
    @if(count($properties)>0)

    @foreach($properties as $property)
     <div class="proFeedsItem">

        <div class="proItem">
            <div class="proImg">
                <img src="{!!asset('resources/images/units/'.$property->uFirstImage)!!}" alt="">
            </div>
            <div class="proText">
                <p>{{$property->uType}} / {{$property->uCode}}</p>
                <span>{{$property->uRegion}}</span>
                <a href="{{route('unitdetail.show',$property->uId)}}">Show Details</a>
            </div>
        </div>
@endforeach

@else

<div class="porFeeds">
<p class="no-item">There are no units tell now.</p>

        @endif
    </div>
    

  

    <div class="clear"></div>
</div>       

@stop