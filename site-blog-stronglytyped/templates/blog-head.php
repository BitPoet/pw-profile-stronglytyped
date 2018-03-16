<!DOCTYPE HTML>
<!--
	This ProcessWire Blog Profile is based on:
		Strongly Typed by HTML5 UP
		html5up.net | @ajlkn
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title><?= $blogSettings->blog_headline ?> | <?= $page->title ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?= $config->urls->templates ?>assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?= $config->urls->templates ?>assets/css/main.css?ts=<?= time() ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?= $config->urls->templates ?>assets/css/ie8.css" /><![endif]-->
		<link rel='stylesheet' type='text/css' href='<?=$config->urls->FieldtypeComments?>comments.css' />
		<link rel='stylesheet' type='text/css' href='<?=$config->urls->templates?>styles/blog.css' />
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?= $pages->get('/posts/')->httpUrl ?>rss/" />
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo">
								<a href="<?= $config->urls->root ?>" style="color: <?= $blogSettings->blog_header_fgcolor ?>;">
									<?= $blogSettings->blog_headline ?>
								</a>
							</h1>
							<p><?= $blogSettings->blog_summary ?></p>

						<!-- Nav -->
							<?php include('blog-nav.php'); ?>

					</div>
				</div>

