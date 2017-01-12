
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title class="title">Milestone | Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">





        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Milestone | Profile</title>

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




 <style type="text/css">
     
     /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


 </style>



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

    <body>
       <header class="elmentS" id="topUp">
            <div class="topHeader">
                <div class="logo">
                    <a href=""><img src="{!!asset('resources/images/logo.png')!!}"/></a>
                </div>
                <div class="lang">
                    <a class="en" href="">English</a>
                    <a class="ar" href="">عربى</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottomHeader">
                <div class="scrl">
                    <a class="closeNav"><i class="fa fa-remove"></i></a>
                    <ul> 
                        <li class="barNav"><i class="fa fa-fw fa-bars"></i></li>
                        <li class="openIt"><i class="fa fa-fw fa-bars"></i></li>  


                        <li> 


                        <form  action="{{url('search')}}" style="margin-top: 18px" ><input type="text" style="border-radius: 50px;color: black;width: 230px;height: 30px;margin-right: 15px" name="keyword" placeholder="    search..." ><button type="submit" class="btn btn-default" style="font-size:14px;width: 40px;height: 30px"> 
                          
                        <i  class="fa fa-search"></i></button> </form></li> 
                        <li><a  href="{{url('index')}}"> Home</a></li>
                        
                    <!--<li><a  href="?page=addproperty"><i class="fa fa-fw fa-plus-square"></i> Add your property</a></li>-->
                        <li class="li drop"><a ><i class="fa fa-search fa-fw"></i> Find Property <i class="fa fa-angle-down"></i></a>
                            <ul class="droped">
                                                       @unless(empty($countries))



                                                       @foreach($countries as $c)                                               
                                <li><a href="{{url('properties-buy-rent/'.$c->cName)}}">In {{$c->cName}}</a></li>

                                @endforeach

                                @endunless                               
                                                            </ul>                            
                        </li> 
                        @if(!Auth::check())
                        <li><a  href="{{url('register')}}"> Register</a></li>
                        <li><a  href="{{url('login')}}"> Sign In</a></li> 
                        @endif   

                        @if(Auth::check())
<li><a  href="{{url('profile')}}"> {{Auth::user()->name}}</a></li>
 <li><a  href="{{route('uploadunit.create')}}"> Upload New Unit</a></li>
                        <li>
                          <a>
                            <form action="{{url('logout')}}" method="POST">
                                {!! csrf_field() !!}
                            
                            <input type="submit" name="" value="SIGN OUT" style="border: none;background-color: #337ab7;color: white;font-family: sans-serif;font-size: 15px;">
                          </form>
                          </a>
                        </li>
                        @endif                       
                        <li><a  href="{{url('contactus')}}"> Contact us</a></li>
                        <li><a  href="{{url('about')}}"> About us</a></li>
                    <!--<li><a  href="?page=search"><i class="fa fa-fw fa-search"></i> Advanced Search </a></li>   -->
                    </ul>
                    <!--<div class="user">
                                       
                        </div>--> 
                    <div class="social">
                        <p>Connect with us</p>
                        <a href="#"><i class="facebook fa fa-facebook fa-fw"></i></a> 
                        <a href="#"><i class="instagram fa fa-instagram fa-fw"></i></a>   
                        <a href="#"><i class="linkedin fa fa-linkedin fa-fw"></i></a> 
                    </div>                    
                </div>
            </div>
        </header>
        <!--<style>
    #load_s{
        background-color: rgba(0,0,0,.6);
        position: fixed;
        top:0px;
        bottom: 0px;
        left:0px;
        right:0px;
        text-align: center;
        z-index: 10000;
    }
    .load_thing{
        width:50px;
        height:50px;         
        margin:20% auto;  
        color: #fff;
        border-radius: 50%;
        border:3px outset #eee;
        font-family: Arial;
        font-size: 30px;
        font-weight: 100;
        animation: rotat .2s infinite;        
    }
    @keyframes rotat {        
        to{transform: rotate(360deg)}               
    }
</style>
<div id="load_s">
    <div class="load_thing">
    </div>
</div>
<script>
    window.addEventListener("load", function () {
        var load_screen = document.getElementById("load_s");
        document.body.removeChild(load_screen);
    });
</script>-->

       

       
    
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
    <h1>Profile</h1>
</div>
<div class="col-lg-6 col-sm-6" style="margin-bottom: 100px;width: 1420px">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar" >
            <img style="width: 900px;height: 300px" alt="" src="{!!asset('profilepicture/'.Auth::user()->profilePicture)!!}">
        </div>
        <div class="card-info"> <span class="card-title">{{Auth::user()->name}}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
       
<div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">My Information</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Uploaded Units</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Approved Units</div>
            </button>
        </div>
        
    </div>

        <div class="well" style="height: 500px">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3></h3>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>My Units</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
                        <a href="{{url('uploadunit/create')}}"  id="compose" class="btn btn-sm btn-success btn-block" >Upload New Unit</a>
                      
                       @foreach($user->units as $u)
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                            @if($u->uApproved==0)
                              <i class="fa fa-circle-o"></i>
