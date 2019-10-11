<!-- widget grid -->
<section id="widget-grid" class="">
        
	<!-- row -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
			<div class="well no-padding">

			<form method="post" action="changePassword" id="smart-form-changepass" class="smart-form client-form" enctype="multipart/form-data" novalidate autocomplete="off">
			<header>
				<?= lang('Change_password');?>
			</header>

			<fieldset>
				<section>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
						<input type="password" name="password" placeholder="<?= lang('Change_password');?>" id="password" autocomplete="new-password">
						<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_your_current_password');?></b> </label>
				</section>
				<section>
				<label class="input"> <i class="icon-append fa fa-lock"></i>
					<input type="password" name="npassword" id="npassword" placeholder="<?= lang('password');?>">
					<b class="tooltip tooltip-bottom-right"><?= lang('please_enter_your_new_password'); ?></b> </label>
				</section>

				<section>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
						<input type="password" name="rnpassword" placeholder="<?= lang('confirm_password'); ?>">
						<b class="tooltip tooltip-bottom-right"><?= lang('please_re_enter_your_password');?></b> </label>
				</section>
				
				
				

				
			</fieldset>
			<footer>
				<button type="submit" id="submit" class="btn btn-primary">
					<?= lang('Change');?>
				</button>
			</footer>

		
		</form>

	</div>
	
</div>
</div>
        
          <!-- end row -->
 
        
        </section>
        <!-- end widget grid -->


