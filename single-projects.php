<?php
 
get_header();
?>

<?php
global $wp_query;
$postID = $wp_query->post->ID;
$post_data = false;
if(have_posts()) { 
    while (have_posts() ) { the_post();
        $id = get_the_ID();
        // all other data are accessable with the id
        $cat = get_the_category($id);
        $fields = get_fields($id);
        $post_data = array(
            "title" => get_the_title($id),
            "content" => wpautop(get_the_content(null, true)),       
        );
        break;
	}
}
 
$url = get_the_permalink($id);
include( get_template_directory().'/template-parts/loader.php' );
include( get_template_directory().'/template-parts/part-header.php' );

?>

<div id="colorlib-page" >
		<div id="colorlib-work">
			<div class="container">
				<div class="row text-center ">
					<h2 class="bold">Works</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center  intro-heading">
						<span>Portfolio</span>
						<h2><?php echo $fields['title'];?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="rotate">
							<h2 class="heading">Portfolio</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="work-entry animate-box ">
							<a class="work-img " style="background-image: url('<?php echo wp_get_attachment_image_src ($fields["homepage-image"], 'full')[0]; ?>');">
							</a>
							<div class="col-md-12 m-auto">
								<div class="desc row">
								<p class="my-2 animate-box"><?php echo $fields['homepage-desc'];?></p>
									<?php if( have_rows('main-content') ): ?>
										<?php while( have_rows('main-content') ): the_row(); ?>
											<?php if( get_row_layout() == 'text' ): ?>											 
												<p class="my-2 animate-box"><?php echo the_sub_field('text');?></p><br>	

											<?php elseif( get_row_layout() == 'image' ): 
												$image = get_sub_field('image');
												?>
										<img class="col-12 mx-auto my-2 animate-box project-img" src="<?php echo $image ?>" alt=""><br>	
											
										<?php elseif( get_row_layout() == 'image2' ): 
												$image = get_sub_field('image');
												$image2 = get_sub_field('image2');
												?>
										<img class="col-12 col-md-6 mx-auto my-2 animate-box project-img" src="<?php echo $image ?>" alt="">
										<img class="col-12 col-md-6 mx-auto my-2 animate-box project-img" src="<?php echo $image2 ?>" alt=""> 
										<br>	
											

											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>


									<p class="read col-12 my-5"><a target="_blank" href="<?php echo $fields['web_link'];?>">Live Preview</a></p>


									<div class="prev mr-auto"><?php previous_post_link('%link', 'Previous: '.'%title'); ?> </div>
									 
									
									
									<div class="next ml-auto"><?php next_post_link('%link', 'Next: '.'%title'); ?> </div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  


</div>
<?php 
	include( get_template_directory().'/template-parts/part-contact.php' );

get_footer(); ?>

