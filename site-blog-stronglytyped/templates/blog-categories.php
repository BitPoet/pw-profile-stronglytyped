<?php include('blog-head.php'); ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">

<?php

if($blogSettings->blog_sidebar_right) {
	include("blog-categorieslist.php");
	include("blog-sidebar.php");
} else {
	include("blog-sidebar.php");
	include("blog-categorieslist.php");
}

?>

						</div>
					</div>
				</div>

<?php include('blog-footer.php'); ?>
