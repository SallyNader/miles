@extends('master')
@section('content')

<div id="target1" class="windowSize target1">
    <div class="windowSizeInFst">
        <div class="divContFst">
            <h1>Milestone</h1>
            <p>AT MILESTONE WE STRIVE AND WORK HARD, TO GET OUR CUSTOMERS ONLY THE BEST PROJECTS, WITH BEST LOCATIONS AND PAYMENT PLANS.</p>
            <img src="../resources/images/global/1212.png"/>
        </div>
        <a data-scroll href="#target2"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div>    
</div>

 <script type="text/javascript">
        //don't copy the script below into your page.
        if (!document.domain) alert("The video will not work properly if opening the page by local path. Please test this page through HTTP on a web or localhost server");
    </script>
 <style>
        body {font: normal 0.9em Arial;margin:0;}
        a {color:#1155CC;}
        header {display:block;padding:60px 0 10px;background-color:#333; text-align:center;}
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
      <!--start-->
    <div id="ninja-slider"  >
        <div class="slider-inner" >
            <ul >
                <li>
                    <div class="video">
                        <iframe src="https://player.vimeo.com/video/136205074?title=0&portrait=0&byline=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </li>
                <li>
                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/Bp119VFEjHE?enablejsapi=1&start=0&rel=0&showinfo=0&iv_load_policy=3&modestbranding=1" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <a class="ns-img" href="{!!asset('img/2.jpg')!!}"></a>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <div class="video">
                        <video controls data-autoplay="false">
                            <source src="{!!asset('img/mcvideo.mp4')!!}" type="video/mp4" />
                        </video>
                    </div>
                    <a class="ns-img" href="{!!asset('img/3.jpg')!!}"></a>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <a class="ns-img" href="{!!asset('img/4.jpg')!!}"></a>
                    <div class="video" style="background-color:transparent;height:auto;top:auto;bottom:0px;">
                        <audio controls>
                            <source src="{!!asset('img/mcaudio.mp3')!!}" type="audio/mpeg">
                        </audio>
                    </div>
                </li>
            </ul>
        </div>
        <div id="thumbs">
            <span onclick="nslider.displaySlide(0)"><img src="{!!asset('img/1.jpg')!!}" /></span>
            <span onclick="nslider.playVideo(1)"><img src="{!!asset('img/2.jpg')!!}" /><span class="playvideo">AUTO</span></span>
            <span onclick="nslider.displaySlide(2)"><img src="{!!asset('img/3.jpg')!!}" /></span>
            <span onclick="nslider.playVideo(3)"><img src="{!!asset('img/4.jpg')!!}" /><span class="playvideo">AUTO</span></span>
        </div>
    </div>   
</div>

 <style type="text/css">
      .demo { position: relative; }
      .demo i {
        position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer;
      }
      </style>

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
<div id="target2" class="windowSize target2">
    <div class="windowSizeIn">
        <div class="divCont">
            <div class="divContIn">
                <h1>NEW CAIRO PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>

                <img src="../resources/images/units/unit1.jpg"/>
            </div> 
        </div>
        <a data-scroll href="#target3"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>

    </div> 



<div id="target3" class="windowSize target3">

    <div class="windowSizeIn">
        <div class="divCont2">
            <div class="divContIn">
                <h1>6th OF OCTOBER PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>

                <img src="../resources/images/units/unit3.jpg"/> 
                <img src="../resources/images/units/unit2.jpg"/>            
                
            </div> 
        </div>
        <a data-scroll href="#target4"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div> 
</div>

<div id="target4" class="windowSize target4">
    <div class="windowSizeIn">
        <div class="divCont3">
            <div class="divContIn">
                <h1>North Coast PROJECTS</h1>

                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>
                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>
            </div> 
        </div>

        <a data-scroll href="#target5"><span class="downMore"><i class="fa fa-fw fa-angle-down"></i></span></a>
    </div> 
</div>

<div id="target5" class="windowSize target5">
    <div class="windowSizeIn">
        <div class="divCont4">
            <div class="divContIn">
                <h1>North Coast PROJECTS</h1>

                <img src="../resources/images/units/unit1.jpg"/>
                <p>
                    At Milestone we strive and work hard, to get our customers only the best projects, with best locations and payment plans.
                </p>                
            </div> 
        </div>
        <a data-scroll href="#target1"><span class="downMore"><i class="fa fa-fw fa-angle-up"></i></span></a>
    </div> 
</div>                     
@stop