@else
                              <i class="fa fa-circle"></i>
                              @endif
                            </div>
                            <div class="right">
                              <h3> <a href="{{route('profile.show',$u->uId)}}">{{$u->uType}}</a> <small>{{$u->uDate}}</small></h3>
                              <p> </p>
                            </div>
                          </div>
                        </a>
                      @endforeach
                      
                  
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                        
                            <div class="col-md-4 text-right">
                              <p class="date"> </p>
                            </div>
                            <div class="col-md-12">
                              <h4> Units Info</h4>
                            </div>
                          </div>
                         
                          <div class="view-mail">
                            <p></p>
                            <p></p>
                          </div>
                          <div class="attachment">
                            
                            <ul>

                            @foreach($user->units as $u)
                              <li>
                                <a href="#" class="atch-thumb">
                                  <img style="width: 130px;height: 90px" src="{!!asset('unit/'.$u->uFirstImage)!!}" alt="img" />
                                </a>

                                <div class="file-name">
                                  {{$u->uType}}
                                </div>
                               


                                <div class="links">
                                  <a href="{{route('profile.show',$u->uId)}}">View Details</a> 
                                  
                                </div>
                              </li>
                              @endforeach

                          
                            

                            </ul>
                          </div>
                    
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3></h3>
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Approved Units</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
                        <a href="{{url('uploadunit/create')}}"  id="compose" class="btn btn-sm btn-success btn-block" >Upload New Unit</a>
                      
                       @foreach($user->units as $u)
                       @if($u->uApproved==1)
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                            @if($u->uApproved==0)
                              <i class="fa fa-circle-o"></i>
@else
                              <i class="fa fa-circle"></i>
                              @endif
                            </div>
                            <div class="right">
                              <h3><a href="{{route('profile.show',$u->uId)}}">{{$u->uType}} </a><small>{{$u->uDate}}</small></h3>
                              <p> </p>
                            </div>
                          </div>
                        </a>
                        @endif
                      @endforeach
                      
                  
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                        
                            <div class="col-md-4 text-right">
                              <p class="date"> </p>
                            </div>
                            <div class="col-md-12">
                              <h4> Units Info</h4>
                            </div>
                          </div>
                         
                          <div class="view-mail">
                            <p></p>
                            <p></p>
                          </div>
                          <div class="attachment">
                            
                            <ul>

                            @foreach($user->units as $u)
                              @if($u->uApproved==1)
                              <li>
                                <a href="#" class="atch-thumb">
                                  <img style="width: 130px;height: 90px" src="{!!asset('unit/'.$u->uFirstImage)!!}" alt="img" />
                                </a>

                                <div class="file-name">
                                  {{$u->uType}}
                                </div>
                               


                                <div class="links">
                                  <a href="{{route('profile.show',$u->uId)}}">View Details</a>
                                  
                                </div>
                              </li>
                              @endif
                              @endforeach

                          
                            

                            </ul>
                          </div>
                    
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>
        <div class="tab-pane fade in" id="tab3">
                    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Name</h4>
           
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      {{Auth::user()->name}}
                  </div>
                  <p></p>

                  <br/>
                  <div class="x_title">
                  <br>
                    <h4>Email</h4>
           
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      {{Auth::user()->email}}
                  </div>


                        <br/>
                  <div class="x_title">
                  <br>
                    <h4>Address</h4>
           
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      {{Auth::user()->address}}
                  </div>
                        <br/>
                  <div class="x_title">
                  <br>
                    <h4>Phone</h4>
           
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      {{Auth::user()->phone}}
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    
    </div>
            
    

          


























