<?php

/*
Template Name: Manual
*/

echo "<pre>";
var_dump($_POST);
echo "</pre>";

?>

<?php get_header(); ?>
	<section id="main" class="wrap">
		<section id="contents" class="Manual">
			<h2 class="ttl"><img src="<?php bloginfo('template_url'); ?>/images/manual/ttl.png" alt=""></h2>
			<div class="container">
				<div class="txt">
					<form action="http://192.168.0.23:8888/coffee-lovers/?page_id=15" method="post">
						<ul>
							<li><span>タスク名</span><input type="text" name="name"></li>
							<li><span>メモ</span><textarea name="memo"></textarea></li>
							<li><input type="submit" name="submit"></li>
						</ul>
					</form>
				</div>
				<!-- <div class="btn attend">
					<p><a href="sendai">会員を希望するかたはこちら</a></p>
				</div> -->
			</div>
		</section>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>