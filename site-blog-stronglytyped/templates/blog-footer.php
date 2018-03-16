			<!-- Footer -->
				<div>
					<p></p>
				</div>
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header>
							<h2><?= __("Questions or comments?") ?>
								<strong><?= __("Get in touch") ?>:</strong>
							</h2>
						</header>
						<div class="row">
							<div class="12u 12u(mobile)">
								<section>
					<?= $modules->get('SimpleContactForm')->render(array(
						"emailTo"		=>	$blogSettings->email
					)) ?>

								</section>
							</div>
						</div>
					</div>
					<div>
						<p>&nbsp;</p>
					</div>
					<?php include('blog-copyright.php'); ?>
				</div>

		</div>

		<!-- Scripts -->
			<script src="<?= $config->urls->templates ?>assets/js/jquery.min.js"></script>
			<script src="<?= $config->urls->templates ?>assets/js/jquery.dropotron.min.js"></script>
			<script src="<?= $config->urls->templates ?>assets/js/skel.min.js?ts=<?= time() ?>"></script>
			<script src="<?= $config->urls->templates ?>assets/js/skel-viewport.min.js"></script>
			<script src="<?= $config->urls->templates ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?= $config->urls->templates ?>assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?= $config->urls->templates ?>assets/js/main.js"></script>
			<script type='text/javascript' src='<?=$config->urls->templates?>scripts/blog.js?ts=<?= time() ?>'></script>
			<script type='text/javascript' src='<?=$config->urls->FieldtypeComments?>comments.min.js'></script>

	</body>
</html>