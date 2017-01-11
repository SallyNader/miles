@extends('control.master')


@section('content')
 <div class="title_left">
                <h3>

                <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                  
                </div>
              </div>
            </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Types <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    <!--  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>-->
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
                            
                           
                            <th class="column-title">type Name </th>
                        
                             <th class="column-title">View Details </th>
                            <th class="column-title">Update </th>
                            <th class="column-title">Delete</th>
                            
                           
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          
                         
                         
                         
                         
                          
                         
@unless(empty($types))

@foreach($types  as  $t)

                          <tr class="odd pointer">
                           
                     

     <td class=" ">{{$t->tStatus}}</td>                          
                            <td class=" "> <a class="btn btn-primary"  href="{{route('controltype.show',$t->tId)}}" >View Details</a></td>
                            <td class=" "><a class="btn btn-warning"  href="{{route('controltype.edit',$t->tId)}}" >Update</a></td>
                            <td class=" "> <a class="btn btn-danger" href="{{url('controltype/delete/'.$t->tId)}}"  >Delete</a></td>
                          
                            
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