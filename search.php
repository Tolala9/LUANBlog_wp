<?php 

get_header();

if (have_posts()) : ?>

<!-- for searching -->
<!-- Archive TITLE -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">

				<div class="col-sm-4 col-sm-offset-2 col-xs-8 col-xs-offset-2 ">
					<div class="search-page-block-info">
						<h1 class="search-page-block-info__title">Search Results For: <?php the_search_query(); ?></h1>
						<hr>
						<div class="search-page-block-info__intro">
							<p>Bellow you can see the result of your search query, that contains all related info with your query.</p>
						</div>
					</div> 
				</div> 

				<div class="col-sm-4 col-sm-offset-0  col-xs-8 col-xs-offset-2 ">
					<div class="search-page-block-action">
						<h1 class="search-page-block-action__title">You can search again</h1>
						<hr>
						<div class="search-page-block-action__box">
							<form class="search-field-large" role="search" method="get" id="searchform"  action="<?php echo home_url( '/' ); ?>">
								<input type="text" placeholder="Search..." title="Type the text" value="" name="s" placeholder="<?php the_search_query(); ?>">
								<button class="submit" title="Begin search"><i class="fab fa-searchengin"></i></button>
							</form>
						</div>
					</div> 
				</div> 

			</div> 
		</div> 
	</div> 
	<!--END Archive TITLE -->

<div class="posts-wrap ">
	<!-- POST ITEM -->


	<?php	
	while (have_posts()) : the_post(); 

		get_template_part('content-blog');


	endwhile;

else:

	get_template_part('content-notfound');

endif; 
?>
</div>








<!-- TOP BUTTON -->
<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
<!-- END TOP BUTTON --> 

<!-- Footer -->
<?php get_footer(); ?>