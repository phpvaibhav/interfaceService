		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
				
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
						<div class="well no-padding">
							<form action="forgotPassword" id="forgot-form" class="smart-form client-form">
								<header>
									<?php echo lang('forgot_password_title'); ?>
								</header>

								<fieldset>
									
									<section>
										<label class="label"><?php echo lang('please_enter_your_email_address');  ?> <span class="error">*</span></label>
										<label class="input"> <i class="icon-append fa fa-envelope"></i>
											<input type="email" name="email">
											<b class="tooltip tooltip-top-right"><i class="fa fa-envelope txt-color-teal"></i>  <?php echo lang('valid_email_pass'); ?></b></label>
									</section>
									
									<section>
										
										<div class="note">
											<a href="<?php  echo base_url(); ?>"><?php echo lang('i_remember_me'); ?></a>
										</div>
									</section>

								</fieldset>
								<footer>
									<button type="submit" id="submit" class="btn btn-warning fontClass">
										<i class="fa fa-refresh"></i> <?php echo lang('forgot_password_btn'); ?>
									</button>
								</footer>
							</form>

						</div>
						
					<!-- 	<h5 class="text-center"> - Or sign in using -</h5>
															
										<ul class="list-inline text-center">
											<li>
												<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
											</li>
										</ul> -->
						
					</div>
				</div>
			</div>

		</div>
<script type="text/javascript">
	var email_req ="<?php echo lang('please_enter_your_email_address');  ?>";
	var valid_email_req ="<?php echo lang('please_enter_a_valid_email_address');  ?>";
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