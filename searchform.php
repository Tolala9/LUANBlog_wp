<form class="search-field" role="search" method="get" id="searchform"  action="<?php echo home_url( '/' ); ?>">

	<input type="text" title="Type the text" value="" name="s" placeholder="<?php the_search_query(); ?>">
	<button class="submit" title="Begin search" ><i class="fab fa-searchengin"></i></button>

</form>

