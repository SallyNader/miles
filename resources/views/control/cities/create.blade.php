@extends('control.master')


@section('content')

  <div class="title_left">
                <h3></h3>
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
                    <h2>Create New City <small></small></h2>
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
                    file="true" enctype="multipart/form-data" action="{{route('controlcity.store')}}">
{{ csrf_field() }}
                      <p> <a href="form.html"></a>
                      </p>
                      <span class="section"></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="city name"  type="text" value="{{old('name')}}" >
                           <p style="color:#169F85;">{{$errors->first('name')}}</p>
                        </div>
                      </div>



 <label for="heard" style="margin-left: 190px">Country Name</label>
                          <div class="item form-group" style="margin-left: 280px" >
                      
                          <select  name="country" id="heard" class="form-control" style="width: 400px"  >


@unless(empty($countries))

@foreach($countries  as  $c)

                            <option value="{{$c->cName}}">{{$c->cName}}</option>
                            @endforeach
                          @endunless

                            
                           
                          </select>
                      </div>

                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="country" placeholder="country name" type="text" value="{{old('country')}}">
                        <p style="color:#169F85;">{{$errors->first('country')}}</p>
                        </div>
                         
                      </div>-->
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> City Image<span class="required"></span>
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