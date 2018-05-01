<?php get_header(); ?> 
	<!--END HEADER -->

	<div class="home-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

			<div class="col-sm-4 col-sm-offset-4">
				<div class="home-title">
					<h2><?php echo get_bloginfo('name'); ?></h2>
					<h3><?php echo get_bloginfo('description'); ?></h3>
					<p class="quote">"Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do."</p>
					<p class="author-quote">- Pelé</p>
				</div>
				</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="home-image">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/home-img.jpg" alt="Home image">
				</div>
			</div>
<!-- Follow section -->
			<div class="col-sm-8 col-sm-offset-2">
				<div class="home-follow">
					<div class="home-follow-box"><p>Follow me:</p></div>
					<a class="folow-item" title="LinkedIn" href="#" ><i class="fab fa-linkedin-in"></i></a>
					<a  class="folow-item" title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
					<a class="folow-item" title="Git" href="#"><i class="fab fa-git"></i></a>
					<a class="folow-item" title="Site" href="#"><i class="fab fa-internet-explorer"></i></a>
				</div>
			</div>
<!--End Follow section -->

<!-- Contact section -->
			<div class="col-sm-8 col-sm-offset-2">
				<form class="home-contact" action="https://formspree.io/anatolii.lukavenko@gmail.com" class="main-form" target="_blank" method="POST" >

					<div class="contact-flex-wrap">

					<div class="home-contact-box"><p>Contact me:</p></div>
					
					
					<div class="credential-box">

						<input class="name-field" type="text" name="Name" placeholder="Type your name..." data-validation-required-message="You didn`t type a name" required>
						<span class="help-block text-danger"></span>

						<input class="email-field" type="text" name="E-mail" placeholder="Type your E-mail..." data-validation-required-message="You didn`t type an E-mail correct"  required>
						<!-- <span class="help-block text-danger"></span> -->

					</div>
					

					<textarea class="message"  name="Text" placeholder="Type your comment here..."></textarea>
					
				</div>

					<div class="col-sm-12 nopadding-left nopadding-right">

						<button class="contact-send"><p>send</p></button>
					</div>
					
				</form>
			</div>

<!-- End Contact section -->


			<div class="col-sm-8 col-sm-offset-2">
				<div class="copyright"><p>&copy; Anatolii Lukavenko <?php echo date("Y"); ?></p></div>
			</div>





			</div>
		</div>
	</div>
	</div>

<!-- TOP BUTTON -->
<div class="top" title="UP"><i class="far fa-caret-square-up"></i></div>
<!-- END TOP BUTTON -->	

<!-- Footer -->
<?php get_footer(); ?>
	
	















