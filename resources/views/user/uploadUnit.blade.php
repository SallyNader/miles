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
       
    </div>
</div>
<div class="splash">
    <h1>Upload unit</h1>
</div>

<div class="about3">
    <h1></h1>

    <h3>upload new unit and the admin will approve it to appear on the site</h3>

    <p></p>
</div>

<style type="text/css">
	
	label{

		color: #337ab7
	}

</style>

<div style="width: 600px;margin-left: 160px" >
	


	<form action="{{route('uploadunit.store')}}" method="POST"
                    file="true" enctype="multipart/form-data">
                    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Unit Code</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter unit code" value="{{old('code')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('code')}}</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Number Of Rooms</label>
    <input type="text" name="rooms" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number of rooms" value="{{old('rooms')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('rooms')}}</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Type of Unit</label>
    <input type="text" name="unittype" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter type of unit" value="{{old('unittype')}}"  style="width: 70%" >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('unittype')}}</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Area Of Unit</label>
    <input name="area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter unit area" value="{{old('area')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('area')}}</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Land Area</label>
    <input name="land" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter land area"  value="{{old('land')}}" style="width: 70%" >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('land')}}</small>
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Currency</label>
    <input type="text" name="currency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter currency" value="{{old('currency')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('currency')}}</small>
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the price of unit"  value="{{old('price')}}" style="width: 70%" >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('price')}}</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Number Of Bedrooms</label>
    <input type="text" name="bedrooms" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number of bedrooms" value="{{old('bedrooms')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('bedrooms')}}</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Number Of Bathrooms</label>
    <input  type="text" name="bathrooms" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number of bathrooms" value="{{old('bathrooms')}}"  style="width: 70%" >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('bathrooms')}}</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Yearly Service Charge</label>
    <input type="text" name="charge" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter yearly service charge" value="{{old('charge')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('charge')}}</small>
  </div>





  <div class="form-group">
    <label for="exampleInputEmail1">Unit Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter unit description" value="{{old('description')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted"  ></small>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Furnished</label>
    <input type="text" name="furnished" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="furnished type" value="{{old('furnished')}}"  style="width: 70%" >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('furnished')}}</small>
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Project of Unit</label>
    <input type="text" name="project" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter project of unit" value="{{old('project')}}" style="width: 70%"  >
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('project')}}</small>
  </div>



  




  <div class="form-group" >
    <label for="exampleSelect1">Parking</label>
    <select name="parking" class="form-control" id="exampleSelect1" style="width: 70%">
      <option value="1">Exist</option>
      <option value="0">No Parking</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Country</label>
    <select name="country" class="form-control" id="exampleSelect1" style="width: 70%" >
   @unless(empty($countries))

@foreach($countries  as  $country)
      <option  value="{{$country->cName}}" >{{$country->cName}}</option>
      @endforeach
                          @endunless

    </select>
  </div>


  <div class="form-group">
    <label for="exampleSelect1">City</label>
    <select name="city" class="form-control" id="exampleSelect1" style="width: 70%">

@unless(empty($cities))

@foreach($cities  as  $c)
      <option value="{{$c->cityName}}">{{$c->cityName}}</option>
      @endforeach
                          @endunless

    </select>
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Region</label>
    <select name="region" class="form-control" id="exampleSelect1" style="width: 70%">
    @unless(empty($regions))

@foreach($regions  as  $r)
      <option  value="{{$r->rName}}">{{$r->rName}}</option>
      @endforeach
                          @endunless

      
    </select>
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Residential Or Commercial</label>
    <select name="category" class="form-control" id="exampleSelect1" style="width: 70%">
      <option value="residential">residential</option>
      <option value="commercial">Commercial</option>
     
    </select>
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Buy Or Rent</label>
    <select name="status" class="form-control" id="exampleSelect1" style="width: 70%">
      <option value="buy">buy</option>
      <option value="rent">rent</option>
      
    </select>
  </div>

  <!--<div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>-->
  <div class="form-group">
    <label for="exampleInputFile">Unit Image</label>
    <input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">{{$errors->first('file')}}</small>
  </div>
  <!--
  <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Option three is disabled
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<br/><br/><br/><br/><br/><br/>
<div class="about4">
    <div class="about4In">
        <h1>Our Mission</h1>
        <p>
            Milestone’s goal is to be a top leader in the Middle East in the field of Marketing &real-estate investment by presenting best housing solutions for all customers.
            The mission of Milestone is to be the most successful real estate firm in Egypt, a Company that incorporates proven, professional state of-the-art techniques specializing in the marketing, listing and selling of new and resale of luxury homes, residential communities, condominiums, home sites, undeveloped land ,commercial and investment opportunities.
            Milestone marketing & real estate investments maintain a full-time staff of well-trained real estate professionals who continually strive to provide top quality service for their individual clients and customers.
        </p>
    </div>
</div>

<div class="about5">
    <h1>Milestone business value</h1>
    <p>There are three traditional groups of methodologies for determining the value.</p>
    <p>These are usually referred to as the "three approaches to value" which are generally independent of each other.</p>
</div>

<div class="about5">
    <h1>The cost approach</h1>
    <p>The buyer will not pay more for a property than it would cost to purchase an equivalent.</p>
</div>

<div class="about5">
    <h1>The sales comparison approach</h1>
    <p>Comparing property’s characteristics with those of comparable properties that have recently sold in similar transactions.</p>
    <p>The income approach similar to the methods used for financial valuation.</p>    
</div>

<div class="about5">
    <h1>Our Territories</h1>
    <p>Milestone covers a wide range of premiere projects across Egypt in different territories Such as New Cairo,Shiekh Zayed ,Ain Sokhna, North Coast and Sharm Shiekh.</p>
</div>

<div class="clear"></div>
@stop