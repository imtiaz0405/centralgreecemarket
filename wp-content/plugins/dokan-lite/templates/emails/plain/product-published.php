<?php
/**
 * Product published Email. ( plain text )
 *
 * An email sent to the vendor when a new Product is published from pending.
 *
 * @class       Dokan_Email_Product_Published
 * @version     2.6.8
 * 
 */

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
echo "= " . $email_heading . " =\n\n";

?><?php _e( 'Hello '.$data['seller-name'], 'dokan-lite' ); echo " \n\n";?>

<?php _e( 'Your product '.$data['product-title'], 'dokan-lite' ); ?> <?php _e( 'has been approved by one of our admin, congrats!', 'dokan-lite' ); echo " \n\n"; ?>

<?php _e( 'View product : '.$data['product_url'], 'dokan-lite' ); echo " \n\n"; ?>
<?php _e( 'Update : '.$data['product_edit_link'], 'dokan-lite' ); echo " \n\n"; ?> 
<?php

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
