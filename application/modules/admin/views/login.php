

    <div id="main" role="main">

      <!-- MAIN CONTENT -->
      <div id="content" class="container">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
            <div class="well no-padding">
              <form action="login" id="login-form" class="smart-form client-form">
                <header>
                  <?php echo lang('sign_in'); ?>
                </header>

                <fieldset>
                  
                  <section>
                    <label class="label"><?php echo lang('email'); ?><span class="error">*</span></label>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                      <input type="email" id="username" name="email">
                      <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Vennligst regisrer din epost adresse</b></label>
                  </section>

                  <section>
                    <label class="label"><?php echo lang('password'); ?><span class="error">*</span></label>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                      <input type="password" id="password" name="password">
                      <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Vennligst skriv inn ditt passord</b> </label>
                    <div class="note">
                      <a href="<?php echo base_url().'admin/forgot' ?>"><?php echo lang('forgot_password'); ?></a>
                    </div>
                  </section>

                  <section>
                    <label class="checkbox">
                      <input type="checkbox" id="remember_me" name="remember" checked="">
                      <i></i><?php echo lang('remember_me'); ?></label>
                  </section>
                </fieldset>
                <footer>
                  <button type="submit" id="submit" class="btn btn-warning fontClass">
                   <?php echo lang('sign_in'); ?>
                  </button>
                </footer>
              </form>
            </div> 
          </div>
        </div>
      </div>

    </div>
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
</script>