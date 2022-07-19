<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class singleTask extends App {

	private static $assigned_to_name = '';

	/**
	 * Method assignment
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */


	private static function assignment(int $post_id = \null) {
		if (get_field( 'assigned_to', $post_id )) {
			$assigned_to = get_field('assigned_to', $post_id);
			self::$assigned_to_name = esc_html($assigned_to['display_name']);
		} else {
			self::$assigned_to_name = 'Nobody';
		}

		?>
		<div class="px-3 bsc-assignment bsc-info-list">
			<small class="text-uppercase text-muted d-block pt-1">Assigned to</small>
			<div class="bsc-info-list-details">
				<div class="bsc-avatar bsc-avatar-xxs me-1">
					<span class="bsc-avatar-title rounded-circle bg-red">AD</span>
				</div>
				<?php echo self::$assigned_to_name; ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Method estimate
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	private static function estimate(int $post_id = \null) {
		if(get_field('durata', $post_id)) {
			$durata = get_field('durata', $post_id);
		}
		else {
			$durata = 'None';
		}
		?>
		<div class="pe-3 bsc-estimate bsc-info-list">
			<small class="text-uppercase text-muted d-block pt-1">Estimat</small >
			<div class="bsc-info-list-details">
				<?php echo $durata; ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Method deadline
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	private static function deadline(int $post_id = \null) {
		?>
		<div id="bsc-status-<?php echo $post_id; ?>" class="px-3 d-none d-sm-block bsc-deadline bsc-info-list">
			<?php if (get_field( 'status', $post_id ) == 'solved') { ?>
				<small class="text-uppercase text-muted d-block pt-1">STATUS</small>
				<div class="bsc-info-list-details">Solved</div>
			<?php } elseif (get_field( 'status', $post_id ) == 'blocked') { ?>
				<small class="text-uppercase text-muted d-block pt-1">STATUS</small>
				<div class="bsc-info-list-details">Blocked</div>
			<?php } elseif (get_field( 'assigned_to', $post_id )) { ?>
				<small class="text-uppercase text-muted d-block pt-1">Deadline</small>
				<div class="bsc-info-list-details"><?php
					if (get_field('deadline', $post_id)) {
						$date = DateTime::createFromFormat('Y-m-d H:i:s', get_field('deadline', $post_id));
						echo $date->format('Y-m-d');
					}
					?>
				</div>
			<?php } else { ?>
				<small class="text-uppercase text-muted d-block pt-1">PRIORITY</small>
				<div class="text-red"><?php echo get_field('priority',$post_id);?></div>
			<?php } ?>
		</div>
		<?php
	}

	/**
	 * Method title
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	private static function title(int $post_id = \null) {
		?>
		<div class="bsc-task collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $post_id; ?>" aria-expanded="true" >
			<div>
				<span class=""><?php echo get_the_title( $post_id ); ?></span>
				<span class="d-block text-muted truncate"><?php echo get_field( 'detalii_task', $post_id ); ?></span>
			</div>
		</div>
		<?php
	}

	/**
	 * Method button
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	private static function button (int $post_id = \null) {
		?>
		<div class="bsc-action ms-auto d-flex x align-items-center">
			<?php if (get_field( 'status', $post_id ) == 'solved') { ?>
				<div class="btn-group" hx-target="this" hx-swap="outerHTML">
					<button hx-vals='{"postid": "<?php echo $post_id; ?>", "assigned_to_name": "<?php echo self::$assigned_to_name;?>", "priority": "<?php echo get_field('priority', $post_id);?>", "deadline":"<?php echo get_field('deadline', $post_id) ?>"}' type="button" class="btn btn-green" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=development">Not Solved</button>
				</div>
			<?php } elseif (get_field( 'status', $post_id ) == 'blocked') { ?>
				<div class="btn-group" hx-target="this" hx-swap="outerHTML">
					<button hx-vals='{"postid": "<?php echo $post_id; ?>", "assigned_to_name": "<?php echo self::$assigned_to_name;?>", "priority": "<?php echo get_field('priority', $post_id);?>", "deadline":"<?php echo get_field('deadline', $post_id) ?>"}' type="button" class="btn btn-primary" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=development">Unblock</button>
					<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
					</button>
					<ul class="dropdown-menu">
						<li><button hx-vals='{"postid": "<?php echo $post_id; ?>", "assigned_to_name": "<?php echo self::$assigned_to_name;?>", "priority": "<?php echo get_field('priority', $post_id);?>", "deadline":"<?php echo get_field('deadline', $post_id) ?>"}' class="dropdown-item" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=solved">Mark as solved</button></li>
					</ul>
				</div>
			<?php } else { ?>
				<div class="btn-group" hx-target="this" hx-swap="outerHTML">
					<button hx-vals='{"postid": "<?php echo $post_id; ?>", "assigned_to_name": "<?php echo self::$assigned_to_name;?>", "priority": "<?php echo get_field('priority', $post_id);?>", "deadline":"<?php echo get_field('deadline', $post_id) ?>"}' type="button" class="btn btn-primary" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=solved">Solved</button>
				</div>
			<?php } ?>
		</div>
		<?php
	}

	/**
	 * Method taskfull
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	private static function taskfull (int $post_id = \null) {
		?>
		<div class="task-full">
			<h2 class="pt-4">
				<?php echo get_the_title( $post_id ); ?>
			</h2>
			<div class="task-meta text-muted mb-2">
				<small class="text-uppercase">Deadline:</small>
				<time datetime="2022-04-28T15:14:46+00:00">
					<?
					if (get_field('deadline', $post_id)) {
						$date = DateTime::createFromFormat('Y-m-d H:i:s', get_field('deadline', $post_id));
						echo $date->format('F j, Y g:i a');
					}
					?>
				</time>
			</div>
			<p><?php the_field( 'detalii_task', $post_id); ?></p>
		</div>
		<?php
	}

	/**
	 * Method createtask
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	public static function createtask(int $post_id = \null) {
		if (get_field( 'status' ) == 'solved') {
			$list_group = 'list-group-item-green';
		} elseif (get_field( 'status' ) == 'blocked') {
			$list_group = 'list-group-item-grey';
		} else {
			$list_group = 'list-group-item-danger';
		}
		?>
		<div class="row task-margin">
			<div class="col-md-12">
				<div class="card bsc-card-task">

					<div id="task-list-<?php echo $post_id; ?>" class="list-group-item d-flex <?php echo $list_group; ?>">
								<?php
								self::assignment($post_id);
								self::estimate($post_id);
								self::deadline($post_id);
								self::title($post_id);
								self::button($post_id);
								?>
						<div class="accordion-button collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $post_id;?>" aria-expanded="true" aria-controls="collapseOne-<?php echo $post_id; ?>">&nbsp;
						</div>
					</div>
					<div id="collapseOne-<?php echo $post_id;?>" class="collapse" data-bs-parent="#accordionExample" >
						<div class="row px-3 px-sm-0 justify-content-center">
							<div class="col-md-8 col-sm-10">
								<?php
								self::taskfull($post_id);
								?>

								<?php comments_template(); ?>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php
	}

	public static function render() {
		if(have_posts()):
			while(have_posts()): the_post();

				$post_id = get_the_ID();

				self::createtask($post_id);

			endwhile;

		endif;

	}



}