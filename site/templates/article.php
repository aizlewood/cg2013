<?php snippet('header') ?>

<section class="content blogarticle">

  <article class="wrap">

		<header>
			<?php snippet('author') ?>
		</header>

		<div class="content">
			<h1 class="beta"><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
		</div>

		<div class="prevnext">
			<?php snippet('prevnext') ?>
		</div>    

  </article>
</section>

<?php snippet('footer') ?>