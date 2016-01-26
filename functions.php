<?php
	add_filter( 'show_admin_bar', '__return_false' );
add_filter( 'soliloquy_output_caption', 'soliloquy_title_before_caption', 10, 5 );
function soliloquy_title_before_caption( $caption, $id, $slide, $data, $i ) {
	
	// Check if current slide has a title specified
	if ( isset( $slide['title'] ) && !empty( $slide['title'] ) ) {
		$caption = '<h4 class="title">' . $slide['title'] . '</h4>'; 
                $caption .= '<div class="caption">' . $slide['caption'] . '</div>'; 
        } 
        return $caption;
}
?>