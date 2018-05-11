<?php get_header(); ?>
	<!--END HEADER -->


	<!--ARCHIVE ITEMS -->
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">	

		<div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-2 ">

			<div class="archive-item archive-item-recentpost">
				<div class="arch-item-title"><a href="#">
					Recent 5 Posts
				</a></div>
				<div class="gray-line"></div>
				<div class="arch-item-content">
					<ul>
						<li><a href="#">The first post about something...</a></li>
						<li><a href="#">The first post about something...</a></li>
						<li><a href="#">The first post about something...</a></li>
						<li><a href="#">The first post about something...</a></li>
						<li><a href="#">The first post about something...</a></li>
					</ul>

				</div>
			</div>

			<div class="archive-item archive-item-popularpost">
				<div class="arch-item-title">
					<a href="#">Popular Posts</a>
				</div>
				<div class="gray-line"></div>
				<div class="arch-item-content">
					<ul>
						<li><a href="#">The first post about something...</a></li>
						<li><a href="#">The first post about something...</a></li>
						<li><a href="#">The first post about something...</a></li>
					</ul>
					

				</div>
			</div>


		</div>

		<div class="col-sm-4 col-sm-offset-1 col-md-2 col-md-offset-1  col-lg-2 col-lg-offset-1">
			
			<div class="archive-item archive-item-search">
				<div class="arch-item-title"><a href="<?php echo site_url('/?s') ?>">
					Search
				</a></div>
				<div class="gray-line"></div>
					<form class="archive-search-field" role="search" method="get" id="searchform"  action="<?php echo home_url( '/' ); ?>">
						<input type="text" title="Type the text" value="" name="s" placeholder="<?php the_search_query(); ?>">
						<button class="submit" title="Begin search"><i class="fab fa-searchengin"></i></button>
					</form>

			</div>

						<div class="archive-item archive-item-tags">
				<div class="arch-item-title">
					<a href="<?php echo site_url('/tags') ?>">Tags</a>
				</div>
				<div class="gray-line"></div>
				<div class="arch-item-content">
					<ul>
						<li><a href="#">CSS</a></li>
						<li><a href="#">Web</a></li>
						<li><a href="#">Mobile</a></li>
						<li><a href="#">Desctop</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">fix</a></li>
						<li><a href="#">Quick_fix</a></li>
						<li><a href="#">git</a></li>
					</ul>
					

				</div>
			</div>


			


			
		</div>

		<div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1  col-lg-2 col-lg-offset-1">

			<div class="archive-item archive-item-categories">
				


				<div class="arch-item-title"><a href="<?php echo site_url('/categories/') ?>">
					Some Categories
				</a></div>
				<div class="gray-line"></div>
				<div class="arch-item-content">
					<ul>
						<li><a href="#">php</a></li>
						<li><a href="#">Wp</a></li>
						<li><a href="#">sublime text</a></li>
						<li><a href="#">sass</a></li>
						<li><a href="#">gulp</a></li>
					</ul>

				</div>





			</div>



			

			<div class="archive-item archive-item-socials">
				<div class="arch-item-title"><a href="<?php echo site_url('/') ?>">
					Follow
				</a></div>
				<div class="gray-line"></div>
				<div class="arch-item-content">
					<ul>
						<li><a class="folow-item" title="LinkedIn" href="https://www.linkedin.com/in/anatolii-lukavenko/" target="_blank"  ><i class="fab fa-linkedin-in"></i></a></li>
						<li><a  class="folow-item" title="Facebook" href="https://www.facebook.com/profile.php?id=100004768836692" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="folow-item" title="Git" href="https://github.com/Tolala9" target="_blank"><i class="fab fa-git"></i></a></li>
						<li><a class="folow-item" title="Site" href="http://luancv.000webhostapp.com/" target="_blank"><i class="fab fa-internet-explorer"></i></a></li>
					</ul>

				</div>
			</div>

		</div>

	</div>
</div>
</div>
	<!-- END ARCHIVE ITEMS -->
	
 
<!-- TOP BUTTON -->
<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
<!-- END TOP BUTTON -->

	
<?php get_footer(); ?>
