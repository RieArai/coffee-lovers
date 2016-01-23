<?php
/*
Template Name: Member
*/
?>

<?php get_header(); ?>
	<section id="main" class="wrap">
		<section id="contents" class="Member">
			<h2 class="ttl"><img src="<?php bloginfo('template_url'); ?>/images/member/ttl.png" alt=""></h2>
			<div class="container">
				<div class="txt">
					<p>コーヒー部員のメンバー及び当番表です。<br>当番を変更する場合は下のボタンを押してください</p>
				</div>
				<div class="btn attend">
					<p><a href="http://192.168.0.23:8888/coffee-lovers/wp-admin/post.php?post=12&action=edit" target="blank">当番を変更する</a></p>
				</div>
				<div class="list">
					<ul>
						<li class="week">
							<ul>
								<li class="day mon">月</li>
								<li class="staff"><?php echo get_post_meta($post->ID , '月曜日' ,true); ?></li>
							</ul>
						</li>
						<li class="week">
							<ul>
								<li class="day tue">火</li>
								<li class="staff"><?php echo get_post_meta($post->ID , '火曜日' ,true); ?></li>
							</ul>
						</li>
						<li class="week">
							<ul>
								<li class="day wed">水</li>
								<li class="staff"><?php echo get_post_meta($post->ID , '水曜日' ,true); ?></li>
							</ul>
						</li>
						<li class="week">
							<ul>
								<li class="day thu">木</li>
								<li class="staff"><?php echo get_post_meta($post->ID , '木曜日' ,true); ?></li>
							</ul>
						</li>
						<li class="week">
							<ul>
								<li class="day fri">金</li>
								<li class="staff"><?php echo get_post_meta($post->ID , '金曜日' ,true); ?></li>
							</ul>
						</li>
						<li class="week">
							<ul>
								<li class="day sat">土</li>
								<li class="staff"><?php echo get_post_meta($post->ID , '土曜日' ,true); ?></li>
							</ul>
						</li>
					</ul>
					
				</div>
				<div class="others">
					<h3 class="ttl">その他のメンバー</h3>
					<ul>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/asakura.png" alt=""></li>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/iida.png" alt=""></li>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/imahashi.png" alt=""></li>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/ohkawa.png" alt=""></li>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/sendai.png" alt=""></li>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/doko.png" alt=""></li>
						<li class="member"><img src="<?php bloginfo('template_url'); ?>/images/member/icon/muto.png" alt=""></li>
					</ul>
				</div>
			</div>
		</section>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>