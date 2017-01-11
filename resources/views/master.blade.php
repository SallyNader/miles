
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title class="title">Milestone </title>
        <!--- video slider -->
         <link href="{!!asset('6/thumbs.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!!asset('5/ninja-slider.css')!!}" rel="stylesheet" type="text/css" />
    <!--ninjaVideoPlugin.js is required only when the slider contains video or audio.-->
    <script src="{!!asset('5/ninjaVideoPlugin.js')!!}"></script>
    <script src="{!!asset('5/ninja-slider.js')!!}" type="text/javascript"></script>
      <!--end video slider-->









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









<style type="text/css">
      .demo { position: relative; }
      .demo i {
        position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer;
      }
      </style>

<style>
        
        a {color:#1155CC;}
        header {display:block; background-color:#333; text-align:center;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #555;
            text-decoration:none;
            transition: color 0.7s;
        }
        header a.active {
            font-weight:bold;
            width: 24px;
            height: 24px;
            padding: 4px;
            text-align: center;
            display:inline-block;
            border-radius: 50%;

            background: #4d5256;
            color: #191919;
        }

        #ninja-slider-pager {
            display: none;

        }
    </style>












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


                        <form  action="{{url('search')}}" style="margin-top: 18px; " ><input type="text" style="border-radius: 50px;color: black;width: 230px;height: 30px;margin-right: 15px" name="keyword" placeholder="    search..." ><button type="submit" class="btn btn-default" style="font-size:14px;width: 40px;height: 30px;;"> 
                          
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
                            
                            <input type="submit" name="" value="SIGN OUT" style="border: none;background-color:#257da3;color: white;font-family: sans-serif;font-size: 15px;">
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

       
    



@yield('content')






  

 <footer>
            <div class="fooLeft">                    
                <p>Mobile: 01000-545-707 / 012-7681-5030</p>
                <p>Email: info@milestone-eg.com</p>
                <p>Website: www.milestone-eg.com</p> 
                <p>Address: 19 Hassan Sadek St., Heliopolis, Cairo, Egypt. </p>
            </div>
            <div class="fooRight">
            <p><a href="?page=login">Login</a><a href="?page=register">Register</a></p> 
                    <div class="suSc">
                        <p class="text">Subscribe To Our Newsletter :</p>
                        <form action="" method="post">
                            <input type="email" placeholder="Your Email .." />
                            <input type="submit" value="Subscribe" />                            
                        </form>
                    </div>
                </div>
            <div class="clear"></div>
        </footer>
        <a class="moveUp" data-scroll href="#topUp">
            <i class="fa fa-fw fa-angle-up"></i>
        </a>
        
        <div class="copy">
            <p>Copyright &copy; Milestone 2016</p>
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









        <!-- Scripts -->
        <script src="{!!asset('resources/js/jquery-1.11.2.min.js')!!}" type="text/javascript"></script>        
        <script src="{!!asset('resources/js/jquery.flexslider-min.js')!!}" type="text/javascript"></script>          
        <script src="{!!asset('resources/js/jquery.nicescroll.min.js')!!}" type="text/javascript"></script>
        <script src="{!!asset('resources/js/typed.js')!!}" type="text/javascript"></script>  
        <script src="{!!asset('resources/js/smooth-scroll.js')!!}" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{!!asset('resources/js/map.js')!!}"></script>
        <script src="{!!asset('resources/js/script.js')!!}" type="text/javascript"></script>        
    </body>
</html>
