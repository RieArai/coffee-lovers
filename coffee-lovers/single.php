<?php
	$category = get_the_category();
	$cat_name = $category[0]->cat_name;
?>

<?php get_header(); ?>
		<section id="main" class="wrap">
			<section id="contents" style="width:100%;">
				<div class="request">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article>
							<p class="day post-info"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
							<p class="category"><?php echo $cat_name; ?></p>
							<h2><?php the_title(); ?></h2>
							<div class="post-txt"><p><?php the_content(); ?></p></div>
							<div class="comments-area">
								<h3 class="ttl">コメント</h3>
								<?php comments_template(); ?>
							</div>
						</article>
					<?php endwhile; endif; ?>
				</div>
			</section>
		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>