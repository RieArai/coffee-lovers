<?php get_header(); ?>
	<?php
		global $wp_query;
		$total_results = $wp_query->found_posts;
		$search_query = get_search_query();
	?>
	<section id="main" class="wrap">
		<section id="contents" style="width:100%;">
			<div class="request">
				<h1 class="search"><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h1>
				<?php
					if( $total_results >0 ):
					if(have_posts()):
					while(have_posts()): the_post();
				?>
				<article>
					<p class="day post-info"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
				<?php endwhile; endif; else: ?>
					<?php echo $search_query; ?> に一致する情報は見つかりませんでした。
				<?php endif; ?>
			</div>
		</section>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>