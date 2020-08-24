<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Template_Site
 */

get_header();
include( get_template_directory().'/template-parts/loader.php' );
include( get_template_directory().'/template-parts/part-header.php' );
 
?>
 <section id="four-oh-four">
<!-- 	<h1>404</h1> -->
<!-- 	<img class="bg" alt="404" /> -->
	<div id="error-container">
<!-- 		<div class="overlay"></div> -->
		<div class="terminal">
			<div class="window-title">
				<div class="window-buttons">
					<a id="close" class="button" href="#"></a>
					<a id="min" class="button" href="#"></a>
					<a id="max" class="button" href="#"></a>
				</div>
				<span class="title">404</span></div>
			<div class="message">
				<span class='prompt'><span class='user'>root</span><span class="at">@</span><span class="path">~/404</span>><span class="caret">$</span> </span>
				<span class="typed"></span>
 
			</div>
		</div>
	</div>
</section>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Source+Code+Pro:400,500,600,700' type='text/css' media='screen'/>


<?php wp_footer(); ?>
  <script>
$(function() {


	var options = {
		strings: [
			"Oops! <br/>" + 
			"><span class='caret'>$</span> You might have mis-typed the URL, <br/> ^1" +
			"><span class='caret'>$</span> or maybe the page has been moved. <br/> ^50" +			 
			"><span class='caret'>$</span> Would you like to go back to the <a href='<?php echo get_site_url(); ?>'>homepage</a>?"
		],
		showCursor: true,
		cursorChar: '_',
		autoInsertCss: true,
		typeSpeed: 25,
		startDelay: 1000,
		loop: false,
 
	}
 
var typed = new Typed('.typed', options);


 
});

  </script>