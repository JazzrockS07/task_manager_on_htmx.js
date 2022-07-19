<?php
include("../../../../wp-load.php");

extract($_GET);

if ( $action == 'development') {
	header('HX-Trigger: {"development":{"id": '.$_POST['postid'].' }}');
	?>
	<div id="bsc-status-<?php echo $_POST['postid']; ?>" hx-swap-oob="true" class="px-3 d-none d-sm-block bsc-deadline bsc-info-list">
		<?php if ($_POST['assigned_to_name'] != 'Nobody') { ?>
			<small class="text-uppercase text-muted d-block pt-1">Deadline</small>
			<div class="bsc-info-list-details"><?php
				if (isset ($_POST['deadline'])) {
					$date = DateTime::createFromFormat('Y-m-d H:i:s', $_POST['deadline']);
					echo $date->format('Y-m-d');
				}
				?>
			</div>
		<?php } else { ?>
			<small class="text-uppercase text-muted d-block pt-1">PRIORITY</small>
			<div class="text-red"><?php echo $_POST['priority'];?></div>
		<?php } ?>
	</div>
	<div class="bsc-action ms-auto d-flex x align-items-center">
		<div class="btn-group" hx-target="this" hx-swap="outerHTML">
			<button hx-vals='{"postid": "<?php echo $_POST['postid']; ?>", "assigned_to_name": "<?php echo $_POST['assigned_to_name'];?>", "priority": "<?php echo $_POST['priority'];?>", "deadline":"<?php echo $_POST['deadline'] ?>"}' type="button" class="btn btn-primary" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=solved">Solved</button>
		</div>
	</div>
	<?php
	if (isset($_POST['postid'])) {
		update_field( 'status', 'development', $_POST['postid']);
	}
}

	elseif ( $action == 'solved') {
	header('HX-Trigger: {"solved":{"id": '.$_POST['postid'].' }}');
	?>
	<div id="bsc-status-<?php echo $_POST['postid']; ?>" hx-swap-oob="true" class="px-3 d-none d-sm-block bsc-deadline bsc-info-list">
		<small class="text-uppercase text-muted d-block pt-1">STATUS</small>
		<div class="bsc-info-list-details">Solved</div>
	</div>
	<div class="bsc-action ms-auto d-flex x align-items-center">
		<div class="btn-group" hx-target="this" hx-swap="outerHTML">
			<button hx-vals='{"postid": "<?php echo $_POST['postid']; ?>", "assigned_to_name": "<?php echo $_POST['assigned_to_name'];?>", "priority": "<?php echo $_POST['priority'];?>", "deadline":"<?php echo $_POST['deadline'] ?>"}' type="button" class="btn btn-primary" hx-post="<?php echo get_stylesheet_directory_uri(); ?>/htmx/handler.php/?action=development">Not Solved</button>
		</div>
	</div>
	<?php
	if (isset($_POST['postid'])) {
		update_field( 'status', 'solved', $_POST['postid']);
	}
}

	elseif ( $action == 'newtask') {



	$task_title = (isset($_POST['title'])) ? $_POST['title'] : 'empty title';

	$task_description = (isset($_POST['description'])) ? $_POST['description'] : 'empty';

	$task_priority = (isset($_POST['priority'])) ? $_POST['priority'] : 'low';

	$task_project = (isset($_POST['project'])) ? $_POST['project'] : '34';



	$my_post = array(

		'post_title' => wp_strip_all_tags( $task_title ),

		'post_status' => 'publish',

		'post_type' => 'task',

	);



	$post_id = wp_insert_post($my_post);

	update_field( 'detalii_task',$task_description , $post_id);

	update_field( 'priority',$task_priority , $post_id);

	update_field( 'status', 'development', $post_id);



	$value = get_field('project', $post_id, false);



	$value[] = $task_project;



	// update the field

	update_field('project', $value, $post_id);



	singleTask::createtask( $post_id);



}