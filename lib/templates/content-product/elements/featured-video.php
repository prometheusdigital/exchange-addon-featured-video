<?php
/**
 * Default template for displaying the featured video
 * in place of base price for the store page
 * 
 * @since 1.0.0
 * @version 1.0.0
 * @link http://ithemes.com/codex/page/Exchange_Template_Updates
 * @package IT_Exchange_Addon_Featured_Video
 * 
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy over this
 * file's content to the exchange/ directory located
 * in your theme.
*/
?>

<?php do_action( 'it_exchange_content_product_before_featured_video_element' ); ?>
<div class="it-exchange-product-featured-video">
	<?php it_exchange( 'featured-video', 'featured-video' ); ?>
</div>
<?php do_action( 'it_exchange_content_product_after_featured_video_element' ); ?>