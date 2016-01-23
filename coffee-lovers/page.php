<?php get_header(); ?>
		<section id="main" class="wrap">
			<section id="contents" style="width:100%;">
				<div class="request">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article>
							<p class="post-info"><?php echo get_the_date(); ?></p>
					 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					 		<p><?php the_content(); ?></p>

					 		<div class="comments">
					 			<?php comments_template(); ?>
					 		</div>
						</article>
					<?php endwhile; endif; ?>
				</div>
			</section>
		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>