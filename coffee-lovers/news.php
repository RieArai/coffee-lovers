<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>
	<section id="main" class="wrap">
		<section id="contents" class="News">
			<h2 class="ttl"><img src="<?php bloginfo('template_url'); ?>/images/news/ttl.png" alt=""></h2>
			<div class="container">
				<div class="category">
					<h3>カテゴリー</h3>
					<ul class="tab">
						<li class="current">all</li>
						<li>重要</li>
						<li>豆</li>
						<li>設備</li>
						<li>クレーム</li>
						<li>その他</li>
					</ul>
				</div>
				<div class="request">
					<?php $paged = get_query_var('paged'); ?>
					<div id="all-topics" class="category-list active">
						<?php query_posts(); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<article>
								<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
						 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<div class="btn">
									<!-- <p><a href="xxxx">いいね！</a></p> -->
									<p><a href="<?php the_permalink(); ?>">コメント</a></p>
								</div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>

					<div id="important" class="category-list hidden">
						<?php query_posts("cat=7&showposts=10"); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<article>
								<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
						 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<div class="btn">
									<!-- <p><a href="xxxx">いいね！</a></p> -->
									<p><a href="<?php the_permalink(); ?>">コメント</a></p>
								</div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>

					<div id="coffeebeans" class="category-list hidden">
						<?php query_posts("cat=8&showposts=10"); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<article>
								<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
						 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<div class="btn">
									<!-- <p><a href="xxxx">いいね！</a></p> -->
									<p><a href="<?php the_permalink(); ?>">コメント</a></p>
								</div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>

					<div id="facility" class="category-list hiddent">
						<?php query_posts("cat=9&showposts=10"); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<article>
								<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
						 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<div class="btn">
									<!-- <p><a href="xxxx">いいね！</a></p> -->
									<p><a href="<?php the_permalink(); ?>">コメント</a></p>
								</div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>

					<div id="claim" class="category-list hidden">
						<?php query_posts("cat=14&showposts=10"); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<article>
								<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
						 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<div class="btn">
									<!-- <p><a href="xxxx">いいね！</a></p> -->
									<p><a href="<?php the_permalink(); ?>">コメント</a></p>
								</div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>

					<div id="others" class="category-list hidden">
						<?php query_posts("cat=10&showposts=10"); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<article>
								<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
						 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<div class="btn">
									<!-- <p><a href="xxxx">いいね！</a></p> -->
									<p><a href="<?php the_permalink(); ?>">コメント</a></p>
								</div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>