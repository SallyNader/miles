@extends('master',['countries'=>$countries])

@section('content')
 <style>
    .head{
        background: url({!!asset('resources/images/page_header/heroImage.png')!!}) no-repeat;
        background-size: cover;
    }    
</style>

<div class="head">
    <div class="headIn">
        <h1>{{$country}} Properties</h1> 
    </div>
</div>
<div class="splash">
    <h1>Choose Project</h1>
</div>

    
<div class="s_pages">

@unless(empty($projects)) 

@foreach($projects as $project) 
            <a href="{{url('choose-property/'.$project->pName.'/'.$city.'/'.$region.'/'.$country.'/'.$status.'/'.$category)}}"><div><img src="{!!asset('resources/images/projects/'.$project->pPic)!!}"/></div> <span>{{$project->pName}}</span> </a>
@endforeach

            @endunless
            
    </div>
    @stop
