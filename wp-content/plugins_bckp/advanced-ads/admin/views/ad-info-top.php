<?php // show quick injection options
if( isset( $_GET['message'] ) && 6 === $_GET['message'] ) : ?>
<div id="advads-ad-injection-box" class="advads-ad-metabox postbox">
    <p id="advads-ad-injection-message-placement-created" class="hidden"><?php printf(__( 'Congratulations! Your ad is now visible in the frontend. You can adjust the placement options <a href="%s">here</a>.', 'advanced-ads' ), admin_url( 'admin.php?page=advanced-ads-placements#single-placement-' ) ); ?></p>
    <h2><?php _e( 'Where do you want to display the ad?', 'advanced-ads' ); ?></h2>
	<button type="button" class="advads-ad-injection-button button-primary" data-type="post_top" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/content-before.png'; ?>)"><?php _e( 'Before Content', 'advanced-ads'); ?></button>
	<button type="button" class="advads-ad-injection-button button-primary" data-type="post_content" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/content-within.png'; ?>)"><?php _e( 'Content', 'advanced-ads'); ?></button>
	<button type="button" class="advads-ad-injection-button button-primary" data-type="post_bottom" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/content-after.png'; ?>)"><?php _e( 'After Content', 'advanced-ads'); ?></button>
	<a href="<?php echo admin_url( 'widgets.php' ); ?>"><button type="button" class="advads-ad-injection-button button-primary" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/widget.png'; ?>)"><?php _e( 'Manage Sidebar', 'advanced-ads'); ?></button></a>
	<?php if( ! defined( 'AAP_VERSION' ) ) :
	?><a href="<?php echo ADVADS_URL . 'add-ons/advanced-ads-pro/#utm_source=advanced-ads&utm_medium=link&utm_campaign=edit-created-injection-pro' ?>" target="_blank"><button type="button" class="advads-ad-injection-button button-primary advads-pro-link" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/content-random.png'; ?>)"><?php _e( 'Show Pro Places', 'advanced-ads'); ?></button></a><?php
	endif;
	if( ! defined( 'AASADS_VERSION' ) ) :
	?><a href="<?php echo ADVADS_URL . 'add-ons/sticky-ads/#utm_source=advanced-ads&utm_medium=link&utm_campaign=edit-created-injection-sticky' ?>" target="_blank"><button type="button" class="advads-ad-injection-button button-primary advads-pro-link" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/sticky-sidebar-left.png'; ?>)"><?php _e( 'Show Sticky Places', 'advanced-ads'); ?></button></a><?php
	endif;
	if( ! defined( 'AAPLDS_VERSION' ) ) :
	?><a href="<?php echo ADVADS_URL . 'add-ons/popup-and-layer-ads/#utm_source=advanced-ads&utm_medium=link&utm_campaign=edit-created-injection-layer' ?>" target="_blank"><button type="button" class="advads-ad-injection-button button-primary advads-pro-link" style="background-image: url(<?php echo ADVADS_BASE_URL . 'admin/assets/img/placements/layer.png'; ?>)"><?php _e( 'Show PopUp', 'advanced-ads'); ?></button></a><?php
	endif;
    ?><div class="clear"></div>
    <br/>
    <p><?php printf( __( 'Or use the shortcode %s to insert the ad into the content manually.', 'advanced-ads'), '<input id="advads-ad-injection-shortcode" onclick="this.select();" value="[the_ad id=\'' . $post->ID . '\']"/>' ); ?>
    <?php printf( __( 'Learn more about your choices to display an ad in the <a href="%s" target="_blank">manual</a>.', 'advanced-ads' ), ADVADS_URL . 'manual/display-ads/#utm_source=advanced-ads&utm_medium=link&utm_campaign=edit-created' ); ?></p>
</div>
<script>
  jQuery('#advads-ad-info-close').click(function(){
      jQuery('#advads-ad-info-top').fadeOut();
  });
</script>
<?php endif;
// display ad wizard controls
?><button type="button" id="advads-start-wizard" class="dashicons-before dashicons-controls-play page-title-action"><?php _e('Start Wizard', 'advanced-ads'); ?></button>
<button type="button" id="advads-stop-wizard" class="advads-stop-wizard dashicons-before dashicons-no page-title-action hidden"><?php _e('Stop Wizard', 'advanced-ads'); ?></button>
<script>
    // move wizard button to head
    jQuery('#advads-start-wizard').appendTo('h1');
    jQuery('.advads-stop-wizard').insertBefore('h1');
</script>
<?php // show wizard welcome message
if( $this->show_wizard_welcome() ) : ?>
<div id="advads-wizard-welcome" class="advads-ad-metabox postbox">
    <h2><?php _e( 'Welcome to the Wizard', 'advanced-ads' ); ?></h2>
    <p><?php _e( 'The Wizard helps you to quickly create and publish an ad. Therefore, only the most common options are visible.', 'advanced-ads' ); ?></p>
    <button type="button" id="advads-hide-wizard-welcome" class="page-title-action"><?php _e('Start Wizard', 'advanced-ads'); ?></button>
    <button type="button" class="advads-stop-wizard dashicons-before dashicons-no page-title-action"><?php _e('Stop Wizard and show all options', 'advanced-ads'); ?></button>
    <a a href="<?php echo ADVADS_URL . 'manual/wizard/#utm_source=advanced-ads&utm_medium=link&utm_campaign=wizard'; ?>" target="_blank"><?php _e('manual', 'advanced-ads'); ?></a>
</div>
<script>
    // move wizard button to head
    jQuery('#advads-hide-wizard-welcome').click( function(){ jQuery( '#advads-wizard-welcome' ).remove(); });
    jQuery('#advads-end-wizard').insertBefore('h1');
</script>
<?php endif;