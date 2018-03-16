							<!-- Sidebar -->
								<div id="sidebar" class="4u 12u(mobile)">

								<!-- Search -->
									<section class="box search">
										<form method="get" action="<?= $pages->get('/search/')->url ?>">
											<input type="text" class="text" name="search" placeholder="Search" />
										</form>
									</section>

<?php

foreach($blogSettings->blog_widgets as $widget) { ?>

				<!-- <?= $widget->title ?> -->
					<?php
	echo $widget->render();
}

?>

								<!-- Sort -->
									<section class="box text-style1">
										<div class="inner">
											<p><?= sprintf(
													html_entity_decode(_x("Lists are sorted by date <strong>%s</strong> (%s)", "blog")),
													$session->chronological ? "ascending" : "descending",
													$session->chronological ? "oldest to newest" : "newest first"
												) ?></p>
											<button class="alt" id="toggle_sort" data-newsort="<?= $chronological ? "desc" : "asc" ?>" data-target="<?= $pages->get('/ajax/')->url ?>"><?= _x("Toggle list sort", "blog") ?></button>
										</div>
									</section>

								</div>
