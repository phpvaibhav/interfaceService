
    <!--================================================== -->  
 <?php $backend_assets =  base_url().'backend_assets/'; ?>
    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    <script src="<?php echo $backend_assets; ?>js/plugin/pace/pace.min.js"></script>

      <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script> if (!window.jQuery) { document.write('<script src="<?php echo $backend_assets; ?>js/libs/jquery-3.2.1.min.js"><\/script>');} </script>

      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script> if (!window.jQuery.ui) { document.write('<script src="<?php echo $backend_assets; ?>js/libs/jquery-ui.min.js"><\/script>');} </script>

    <!-- IMPORTANT: APP CONFIG -->
    <script src="<?php echo $backend_assets; ?>js/app.config.js"></script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events     
    <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

    <!-- BOOTSTRAP JS -->   
    <script src="<?php echo $backend_assets; ?>js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- JQUERY VALIDATE -->
    <script src="<?php echo $backend_assets; ?>js/plugin/jquery-validate/jquery.validate.min.js"></script>
    
    <!-- JQUERY MASKED INPUT -->
    <script src="<?php echo $backend_assets; ?>js/plugin/masked-input/jquery.maskedinput.min.js"></script>
    
    <!--[if IE 8]>
      
      <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
      
    <![endif]-->
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
</script>
    <!-- MAIN APP JS FILE -->
    <script src="<?php echo $backend_assets; ?>js/app.min.js"></script>
    <script src="<?php echo $backend_assets; ?>custom/js/custom.js"></script>
  </body>
</html>