     <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title class="title">Milestone | Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">





        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="{!!asset('vendors/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!!asset('vendors/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!!asset('vendors/nprogress/nprogress.css')!!}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{!!asset('vendors/iCheck/skins/flat/green.css')!!}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{!!asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')!!}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{!!asset('vendors/pnotify/dist/pnotify.css')!!}" rel="stylesheet">
    <link href="{!!asset('vendors/pnotify/dist/pnotify.buttons.css')!!}" rel="stylesheet">
    <link href="{!!asset('vendors/pnotify/dist/pnotify.nonblock.css')!!}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{!!asset('build/css/custom.min.css')!!}" rel="stylesheet">








  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <link href="{!!asset('vendors/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
        <link href="{!!asset('resources/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/map.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/style.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/tap.css')!!}" rel="stylesheet" type="text/css"/>
        <link href="{!!asset('resources/css/mob.css')!!}" rel="stylesheet" type="text/css"/>        
        <link href="{!!asset('resources/css/flexslider.css')!!}" rel="stylesheet" type="text/css"/>
    </head>
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


              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Unit Details</h2>
                 
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
<style type="text/css">
  
  h3{


   font-weight: bold
  }
</style>
                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title" style="font-weight: bold" >Unit Code </h3>

                      <p>{{$unit->uCode}} </p>



                      <h3 class="prod_title" style="font-weight: bold" >Unit Type</h3>

                      <p>{{$unit->uType}} </p>




                      <h3 class="prod_title" style="font-weight: bold">Unit's Rooms </h3>

                      <p>{{$unit->uNRooms}} </p>


                      <h3 class="prod_title" style="font-weight: bold">Unit Area SQM </h3>

                      <p>{{$unit->uAreaSQM}} </p>




                      <h3 class="prod_title" style="font-weight: bold">Unit land Area</h3>

                      <p>{{$unit->uLandArea}} </p>






                      <h3 class="prod_title" style="font-weight: bold">Furnished </h3>

                      <p>{{$unit->uFurnished}} </p>







                      <h3 class="prod_title" style="font-weight: bold">Unit Parking </h3>

                      <p>{{$unit->uParking}} </p>









                      <h3 class="prod_title" style="font-weight: bold">Unit Price</h3>

                      <p>{{$unit->uPrice}}  {{$unit->uPriceType}} </p>







                      <h3 class="prod_title" style="font-weight: bold">No of BedRooms </h3>

                      <p>{{$unit->uNBedRooms}} </p>







                      <h3 class="prod_title" style="font-weight: bold">BathRooms </h3>

                      <p>{{$unit->uNBathRooms}} </p>









                      <h3 class="prod_title" style="font-weight: bold">Unit Yearly Service Charge</h3>

                      <p>{{$unit->uYearlyServiceCharge}} </p>










                      <h3 class="prod_title" style="font-weight: bold">Unit Description</h3>

                      <p>{{$unit->uDescription}} </p>









                      <h3 class="prod_title" style="font-weight: bold">In Country </h3>

                      <p>{{$unit->uCountry}} </p>









                      <h3 class="prod_title" style="font-weight: bold">In City </h3>

                      <p>{{$unit->uCity}} </p>










                      <h3 class="prod_title" style="font-weight: bold">In Region </h3>

                      <p>{{$unit->uRegion}} </p>
                      

                       <h3 class="prod_title" style="font-weight: bold">Related To Project </h3>

                      <p>{{$unit->uProject}} </p>









                     


                       <h3 class="prod_title" style="font-weight: bold">Unit Date Of Creation </h3>

                      <p>{{$unit->uDate}} </p>









                    










                    







                       <h3 class="prod_title" style="font-weight: bold">Unit Approved </h3>

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
