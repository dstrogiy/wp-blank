<?php
/**
 * @package VEL
 */

?>

			<footer class="footer">

				<div class="inner-footer">
					<p class="source-org copyright">&copy; <?php esc_html_e( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.</p>
          <p class="last-modified">Last modified: <?php the_modified_time( 'F j, Y' ); ?></p>
				</div>

			</footer>

		</div>

		<?php wp_footer(); ?>

	</body>

</html>
