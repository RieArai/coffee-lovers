<?php

function include_custom_css(){
	if(is_single()||is_page()){
	if($css = get_post_meta(get_the_ID(), 'includeCSS', true)){
	echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$css}\" />\n";
						}
					}
				}
add_action('wp_head','include_custom_css');


function add_new_item_in_admin_bar() {
global $wp_admin_bar;
$wp_admin_bar->add_menu(array(
'id' => 'new_item_in_admin_bar',
'title' => __('ログアウト'),
'href' => wp_logout_url()
));
}
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');


function my_search_form( $form ) {
 
    $form = '<form role="search" method="get" id="searchform" action="'.home_url( '/' ).'" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';
 
    return $form;
}
 
add_filter( 'get_search_form', 'my_search_form' );

?>