<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class customForm extends App {

	/**
	 * Method newtaskfrom
	 *
	 * @return void
	 */
	public static function newtaskfrom( $project_id ) {
		?>
		<section class="pt-4">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8">
								<h2 class="py-3">Add New Task</h2>
								<form hx-target="#new-task" hx-swap="beforebegin"  hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=newtask" class="pb-5">
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
									<input type="hidden" name="project" value="<?php echo $project_id ; ?>">

									<button type="submit" class="mt-3 btn btn-primary">Add Task</button>
								</form>

							</div>
						</div>
					</div>
				</section>
		<?php
	}



}