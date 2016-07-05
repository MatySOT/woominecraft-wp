<div class="woo_minecraft">
	<p class="title"><?php _e( 'WooMinecraft Commands', 'woominecraft' ); ?><span class="woocommerce-help-tip" data-tip="<?php _e( 'Any commands added here, will run on top of variable commands if any; no leading slash is needed.', 'woominecraft' );  ?>"></span></p>
	<table class="woominecraft commands" cellpadding="5px">
		<thead>
			<tr>
				<th><?php _e( 'Command', 'woominecraft' ); ?></th>
				<th><?php _e( 'Server', 'woominecraft' ); ?></th>
				<th><input type="button" class="button button-small button-primary wmc_add_server" value="<?php _e( 'Add Command', 'woominecraft' ); ?>" /></th>
			</tr>
		</thead>
		<tbody>
			<tr class="row">
				<td><input type="text" name="wmc_commands[0][command]" class="widefat" placeholder="<?php _e( 'give %s apple 1', 'woominecraft' ); ?>" /> </td>
				<td>
					<select name="wmc_commands[0][server]" >
					<?php
					$servers = woo_minecraft()->admin->get_servers();
					foreach ( $servers as $server ) {
						echo sprintf( '<option value="%s">%s</option>', $server['key'], $server['name'] );
					}
					?>
					</select>
				</td>
				<td><input type="button" class="button button-small wmc_delete_server" value="<?php _e( 'Delete Command', 'woominecraft' ); ?>" /></td>
			</tr>
		</tbody>
	</table>
<!--	<div class="form-fields">-->
<!--		<div>-->
<!--			<input type="button" class="button button-primary woo_minecraft_add" name="Add" id="woo_minecraft_add" value="--><?php //_e( 'Add', 'woominecraft' ); ?><!--"/>-->
<!--			<input type="button" class="button woo_minecraft_reset" name="Reset" id="woo_minecraft_reset" value="--><?php //_e( 'Reset Fields', 'woominecraft' ); ?><!--"/>-->
<!--		</div>-->
<!--		<span class="woo_minecraft_copyme command" style="display:none">-->
<!--			<input type="text" name="minecraft_woo[--><?php //echo $post->ID; ?><!--][]" value="" class="short" placeholder="--><?php //_e( 'Use %s for player name', 'woominecraft' ); ?><!--"/>-->
<!--			<input type="button" class="button button-small delete remove_row" value="Delete">-->
<!--		</span>-->
<!--		--><?php //if ( ! empty( $meta ) ) : ?>
<!--			--><?php //foreach ( $meta as $command ) : ?>
<!--				<span class="command">-->
<!--					<input type="text" name="minecraft_woo[--><?php //echo $post->ID; ?><!--][]" value="--><?php //echo $command; ?><!--" class="short"/>-->
<!--					<input type="button" class="button button-small delete remove_row" value="--><?php //_e( 'Delete', 'woominecraft' ); ?><!--">-->
<!--				</span>-->
<!--			--><?php //endforeach; ?>
<!--		--><?php //endif; ?>
<!--	</div>-->
</div>
