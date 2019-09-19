<?php

add_action( 'admin_menu', 'remove_menu_pages', 999 );
function remove_menu_pages() {
	remove_menu_page('wp_stream');
}
