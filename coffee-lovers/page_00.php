<?php get_header(); ?>
		<section id="main" class="wrap">
			<section id="contents">
				<!-- <h3>リクエスト</h3> -->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<p class="post-info"><?php echo get_the_date(); ?></p>
					</article>
				<?php endwhile; endif; ?>
			</section>
		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>