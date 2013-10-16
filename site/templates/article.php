<?php snippet('header') ?>

<section class="content blogarticle tight">

  <article class="wrap">

		<header>
			<?php snippet('author') ?>
		</header>

		<div class="content">
			<h1 class="beta"><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
		</div>

		<div class="tags">
			Tagged with: <?php foreach(str::split($page->tags()) as $tag): ?>
				<a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
			<?php endforeach ?>
		</div>

		<div class="prevnext">
			<?php snippet('prevnext') ?>
		</div>    

  </article>
</section>

<?php snippet('footer') ?>