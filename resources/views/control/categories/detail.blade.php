@extends('control.master')


@section('content')

 <div class="title_left">
                <h3> <small> </small> </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                             



                             
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$category->catName}}<small>  </small></h2>
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

                    <div class="row">

                      <p></p>

                  @unless(empty($category))
                      <div class="col-md-55">
                        <div class="thumbnail" style="width: 500px;height: 400px">
                          <div class="image view view-first" style="height: 350px" >
                            <img style="width: 100%;height: 344px; display: block;" src="{!!asset('category/'.$category->catPic)!!}" alt="image" />
                        
                          </div>
                          <div class="caption" style="height: 40px">
                            <p>{{$category->catName}}</p>
                          </div>
                        </div>
                      </div>
                      @endunless
                    
                   
                  
              
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



@stop