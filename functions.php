/**
 * Redirecting to Checkout Page after updating cart
 */
add_action( 'wp_footer', 'wc_modify_update_cart_totals' );
function wc_modify_update_cart_totals() {
    ?>
    <script type="text/javascript">
        (function( $ ) { 
            jQuery( document ).on( 'updated_cart_totals', function( event ) { 
                window.location.href = '<?php echo wc_get_checkout_url(); ?>';
            } );
        } )( jQuery );
    </script>
    <?php
}
