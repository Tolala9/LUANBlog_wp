<!-- PAGINATION  -->
<div class="pagination-wrap">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 ">


				<div class="col-xs-12 col-sm-4 col-sm-offset-4 nopadding-left">
					<div class="pagination-items">


						<?php echo paginate_links(array(
							'mid_size' => 2,
							'prev_text' => __('PREV', 'textdomain'),
							'next_text' => __('NEXT', 'textdomain')
						));  ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGINATION  -->  