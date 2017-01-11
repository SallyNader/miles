@extends('control.master')


@section('content')

  <div class="title_left">
                <h3>
                </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                 
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New Unit <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="POST"
                    file="true" enctype="multipart/form-data" action="{{route('controlunit.store')}}">
{{csrf_field()}}
                      <p> <a href="form.html"></a>
                      </p>
                      <span class="section"></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit Code <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="code" placeholder="unit code" value="{{old('code')}}" type="text">

                           <p style="color:#169F85;">{{$errors->first('code')}}</p>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit Type <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="type" placeholder="unit type" value="{{old('type')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('type')}}</p>
                        </div>
                      </div>




                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number of Rooms <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="rooms" placeholder="number of rooms" value="{{old('rooms')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('rooms')}}</p>
                        </div>
                      </div>







                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Area SQM <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="sqm" placeholder="Area SQM" value="{{old('sqm')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('sqm')}}</p>
                        </div>
                      </div>









                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Area Of Land <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="land" placeholder="area of land" value="{{old('land')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('land')}}</p>
                        </div>
                      </div>







                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Furnished <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="furnished" placeholder="furnished" value="{{old('furnished')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('furnished')}}</p>
                        </div>
                      </div>









 <label for="heard" style="margin-left: 190px">Parking Exist</label>
                          <div class="item form-group" style="margin-left: 280px" >
                      
                          <select  name="parking" id="heard" class="form-control" style="width: 400px"  >
                            <option value="1">yes</option>
                            <option value="0">no</option>
                           
                          </select>
                      </div>









                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit Price <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="price" placeholder="unit price" value="{{old('price')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('price')}}</p>
                        </div>
                      </div>










                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price Currency <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="currency" placeholder="currancy of price" value="{{old('currency')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('currency')}}</p>
                        </div>
                      </div>









                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number Of Bedrooms <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="bedroom" placeholder="Number Of Bedrooms" value="{{old('bedroom')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('bedroom')}}</p>
                        </div>
                      </div>






<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number Of Bathrooms <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="bathroom" placeholder="Number Of Bathrooms" value="{{old('bathroom')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('bathroom')}}</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yearly Service Charge <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="yearcharge" placeholder="yesrly service charge" value="{{old('yearcharge')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('yearcharge')}}</p>

                        </div>
                      </div>









                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Unit Description <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="description" placeholder="description" value="{{old('description')}}" type="text">
                        </div>
                      </div>







              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">In Country <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="country" placeholder="country" value="{{old('country')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('country')}}</p>

                        </div>
                      </div>

       <label for="heard" style="margin-left: 190px" >Buy Or Rent</label>
<div class="item form-group" style="margin-left: 280px">
                
                          <select name="status" id="heard" class="form-control" style="width: 400px" >
                            <option value="Buy">buy</option>
                            <option value="Rent">rent</option>
                           
                          </select>
                      </div>

   <label for="heard" style="margin-left: 190px">Residential Or Commercial</label>
<div name="category" class="item form-group" style="margin-left: 280px">
                    
                          <select name="category" id="heard" class="form-control" style="width: 400px" >
                            <option value="commercial">commercial</option>
                            <option value="residential">residential</option>
                           
                          </select>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">In City <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="city" placeholder="in city" value="{{old('city')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('city')}}</p>

                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">In Region <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="region" placeholder="in region" value="{{old('region')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('region')}}</p>

                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">By Project <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="project" placeholder="by project" value="{{old('project')}}" type="text">
                           <p style="color:#169F85;">{{$errors->first('project')}}</p>

                        </div>
                      </div>


<!--
 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number Of Bedrooms <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="bedroom" placeholder="Number Of Bedrooms" value="{{old('bedroom')}}" type="text">
                        </div>
                      </div>




                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number Of Bedrooms <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="bedroom" placeholder="Number Of Bedrooms" value="{{old('bedroom')}}" type="text">
                        </div>
                      </div>





















-->



                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Unit Image<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" name="file">
                           <p style="color:#169F85;">{{$errors->first('file')}}</p>

                        </div>
                      </div>
                    
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        
                          <button id="send" type="submit" class="btn btn-success">Create</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>



@stop