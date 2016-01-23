<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
	<section id="main" class="wrap">
		<section id="contents" class="About">
			<h2 class="ttl"><img src="<?php bloginfo('template_url'); ?>/images/about/ttl.png" alt=""></h2>
			<div class="container">
				<!-- <h3>コーヒー部について</h3> -->
				<div class="txt">
					<p><strong>こんにちは！コーヒー部です！</strong></p>
					<p>わたしたちはいつでも気軽にコーヒーを飲めるようオフィス内で融資を募り、<br>仕事中でもコーヒーを楽しむことができるよう活動しているグループです。</p>
				</div>
				<div class="txt point">
					<ul>
						<li><span>会員はワンコイン<br>月500円</span><br><img src="<?php bloginfo('template_url'); ?>/images/about/icon/500yen.png" width="150" alt="ワンコイン"></li>
						<li><span>コーヒーを何杯でも<br>飲むことができます<span><br><img src="<?php bloginfo('template_url'); ?>/images/about/icon/freedrink.png" width="150" alt="おかわり自由"></li>
						<li><span>不定期に開催<br>「いい豆キャンペーン」<span><br><img src="<?php bloginfo('template_url'); ?>/images/about/icon/goodbeans.png" width="150" alt="いい豆キャンペーン"></li>
					</ul>
				</div>
				<div class="txt">
					<p>さらに、会員みんなの意見をもっと共有する<br>このコミュニティサイトも今春オープン。</p>
					<p>より具体的な意見を「いいね」で投票して、理想のコーヒー部をみんなで作りましょう</p>
				</div>
				<div class="btn attend">
					<p><a href="http://192.168.0.23:8888/coffee-lovers/?page_id=92">会員を希望するかたはこちら</a></p>
				</div>
			</div>
		</section>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>