<?php get_header(); ?>
	<section id="main" class="wrap">
		<section id="side">
			<div class="beans-navi">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl.png" alt=""></h2>
				<div class="meter">
					<p class="frame"></p>
					<p id="bg"></p>
					<p id="frame-bg"></p>
				</div>
				<ul>
					<li data-tgt="change-txt" class="change btns">> 豆の残量を変更する</li>
					<li data-tgt="mail-txt" class="mail btns"><a href="http://192.168.0.23:8888/coffee-lovers/?page_id=92">> 発注を依頼する</a></li>
				</ul>
			</div>
			<div class="modal change-txt">
				<div class="modalBody">
					<p class="close btn"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/close.png" alt=""></p>
					<p class="lead">いまのコーヒー豆の残量を変更してください</p>
					<ul class="list">
						<li id="short">
							<p><img src="<?php bloginfo('template_url'); ?>/images/top/meter/short/icon.png" alt=""></p>
							<p><img src="<?php bloginfo('template_url'); ?>/images/top/meter/short/txt.png" alt=""></p>
						</li>
						<li id="medium">
							<p><img src="<?php bloginfo('template_url'); ?>/images/top/meter/medium/icon.png" alt=""></p>
							<p><img src="<?php bloginfo('template_url'); ?>/images/top/meter/medium/txt.png" alt=""></p>
						</li>
						<li id="large">
							<p><img src="<?php bloginfo('template_url'); ?>/images/top/meter/large/icon.png" alt=""></p>
							<p><img src="<?php bloginfo('template_url'); ?>/images/top/meter/large/txt.png" alt=""></p>
						</li>
					</ul>
					<p class="caption">※「もう残り少ない」と選択した人は部長に速やかに<a href="http://192.168.0.23:8888/coffee-lovers/?page_id=92" target="_blank">発注を依頼</a>してください</p>
				</div>
				<div class="modalBK"></div>
			</div>
			<div class="bnr">
				<p><a href="http://www.unimat-life.co.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bnr/unimat.png" alt=""></a></p>
				<ul>
					<li><a href="http://kaldi-online.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bnr/kaldi.png" alt=""></a></li>
					<li><a href="http://www.starbucks.co.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bnr/starbucks.png" alt=""></a></li>
				</ul>
			</div>
			<p>
				<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
					<div style="padding:8px;">
						<div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
							<div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
							</div>
						</div>
						<p style=" margin:8px 0 0 0; padding:0 4px;"><a href="https://www.instagram.com/p/_SbCu3GvUM/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">The Coffee Office wishes all our customers a Merry Christmas and a happy New year !!!</a></p>
						<p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">The Coffee Officeさん(@the_coffee_office)が投稿した写真 - <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-12-14T21:47:29+00:00">2015 12月 14 1:47午後 PST</time></p>
					</div>
				</blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
			</p>
		</section>
		<section id="contents">
			<div class="news">
				<?php query_posts("cat=7&showposts=2"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<p class="day"><?php echo get_the_date(); ?></p>
					 	<p class="alert"><span>重要</span><?php the_title(); ?></p>
					 </article>
				<?php endwhile; endif; ?>
			</div>
			<div class="request">
				<h3>リクエスト</h3>
				<div class="intro">
					<p>コーヒー同好会サイトにあなたの意見を投稿してみよう！</p>
					<p class="btn"><a href="http://192.168.0.23:8888/coffee-lovers/wp-admin/index.php" target="_blank">投稿する</a></p>
				</div>
				<?php query_posts(); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<p class="day"><img src="<?php bloginfo('template_url'); ?>/images/common/icon/day.png" alt=""><?php echo get_the_date(); ?></p>
				 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				 		<div class="btn">
							<p><a href="<?php the_permalink(); ?>">コメント</a></p>
							<!-- <p><?php if(function_exists('wp_ulike_comments')) wp_ulike_comments('get'); ?></p> -->
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>