<?php if(have_comments()):?>
<ul class = "commentlist">
<?php wp_list_comments('callback=custom_comment');?>
</ul>
<?php endif;?>
 
<?php comment_form(); ?>