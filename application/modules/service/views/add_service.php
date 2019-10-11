<!-- widget grid -->
        <section id="widget-grid" class="">
        
          <!-- row -->
         <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
			<div class="well no-padding">

			<form method="post" action="addService" id="smart-form-service" class="smart-form client-form" enctype="multipart/form-data" novalidate="" autocomplete="off">
			<header>
				<?= lang('Add_service'); ?>
			</header>

			<fieldset>
				<section>
					 <label class="label"><?= lang('Product_Name'); ?><span class="error">*</span></label>
					<label class="input">
						<input type="text" name="productName" placeholder="<?= lang('Product_Name'); ?>" maxlength="50" size="50" >
						
						</label>
				</section>
				<section>
					 <label class="label"><?= lang('Manufacture');?><span class="error">*</span></label>
					<label class="input">
						<input type="text" name="vendor" placeholder="<?= lang('Manufacture');?>" maxlength="50" size="50" >
						</label>
				</section>
				<section>
					 <label class="label"><?= lang('Model_name');?><span class="error">*</span></label>
					<label class="input">
						<input type="text" name="modelName" placeholder="<?= lang('Model_name');?>" maxlength="50" size="50" >
						</label>
				</section>
				<section>
					 <label class="label"><?= lang('Series_Number');?><span class="error">*</span></label>
					<label class="input">
						<input type="text" name="serialNumber" placeholder="<?= lang('Series_Number');?>" maxlength="50" size="50" class="alfaNumeric">
						</label>
				</section>
				<section>
					 <label class="label"><?= lang('Date_of_Purchase');?><span class="error">*</span></label>
					<label class="input">
						<input type="text" id="purchaseDate" name="purchaseDate" placeholder="<?= lang('Date_of_Purchase');?>"
						class="datepicker purchaseDate" readonly>
						</label>
				</section>
				<section>
					 <label class="label"><?= lang('Contact_Number'); ?><span class="error">*</span></label>
					<label class="input">
						<input type="text" name="contactNumber" placeholder="<?= lang('Contact_Number'); ?>" maxlength="20" size="20"  data-mask="(999) 999-9999"  class="number-only">
						</label>
				</section>
				<section>
				<label class="label"><?= lang('Receipt_of_Purchase'); ?></label>
				<div class="input input-file">
				<span class="button"><input type="file" name="serviceImage[]" id="file" onchange="if(this.files.length > 4){ this.value = ''; alert(You_can_select_only_4_receipt);}else{this.parentNode.nextSibling.value = this.files.length+' Files'}" accept="image/*,application/pdf, application/vnd.ms-excel,application/msword,text/plain, application/pdf" size="10" multiple="multiple"><?= lang('Browse');?></span><input type="text" readonly="">
				</div>
				
				</section>
				<section>
					<label class="label"><?= lang('Fault_Description');?><span class="error">*</span></label>
					<label class="textarea">
						<textarea name="faultDescription" placeholder="<?= lang('Fault_Description');?>" maxlength="700"></textarea>
						</label>
				</section>

				
			</fieldset>
			<footer>
				<button type="submit" id="submit" class="btn btn-primary">
					<?= lang('Add'); ?>
				</button>
			</footer>

		
		</form>

	</div>
	
</div>
</div>
        
          <!-- end row -->
 
        
        </section>
        <!-- end widget grid -->


