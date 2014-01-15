<?php

function my_em_add_events_pre_text( $content ) {
	if ( is_front_page() && function_exists('get_field') ){
		$pre = get_field('homepage_intro');
		$content = $pre . $content;
	}
	
	return $content;
}
add_filter( 'the_content', 'my_em_add_events_pre_text' );