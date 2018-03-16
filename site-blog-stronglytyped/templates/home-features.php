			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2><strong><?= _x("Latest and important posts", "blog") ?></strong></h2>
						</header>
						<div class="row">

<?php
	$cards = $pages->find("template=blog-post, sort=-blog_post_sticky, sort=-blog_date, limit=" . $blogSettings->blog_quantity);
	$cards->prepend($pages->find("template=blog-post, blog_post_sticky!=1, sort=-blog_date, limit=" . $blogSettings->blog_quantity));
	$cards = $cards->slice(0, $blogSettings->blog_quantity);
	$cardcount = 0;
		
	foreach($cards as $card) {
		$img = FALSE;
		if($card->blog_images) $img = $card->blog_images->first();
?>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<?php if($img) { ?><a href="<?= $card->url ?>" class="image featured" title="<?= $card->title ?>"><img src="<?= $img->url ?>" alt="<?= $img->description ?>" /></a><?php } ?>
										<header>
											<h3><?= $card->title ?></h3>
										</header>
										<p><?= $card->blog_summary ?: makeSummary($card->blog_body) ?></p>
										<p><a class="button alt" href="<?= $card->url ?>"><?= _x("Read full post...", "blog") ?></a></p>
									</section>

							</div>
<?php
		$cardcount++;
		if($cardcount % 3 == 0 && $cardcount > 1 && $cardcount < $cards->count) {
?>
						</div>
						<div class="row">
<?php
		}
	}
?>
						</div>

						<ul class="actions"><?php $allposts = $pages->get('/posts'); ?>
							<li><a href="<?= $allposts->url ?>" class="button icon fa-file"><?= _x("Tell Me More", "blog") ?></a></li>
						</ul>
					</section>
				</div>
