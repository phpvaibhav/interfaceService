<?php $backend_assets =  base_url().'backend_assets/';?>
      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->

    <!-- PAGE FOOTER -->
    <div class="page-footer">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <span class="txt-color-white">1.0.0 <span class="hidden-xs"> - <?= lang('Web_Application');?></span><?php echo COPYRIGHT.lang('All_rights_reserved'); ?></span>
        </div>

        <div class="col-xs-6 col-sm-6 text-right hidden-xs">
          <div class="txt-color-white inline-block">
          <!--   <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i> -->
           <!--  <div class="btn-group dropup">
              <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                <i class="fa fa-link"></i> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right text-left">
                <li>
                  <div class="padding-5">
                    <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                    <div class="progress progress-micro no-margin">
                      <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="padding-5">
                    <p class="txt-color-darken font-sm no-margin">Server Load</p>
                    <div class="progress progress-micro no-margin">
                      <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="padding-5">
                    <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                    <div class="progress progress-micro no-margin">
                      <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                    </div>
                  </div>
                </li>
                <li class="divider"></li>
                <li>
                  <div class="padding-5">
                    <button class="btn btn-block btn-default">refresh</button>
                  </div>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE FOOTER -->

    <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
    Note: These tiles are completely responsive,
    you can add as many as you like
    -->
    <div id="shortcut">
      <ul>
       <!--  <li>
          <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
          <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
          <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
          <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
          <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li> -->
        <li>
          <a href="<?php echo base_url().'users/userDetail/'.encoding($user['userId']);  ?>" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span><?= lang('My_Profile');?></span> </span> </a>
        </li>  
        <li>
          <a href="<?php echo base_url().'users/changePassword/'.encoding($user['userId']);  ?>" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-key fa-4x"></i> <span><?= lang('Change_password');?></span> </span> </a>
        </li>
      </ul>
    </div>
    <!-- END SHORTCUT AREA -->

    <!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    <script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo $backend_assets ?>js/plugin/pace/pace.min.js"></script>

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      if (!window.jQuery) {
        document.write('<script src="<?php echo $backend_assets ?>js/libs/jquery-3.2.1.min.js"><\/script>');
      }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
      if (!window.jQuery.ui) {
        document.write('<script src="<?php echo $backend_assets ?>js/libs/jquery-ui.min.js"><\/script>');
      }
      var logout ="<?= lang('Logout');?>";
    </script>

    <!-- IMPORTANT: APP CONFIG -->
    <script src="<?php echo $backend_assets ?>js/app.config.js"></script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="<?php echo $backend_assets ?>js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

    <!-- BOOTSTRAP JS -->
    <script src="<?php echo $backend_assets ?>js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- CUSTOM NOTIFICATION -->
    <script src="<?php echo $backend_assets ?>js/notification/SmartNotification.min.js"></script>

    <!-- JARVIS WIDGETS -->
    <script src="<?php echo $backend_assets ?>js/smartwidgets/jarvis.widget.min.js"></script>

    <!-- EASY PIE CHARTS -->
    <script src="<?php echo $backend_assets ?>js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

    <!-- SPARKLINES -->
    <script src="<?php echo $backend_assets ?>js/plugin/sparkline/jquery.sparkline.min.js"></script>

    <!-- JQUERY VALIDATE -->
    <script src="<?php echo $backend_assets ?>js/plugin/jquery-validate/jquery.validate.min.js"></script>

    <!-- JQUERY MASKED INPUT -->
    <script src="<?php echo $backend_assets ?>js/plugin/masked-input/jquery.maskedinput.min.js"></script>

    <!-- JQUERY SELECT2 INPUT -->
    <script src="<?php echo $backend_assets ?>js/plugin/select2/select2.min.js"></script>

    <!-- JQUERY UI + Bootstrap Slider -->
    <script src="<?php echo $backend_assets ?>js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

    <!-- browser msie issue fix -->
    <script src="<?php echo $backend_assets ?>js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

    <!-- FastClick: For mobile devices -->
    <script src="<?php echo $backend_assets ?>js/plugin/fastclick/fastclick.min.js"></script>

    <!--[if IE 8]>

    <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

    <![endif]-->

    <!-- Demo purpose only -->
    <script src="<?php echo $backend_assets ?>js/demo.min.js"></script>

    <!-- MAIN APP JS FILE -->
    <script src="<?php echo $backend_assets ?>js/app.min.js"></script>

    <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
    <!-- Voice command : plugin -->
    <script src="<?php echo $backend_assets ?>js/speech/voicecommand.min.js"></script>

    <!-- SmartChat UI : plugin -->
    <script src="<?php echo $backend_assets ?>js/smart-chat-ui/smart.chat.ui.min.js"></script>
    <script src="<?php echo $backend_assets ?>js/smart-chat-ui/smart.chat.manager.min.js"></script>

  
    <!-- PAGE RELATED PLUGIN(S) 
    <script src="..."></script>-->
      <!-- PAGE RELATED PLUGIN(S) -->
    <!-- DataTables -->
