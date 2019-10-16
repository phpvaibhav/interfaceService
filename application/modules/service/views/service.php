<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
				
			<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-deletebutton="false" >
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-cog"></i> </span>
					<h2><?= lang('Services');?></h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body padding">
						<div class="table-responsive">

							<table id="service_list" class="table table-striped table-bordered table-hover" width="100%">
								<thead>			                
									<tr>
										<th data-hide="phone">ID</th>
										<th data-class="expand"><?= lang('Product_Name'); ?></th>
										<th data-hide="phone"><?= lang('Manufacture');?></th>
										<th data-hide="phone"><?= lang('Model_name');?></th>
										<th data-hide="phone,tablet"><?= lang('Series_Number');?></th>
										<th data-hide="phone,tablet"><?= lang('Date_of_Purchase');?></th>
										<th data-hide="phone,tablet"><?= lang('Contact_Number'); ?></th>
										<th><?= lang('Fault_Description'); ?></th>
										<th data-hide="phone,tablet"><?= lang('Service_Status'); ?></th>
										<th data-hide="phone,tablet"><?= lang('Action'); ?></th>
										
									</tr>
								</thead>
								<tbody>
									
								
								</tbody>
							</table>

						</div>
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->


		

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

	<!-- end row -->

</section>
<!-- end widget grid -->