<script type="text/javascript">
      $(document).ready(function() {

        $('#config-text').keyup(function() {
          eval($(this).val());
        });
        
        $('.configurator input, .configurator select').change(function() {
          updateConfig();
        });

        $('.demo i').click(function() {
          $(this).parent().find('input').click();
        });

        $('#startDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment().subtract(6, 'days')
        });

        $('#endDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment()
        });

        updateConfig();

        function updateConfig() {
          var options = {};

          if ($('#singleDatePicker').is(':checked'))
            options.singleDatePicker = true;
          
          if ($('#showDropdowns').is(':checked'))
            options.showDropdowns = true;

          if ($('#showWeekNumbers').is(':checked'))
            options.showWeekNumbers = true;

          if ($('#showISOWeekNumbers').is(':checked'))
            options.showISOWeekNumbers = true;

          if ($('#timePicker').is(':checked'))
            options.timePicker = true;
          
          if ($('#timePicker24Hour').is(':checked'))
            options.timePicker24Hour = true;

          if ($('#timePickerIncrement').val().length && $('#timePickerIncrement').val() != 1)
            options.timePickerIncrement = parseInt($('#timePickerIncrement').val(), 10);

          if ($('#timePickerSeconds').is(':checked'))
            options.timePickerSeconds = true;
          
          if ($('#autoApply').is(':checked'))
            options.autoApply = true;

          if ($('#dateLimit').is(':checked'))
            options.dateLimit = { days: 7 };

          if ($('#ranges').is(':checked')) {
            options.ranges = {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            };
          }

          if ($('#locale').is(':checked')) {
            $('#rtl-wrap').show();
            options.locale = {
              direction: $('#rtl').is(':checked') ? 'rtl' : 'ltr',
              format: 'MM/DD/YYYY HH:mm',
              separator: ' - ',
              applyLabel: 'Apply',
              cancelLabel: 'Cancel',
              fromLabel: 'From',
              toLabel: 'To',
              customRangeLabel: 'Custom',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              firstDay: 1
            };
          } else {
            $('#rtl-wrap').hide();
          }

          if (!$('#linkedCalendars').is(':checked'))
            options.linkedCalendars = false;

          if (!$('#autoUpdateInput').is(':checked'))
            options.autoUpdateInput = false;

          if (!$('#showCustomRangeLabel').is(':checked'))
            options.showCustomRangeLabel = false;

          if ($('#alwaysShowCalendars').is(':checked'))
            options.alwaysShowCalendars = true;

          if ($('#parentEl').val().length)
            options.parentEl = $('#parentEl').val();

          if ($('#startDate').val().length) 
            options.startDate = $('#startDate').val();

          if ($('#endDate').val().length)
            options.endDate = $('#endDate').val();
          
          if ($('#minDate').val().length)
            options.minDate = $('#minDate').val();

          if ($('#maxDate').val().length)
            options.maxDate = $('#maxDate').val();

          if ($('#opens').val().length && $('#opens').val() != 'right')
            options.opens = $('#opens').val();

          if ($('#drops').val().length && $('#drops').val() != 'down')
            options.drops = $('#drops').val();

          if ($('#buttonClasses').val().length && $('#buttonClasses').val() != 'btn btn-sm')
            options.buttonClasses = $('#buttonClasses').val();

          if ($('#applyClass').val().length && $('#applyClass').val() != 'btn-success')
            options.applyClass = $('#applyClass').val();

          if ($('#cancelClass').val().length && $('#cancelClass').val() != 'btn-default')
            options.cancelClass = $('#cancelClass').val();

          $('#config-text').val("$('#demo').daterangepicker(" + JSON.stringify(options, null, '    ') + ", function(start, end, label) {\n  console.log(\"New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')\");\n});");

          $('#config-demo').daterangepicker(options, function(start, end, label) { console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')'); });
          
        }

      });
      </script>






<!-- jQuery -->
    <script src="{!!asset('vendors/jquery/dist/jquery.min.js')!!}"></script>
    <!-- Bootstrap -->
    <script src="{!!asset('vendors/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
    <!-- FastClick -->
    <script src="{!!asset('vendors/fastclick/lib/fastclick.js')!!}"></script>
    <!-- NProgress -->
    <script src="{!!asset('vendors/nprogress/nprogress.js')!!}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{!!asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}"></script>
    <!-- iCheck -->
    <script src="{!!asset('vendors/iCheck/icheck.min.js')!!}"></script>
    <!-- PNotify -->
    <script src="{!!asset('vendors/pnotify/dist/pnotify.js')!!}"></script>
    <script src="{!!asset('vendors/pnotify/dist/pnotify.buttons.js')!!}"></script>
    <script src="{!!asset('vendors/pnotify/dist/pnotify.nonblock.js')!!}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{!!asset('build/js/custom.min.js')!!}"></script>










    <script src="{!!asset('resources/js/jquery-1.11.2.min.js')!!}" type="text/javascript"></script>        
        <script src="{!!asset('resources/js/jquery.flexslider-min.js')!!}" type="text/javascript"></script>          
        <script src="{!!asset('resources/js/jquery.nicescroll.min.js')!!}" type="text/javascript"></script>
        <script src="{!!asset('resources/js/typed.js')!!}" type="text/javascript"></script>  
        <script src="{!!asset('resources/js/smooth-scroll.js')!!}" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{!!asset('resources/js/map.js')!!}"></script>
        <script src="{!!asset('resources/js/script.js')!!}" type="text/javascript"></script>        

    <!-- PNotify -->
    
    <!-- /PNotify -->

    <!-- Custom Notification -->
    <script>
      $(document).ready(function() {
        var cnt = 10;

        TabbedNotification = function(options) {
          var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
            "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

          if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
          } else {
            $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            $('#custom_notifications #notif-group').append(message);
            cnt++;
            CustomTabs(options);
          }
        };

        CustomTabs = function(options) {
          $('.tabbed_notifications > div').hide();
          $('.tabbed_notifications > div:first-of-type').show();
          $('#custom_notifications').removeClass('dsp_none');
          $('.notifications a').click(function(e) {
            e.preventDefault();
            var $this = $(this),
              tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
              others = $this.closest('li').siblings().children('a'),
              target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabbed_notifications).children('div').hide();
            $(target).show();
          });
        };

        CustomTabs();

        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
          idname = $(this).parent().parent().attr("id");
          tabid = idname.substr(-2);
          $('#ntf' + tabid).remove();
          $('#ntlink' + tabid).parent().remove();
          $('.notifications a').first().addClass('active');
          $('#notif-group div').first().css('display', 'block');
        });
      });
    </script>
    <!-- /Custom Notification -->













  

 
<script type="text/javascript">
    
    $(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
           
    </body>
</html>
