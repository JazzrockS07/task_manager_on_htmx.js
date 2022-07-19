<?php



// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}



class singleProject extends App {

	private static $project = '';

	/**
	 * Method section_name
	 *
	 * @param int $post_id [explicite description]
	 *
	 * @return HTML
	 */


	public static function section_name(int $post_id = \null) {
		self::$project = get_the_title($post_id);
		?>
		<section class="bsc-breadcrump py-4 border-bottom">
			<div class="container">
				<div class="row">
					
					<div class="col">
						
						<h1 class="m-0"><?php echo self::$project; ?></h1>
						<!-- justify-content-end -->
						<ul class="nav nav-pills my-3 " id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="py-1 px-3 nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="py-1 px-3 nav-link" id="pills-files-tab" data-bs-toggle="pill" data-bs-target="#pills-files" type="button" role="tab" aria-controls="pills-files" aria-selected="false">Files</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="py-1 px-3 nav-link" id="pills-notes-tab" data-bs-toggle="pill" data-bs-target="#pills-notes" type="button" role="tab" aria-controls="pills-notes" aria-selected="false">Notes</button>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<?php echo get_the_content($post_id); ?>
						</div>
						<div class="tab-pane fade" id="pills-files" role="tabpanel" aria-labelledby="pills-files-tab">
						
						<?php 
						if ( get_field('dropbox_folder', $post_id) ) {
						echo do_shortcode('[outofthebox 
						dir="/proiecte/'. get_field('dropbox_folder', $post_id) .'" 
						account="dbid:AAAN27-PFRCM11bcY_0MAsnsbsmvnvGljSM" 
						mode="files" viewrole="all" downloadrole="all" filelayout="grid" maxheight="420px" ext="zip|ai|xd|svg|jpg|jpeg|png|pdf|doc|docx|gif|xls|xlsx"
						upload="1" upload_auto_start="1" uploadrole="administrator|subscriber" uploadext="psd|ai|xd|svg|jpg|jpeg|png|pdf|doc|docx|gif|xls|xlsx" 
						]');
						}
						?>

						</div>
						<div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="pills-notes-tab">

						<?php if ( have_rows( 'notes', $post_id ) ) : ?>
						<?php while ( have_rows( 'notes', $post_id ) ) : the_row(); ?>
						<div class="col-md-3">
						<div class="card">
								<div class="card-body">
								<?php the_sub_field( 'note' ); ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>
						</div>
						</div>
						
					</div>

				</div>
			</div>
		</section>
		<?php
	}

	/**
	 * Method section_tasks
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	public static function section_tasks(int $post_id = \null) {
		?>
		<section class="main bg-bright py-4">
			<div class="container">
				<?php
				$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = [

					'post_type' => 'task',

					'posts_per_page' => 10,

					'paged' => $paged,

					'meta_query' => array(
						array(
							'key' => 'project', // name of custom field
							'value' => $post_id, // matches exactly "123", not just 123. This prevents a match for "1234"
							'compare' => 'LIKE'
						)
					)

				];

				$qry = new WP_Query($args);

				if($qry->have_posts()):
					while($qry->have_posts()):
						$qry->the_post();
						singleTask::createtask(get_the_ID());
					endwhile;
					wp_reset_postdata();
				endif;

				?>
				<div id="new-task"></div>
			</div>
		</section>
		<?php
	}

	/**
	 * Method section_new_task
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	public static function section_new_task(int $post_id = \null) {
		?>
		<section class="pt-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-8">
						<h2 class="py-3">Add New Task</h2>
						<form hx-target="#new-task" hx-swap="beforebegin" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/action-no-logged/3/"class="pb-5">
							<div class="form-group mb-3">
								<label for="exampleFormControlInput1">Task Title</label>
								<input type="text" class="form-control" placeholder="Task Title" name="title">
							</div>

							<div class="form-group mb-3">
								<label for="exampleFormControlTextarea1">Task Description</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
							</div>

							<div class="form-group mb-3">
								<label for="exampleFormControlSelect1">Priority</label>
								<select class="form-control" id="exampleFormControlSelect1" name="priority">
									<option>Low</option>
									<option>Normal</option>
									<option>Urgent</option>
									<option>Critical</option>
								</select>
							</div>
							<input type="hidden" name="project" value="<?php echo $post_id; ?>">

							<button type="submit" class="mt-3 btn btn-primary">Add Task</button>
						</form>

					</div>
				</div>
			</div>
		</section>
		<?php
	}

	/**
	 * Method createproject
	 *
	 * @param int $post_id [explicite description]
	 *

	 * @return HTML
	 */

	public static function createproject(int $post_id = \null) {
		self::section_name($post_id);
		self::section_tasks($post_id);
		// self::section_new_task($post_id);
		customForm::newtaskfrom($post_id);
	}



	public static function render() {

		if(have_posts()):

			while(have_posts()): the_post();

				$post_id = get_the_ID();

				self::createproject($post_id);

			endwhile;

		endif;

	}



}