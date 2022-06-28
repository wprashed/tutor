<?php
/**
 * Add product metabox
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @since v.1.0.0
 */


$products = tutor_utils()->get_wc_products_db(get_the_ID());
$product_id = tutor_utils()->get_course_product_id();

$info_text = __('You can select an existing WooCommerce product, alternatively, a new WooCommerce product will be created for you.', 'tutor');
$label_info = __( 'on WooCommerce', 'tutor' );

require __DIR__ . '/product-selection.php';
?>
