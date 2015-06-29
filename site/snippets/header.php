<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
	<?php echo css('assets/css/style.css') ?>

</head>
<body>

	<header class="header cf" role="banner">
		<a class="logo-wrapper medium-padding" href="<?php echo url() ?>">
			<div class="logo">
				<?php echo $site->title()->html() ?>
			</div>
			<p>
				<?php echo $site->subheading()->html() ?>
			</p>
		</a>

		<div class="nav-wrapper medium-padding">
			<?php snippet('menu') ?>
		</div>
	</header>