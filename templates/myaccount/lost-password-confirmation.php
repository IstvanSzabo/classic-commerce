<?php
/**
 * Lost password confirmation text.
 *
 * This template can be overridden by copying it to yourtheme/classic-commerce/myaccount/lost-password-confirmation.php.
 *
 * @see     https://classiccommerce.cc/docs/installation-and-setup/template-structure/
 * @package ClassicCommerce/Templates
 * @version WC-3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notice( __( 'Password reset email has been sent.', 'classic-commerce' ) );
?>

<p><?php echo esc_html( apply_filters( 'woocommerce_lost_password_confirmation_message', __( 'A password reset email has been sent to the email address on file for your account, but may take several minutes to show up in your inbox. Please wait at least 10 minutes before attempting another reset.', 'classic-commerce' ) ) ); ?></p>
