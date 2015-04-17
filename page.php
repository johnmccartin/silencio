<?php 
if(!$ajax) get_header();
?>



<!-- Generated with page.php -->

		<div class="page reader static">
		
		<script>
				var bodyClasses = [];
				<?php 
				
					$bcc = get_body_class('ajaxed'); 
					foreach ($bcc as $bc) : 
						 ?>
						bodyClasses.push('<?php echo $bc; ?>');
					
					<?php endforeach; ?>
			</script>
				
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
	
			<article class="page margin-bottom-4" id="post-<?php the_ID(); ?>">
				<?php if( !is_front_page() ) : ?><h3 class="ptitle"><?php the_title(); ?></h3><?php endif; ?>
					<div class="">
						<?php the_content(); ?>
					</div><!-- / -->
				
			</article><!-- / -->
		
			
			<?php endwhile; ?>
			
			
			<?php else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		
			<?php endif; ?>
					
				
		</div>
		

		
<!-- End page.php -->

<?php  ?>

<?php 

if(!$ajax) get_footer(); 

?>