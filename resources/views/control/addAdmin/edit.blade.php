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
                    <h2>{{$user->name}} Role Edit <small></small></h2>
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
                    file="true" enctype="multipart/form-data" action="{{route('controluser.update',$user->id)}}">
 {{ method_field('PUT') }}
 {{ csrf_field() }}
                      <p> <a href="form.html"></a>
                      </p>
                      <span class="section"></span>

                  
                       <div class="item form-group">
                        
                        <label for="heard" style="margin-left: 190px">Role of User</label>
                          <div class="item form-group" style="margin-left: 280px" >
                      
                          <select  name="role" id="heard" class="form-control" style="width: 400px"  >



                            <option value="user">user</option>
                           <option value="admin">admin</option>
                            
                           
                          </select>
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