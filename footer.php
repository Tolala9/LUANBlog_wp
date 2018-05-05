
</div>
<!-- FOOTER -->
<footer class="footer">
	<div class="header-line">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">

					<div class="col-xs-1 col-xs-offset-2 col-sm-1 col-sm-offset-2"> 
						<div class="logo" title="Home"><a class="no-copy" href="<?php echo site_url('/') ?>">L<sup>b</sup></a></div>

					</div>

					<div class="col-xs-6 col-sm-4 col-sm-offset-1">
						<nav class="menu-line menu-line-footer">
							<ul>

								<?php wp_nav_menu(array(
										'theme_location' => 'footerMenuLocation',
										'menu' => 'main-menu',
  									'container' => '',
  									'items_wrap' => '%3$s' 
									)); ?>

							</ul>
						</nav>
					</div>

					<div class="col-xs-1 col-sm-1 col-sm-offset-1">
						<div class="search-box" title="Search"><a class="no-copy" href="#">S<sup>h</sup></a></div>

					</div>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- END FOOTER -->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/respond/respond.min.js"></script>
<![endif]-->


<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>


<?php wp_footer(); ?>
</body>
</html>