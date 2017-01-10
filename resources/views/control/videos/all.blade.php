@extends('control.master')


@section('content')
 <div class="title_left">
                <h3>All Videos <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Videos <small></small></h2>
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

                    <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Video Name </th>
                            <th class="column-title">Approved </th>
                            <th class="column-title">Details </th>
                            <th class="column-title">Update </th>
                            <th class="column-title">Delete</th>
                            
                           
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          
                         
                         
                         
                         
                          
                         
@unless(empty($videos))

@foreach($videos  as  $v)
                          <tr class="odd pointer">
                            
                            <td class=" ">{{$v->vName}}</td>
                            <td class=" ">
                              @if($v->appearInHome==1)
                              yes

                              @elseif($v->appearInHome==0)
                              no

                              @endif


                            </td>
                            <td class=" "> <a href="{{route('controlvideo.show',$v->vId)}}"   class="btn btn-primary">View Details</a></td>
                            <td class=" "><a  href="{{route('controlvideo.edit',$v->vId)}}" class="btn btn-warning">Update</a></td>
                            <td class=" "> <a  href="{{url('controlvideo/delete/'.$v->vId)}}" class="btn btn-danger">Delete</a></td>
                          
                            
                          </tr>
                          @endforeach
                          @endunless

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->





@stop