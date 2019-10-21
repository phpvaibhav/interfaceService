<div id="main" role="main">
	<!-- MAIN CONTENT -->
	<div id="content" class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
			<div class="well no-padding">

			<form action="registration" id="smart-form-register" class="smart-form client-form" autocomplete="off">
			<header>
				<?php echo lang('Registration'); ?>
			</header>

			<fieldset>
				<section>
					 <label class="label"><?php echo lang('full_name'); ?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-user"></i>
						<input type="text" name="fullName" placeholder="<?php echo lang('full_name'); ?>" maxlength="50" size="50">
						<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_your_full_name');?></b> </label>
				</section>

				<section>
					 <label class="label"><?php echo lang('email'); ?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-envelope"></i>
						<input type="email" name="email" placeholder="<?php echo lang('email'); ?>"  maxlength="50" size="50">
						<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_your_email_address');?></b> </label>
				</section>
				<section>
					<label class="label"><?php echo lang('password'); ?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
						<input type="password" name="password" placeholder="<?php echo lang('password'); ?>" id="password"  autocomplete="new-password">
						<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_password');?></b> </label>
				</section>

				<section>
					<label class="label"><?= lang('confirm_password');?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
						<input type="password" name="passwordConfirm" placeholder="<?= lang('confirm_password');?>">
						<b class="tooltip tooltip-bottom-right"><?= lang('please_re_enter_your_password');?></b> </label>
				</section>
				<section>
					<label class="label"><?= lang('contact_number'); ?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-phone"></i>
					<input type="text" name="contact" maxlength="20" size="20" class="number-only" placeholder="<?= lang('contact_number'); ?>" data-mask="(999) 999-9999">
					<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_your_contact_number');?></b> </label>
				</section>
				<section>
					<label class="label"><?= lang('shipping_address'); ?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-location-arrow"></i>
					<input type="text" name="shippingAddress" maxlength="50" size="50" class="" placeholder="<?= lang('shipping_address'); ?>" >
					<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_your_shipping_address');?></b> </label>
				</section>

				<section>
					<label class="label"><?= lang('vat_Number');?><span class="error">*</span></label>
					<label class="input"> <i class="icon-append fa fa-list"></i>
					<input type="text" name="vatNumber" maxlength="50" size="50" class="" placeholder="<?= lang('vat_Number');?>" >
					<b class="tooltip tooltip-bottom-right">"<?= lang('please_enter_your_vat_number');?></b> </label>
				</section>
				<section>
					<label class="label"><?= lang('invoice_details');?></label>
					<label class="textarea">
						<textarea name="invoiceDetail" placeholder="<?= lang('invoice_details');?>" maxlength="700"></textarea>
						</label>
				</section>

			
			</fieldset>
			<footer>
				<button type="submit" id="submit" class="btn btn-warning fontClass">
					<?= lang('register');?>
				</button>
			</footer>

			<div class="message">
				<i class="fa fa-check"></i>
				<p>
					Thank you for your registration!
				</p>
			</div>
		</form>

	</div>
	
</div>
</div>
</div>

</div>
<script type="text/javascript">
	var please_enter_your_full_name  		= "<?= lang('please_enter_your_full_name');?>";
	var please_enter_your_email_address  	= "<?= lang('please_enter_your_email_address');?>";
	var please_enter_a_valid_email_address  = "<?= lang('please_enter_a_valid_email_address');?>";
	var please_enter_password  				= "<?= lang('please_enter_password');?>";
	var please_enter_password_limit  		= "<?= lang('please_enter_password_limit');?>";
	var please_re_enter_your_password  		= "<?= lang('please_re_enter_your_password');?>";
	var please_re_enter_wrong_password  	= "<?= lang('please_re_enter_wrong_password');?>";
	var please_enter_your_contact_number  	= "<?= lang('please_enter_your_contact_number');?>";
	var please_enter_your_shipping_address  = "<?= lang('please_enter_your_shipping_address');?>";
	var please_enter_your_vat_number  		= "<?= lang('please_enter_your_vat_number');?>";
</script>