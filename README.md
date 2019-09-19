# WordPress Snippets
Here are a collection of functions or bits that I'd like to hold on to for later. Nothing super fancy in here.

## Stream Plugin
Use stream plugin but hide the Stream menu from users.

functions.php
```php
add_action( 'admin_menu', 'remove_menu_pages', 999 );
function remove_menu_pages() {
	remove_menu_page('wp_stream');
}
```