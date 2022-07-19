<?php
/*
  * Template name: Projects
  */

get_header();

?>

<section class="main bg-bright py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php archiveProject::listing('project',singleOwner::$owner, singleWorker::$projects); ?>
			</div>

		</div>
	</div>
</section>

<?php get_footer() ?>
