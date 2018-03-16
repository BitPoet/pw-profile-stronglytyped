						<div id="content" class="8u 12u(mobile) important(mobile)">
							<article class="box">
								<header>
									<h2><a href="#"><strong><?= $page->title ?></strong></a></h2>
								</header>
								<ul class="CategoryList">
<?php foreach($pages->find("template=blog-tag, sort=title") as $category) { ?>
									<li>
										<a href="<?= $category->url ?>"><?= $category->title ?></a><br>
										<?= sprintf(_x("Number of blog posts: %d", "blog"), $pages->count("template=blog-post, blog_tags=$category")) ?>
									</li>
<?php } ?>
								</ul>
							</article>
						</div>
