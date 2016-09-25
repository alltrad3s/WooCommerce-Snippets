/*

Replace SKU on WooCommerce for Other word.

*/

add_filter('gettext', 'change_sku', 999, 3);

function change_sku( $translated_text, $text, $domain  ) {
if( $text == 'SKU' || $text == 'SKU:' ) return 'CODE';
return $translated_text;
}
