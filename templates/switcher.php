<?php
namespace EHAMI;

$items              = plugin()->settings->items;
$hide_icons_disable = plugin()->settings->hide_icons_disable;
?>

<form class="switch__container">
	<input id="switch-flat" class="switch" type="checkbox"<?php checked( plugin()->settings->status ); ?>>
	<label for="switch-flat" title="<?php esc_attr_e( 'Hide or show selected menu items', 'ehami' ); ?>"></label>
	<div class="switch__content">
		<?php
		if ( $items ) {
			foreach ( $items as $item_id => $item_text ) {
				printf(
					'<p data-id="%s">
						<span class="text">%s</span>
						<span class="dashicons dashicons-no ehami-restore-li" title="%s"></span>
					</p>',
					esc_attr( $item_id ),
					esc_html( $item_text ),
					esc_attr__( 'Remove from the list', 'ehami' )
				);
			}
		} else {
			printf( '<p class="no-items">%s</p>', esc_html__( 'No hidden menu items', 'ehami' ) );
		}
		?>

		<div class="ehami-block-checkbox">
			<input type="checkbox"
			       id="hide-icons-checkbox"
			       name="hide_icons_disable"
				<?php echo $hide_icons_disable ? 'checked' : ''; ?>
			/>
			<label for="hide-icons-checkbox"><?php echo esc_attr__( 'Don\'t display hide icons', 'ehami' ); ?></label>
		</div>
	</div>
</form>
