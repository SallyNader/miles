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
                    <h2>Edit City <small></small></h2>
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
                   <div class="row" style="width:900px ;margin-left: 99px">

                     
                  
                        <div class="thumbnail" style="width:500px ;height:300px ">
                          <div class="image view view-first" style="width:120% ;height: 164%">
                            <img style="width: 83%;height: 60%; display: block;" src="{!!asset('city/'.$city->cityPic)!!}" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="POST"
                    file="true" enctype="multipart/form-data" action="{{route('controlcity.update',$city->cityId)}}">
 {{ method_field('PUT') }}
 {{ csrf_field() }}
                      <p> <a href="form.html"></a>
                      </p>
                      <span class="section"></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="city name" value="{{$city->cityName}}" type="text">
                          <p style="color:#169F85;">{{$errors->first('name')}}</p>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="country" placeholder="country name" value="{{$city->cityCountry}}" type="text">
                          <p style="color:#169F85;">{{$errors->first('country')}}</p>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> City Image<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" name="file">
                        </div>
                      </div>
                    
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        
                          <button id="send" type="submit" class="btn btn-success">Edit</button>
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