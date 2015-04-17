<?php 
if(!$ajax) get_header();
?>



<!-- Generated with index.php -->

		<div class="posts reader">
				
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
	
			<article class="post margin-bottom-4" id="post-<?php the_ID(); ?>">
				<h3 class="ptitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<div class="">
						<?php the_content(); ?>
					</div><!-- / -->
				
					<div class="">
						<span class="post_time"><small>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?></small></span><br />
						<span class="post_tax"><small>Filed under: <?php the_category(', '); ?>.<?php if(has_tag()) : ?> Tags: <? the_tags('',' / ','');?>.<?php endif; ?></small></span>
					</div>
			</article><!-- / -->
		
			
			<?php endwhile; ?>
			
			<div class=""><p><?php posts_nav_link(' ~ ','Forward','Backward'); ?></p></div>
			
			
			<?php else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		
			<?php endif; ?>
					
				
		</div>
		
<!-- End index.php -->

<?php  ?>

<?php 
if(!$ajax) get_footer();  
?>