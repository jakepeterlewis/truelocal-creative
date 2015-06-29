<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="page-heading large-padding">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->subheading()->kirbytext() ?>
    </div>
	
	<div class="page-content large-padding">
		
		<div class="downloads-content large-padding-bottom">
			<?php echo $page->downloadText()->kirbytext() ?>
		</div>
	
		<div class="change-log-content large-padding-bottom">
			<?php echo $page->changeLogText()->kirbytext() ?>
		</div>
	
		<div class="main-content">
			<?php echo $page->text()->kirbytext() ?>
		</div>
		
	</div>

  </main>

<?php snippet('footer') ?>