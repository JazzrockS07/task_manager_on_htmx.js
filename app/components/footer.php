<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class customFooter extends App {

	private static function copyright() {
		?>
		<div class="copyright"><?= sprintf(__('&copy; %s  Management', 'TEXT_DOMAIN'), date('Y')) ?></div><!-- End: copyright -->
		<?php
	}

	private static function footer() {
		?>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12 md:col-12"><?php self::copyright(); ?></div><!-- End: col-12 md:col-12 -->
				</div><!-- End: row -->
			</div><!-- End: container -->
		</div><!-- End: footer-bottom -->
		<?php
	}

	public static function render() {
		?>
		<footer class="custom-footer"><?php 
			self::footer();
		?></footer><!-- End: custom-footer -->
		<?php
	}
	
}

$customFooter = new customFooter();