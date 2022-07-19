<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}
class customHeader extends App {

	private static function logo() {
		// if is single page for project post type
		if ( is_singular( 'project' ) ) {
			$current_project_id = get_queried_object_id();
			// var_dump($current_project_id);
			$owner = get_field( 'owner', $current_project_id );
			$logo_field = get_field( 'logo', $owner[0]);
			$logo = esc_url( $logo_field['url'] );
		} else {
			$logo = 'https://manage.creations.ro/wp-content/uploads/2022/05/logo_mediabit.png';
		}
		?>
		<a href="#" class="navbar-brand ">
			<img class="navbar-brand-icon" src="<?php echo $logo ?>" height="26" alt="something">
		</a>
		<?php
	}

	private static function projectDropdown() {
		if (is_user_logged_in()) {
			singleOwner::getowner();
			if (singleOwner::$owner == 0) {
				// this is worker
				singleWorker::getworkerprojects();
			}
		?>
     		<div class="dropdown border-end me-3 pe-3 mb-md-0 bsc-projects-dropdown d-flex align-items-center">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="projects-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Projects
                </button>
                <ul class="dropdown-menu" aria-labelledby="projects-dropdown">
					<?php
					if (singleOwner::$owner != 0) {
						// this is owner
						$args = [
						'post_type' => 'project',
						'meta_query' => array(
							array(
								'key' => 'owner', // name of custom field
								'value' => singleOwner::$owner,
								'compare' => 'LIKE'
							)
						)
						];
					} else {
						// this is worker
						$args = [
						'post_type' => 'project',
						'post__in' => singleWorker::$projects,
						];
					}
					$qry = new WP_Query($args);
					if($qry->have_posts()):
						while($qry->have_posts()): $qry->the_post();
						?>
							<li><a class="dropdown-item" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
						endwhile;
						wp_reset_postdata();
					endif;

					?>
                </ul>
              </div>
		<?php
		}
	}
	private static function search() {
		?>
            <form class="bsc-search-form  me-auto mb-md-0" action="fluid-index.html">
                <button class="btn" type="submit"><i class="material-icons">search</i></button>
                <input type="text" class="form-control" placeholder="Search">
            </form>
		<?php
	}

	private static function helpInfo() {
		$logo = get_stylesheet_directory_uri() . '/img/brand.png';

		?>
		 <ul class="nav navbar-nav bsc-navbar-icons ms-auto px-3 border-start">
			<li class="nav-item">
				<a href="" class="nav-link">
					<i class="material-icons">help_outline</i>
				</a>
			</li>
		</ul>
		<?php
	}


	private static function user() {
		?>
		<ul class="nav navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
					<!-- <img src="assets/images/avatar/demi.png" class="rounded-circle" width="40" alt="Frontted"> -->
					<span class="bsc-avatar bsc-avatar-sm">
						<span class="bsc-avatar-title rounded-circle bg-red">AD</span>
					</span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dropdown08">
					<li><a class="dropdown-item" href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
		<?php
	}
	private static function header() {
		?>
			<div id="bsc-header" class="bsc-header">
				<div id="bsc-main-navbar" class="navbar navbar-light bsc-main-navbar bg-white shadow-sm p-0" >
					<div class="container-fluid">
						<!-- Navbar toggler -->
						<?php 
							self::logo();
							self::projectDropdown();
							self::search();
							self::helpInfo();
							self::user();
						?>
					</div>
				</div>
			</div>
		<?php
	}

	private static function breadcrumb() {
		?>
		<section class="bsc-breadcrump py-4 border-bottom">
			<div class="container">
				<div class="row">
					<div class="col">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
									</ol>
								</nav>
								<h1 class="m-0">Dashboard</h1>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}

	public static function render() {
		?>
		<header class="custom-header" x-data="customHeader();" >
			<?php 
			self::header(); 
			//self::breadcrumb();
			?>
		</header><!-- End: custom-header -->
		<?php
	}
	
}


