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
                    <h2>Unit</h2>
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

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="{!!asset('unit/'.$unit->uFirstImage)!!}" alt="..." />
                      </div>
                      <!--<div class="product_gallery">
                        <a>
                          <img src="images/prod-2.jpg" alt="..." />
                        </a>
                        <a>
                          <img src="images/prod-3.jpg" alt="..." />
                        </a>
                        <a>
                          <img src="images/prod-4.jpg" alt="..." />
                        </a>
                        <a>
                          <img src="images/prod-5.jpg" alt="..." />
                        </a>
                      </div>-->
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">Unit Code </h3>

                      <p>{{$unit->uCode}} </p>



                      <h3 class="prod_title">Unit Type</h3>

                      <p>{{$unit->uType}} </p>


                       <h3 class="prod_title">Category</h3>

                      <p>{{$unit->uCategory}} </p>


                       <h3 class="prod_title">Status</h3>

                      <p>{{$unit->uTypeStatus}} </p>


                     



                      <h3 class="prod_title">Unit's Rooms </h3>

                      <p>{{$unit->uNRooms}} </p>


                      <h3 class="prod_title">Unit Area SQM </h3>

                      <p>{{$unit->uAreaSQM}} </p>




                      <h3 class="prod_title">Unit land Area</h3>

                      <p>{{$unit->uLandArea}} </p>






                      <h3 class="prod_title">Furnished </h3>

                      <p>{{$unit->uFurnished}} </p>







                      <h3 class="prod_title">Unit Parking </h3>

                      <p>{{$unit->uParking}} </p>









                      <h3 class="prod_title">Unit Price</h3>

                      <p>{{$unit->uPrice}}  {{$unit->uPriceType}} </p>







                      <h3 class="prod_title">No of BedRooms </h3>

                      <p>{{$unit->uNBedRooms}} </p>







                      <h3 class="prod_title">BathRooms </h3>

                      <p>{{$unit->uNBathRooms}} </p>









                      <h3 class="prod_title">Unit Yearly Service Charge</h3>

                      <p>{{$unit->uYearlyServiceCharge}} </p>










                      <h3 class="prod_title">Unit Description</h3>

                      <p>{{$unit->uDescription}} </p>









                      <h3 class="prod_title">In Country </h3>

                      <p>{{$unit->uCountry}} </p>









                      <h3 class="prod_title">In City </h3>

                      <p>{{$unit->uCity}} </p>










                      <h3 class="prod_title">In Region </h3>

                      <p>{{$unit->uRegion}} </p>
                      

                       <h3 class="prod_title">Related To Project </h3>

                      <p>{{$unit->uProject}} </p>









                     


                       <h3 class="prod_title">Unit Date Of Creation </h3>

                      <p>{{$unit->uDate}} </p>









                    










                      <h3 class="prod_title">Id Of User Who Insert The Unit </h3>

                      <p>{{$unit->uInsertedByUserId}} </p>








                       <h3 class="prod_title">Unit Approved </h3>

                      <p>@if($unit->uApproved==1)
                      Approved
                      @elseif($unit->uApproved==0)
                      Not Approved
                      @endif



                       </p>









                      
                      <br />
<!--
                      <div class="">
                        <h2>Available Colors</h2>
                        <ul class="list-inline prod_color">
                          <li>
                            <p>Green</p>
                            <div class="color bg-green"></div>
                          </li>
                          <li>
                            <p>Blue</p>
                            <div class="color bg-blue"></div>
                          </li>
                          <li>
                            <p>Red</p>
                            <div class="color bg-red"></div>
                          </li>
                          <li>
                            <p>Orange</p>
                            <div class="color bg-orange"></div>
                          </li>

                        </ul>
                      </div>
                      <br />

                      <div class="">
                        <h2>Size <small>Please select one</small></h2>
                        <ul class="list-inline prod_size">
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Small</button>
                          </li>
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                          <li>
                            <button type="button" class="btn btn-default btn-xs">Xtra-Large</button>
                          </li>
                        </ul>
                      </div>
                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price">Ksh80.00</h1>
                          <span class="price-tax">Ex Tax: Ksh80.00</span>
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                        <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>
                      </div>

                      <div class="product_social">
                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-rss-square"></i></a>
                          </li>
                        </ul>
                      </div>

                    </div>-->

<!--
                    <div class="col-md-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                              synth. Cosby sweater eu banh mi, qui irure terr.</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                              booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
                          </div>
                        </div>
                      </div>

                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



@stop