<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Shop Dark 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-shop-dark' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Shop Dark. Powered by', 'bosa-shop-dark' ) );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-shop-dark' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-shop-dark' ) );
		?>
	</a>
</div><!-- .site-info -->