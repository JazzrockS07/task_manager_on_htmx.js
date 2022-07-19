<?php
/*
  * Template name: Tasks
  */

get_header() ?>

<section class="main bg-bright py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php archiveTask::render(); ?>
			</div>

		</div>
	</div>
</section>

<?php get_footer() ?>
