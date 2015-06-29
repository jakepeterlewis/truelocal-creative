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
		
		<?php if($page->hasVisibleChildren()): ?>
			<div class="section-categories large-padding-bottom">
				<h3>In this section</h3>
				<ul>
					<?php foreach($page->children() as $subpage): ?>
						<li>
							<a href="<?php echo $subpage->url() ?>">
								<?php echo html($subpage->title()) ?>
							</a>
							<?php if($subpage->hasVisibleChildren()): ?>
								<ul>
									<?php foreach($subpage->children() as $subpage): ?>
										<li>
											<a href="<?php echo $subpage->url() ?>">
												<?php echo html($subpage->title()) ?>
											</a>
										</li>
									<?php endforeach ?>
								</ul>
							<?php endif ?>
						</li>
					<?php endforeach ?>
				<ul>
			</div>
		<?php endif ?>
	
		<div class="main-content">
			<?php echo $page->text()->kirbytext() ?>
		</div>
		
	</div>
	
  </main>

<?php snippet('footer') ?>