@extends('master')

@section('content')
 <style>
.head{
        background: url({!!asset('resources/images/page_header/NEW-CAIRO.jpg')!!}) no-repeat;
        background-size: cover;
    }    
</style>

<div class="head">
    <div class="headIn">
        <h1>Result Of Searches</h1> 
    </div>
</div>
<div class="splash2">
    <h1>Find Your Best Property</h1>
</div>
<div class="porFeeds">
     
    
   
    @if(count($units)>0)

    @foreach($units as $property)
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
        </div>
@endforeach

@else

<div class="porFeeds">
<p class="no-item">There are no units tell now.</p>

        @endif
    </div>
    

  

    <div class="clear"></div>
</div>       
</div>
<center>

</center>

@stop