<script src="<?php echo $backend_assets ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $backend_assets ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
<script type="text/javascript">
  var email_req ="<?php echo lang('please_enter_your_email_address');  ?>";
  var valid_email_req ="<?php echo lang('please_enter_a_valid_email_address');  ?>";
  var password_req ="<?php echo lang('please_enter_your_password');  ?>";
  var please_enter_your_full_name  = "<?= lang('please_enter_your_full_name');?>";
  var please_enter_your_email_address  = "<?= lang('please_enter_your_email_address');?>";
  var please_enter_a_valid_email_address  = "<?= lang('please_enter_a_valid_email_address');?>";
  var please_enter_password  = "<?= lang('please_enter_password');?>";
  var please_enter_password_limit  = "<?= lang('please_enter_password_limit');?>";
  var please_re_enter_your_password  = "<?= lang('please_re_enter_your_password');?>";
  var please_re_enter_wrong_password  = "<?= lang('please_re_enter_wrong_password');?>";
  var please_enter_your_contact_number  = "<?= lang('please_enter_your_contact_number');?>";
  var please_enter_your_shipping_address  = "<?= lang('please_enter_your_shipping_address');?>";
  var please_enter_your_vat_number  = "<?= lang('please_enter_your_vat_number');?>";
  var please_enter_your_current_password  = "<?= lang('please_enter_your_current_password');?>";
  var please_enter_your_new_password  = "<?= lang('please_enter_your_new_password');?>";
  var No_service_found  = "<?= lang('No_service_found');?>";
  var No_customer_found  = "<?= lang('No_customer_found');?>";
  var Showing_START_to_END_of_TOTAL_records  = "<?= lang('Showing_START_to_END_of_TOTAL_records');?>";
  var Showing_0_to_0_of_0_records  = "<?= lang('Showing_0_to_0_of_0_records');?>";
  var filtered_from_MAX_total_records  = "<?= lang('filtered_from_MAX_total_records');?>";
  var First  = "<?= lang('First');?>";
  var Last  = "<?= lang('Last');?>";
  var Next  = "<?= lang('Next');?>";
  var Previous  = "<?= lang('Previous');?>";
  var You_can_select_only_4_receipt  = "<?= lang('You_can_select_only_4_receipt');?>";
  var Please_enter_your_product_name  = "<?= lang('Please_enter_your_product_name');?>";
  var Please_enter_your_manufacture  = "<?= lang('Please_enter_your_manufacture');?>";
  var Please_enter_your_model_name  = "<?= lang('Please_enter_your_model_name');?>";
  var Please_enter_your_product_series_number  = "<?= lang('Please_enter_your_product_series_number');?>";
  var Please_select_your_product_date_of_purchase  = "<?= lang('Please_select_your_product_date_of_purchase');?>";
  var Please_enter_your_contact_number  = "<?= lang('Please_enter_your_contact_number');?>";
  var Please_enter_your_fault_description  = "<?= lang('Please_enter_your_fault_description');?>";
  var please_enter_your_password  = "<?= lang('please_enter_your_password');?>";
  var Processing  = "<?= lang('Processing');?>";
  var Loading  = "<?= lang('Loading');?>";
  var Please_enter_comment  = "<?= lang('Please_enter_comment');?>";
  var Please_enter_internal_comment  = "<?= lang('Please_enter_internal_comment');?>";
  var Please_enter_at_least_3_characters  = "<?= lang('Please_enter_at_least_3_characters');?>";
  var Please_enter_no_more_than_20_characters  = "<?= lang('Please_enter_no_more_than_20_characters');?>";
  var please_enter_your_password  = "<?= lang('please_enter_your_password');?>";
</script>
 <script src="<?php echo $backend_assets; ?>custom/js/listing.js"></script>
 <script src="<?php echo $backend_assets; ?>custom/js/custom.js"></script>

    <script>

      $(document).ready(function() {
        
        /* DO NOT REMOVE : GLOBAL FUNCTIONS!
         *
         * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
         *
         * // activate tooltips
         * $("[rel=tooltip]").tooltip();
         *
         * // activate popovers
         * $("[rel=popover]").popover();
         *
         * // activate popovers with hover states
         * $("[rel=popover-hover]").popover({ trigger: "hover" });
         *
         * // activate inline charts
         * runAllCharts();
         *
         * // setup widgets
         * setup_widgets_desktop();
         *
         * // run form elements
         * runAllForms();
         *
         ********************************
         *
         * pageSetUp() is needed whenever you load a page.
         * It initializes and checks for all basic elements of the page
         * and makes rendering easier.
         *
         */
        
         pageSetUp();
         
        /*
         * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
         * eg alert("my home function");
         * 
         * var pagefunction = function() {
         *   ...
         * }
         * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
         * 
         * TO LOAD A SCRIPT:
         * var pagefunction = function (){ 
         *  loadScript(".../plugin.js", run_after_loaded);  
         * }
         * 
         * OR
         * 
         * loadScript(".../plugin.js", run_after_loaded);
         */
        
      })
    
    </script>

    <!-- Your GOOGLE ANALYTICS CODE Below -->
    <script>
      var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
        _gaq.push(['_trackPageview']);
      
      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
$(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
    </script>

  </body>

</html>